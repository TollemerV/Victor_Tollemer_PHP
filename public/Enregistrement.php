<?php  require_once "../view/header.php";
try { // LANCER UNE EXCEPTION
    $pdo = new PDO("mysql:host=localhost;dbname=ynov_b1_pdo","ynov_b1_pdo","MD8EsGxCDvhcil94");

} catch (PDOException $ex){
  echo "Erreur lors de la connexion à la base de données ";
  die();
}

function prixVoiture (int $an,int $km)
{
    $prix=($km-$an);

    return $prix;
}

if(!empty($_POST))
{
    $nom = $_POST['nom'];
    $annee_sortie = $_POST['annee_sortie'];
    $nb_km = $_POST['nb_km'];
    $prix = prixVoiture($annee_sortie,$nb_km); 

    $req = "INSERT INTO voiture ( `nom`, `annee_sortie`, `nb_km`, `prix`, `visible`) VALUES ( '$nom', '$annee_sortie' , '$nb_km','$prix',1);";
    $pdo->query($req);
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
   
</head>
<body>
<h1> Enregistrement <h1>
<form method="post">
<h2>
<hr>
    <label > Nom :
    <input type="text" name="nom" >
    </label>
    <hr>
    <label > Annee Sortie: 
    <input type="text"  name="annee_sortie" >
    </label>
    <hr>
    <label > Nombre Kilometres :
    <input type="text"  name="nb_km" >
    </label>
    <hr>
</h2>
    <input type="submit" value="Envoyer">
</br></br></br></br></br></br>
<?php  require_once "../view/footer.php";
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>