<?php
session_start();
if(!isset($_SESSION["notes"])){
    $_SESSION["notes"]=[];
}
elseif(isset($_POST["titre"])&& isset($_POST["note"])){
    $title="{$_POST["titre"]}";
    $_SESSION["notes"] [$title] =$_POST["note"];}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div  class="container">
        <h2>ajouter une note</h2>
    <form class="form-group" method="post">
    <input class="form-control"  type="text" name="titre" id="titre" placeholder="titre">
    <br>
    <textarea class="form-control" name="note" id="note" cols="30" rows="10" placeholder="note"></textarea>
    <br>
    <button class="btn btn-primary" type="submit">enregister</button>
    <br>

    </form>

   <h2>vos notes</h2>
   <br>
  <?php  foreach ($_SESSION["notes"] as  $key => $value) {?>
        <div class="card">
        <div class="card-header">
        <?=$key?>

        </div>
        <div class="card-body">
        <?=$value?>


       

        </div>


        </div>
 <br>



   <?php }




?>
</div>
</body>
</html>