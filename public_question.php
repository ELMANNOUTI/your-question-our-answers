
<?php 
      
       require('action/question_action.php') ;
       require('./action/securityAction.php'); 
       
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>

<?php include 'include/navbar.php' ; ?>

<body>
<br><br>
    <div class="container">
        <div class="col-md-12">
          <center>  <h1>Question</h1></center>
                <?php   if(isset($errorMsg)) { ?>  <div class="alert alert-danger"> <?php echo $errorMsg ; }
                        else if(isset($succesMsg)){
                            ?>  <div class="alert alert-info"> <?php  echo  $succesMsg;   
                        }    
                ?> </div>

         <form method="post" >
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Titer de question </label>
                    <input type="text" name="titel" class="form-control">
                </div>
                
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Question</label>
                    <textarea name="question" class="form-control"></textarea>
                </div>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Description</label>
                    <textarea name="Description" class="form-control"></textarea>
                </div>
               
                    <button type="submit" name="submite" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>