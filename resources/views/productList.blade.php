<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('style.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/dark.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/font-icons.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/animate.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css" />

	<link rel="stylesheet" href="{{asset('css/responsive.css')}}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>ALL GREEN Technology</title>

</head>

<body class="stretched">
	<header id="header" class="full-header">
	
				<div id="header-wrap">
	
					<div class="container clearfix">
	
						<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
	
						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="/" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/allgreenlogo.png" alt="Canvas Logo"></a>
							<a href="/" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
						</div><!-- #logo end -->
	
						<!-- Primary Navigation
						============================================= -->
						<nav id="primary-menu">
	
							<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1500">
								<li><a href="/" data-href="#home"><div>Home</div></a></li>
							</ul>
	
	
						</nav><!-- #primary-menu end -->
	
					</div>
	
				</div>
	
			</header>
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix" >

		<!-- Header
		============================================= -->
	

		<!-- Page Title
		============================================= -->
		<section id="page-title" style="background-color: #1ABC9C">

			<div class="container clearfix" >
				<h1 style="color:white">
					@foreach($catagory as $deatail)
					{{$deatail->catagoriesName}}
					@endforeach
				</h1>
				</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin col_last">

						<!-- Shop
						============================================= -->
						<div id="shop" class="shop product-3 clearfix">

							@foreach($products as $product)
							<div class="product clearfix">
									<div class="product-image">
										<div class="fslider" data-arrows="false">
											<div class="flexslider">
												<div class="slider-wrap">
													<div class="slide" ><a href="/catagoriesID={{$product->CatagoriesID}}/productId={{$product->productID}}" ><img src="{{$product->path}}" alt="{{$product->productName}}"></a></div>
												</div>
											</div>
										</div>
										<div class="product-overlay">
								</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h5><a href="/catagoriesID={{$product->CatagoriesID}}/productId={{$product->productID}}">{{$product->productName}}</a></h5></div>
											{{$product->function}}
									</div>
									<hr>
								</div>

							@endforeach
						</div><!-- #shop end -->

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget_links clearfix">

								<h4>Shop Categories</h4>
								<ul>
									@foreach($items as $item)
									<li><a href="/catagoryID={{$item->CatagoriesID}}">{{$item->catagoriesName}}</a></li>
									<hr>
									@endforeach
								</ul>

							</div>


					
						</div>
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->
	<footer id="footer" class="dark">
		<div id="copyrights">
			
							<div class="container clearfix">
			
								<div class="col_half">
									Copyrights ©2011 ALLGREEN Technology Co.,Ltd.<br>
								</div>
			
								<div class="col_half col_last tright">
									<div class="clear"></div>
			
									<i class="icon-envelope2"></i> Email : info@allgreenthai.com <span class="middot">&middot;</span> <i class="icon-headphones"></i>  02-814-0066
								</div>
			
							</div>
			
						</div><!-- #copyrights end -->
	</footer><!-- #footer end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/plugins.js')}}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="{{asset('js/functions.js')}}"></script>

</body>
</html>