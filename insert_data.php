<?php
include('BD.php');
if(isset($_POST['add_student'])){
    $nname= $_POST['n_name'];
    $pname= $_POST['p_name'];
    $date= $_POST['date'];
    $number= $_POST['number'];
    $mail= $_POST['mail'];}


    $query = "INSERT INTO utilisateurs(NOM,PRENOM,NAISSANCE,TELEPHONE,EMAIL) VALUES('$nname','$pname','$date','$number','$mail')";
    $result= mysqli_query($connection,$query);
    if(!$result){
        die("Query Failed".mysqli_error());
    }
        else{
     header('location:Accueil.php?insert_msg=Enregistrement avec succès');
}


?>