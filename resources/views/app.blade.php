<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    
        <title>{{ isset($pageName) ? $pageName." - " : "" }} {{ env('ORG_NAME') }}</title>
        
        <meta name="author" content="Harris Christiansen">
        <meta name="description" content="{{ env('ORG_NAME') }} - Members and Events Portal">
        <meta name="keywords" content="{{ env('ORG_KEYWORDS') }}">

        <!-- BValidator -->
        <link href="/css/bvalidator.css" rel="stylesheet" type="text/css" />
        
        <!-- jQuery UI -->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        
        <!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		
		<!-- Bootstrap IE8 Support -->
	    <!--[if lt IE 9]>
	    	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    
	    <!-- Fonts -->
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href='//fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
	    
	    <!-- Portal Site CSS -->
	    <link rel="stylesheet" type="text/css" href="/css/helloworld.css">
	    
    </head>
    <body class="index">
	    
	    @if (session()->get('authenticated_member') == "true")
	    	@include('navbar')
	    @endif
		
		<div id="pageWrap">
		
		@if (session()->has('msg'))
		<div class='container' style="margin-top: 60px;">
			<div class="alert alert-success" role="alert">{{ session()->get('msg') }}</div>
			<?php session()->forget('msg'); ?>
		</div>
		@endif
		
		@if ($view_name != "pages-home")
			<div class="container" {{ session()->has('msg') ? "" : 'style="margin-top: 60px;"' }}>
			@yield('content')
			</div>
		@else
			@yield('content')
		@endif
		
		</div>
		
		@include('footer')
		
		<!-- jQuery / jQuery UI -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<!-- BValidator -->
		<script type="text/javascript" src="/js/jquery.bvalidator-yc.js"></script>
		<!-- Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- Site JS -->
		@if (isset($eventID))
		<script type="text/javascript">
			var eventID = {{ $eventID }};
		</script>
		@endif
		<script type="text/javascript" src="/js/membersportal.js"></script>
		<!-- Page Specific JS -->
		@yield('customJS')
    </body>
</html>