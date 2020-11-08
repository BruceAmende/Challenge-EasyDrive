<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'rijschooleasydrive';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// We don't have the password or email info stored in sessions so instead we can get the results from the database.
$stmt = $con->prepare('SELECT wachtwoord, email FROM leden WHERE id = ?');
// In this case we can use the account ID to get the account info.
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<html>
<head>
<meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Site Metas -->
   <title>EasyDrive</title>
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
   <link href="css/login.css" rel="stylesheet">
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
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
                         <li class="nav-item">
                            <a class="nav-link color-aqua-hover" href="overzicht.php">Overzicht</a>
                         </li>
                        
                         <li class="nav-item">
                            <a class="nav-link color-grey-hover" href="contact.php">Aanmelden</a>
                         </li>
                         <li class="nav-item">
                            <a class="nav-link color-grey-hover" href="login.php">Inloggen</a>
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

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Profile Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				
				<a href="profiel.php"><i class="fas fa-user-circle"></i>Profiel</a>
				<a href="loguit.php"><i class="fas fa-sign-out-alt"></i>Loguit</a>
			</div>
		</nav>
		<div class="content">
			<h2>Profiel</h2>
			<div>
				<p>Jouw account gegevens zijn:</p>
				<table>
					<tr>
						<td>Naam:</td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Wachtwoord:</td>
						<td><?=$password?></td>
					</tr>
					<tr>
						<td>Email:</td>
						<td><?=$email?></td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>