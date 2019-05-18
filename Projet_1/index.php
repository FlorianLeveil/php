<html>
    <head>
    <style>
    body{
        <?php
        $day = date('H');
        if ($day > "17" || $day < "7")
        {
            echo "background-color:black;";
            echo "color:white;";

        } else {
            echo "background-color=white;";
            echo "color=black;";
        }
        ?>
    }
    </style>
    </head>
    <body>
        <?php 
        $ma_date = date("F j, Y, g:i a");
        echo ' Bienvenu nous sommes le ' . $ma_date;
        ?>
        <br>
        <a href = "./bordeaux.php"> Méteo Bordeaux </a>
        <br>
        <a href = "./paris.php"> Méteo Paris </a>

    </body>
</html>