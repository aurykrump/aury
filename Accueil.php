<?php include('header.php'); ?>
<?php include('BD.php'); ?>
<div class="box1">
        <h3>TOUS LES ETUDIANTS</h3>
        <button type="button" style="float: right;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Ajouter un etudiant</button>
        </div>
         <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>NAISSANCE</th>
                <th>TELEPHONE</th>
                <th>EMAIL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $query= "SELECT * FROM utilisateurs";
           $result= mysqli_query($connection, $query);
           if(!$result){
            die("query Failed".mysqli_error());
        }else{
            while($row= mysqli_fetch_assoc($result)){
                ?>
                 <tr>
            <td><?php echo $row['ID']?></td>
            <td><?php echo $row['NOM']?></td>
            <td><?php echo $row['PRENOM']?></td>
            <td><?php echo $row['NAISSANCE']?></td>
            <td><?php echo $row['TELEPHONE']?></td>
            <td><?php echo $row['EMAIL']?></td>
            <td>
            <a href="modifier.php?id=<?php echo $row['ID']?>" class="btn btn-success">Editer</a>
            <a href="delete.php?id=<?php echo $row['ID']?>"class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
                <?php
            }
        }
             ?>
       
        </tbody>
    </table>
    <?php 
    if(isset($_GET['insert_msg'])){
      echo "<h6 style='text-align: center;
        color: green;'>".$_GET['insert_msg']."</h6>";
    }
    ?>
    <?php
    if(isset($_GET['update_msg'])){
      echo "<h6 style='text-align: center;
        color: green;'>".$_GET['update_msg']."</h6>";
    }
    ?>
      <?php
    if(isset($_GET['delete_msg'])){
      echo "<h6 style='text-align: center;
        color: green;'>".$_GET['delete_msg']."</h6>";
    }
    ?>
    
    
  
    <!-- Modal -->
    <form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Completer et appuyer sur le bouton Enregistrer</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="" for="n_name">NOM</label>
            <input type="text" name="n_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="" for="p_name">PRENOM</label>
            <input type="text" name="p_name" class="form-control">
          </div>
          <div class="form-group">
            <label for="" for="date">NAISSANCE</label>
            <input type="text" name="date" class="form-control">
          </div>
          <div class="form-group">
            <label for="" for="number">TELEPHONE</label>
            <input type="text" name="number" class="form-control">
          </div>
          <div class="form-group">
            <label for="" for="mail">EMAIL</label>
            <input type="text" name="mail" class="form-control">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Quitter</button>
        <input type="submit" class="btn btn-success" name="add_student" value="Enregistrer">
      </div>
    </div>
  </div>
</div>
</form>
<?php include('footer.php'); ?>
     

