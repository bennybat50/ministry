<?php

namespace App\Providers;

use App\Models\ContentLibary;
use App\Models\Pages;
use App\Models\Post;
use App\Models\SiteItems;
use Carbon\Carbon;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));

            $siteItems = SiteItems::all();
            foreach (Pages::all() as $page) {
                if ($page->main_content == "gallery" || $page->main_content == "document") {

                    $allGallery = ContentLibary::where('slug', $page->url)->where("created_at", "<", Carbon::now())->orderBy("created_at", 'desc')->paginate(10);

                    Route::view($page->url, 'home.page', ["page_title" => $page->title, 'page' => $page, "allGallery" => $allGallery, "siteItems" => $siteItems]);

                } else if ($page->main_content == "post") {

                    $allNews = Post::where('slug', $page->url)->where("created_at", "<", Carbon::now())->orderBy("created_at", 'desc')->paginate(10);

                    Route::view($page->url, 'home.page', ["page_title" => $page->title, 'page' => $page, "allNews" => $allNews, "siteItems" => $siteItems]);
                } else {
                     Route::view($page->url, 'home.page', ["page_title" => $page->title, 'page' => $page, "siteItems" => $siteItems]);
                }

            }
        });
    }

    /**
     * Configure the rate limiters for the application.
     *
     * @return void
     */
    protected function configureRateLimiting()
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });
    }
}
