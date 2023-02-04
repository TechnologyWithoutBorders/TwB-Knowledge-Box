<!DOCTYPE html>
<html>
	<head>
		<?php
			$hostName = getHostName();
			echo "<title>Knowledge Box</title>";
		?>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="styles.css">
		<link rel="icon" type="image/x-icon" href="logo.jpg">
	</head>
	<body>
		<div class="content">
			<center>
				<img src="logo.jpg" alt="Logo" style="width:250px; height:250px;">
				<br>
				<h2 align="center" style="color:darkblue;font-family:arial;">Technology without Borders</h2>
				<h1 align="center" style="color:black;font-family:arial;">Knowledge Box</h1>
				<h3 style="color:black;font-family:arial;">Please choose from a package</h3>
				<table style="background-color: #F0F8FF;">
			  	<tr>
					<td style="width:50%; padding-bottom:15px;"><center><a class="button" href="http://<?php echo $hostName ?>:8080/">Kolibri</a></center></td>
					<td style="width:50%; padding-bottom:15px;"><center><a class="button" href="http://<?php echo $hostName ?>:8000/">Kiwix</a></center></td>
			  	</tr>
			  	<tr>
					<td>
						<center>educational videos and learning material</center>
					</td>
					<td>
						<center>comprehensive encyclopedia</center>
					</td>
			  	</tr>
				</table>
			</center>
		</div>
	</body>
</html>
