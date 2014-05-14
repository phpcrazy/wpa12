<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		LarBookShop
	</title>
	{{ HTML::style('css/bootstrap.css') }}
	<script src="http://localhost/advanceclass/larbookshop/public/js/jquery.js"></script>
	<script src="http://localhost/advanceclass/larbookshop/public/js/bootstrap.js"></script>
</head>
<body>	
	<div class="container">
		<div class="row">
			@if(Session::has('message'))
			<div class="alert alert-danger">
				{{ Session::get('message')}}
			</div>
		</div>
		@endif
		@yield('content')
	</div>
</body>
</html>