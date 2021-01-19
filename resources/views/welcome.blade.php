<!DOCTYPE html>
<html>
<head>
	<title>E-Friend </title>


	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@100&family=Oswald:wght@700&family=Source+Code+Pro:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
    
<body>
	<div class="header" id="topheader">
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container text-uppercase p-2">
  <a class="navbar-brand font-weight-bold text-white" href="#">E-Friendly</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  	</div>
    <ul class="navbar-nav ml-auto text-uppercase">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Products
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Order</a>
          <a class="dropdown-item" href="#">Payment</a>
          <a class="dropdown-item" href="#">Processing</a>
          <a class="dropdown-item" href="#">Delivered</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <section class="header-section" >
	<div class="center-div">
		<h1 class="font-weight-bold"> Make your selling Easy</h1>
		<p>	We deal with all E-Commerce Site related to your business.	</p>
		<div class="header-buttons">
        @if (Route::has('login'))

            @auth
                <a href="{{ url('/dashboard') }}"> Dashboard </a>
            
            @else
			    <a href="{{ route('login') }}">Log in</a>

                @if (Route::has('register'))
			        <a href="{{ route('register') }}">Registration</a><br><br>

                 @endif
           @endauth
        @endif
	</div>
		
	</div>
  </section>
	</div>
<!--********** Header Part End ************ -->





<!-- Start Add Product Catagory -->
<section class="header-extradiv">
    <div class="container">
        <div><br><br> <h2>Add Product into your Shop Catagory</h2> <br><br></div>
        <div class="row">
        
            <div class="extra-div col-lg-4 col-md-4 cold-12">
                 <a href="#"><i class="fa-5x fa fa-mobile" aria-hidden="true"></i></a>
                <h2>Electronics</h2>

                <p>Add your Eletronic Products like Mobile, Laptop, Computer, Accesorries.</p>
                
            </div>

            <div class="extra-div col-lg-4 col-md-4 cold-12">
                <a href="#"><i class="fa-5x fa fa-suitcase" aria-hidden="true"></i></a>

                <h2>Clothing</h2>

                <p>Add your Cholthing Item in This Section</p>
                
            </div>

            <div class="extra-div col-lg-4 col-md-4 cold-12">
                <a href="#"><i class="fa-5x fa fa-shopping-cart" aria-hidden="true"></i></a>

                <h2>Grocary</h2>

                <p>Add your Grocery item in this section</p>
                
            </div>
           
        </div>
        
    </div>
    
</section>



<!--End Add Product Catagory -->

<!--Start Order Status -->
<section class="orderstatus">
    <div class="container headings text-center">
        <h2 class="text-center font-weight-bold">Your Today's Order Status</h2><br><br>
    </div>
    
    <div class="container d-flex justify-content-around align-items-center text-center" >
        <div>
            <h1 class="count"> 25</h1>
            <p>Pending Order</p>
        </div>

         <div>
            <h1 class="count"> 35</h1>
            <p>Process Order</p>
        </div>

         <div>
            <h1 class="count"> 15</h1>
            <p>Picked Order</p>
        </div>

         <div>
            <h1 class="count"> 90</h1>
            <p>Delivered Order</p>
        </div>
    </div>

</section>



<!--Start Order Status -->

<!--Start Open Shop in Ecommerce -->

<section class="openshop" id="openshopdiv">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold text-white">Best E-Commerce Sites</h1>
        <p>Add your shop to best E-Commerce Sites in Bangladesh.Boost your sell in minimum comission.</p><br><br>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-12 ">
                <div class="card text-center">
                  <div class="card-header">Daraz</div>
                  <div class="card-body">
                      <li>Upto <span class="commission">20%</span>Comission</li>
                      <li><span>3 </span> Days Delivery Time</li>
                      <li><span>15</span> Days Payment</li>
                      <li><span>90</span> Catagory</li>
                      <li><span>5%</span> Target Commission</li>
                      <li>Company Delivery</li>
                  </div>
                  <div class="card-footer">
                    <a href="https://sellercenter.daraz.com.bd/apps/register/landing?__ARMS_PID__=giiryrcz16%402026e49eb97404c&userId=0">Add Shop</div></a> 
                </div>
             </div>
            
            <div class="col-lg-4 col-12 card-second"> 
                <div class="card text-center">
                  <div class="card-header">AjkerDeal</div>
                  <div class="card-body">
                      <li>Upto <span class="commission">30%</span>Comission</li>
                      <li><span>5 </span> Days Delivery Time</li>
                      <li><span>20</span> Days Payment</li>
                      <li><span>60</span> Catagory</li>
                      <li><span>2%</span> Target Commission</li>
                      <li>Company Delivery</li>
                  </div>
                  <div class="card-footer">
                    <a href="https://corporate.ajkerdeal.com/">Add Shop</div></a> 
                </div>
            </div>
            <div class="col-lg-4 col-12 ">
                <div class="card text-center">
                  <div class="card-header">Evaly</div>
                  <div class="card-body">
                      <li>Upto <span class="commission">15%</span>Comission</li>
                      <li><span>15 </span> Days Delivery Time</li>
                      <li><span>30</span> Days Payment</li>
                      <li><span>15</span> Catagory</li>
                      <li><span>10%</span> Target Commission</li>
                      <li>Seller Delivery</li>
                  </div>
                  <div class="card-footer">
                    <a href="https://merchant.evaly.com.bd/auth/sign-up">Add Shop</div></a> 
                </div>
    
             </div>
        </div>
        

    </div>

    

