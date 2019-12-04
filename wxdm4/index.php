<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>链接选择</title>
	<style>
	input[type="text"]{
			padding: 10px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #22ef05;
			border-radius: 4px;
			box-sizing: border-box;
		}
		input[type="submit"]{
			border: none;
			padding: 10px 10px;
			border-radius: 5px;
			color: white;
			
		}
		@media screen and (max-width: 1080px) {
			
			em, p, input[type="submit"], input[type="text"]{
				
				font-size: 50px;
			}
			input[type="submit"]{
			border: none;
			padding: 15px 15px;
			border-radius: 7px;
			color: white;
			
		}
		input[type="text"]{
			padding: 20px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #000000;
			border-radius: 4px;
			box-sizing: border-box;
			width: 713px;
		}
		
		}
	</style>
</head>
<body>
	<form action="manage.php" method="get">
	<p>需要修改的链接</p><input type="text" name="web">
	<input type="submit" value="前往修改" style="background-color: blue;">
	</form>
</body>
</html>