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

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
	

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>
					@foreach($catagory as $deatail)
					{{$deatail->catagoriesName}}
					@endforeach
				</h1>
				<span>Edit your product</span>
				<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal">Upload product here!</button>
				<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
						
						  <!-- Modal content-->
						  <div class="modal-content">
							<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
							<form method="POST" enctype="multipart/form-data" action="/admin/catagoriesID={id}/upload" >
								<input type="hidden" name="_token" value="{{csrf_token()}}">
								<input type="hidden" name="catagoryID" value="{{$id}}">
								<h4>PRODUCT IMAGE</h4> <input class="form-control" type="file" name="img">
								<h4>PRODUCTNAME</h4> <input type="text" class="form-control" name="prodName" placeholder="Product name" required>
								<h4>PRODUCT Description</h4><textarea class="form-control" name="prodDesc" style="resize:none"></textarea>
								<input class="btn btn-default" type="submit" value="upload file">
							</form>
							</div>
							<div class="modal-footer">
							  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						  </div>
						  
						</div>
					  </div>
				<ol class="breadcrumb">
					<li><a href="/admin">Home</a></li>
				</ol>
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
													<div class="slide"><a href="#"><img src="{{$product->path}}" alt="{{$product->productName}}"></a></div>
												</div>
											</div>
										</div>
										<div class="product-overlay">
								</div>
									</div>
									<div class="product-desc center">
										<div class="product-title"><h3><a href="/admin/catagoriesID={{$product->CatagoriesID}}/productId={{$product->productID}}">{{$product->productName}}</a></h3></div>
							
										<form method="POST" enctype="multipart/form-data" action="/admin/catagoriesID={{$product->productID}}/delete">
											<input type="hidden" name="_token" value="{{csrf_token()}}">
											<input type="hidden" value="{{$product->CatagoriesID}}" name="catagoryID">
											   <input type="hidden" value="{{$product->productID}}" name="productId">
											   <input type="submit" class="btn btn-danger" value="DELETE">
									   </form>
									</div>
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
									<li><a href="/admin/catagoriesID={{$item->CatagoriesID}}">{{$item->catagoriesName}}</a></li>
									@endforeach
								</ul>

							</div>

							
								<!-- facebook -->
							<!-- <div class="widget clearfix">
								<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:290px;" allowTransparency="true"></iframe>
							</div> -->

					
						</div>
					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

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