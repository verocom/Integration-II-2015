<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Basic Intégration</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="css/site.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <a href="index.php#toto">Toto</a>
        <?php
        // Si no est définit
        if (isset($_GET["no"])){
            // acquisition de la valeur de no
            $no = $_GET["no"];
            if ($no == 1){ // si no égale 1
                echo '<h1>Titre</h1>';
            } else {
                echo '<h2>Titre ' . $no . '</h2>';
            }
        } else {
            $no = 1;
        }
        ?>
                
        <form method="get" action="index.php">
            <label for="bleh">No: </label>
            <input type="number" name="no" id="bleh" value="<?= $no ?>">
            <input type="submit" value="GO">
        </form>
        
        <ul>
            <li><a href="index.php?no=1">#1</a></li>
            <li><a href="index.php?no=2">#2</a></li>
            <li><hr></li>
            <?php
            for ($i = 10; $i <= 100; $i += 10){
                echo '<li><a href="index.php?no='.$i.'">#'.$i.'</a></li>';
            }
            ?>
        </ul>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        
        <div id="toto">
            TOTO
        </div>
        
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <script src="js/jquery-2.1.3.js" type="text/javascript"></script>
        <script>
            
        </script>
    </body>
</html>
