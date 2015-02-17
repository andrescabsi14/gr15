<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet/less" href="/css/app.less">
	<!-- set options before less.js script -->
	<script>
	  less = {
	    env: "development",
	    async: true,
	    fileAsync: true,
	    poll: 1000,
	    functions: {},
	    dumpLineNumbers: "comments",
	    relativeUrls: false,
	  };
	</script>
	<script src="/js/less.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.3.1/less.min.js"></script>
</head>
<body>
	
	@yield('content')
	@yield('footer')

</body>
</html>