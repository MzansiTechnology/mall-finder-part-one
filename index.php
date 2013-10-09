<!DOCTYPE html>
<html>
<head>
    
    
    <title>The Mall Finder</title>
    
    <!-- We will use the copy of the minified css file hosted on the Bootstrap CDN -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <!-- In the case that we need to customize our Bootsrap UI we will link to this css file that
    will override the default styles -->
    <link href="assets/css/custom-boot.css" rel="stylesheet"/>
    <!-- Our main css file will be called main.css this is where we will insert our custom styles. -->
    <link href="assets/css/main.css" rel="stylesheet"/>
    
</head>
<body>
  <section class="container">
    <!-- Our layout will make use of Bootstrap's grid system which provides an easy way to develop
    responsive sites -->
    <header class="col-md-12">
         
         <div class="ad1"><!-- Code to your banner here --></div>
         <div class="page-header"><a href="http://mzansitechnology.co.za/demos/mallfinder/">The Mall Finder<a/></div>
         <!-- We will use Bootstrap's default NAVBAR class to create our navigation bar -->
         <nav class="navbar navbar-default" role="navigation">
           <!-- The magic happens when you add .nav .navbar-nav classes to your unordered list -->
           <ul class="nav navbar-nav">
             <li><a href="http://mzansitechnology.co.za/demos/mallfinder/">HOME</a></a></li>
             <li><a href="http://mzansitechnology.co.za/demos/mallfinder/shops">BROWSE SHOPS</a></a></li>
             <li><a href="http://mzansitechnology.co.za/demos/mallfinder/malls">BROWSE MALLS</a></a></li>
             <li><a href="http://mzansitechnology.co.za/demos/mallfinder/add-mall">ADD MALL</a></a></li>
             <li><a href="http://mzansitechnology.co.za/demos/mallfinder/add-shop">ADD SHOP</a></a></li>
           </ul>
         </nav>
       </header>
    <section class="col-md-12">
      <section class="col-md-8">
         <h3>List of recently added malls</h3>
      </section>
      <aside class="col-md-4">
      <h3>Follow us</h3>
      </aside>
      
    </section>
    <footer class="col-md-12">&copy; <?php echo date('Y', time()); ?></footer>
  </section>
</body>
</html>