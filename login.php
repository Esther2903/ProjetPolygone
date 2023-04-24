<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login1.css">
    <title>Bienvenu</title>
</head>
<body>
            <div class="container">
                <div class="nom_app1">Polygone +</div>
                <div class="bienvenu"><em>Authentification</em></div>
            
                <form action="" method="POST">
                    <div class="lab"><label for="">Email</label> <input type="text" placeholder="enter email" name="mail" required></div>
                    <div class="lab"><label for="">Password</label> <input type="password" placeholder="enter password" name="password" required></div>
                    <a href="accueil.php"><input type=submit value="LOGIN" name="login"></a>
                    <div class="question">Vous n'avez pas de compte ?</div>
                    <a href="signup.php"><div class="lien">Créer un compte.</div></a>
                </form>
            </div>
</body>
</html>