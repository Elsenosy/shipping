<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
        data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">

            <li class="menu-item {{ request()->route()->getName() == 'priceRequests' ? 'menu-item-active' : 'menu-item' }}"
                aria-haspopup="true">
                <a href="{{ route('priceRequests') }}" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <!--begin  Icon -->
                        <i class="fas fa-cogs"></i>
                        <!--end Icon-->
                    </span>
                    <span class="menu-text">طلبات التسعير</span>
                </a>
            </li>

        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>