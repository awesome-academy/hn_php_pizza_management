<ul class="menu-nav">
    <li class="menu-item menu-item-active" aria-haspopup="true">
        <a href="{{ route('admin.dashboard') }}" class="menu-link">
            <span class="menu-text">{{ __('admin.sidebar.dashboard') }}</span>
        </a>
    </li>
    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
        <a href="javascript:;" class="menu-link menu-toggle">
            <span class="menu-text">{{ __('admin.sidebar.categories.category') }}</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">
                <li class="menu-item menu-item-parent" aria-haspopup="true">
                    <span class="menu-link">
                        <span class="menu-text">{{ __('admin.sidebar.categories.category') }}</span>
                    </span>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('admin.category.create') }}" class="menu-link">
                        <i class="menu-bullet menu-bullet-line">
                            <span></span>
                        </i>
                        <span class="menu-text">{{ __('admin.sidebar.categories.category_add') }}</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('admin.category.index') }}" class="menu-link">
                        <i class="menu-bullet menu-bullet-line">
                            <span></span>
                        </i>
                        <span class="menu-text">{{ __('admin.sidebar.categories.category_list') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
        <a href="javascript:;" class="menu-link menu-toggle">
            <span class="menu-text">{{ __('admin.sidebar.products.product') }}</span>
            <i class="menu-arrow"></i>
        </a>
        <div class="menu-submenu">
            <i class="menu-arrow"></i>
            <ul class="menu-subnav">
                <li class="menu-item menu-item-parent" aria-haspopup="true">
                    <span class="menu-link">
                        <span class="menu-text">{{ __('admin.sidebar.products.product') }}</span>
                    </span>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="#" class="menu-link">
                        <i class="menu-bullet menu-bullet-line">
                            <span></span>
                        </i>
                        <span class="menu-text">{{ __('admin.sidebar.products.product_add') }}</span>
                    </a>
                </li>
                <li class="menu-item" aria-haspopup="true">
                    <a href="{{ route('admin.product.index') }}" class="menu-link">
                        <i class="menu-bullet menu-bullet-line">
                            <span></span>
                        </i>
                        <span class="menu-text">{{ __('admin.sidebar.products.product_list') }}</span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>
