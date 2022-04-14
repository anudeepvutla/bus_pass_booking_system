<?php
    include('connection.php');
    $sql = "select name from destination";
    $result = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Cloud Based Bus Pass System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,700,900|Display+Playfair:200,300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/mediaelement@4.2.7/build/mediaelementplayer.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body style ="background-color: antiquewhite;">
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Bus Pass</a></h1>
          </div>
          <div class="col-10 col-md-8 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
                <li class="active">
                  <a href="index.html">Home</a>
                </li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="manage.php">Manage Pass</a></li>
                  <li><a href="bus_details.html">Bus Details</a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
      
    </header>

  

   

    <div class="site-blocks-cover inner-page-cover" style="background-image: url(images/test1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              <div class="bcd" style="background-color:silver;">
              <h1 class="text-white font-weight-light">Book Your Pass</h1>
</div>
              <div><a href="index.html">Home</a> <span class="mx-2 text-white">&bullet;</span> <span class="text-white">Pass</span></div>
              
            </div>
          </div>
        </div>
      </div>  


    
    <div class="site-section bg-light">
      <div class="container">
        <div>
          <div>
            <form action="billing.php" method="post" class="p-5 bg-white" style="background-color:antiquewhite;">
             <div class="row form-group" >
                
                <div class="col-md-12">
                  <label class="text-black" for="name">Name</label> 
                  <input required type="name" name="name" id="name" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input required type="email" name="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="Number">Mobile Number</label> 
                  <input required name="contact" type="phone" id="number" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="Number">Enter your Password</label> 
                  <input required name="password" type="password" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="Date">Valid Till</label> 
                  <input required name="date" type="date" id="date" class="form-control">
                </div>
              </div>
                
                <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="destination">Destination</label> 
                  <select type="text" id="text" name="dest" class="form-control">
                      <?php
                        while($row = mysqli_fetch_array($result)){
                            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                        }
                      ?>
                  </select>
                </div>
              </div>
                
              <div class="row form-group">
                <div class="col-md-12">
                  <input style="background-color:gray" type="submit" value="Proceed To Checkout" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
        </div>
      </div>
    </div>

    
   

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>