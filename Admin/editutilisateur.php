<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier utilisateur</title>
</head>

<body>
    <?php include("nav.php"); ?>

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color:rgb(33, 100, 145); color: #385e82">
                <h4 style="font-family: 'Varela Round', sans-serif;color:aliceblue;" class="modal-title text-center">Modifier les informations </h4>
            </div>

         
            

            <div class="modal-body">
                <form method="post" action="updateutil.php" >
                    <h3 style="color:#385e82; font-family: 'Staatliches', cursive;" class="titre">INFORMATIONS</h3>
                    
                    <div class="form-group">
                        <label for="nom">Login :</label>
                        <input type="text" name="login" placeholder="Login" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label for="prenom">Email :</label>
                        <input type="email" name="email" placeholder="Email@gmail.com" class="form-control" value="" />
                    </div>
                    <div class="form-group">
                        <label for="prenom">N_Téléphone :</label>
                        <input type="text" name="Ntel" placeholder="+212 6 xxxx xxxx" class="form-control" value="" />
                    </div>
                    
                    
                   
             
                  <input type="hidden" name="edit" id="edit" />  
                          <input type="submit" name="edit" id="edit" value="Enregistrer" onclick="window.location='utilisateur.php'"  class="btn btn-success" style="background-color: #385e82; color:antiquewhite"/> 
                      <a href="editpwd.php">Changer le mot de passe</a>
            
      
     
                </form>
  </div>  
        </div>
    </div>
    
</body>
</html>
