<div class="logo">
    <a href="{{ url('/') }}" class="simple-text">
        Kids Time BD
    </a>
</div>
<div class="sidebar-wrapper">
    <ul class="nav">
        <li class="{{ Request::url() === route('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}">
                <i class="material-icons">dashboard</i>
                <p>Dashboard</p>
            </a>
        </li>
        <li class="{{ (Request::url() === route('center.index') || Request::url() === route('center.create')) ? 'active' : '' }}">
            <a href="{{ route('center.index') }}">
                <i class="material-icons">place</i>
                <p>Centers</p>
            </a>
        </li>
        <li class="{{ (Request::url() === route('course.index') || Request::url() === route('course.create')) ? 'active' : '' }}">
            <a href="{{route('course.index')}}">
                <i class="material-icons">list</i>
                <p>Courses</p>
            </a>
        </li>
        <li class="{{ (Request::url() === route('enrollment.index')) ? 'active' : '' }}">
            <a href="{{ route('enrollment.index') }}">
                <i class="material-icons">assignment</i>
                <p>Enrollments</p>
            </a>
        </li>
        <li class="{{ (Request::url() === route('admin.index') || Request::url() === route('admin.create')) ? 'active' : '' }}">
            <a href="{{route('admin.index')}}">
                <i class="material-icons">people</i>
                <p>Admins</p>
            </a>
        </li>
        <li class="active-pro">
            <a href="http://kidstimebd.com" target="_blank">
                <i class="material-icons">near_me</i>
                <p>Go to Main Site</p>
            </a>
        </li>
    </ul>
</div>
