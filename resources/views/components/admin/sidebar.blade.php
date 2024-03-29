
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
    <!--begin::Brand-->
    <div class="brand flex-column-auto" id="kt_brand">
        <!--begin::Logo-->
        <a href="{{route('admin.dashboard')}}" class="brand-logo">
            <img alt="Logo" width="90px"
                 src="{{ asset('assets/global/image/logo.png') }}"/>
        </a>
        <!--end::Logo-->
    </div>
    <!--end::Brand-->
    <!--begin::Aside Menu-->
    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
        <!--begin::Menu Container-->
        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1"
             data-menu-dropdown-timeout="500">
            <!--begin::Menu Nav-->
            <ul class="menu-nav">
                <li class="menu-item {{ Request::is('admin/dashboard') ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.dashboard')}}" class="menu-link">
                        <i class="menu-icon flaticon2-architecture-and-city"></i>
                        <span style="font-size: 15px;font-weight: bold" class="menu-text news">Dashboard</span>
                    </a>
                </li>

                <li class="menu-item {{ (Request::is('admin/users') or Request::is('admin/users/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.users.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-user"></i>
                        <span style="font-size: 15px;" class="menu-text">Users</span>
                    </a>
                </li>

                <li class="menu-item {{ (Request::is('admin/departments') or Request::is('admin/departments/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.departments.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-shield"></i>
                        <span style="font-size: 15px;" class="menu-text">Departments</span>
                    </a>
                </li>

                <li class="menu-item {{ (Request::is('admin/expenses') or Request::is('admin/expenses/*')) ? 'menu-item-active' : '' }}" aria-haspopup="true">
                    <a href="{{route('admin.expenses.index')}}" class="menu-link">
                        <i class="menu-icon flaticon2-sheet"></i>
                        <span style="font-size: 15px;" class="menu-text">Expenses</span>
                    </a>
                </li>



            </ul>
            <!--end::Menu Nav-->
        </div>
        <!--end::Menu Container-->
    </div>
    <!--end::Aside Menu-->
</div>
