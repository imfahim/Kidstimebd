<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    @include('admin.layouts.head')

    @include('admin.layouts.styles')

    @yield('page-styles')
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
          @include('admin.layouts.sidebar')

        </div>
        <div class="main-panel">
            @include('admin.layouts.nav')

            <div class="content">
              @include('admin.layouts.messages')

        			@yield('content')
      			</div>

            @include('admin.layouts.footer')
        </div>
    </div>
</body>

@include('admin.layouts.scripts')

@yield('page-scripts')

</html>
