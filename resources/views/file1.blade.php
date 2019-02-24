<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="{{url('insertApple')}}" method="post">
	@csrf
	<input type="color" name="color"><br>
	<input type="number" name="apple_id"><br>
	<input type="text" name="shape"><br>
	<input type="number" name="size"><br>
	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>