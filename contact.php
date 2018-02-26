<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="">

    <title>Réalisation</title>
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

<header id="header">
    <div id="head" class="parallax" parallax-speed="1">
        <h1 id="logo" class="text-center">
            <span class="title">Bara Mamadou Seck</span>
            <span class="tagline">Développeur Web Junior<br><br>
        </h1>
    </div>

    <nav class="navbar navbar-default">
        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.html">Accueil</a></li>
                    <li><a href="cv.html">CV</a></li>
                    <li><a href="projets.html">Réalisation</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<main id="main">

    <div class="container">
        <div class="col-md-12">
            <div class="form-area">
                <form role="form" action="scripts/envoie.php" id="form" method="post">
                    <br style="clear:both">
                    <div class="alert alert-success" id="success" role="alert" style="display: none">
                        Votre mail a été envoyer.
                    </div>
                    <h3 style="margin-bottom: 25px; text-align: center;">Formulaire de contact</h3>
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
                        <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                    </div>

                    <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</main>

<footer id="footer" class="topspace">
    <div class="container">
        <div class="row">
            <div class="col-md-3 widget">
                <h3 class="widget-title">Contact:</h3>
                <div class="widget-body">
                    <p>0033698627516<br>
                        <a href="mailto:#">seckbara12@hotmail.com</a><br>
                        <br>
                        10 place du marche 95800 Cergy
                    </p>
                </div>
            </div>

            <div class="col-md-3 widget">
                <h3 class="widget-title">Suivez moi sur les Réseaux sociaux:</h3>
                <div class="widget-body">
                    <p class="follow-me-icons">
                        <a href=""><i class="fa fa-twitter fa-2"></i></a>
                        <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                        <a href=""><i class="fa fa-github fa-2"></i></a>
                        <a href=""><i class="fa fa-facebook fa-2"></i></a>
                    </p>
                </div>
            </div>

            <div class="col-md-3 widget">
                <h3 class="widget-title"></h3>
                <div class="widget-body">
                    <p></p>
                    <p></p>
                </div>
            </div>

            <div class="col-md-3 widget">
                <h3 class="widget-title"></h3>
                <div class="widget-body">
                    <p>0033698627516<br>
                        <a href="mailto:#">seckbara12@hotmail.com</a><br>
                        <br>
                        10 place du marche 95800 Cergy
                    </p>
                </div>
            </div>

        </div> <!-- /row of widgets -->
    </div>
</footer>

<footer id="underfooter">
    <div class="container">
        <div class="row">

            <div class="col-md-6 widget">
                <div class="widget-body">
                    <p>10 place du marche 95800 Cergy</p>
                </div>
            </div>

            <div class="col-md-6 widget">
                <div class="widget-body">
                    <p class="text-right">
                        Copyright &copy; 2016, Bara Mamadou Seck<br>
                </div>
            </div>

        </div> <!-- /row of widgets -->
    </div>
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/template.js"></script>

<script>

    $("form").submit(function(e){
        e.preventDefault();
        $.post( "scripts/envoie.php", { data: $( this ).serializeArray() })
            .done(function( data ) {
                $('#success').show();
            });
    });

</script>
</body>
</html>
