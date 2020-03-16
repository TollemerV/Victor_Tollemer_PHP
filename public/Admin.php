<?php  require_once "../view/header.php";

try { // LANCER UNE EXCEPTION
    $pdo = new PDO("mysql:host=localhost;dbname=ynov_b1_pdo","ynov_b1_pdo","MD8EsGxCDvhcil94");

} catch (PDOException $ex){
  echo "Erreur lors de la connexion à la base de données ";
  die();
}


 if(!empty($case)){
    echo"Vous avez coché la case";
    $query2 ="SELECT * FROM voiture ";
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute();
    $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);}
    
    else{
     $query2 ="SELECT * FROM voiture WHERE visible = 1  ";
    $stmt2 = $pdo->prepare($query2);
    $stmt2->execute();
    $results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    echo"Vous n'avez pas coché la case";
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
<body style="position: relative;min-height: 100%;">
<h1> Admin <h1>

<form method='POST' action='Admin.php'>
<input type='checkbox' name='case' value='on'>
Cochez-la ou pas puis cliquez sur voir également les voitures cachés.
<br><input type='submit' name='exple1' value='Voir'>
</form>




<tr>
    <div class="container-fluid d-flex mt-8">
  <table><?php foreach($results as $product){ ?>
    <div class="card mr-4" style="width: 14rem;">
    <div class="card-body">
    <h5 class="card-title"> Nom : <?php echo $product["nom"]; ?></h5>
    <h5 class="card-title">Annee sortie : <?php echo $product["annee_sortie"]; ?></h5>
    <p class="card-text" style="font-size:18px;">Nombre kilomètres : <?php echo $product["nb_km"]; ?></p>
    <p class="card-text" style="font-size:25px;">Prix : <?php echo $product["prix"]; ?></p>
    <a href="Modif.php?id=<?php echo $product['ID'] ?>" class="btn btn-primary">Modifier</a>
</div>
</div>
</tr>
<?php } ?>
</table>

</br>

<footer style="position: absolute;bottom:0;">
<?php  require_once "../view/footer.php";
?>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>