    <?php include('BD.php');?>
   <?php include('header.php');?>
  <?php
     if(isset($_GET['id'])){
    $id=$_GET['id'];
            $query= "SELECT * FROM utilisateurs WHERE ID= '$id' ";
           $result= mysqli_query($connection, $query);
           if(!$result){
            die("Query Failed".mysqli_error());
           }
           else{
          $row= mysqli_fetch_assoc($result);
        
           }
          }
?>
  
       <?php

       if(isset($_POST['update_student'])){
        if(isset($_GET['id_new'])){
          $id_new=$_GET['id_new'];
        }
        $nname=$_POST['n_name'];
        $pname=$_POST['p_name'];
        $date=$_POST['date'];
        $number=$_POST['number'];
        $mail=$_POST['mail'];
        
        $query="UPDATE utilisateurs SET NOM='$nname', PRENOM='$pname', NAISSANCE='$date', TELEPHONE='$number', EMAIL='$mail' WHERE id='$id_new'";
        $result= mysqli_query($connection, $query);
        if(!$result){
         die("Query Failed".mysqli_error());
        }
        else{
        header('location:Accueil.php?update_msg=Modification avec succès.');  
        
       }
      }
       
       
       
       ?>
<form action="modifier.php?id_new=<?php echo $id;?>" method="post">
  <div class="form-group">
            <label for="" for="n_name">NOM</label>
            <input type="text" name="n_name" class="form-control" value="<?php echo $row['NOM']?>">
          </div>
          <div class="form-group">
            <label for="" for="p_name">PRENOM</label>
            <input type="text" name="p_name" class="form-control" value="<?php echo $row['PRENOM']?>">
          </div>
          <div class="form-group">
            <label for="" for="date">NAISSANCE</label>
            <input type="text" name="date" class="form-control" value="<?php echo $row['NAISSANCE']?>">
          </div>
          <div class="form-group">
            <label for="" for="number">TELEPHONE</label>
            <input type="text" name="number" class="form-control" value="<?php echo $row['TELEPHONE']?>">
          </div>
          <div class="form-group">
            <label for="" for="mail">EMAIL</label>
            <input type="text" name="mail" class="form-control" value="<?php echo $row['EMAIL']?>">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button> 
        <input type="submit" class="btn btn-success" name="update_student" value="Enregister">
      </div>
      
 
</form>
<?php include('footer.php'); ?>