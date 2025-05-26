<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
		<!-- Font Awesome CDN -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<noscript><link rel="stylesheet" href="{{ asset('assets/css/noscript.css') }}" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<img src="{{ asset('assets/images/logo.png') }}" class="logo" style="max-width: 75%;" alt="logo">
						<p>Tvoj stop shop centar za video igre</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="{{ route('game.home') }}" class="logo">Gameforge</a>
					</header>

				<!-- Nav -->
					@include('layouts.navigation')

				<!-- Main -->
					
                <div id="main">
                    @yield('content')
                </div>

				<!-- Footer -->
					<footer id="footer">
						<section class="split contact">
							<section class="alt">
								<h3>Adresa</h3>
								<p>Kneza Mihaila 6<br />
								11000 Beograd</p>
							</section>
							<section>
								<h3>Broj telefona</h3>
								<p>062 866 7489</></p>
							</section>
							<section>
								<h3>Email</h3>
								<p>matijakojcic03@gmail.com</></p>
							</section>
							<section>
								<h3>Social</h3>
								<ul class="icons alt">
									<li><a href="https://github.com/m-kojcic" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('assets/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('assets/js/browser.min.js') }}"></script>
			<script src="{{ asset('assets/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('assets/js/util.js') }}"></script>
			<script src="{{ asset('assets/js/main.js') }}"></script>
			<script src="https://cdn.tiny.cloud/1/o3f6448tuj39k09ovndm3xixe3w7l97iu3t7ue2gf336v6xu/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
			<script>
			tinymce.init({
				selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
				plugins: 'code table lists',
				toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
			});
			</script>
	</body>
</html>