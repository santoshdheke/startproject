<li class="nav-item">
    <a href="{{ route('marketing.dashboard.index') }}" class="nav-link{{ Request::is('dashboard')?' active':'' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>
<li class="nav-item{{ Request::is('hotel*')?'  menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('hotel*')?' active':'' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>
            Hotel
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('marketing.hotel.index') }}" class="nav-link{{ Request::is('hotel')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('marketing.hotel.create') }}" class="nav-link{{ Request::is('hotel/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>