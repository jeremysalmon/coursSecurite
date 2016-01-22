<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Cours Sécurité des Réseaux</title>
        <meta name="description" content="Cours de téléphonie sur IP avec Asterisk">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="sommaire.html">Cours Sécurité (sommaire)</a>
          </div>
        </div>
      </nav>

      <div class="container-fluid">
        <div class="col-md-8 col-md-offset-2">
<?php
session_start();
echo('<pre>');
print_r($_SESSION);
echo('</pre>');
?>
         	<h2>Mauvaise gestion des sessions</h2>
          
			    <p>Les sessions permettent de conserver du côté du serveur des informations sur la session actuelle de l'utilisateur.</p>
          <p>Généralement un cookie contient l'identifiant de la session et permet à chaque requête HTTP/HTTPS de récupérer ses informations de session.</p>

          <p>Le développeur devra donc s'assurer pour protéger ses sessions que : </p>
          <ul>
            <li>Toutes les transactions entre le client et le serveur sont chiffrées</li>
            <li>S'assurer que les mécanismes de chiffrement sont à jour (voir le problème de <a href="https://fr.wikipedia.org/wiki/Heartbleed" target="_blank">Heartbleed</a></li>
            <li>Les certificats ne doivent pas être "auto-signé" mais émané d'une autorité de certification (comme par exemple <a href="https://uk.godaddy.com" target="_blank">Go Daddy</a></li>
            <li>Toutes les données sensibles doivent être hachées avec MD5 ou SHAx</li>
            <li>S'assurer que les données de sessions soient bien détruites à la fin d'une connexion</li>
          </ul>
          
          <p>De la même façon les délais d'expiration doivent être réglés correctement :</p>
          <ul>
            <li>Le délai d'inactivité</li>
            <li>Le temps maximal de la session</li>
            <li>Supprimer l'ensemble de la session en cas d'authentification d'un nouvel utilisateur</li>
          </ul>

          <p><a class="btn btn-primary btn-lg pull-right" href="faille-web-3.html" role="button">Continuer &raquo;</a></p>
          <p><a class="btn btn-danger btn-lg pull-right" id="btnDel" role="button">Supprimer le cours &raquo;</a></p>
        </div>
      </div>

      <script src="js/vendor/jquery-1.11.2.min.js"></script>
      <script src="js/vendor/bootstrap.min.js"></script>
      <script src="js/main.js"></script>
      <script>
      $(document).ready(function(){
        var role = 'user';

        if(role != 'admin'){
          $('#btnDel').css('display','none');
        }
      })
      </script>
    </body>
</html>
