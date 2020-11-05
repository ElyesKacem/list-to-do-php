<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <title>Login</title>

    <style>

.form-signin .form-control {
  
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.far{
    margin-top: 20px;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.down{
    margin-top: 60px;
}
.down2{
    margin-top: 20px;
}
    </style>

    
</head>
<body>
<?php
  session_start();
  if(isset($_SESSION['nom']))
  {
    header("location:acceuil.php");
  }
  ?>
    <div class="container down">
      <h1 class="text-center">Login</h1>
      <div class="container down">
        <form action="loginprocess.php" class="form-signin" method="post">
         
          
          
          

          <div class="form-group">
            <label for="mail">Email address</label>
            <input name="mail" type="email" class="form-control" id="mail" placeholder="Enter email"  >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="mdp">Password</label>
            <input name="mdp" type="password" class="form-control" id="mdp" placeholder="Password" required >
          </div>    
          

          <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>

            <div class="down2">
                
                Vous n'avez pas un compte ? <a href="formulaire.php">Créer un compte</a>
            </div>

            
            <?php 
              
              if(isset($_GET['erreur']))
              {
                ?>
                        <div id="erreur" class="alert alert-danger alert-dismissible far">
                        <?php echo $_GET['erreur']; ?>
                        <button type="button" class="close" data-dismiss="alert">&times;</button></div>

            <?php  }
              

              ?>
            

       
                  


        </form>
        
      </div>
    </div>
    
</body>
</html>