<!DOCTYPE HTML>
<html>
	<head>
		<title>Vjezba 10</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="Marko Marijan">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>

    <body>
        <form action="" method="post" id="words">
            <div class="form-group">
                <label for="fname">Ulazni niz</label>
                <br>
                <input type="text" name="words" id="words" required="required">
            </div>

            <input type="submit" name="operator" value="ispiši broj riječi">
        </form>

        <?php
             $words = $_POST['words'];
             $word_count = str_word_count($words);

             echo "<p> Ulazni niz: $words sadrži $word_count riječi";
        ?>

    </body>
</html>