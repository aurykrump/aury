<?php include('BD.php');?>
<?php include('header.php');?>

<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];

$query="DELETE FROM utilisateurs WHERE ID='$id'";
$result=mysqli_query($connection,$query);
if(!$query){
    die("Query Failed".mysqli_error());
}
else{
    header('location:Accueil.php?delete_msg=Supprimé avec succès.');
}
}
?>

<?php include('footer.php'); ?>