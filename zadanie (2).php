<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strona</title>
</head>
<body>

	<?php

		function print_array($array) {
			for($i=0; $i<sizeof($array); $i++) {
				echo $array[$i];
				if($i != sizeof($array)-1) {
					echo ", ";
				}
			}
		}


		function main() {
			//zadanie 1
			echo "<h3 style='margin-bottom: 1px;'>ZADANIE 1</h3>";

			$array_liczby = [2,12,65,75,99,4,1,2,3,6];
			$zdanie = "Dzień Dobry";
			
			print_array($array_liczby);
			echo "</br>".$zdanie."</br>";

			//podpunkt 2
			echo "<h3 style='margin-bottom: 1px;'>ZADANIE 2</h3>";

			$array_zdanie = explode(' ', $zdanie);

			//zadanie 3
			echo "<h3 style='margin-bottom: 1px;'>ZADANIE 3</h3>";

			echo "Ilość w array_liczby: ".count($array_liczby)."</br>";
			echo "Ilość w array_zdanie: ".count($array_zdanie)."</br>";
		
			//zadanie 4
			echo "<h3 style='margin-bottom: 1px;'>ZADANIE 4</h3>";

			sort($array_liczby, SORT_NUMERIC);
			sort($array_zdanie, SORT_STRING);

			echo "Posortowana array_liczby: ";
			print_array($array_liczby);
			echo "</br>";

			echo "Posortowana array_zdanie: ";
			print_array($array_zdanie); 
			echo"</br>";		
			
			//zadanie 5
			echo "<h3 style='margin-bottom: 1px;'>ZADANIE 5</h3>";

			shuffle($array_liczby);
			shuffle($array_zdanie);

			echo "Liczby array_liczby: ";
			print_array($array_liczby);
			echo "</br>";

			echo "liczba array_zdanie: ";
			print_array($array_zdanie);
			echo "</br>";
		}

		main();

	?>

</body>
</html>