<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <title> Home |  Red  chilliZ </title>

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type = "text/css" href ="css/index.css">

  </head>

  <!--<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">-->

  

  <body style = "background:url( images/r4.jpg)">

    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){  /**The scroll top button is visible only afetr you have scrolled down 20px**/
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {  /**it lets you scroll to the top of the screen**/
        document.body.scrollTop = 0;/**for google chrome,safari**/
        document.documentElement.scrollTop = 0;/**For IE**/
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"> Red  chilliZ</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="logo.png"></div>
        <div class="col-xs-5 line"><hr></div>
        <div class="tagline">Good Food is Good Mood<font color="red"></div>
    </div>
    <br>
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customersignup.php" role="button" > Order Now </a></center>
    </div>


      <footer class="bottomfooter" style="margin-top:10px;padding-top:10px;border:1px pink solid;bottom:0px;position: relative;font-weight: bold;background-color:
      #101010;text-align:  center;color:white;font-size: 20px;padding: 20px 10px;">
            
     <div class="bottom-footer" style="display: flex;flex: 1;justify-content:space-around;">
       <!--Working hours-->

       <div class="workinghours">
        Working hours:
        <br>
        9:00am-9:00pm on all days
        </div>
        <!--Address-->

          <div id="address">
            Address:
            <br>
            Red chilliZ Malleshwaram, Bangalore
          </div>

          

          <div class="mail">
            E-mail:
            <br>
            <span class="glyphicon glyphicon-envelope"></span>
            <a style="text-decoration: none;
            color:white;" id="mail" href="mailto:quickbites@gmail.com">RedchilliZ@gmail.com</a>
          </div>
     

         
    </div>
      <hr style="width:30%;">
      <div class="copyright" style=" display: flex;justify-content: center;">
        Copyright &copy 2020 Red chilliZ.All rights reserved.
      </div>

      <div class="social" style="padding-top: 10px;">  <!--To change color of social media (font awesome) icons Font awesome not glyphicon -->
        <a style="margin: 20px;color:white; " class="social" href="https://www.facebook.com"><i aria-hidden="true" 
          class="fa fa-facebook fa-3x" data-toggle="tooltip" title="Facebook"></i></a>
          <a style="margin: 20px;color:white;" class="social" href="https://www.instagram.com"><i aria-hidden="true" 
            class="fa fa-instagram fa-3x" data-toggle="tooltip" title="Instagram"></i></a>
      <a style="margin: 20px;color:white;" class="social" href="https://www.twitter.com"><i aria-hidden="true" 
        class="fa fa-twitter fa-3x" data-toggle="tooltip" title="Twitter"></i></a>
      </div>

     </footer>  

    
  
</body>
</html>