<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/image1.png" type="image/png/">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="inscription.css">
    <title>S'inscrire</title>
</head>
<body>
    <div id="background"></div>
    <div class="case1">
       
        <center><div class="titre">Créer un compte?</div>
        <form action="treat_inscription.php" method="post">
        <div class="size">
            <input type="email" name="email" placeholder="Enter votre email" class="ecriture" required>
            <br>
            <input type="text" name="nom" placeholder="Enter votre nom" class="ecriture" required>
            <br>
            <input type="password" name="mdp" placeholder="Votre mots de passe" class="ecriture" required>
            <br>
            <input type="text" name="num" placeholder="numero de telephone" class="ecriture" required>
            <br>                  
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-7">
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10 btn_validation">
                <button type="submit" class="btn btn-default btn_valide" >Valider l'inscription</button>
                    <div class="col-md-2"></div>
        </div>
            <br>

            <!-- <div class="col-md-3"></div> -->
            <div class="btn_return">
                <a href="index.php" class="return">Retour à l'acceuil ?</a>
            </div>
        </form>
    </div>
</body>
</html>