<!DOCTYPE html>
<?php
echo $_SERVER['HTTP_HOST'];
include("mysql_connect.php");
include("function.php");
?>
<html>
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <title>Topbaşlar Apart | Giriş Yap</title>
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <link rel="stylesheet" type="text/css" href="css/design.css" />
       
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		
		<!--[if lte IE 7]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
		<style>
			@import url(http://fonts.googleapis.com/css?family=Ubuntu:400,700);
			body {
				background: #563c55 url(images/blurred.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;
			}
			.container > header h1,
			.container > header h2 {
				color: #fff;
				text-shadow: 0 1px 1px rgba(0,0,0,0.7);
			}
		</style>
    </head>
    <body>
        <div class="container" align="center">
		
			<img src="logo.png" align="center" width="275" height="125" style="margin-top:120px;" />
			 
			<section class="main">
				<form class="form-3" method="POST" action="login.php">
				    <p class="clearfix">
				        <label for="login">Kullanıcı Adı</label>
				        <input type="text" name="login" id="login" placeholder="Kullanıcı Adı">
				    </p>
				    <p class="clearfix">
				        <label for="password">ŞİFRE</label>
				        <input type="password" name="password" id="password" placeholder="Şifre"> 
				    </p>
				    <p class="clearfix">
				        
				    </p>
				    <div align="right"><p class="clearfix" align="right">
				        <input type="submit" name="submit" value="Giriş Yap">
				    </p>       </div>
				</form>​
<?php
if(isset($_POST['submit']))
{
	if(empty($_POST['login']) or empty($_POST['password']))
	{
		echo "<div class='error_msg'><i class='fa fa-times'></i> Lütfen tüm alanları doldurup tekrar deneyiniz...</div>";
	}
	else{
		$login=$_POST['login'];
		$login=htmlspecialchars($login);
		$pw=$_POST['password'];
		$pw=htmlspecialchars($pw);
		$sorgu=mysql_query("SELECT * FROM admin WHERE kul_ad='$login' and sifre='$pw'");
	if(mysql_num_rows($sorgu)==1)
	{
		$_SESSION['giris']='ok';
		echo "<script language='javascript'>window.location.href = 'default.php';</script>";
		
	}
	else
	{
		echo "<div class='error_msg'><i class='fa fa-times'></i> Kullanıcı adı veya şifre hatalı...</div>";
	}
		

	}
}
?>
			</section>
			<img src="bukalemun.png" style="position:relative; margin-bottom:20px;margin-top:30px;">
        </div>
    </body>
</html>