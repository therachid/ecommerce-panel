
<html>
<head>
<title>E-Commerce Website </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="top-nav-bar">
<div class="search-box">
    <i class="fa fa-bars" id="menu-btn" onclick="openmenu()"></i>
    <i class="fa fa-times" id="close-btn" onclick="closemenu()"></i>
    
<img src="images/orange-logo.png" class="logo">
<input type="text" class="form-control">
<span class="input-group-text"><i class="fa fa-search"></i></span>
</div> 
<div class="menu-bar">
<ul>
<li><a href="#"><i class="fa fa-shopping-basket"></i>cart</a></li>    
<li><a href="#">Sign Up</a></li>    
<li><a href="login.php">Log In</a></li>    
</ul>   
</div> 
</div>
    
<section class="header">
<div class="side-menu" id="side-menu">
<ul>
        <li>On sale <i class="fa fa-angle-right"></i> 
            <ul>
            <li>Sub Menu-1</li>
            <li>Sub Menu-1</li>
            <li>Sub Menu-1</li>
            <li>Sub Menu-1</li>
            </ul>
        </li>
        
        <li>Mobiles<i class="fa fa-angle-right"></i>  
        <ul>
            <li>Sub Menu-2</li>
            <li>Sub Menu-2</li>
            <li>Sub Menu-2</li>
            <li>Sub Menu-2</li>
            </ul> 
        </li>
        
        <li>Computers <i class="fa fa-angle-right"></i>
            <ul>
            <li>Sub Menu-3</li>
            <li>Sub Menu-3</li>
            <li>Sub Menu-3</li>
            <li>Sub Menu-3</li>
            </ul>
        </li>
        
        <li>Books <i class="fa fa-angle-right"></i>   
            <ul>
            <li>Sub Menu-4</li>
            <li>Sub Menu-4</li>
            <li>Sub Menu-4</li>
            <li>Sub Menu-4</li>
            </ul>
        </li>
        
        <li>Fitness <i class="fa fa-angle-right"></i>  
            <ul>
            <li>Sub Menu-5</li>
            <li>Sub Menu-5</li>
            <li>Sub Menu-5</li>
            <li>Sub Menu-5</li>
            </ul> 
        </li>
        
        <li>Beby Care <i class="fa fa-angle-right"></i>  
            <ul>
            <li>Sub Menu-6</li>
            <li>Sub Menu-6</li>
            <li>Sub Menu-6</li>
            <li>Sub Menu-6</li>
            </ul> 
        </li> 
        
        <li>Magazines <i class="fa fa-angle-right"></i>   
            <ul>
            <li>Sub Menu-7</li>
            <li>Sub Menu-7</li>
            <li>Sub Menu-7</li>
            <li>Sub Menu-7</li>
            </ul> 
        </li>
        
        <li>Auto Accessories <i class="fa fa-angle-right"></i>   
            <ul>
            <li>Sub Menu-8</li>
            <li>Sub Menu-8</li>
            <li>Sub Menu-8</li>
            <li>Sub Menu-8</li>
            </ul> 
        </li>
        
        <li>Movies and Music <i class="fa fa-angle-right"></i>   
            <ul>
            <li>Sub Menu-9</li>
            <li>Sub Menu-9</li>
            <li>Sub Menu-9</li>
            <li>Sub Menu-9</li>
            </ul> 
        </li>
        
        <li>Video and Games <i class="fa fa-angle-right"></i>   
            <ul>
            <li>Sub Menu-10</li>
            <li>Sub Menu-10</li>
            <li>Sub Menu-10</li>
            <li>Sub Menu-10</li>
            </ul> 
        </li>
        
        <li>Home and Kitchen <i class="fa fa-angle-right"></i> 
            <ul>
            <li>Sub Menu-11</li>
            <li>Sub Menu-11</li>
            <li>Sub Menu-11</li>
            <li>Sub Menu-11</li>
            </ul> 
        </li>
        
        <li>Furniture <i class="fa fa-angle-right"></i>   
            <ul>
            <li>Sub Menu-12</li>
            <li>Sub Menu-12</li>
            <li>Sub Menu-12</li>
            <li>Sub Menu-12</li>
            </ul> 
        </li>
        
        <li>Grocery <i class="fa fa-angle-right"></i>   
            <ul>
            <li>Sub Menu-13</li>
            <li>Sub Menu-13</li>
            <li>Sub Menu-13</li>
            <li>Sub Menu-13</li>
            </ul> 
        </li> 
    </ul>  
</div>
<div class="slider">
  <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img-1.jpeg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/img-2.jpeg" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/img-3.jpeg" class="d-block w-100">
    </div>
      <div class="carousel-item">
      <img src="images/img-4.jpeg" class="d-block w-100">
    </div>
  </div>
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
    <li data-target="#slider" data-slide-to="3"></li>
  </ol>
</div>  
</div>    

</section>
    
<!---------------featured-categories---------------->
    
<section class="featured-categories"> 
<div class="container">
 <div class="row">
     <div class="col-md-4">
     <img src="images/categories1.jpg">
    </div>
     <div class="col-md-4">
     <img src="images/categories2.jpeg">
    </div>
     <div class="col-md-4">
     <img src="images/categories3.jpeg">
    </div>
</div>   
</div>   
</section>

