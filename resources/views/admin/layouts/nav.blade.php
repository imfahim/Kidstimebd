<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">@yield('title')</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">dashboard</i>
                        <p class="hidden-lg hidden-md">Dashboard</p>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="{{ route('admin.dashboard') }}"><i class="material-icons">home</i>&nbsp; Home</a>
                      </li>
                      <li>
                        <a href="http://kidstimebd.com" target="_blank"><i class="material-icons">near_me</i>&nbsp; Main Site</a>
                      </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">Profile</p>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="{{route('profile.index')}}"><i class="material-icons">account_circle</i>&nbsp; Profile</a>
                      </li>
                      <li>
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>&nbsp; Logout</a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       {{ csrf_field() }}
                                   </form>
                      </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
