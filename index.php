<?php require('./action/signup_action.php'); ?>

<!DOCTYPE html>
<html lang="en">

<?php include './include/head.php' ?>

<body>
    <br><br>
    <div class="container">
        <div class="col-md-12">
            <div >
     <h4 style="color:red;" >  you can ask your question Or any Problem and watch many answear of Friends .  just created account and dispose your problem !!! </h4> <br>

          <h4 style="color:red;">  vous pouvez poser votre question ou n'importe quel problème et regarder de nombreuses réponses d'amis. viens de créer un compte et règle ton problème !!!</h4>
            </div>
            <center><h1>Register</h1></center>
                <?php   if(isset($errorMsg)) { ?>  <div class="alert alert-danger"> <?php echo $errorMsg ; } ?> </div>

                <img  style="margin-left:40%;" src="./images/download.jpg" >
         <form method="post" >
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
                    <input type="text" name="pesudo" class="form-control">
                </div>
                
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">nome</label>
                    <input type="text"  name="nome" class="form-control">
                </div>
                
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">password</label>
                    <input type="password" name="password" class="form-control">
                </div>
               
                    <button type="submit" name="submite" class="btn btn-primary">S'inscrire</button>
            </form>
            <a href="login.php"> j'ai un compte </a> 
        </div>
    </div>
</body>
</html>