<!-----------------On Sale product------------------>
<section class="on-sale">
<div class="container">
    <div class="title-box">
    <h2>On Sale</h2>
    </div>
    <div class="row">
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product1.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star-half-o"></i>  
        <h3>Fitness Watch</h3>
        <h5>$40.00</h5>
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product2.jpg"></a>
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
        <h3>Smart Watch</h3>
        <h5>$50.00</h5>
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product3.jpg"></a>
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
        <h3>Formarl Shoes</h3>
        <h5>$500.00</h5>
    </div>
    </div>
     
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product4.jpg"></a>
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star-half-o"></i>  
      <i class="fa fa-star-o"></i>  
        <h3>Leather Watch</h3>
        <h5>$300.00</h5>
    </div>
    </div>    
    
    </div>
</div>  
</section>
    
<!--------------New Products----------------->    
<section class="new-products">
   <div class="container">
    <div class="title-box">
    <h2>New Arrivals</h2>
    </div>
    <div class="row">
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product1.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star-half-o"></i>  
        <h3>Fitness Watch</h3>
        <h5>$40.00</h5>
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product2.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
        <h3>Smart Watch</h3>
        <h5>$50.00</h5>
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product3.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
        <h3>Formarl Shoes</h3>
        <h5>$500.00</h5>
    </div>
    </div>
     
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product4.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star-half-o"></i>  
      <i class="fa fa-star-o"></i>  
        <h3>Leather Watch</h3>
        <h5>$300.00</h5>
    </div>
    </div> 
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product1.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star-half-o"></i>  
        <h3>Fitness Watch</h3>
        <h5>$40.00</h5>
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product2.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
        <h3>Smart Watch</h3>
        <h5>$50.00</h5>
    </div>
    </div>
        
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product3.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
        <h3>Formarl Shoes</h3>
        <h5>$500.00</h5>
    </div>
    </div>
     
    <div class="col-md-3">
    <div class="product-top">
        <a href="product.html"><img src="images/product4.jpg"></a> 
        <div class="overlay-right">
        <button type="button" class="btn btn-secondary" title="Quick Shop">
           <i class="fa fa-eye"></i> 
        </button>
        <button type="button" class="btn btn-secondary" title="Add to Wishlist">
           <i class="fa fa-heart-o"></i> 
        </button>
            <button type="button" class="btn btn-secondary" title="Add to Cart">
           <i class="fa fa-shopping-cart"></i> 
        </button>
        </div>
    </div>
    <div class="product-bottom text-center">
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star"></i>  
      <i class="fa fa-star-half-o"></i>  
      <i class="fa fa-star-o"></i>  
        <h3>Leather Watch</h3>
        <h5>$300.00</h5>
    </div>
    </div>
    
    </div>
</div>
</section>  
    
<!----------------Website features----------------->

<section class="website-features">
<div class="container">
<div class="row">
<div class="col-md-3 feature-box">
<img src="images/feature-1.png"> 
<div class="feature-text">
<p><b>100% Original items </b>are available at company</p>    
</div>
</div>  
<div class="col-md-3 feature-box">
<img src="images/feature-2.png"> 
<div class="feature-text">
<p><b>Return within 30 days </b>of receiving your order.</p>    
</div>
</div> 
<div class="col-md-3 feature-box">
<img src="images/feature-3.png"> 
<div class="feature-text">
<p><b>Get free delivery for every</b>order on more than price.</p>    
</div>
</div>
<div class="col-md-3 feature-box">
<img src="images/feature-4.png"> 
<div class="feature-text">
<p><b>Pay Online through multiple </b>options (card/Net banking)</p>    
</div>
</div> 
</div>    
</div>    
</section>
  
<!------------Footer----------->
<section class="footer">
<div class="container tex-center">
    <div class="row">
        <div class="col-md-3">
            <h1>Useful Links</h1>
            <p>Privacy Policy</p>
            <p>Terms of Use</p>
            <p>Return Policy</p>
            <p>Discount Coupons</p>
        </div>
        
        <div class="col-md-3">
            <h1>Company</h1>
            <p>About Us</p>
            <p>Contact Us</p>
            <p>Career</p>
            <p>Affiliate</p>
        </div>
        <div class="col-md-3">
            <h1>Follow Us On</h1>
            <p><i class="fa fa-facebook-official"></i> Facebook</p>
            <p><i class="fa fa-youtube-play"></i> YouTube</p>
            <p><i class="fa fa-linkedin"></i> Linkedin</p>
            <p><i class="fa fa-twitter"></i> Twitter</p>
        </div>
        <div class="col-md-3 footer-image">
            <h1>Download App</h1>
            <img src="images/app-logo.png">
        </div>
    </div>
    <hr>
    <p class="copyright">Made with <i class="fa fa-heart-o"></i> by Easy Tutorials</p>
</div>    
</section>  
    
    
    
    
    
    
    
    
    
    
    
    
    
  <script>
    function openmenu()
      {
          document.getElementById("side-menu").style.display="block";
          document.getElementById("menu-btn").style.display="none";
          document.getElementById("close-btn").style.display="block";
      }
      function closemenu()
      {
          document.getElementById("side-menu").style.display="none";
          document.getElementById("menu-btn").style.display="block";
          document.getElementById("close-btn").style.display="none";
      }
    </script>  
    
    
    
    
    
    
</body>
</html>










