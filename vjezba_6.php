<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 6</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <?php
                $first_num = $_POST['first_num'];
                $second_num = $_POST['second_num'];
                $operator = $_POST['operator'];
                $third_num = '';

                switch($operator) {
                    case "+":
                        $third_num = $first_num + $second_num;
                        break;
                    case "-":
                        $third_num = $first_num - $second_num;
                        break;
                    case "*":
                        $third_num = $first_num * $second_num;
                        break;
                    case "/":
                        $third_num = $first_num / $second_num;
                }
                
            print '
            <h1>Upiši brojeve a i b</h1>
            <form action="" method="post" id="calculator">
                <div class="form-group">
                    <label for="fname">Upiši prvi broj *</label>
                    <input type="number" name="first_num" id="first_num" required="required" value="first_num">
                </div>

                <div class="form-group">
                    <label for="fname">Upiši drugi broj *</label>
                    <input type="number" name="second_num" id="second_num" required="required" value="second_num">
                </div>

                <input type="submit" name="operator" value="+">
                <input type="submit" name="operator" value="-">
                <input type="submit" name="operator" value="*">
                <input type="submit" name="operator" value="/">

                <div class="form-group">
                        Rješenje: ' . $third_num . '
                </div>
            </form>';
        ?>
    </body>
</html>