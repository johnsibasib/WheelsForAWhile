<html>

  <head>
    <title>WHEELS FOR A WHILE</title>
    <link rel="shortcut icon" type="image/png" href="assets/img/P.png.png">
    <link rel="stylesheet" type = "text/css" href ="assets/bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    
</head>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
     
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

  
  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation" style="color: black">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="index.php">
                   WHEELS FOR A WHILE</a>
            </div>
     

            <?php include 'alllogins.php';?>

         
        </div>
       
    </nav>

<?php

require 'connection.php';
$conn = Connect();

$client_name = $conn->real_escape_string($_POST['client_name']);
$client_username = $conn->real_escape_string($_POST['client_username']);
$client_email = $conn->real_escape_string($_POST['client_email']);
$client_phone = $conn->real_escape_string($_POST['client_phone']);
$client_address = $conn->real_escape_string($_POST['client_address']);
$client_password = $conn->real_escape_string($_POST['client_password']);

$query = "INSERT into clients(client_name,client_username,client_email,client_phone,client_address,client_password) VALUES('" . $client_name . "','" . $client_username . "','" . $client_email . "','" . $client_phone . "','" . $client_address ."','" . $client_password ."')";
$success = $conn->query($query);

if (!$success){

	die("Couldnt enter data: ".$conn->error);
}

$conn->close();

?>


<div class="container">
	<div class="jumbotron" style="text-align: center;">
		<h2> <?php echo "Welcome $client_name!" ?> </h2>
		<h1>Your account has been created.</h1>
		<p>Login Now from <a href="clientlogin.php">HERE</a></p>
	</div>
</div>

    </body>
  
</html>