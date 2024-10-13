<?php
    $title = "Da Vincijev kod";
    $text = "Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.";
    $link = "https://hr.wikipedia.org/wiki/Da_Vincijev_kod";

    print "
    <!DOCTYPE HTML>
    <html lang='hr'>
        <head>
            <title>$title</title>  
            <meta http-equiv='content-type' content='text/html; charset=UTF-8>
            <meta name='description' content=''>
            <meta name='keywords' content=''>
            <meta name='author' content='Marko Marijan'>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
        </head> 

        <body>
            <h1> $title </h1>
            <p>$text</p>
            <br>
            <br>
            <p><a href='$link'> Link na wikipediu</a><br>
        </body>
    </html>";