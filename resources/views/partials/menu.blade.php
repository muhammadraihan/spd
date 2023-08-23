<ul id="js-nav-menu" class="nav-menu">
    <li>
        <a href="{{route('backoffice.dashboard')}}" title="Dashboard" data-filter-tags="dashboard">
            <i class="fal fa-desktop"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{route('slide.index')}}" title="Slide" data-filter-tags="Slide">
            <i class="fal fa-warehouse"></i>
            <span class="nav-link-text">Slide</span>
        </a>
    </li>
    <li>
        <a href="{{route('home.index')}}" title="Home" data-filter-tags="Home">
            <i class="fal fa-warehouse"></i>
            <span class="nav-link-text">Home</span>
        </a>
    </li>
    <li>
        <a href="{{route('service.index')}}" title="Service" data-filter-tags="Service">
            <i class="fal fa-warehouse"></i>
            <span class="nav-link-text">Service</span>
        </a>
    </li>
    <li>
        <a href="{{route('client.index')}}" title="Client" data-filter-tags="Client">
            <i class="fal fa-warehouse"></i>
            <span class="nav-link-text">Client</span>
        </a>
    </li>
    <li>
        <a href="{{route('about_slide.index')}}" title="About Slide" data-filter-tags="About Slide">
            <i class="fal fa-warehouse"></i>
            <span class="nav-link-text">About Slide</span>
        </a>
    </li>
    <li>
        <a href="{{route('sub_brand.index')}}" title="Sub Brand" data-filter-tags="Sub Brand">
            <i class="fal fa-warehouse"></i>
            <span class="nav-link-text">Sub Brand</span>
        </a>
    </li>
    @isset($menu)
    @foreach ($menu as $parent_menu)
    <li class="">
        <a href="{{$parent_menu->route_name ? route($parent_menu->route_name): '#'}}"
            title="{{$parent_menu->menu_title ? $parent_menu->menu_title:''}}">
            <i class="{{$parent_menu->icon_class ? $parent_menu->icon_class:''}}"></i>
            <span class="nav-link-text">{{$parent_menu->menu_title ?$parent_menu->menu_title:''}}</span>
        </a>
        @if (count($parent_menu->childs))
        <ul>
            @include('partials.submenu',['submenu' => $parent_menu->childs])
        </ul>
        @endif
    </li>
    @endforeach
    @endisset
</ul>