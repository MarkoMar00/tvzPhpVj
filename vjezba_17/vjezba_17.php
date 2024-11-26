<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 17</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <?php
            $con=mysqli_connect("localhost", "root","","labvjphp");
            $query = "SELECT task_16.firstname, task_16.lastname, countries.country_name FROM task_16 INNER JOIN countries ON task_16.country = countries.country_code;";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_array($result)) {
                echo "<p>" . $row['firstname'] . " " . $row['lastname']. " " . $row['country_name'] . "</p>"; 
            }
            mysqli_close($con);
        ?>

</body>