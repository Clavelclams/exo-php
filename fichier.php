<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<h1>Travail de lecture de </h1>
<ul>
    <?php 
        // $fp = fopen("/home/claveliito/Documents/dev/file.txt", "r");
        // $fp = fopen("../exemple.txt","a");
        // $fp = fopen("http://wwww.php.net/", "r");
        // $fp = fopen("ftp://user:password@example.com/", "w");
        /*
            $lines = file('liens.txt');
            echo "<pre>";
            print_r($lines);
            echo "</pre>";
        */
        $lines = file('liens.txt');
        foreach ($lines as $line){
            $line = trim($line);
            echo "<li><a href=\"$line\">$line</a></li>";
        }
    ?>
</ul>



</body>
</html>

