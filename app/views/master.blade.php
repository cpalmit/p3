<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield("title","Developer's Best Friend")</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">	
</head>
<body>
	<div class="container">
	<h1>Developer's Best Friend</h1>
	<p>Developer's Best Friend includes two services every developer needs - a Lorem Ipsum 
generator and a random user generator.
	</p>
	
	<p>Would you rather generate <a href="/lipsum">lorem ipsum text</a> or <a href="/users">random users</a>?</p>
	@yield("content")
	</div>
</body>
</html>
