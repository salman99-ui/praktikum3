<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		body{
			padding: 30px;
		}
		
	</style>
</head>
<body>
	<h2 class="text-success">Login</h2>
	
		<form action="/success">
				<div class="form-group">
					<input id="username" type="text" name="username" class="form-control" placeholder="username">
				</div>

				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="password">
				</div>

				<div class="form-group">
					<button type="submit" id="submit" class="btn btn-success">Login</button>
				</div>
			</form>
	
</body>
</html>