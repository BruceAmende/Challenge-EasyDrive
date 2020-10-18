<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>Loxury</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- site icon -->
   <link rel="icon" href="images/fevicon.png" type="image/png" />
   <!-- Bootstrap core CSS -->
   <link href="css/bootstrap.css" rel="stylesheet">
   <!-- FontAwesome Icons core CSS -->
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <!-- Custom animate styles for this template -->
   <link href="css/animate.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="style.css" rel="stylesheet">
   <!-- Responsive styles for this template -->
   <link href="css/responsive.css" rel="stylesheet">
   <!-- Colors for this template -->
   <link href="css/colors.css" rel="stylesheet">
   <!-- light box gallery -->
   <link href="css/ekko-lightbox.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
   </head>
   <header class="header">

<div class="header_top_section">
   <div class="container">
      <div class="row">
       <div class="col-lg-3">
          <div class="full">
             <div class="logo">
                <a href="index.html"><img src="images/gay2.jpg" alt="#" /></a>
             </div>
          </div>
       </div>
       <div class="col-lg-9 site_information">
          <div class="full">
              <div class="top_section_info">
                 <ul>
                   <li>Contacteer ons: <img src="images/i1.png" alt="#" /> <a href="#">( +71 7569834142 )</a></li>
                   <li><img src="images/i2.png" alt="#" /> <a href="#">easydrive@gmail.com</a></li>
                   <li><img src="images/i3.png" alt="#" /> <a href="#">Huizenlaan 23 Den bosch , NL</a></li>
                </ul>
              </div>
          </div>
       </div>
    </div>
   </div>
</div>

<div class="header_bottom_section">

 <div class="container">
    
   <div class="row">
       <div class="col-md-12">
          <div class="full ">
             <div class="main_menu">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="float-left">Menu</span>
                   <span class="float-right"><i class="fa fa-bars"></i> <i class="fa fa-close"></i></span>
                   </button>
                   <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                      <ul class="navbar-nav">
                         <li class="nav-item ">
                            <a class="nav-link" href="index.php">Home</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link color-aqua-hover" href="about.html">Over ons</a>
                         </li>
                         <li class="nav-item active">
                            <a class="nav-link color-aqua-hover" href="overzicht.php">Overzicht</a>
                         </li>
                        
                         <li class="nav-item">
                            <a class="nav-link color-grey-hover" href="contact.php">Aanmelden</a>
                         </li>
                         
                      </ul>
                   </div>
                </nav>
             </div>
             <div class="search_bar">
                <form action="index.html">
                   <input type="text" class="search_field" placeholder="Zoek" required />
                   <button class="search_button" type="button"><i class="fa fa-search"></i></button>
                </form>
             </div>
          </div>
       </div>
    </div>
 </div>
</header>
 <?php require('dbconn/dbconn.php') ?>
    
    

<!DOCTYPE html>

<html>
<head>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  background-color: lightgreen;
 
}

td, th {
  border: 2px solid black;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>



<h2>Overzicht leden</h2>

<table>

  <tr>
  
    <th>ID</th>
    <th>Voornaam</th>
    <th>Achternaam</th>
    <th>Email</th>
    <th>Telefoon</th>
    <th>Leeftijd</th>
    <th>Opmerkingen</th>
    <th>Verwijder lid</th>
    <th>Update</th>
  </tr>
  <tbody>
   <?php foreach($database_gegevens as $data):?>
  <tr>
    <td><?php echo $data["id"]?></td>
    <td><?php echo $data["voornaam"]?></td>
    <td><?php echo $data["achternaam"]?></td>
    <td><?php echo $data["email"]?></td>
    <td><?php echo $data["telefoon"]?></td>
    <td><?php echo $data["leeftijd"]?></td>
    <td><?php echo $data["opmerkingen"]?></td>
    <td><a href="db.conn/db.connDelete.php?id=<?php echo $data['id']; ?>"  class="btn btn-danger">Verwijder</a></td></td>
    <td><a href="update.php?id=<?php echo $data['id']; ?>"  class="btn btn-light">Update</a></td></td>
    
    
  </tr>
  </tbody>
  </tr>
  <?php endforeach; ?>
</table>

</body>
</html>
      <!-- end footer -->
      <!-- Core JavaScript
         ================================================== -->
      <script src="js/jquery.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/parallax.js"></script>
      <script src="js/animate.js"></script>
      <script src="js/ekko-lightbox.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
