<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard.index') }}" class="app-brand-link">
            {{-- <span class="app-brand-logo demo">
                <img src="{{$setting->app_logo}}" alt="Logo" style="width: 200px; height:200px;">
            </span> --}}
            {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboard -->
        <li class="menu-item active">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>

        <!-- Layouts -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Layouts">Pages</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('page.home') }}" class="menu-link">
                        <div data-i18n="Without menu">Home Page Manager</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('page.about') }}" class="menu-link">
                        <div data-i18n="Without navbar">About Page</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('page.setting.index') }}" class="menu-link">
                        <div data-i18n="Container">Page Setting</div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="{{ route('contact.index') }}" class="menu-link">
                <i class='menu-icon bx bxs-contact'></i>
                <div data-i18n="Basic">Contact</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{ route('hire.index') }}" class="menu-link">
                <i class="menu-icon bx bx-spreadsheet"></i>

                <div data-i18n="Basic">Quotations</div>
            </a>
        </li>
        <li class="menu-item">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxs-file-plus'></i>
                <div data-i18n="Authentications">Application</div>
            </a>
            <ul class="menu-sub">
                {{-- <li class="menu-item">
                        <a href="{{route('schedule-interview.create')}}" class="menu-link">
                            <div data-i18n="Basic">Schedule Interviews</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('schedule-interview.upcoming')}}" class="menu-link">
                            <div data-i18n="Basic">Upcoming Interviews</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="{{route('schedule-interview.index')}}" class="menu-link">
                            <div data-i18n="Basic">View All Interviews</div>
                        </a>
                    </li> --}}
                <li class="menu-item">
                    <a href="{{ route('application.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Application</div>
                    </a>
                </li>
            </ul>
        </li>
        </li>
        <li class="menu-item">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                {{-- <i class="menu-icon tf-icons bx bx-product-hunt"></i> --}}
                <i class='menu-icon bx bxl-product-hunt'></i>
                <div data-i18n="Authentications">Product</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('product.create') }}" class="menu-link">
                        <div data-i18n="Basic">Add New Product</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('product.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Products</div>
                    </a>
                </li>
            </ul>
        </li>
        </li>
        <li class="menu-item">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                {{-- <i class="menu-icon tf-icons bx bx-product-hunt"></i> --}}
                <i class='menu-icon bx bxl-product-hunt'></i>
                <div data-i18n="Authentications">Project</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('project.create') }}" class="menu-link">
                        <div data-i18n="Basic">Add New Project</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('project.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Projects</div>
                    </a>
                </li>
            </ul>
        </li>
        </li>

        {{-- <li class="menu-item" {{ Route::is('order.index') ? 'active' : '' }}>
            <a href="{{ route('order.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
                <div data-i18n="Without navbar">View All Qoutations</div>
            </a>
        </li> --}}
        <li class="menu-item">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Service</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('service.create') }}" class="menu-link">
                        <div data-i18n="Basic">Add New Service</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('service.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Services</div>
                    </a>
                </li>
            </ul>
        </li>
        </li>
        <li class="menu-item">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-spreadsheet"></i>
                <div data-i18n="Authentications">Process</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('process.create') }}" class="menu-link">
                        <div data-i18n="Basic">Add Process</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('process.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Process</div>
                    </a>
                </li>
            </ul>
        </li>
        </li>
        <li class="menu-item">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxl-blogger"></i>
                <div data-i18n="Authentications">Blogs</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('blog.create') }}" class="menu-link">
                        <div data-i18n="Basic">Add New Blog</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('blog.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Blogs</div>
                    </a>
                </li>
            </ul>
        </li>
        </li>
        <li class="menu-item">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxl-microsoft-teams"></i>
                <div data-i18n="Authentications">Team</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('team.create') }}" class="menu-link">
                        <div data-i18n="Basic">Add Member</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('team.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Members</div>
                    </a>
                </li>
            </ul>
        </li>
        </li>

        <li class="menu-item">
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-network-chart"></i>
                <div data-i18n="Authentications">Career</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('career.create') }}" class="menu-link">
                        <div data-i18n="Basic">Add New Opening</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('career.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Openings</div>
                    </a>
                </li>
                                <li class="menu-item">
                    <a href="{{ route('career-category.create') }}" class="menu-link">
                        <div data-i18n="Basic">Add New Category</div>
                    </a>
                </li>
                                <li class="menu-item">
                    <a href="{{ route('career-category.index') }}" class="menu-link">
                        <div data-i18n="Basic">View All Categories</div>
                    </a>
                </li>
            </ul>
        </li>
        </li>



        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Setting</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cog"></i>
                <div data-i18n="Settings">Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('setting.index') }}" class="menu-link">
                        <div data-i18n="Setting">General Setting</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{ route('template.index') }}" class="menu-link">
                        <div data-i18n="Setting">Email Template</div>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
