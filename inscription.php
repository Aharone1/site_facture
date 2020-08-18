<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Devis & Factures gratuits</title>

   
            <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="fonts/css/all.css" type="text/css" rel="stylesheet">
            <link rel="stylesheet" href="affichefacture.css" type="text/css" rel="stylesheet">
        
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    </head>
    
  

    <body >
      <br>
     
      <div class="container">
       <?php include_once 'includes/menu.php'; ?>
        </div>


        <main role="main" class="container main">
         
        <h2>S'inscrire pour sauvegarder vos factures</h2>
  <form method="post" action="inscriptionT.php">
    <fieldset>
       <legend>Vos coordonnées</legend> <!-- Titre du fieldset -->

       <i class="fas fa-at" style="color:#57B223"></i>&nbsp<label for="email">Email:</label>
       <input type="email" name="email" id="email" /><br><br>

       <i class="fas fa-user" style="color:#57B223"></i>&nbsp<label for="pseudo">Pseudo *:</label>
       <input type="text" name="pseudo" id="pseudo" required /><br><br>

       <i class="fas fa-power-off" style="color:#57B223"></i>&nbsp<label for="password">Mot de passe *:</label>
       <input type="password" name="password" id="password" required /><br><br>

       <input type="submit" name="inscription" value="S'inscrire" class="bouton" />
       &nbsp&nbsp&nbsp<a href="seconnecter.php"> Se connecter </a>
       </fieldset>
      </form>

    
       </main>

       
       <?php include_once 'includes/footer.php'; ?>
 


         <script src="bootstrap/js/jquery.min.js"></script>
         <script src="bootstrap/js/bootstrap.min.js"></script>

    </body>
</html>

