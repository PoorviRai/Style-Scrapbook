<?php

$dbhost='localhost';
$dbuser='root';
$dbpass='';

//connection with database server
$conn= mysql_connect($dbhost,$dbuser,$dbpass);
if(!$conn){
die('could not connect'.mysql_error());
}else
{
echo" Connection to the server made";
}

//connection with database
$selected = mysql_select_db("miniproject",$conn);
//isset is used to manage the error of undefined index
if(isset($_POST["submit"])){

$Name =$_POST['Name'];
$Contact =$_POST['Contact'];
$Address =$_POST['Address'];
$Email =$_POST['Email'];
$Password =$_POST['Password'];
$Cpassword =$_POST['Confirm_Password'];

$sql = "INSERT INTO sign_ups VALUES('$Name','$Contact','$Address','$Email','$Password','$Cpassword')";

$retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }else{
				echo"data is inserted" ;
			}


mysql_close($conn);
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Style Scrapbook</title>

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />

<link rel="stylesheet" href="assets/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<!--javascript-->
<script type=text/javascript>
function validate()
{
if(reg.Name.value=="")
{
    alert("Please Enter Name")
    return false
}
if(isNaN(reg.Contact.value)&&reg.no.value<"999999999")
{
    alert("Please Enter Valid Contact No.")
	return false
}
if(reg.Email.value=="")
{
    alert("Please Enter your Email address")
    return false
}
if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(reg.Email.value))
{
    alert("Please Enter Valid Email address")
	return false
}
if(reg.Password.value=="")
{
    alert("Please Enter Password")
    return false
}
if(reg.Confirm_Password.value!=reg.p.value)
{
    alert("Please Confirm Correct Password")
	return false
}
return true
}
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body data-spy="scroll" data-target=".navbar">
<!-- jquery -->
<script src="assets/jquery.js"></script>
<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>
<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
<!-- custom script -->
<script src="assets/script.js"></script>

<div class="topbar animated fadeInLeftBig"></div>
<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/logotop.png" alt="logo"></a>
              <!-- #Logo Ends -->
            </div>

            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                 <li class="active"><a href="#home">Home</a></li>
                 <li ><a href="#about" data-toggle="collapse">About</a></li>
                 <li ><a href="#works">Works</a></li>
                 <li ><a href="#creators" data-toggle="collapse">Creators</a></li>
                 <li ><a href="#register">Register</a></li>                 
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Ends -->
<div id="home">
<!-- Slider Starts -->
<div id="myCarousel" class="carousel slide banner-slider animated flipInX" data-ride="carousel">     
      <div class="carousel-inner">
        <!-- Item 1 -->
        <div class="item active">
          <img src="images/1.jpg" width=500 height=500 alt="banner">          
            <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
            		<img src="images/logocenter.png" class="animated bounceInUp" alt="logo">
              		<h1 class="animated bounceInLeft">Collect all Memories to Travel Back in Time</h1>
              		<p class="animated bounceInRight">Let us Help You preserve them!</p>
              		<div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"></i>  View Sample ScrapBooks</a> <a href="#register" class="btn btn-default"></i> Start Your Own ScrapBook</a></div>
              		</div>
              	</div>
            </div>
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="images/back2.jpg" width=500 height=500 alt="banner">          
             <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
                <img src="images/logocenter.png" class="animated bounceInUp" alt="logo">
                  <h1 class="animated bounceInLeft">Your EveryDay Photos</h1>
                  <p class="animated bounceInRight">Capture each Passing Moment and Re-Live It Again</p>
                  <div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"></i>  View Sample ScrapBooks</a> <a href="#register" class="btn btn-default"></i> Start Your Own ScrapBook</a></div>
                  </div>
                </div>
            </div>
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="images/back3.jpg" width=500 height=500 alt="banner">          
             <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
                <img src="images/logocenter.png" class="animated bounceInUp" alt="logo">
                  <h1 class="animated bounceInLeft">Family Photographs</h1>
                  <p class="animated bounceInRight">From all the Vacation Fun to Every Sibling Fight, all at One Place</p>
                  <div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"></i>  View Sample ScrapBooks</a> <a href="#register" class="btn btn-default"></i> Start Your Own ScrapBook</a></div>
                  </div>
                </div>
            </div>
        </div>
        <!-- #Item 1 -->

        <!-- Item 1 -->
        <div class="item">
          <img src="images/back4.jpg" width=500 height=500 alt="banner">          
             <div class="carousel-caption">
            	<div class="caption-wrapper">
            		<div class="caption-info">
                <img src="images/logocenter.png" class="animated bounceInUp" alt="logo">
                  <h1 class="animated bounceInLeft">Wedding Themes</h1>
                  <p class="animated bounceInRight">Document all Important Milestones when Beginning Your New Life</p>
                  <div class="scroll animated fadeInUp"><a href="#works" class="btn btn-default"></i>  View Sample ScrapBooks</a> <a href="#register" class="btn btn-default"></i> Start Your Own ScrapBook</a></div>
                  </div>
                </div>
            </div>
        </div>
        <!-- #Item 1 -->
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
    </div>
