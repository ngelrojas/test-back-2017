<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Medical & health landing page templates for online appointment that help you to medical service & patient visit">
<meta name="author" content="">
<title>@yield('title')</title>
<!-- Bootstrap Core CSS -->
<link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{ url('/') }}/css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ url('/') }}/css/font-awesome.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<!-- your favicon icon link -->
<link rel="shortcut icon" href="image/favicon.ico" type="image/x-icon" />

<!-- Custom CSS -->

</head>
<!-- The #page-top ID is part of the scrolling feature - the data-spy and data-target are part of the built-in Bootstrap scrollspy function -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

@yield('content')

<!-- Core JavaScript Files --> 
<script src="{{ url('/') }}/js/jquery-1.10.2.js"></script> 
<script src="{{ url('/') }}/js/bootstrap.min.js"></script> 
<script src="{{ url('/') }}/js/jquery.easing.min.js"></script> 
<!-- Custom Theme JavaScript --> 
<script src="{{ url('/') }}/js/scrolling-nav.js"></script> 
<script src="{{ url('/') }}/js/owl.carousel.js"></script> 

@yield('javascript')
</body>
</html>