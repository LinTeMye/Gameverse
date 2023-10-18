<?php
session_start();

include("admin/confs/Connection.php");

$cart=0;
if(isset($_SESSION['cart']))
{
    foreach ($_SESSION['cart'] as $qty)
    {
        $cart+=$qty;
    }
}

if(isset($_GET['id']))
{
    $brandid=$_GET['id'];
    $product=$conn->query("SELECT * FROM product WHERE brandid=$brandid");
    
}
else
{
    $product=$conn->query("SELECT * FROM product");
    
}

$brand=$conn->query("SELECT * FROM brand");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
			<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!--   <link rel="stylesheet"  href="css/style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card" id="myNavbar">
    <a  class="w3-bar-item w3-button w3-wide"><img src="gameverse photo\gameverse logo5.png" class="img-fluid" style="width:200px;height:40px;border-radius:200%"></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
    <a href="#home" class="w3-bar-item w3-button">Home</a>
      <a href="#about" class="w3-bar-item w3-button">About us</a>
      <a href="#product" class="w3-bar-item w3-button"> Console & Game</a>
      <a href="#service" class="w3-bar-item w3-button">Services</a>
      <a href="#contact" class="w3-bar-item w3-button">contact us</a>
      <a href="view-cart.php" class="w3-bar-item w3-button">(<?php echo $cart ?>)<i class="fa fa-shopping-cart"></i></a>
    
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>
<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
   <a href="#home" onclick="w3_close()" class="w3-bar-item w3-button">Home</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About us</a>
  <a href="#product" onclick="w3_close()" class="w3-bar-item w3-button">Console & Game</a>
  <a href="#service" onclick="w3_close()" class="w3-bar-item w3-button">Services</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Contact us</a>
  <a href="view-cart.php" onclick="w3_close()" class="w3-bar-item w3-button">View Cart</a>

</nav>

<!-- end naav bar -->

     <div class="container-fluid" id="home">
    <div class="row">
      <div class="col-md-12"><div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
   <center> <img src="gameverse photo\ps5.png" alt="Ps5"  style="width:80%; height:450px; " ></center>
      <div class="carousel-caption">
    <!-- <h3>Welcome to our shop</h3>
    <p>Feel the unique taste!</p> -->
    </div>
  
    </div>
    <div class="carousel-item">
   <center> <img src="gameverse photo\cyberpunk.png" alt="cyberpunk" style="width:80%; height: 450px;"></center>
        <div class="carousel-caption">
    <!-- <h3>Welcome to our shop</h3>
    <p>Feel the unique taste!</p> -->
    </div>
    </div>
    <div class="carousel-item">
     <center><img src="gameverse photo\xbox series x.jpg" alt="x box" style="width:80%; height: 450px; "></center>
        <div class="carousel-caption">
    <!-- <h3>Welcome to our shop</h3>
    <p>Feel the unique taste!</p> -->
    </div>
  </div>
  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>
    </div>
  </div>
  <!-- end of carousel -->
  <br>
  <div class="row">
  <div class="col-md-12">
  <h2 style="text-align:center; font-family:Courier;">The place for gamer</h2>
  </div>
  </div>
  <br>
  <br>
  <div class="container-fluid">
  	<div class="row">
  <div class="col-md-12"></div>
   <div class="col-md-6">

<center><iframe  width="460" height="315"  src="https://www.youtube.com/embed/NTunTURbyUU"  allow="autoplay=1;" allowfullscreen></iframe></center>
      </div>
  <div class="col-md-6">
  <h2 style="text-align:center;">Marvel's Spider-Man: Miles Morales</h2>
  <br><br>
   <p style="margin-left; font-size:16px">Experience the rise of Miles Morales as the new hero masters incredible, explosive new powers to become his own Spider-Man</p>
  </div>
  </div>   
  </div>
    <br><br>
  <div class="container-fluid">
  	<div class="row">
  <div class="col-md-12"></div>
   <div class="col-md-6">
     <h2 style="text-align:center;">Cyberpunk 2077</h2>
  <br><br>
   <p style="margin-left; font-size:16px">Enter the massive open world, become a cyberpunk, an urban mercenary equipped with cybernetic enhancements and build your legend on the streets of Night City.</p>
      </div>
  <div class="col-md-6">
<center><iframe width="460" height="315" src="https://www.youtube.com/embed/U8qJc6znzZc" frameborder="0" allow=" autoplay; " allowfullscreen></iframe></center>
  </div>
  </div>   
  </div>
    <br>  <br>
  <div class="container-fluid">
  	<div class="row">
  <div class="col-md-12"></div>
   <div class="col-md-6">
<center><iframe width="460" height="315" src="https://www.youtube.com/embed/1O6Qstncpnc" frameborder="0" allow="autoplay;" allowfullscreen></iframe></center>
      </div>
  <div class="col-md-6">
  <h2 style="text-align:center;">Hogwarts Legacy</h2>
  <br><br>
   <p style="margin-left; font-size:16px">Discover the feeling of living at Hogwarts as you make allies, battle Dark wizards, and ultimately  decide  the fate of the wizarding world. Your legacy is what you make of it.</p>
  </div>

  </div>   
  </div>
  
    <div class="w3-container" style="padding:128px 16px" id="about">
    <div class="w3-center">
    <img src="gameverse photo\gameverse logo2.png">
    </div>
  <h3 class="w3-center">ABOUT OUR SHOP</h3>
  <p class="w3-center w3-large">Key features of our company</p>
  <div class="w3-row-padding w3-center" style="margin-top:45px">
  <div class="row">
  <div class="col-md-12"></div>
    <div class="col-md-4">
      <i class="fa fa-history w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Our history</p>
      <p>This business was founded in the since 2018 and we have serve our customer with our best</p>
    </div>
    <div class="col-md-4">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Our purpose</p>
      <p>To give the up to date gaming product to gamer with resonable price</p>
    </div>

    <div class="col-md-4">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Our offer</p>
      <p>We have serve our customer with the first and reliable purchase process, services and also with the warranty</p>
    </div>
  </div>
  </div>
