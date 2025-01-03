


<style >
     
     hr.new1 {
  border: 1px solid #385e82;
  border-radius: 2px;
}
</style>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="../css/stylehome.css">
 
<title>Tableau de bord de stagiaire:</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/monstyle.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" /> 
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
           <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script>
           <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/locale/fr.js"></script>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> 
  <style>
  .hide
  {
     display:none;
  }
  </style>
          
    <title></title>
</head>
  <style>
  @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@700&display=swap');
</style>
<body style="font-family: 'Verdana', monospace;">
   <?php include 'nav.php' ?>

<div class="container-fluid">
    

     
    
  <br>
  <br>
    
<div class="row">
     

  <div class="col-md-12 ">
    
         <div class="panel panel-primary ">
                  <div class="panel-heading" style="background-color:rgb(71, 122, 189); color:rgb(255, 255, 255) ; height: 40px;">

                <h5 class="text-center" style="margin-top: 4px; font-weight: bold;">Espace Etudiant</h5>

                </div>
                <div class="panel-body"> 
                 
           <br /><br />  
           
                        
                    <div class="container">

                   <h1><strong>Bienvenue !</strong></h1> 
        <img src="../images/123.jpg" width="100px" height="100px" class="img-circle" style="float: right;">
                            <div style="padding-left:40px">
                    <p>Voici tes informations :</p>
                        </div>
    <div style="padding-left:70px">
                    
                    
                        <tr>
                        <li><strong>Nom :Abdelhamid</strong></li>
                        <li><strong>Prénom :SOUSSI</strong></li>
                        <li><strong>Sexe :Masculain </strong></li>
        <li><strong>Date de naissance :01/01/2012</strong></li>
        <li><strong>Lieu de naissance :Agadir</strong></li>
                        </tr> 
                        <tr>
        <li><strong>N_téléphone :0612345678</strong></li>
        <li><strong>Email :hamidsososi@gmail.com</strong></li>
        <li><strong>Login :hamid123</strong></li>
                    
                        
                        </tr> 
                    
                    </div>    
             </div>
             <div class="" style="margin-left: 5%; margin-right: 5%;">  
                     <div align="right">  
                          <button type="button" name="add" id="add" data-toggle="modal" data-target="#add_data_Modal" class="btn" style="background-color: #afc8a4; color: #385e82"><span class="glyphicon glyphicon-edit"></span> Modifier</button> 
                         <br><br>
                     </div> 
                    </div>
             </div>
      </div>
  </div>
    </div>
    </div>
    </body>
</html>

 
 <div id="add_data_Modal" class="modal fade" data-backdrop="static" data-keyboard="false">  
      <div class="modal-dialog">  
           <div class="modal-content">  
                <div class="modal-header" style="background-color:rgb(71, 122, 170); color: #385e82">  
                     <button type="button" class="close" data-dismiss="modal" style="color: #FFFFFF">&times;</button>  
                     <h4 style="font-family: 'Verdana', monospace;" class="modal-title text-center">INFORMATION DETAILLEE</h4>  
                </div>  
                <div class="modal-body"> 
                

                      <form method="post" method="post" >
                          
      <div class="form-row">

    <div class="form-group col-md-3" >
      <label for="Societe">Nom :</label>
    <input type="text" name="nom" class="form-control" value="" id="nom" placeholder="Nom ">

  
  
    </div>

     <div class="form-group col-md-6">
      <label for="produit">Prénom :</label>
     


   <input type="text" name="prenom" class="form-control" value="" placeholder="Prénom ">



    </div>
     <div class="form-group col-md-3">
      <label for="Email">Sexe :</label>

        <select class="form-control" name="civilite" value="" >
    <option value="M">Masculain</option>
    <option value="F">Féminin</option>
   
  </select>
    </div>
  </div>
    <div class="form-row">
       <div class="form-group col-md-6">
      <label for="tel">Date de naissance :</label>
      <input type="date" name="datenaissance1" value="" class="form-control" n >
    </div>
    <div class="form-group col-md-6">
      <label for="ice">Lieu de Naissance :</label>
      <input type="text" name="ln" value="" class="form-control" placeholder="Lieu de naissance">


    </div>
  
  </div>
      <div class="form-row">
       <div class="form-group col-md-6">
      <label for="tel">Email :</label>
      <input type="email" name="email" value="" class="form-control" id="email" placeholder="email">
    </div>
    <div class="form-group col-md-6">
      <label for="ice">N_téléphone :</label>
      
      <input type="text" name="Ntel" class="form-control" value=""  placeholder="+212 6 xxx xxxx ">
    </div>
  </div>
 
    <div class="form-row" >
            <div class="form-group col-md-12">
         <label for="login">Login :</label>
      
      <input type="text" name="login" value="" class="form-control " align="center"  placeholder="Login ">
    </div>
       

</div>
              <div class="form-row">
       <div class="form-group col-md-12">
        <input type="submit" name="insert" id="insert" value="Enregistrer"  class="btn btn-success" style="background-color: #afc8a4; color: #385e82"/>  
        <button type="button" class="btn btn-default" onclick="window.location='profil.php'" style="background-color: #afc8a4; color: #385e82">Annuler</button>  
    </div>  
  </div>                  
                     </form>  
                </div>  
                <div class="modal-footer">  
                </div>  
           </div>  
      </div>  
 </div>