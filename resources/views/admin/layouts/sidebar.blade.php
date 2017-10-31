<div class="logo">
    <a href="http://www.kidstimebd.com" class="simple-text">
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
                <p>Center</p>
            </a>
        </li>
        <li class="">
            <a href="{{route('course.index')}}">
                <i class="material-icons">list</i>
                <p>Course</p>
            </a>
        </li>
        <li class="">
            <a href="/admin/enrollment">
                <i class="material-icons"></i>
                <p>Enrollment</p>
            </a>
        </li>
        <li class="">
            <a href="/admin/user">
                <i class="material-icons"></i>
                <p>User</p>
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
