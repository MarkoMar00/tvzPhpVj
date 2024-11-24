<!DOCTYPE HTML>
    <html lang='hr'>
        <head>
            <title>Vjezba 9</title>  
            <meta http-equiv='content-type' content='text/html; charset=UTF-8>
            <meta name='description' content=''>
            <meta name='keywords' content=''>
            <meta name='author' content='Marko Marijan'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
        </head> 

        <body>
            <h1>Stanje dućana</h1>
        <?php
            function stanjeDucana() {
                $h = date("H");
                $d = date("D");

                if ($d != "Sat" && $d != "Sun"){
                    if ($h >= 8 && $h <= 20) {
                        ducan();
                    } else {
                        ducan("zatvoren");
                    }
                } elseif ($d == "Sat") {
                    if ($h >= 9 && $h <= 14) {
                        ducan();
                    } else {
                        ducan("zatvoren");
                    }
                } else {
                    ducan("zatvoren");
                }
            }

            function ducan($stanje="otvoren"){
                echo "Ducan je $stanje";
            }
        ?>
        
        <h2>Trentuno stanje:</h2>
        <?php
            stanjeDucana();
        ?>

        </body>
    </html>