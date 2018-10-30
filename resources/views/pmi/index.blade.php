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
  <li><a href="#login_">Login</a></li>
	<li><a href="dbuser">Dbuser</a></li>
</ul></div>
	<div class="konten1" id="konten1_">
<a href="daftar">
	<img src="{{ URL::to('/img/coba1.jpg') }}"></a>

	</div>
	<div class="konten2" id="konten2_">
<img src="{{ URL::to('/img/coba1.jpg') }}">

	</div>
	<div class="konten3" id="konten3_">
<img src="{{ URL::to('/img/coba1.jpg') }}">

	</div>
<div class="login" id="login_">
<form>
	<h2> Login </h2>
	<form>
		Nama :<input type="text" placeholder="masukan Nama" name="nama">
		<br>
		email :<input type="text" placeholder="masukan email" name="email"> <br>
		<br><button type="submit" class="pesan">Submit</button>
	</form>

</form>
	</div>
<div class="footer">
	<a href="#navtop_">Go To Up</a>
</div>

</body>
</html>
