<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 16</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <?php
            function unesi_korisnika ($name, $lastname, $email, $username, $password, $country) {
                $con=mysqli_connect("localhost", "root","","labvjphp");
                $query = "INSERT INTO task_16 (firstname, lastname, email, username, password, country) VALUES ('$name', '$lastname', '$email', '$username', '$password', '$country')";
                $result = mysqli_query($con,$query);
                mysqli_close($con);
            }

            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'])) {
                unesi_korisnika($_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['username'], $_POST['pass'], $_POST['country']);
            }
        ?>

        <form action="" method="post" id="search">
            <div class="form-group">
                <label for="fname">First Name: </label><br>
                <input type="text" name="name" id="name" required="required">
            </div>

            <div class="form-group">
                <label for="fname">Last Name: </label><br>
                <input type="text" name="lastname" id="lastname" required="required">
            </div>

            <div class="form-group">
                <label for="fname">Your E-mail: </label><br>
                <input type="email" name="email" id="email" required="required">
            </div>

            <div class="form-group">
                <label for="fname">Username: </label><br>
                <input type="text" name="username" id="username" required="required">
            </div>

            <div class="form-group">
                <label for="fname">Password: </label><br>
                <input type="password" name="pass" id="pass" required="required">
            </div>

            <div class="form-group">
                <label for="country">Country:</label><br>
                <select name="country" id="country" required>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="GB">United Kingdom</option>
                    <option value="JP">Japan</option>
                    <option value="DE">Germany</option>
                    <option value="FR">France</option>
                    <option value="HR">Croatia</option>
                </select>
            </div><br>

            <input type="submit" name="submit" value="Submit">
        </form>

</body>