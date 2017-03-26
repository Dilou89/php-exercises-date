<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>Date</title>
</head>
<body>
	<h1>Afficher les dates avec php</h1>
	<p>exo 1 <?php  echo date('d/m/Y'). " ";?></p>
	<p>exo 2 <?php  echo date('d-m-y');  ?>   </p>
	<p>exo 3 <?php  echo date('d F Y');?></p>


	<p> exo 3 en français <?php setlocale(LC_TIME, 'fr_FR.utf-8');
		echo strftime(" %d %B %Y");?></p>

		<p>exo 4 timestamp du jour <?php  echo time(); ?></p>
		<p>exo 4 timestamp du 2 aout 2016 <?php    echo mktime(12, 0, 0, 8, 2, 2016); ?></p>
		<p>exo 5 <?php 
			$datetime1 = new DateTime('25-03-2017');
			$datetime2 = new DateTime('16-05-2016');
			$interval = $datetime1->diff($datetime2);
			echo $interval->format('%R%a days');
			?></p>

			<p>exo 6 <?php 
				
				$number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); 
				echo "nombre de jours du mois de fevrier 2016 : " .$number;
				
				?></p>
				<p>exo 7 <?php 
					
					$date = date("d-m-Y");
					$date2 = strtotime(date("d-m-Y", strtotime($date)) . " +22 day");
					print(" dans 22j ce sera le :".date('d-m-Y', $date2));
					?></p>
					<p>exo 8<?php 

						$date = date("d-m-Y");
						$date2 = strtotime(date("d-m-Y", strtotime($date)) . " -22 day");
						print(" il y a 22j, c'était le :".date('d-m-Y', $date2));
						?></p>



					</body>
					</html>