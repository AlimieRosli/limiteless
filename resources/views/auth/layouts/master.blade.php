<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Limitless</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
  <link href="css/layout.min.css" rel="stylesheet" type="text/css">
  <link href="css/components.min.css" rel="stylesheet" type="text/css">
  <link href="css/colors.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

</head>

<body>
  @include('view-partials.top-bar-auth')
  <div class="content">
    @yield('content')
  </div>
  @include('view-partials.footer')

    {{-- Laravel Mix - JS File --}}
    {{-- <script src="{{ mix('js/ref.js') }}"></script> --}}

    <!-- Core JS files -->
    <script src="assets/js/main/jquery.min.js"></script>
    <script src="assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="assets/js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="assets/js/plugins/forms/styling/uniform.min.js"></script>

    <script src="js/app.js"></script>
    <script src="assets/js/demo_pages/login.js"></script>
    <!-- /theme JS files -->
</body>

</html>
