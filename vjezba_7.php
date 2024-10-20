<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 7</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <?php
                $grades = array($_POST["first_grade"], $_POST['second_grade']);
                $avg = ($grades[0] + $grades[1]) / sizeof($grades);
                
            print '
            <h1>Upiši ocjene prvog i drugog kolokvija</h1>
            <form action="" method="post" id="grades">
                <div class="form-group">
                    <label for="fname">Upiši ocjenu prvog kolokvija</label>
                    <input type="number" name="first_grade" id="first_grade" required="required" value="first_grade">
                </div>

                <div class="form-group">
                    <label for="fname">Upiši ocjenu drugog kolokvija</label>
                    <input type="number" name="second_grade" id="second_grade" required="required" value="second_grade">
                </div>

                <input type="submit" name="operator" value="Pošalji">';

                if ($grades[0] < 1 || $grades[1] < 1 || $grades[0] > 5 || $grades[1] > 6) {
                    print '<p> Ocjena ne smije biti veća od 5, a manja od 1!</p>';

                } elseif ($grades[0] == 1 || $grades[1] == 1) {
                    print '<p> Konačna ocjena iz predmeta je 1!';

                } else {
                    print '<p> Prosjek iz predmeta je: ' . $avg . '</p>';
                    print '<p> Ocjena iz predmeta je: ' . round($avg) . '</p>';

                }

            print '</form>';
        ?>
    </body>
</html>