<!DOCTYPE html>
<html>
<head>

	<meta http-equlv="X-UA-Compatable" content="IE-edge"/>
	<meta name="viewport" content="width-device-width"/>
	<title>home</title>
	<meta http-equlv="Content-type" content="text/html;charset-iso-8859-1"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet"  href="css/style.css"/>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="stylevideo.css">
    <style>
    #myVideo {
      
      
      right: 0;
      bottom: 0;
      width: 100%;
      height: 100%;
}
        #sign{
            text-align: right;
            
        }
    </style>
</head>
<body>

<div class="container-fluid">
  	<div class="container-fluid" style="background-color: black;color: white;height: 100px">
     <div class="container " >
         <h2 class="text-white" align="center"><marquee>TAKE ME TO SPACE</marquee></h2>

     </div>
  	</div>
	
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
    <a href="index.php" class="navbar-brand">TAKE ME TO SPACE</a>
    <a href="login.php" class="navbar-brand" id="sign">Sign Up</a>
    <a href="signup.php" class="navbar-brand">Login</a>
        </div>
    </nav>

<div class ="container" >
     <video autoplay muted loop id="myVideo" >
	  <source src="Planet.mp4" type="video/mp4">
	  Your browser does not support HTML5 video.
	  <h1>video</h1>
	</video>
    
</div>
</body>
</html>
