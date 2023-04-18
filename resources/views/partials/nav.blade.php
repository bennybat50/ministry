<a href="/" class="nav-link" role="button" aria-expanded="false">Home </a>
@foreach($pages as $page)
@if (count($page->children))
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ $page->title }} <span class="caret"></span> </a>

    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        {{-- <a href="{{ $page->url }}" class="dropdown-item">{{ $page->title }}</a> --}}

        @foreach ( $page->children as $child)
        <a href="{{ $child->url }}"  class="dropdown-item">{{ $child->title }}</a>
        @endforeach
    </div>
</li>
@else
<li class="nav-item">
    <a href="{{ $page->url }}" class="nav-link" role="button" aria-expanded="false">{{ $page->title }} </a>
</li>
@endif
@endforeach
