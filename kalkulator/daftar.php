<?php
include('connection.php');
if(empty($_SESSION))
	session_start();

if(isset($_SESSION['username'])){
	header("location:kira.php");
exit;
}

?>
<html><head>
<title>LOGIN</title>
</head>
<body bgcolor="Crimson"; >

<h1 id="myH"></h1>
<p id="myP"></p>
<script>
document.getElementById("myH").innerHTML = "LOGIN";
document.getElementById("myP").innerHTML = "Have A Nice Day!!";
</script>
<center><form action = "daftarserver.php" method="post">
Username:<input type="text" name="username"/>
<br><br>
Password:<input type="password" name="password" />
<br><br>
<input type="submit" name="submit" value="login" />
</form>

 <center> <p></p>
                        <p><strong>Perhatian:</strong></p>
                        <p>Bagi pelajar gunakan <strong>pelajar</strong> sebagai username dan <strong>pelajar123</strong> sebagai password anda</p>
                        <p>Bagi pensyarah gunakan <strong>pensyarah</strong> sebagai username dan <strong>pensyarah123</strong> sebagai password anda</p>
						
</center>


</body>
</html>




