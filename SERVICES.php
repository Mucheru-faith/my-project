<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<header>
    <div class="menu-bar">
        <ul>
            <li><a href="HOME.php"><i class="fas fa-home"></i>HOME</a></li>
            <li><a href="ABOUT.php"><i class="fas fa-users"></i>ABOUT</a></li>
            <li class="active"><a href="SERVICES.php"><i class="fas fa-clone"></i>SERVICES</a></li>
          <li><a href="CONTACT.php"><i class="fas fa-phone"></i>CONTACT</a></li> 
          <li><a href="#"><i class="fas fa-cube"></i>SIGNIN</a>
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
    <section class="container_service">
        <div class="loan">
            <img src="loans.jpg" alt="loans" width="200px" height="150px">
        </div>
        <div id="details">
            <h2>Loans</h2>
            <p id="loan_details">
                Most people apply for different loans in Kenya with the motive <br>
                 satisfying specific financial needs. With several financial institutions ready to offer various loans, some conditions <br>
                 can be taxing when making applications. More so, loans can be applied online, while some institutions such as banks require you to <br>
                  fill physical forms. <br>

                  <button style="background-color: rgb(28, 28, 32);color: antiquewhite;padding: 5px;">Read More >></button>
            </p>
        </div >
        
        
       
        <div style="clear: both;" class="down-details">
            <p id="up">
                To become a member please <a href="register/signup.php">Register</a>
            </p>
        </div>

    </section>

    
</body>
</html>