</section><br><br>

<!--Ends Open Shop in Ecommerce -->

<!--Start individual sell in Ecommerce -->
<section class="individualsell" id="individualselldiv">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold "> Individual Sell for E-Commerce</h1>
        <p class ="text-capitalized pt-1">See your individual sell details for all related E-Commerce Site.</p>
        
    </div>
    
    <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner container" >
    <div class="carousel-item active">

      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="box">
                <a href="#"><img src="images/darazjlogo_aad9521a-8998-4bd7-beb3-591c71f2fd12-555.jpeg" class="img-fluid img-thumbnail"></a>
                
                      <li>New Order: <span>00</span></li>
                      <li>Pending Order: <span>30</span></li>
                      <li>Deliverd Order: <span>15</span></li>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="box">
                <a href="#"><img src="images/Evaly-logo-01.jpg" class="img-fluid img-thumbnail"></a>
                
                      <li>New Order: <span>15 </span></li>
                      <li>Pending Order: <span>30</span></li>
                      <li>Deliverd Order: <span>15</span></li>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="box">
                <a href="#"><img src="images/Ajkerdeal.gif" class="img-fluid img-thumbnail"></a>
                
                      <li>New Order: <span>15 </span>1</li>
                      <li>Pending Order: <span>30</span></li>
                      <li>Deliverd Order: <span>15</span></li>
            </div>
        </div>
    </div>

    
       
    </div>
    <div class="carousel-item">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="box">
                <a href="#"><img src="images/638c1578344509.5ca264bb39fc0.png" class="img-fluid img-thumbnail"></a>
                
                      <li>New Order: <span>15 </span></li>
                      <li>Pending Order: <span>30</span></li>
                      <li>Deliverd Order: <span>15</span></li>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="box">
                <a href="#"><img src="images/Pickaboo.jpg" class="img-fluid img-thumbnail"></a>
                
                      <li>New Order: <span>15 </span></li>
                      <li>Pending Order: <span>30</span></li>
                      <li>Deliverd Order: <span>15</span></li>
            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12">
            <div class="box">
                <a href="#"><img src="images/b326b5f8d23cd1e0f18df4c9265416f7.png" class="img-fluid img-thumbnail"></a>
                
                      <li>New Order: <span>15 </span>10 </li>
                      <li>Pending Order: <span>30</span></li>
                      <li>Deliverd Order: <span>15</span></li>
            </div>
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


</section>



<!--Ends individual sell in Ecommerce -->

<!--Start Contuct Us -->
<section class="contactus" id="contactus">
    <div class="container headings text-center">
        <h1 class="text-center font-weight-bold text">Contact Us</h1>
        <p>We are always ready to hear your ideas,problems,complains,comments.</p><br><br>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 col-1">
                <form action="/action_page.php">
                   <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your name" id="username" required autocomplete="off">
                    </div>

                 <form action="/action_page.php">
                   <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your email" id="username" required autocomplete="off">
                    </div>

                 <form action="/action_page.php">
                   <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter your mobile number" id="username" required autocomplete="off">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="5" id="comment" placeholder="Enter your message"></textarea>
                     </div>
                     <div class="d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>


                
            </div>
            
        </div>
        
    </div>
</section>



<!--End Contact Us -->





<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $('.count').counterUp({
        delay: 10,
        time: 2000
    })
</script>


</body>
</html>