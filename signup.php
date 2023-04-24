<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup1.css">
    <title>Bienvenu</title>
</head>
<body>
            <div class="container">
                <div class="nom_app1">Polygone +</div>
                <div class="bienvenu"><em>Inscription</em></div>
            
                <form action="" method="POST">
                <div class="lab"><label for="">Nom</label><input class="champ1" type="text" placeholder="enter last name" name="nom" required ></div>
                <div class="lab"><label for="">Prenom</label><input class="champ" type="text" placeholder="enter first name" name="prenom" required></div>
                <div class="lab"><label for="">Role</label> 
                    <select name="" id="">
                      
                        <option value="AC">Buyer</option>
                        <option value="AD">Admin</option>
                        <option value="VDS">Seller</option>
                    </select> 
                </div>
                <div class="lab"><label for="">Phone</label><input class="champ3" type="text" placeholder="enter number" name="contact" required></div>
                <div class="lab"><label for="">Email</label><input class="champ4" type="text" placeholder="enter email" name="mail" required></div>
                <div class="lab"><label for="">Password</label><input class="champ5" type="password" placeholder="enter password" name="password" required></div>
                <div class="lab"><label for="">Confirm Password</label><input class="champ6" type="password" placeholder="confirm password" name="confirmPassword" required></div>

                    <a href="prof_home.php"><input type=submit value="SIGN UP" name="envoyer"></a> <a href="login.php"><div class="lien">Login</div></a>
        
                </form>
            </div>
</body>
</html>