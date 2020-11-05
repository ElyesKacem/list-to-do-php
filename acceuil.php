  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Acceuil</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php session_start();        
    $conn=mysqli_connect("localhost","root","","listtodo");
    ?>
        
    <div style="margin:auto;width: 80%;">
          
      <div class="container-fluid p-3 my-3 bg-dark text-white text-center">
        <h3>Welcome   <?php  if(null!=$_SESSION['nom'])  {echo $_SESSION['nom'];}else{header("location:login.php");}  ?> </h3>                                     
        <div class="ontainer text-right"><a href="logout.php">Logout</a></div>
      </div>

      <div class="container-fluid  bg-light p-3">

        <form action="ajouttach.php" method="GET">
          
          <div class="input-group mb-3">

            <input type="text" class="form-control" id="tache" name="tache" autofocus placeholder="Ajouter une tache">
            <div class="input-group-append">
              <button type="submit" class="btn btn-primary">
                <svg width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" >
                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path fill-rule="evenodd" d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg> Ajouter
              </button>
            </div>
          </div>

        </form>

      </div>
                    
      <?php 
      $mail=$_SESSION['mail'];
      $result=$conn->query("SELECT val,Id,tdate from taches where towner like '$mail' order by tdate desc;");
      if($result->num_rows==0) {
      
      
      
      ?>

      <div class="container text-center">
      
      Il n'y a aucune taches à faire.
      
      </div>

      <?php
        }
        else
        {



          
          
          //print_r($row); 
          while($row=$result->fetch_assoc())
          { ?>
          




            <div class="container-fluid bg-light tache p-3">   <?php echo $row['val'];?>  <a href="deleteTask.php?val=<?php echo $row['Id']; ?>"><button type="button" class="close">&times;</button> </a><small id="emailHelp" class="form-text text-muted"> <?php echo date('l jS \of F Y h:i:s A', $row['tdate']);  ?></small>


          </div>



      <?php
        }



       








      }

      
      
      ?>




<br><br><br>




  </body>
  </html>