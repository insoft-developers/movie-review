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

            <li class="nav-category">settings</li>

            <li>
                <a href="pages/apps/chat.html">
                    <i class="icofont-automation"></i>
                    <span class="link-title">General Setting</span>
                </a>
            </li>
            <li class="nav-category">admins</li>

            <li>
                <a href="pages/apps/chat.html">
                    <i class="icofont-contacts"></i>
                    <span class="link-title">Admin List</span>
                </a>
            </li>
            {{-- <li>
                     <a href="#">
                        <i class="icofont-listing-box"></i>
                        <span class="link-title">To Do List</span>
                     </a>

                     <!-- Sub Menu -->
                     <ul class="nav sub-menu">
                        <li><a href="pages/apps/todolist/todolist.html">Tasks</a></li>
                        <li><a href="pages/apps/todolist/add-new.html">add new</a></li>
                        <li><a href="pages/apps/todolist/task-details.html">details</a></li>
                     </ul>
                     <!-- End Sub Menu -->
                  </li> --}}


            <li class="nav-category">Support</li>
        </ul>
        <!-- End Nav -->
    </div>
    <!-- End Sidebar Body -->
</nav>
<!-- End Sidebar -->
