<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="">

    <title>Contact</title>
    <link rel="shortcut icon" href="assets/images/incone.jpg">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>
        .form-area
        {
            background-color: #FAFAFA;
            padding: 10px 40px 60px;
            margin: 10px 0px 60px;
        }
    </style>
    <script src="assets/js/html5shiv.js"></script>

</head>
<body>

<?php include 'assets/include/header2.php'?>

<main id="main">

    <div class="container">
        <div class="col-md-12">
            <div class="form-area">
                <form role="form" action="scripts/envoie.php" id="form" method="post">
                    <br style="clear:both">
                    <div class="alert alert-success" id="success" role="alert" style="display: none">
                        Votre mail a été envoyer. Je reviendrai vers vous dans les plus brefs délais.
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nom" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Adresse email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Numéro de Téléphone" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Sujet" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="content" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    </div>
<!--                    <div class="form-group g-recaptcha" data-sitekey="6LeZZkkUAAAAADw1cMfXiESMonPKcO_xJ-uvNRxk"></div>-->
                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</main>

<?php include 'assets/include/footer.php'?>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script>

    $("form").submit(function(e){
        e.preventDefault();
        $.post( "scripts/envoie.php", $(this).serializeArray())
            .done(function( data ) {
                $('#success').show();
                window.setTimeout( function(){
                    window.location = "index.php";
                }, 4000 );
            });
    });

</script>
</body>
</html>
