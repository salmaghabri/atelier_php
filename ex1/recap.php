 <?php
  if(!(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['nb']) && isset($_POST['adresse']) && isset($_POST['ingredient']) && isset($_FILES['cin']))) {
    header('location:resa.htm');

}
//var_dump($_FILES);


$extension =pathinfo($_FILES['cin']['name'],PATHINFO_EXTENSION);
$id = uniqid();
$file_name = "uploads/$id.$extension";
 //move_uploaded_file($_FILES['cin']['tmp_name'], $file_name);



?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules\bootswatch\dist\journal\bootstrap.css">
    <title>Document</title>
</head>
<body>
    <h1>detail de la commande</h1>
    <div class="container">
    <?php 
   
    foreach($_POST as $nom => $val){?>
        <table class="table">
            <tr>
                <th>
                  <?php echo $nom   ?>
                </th>
                <td>
            <?php echo  htmlentities($val);  ?>
            </td>

            </tr>
 <?php }?>

        <tr>
            <th> prix </th>
            <td>
            <?=$_POST['nb']*4
           
            
            
            ?>


            </td>
        </tr>
        <?php 
        if($_POST['nb'] >10 ) {?>
        <tr>
            <th>prix apres reduction</th>
            <td> <?= $_POST['nb']*4*0.9 ?></td>
        </tr>




<?php

        }
        
        ?>


        </table>


  </div>
</body>
</html>