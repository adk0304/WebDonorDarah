<!DOCTYPE html>
<html>
<head>
	<title>
		Input Kantong Darah
	</title>
	<!-- <script src="js/scroll"></script> -->

<link rel="stylesheet" type="text/css" href="css/stylemaster.css">
</head>
<body>
<div class="navtop" id="navtop_">
<ul>
  <li><a href="index">Home</a></li>

<div class="konten1" id="inputkantongdarah";>
	<center> <h2>kantong darah</h2>
	<form class="form-signin" >
    <!-- action="{{route('inputkantong')}}"> -->
			{{ csrf_field()}}
				Nama<br>
				<input type="text" placeholder="masukan Nama" name="namadonor" id="inputname" value="{{old('namadonor')}}"required autofocus ></br>


				Jenis Darah<br>
				<input type="email" placeholder="masukan email" name="jenis_darah" id="inputemail" value="{{old('jenis_darah')}}" required><br>


				Tanggal <br>
				<input type="date" placeholder="masukan password" name="tanggal" id="inputpassword" required><br>


				<button class="btnSubmit" type="submit">Submit</button>
		<a href="login">Login</a></h3></center>
	</form>
	</div>
<div class="footer">
	<a href="#navtop_">Go To Up</a><br>
	<center>&copy; Donor Darah PMI </center>
</div>

</body>
</html>
