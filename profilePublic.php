<?php 

require('./action/profilePublicAction.php');
require('./action/securityAction.php');



?>


<!DOCTYPE html>
<html lang="en">
<?php  include './include/head.php' ?>
<body>
<?php  include './include/navbar.php' ?>


  <div class="container">

               <?php  
                        if(isset($errorMsg))
                        {?>
                           <div class="aleart aleart-danger">   
                              <?php   echo $errorMsg; ?>
                           </div>
                           <?php
                        }
               ?>
            <?php  
                while($infoProfil = $profile->fetch())
                { ?>
                  <br>
                  <div class="card">
                    <div class="card-header">
                        <?php  echo  "@".$infoProfil['pesudo'];?>
                    </div>
                    <div class="card-body">
                        <?php  echo  " <h4> Nome </h4> ".$infoProfil['pesudo'];?>
                    </div>
                    <div class="card-body">
                        <?php  echo  " <h4> Prenome </h4>".$infoProfil['pesudo'];?>
                    </div>
                </div><?php

                }

                ?>
                 <?php  
                while($infoquestion = $userQuestion->fetch())
                { ?>
                  <br>
                  <div class="card">
                    <div class="card-header">
                        <?php  echo $infoquestion['titel'];?>
                    </div>
                    <div class="card-body">
                        <?php  echo  $infoquestion['question'];?>
                    </div>
                    <div class="card-header">
                        <?php  echo  $infoquestion['description'];?>
                    </div>
                    </div>
                    <?php

                }

                ?>
               </div>
            </div>
  </div>
</body>
</html>