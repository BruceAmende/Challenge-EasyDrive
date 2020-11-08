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
                            <a class="nav-link color-aqua-hover" href="lesoverzicht.php">Les overzicht</a>
                         </li>
                        
                         <li class="nav-item">
                            <a class="nav-link color-grey-hover" href="contact.php">Aanmelden</a>
                         </li>
                         <li class="nav-item active">
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
<style>
body {font-family: Arial, Helvetica, sans-serif;}

form {border: 3px solid #f1f1f1;}
h2 {text-align: center;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>



 
 <!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="dbconn/dbconnInlog.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Email" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Wachtwoord" id="password" required>
				<input type="submit" value="Login">
			</form>
		</div>
	</body>
</html>