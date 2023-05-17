<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Clearance</title>
	<link href="css/bootstrap.min.css" rel="stylesheet" >
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
	<link href="bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" >
	<!-- <link href="css/style.css" rel="stylesheet" > -->
</head>
<body>
	<!-- HEADER DAN NAVBAR -->
		@include('layout.navbar')
	<!-- END HEADER DAN NAVBAR -->

	<!-- KONTEN -->
		@yield('content')
	<!-- END KONTEN -->

	<div class="container">
		<footer class="py-3 mt-4 mb-0 border-top">
			<p class="text-center text-body-secondary ">© 2023 BAPSI</p>
		</footer>
	</div>


	<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>