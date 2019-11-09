<?php
	include("heading.php");
?>
<div class="logo">
	<a href="https://index.html">
		<img src="Images\JohnLogo.jpg" alt="AthleteBase Logo" width="90%" height="40%">
	</a>
</div>  
<!-- Slide Show -->
<section>
	<img class="mySlides" src="Images/Super-Rugby.jpg" width="100%" height="600">
	</a>
	<img class="mySlides" src="Images\AllBlacks_2017_2.png" width="100%" height="600">
	</a>
	<img class="mySlides" src="Images\BlackFernsWC.jpg" width="100%" height="600">
	</a>
	<img class="mySlides" src="Images\Damien.jpg" width="100%" height="600">
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

<form class="login-form" action="action_page.php" style="border:1px solid #ccc">
    <div class="container">
	  <h1>Login</h1>
      <label for="email"><b>Email</b></label>
      <input type="text" class="form-control form-fields" placeholder="Enter Email" name="email" required>
      <label for="psw"><b>Password</b></label>
      <input type="password" class="form-control form-fields" placeholder="Enter Password" name="psw" required>
      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" class="form-control form-fields" placeholder="Repeat Password" name="psw-repeat" required>
      <label>
        <input type="checkbox" class="form-control" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
  
      <div class="clearfix">
        <button type="button" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
	</div>
</form>

<section class="description">
	<h1>Welcome to AthleteBase</h1>
	<h3>#1 in Human Performance Software</h3>
	<br> One place where you can store all of your data for coaches, scientists, athletes, and managers.  
	<br>There is simply no limit to the types of data you can store including videos, images, documents and even raw files technologies like heart rate, GPS and sensors. 
	<br>Store everything from administrative profiles, medical information, fitness tests and training programs through to coaching data and performance analysis.
</section>
<?php
	include("footer.php");
?>