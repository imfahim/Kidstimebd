<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>JS FEED</title>
  </head>
  <body>
    <h1>Select box for showing center name</h1>
    <!-- Ei select box e ashe center name if you uncomment -->
    <select id="select-center-name" name="center-name"></select>

    <br />
    <br />
    <h1>How to input from the form</h1>
    <form method="POST" action="http://localhost:8000/api/centers">
      {{ csrf_field() }}
      <input type="hidden" name="center_id" value="3100" />
      <span>Name</span>
      <input type="text" name="name" />
      <span>Location</span>
      <input type="text" name="location" />
      <span>Address</span>
      <input type="text" name="address" />
      <input type="submit" value="Create" />
    </form>
  </body>
  @include('admin.layouts.scripts')
  <script src="{{ asset('js/testing/main.js') }}" type="text/javascript"></script>
</html>
