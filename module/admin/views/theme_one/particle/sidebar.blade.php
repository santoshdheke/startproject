<li class="nav-item">
    <a href="{{ route('admin.dashboard.index') }}" class="nav-link{{ Request::is('dashboard')?' active':'' }}">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
            Dashboard
        </p>
    </a>
</li>

<li class="nav-item{{ Request::is('language*')?' menu-open':'' }}">
    <a href="#" class="nav-link{{ Request::is('language*')?' active':'' }}">
        <i class="nav-icon fas fa-flag"></i>
        <p>
            Language
            <i class="right fas fa-angle-left"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a href="{{ route('admin.language.index') }}" class="nav-link{{ Request::is('language')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>List</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.language.create') }}" class="nav-link{{ Request::is('language/create')?' active':'' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
            </a>
        </li>
    </ul>
</li>
