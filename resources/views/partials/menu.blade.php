<ul id="js-nav-menu" class="nav-menu">
    <li>
        <a href="{{route('backoffice.dashboard')}}" title="Dashboard" data-filter-tags="dashboard">
            <i class="fal fa-desktop"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li>
        <a href="#" title="Media" data-filter-tags="Media">
            <i class="fal fa-home"></i>
            <span class="nav-link-text">Homepages</span>
        </a>
        <ul>
            <li>
                <a href="{{route('slide.index')}}" title="Slide" data-filter-tags="Slide">
                    <i class="fal fa-clone"></i>
                    <span class="nav-link-text">Slide</span>
                </a>
            </li>
            <li>
                <a href="{{route('home.index')}}" title="Home" data-filter-tags="Home">
                    <i class="fal fa-home"></i>
                    <span class="nav-link-text">Home</span>
                </a>
            </li>
            <li>
                <a href="{{route('service.index')}}" title="Service" data-filter-tags="Service">
                    <i class="fal fa-shopping-bag"></i>
                    <span class="nav-link-text">Service</span>
                </a>
            </li>
            <li>
                <a href="{{route('client.index')}}" title="Client" data-filter-tags="Client">
                    <i class="fal fa-users"></i>
                    <span class="nav-link-text">Client</span>
                </a>
            </li>
        </ul>
    </li>
    
    <li>
        <a href="{{route('about_slide.index')}}" title="GIF Management" data-filter-tags="GIF Management">
            <i class="fal fa-play-circle"></i>
            <span class="nav-link-text">GIF Management</span>
        </a>
    </li>
    <li>
        <a href="{{route('sub_brand.index')}}" title="Sub Brand" data-filter-tags="Sub Brand">
            <i class="fal fa-tags"></i>
            <span class="nav-link-text">Sub Brand</span>
        </a>
    </li>
    
    
    <li>
        <a href="#" title="Media" data-filter-tags="Media">
            <i class="fal fa-tasks"></i>
            <span class="nav-link-text">Our Works</span>
        </a>
        <ul>
            <li>
                <a href="{{route('kategori_brand.index')}}" title="Kategori Brand" data-filter-tags="Kategori Brand">
                    <i class="fal fa-tag"></i>
                    <span class="nav-link-text">Kategori Brand</span>
                </a>
            </li>
            <li>
                <a href="{{route('brand.index')}}" title="Brand" data-filter-tags="Brand">
                    <i class="fal fa-barcode-alt"></i>
                    <span class="nav-link-text">Brand</span>
                </a>
            </li>
            <li>
                <a href="{{route('content.index')}}" title="Content" data-filter-tags="Content">
                    <i class="fal fa-desktop-alt"></i>
                    <span class="nav-link-text">Content</span>
                </a>
            </li>
        </ul>
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