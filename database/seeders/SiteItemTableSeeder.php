<?php

namespace Database\Seeders;

use App\Models\SiteItems;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SiteItems::truncate();
        SiteItems::create(["url"=>"", "text"=>"Phase 1, Federal Secretariat Complex, Abuja, Nigeria.", "category"=>"address","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"", "text"=>"info@health.gov.ng, report@health.gov.ng", "category"=>"email","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"", "text"=>"09-1234567  +234 803 456 7890", "category"=>"phone","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"/", "text"=>"Home", "category"=>"quick_links","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"/press-releases", "text"=>"Press Releases", "category"=>"quick_links","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"/contact", "text"=>"Contact Us", "category"=>"quick_links","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"/food-drug", "text"=>"Food And Drug Services", "category"=>"departments","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"/hospital-services", "text"=>"Hospital Services", "category"=>"departments","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"https://facebook.com", "text"=>"assets/img/face.webp", "category"=>"social","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"https://twitter.com", "text"=>"assets/img/twi.png", "category"=>"social","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"https://youtube.com", "text"=>"assets/img/R.png", "category"=>"social","site_area"=>"footer", ]);
        SiteItems::create(["url"=>"/", "text"=>"/assets/img/FMOH-logo-lg.jpg", "category"=>"logo","site_area"=>"footer", ]);

        SiteItems::create(["url"=>"/", "text"=>"/assets/img/FMOH-logo-lg.jpg", "category"=>"logo","site_area"=>"top_bar", ]);
        SiteItems::create(["url"=>"", "text"=>"Phase 1, Federal Secretariat Complex, Abuja, Nigeria.", "category"=>"address","site_area"=>"top_bar", ]);

        SiteItems::create(["url"=>"", "text"=>"Report It", "category"=>"links","site_area"=>"top_bar", ]);
        SiteItems::create(["url"=>"", "text"=>"Staff Only", "category"=>"links","site_area"=>"top_bar", ]);

        SiteItems::create(["url"=>"", "text"=>"Covid 19", "category"=>"links","site_area"=>"top_bar", ]);

        SiteItems::create(["url"=>"", "text"=>"Health Toll Free Number: 144", "category"=>"links","site_area"=>"top_bar", ]);

        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "category"=>"images","site_area"=>"carosel", ]);
        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "category"=>"images","site_area"=>"carosel", ]);
        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "category"=>"images","site_area"=>"carosel", ]);
        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "category"=>"images","site_area"=>"carosel", ]);
        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "category"=>"images","site_area"=>"carosel", ]);
        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "category"=>"images","site_area"=>"carosel", ]);

        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "sub_text"=>"DHIS2Nigeria", "category"=>"images_text","site_area"=>"project", ]);
        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "sub_text"=>"Health Facility Registry","category"=>"images_text","site_area"=>"project", ]);
        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg", "sub_text"=>"Yellow Card","category"=>"images_text","site_area"=>"project", ]);

        SiteItems::create(["url"=>"", "text"=>"COVID 19 Latest News, Resources & Updates",  "category"=>"text","site_area"=>"info_center", ]);
        SiteItems::create(["url"=>"", "text"=>"COVID 19 Self Assessment",  "category"=>"text","site_area"=>"info_center", ]);
        SiteItems::create(["url"=>"", "text"=>"COVID 19 Vaccination Online Form ",  "category"=>"text","site_area"=>"info_center", ]);

        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg",   "sub_text"=>"download vital health promotions papers", "category"=>"images_text","site_area"=>"promotions", ]);
        SiteItems::create(["url"=>"", "text"=>"/uploads/1670049984.jpg",   "sub_text"=>"healthy, policy assistive, guidlines reform etc", "category"=>"images_text","site_area"=>"downloads", ]);

    }
}
