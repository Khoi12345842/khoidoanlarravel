<header class="header">
    <div class="logo">
        <a href="/">
            <img src="{{ asset('images/savani-logo.png') }}" alt="Savani Logo" style="height: 40px;">
        </a>
    </div>
    {{-- <nav class="navbar">
        <ul class="main-menu">
            <li class="menu-item">
                <a href="#">NAM</a>
                <ul class="submenu">
                    <li><a href="#">Áo Nam</a></li>
                    <li><a href="#">Quần Nam</a></li>
                    <li><a href="#">Phụ Kiện</a></li>
                </ul>
            </li>
            <li class="menu-item">
                <a href="#">NỮ</a>
                <ul class="submenu">
                    <li><a href="#">Áo Nữ</a></li>
                    <li><a href="#">Quần Nữ</a></li>
                    <li><a href="#">Phụ Kiện</a></li>
                </ul>
            </li>
            <li class="menu-item"><a href="#">TRẺ EM</a></li>
            <li class="menu-item"><a href="#">ĐỒNG PHỤC</a></li>
            <li class="menu-item"><a href="#">BỘ SƯU TẬP</a></li>
            <li class="menu-item"><a href="#">SALE OFF</a></li>
            <li class="menu-item"><a href="#">SHOWROOM</a></li>
            <li class="menu-item"><a href="#">TIN TỨC</a></li>
        </ul>
    </nav> --}}
    <nav class="navbar">
        <ul class="nav-menu">
            @foreach($menus as $menu)
                <li class="nav-item {{ $menu->children->isNotEmpty() ? 'has-dropdown' : '' }}">
                    <a href="{{ $menu->link }}" 
                       class="{{ request()->is(str_replace('/', '', $menu->link)) ? 'active' : '' }}"
                       {{ $menu->new_tab ? 'target="_blank"' : '' }}>
                        {{ $menu->title }}
                    </a>
                    @if($menu->children->isNotEmpty())
                        <ul class="dropdown-menu">
                            @foreach($menu->children as $child)
                                <li>
                                    <a href="{{ $child->link }}"
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