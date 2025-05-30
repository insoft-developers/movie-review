<!-- Sidebar -->
<nav class="sidebar" data-trigger="scrollbar">
    <!-- Sidebar Header -->
    <div class="sidebar-header d-none d-lg-block">
        <!-- Sidebar Toggle Pin Button -->
        <div class="sidebar-toogle-pin">
            <i class="icofont-tack-pin"></i>
        </div>
        <!-- End Sidebar Toggle Pin Button -->
    </div>
    <!-- End Sidebar Header -->

    <!-- Sidebar Body -->
    <div class="sidebar-body">
        <!-- Nav -->
        <ul class="nav">
            <li class="nav-category">Main</li>
            <li class="active">
                <a href="{{ url('mvadmin') }}">
                    <i class="icofont-pie-chart"></i>
                    <span class="link-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-category">movie management</li>

            <li>
                <a href="{{ url('mvadmin/movie') }}">
                    <i class="icofont-database"></i>
                    <span class="link-title">Movie List</span>
                </a>
            </li>
            <li>
                <a href="{{ url('mvadmin/category') }}">
                    <i class="icofont-cubes"></i>
                    <span class="link-title">Category List</span>
                </a>
            </li>
            <li>
                <a href="{{ url('mvadmin/subcategory') }}">
                    <i class="icofont-dice-multiple"></i>
                    <span class="link-title">Sub Category List</span>
                </a>
            </li>
            <li>
                <a href="{{ url('mvadmin/how_to_download') }}">
                    <i class="icofont-dice-multiple"></i>
                    <span class="link-title">How To Download</span>
                </a>
            </li>
            <li>
                <a href="{{ url('mvadmin/report_dead_link') }}">
                    <i class="icofont-dice-multiple"></i>
                    <span class="link-title">Report Dead Links</span>
                </a>
            </li>

            <li>
                <a href="{{ url('mvadmin/footer') }}">
                    <i class="icofont-dice-multiple"></i>
                    <span class="link-title">Footer</span>
                </a>
            </li>

            <li class="nav-category">settings</li>

            <li>
                <a href="{{ url('mvadmin/setting') }}">
                    <i class="icofont-automation"></i>
                    <span class="link-title">Setting</span>
                </a>
            </li>
            <li class="nav-category">admins</li>

            <li>
                <a href="{{ url('mvadmin/admin') }}">
                    <i class="icofont-contacts"></i>
                    <span class="link-title">Admin List</span>
                </a>
            </li>
           
        </ul>
        <!-- End Nav -->
    </div>
    <!-- End Sidebar Body -->
</nav>
<!-- End Sidebar -->
