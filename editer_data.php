<?php
if(isset($_POST['add_student'])){
    $id= $_POST['id'];
    $nname= $_POST['n_name'];
    $pname= $_POST['p_name'];
    $date= $_POST['date'];
    $number= $_POST['number'];
    $mail= $_POST['mail'];

    $sql = "UPDATE utilisateurs SET NOM=?, PRENOM=?, NAISSANCE=?, TELEPHONE=?, EMAIL=? WHERE ID=?";

   
}


?>