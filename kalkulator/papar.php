
<!DOCTYPE html>
<html>
<head>
	<style>
			body {
			margin: 0;
		}


		#AquamarineDiv {
			position: absolute;
			
			background-color: Aquamarine;

		}
		#TealDiv {
			position: absolute;
			
			background-color: Teal;
		}
		#ChartreuseDiv {
			position: absolute;
			
			background-color: Chartreuse;
		}
		#LightseagreenDiv {
			position: absolute;
			top: 100;
			background-color: Lightseagreen;

		}
		#MediumspringgreenDiv {
			position: absolute;
			
			background-color: Mediumspringgreen;
		}
	</style>

</head>
<center><p><h1><b>PAPARAN HASIL CALCULATOR ANDA</b></h1></p></center>

	<center><button onclick="Aquamarine()">
			AQUAMARINE
	</button>
	<button onclick="Teal()">
		  	TEAL
	</button>
	<button onclick="Chartreuse()">	
			CHARTREUSE
	</button>
	<button onclick="Lightseagreen()">
			LIGHT SEA GREEN
	<button onclick="Mediumspringgreen()">
			MEDIUM SPRING GREEN
	</button></center>
<br>


	
<table align="center"border="2" cellpadding="12" cellspacing="0" id="blueDiv">
<tr align="center">

<th>NOMBOR1</th>
<th>OPERASI</th>
<th>NOMBOR2</th>
<th>JAWAPAN ANDA</th>

	</tr>
	<?php include 'connection.php';
	
$display = mysqli_query($conn,'SELECT*FROM output');

while ($result=mysqli_fetch_array($display))  
{
echo"<tr><td align='center'>".$result['no1']."</td>
<td align='center'>".$result['operasi']."</td>
<td align='center'>".$result['no2']."</td>
<td align='center'>".$result['jawapan']."</td>


</tr>";
}
	?>  </table><br><br><br>


	<script>
		var div = document.getElementById("blueDiv");

		function Aquamarine() {
			div.setAttribute("id","AquamarineDiv");
		}
		function Teal() {
			div.setAttribute("id","TealDiv");
		}
		function Chartreuse(){
			div.setAttribute("id","ChartreuseDiv");
		}
		function Lightseagreen(){
			div.setAttribute("id","LightseagreenDiv");
		}
		function Mediumspringgreen(){
			div.setAttribute("id","MediumspringgreenDiv");
		}
	</script>

<br><br>
<button><a href="index.php">Kembali</a></button>
</center>
</body>
</html>