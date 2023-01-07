<aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('dashboardindex') }}"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Dashboard</span></a></li>
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Data Mahaiswa</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link" href=" {{ route('dashboardcreate') }}">
                                <i data-feather="tag" class="feather-icon"></i><span
                                    class="hide-menu">Create 
                                </span></a>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" 
                                aria-expanded="false" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i data-feather="log-out" class="feather-icon"></i><span
                                    class="hide-menu">Logout</span></a></li>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>

            </div>
            <!-- End Sidebar scroll-->
        </aside>
        @csrf
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->