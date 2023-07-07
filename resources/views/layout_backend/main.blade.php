<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
@include('layout_backend.partials.head')
</head>

<body>
    <!-- This is a aside nav bar -->
@include('layout_backend.partials.leftpanel') 
<!-- This is a top navigation -->
@include('layout_backend.partials.rightpanel')
<!-- This is the main -->
@yield('content')

@include('layout_backend.partials.scripts')

</body>

</html>