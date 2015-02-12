<?php
$formValid = false;
if (isset($_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    if ($name != "" && $email != "" && $subject != "" && $message != ""){
        $formValid = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/site.css" rel="stylesheet" type="text/css"/>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="dark">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        
        <section class="container section-principale" id="contact">
            <div class="row">
                <header class="col-sm-12 section-header">
                    <h2>CONTACT US</h2>
                    <p class="sous-titre">Duis vitae velit mollis, congue nisi dignissim, pellentesque lorem</p>
                </header>
            </div>
            <?php 
            if ($formValid) { ?>
                <div class="row">
                    <div class="col-sm-6">
                        <?= $name ?>
                    </div>
                    <div class="col-sm-6">
                        <?= $email ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?= $subject ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <?= $message ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <a href="index.php">Retourner à la page d’accueil</a>
                    </div>
                </div><?php 
            } else { ?>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-danger">
                            <h4>Erreur</h4>
                            <p>Aucune donnée n’a été envoyée.</p>
                            <p>
                                <a href="index.php" class="btn btn-default">Retourner à la page d’accueil</a>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </section>

        <div class="dark">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
            <p>&nbsp;</p>
        </div>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.3.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/contact.js" type="text/javascript"></script>
    </body>
</html>