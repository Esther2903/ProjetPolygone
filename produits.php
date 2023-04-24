<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="produits_style_sheet">

<!-- Favicons -->

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<!-- Bootstrap CSS -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<header></header>

<body>
    
             <div class="row" id="">
                    <!-- bar de navigation -->
                    <div class="col-sm-2" id="nav-bar">
                        <a href="client.html"><div class="client">Clients</div></a>
                        <a href="banque.html"><div class="banque">Banque</div></a>
                        <a href="partenaires.html"><div class="partenaires">Contacts et Partenaires</div></a>
                        <a href="parametres.html"><div class="parametres">Paramètres</div></a>
                    </div>
                    
                    <!-- feed -->
                    <div class="col-sm-10" id="feed-space">
                        <div class="prod">
                            <div class="designation">Nom du produit</div>
                            <div class="row" id="ligne_info">
                                <div class="col-sm-3">Rérérence :</div>
                                <div class="col-sm-3">Catégorie :</div>
                                <div class="col-sm-3">Prix Unitaire :</div>
                                <div class="col-sm-3">Quantité en stock :</div>
                            </div>
                            <div class="modifier">Modifier</div>
                            <div class="supprimer">Supprimer</div>
                        </div>
                    </div>
            </div>
    
</body>
</html>