<!-- #Slider Ends -->
</div>

<!-- Cirlce Starts -->
<div id="about"  class="container spacer about" "collapse">
<h2 class="text-center wowload fadeInUp">AN EXPERIENCE YOU'LL LOVE</h2>  
  <div class="row">
  <div class="col-sm-6 wowload fadeInLeft">
    <h4><i class="fa fa-paint-brush"></i> Freedom to Design</h4>
    <p>Customize any of the hundreds of our professional themes or start from scratch and let your unique ideas come to life. Choose from thousands of designs and backgrounds.</p>
    

  </div>
  <div class="col-sm-6 wowload fadeInRight">
  <h4><i class="fa fa-gift"></i> Amazing Quality</h4>
  <p>Our archival-quality eco-friendly pages feature sharp images and vibrant colors. With glossy image-wrapped hardcovers, and incredibly detailed print reproduction, you will enjoy your our products for years to come.</p>    
  </div>
  </div>

  <div class="process">
  <h3 class="text-center wowload fadeInUp">What We Offer</h3>
	<ul class="row text-center list-inline wowload bounceInUp">
   		<li>
            <span><i class="fa fa-camera"></i><b>EveryDay Themes</b></span>
        </li>
        <li>
            <span><i class="fa fa-group"></i><b>Family Themes</b></span>
        </li>
        <li>
            <span><i class="fa fa-male"></i><i class="fa fa-female"></i><b>Wedding Themes</b></span>
        </li>
        <li>
            <span><i class="fa fa-book"></i><b>ScrapBook Type</b></span>
        </li>        
        <li>
            <span><i class="fa fa-taxi"></i><b>Delivery</b></span>
        </li>
  	</ul>
  </div>
</div>
<!-- #Cirlce Ends -->


