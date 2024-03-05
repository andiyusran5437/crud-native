
<html>
	<head>
			<title>Official Web Andi Yusran</title>
			<link href="assets/css/bootstrap.min.css" rel="stylesheet">
			<style type="text/css">
		body{
			background-repeat-x:no-repeat;
			background-repeat-y:no-repeat;
		}
		label{
			color:red;

		
		}
	</style>
	</head>
	<body background="assets/img/bg_home1.jpg">
			<center>
			<h3><font color="white">Login To FKP Web</font></h3>
			<h4><font color="white">Official Web</font></h4>
			</center>
			</br>
			<div class="col-md-6 col-md-offset-3">
				<form action="ceklogin.php" method="POST">
					<div class="form-group">
						<label><font color="yellow">Username</font></label>
						<input type="text" name="username" class="form-control">
					</div>
					<div class="form-group">
						<label><font color="yellow">Password</font></label>
						<input type="password" name="password" class="form-control">
					</div>
						<input type="submit" class="btn btn-danger" value="login" name="input"/>
				</form>
			</div>
	</body>
</html>
