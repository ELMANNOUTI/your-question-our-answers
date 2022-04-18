<?php  

    require('./action/editQuestionAction.php');
    require('./action/answearAction.php'); 
    require('./action/showAllAnswearOfQuestion.php  '); 
    require('./action/securityAction.php');

?>


<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>

<?php include 'include/navbar.php' ; ?>

<body>
<br><br><div class="col-md-12 container"> 
          <center>  <h1>Reponse de question </h1></center>
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
                    <div class="card">
                        <div class="card-header">             
                          <?php echo $titel ?>
                        </div>
                        <div class="card-body"> 
                            <?php echo $question ?><br>
                        </div>
                           <div class="card-header">
                                <?php echo $description ?>
                                 <br>
                            </div>                     
                    </div><br>

                   <form method="post">
                       <div class="card">
                            <textarea name="content"></textarea>
                        </div><br>
                            <button type="submit" name="reponse" class="btn btn-info" >Reponse</button>
                     </form>
                    
                     <?php }
                ?> 
                    <br><br>
                <div class="card"  style="padding:20px ; ">          
                    <?php  
                         while($reponse =  $answear->fetch())
                         {
                             echo  date('y-m-d / h-m-s')?> <a href="profilePublic.php<?php echo "?id=".$reponse['id_autor'] ?>"><?php  echo "<h5>"."@".$reponse['pesudo_auto']."</h5>" ?> </a><br>
                             <?php
                             echo  $reponse['answear'];
                             ?><hr> <?php
                         }
                    ?>
                </div>
               


    </div>

    
</body>
</html>