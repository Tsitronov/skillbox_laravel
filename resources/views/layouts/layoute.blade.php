<!DOCTYPE html>
<html lang="en" id="">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>{{config('app.name')}}</title>
	<link rel="stylesheet" href="/css/app.css">
</head>
<body>
	@include('layouts.nav')
	@yield('content')
	@include('layouts.footer')
</body>
</html>