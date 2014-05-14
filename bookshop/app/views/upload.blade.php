<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>File Upload</title>
</head>
<body>
	{{ Form::open(array('url' => 'upload', 'files' => true)) }}
		{{ Form::file('file') }}	
		{{ Form::submit('Submit') }}
	{{ Form::close() }}
</body>
</html>