</div>

     <div class="w3-container" id="product">
 	<center><h1>Consoles & games</h1></center>
    <br>
    <div class="w3-center">
     <div class="w3-bar w3-white ">
   <?php 
   while($row=$brand->fetch(PDO::FETCH_ASSOC))
    { ?> 
   <div class="w3-bar-item">
    <a href="index.php?id=<?php echo $row['id']?>">
    <div class="w3-bar-item" >  <?php echo $row['name']?> </div>
    </a>
   </div>
    <?php
    }
    ?>
  </div>
</div> 
<style>
.product{
    list-style: none;
  margin: 80px;
  padding: 0;
  overflow: hidden;
   
}
.product li{
width: 200px;
text-align: center;
height: 350px;
float: left;
margin:: 35px 20px;
font-size: 15px;
}
</style>
<div class="main">
 <ul class="product"> 
<?php 
while ($row=$product->fetch(PDO::FETCH_ASSOC))
{?>
<li>
<img src="admin/covers/<?php echo $row['cover']?>" height="150">
<b>
<br>
 <a href="product-detail.php?id=<?php  echo $row['id']?>">
 <?php echo $row ['model']?> 
 </a>
</b>
<br>
<i>$<?php  echo $row['price']?></i>
<br>
<?php echo $row['company']?>
<br>
<a href="add-to-cart.php?id=<?php  echo $row['id']?>" class="add-to-cart">Add to Cart</a>

</li>


<?php 
}
?> 

</ul>

</div>
</div>
 <div class="row" id="service">
  <div class="col-md-12">
  <h2 style="text-align:center; font-family:Courier;">Our services</h2>

  </div>
  </div>
  <br>
  <br>
  <div class="container-fluid">
  	<div class="row">
  <div class="col-md-12"></div>
   <div class="col-md-6">

<center><img src="gameverse photo\loyalty1.jpg"></center>
      </div>
  <div class="col-md-6">
  <h2 style="text-align:center;">Customer Loyalty program</h2>
  <br><br>
   <p style="margin-left; font-size:16px">Our loyalty program offer the discount, reward and gift when the customer purchase is reach the limit that we set</p>
  </div>

  </div>   
  </div>
  
    <br>
  <br>
  <div class="container-fluid">
  	<div class="row">
  <div class="col-md-12"></div>
   <div class="col-md-6">
     <h2 style="text-align:center;">Customer services</h2>
  <br><br>
   <p style="margin-left; font-size:16px">We offer the brand new product only and if our product have damage and we will also give the fixing service and also we offer the warranty for the product</p>


      </div>
  <div class="col-md-6">
<center> <img src="gameverse photo\service.png"> </center>
  </div>

  </div>   
  </div>
  
    <br>
  <br>
  <div class="container-fluid">
  	<div class="row">
  <div class="col-md-12"></div>
   <div class="col-md-6">

<center><img src="gameverse photo\delivery2.png" style="width:300px; hight:300px"></center>
      </div>
  <div class="col-md-6">
  <h2 style="text-align:center;">Delivery services</h2>
  <br><br>
   <p style="margin-left; font-size:16px">We also do delivery for our customer from the various place with fast and free service.</p>
  </div>

  </div>   
  </div>
  <div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
   <div class="w3-row">
    <div class="w3-col m7">
   <center><img src="gameverse photo\contact.jpg" style="width:300px; hight:300px"></center>
    </div>
    <div class="w3-col m5">
   <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Yangon, Myanmar</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +95 98432564</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  gameverse@gmail.com</p>
    </div>
    </div>
    </div>
  </div>
  <<br>
 
 <div class="w3-bar w3-black">
	
<footer class="page-footer font-small blue pt-4">


  <div class="container-fluid text-center text-md-left">
    <div class="row">

      <div class="col-md-6 mt-md-0 mt-3">

      <center> <img src="gameverse photo\gameverse logo5.png" class="img-fluid" style="width:200px;height:100px"></center>

      </div>

      <hr class="clearfix w-100 d-md-none pb-3">

      <div class="col-md-3 mb-md-0 mb-3">

        <h5 class="text-uppercase">Contact us</h5>

    	   
      <h3>Address</h3>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Yangon, Myanmar</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +95 98432564</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  gameverse@gmail.com</p>
    

      </div>
  
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Follow us on</h5>
		<i class="fa fa-facebook"></i>
		<i class="fa fa-twitter"></i>
		<i class="fa fa-youtube"></i>

      </div>

    </div>

  </div>
  
  <div class="footer-copyright text-center py-3">© 2020 All right reserved.
  
  </div>

</footer>


  
  </div>
		
</body>
</html>

 
