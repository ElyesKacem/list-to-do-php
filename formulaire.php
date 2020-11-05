<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    <title>formulaire</title>

    <style>

.form-signin .form-control {
  
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.down{
    margin-top: 40px;
}
.far{
    margin-top: 30px;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.down2{
    margin-top: 30px;
}
    </style>

    <script>

      function verifpass(ch) {
        if(ch==document.getElementById("mdp").value)
        {
          document.getElementById("erreur").innerHTML="Le mot de passe n'est pas bien confirmé";
        }
        
      }
    </script>
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
      <h1 class="text-center">Formulaire</h1>
      <div class="container">
        <form action="registerprocess.php" class="form-signin" method="post">
         
          
          <div class="form-group">
            <label for="nom">Nom</label>
            <input required name="nom" type="text" class="form-control" id="nom"  placeholder="Nom"  autofocus >
            
          </div>

          <div class="form-group">
            <label for="prenom">Prénom</label>
            <input required name="prenom" type="text" class="form-control" id="prenom" placeholder="Prénom"  >
          </div>
          

          <div class="form-group">
            <label for="mail">Email address</label>
            <input required name="mail" type="email" class="form-control" id="mail" placeholder="Enter email"  >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="mdp">Password</label>
            <input required name="mdp" type="password" class="form-control" id="mdp" placeholder="Password"  >
          </div>
          <div class="form-group">
            <label for="verifmdp">Confirm password</label>
            <input required name="verifmdp" type="password" class="form-control" id="verifmdp" placeholder="confirm Password"  >
          </div>
          

          <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
          <div class="down2">
            Vous avez déja un compte? <a href="login.php">Sign in</a>
          </div>
          <div class="erreur" class="alert alert-danger alert-dismissible far">
            
          </div>

       <?php 


       ?>
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
    <br><br>
</body>
</html>