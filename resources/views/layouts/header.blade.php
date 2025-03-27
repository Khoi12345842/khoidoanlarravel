<header class="header">
    <div class="logo">
        <a href="/">
            <img src="{{ asset('images/savani-logo.png') }}" alt="Savani Logo" style="height: 40px;">
        </a>
    </div>
    <nav class="navbar">
        <ul class="nav-menu">
            @foreach($menus as $menu)
                <li class="nav-item {{ $menu->children->isNotEmpty() ? 'has-dropdown' : '' }}">
                    <a href="{{ $menu->router ? route($menu->router, $menu->params) : '#' }}"
                       class="{{ request()->routeIs($menu->router) ? 'active' : '' }}"
                       {{ $menu->new_tab ? 'target="_blank"' : '' }}>
                        {{ $menu->title }}
                    </a>
                    @if($menu->children->isNotEmpty())
                        <ul class="dropdown-menu">
                            @foreach($menu->children as $child)
                                <li>
                                    <a href="{{ $child->router ? route($child->router, $child->params) : '#' }}"
                                       {{ $child->new_tab ? 'target="_blank"' : '' }}>
                                        {{ $child->title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
    <div class="search-cart">
        <div class="search-box">
            <a href="#" class="search-icon" id="search-toggle">
                <img src="{{ asset('images/search-icon.png') }}" alt="Search" style="height: 20px;">
            </a>
            <input type="text" class="search-input" placeholder="Tìm kiếm sản phẩm..." style="display: none;">
        </div>
        <a href="#" class="cart-icon">
            <img src="{{ asset('images/cart-icon.png') }}" alt="Cart" style="height: 20px;">
            <span class="cart-count">0</span>
        </a>
        <div class="user-box">
            <a href="{{ route('admin.login') }}" class="user-icon" id="user-toggle">
                <img src="{{ asset('images/user-icon.png') }}" alt="User" style="height: 20px;">
            </a>
        </div>
    </div>
</header>