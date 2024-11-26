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
            function listUsers () {
                $con=mysqli_connect("localhost", "root","","labvjphp");
                $query = "SELECT task_16.id, task_16.firstname, task_16.lastname, countries.country_name 
                    FROM task_16 INNER JOIN countries ON task_16.country = countries.country_code";
                $result = mysqli_query($con,$query);
                while($row = mysqli_fetch_array($result)) {
                    echo "<div class=\"form-group\">";
                    echo "'<input type=\"hidden\" name=\"id\" value=" . $row['id'] . ">";
                    echo "<input type=\"text\" name=\"name\" id=\"firstname\" value=\"" . $row['firstname'] . "\"" . " required=\"required\">";
                    echo "<input type=\"text\" name=\"name\" id=\"lastname\" value=\"" . $row['lastname'] . "\"" . "required=\"required\">";
                    echo '<div class="form-group">
                    <label for="country">Country:</label><br>';
                    echo "<select name=\"country\" id=\"country\" required>";
                    echo '<option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="GB">United Kingdom</option>
                    <option value="JP">Japan</option>
                    <option value="DE">Germany</option>
                    <option value="FR">France</option>
                    <option value="HR">Croatia</option>
                    </select>
                    </div><br>';
                    echo "</div>";
                    echo  "<input type=\"submit\" name=\"submit\"" .  "value=\"Submit\">";
                }
                mysqli_close($con);
            }

            function editUser($id, $name, $lastname, $country) {
                echo "$id, $name, $lastname, $country";
                $con=mysqli_connect("localhost", "root","","labvjphp");
                $query = "UPDATE task_16 
                          SET firstname = '$name', lastname = '$lastname', country = '$country'
                          WHERE id = $id";
                $result = mysqli_query($con,$query);
                echo "<p>$result</p>";
                mysqli_close($con);
            }

            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['name'])) {
                echo "<p> HI </p>";
                editUser($_POST['id'], $_POST['firstname'], $_POST['lastname'], $_POST['country']);
            }
        ?>

    <form action="" method="post" id="edit">
        <?php listUsers()?>
    </form>

</body>