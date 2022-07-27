<!DOCTYPE html>
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  * {box-sizing: border-box;}
  
  input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
  }
  
  input[type=submit] {
    background-color: #051b13;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
  .container {
    border-radius: 5px;
    background-color: fuchsia;
    padding: 20px;
    width: 50%;
    float: left;
  }
  
  
  </style>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" 
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    </head>
    <body>
        <header>
        <div class="menu-bar">

            <ul>
                <li><a href="HOME.php"><i class="fas fa-home"></i>HOME</a></li>
                <li><a href="ABOUT.php"><i class="fas fa-users"></i>ABOUT</a></li>
                <li><a href="SERVICES.php"><i class="fas fa-clone"></i>SERVICES</a></li>
                <li class="active"><a href="CONTACT.php"><i class="fas fa-phone"></i>CONTACT</a></li> 
                <li><a href="#"><i class="fas fa-cube"></i>SIGNIN</a>
                  <div class="sub-menu1">
                      <ul>
                        <li><a href="register/signup.php">REGISTER</a></li>
                        <li><a href="Administrator/login.php">LOGIN</a></li>
                         </ul>
                        </div>
                        </li> 
              
 </header> 
 <h3>Contact Form</h3>

<div class="container">
  <form action="">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="comments">Commnet</label>
    <select id="commments" name="coments">
      <option value="a">Compliain</option>
      <option value="b">Compliments</option>
      <option value="c">Others</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<div id="CONT"  style="float: left; list-style: none; padding-left: 250px;font-size: x-large;padding-top: 60px;" >
  <h2><b><u><i>CONTACT US</i></u></b></h2>
   <ul>
    <li><i class="fas fa-phone-alt"></i><a href="number.com">0709390100</a></li><br>
    <li><i class="fas fa-envelope-square"></i><a href="email.com">info@nacicosacco.coop</a></li><br>
    <li> <i class="fab fa-facebook"></i><a href="#facebook.com">nacicosacco</a></li> <br>
    <li> <i class="fab fa-twitter"></i> <a href="#twitter.com">nacicosacco</a></li><br>
  </ul>


</div>
 
</body>
<footer style="clear: both;">
    <p id="para-footer">copyright &copy;by nacicosacco</p>
    <address>
        telephone: 0709390100<br>
        email:info@nacicosacco.coop
    </address>
</footer>
</html>