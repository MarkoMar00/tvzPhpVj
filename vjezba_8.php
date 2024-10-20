<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 8</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <?php
            $cars = array("Audi", "BMW", "Renault", "Citroen");;
            $selectedCar = $_POST['car'];

            print "
            <form method='post' action=''>
            <label for='car'>Odaberite vozilo:</label><br>";
                
            foreach ($cars as $car) {
                echo "<input type='radio' name='car' value='$car'> $car <br>";
            }
                
            print "
            <br>
            <input type='submit' value='Pošalji'>
            </form>";

            echo "<p>Odabrano vozilo: " . $selectedCar . "</p>"
        ?>
    </body>
</html>