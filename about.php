<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href=CSS\athleteBase.css>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>AthleteBase</title>
 
</head>

    

  <body>
<?php
  include("heading.php");
?>
    <p>
      <a href="https://index.html">
        <img src="Images\JohnLogo.jpg" alt="AthleteBase Logo" width="90%" height="40%">
        </a>
        </p>  
      </div>  


      <div class="flex">
          <div class="form-width">
     <!-- Slide Show -->
     <section>
      <left>
          <img class="mySlides" src="Images/Super-Rugby.jpg" width="100%" height="600">
      </left>
      </a>
      <left>
          <img class="mySlides" src="Images\AllBlacks_2017_2.png" width="100%" height="600">
      </left>
      </a>
      <left>
        <img class="mySlides" src="Images\BlackFernsWC.jpg" width="100%" height="600">
      </left>
      </a>
      <left>
        <img class="mySlides" src="Images\Damien.jpg" width="100%" height="600">
      </left>
      </a>
  </section>

  
  <script>
      // Automatic Slideshow - change image every 3 seconds
      var myIndex = 0;
      carousel();
      function carousel() {
          var i;
          var x = document.getElementsByClassName("mySlides");
          for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
          }
          myIndex++;
          if (myIndex > x.length) { myIndex = 1 }
          x[myIndex - 1].style.display = "block";
          setTimeout(carousel, 3000);
      }
  </script>

</div>


    <div class="form-width">
      
<form action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
      <h1>Register</h1>
      
      <hr>
  
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
  
      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
  
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</div>


<section>
  <center>
    <h1>Welcome to AthleteBase</h1>
     <h3>#1 in Human Performance Software</h3>
      <content2>
          <br> One place where you can store all of your data for coaches, scientists, athletes, and managers.  
          <br>There is simply no limit to the types of data you can store including videos, images, documents and even raw files technologies like heart rate, GPS and sensors. 
          <br>Store everything from administrative profiles, medical information, fitness tests and training programs through to coaching data and performance analysis.
      </content2>
  </center>
</section>

<?php
  include("footer.php");
?>