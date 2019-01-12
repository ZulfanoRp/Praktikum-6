<!DOCTYPE html>
<html>
<head>
    <title>LOGIN</title>
    	<link rel="stylesheet" type="text/css" href="fontawesome/font-awesome/css/font-awesome.min.css">
</head>
<body>

  <style type="text/css">
		body {
			margin: 0;
			padding: 0;
			background: url(qwe.jpg);
			background-size: cover;
			font-family: sans-serif;
		}
		.loginbox {
			width: 320px;
			height: 420px;
			background: rgba(0, 0, 0, 0.5);
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 70px 30px;
		h1 {
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
		}
  }
		.loginbox p {
			margin: 0;
			padding: 0;
			font-weight: normal;
		}
		.loginbox input {
			width: 100%;
			margin-bottom: 20px;
		}
		.loginbox input[type="text"], input[type="password"] {
			border: none;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: #fff;
			font-size: 16px;
		}
		.loginbox input[type="submit"] {
			border: none;
			outline: none;
			height: 40px;
			background: #fb2525;
			color: #fff;
			font-size: 18px;
			border-radius: 20px;
		}
		.loginbox input[type="submit"]:hover {
			cursor: pointer;
			background: #ffc107;
			color: #000;
		}
		.loginbox a {
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: darkgrey;
		}
		.loginbox a:hover {
			color: #ffc107;
		}
		ul {
			display: flex;
			position: absolute;
			top: 89%;
			left: 48.5%;
			transform: translate(-50%, -50%);
		}
		ul li {
			list-style: none;
		}
		ul li a {
			width: 60px;
			height: 60px;
			background: #fff;
			text-align: center;
			line-height: 61px;
			font-size: 33px;
			margin: 0 10px;
			display: block;
			border-radius: 50%;
			position: relative;
			overflow: hidden;
			border: 1px solid #fff;
			z-index: 1;
		}
		ul li a .fa {
			position: relative;
			color: #262626;
			transition: .5s;
			z-index: 3;
		}
		ul li a:hover .fa {
			color: #fff;
			transform: rotateY(360deg);
		}
		ul li a:before {
			content: '';
			position: absolute;
			top: 100%;
			left: 0;
			width: 100%;
			height: 100%;
			background: #f00;
			transition: .5s;
			z-index: 2;
		}
		ul li a:hover:before {
			top: 0;
		}
		ul li:nth-child(1) a:before {
			background: #3b5999;
		}
		ul li:nth-child(2) a:before {
			background: #55acee;
		}
		ul li:nth-child(3) a:before {
			background: #e4405f;
		}
h1 {text-align: center;}
h3 {text-align: center;}
	</style>
    <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "wrong"){
            echo '<h1>NIS atau Password salah</h1>';
        }
    }
    ?>
    <div class="loginbox">
    <Form action="login.php" method="post">
      <h1>ANGGOTA SEKOLAH</h1>
        NIS: <input type="text" name="nis"> <br>
        Password: <input type="password" name="password"> <br>
        <input type="submit" value="LOGIN">
    </Form>
</body>
</html>