<!-- works -->
<div id="works"  class=" clearfix grid"> 
    <figure class="wowload fadeInUp">
        <img src="images/portfolio/1.jpg" alt="img01" height=224 width=442/>
    </figure>
     <figure class="effect-oscar wowload fadeInUp">
        <img src="images/portfolio/2.jpg" alt="img01" height=224/>
        <figcaption>
            <h2>Family</h2>
            <p>Love Through Generations Collected Together<br>
            <a href="family.html" title="1">View more</a></p>            
        </figcaption>
    </figure>
     <figure class="wowload fadeInUp">
        <img src="images/portfolio/3.jpg" alt="img01" height=224 width=442/>
     </figure>
     <figure class="effect-oscar wowload fadeInUp">
        <img src="images/portfolio/4.jpg" alt="img01" height=224/>
        <figcaption>
            <h2>Types</h2>
            <p>Choose what Your ScrapBook Looks Like<br>
            <a href="#carousel-types" title="1" >View more</a></p>            
        </figcaption>
    </figure>
     <figure class="effect-oscar wowload fadeInUp">
        <img src="images/portfolio/5.jpg" alt="img01" height=225 width=442/>
        <figcaption>
            <h2>EveryDay</h2>
            <p>Convert the Mundane into Something Cherished<br>
            <a href="everyday.html" title="1" >View more</a></p>            
        </figcaption>
    </figure>
     <figure class="wowload fadeInUp">
        <img src="images/portfolio/6.jpg" alt="img01" height=225/>
    </figure>
    <figure class="effect-oscar wowload fadeInUp">
        <img src="images/portfolio/7.jpg" alt="img01" height=225 width=442/>
        <figcaption>
            <h2>Wedding</h2>
            <p>Remember Every Detail of the Big-Day<br>
            <a href="weddings.html" title="1" >View more</a></p>            
        </figcaption>
    </figure>
    <figure class="wowload fadeInUp">
        <img src="images/portfolio/8.jpg" alt="img01" height=225 width=442/>
    </figure>    
</div>
<p>
<p>
<p>
<!-- works -->
    <div id="carousel-types" class="carousel slide types fadeInRight" data-ride="carousel">
    <p>
    <p>
    <p>
	<h2 class="text-center wowload fadeInUp">Cover to Cover</h2>
	<div class="carousel-inner">  
      <div class="item active">
	  <div class=col-md-8>
	  <div class="animated flipInY"><img alt="types" src="images/types/1.jpg" width=1500 height=300 class="img-circle img-responsive"></div>
      </div>
	  <div class=col-md-4>
	  <p><h5> Order your Scrapbooks in Styles that define you. Select any type from the various different binding options provided by us.</h5></p>
	  </div>
	  </div>
      <div class="item  animated bounceInRight row">
	  <div  class="col-md-4">
      <div class="animated slideInLeft"><img alt="softcover" src="images/types/2.jpg" width=500 height=300 class="img-circle img-responsive"></div>
      </div>
	  <div  class="col-md-6">
      <span><h3>Softcover</h3></span>
	  <p><h5> Durable and flexible, our softcover books are professionally bound. Perfect for showing off your best photos using one of our themes or your own custom layout.</h5> </p>
      </div>
      </div>
      <div class="item  animated bounceInRight row">
	  <div  class="col-md-4">
      <div class="animated slideInLeft"><img alt="hardcover" src="images/types/3.jpg" width=500 height=300 class="img-circle img-responsive"></div>
      </div>
	  <div  class="col-md-6">
      <span><h3>Hardcover</h3></span>
      <p><h5> Our sturdy hardcover book proudly displays your cover photos and offers custom text on the spine. You can also order it with a dust jacket for a dash of sophistication.</h5> </p>
	  </div>
      </div>
	  <div class="item  animated bounceInRight row">
	  <div  class="col-md-4">
      <div class="animated slideInLeft"><img alt="leather" src="images/types/4.jpg" width=500 height=300 class="img-circle img-responsive"></div>
      </div>
	  <div  class="col-md-6">
      <span><h3>Leather</h3></span>
	  <p><h5>Wrapped in a stylish dust jacket, covered edge to edge with your favorite photos, our premium black leather cover is the perfect complement to your custom layouts.</h5> </p>
      </div>
      </div>
	  <div class="item  animated bounceInRight row">
	  <div  class="col-md-4">
      <div class="animated slideInLeft"><img alt="matte" src="images/types/5.jpg" width=500 height=300 class="img-circle img-responsive"></div>
      </div>
	  <div  class="col-md-6">
      <span><h3>Matte</h3></span>
      <p><h5>Available on our premium lay flat books, the low-gloss matte finish reduces glare and looks good at any angle and in any light.</h5> </p>
	  </div>
      </div>
  </div>

   <!-- Indicators -->
   	<ol class="carousel-indicators">
    <li data-target="#carousel-types" data-slide-to="0"></li>
    <li data-target="#carousel-types" data-slide-to="1"></li>
    <li data-target="#carousel-types" data-slide-to="2"></li>
	<li data-target="#carousel-types" data-slide-to="3"></li>
	<li data-target="#carousel-types" data-slide-to="4"></li>
  	</ol>
  	<!-- Indicators -->
  </div>
    </div>
  </div>

 <div id="creators" class="clearfix grid"  "collapse"> 
