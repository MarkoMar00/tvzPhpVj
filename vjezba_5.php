<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 5</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <?php
                $rand_num = rand(1,9);
                
            print '
            <h1>Pogodi broj!</h1>
            <form action="" method="post" id="calculator">
                <div class="form-group">
                    <label for="bum">Upiši broj od 1 do 9*</label>
                    <input type="number" name="num" id="num" required="required" value="num">
                </div>';

                if (isset($_POST['num'])) {
                    if ($_POST['num'] == $rand_num) {
                        print'<button> Pogodak, probaj ponovo! </button>';
                    } else {
                        print '<button> Krivo, proaj ponovo!</button>';
                    }
                    print '<br>Zamišljeni broj je ' . $rand_num;
                }
               
            print '</form>';
        ?>
    </body>
</html>