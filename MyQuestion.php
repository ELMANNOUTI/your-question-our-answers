<?php
    require('./action/MyquestionAction.php');
    require('./action/securityAction.php');
    require('./action/deletAction-question.php');

?>

<!DOCTYPE html>
<html lang="en">

<?php include './include/head.php' ?>

<body>
    
<?php include './include/navbar.php' ?>
<div class="container">
  <?php   if(isset($errorMsg)) { ?>  <div class="alert alert-danger"> <?php echo $errorMsg ;?></div><?php } 
                        else if(isset($succesMsg)){
                            ?> <div class="alert alert-info"> <?php  echo  $succesMsg; ?>  </div>
                        <?php   }    
                ?> 
            
        <?php while($ques = $questions->fetch())
                { ?>
                <br>
                 <div class="card">
                        <div class="card-header">
                            
                        <?php echo $ques['titel'] ?>

                        </div>
                        <div class="card-body">
                            
                            <?php echo $ques['question'] ?><br>
                            <?php echo $ques['description'] ?>
                        <br><br>
                            <a href="./edit-question.php<?php echo "?id=".$ques['id'] ?>" class="btn btn-warning"  >Modifier</a>
                            <a href="./accediQuestion.php<?php echo "?id=".$ques['id'] ?>" class="btn btn-info">Acceder au question </a>
                            <a href="./MyQuestion.php<?php echo '?id='.$ques['id'] ?>" class="btn btn-danger">Supprimer</a>
                       </div>
                                
                    </div><br>
                <?php
                }
                ?>    
</div>
</body>
</html>