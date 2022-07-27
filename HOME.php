<!DOCTYPE html> 
<style>
  .corousel-inner{
    width: 100%;
    height: 600px;
  }
  .carousel-caption{
    font-size:30px;
    top: 45%;
    line-height:30px;
    weight:30px;
  }
</style>
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<header>
  <div class="menu-bar">
      <ul>
        <li class="active"><a href="HOME.php"><i class="fas fa-home"></i>HOME</a></li>
         <li><a href="ABOUT.php"><i class="fas fa-users"></i>ABOUT</a></li>
         <li><a href="SERVICES.php"><i class="fas fa-clone"></i>SERVICES</a></li>
        <li><a href="CONTACT.php"><i class="fas fa-phone"></i>CONTACT</a></li> 
        <li><a href="Administrator/login.php"><i class="fas fa-cube"></i>SIGNIN</a>
            <div class="sub-menu1">
                <ul>
                  <li><a href="register/signup.php">REGISTER</a></li>
                  <li><a href="Administrator/login.php">LOGIN</a></li>
                            
    
                </ul>
              </div>
        </li> 
         
        
      </ul>
  </div>
     </header>
<body>
   
     </section>
     <div class="container2">
      
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
    
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="money.jpg" alt="" style="width:100%;">
            <div style="padding-top: 0px; text-align: top;" class="carousel-caption d-none d-md-block">
            <h1><b>NACICO SACCO</b></h1>
        </div>
          </div>
    
          <div class="item">
            <img src="money1.jpg" alt="" style="width:100%;">
            <div style="padding-top: 0px; text-align: top;" class="carousel-caption d-none d-md-block">
            <h1><b>NACICO SACCO</b></h1>
        </div>
          </div>
        
          <div class="item">
            <img src="money2.jpg" alt="" style="width:100%;">
            <div style="padding-top: 0px; text-align: top;" class="carousel-caption d-none d-md-block">
            <h1><b>NACICO SACCO</b></h1>
        </div>
          </div>
        </div>
    
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
 
</body>
<footer>
    <p id="para-footer">copyright &copy;by nacicosacco</p>
    <address>
      telephone: 0709390100<br>
      email:info@nacicosacco.coop
  </address>
</footer>
</html>