<!DOCTYPE HTML>
<html>
	<head>
		<title>@yield('title')Phase Shift by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    </head>
<body>

    <!-- Wrapper -->
	<div class="wrapper style1">
		<!-- Header -->
		<div id="header" class="skel-panels-fixed">
			<div id="logo">
				<h1><a href="/">Phase Shift</a></h1>
				<span class="tag">by TEMPLATED</span>
			</div>
				<nav id="nav">
					<ul>
						<li class="active"><a href="/">Homepage</a></li>
						<li><a href="left-sidebar">Left Sidebar</a></li>
						<li><a href="right-sidebar">Right Sidebar</a></li>
						<li><a href="no-sidebar">No Sidebar</a></li>
					</ul>
				</nav>
        </div>
        
@yield('content')

    <!-- Footer -->
    <div id="footer" class="wrapper style2">
        <div class="container">
            <section>
                <header class="major">
                    <h2>Mauris vulputate dolor</h2>
                    <span class="byline">Integer sit amet pede vel arcu aliquet pretium</span>
                </header>
                <form method="post" action="#">
                    <div class="row half">
                        <div class="12u">
                            <input class="text" type="text" name="name" id="name" placeholder="Name" />
                        </div>
                    </div>
                    <div class="row half">
                        <div class="12u">
                            <input class="text" type="text" name="email" id="email" placeholder="Email" />
                        </div>
                    </div>
                    <div class="row half">
                        <div class="12u">
                            <textarea name="message" id="message" placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="row half">
                        <div class="12u">
                            <ul class="actions">
                                <li>
                                    <input type="submit" value="Send Message" class="button alt" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

<!-- Copyright -->
    <div id="copyright">
        <div class="container">
            <div class="copyright">                
                <ul class="icons">
                    <li><a href="#" class="fa fa-facebook"><span>Facebook</span></a></li>
                    <li><a href="#" class="fa fa-twitter"><span>Twitter</span></a></li>
                    <li><a href="#" class="fa fa-google-plus"><span>Google+</span></a></li>
                </ul>
            </div>
        </div>
    </div>

</body>
</html>