<!DOCTYPE html>
<html>
<head>
	<title>
		Portal Palang Merah Indonesia
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
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="navtop" id="navtop_">
<ul>
  <li><a href="#konten1_">Home</a></li>
  <li><a href="#konten2_">News</a></li>
  <li><a href="#konten3_">Contact</a></li>
	<li><a href="konten">Dbuser</a></li>
</ul></div>
<div class="pilihan user"><center>
	@if (Route::has('login'))
			<div class="alogin">
					@auth
							<!-- <a href="{{ url('/home') }}">Home</a> -->
							Selamat datang {{Auth::user()->name}}<br>
							<a href="{{route('logout')}}"> logout</a>
					@else
							<a href="login">Login</a>

							@if (Route::has('register'))
									<a href="{{ route('register') }}">Register</a>
							@endif
					@endauth
			</div>
	@endif
</center>
</div>

	<div class="konten1" id="konten1_">
	<!-- <video src="{{ URL::to('/vidio/vidiodonor.mkv') }}" autoplay poster="posterimage.jpg"> -->
	<video controls width="840" height="500" loop autoplay>
  <source src="/vidio/donordarah.mp4" type="video/mp4">
  <!-- <source src="movie.ogg" type="video/ogg"> -->
	</video>

	</video>

	</div>
	<div class="konten2" id="konten2_">
		<a href="daftar">
<img src="{{ URL::to('/img/coba1.jpg') }}"></a>


	</div>
	<div class="konten3" id="konten3_">
<img src="{{ URL::to('/img/coba1.jpg') }}">

	</div>
	<!-- <div class="login" id="login_">
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
		</div> -->

<div class="footer">
	<a href="#navtop_">Go To Up</a>
		<center>&copy; Donor Darah PMI </center>
</div>

</body>
</html>
