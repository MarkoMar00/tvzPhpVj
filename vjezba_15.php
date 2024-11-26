<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 15</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <?php
            function nadi_koriskika ($name, $lastname) {
                $con=mysqli_connect("localhost", "root","","labvjphp");
                $query = "SELECT name, lastname FROM users WHERE name='$name' AND lastname='$lastname' ORDER BY lastname ASC LIMIT 10";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)) {
                    echo "<p>" . $row['name'] . " " . $row['lastname']. "</p>"; 
                }
                mysqli_close($con);
            }

            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name']) && isset($_POST['lastname'])) {
                nadi_koriskika($_POST['name'], $_POST['lastname']);
            }
        ?>

        <form action="" method="post" id="search">
            <div class="form-group">
                <label for="fname">Ime korisnika </label>
                <input type="text" name="name" id="name" required="required">
            </div>

            <div class="form-group">
                <label for="fname">Prezime korisnika </label>
                <input type="text" name="lastname" id="lastname" required="required">
            </div>

            <input type="submit" name="operator" value="pretrazi">
        </form>

    </body>
</html>