<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrace přihlášených na konferenci</title>
	<style>

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

	</style>
</head>
<body>

	@if (Session::get('flash_message'))
		<div class="flash">
			{{ Session::get('flash_message') }}
		</div>
	@endif

	<div class="container">
		@yield('content')
	</div>
</body>
</html>

