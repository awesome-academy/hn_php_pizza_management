<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>Metronic Live preview | Keenthemes</title>
		@include('layouts.admin.assets.css')
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
		<!--begin::Main-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">
						<!--begin::Logo-->
						<a href="index.html" class="brand-logo">
							<img alt="Logo" src="{{ asset('bower_components/html-metronic/assets/media/logos/logo-light.png')}}" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							@include('layouts.admin.sections.sidebar')
							<!--end::Menu Nav-->
						</div>
						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
                    <!--begin::Container-->
                    @include('layouts.admin.sections.header')
                    <!--end::Container-->
					</div>
					<!--end::Header-->
                        <!--begin::Content-->
                        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
							<!--begin::Subheader-->
							<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
								<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
									<!--begin::Info-->
									<div class="d-flex align-items-center flex-wrap mr-2">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
											@yield('title')
										</h5>
										<!--end::Page Title-->
									</div>
									<!--end::Info-->
								</div>
							</div>
							<!--end::Subheader-->
							<!--begin::Entry-->
							@yield('content')
							<!--end::Entry-->
						</div>
						<!-- begin::User Panel-->
						<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
							<!--begin::Header-->
							<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
								<h3 class="font-weight-bold m-0">{{ __('admin.header.user.user_profile') }}
								<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
									<i class="ki ki-close icon-xs text-muted"></i>
								</a>
							</div>
							<!--end::Header-->
							<!--begin::Content-->
							<div class="offcanvas-content pr-5 mr-n5">
								<!--begin::Header-->
								<div class="d-flex align-items-center mt-5">
									<div class="symbol symbol-100 mr-5">
										<div class="symbol-label" style="background-image:url('{{ asset('bower_components/html-metronic/assets/media/users/300_21.jpg')}}')"></div>
										<i class="symbol-badge bg-success"></i>
									</div>
									<div class="d-flex flex-column">
										<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::user()->fullname }}</a>
										<div class="navi mt-2">
											<a href="{{ route('admin.logout') }}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
										</div>
									</div>
								</div>
								<!--end::Header-->
							</div>
							<!--end::Content-->
						</div>
						<!-- end::User Panel-->
                        <!--end::Content-->
					<!--begin::Footer-->
                    @include('layouts.admin.sections.footer')
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		@include('layouts.admin.assets.js')
	</body>
	<!--end::Body-->
</html>
