<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 11</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <?php
         function isPrime($number) {
            if ($number <= 1) {
                return false;
            }
            if ($number <= 3) {
                return true;
            }
            if ($number % 2 == 0 || $number % 3 == 0) {
                return false;
            }
        
            for ($i = 5; $i * $i <= $number; $i += 6) {
                if ($number % $i == 0 || $number % ($i + 2) == 0) {
                    return false;
                }
            }
        
            return true;
        }

            for ($i = 1; $i <= 100; $i++) {
                if (isPrime($i)) {
                    echo "<br> <p> $i </p>";
                }
            }
        ?>

    </body>
</html>