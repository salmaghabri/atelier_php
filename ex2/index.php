<?php

if (isset($_COOKIE["vote"]) ) {
     header("location:deja.php");

    
   // <!-- <div class="alert alert-danger"><?=//"Vous avez déjà voté pour '{$_COOKIE["vote"]}'" 
   // </div> -->
   
    
 

}
 else {
     if(isset($_POST["quest"])){
     $voted=$_POST["quest"];
     setcookie("vote", $voted, time() + 120,'/');
//<!-- <div class="alert alert-success">merci d'avoir voté</div> -->



      header("location:merci.html");

    }
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <label for="quest">comment trouvez vous le cours php?</label>
    <br>
    <input type="radio" name="quest" id="bon" value="bon" >
    <label for="bon">bon</label>
    <input type="radio" name="quest" id="moyen" value="moyen" >
    <label for="moyen">moyen</label>
    <input type="radio" name="quest" id="mauvais" value="mauvais" >
    <label for="mauvais">mauvais</label>
<button type="submit">voter</button>
</form>


</body>
</html>