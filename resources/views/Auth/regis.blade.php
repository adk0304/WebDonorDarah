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
  <li><a href="#konten3_">Contact</a></li>
  <li><a href="#login_">Login</a></li>
</ul></div>

<div class="konten1" id="daftar_";>
	<center> <h2>pendaftaran</h2>
	<form class="form-signin" method="post" action="{{route('regis')}}">
			{{ csrf_field()}}
				Nama<br>
				<input type="text" placeholder="masukan Nama" name="name" id="inputname" value="{{old('name')}}"required autofocus ></br>
				@if($errors->has('name'))
					<div class="invalid-feedback">
						{{$errors->first('name')}}
					</div>
				@endif

				Email<br>
				<input type="email" placeholder="masukan email" name="email" id="inputemail" value="{{old('email')}}" required><br>
				@if($errors->has('email'))
					<div class="invalid-feedback">
						{{$errors->first('email')}}
					</div>
				@endif

				password <br>
				<input type="password" placeholder="masukan password" name="password" id="inputpassword" required><br>
				@if($errors->has('password'))
					<div class="invalid-feedback">
						{{$errors->first('password')}}
					</div>
				@endif

				Konfirmasi Password <br>
				<input type="password" placeholder="masukan konfirmasi password" name="password_confirmation" required><br>
				@if($errors->has('password_confirmation'))
					<div class="invalid-feedback">
						{{$errors->first('password_confirmation')}}
					</div>
				@endif

				<button class="btnSubmit" type="submit">register</button>
		<a href="login">Login</a></h3></center>
	</form>
	</div>
<div class="footer">
	<a href="#navtop_">Go To Up</a><br>
	<center>&copy; Donor Darah PMI </center>
</div>

</body>
</html>
