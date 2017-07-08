<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Laracarte</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{-- Latest compiled and minified CSS --}}
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        {{-- Optional theme --}}
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        {{-- Font-awesome --}}
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        {{--  Google font--}}
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"> 
        <style type="text/css" media="screen">
            body{
                font-family: 'Open Sans', Helvetica, sans-serif;
            }
        </style>
    </head>
    <body>
    	@include('layouts/partials/_nav')
        @yield('content')
		@include('layouts/partials/_footer')
		<script src="//code.jquery.com/jquery.min.js"></script>
        {{-- Latest compiled and minified JavaScript --}}
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>