<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">


                <li>
                    <a href="{{route('dashboard')}}" class="waves-effect">
                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="ri-calendar-2-line"></i>
                        <span>Inventory</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('category.index') }}" class="waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Category</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('item.index') }}" class="waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Item</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('users.index') }}" class="waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>User Profiles</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Asset Allocation</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('department.index')}}">Department</a></li>
                        <li><a href="{{route('facilities.index')}}">Facilities</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
