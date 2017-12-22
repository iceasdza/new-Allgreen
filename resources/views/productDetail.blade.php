<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
	 rel="stylesheet" type="text/css" />
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
	<html dir="ltr" lang="en-US">

	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="author" content="SemiColonWeb" />

		<!-- Stylesheets
	============================================= -->
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic"
		 rel="stylesheet" type="text/css" />
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
		<title>All Green</title>

	</head>

	<body class="stretched">

		<!-- Document Wrapper
	============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Page Title
		============================================= -->
			<section id="page-title" style="background-color: #1ABC9C">
				<!-- <section id="page-title" style="background-color: black" > -->
				@foreach($products as $product)

				<div class="container clearfix">
					<h1 style="color: white;">{{$product->productName}}</h1>
					<b>
						<span style="color: white;">{{$product->function}}</span>
					</b>

					<ol class="breadcrumb">
						<li>
							<a href="/" style="color: white;">Home</a>
						</li>
						<li>
							<a href="/catagoryID={{$product->CatagoriesID}}" style="color: white;">Shop</a>
						</li>
						<li class="active" style="color: white;">{{$product->productName}}</li>
					</ol>
				</div>

			</section>
			<!-- #page-title end -->

			<!-- Content
		============================================= -->
			<section id="content">

				<div class="content-wrap">

					<div class="container clearfix">

						<div class="single-product">

							<div class="product">

								<div class="col_two_fifth">

									<!-- Product Single - Gallery
								============================================= -->
									<div class="product-image">
										<div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
											<div class="flexslider">
												<div class="slider-wrap" data-lightbox="gallery">
													<div class="slide" data-thumb="{{$product->path}}">
														<a href="{{$product->path}}" title="{{$product->productName}}" data-lightbox="gallery-item">
															<img src="{{$product->path}}"> 
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Product Single - Gallery End -->

								</div>

								<div class="col_two_fifth product-desc">

									</form>
									<!-- Product Single - Quantity & Cart Button End -->

									<div class="clear"></div>
									<div class="line"></div>

									<!-- Product Single - Short Description
								============================================= -->
									<textarea style="overflow:hidden;resize: none;height:300px;border: none" readonly>
									{{$product->productDes}}
								</textarea>
									<!-- Product Single - Meta
								============================================= -->
									<div class="panel panel-default product-meta">
										<div class="panel-body">
											<!-- <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span> -->
											@foreach($catagory as $cat)

											<span class="posted_in">Category:
												<a href="/catagoryID={{$product->CatagoriesID}}" rel="tag">{{$cat->catagoriesName}}</a>.</span>
											@endforeach
										</div>
									</div>
									<!-- Product Single - Meta End -->

									<!-- Product Single - Share
								============================================= -->
								</div>
								<div class="col_full nobottommargin">

									<div class="tabs clearfix nobottommargin" id="tab-1">

										<ul class="tab-nav clearfix">
											<li>
												<a href="#tabs-1">
													<i class="icon-align-justify2"></i>
													<span class="hidden-xs"> Description</span>
												</a>
											</li>
											{{--
											<li>
												<a href="#tabs-2">
													<i class="icon-info-sign"></i>
													<span class="hidden-xs"> Specifications</span>
												</a>
											</li> --}}
										</ul>

										<div class="tab-container">

											<div class="tab-content clearfix" id="tabs-1" style="font-size: 20px">
												<!-- {{$product->productDes}} -->
												<textarea style="overflow:hidden;resize: none;height:300px;border: none" readonly>
												{{$product->productDes}}
											</textarea>
											</div>
											<div class="tab-content clearfix" id="tabs-2">

											</div>

										</div>

									</div>

								</div>

							</div>

						</div>

						<div class="clear"></div>
						<div class="line"></div>

					</div>

				</div>

			</section>
			<!-- #content end -->
			@endforeach
			<!-- Footer
		============================================= -->
			<footer id="footer" class="dark">
				<!-- Copyrights
			============================================= -->
				<div id="copyrights">

					<div class="container clearfix">

						<div class="col_half">
							Copyrights ©2011 ALLGREEN Technology Co.,Ltd.
							<br>
						</div>

						<div class="col_half col_last tright">
							<div class="clear"></div>

							<i class="icon-envelope2"></i> Email : info@allgreenthai.com
							<span class="middot">&middot;</span>
							<i class="icon-headphones"></i> 02-814-0066
						</div>

					</div>

				</div>
				<!-- #copyrights end -->

			</footer>
			<!-- #footer end -->

		</div>
		<!-- #wrapper end -->

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