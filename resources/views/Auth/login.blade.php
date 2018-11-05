<!DOCTYPE html>
<html>
<head>
	<title>
		Register
	</title>
	<!-- <script src="js/scroll"></script> -->
	<script type="text/javascript" src="{{ URL::asset('js/scroll.js') }}"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
	<link rel="stylesheet" type="text/css" href="css/stylemaster.css">
</head>
<body>
<div class="navtop" id="navtop_">
<ul>
  <li><a href="#konten1_">Home</a></li>
  <li><a href="#konten2_">News</a></li>
  <li><a href="#konten3_">Contact</a></li>w
  <li><a href="#login_">Login</a></li>
</ul></div>
<div class="login" id="login_">
<form class="form-login" method="post" action="{{route('login')}}">
	{{ csrf_field()}}
			<h2> Login {{config('app.name')}}</h2>
		email:

		<input type="email" placeholder="masukan email" name="email" id="inputemail" required autofocus>
		<br>
		password
		<input type="password" placeholder="masukan pasword" name="password" id="inputpassword" required autofocus> <br>
		<br><button type="submit" class="btnLogin">Submit</button>
</form>
	<h3><a href="register">Mendaftar</a></h3>
	</div>
		<div class="footer">
				<a href="#navtop_">Go To Up</a><br>
				<center>&copy; Donor Darah PMI </center>
		</div>
</body>
</html>