<!-- creators -->
<h3 class="text-center wowload fadeInUp">Our team</h3>
<p class="text-center wowload fadeInLeft">Our creative team that is making everything possible</p>
<div class="row grid team wowload fadeInUpBig">	
	<div class="col-md-4">
	<figure class="effect-chico">
        <img src="images/team/1.jpg" width=200 alt="img01" class="img-responsive" />
        <figcaption>
            <p><b>Sharfunnisa Aaminah</b><br>Database Design and Connectivity<br><br><a href="#"><i class="fa fa-IEEE"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-md-4">
	<figure class="effect-chico">
        <img src="images/team/2.jpg" width=200 alt="img01"/>
        <figcaption>            
            <p><b>Chetana Salunke</b><br>Webpage Design and Connectivity<br><br><a href="#"><i class="fa fa-pinterest"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></p>            
        </figcaption>
    </figure>
    </div>

    <div class=" col-md-4">
	<figure class="effect-chico">
        <img src="images/team/3.jpg" width=200 alt="img01"/>
        <figcaption>
            <p><b>Poorvi Rai</b><br>Database and Webpage Design<br><br><a href="#"><i class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-linkedin"></i></a></p>          
        </figcaption>
    </figure>
    </div>
</div>
</div>
<!-- creators -->

<!-- About Starts -->
<div class="highlight-info">
<div class="overlay spacer">
<div class="container">
<div class="row text-center wowload fadeInDownBig">
	<div class="col-md-3">
	<i class="fa fa-child  fa-5x"></i><h4>Happy Customers</h4>
	</div>
	<div class="col-md-3">
	<i class="fa fa-thumbs-o-up  fa-5x"></i><h4>High Quality Products</h4>
	</div>
	<div class="col-md-3">
	<i class="fa fa-globe  fa-5x"></i><h4>Deliveries all Over</h4>
	</div>
	<div class="col-md-3">
	<i class="fa fa-paint-brush fa-5x"></i><h4>Exciting new Themes</h4>
	</div>
</div>
</div>
</div>
</div>
<!-- About Ends -->

<div id="register" class="spacer">
<!--Contact Starts-->
<div class="container contactform center">
<h2 class="text-center wowload fadeInUp">Register to start your ScrapBook</h2>
  <div class="row wowload fadeInLeftBig">      
      <div class="col-md-6 col-md-offset-3">
        <form name='reg' method="post" Onsubmit="return validate()" action="index.php">            
        <input type="text" name="Name" placeholder="Name">
		<input type="numbers" name="Contact" placeholder="Contact">
		<textarea rows="5" name="Address" placeholder="Address"></textarea>
        <input type="text" name="Email" placeholder="Email-ID">
        <input type="password" name="Password" placeholder="Password">
		<input type="password" name="Confirm_Password" placeholder="Confirm Password">
        <button type="submit" name="submit" class="btn btn-primary" Onclick="validate()">Sign-Up</button>
		</form>
		<p class="text-center"><a href="signin1.php">Already a Member? Sign-In</a></p>
      </div>
  </div>
</div>
</div>
<!--Contact Ends-->

<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="  flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-linkedin fa-2x"></i></a> </p>
Copyright Style ScrapBook. All rights reserved.
</div>
<!-- # Footer Ends -->
<a href="#home" class="gototop "><i class="fa fa-angle-up  fa-3x"></i></a>


</body>
</html>
