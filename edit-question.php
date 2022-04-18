<?php  

    require('./action/editQuestionAction.php');
    require('./action/securityAction.php');

?>


<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>

<?php include 'include/navbar.php' ; ?>

<body>
<br><br><div class="col-md-12 container"> 
          <center>  <h1>Modefication de question </h1></center>
                <?php   if(isset($errorMsg)) { ?>  <div class="alert alert-danger"> <?php echo $errorMsg ; }
                        else if(isset($succesMsg)){
                            ?>  <div class="alert alert-info"> <?php  echo  $succesMsg;   
                        }    
                ?> </div>

      
        </div>
    <div class="container">
               <?php 
                     if(isset($date_publication)) 
                     {?>
                        <form method="POST" >
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Titer de question </label>
                            <input type="text" name="titel" value="<?php echo $titel ; ?>" class="form-control">
                        </div>
                        
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Question</label>
                            <textarea name="question" class="form-control"><?php echo $question ; ?></textarea>
                        </div>
                        <div class="mb-2">
                            <label for="exampleInputEmail1" class="form-label">Description</label>
                            <textarea name="description"  class="form-control"><?php echo $description ; ?></textarea>
                        </div>
                       
                            <button type="submit" name="submite" class="btn btn-primary">Modiffier Question</button>
                    </form><?php
                     }else{
                        $errorMsg = "vous n'etes pas l'auter de cette question ";     
                     }
                ?> 

        
    </div>
</body>
</html>