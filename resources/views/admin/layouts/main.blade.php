<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

<!-- begin::Head -->

<head>

	<!--begin::Base Path (base relative path for assets of this page) -->
	<base href="./">

	<!--end::Base Path -->
	<meta charset="utf-8" />
	<title>BUHWAR</title>
	<meta name="description" content="Latest updates and statistic charts">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--begin::Fonts -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
	<script>
		WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
	</script>

	<!--end::Fonts -->

	@stack('styles')




	<!--begin:: Global Mandatory Vendors -->
	<link href="/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

	<!--end:: Global Mandatory Vendors -->

	<!--begin:: Global Optional Vendors -->
	<link href="/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
	<link href="/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
	<link href="/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
	<link href="/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
	<link href="/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet"
		type="text/css" />
	<link href="/assets/vendors/custom/vendors/icopolice/style.css" rel="stylesheet" type="text/css" />
	<!--end:: Global Optional Vendors -->

	<!--begin::Global Theme Styles(used by all pages) -->
	<link href="/assets/css/demo12/style.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Global Theme Styles -->

	<!--begin::Layout Skins(used by all pages) -->

	<!--end::Layout Skins -->
	<link rel="shortcut icon" href="/imagenes/buho_sinfondo.png" />
</head>

<!-- end::Head -->

<!-- begin::Body -->

<body
	class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--fixed kt-page--loading">

	<!-- begin:: Page -->

	<!-- begin:: Header Mobile -->
	<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
		<div class="kt-header-mobile__logo">
			<a href="demo12/index.html">
				<h1>
					<font color="white">BUHWAR</font>

				</h1>
			</a>
		</div>
		<div class="kt-header-mobile__toolbar">
			<button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left"
				id="kt_aside_mobile_toggler"><span></span></button>
			<button class="kt-header-mobile__toolbar-toggler" id="kt_header_mobile_toggler"><span></span></button>
			<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i
					class="flaticon-more"></i></button>
		</div>
	</div>

	<!-- end:: Header Mobile -->
	<div class="kt-grid kt-grid--hor kt-grid--root">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

			<!-- begin:: Aside -->
			<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
			<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop"
				id="kt_aside">

				<!-- begin:: Aside -->
				<div class="kt-aside__brand kt-grid__item " id="kt_aside_brand">
					<div class="kt-aside__brand-logo">
						<a href="demo12/index.html">
							<h1>
								<font color="white">BUHWAR</font>

							</h1>
						</a>
					</div>
					<div class="kt-aside__brand-tools">
						<button class="kt-aside__brand-aside-toggler" id="kt_aside_toggler"><span></span></button>
					</div>
				</div>

				<!-- end:: Aside -->
				@include('admin.layouts.sliderbar')
			</div>

			<!-- end:: Aside -->
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">

				@include('admin.layouts.header')
				<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">


					@yield('sub-header')
					@yield('content')

					<!-- end:: Content -->
				</div>

				<!-- begin:: Footer -->

				@include('admin.layouts.footer')

				<!-- end:: Footer -->
			</div>
		</div>
	</div>

	<!-- end:: Page -->



	<!-- begin::Scrolltop -->
	<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
	</div>

	<!-- end::Scrolltop -->


	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#2c77f4",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
	</script>

	<!-- end::Global Config -->

	<!--begin:: Global Mandatory Vendors -->
	<script src="/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
	<script src="/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
	<script src="/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="/assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
	<script src="/assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
	<script src="/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
	<script src="/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
	<script src="/assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
	<script src="/assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

	<!--end:: Global Mandatory Vendors -->




	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="/assets/js/demo12/scripts.bundle.js" type="text/javascript"></script>

	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors(used by this page) -->
	<script src="/assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>


	<!--end::Page Vendors -->



	<!--begin::Page Scripts(used by this page) -->
	<script src="/assets/js/demo12/pages/dashboard.js" type="text/javascript"></script>
	<script src="{{ asset('js/functions.js') }}"></script>

	<!--end::Page Scripts -->

	@stack('scripts')
</body>

<!-- end::Body -->

</html>