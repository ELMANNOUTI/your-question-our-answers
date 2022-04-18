<?php
  
   require('./action/recherchQuestionAction.php');
     
   require('./action/securityAction.php');
    

?>

<!DOCTYPE html>
<html lang="en">

        <?php include './include/head.php' ?>


        <body>
               <?php   include './include/navbar.php';  ?> 
<div class="container">
     
<br><br>
            <form class="form-group row " method=" get" action="recherchQeustion.php ">
              <div class="col-8">
                  <input class="form-control" type="text" name="searsh"  placeholder="Search" >
              </div>
              <div class="col-4">
                  <button class="btn btn-outline-success" name="btnSrearsh" type="submit">Recherche</button>
              </div>
             
            </form>
            <?php   if(isset($errorMsg)) { ?>  <div class="alert alert-danger"> <?php echo $errorMsg ; }
                        
                ?> </div>
                
        <?php while( $row = $resulta->fetch() )
                  { ?>     
                  <br>
                  <div class="card">
                      <div class="card-header">

                      <a href="./accediQuestion.php<?php echo "?id=".$row['id'] ?>" > <?php echo $row['titel'] ?> </a>    
                      </div>
                    <div class="card-body">
                      
                          <?php echo $row['question'] ?><br>
                  </div>
                  <div class="card-header" >
                          <?php echo $row['description'] ?><br>
                    </div>
                  
                  </div>
                  <br><br>
                  
                  <?php
                  }
                  ?>
            
        
</body>
</div>
</html>
