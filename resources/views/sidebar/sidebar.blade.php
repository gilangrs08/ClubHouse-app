<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Menu</span>
                </li>
                <li class="{{set_active(['setting/page'])}}">
                    <a href="{{ route('setting/page') }}">
                        <i class="fas fa-cog"></i> 
                        <span>Settings</span>
                    </a>
                </li>
                <li class="submenu {{set_active(['home','teacher/dashboard','student/dashboard'])}}">
                    <a href="#"><i class="feather-grid"></i>
                        <span> Dashboard</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('home') }}" class="{{set_active(['home'])}}">Admin</a></li>
                        <li><a href="{{ route('student/dashboard') }}" class="{{set_active(['student/dashboard'])}}">Pengunjung</a></li>
                    </ul>
                </li>
                @if (Session::get('role_name') === 'Admin' || Session::get('role_name') === 'Super Admin')
                <li class="submenu {{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-shield-alt"></i>
                        <span>data user</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('list/users') }}" class="{{set_active(['list/users'])}} {{ (request()->is('view/user/edit/*')) ? 'active' : '' }}">List User</a></li>
                    </ul>
                </li>
                @endif

                <li class="submenu {{set_active(['student/list','student/grid','student/add/page'])}} {{ (request()->is('student/edit/*')) ? 'active' : '' }} {{ (request()->is('student/profile/*')) ? 'active' : '' }}">
                    <a href="#"><i class="fas fa-graduation-cap"></i>
                        <span>Pengunjung</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('student/list') }}"  class="{{set_active(['student/list','student/grid'])}}">List Pengunjung</a></li>
                        <li><a href="{{ route('student/add/page') }}" class="{{set_active(['student/add/page'])}}">Data Pengunjung</a></li>
                        <li><a class="{{ (request()->is('student/edit/*')) ? 'active' : '' }}">Edit Pengunjung</a></li>
                    </ul>
                </li>
                
                <li class="submenu {{set_active(['department/add/page','department/edit/page'])}}">
                    <a href="#"><i class="fas fa-building"></i>
                        <span>Fasilitas</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul>
                        <li><a href="{{ route('department/list/page') }}" class="{{set_active(['department/list/page'])}}">List Fasilitas</a></li>
                        <li><a href="{{ route('department/add/page') }}" class="{{set_active(['department/add/page'])}}">Data Fasilitas</a></li>
                        <li><a href="{{ route('department/edit/page') }}" class="{{set_active(['department/edit/page'])}}">Edit Fasilitas</a></li>
                    </ul>
                </li>
                <li class="submenu">
                <li class="menu-title">
                    <span>Management</span>
                </li>
        </div>
    </div>
</div>