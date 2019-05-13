<html>
    <head>
    </head>
    <body>
        <?php 
        $var = 0;
        while ($var <= 3)
        {
            echo  '<img src= "https://www.prevision-meteo.ch/uploads/widget/paris_' . $var .  '.png"  />';
            $var++;
        };
        ?>
        
    </body>
</html>