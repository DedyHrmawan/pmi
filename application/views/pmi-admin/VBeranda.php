<!--begin::Wrapper-->
<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
	<!--begin::Header-->
	<div id="kt_header" style="" class="header align-items-stretch">
		<!--begin::Container-->
		<div class="container-fluid d-flex align-items-stretch justify-content-between">
			<!--begin::Aside mobile toggle-->
			<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
				<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
					<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
							<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
			</div>
			<!--end::Aside mobile toggle-->
			<!--begin::Mobile logo-->
			<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
				<a href="../../demo1/dist/index.html" class="d-lg-none">
					<img alt="Logo" src="<?= base_url(); ?>assets/admin/media/logos/logo-2.svg" class="h-30px" />
				</a>
			</div>
			<!--end::Mobile logo-->
			<!--begin::Wrapper-->
			<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
				<!--begin::Navbar-->
				<div class="d-flex align-items-stretch" id="kt_header_nav">
					<!--begin::Title-->
					<h1 class="d-flex text-dark fw-bolder fs-3 mt-6">Beranda</h1>
					<!--end::Title-->
				</div>
				<!--end::Navbar-->
				<!--begin::Toolbar wrapper-->
				<div class="d-flex align-items-stretch flex-shrink-0">
					<!--begin::User menu-->
					<div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
						<!--begin::Menu wrapper-->
						<div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
							<img src="<?= base_url(); ?>assets/admin/media/avatars/300-1.jpg" alt="user" />
						</div>
						<!--begin::User account menu-->
						<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
							<!--begin::Menu item-->
							<div class="menu-item px-3">
								<div class="menu-content d-flex align-items-center px-3">
									<!--begin::Avatar-->
									<div class="symbol symbol-50px me-5">
										<img alt="Logo" src="<?= base_url(); ?>assets/admin/media/avatars/300-1.jpg" />
									</div>
									<!--end::Avatar-->
									<!--begin::Username-->
									<div class="d-flex flex-column">
										<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
											<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
										</div>
										<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
									</div>
									<!--end::Username-->
								</div>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator my-2"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu separator-->
							<div class="separator my-2"></div>
							<!--end::Menu separator-->
							<!--begin::Menu item-->
							<div class="menu-item px-5 my-1">
								<a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
							</div>
							<!--end::Menu item-->
							<!--begin::Menu item-->
							<div class="menu-item px-5">
								<a href="../../demo1/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
							</div>
							<!--end::Menu item-->
						</div>
						<!--end::User account menu-->
						<!--end::Menu wrapper-->
					</div>
					<!--end::User menu-->
					<!--begin::Header menu toggle-->
					<div class="d-flex align-items-center d-lg-none ms-2 me-n3" title="Show header menu">
						<div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
							<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
							<span class="svg-icon svg-icon-1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
									<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
					</div>
					<!--end::Header menu toggle-->
				</div>
				<!--end::Toolbar wrapper-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Header-->
	<!--begin::Content-->
	<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
		<!--begin::Toolbar-->
		<div class="toolbar bg-transparent pt-6 mb-5" id="kt_toolbar">
			<!--begin::Container-->

		</div>
		<!--end::Toolbar-->
		<!--begin::Post-->
		<div class="post d-flex flex-column-fluid" id="kt_post">
			<!--begin::Container-->
			<div id="kt_content_container" class="container-xxl">
				<!--begin::Row-->
				<div class="row g-5 g-xl-10 mb-xl-10">
					<!--begin::Col-->
					<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
						<!--begin::Card widget 16-->
						<div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center h-md-50 mb-5 mb-xl-10" style="background-color: #080655;background-image:url('<?= base_url(); ?>assets/admin/media/svg/shapes/wave-bg-dark.svg')">
							<!--begin::Header-->
							<div class="card-header pt-5">
								<!--begin::Title-->
								<div class="card-title d-flex flex-column">
									<!--begin::Amount-->
									<span class="fs-2hx fw-bolder text-white me-2 lh-1 ls-n2">69</span>
									<!--end::Amount-->
									<!--begin::Subtitle-->
									<span class="text-white opacity-50 pt-1 fw-bold fs-6">Active Projects</span>
									<!--end::Subtitle-->
								</div>
								<!--end::Title-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body d-flex align-items-end pt-0">
								<!--begin::Progress-->
								<div class="d-flex align-items-center flex-column mt-3 w-100">
									<div class="d-flex justify-content-between fw-bolder fs-6 text-white opacity-50 w-100 mt-auto mb-2">
										<span>43 Pending</span>
										<span>72%</span>
									</div>
									<div class="h-8px mx-3 w-100 bg-light-danger rounded">
										<div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<!--end::Progress-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card widget 16-->
						<!--begin::Card widget 7-->
						<div class="card card-flush h-md-50 mb-5 mb-xl-10">
							<!--begin::Header-->
							<div class="card-header pt-5">
								<!--begin::Title-->
								<div class="card-title d-flex flex-column">
									<!--begin::Amount-->
									<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">357</span>
									<!--end::Amount-->
									<!--begin::Subtitle-->
									<span class="text-gray-400 pt-1 fw-bold fs-6">Professionals</span>
									<!--end::Subtitle-->
								</div>
								<!--end::Title-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body d-flex flex-column justify-content-end pe-0">
								<!--begin::Title-->
								<span class="fs-6 fw-boldest text-gray-800 d-block mb-2">Today’s Heroes</span>
								<!--end::Title-->
								<!--begin::Users group-->
								<div class="symbol-group symbol-hover flex-nowrap">
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
										<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
										<img alt="Pic" src="<?= base_url(); ?>assets/admin/media/avatars/300-11.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
										<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
										<img alt="Pic" src="<?= base_url(); ?>assets/admin/media/avatars/300-2.jpg" />
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
										<span class="symbol-label bg-danger text-inverse-danger fw-bolder">P</span>
									</div>
									<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
										<img alt="Pic" src="<?= base_url(); ?>assets/admin/media/avatars/300-12.jpg" />
									</div>
									<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
										<span class="symbol-label bg-dark text-gray-300 fs-8 fw-bolder">+42</span>
									</a>
								</div>
								<!--end::Users group-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card widget 7-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->
					<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
						<!--begin::Card widget 4-->
						<div class="card card-flush h-md-50 mb-5 mb-xl-10">
							<!--begin::Header-->
							<div class="card-header pt-5">
								<!--begin::Title-->
								<div class="card-title d-flex flex-column">
									<!--begin::Info-->
									<div class="d-flex align-items-center">
										<!--begin::Currency-->
										<span class="fs-4 fw-bold text-gray-400 me-1 align-self-start">$</span>
										<!--end::Currency-->
										<!--begin::Amount-->
										<span class="fs-2hx fw-bolder text-dark me-2 lh-1 ls-n2">69,700</span>
										<!--end::Amount-->
										<!--begin::Badge-->
										<span class="badge badge-success fs-base">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
											<span class="svg-icon svg-icon-5 svg-icon-white ms-n1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
													<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->2.2%
										</span>
										<!--end::Badge-->
									</div>
									<!--end::Info-->
									<!--begin::Subtitle-->
									<span class="text-gray-400 pt-1 fw-bold fs-6">Projects Earnings in April</span>
									<!--end::Subtitle-->
								</div>
								<!--end::Title-->
							</div>
							<!--end::Header-->
							<!--begin::Card body-->
							<div class="card-body pt-2 pb-4 d-flex align-items-center">
								<!--begin::Chart-->
								<div class="d-flex flex-center me-5 pt-2">
									<div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
								</div>
								<!--end::Chart-->
								<!--begin::Labels-->
								<div class="d-flex flex-column content-justify-center w-100">
									<!--begin::Label-->
									<div class="d-flex fw-bold align-items-center">
										<!--begin::Bullet-->
										<div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
										<!--end::Bullet-->
										<!--begin::Label-->
										<div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
										<!--end::Label-->
										<!--begin::Stats-->
										<div class="fw-boldest text-gray-700 text-xxl-end">$7,660</div>
										<!--end::Stats-->
									</div>
									<!--end::Label-->
									<!--begin::Label-->
									<div class="d-flex fw-bold align-items-center my-3">
										<!--begin::Bullet-->
										<div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
										<!--end::Bullet-->
										<!--begin::Label-->
										<div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
										<!--end::Label-->
										<!--begin::Stats-->
										<div class="fw-boldest text-gray-700 text-xxl-end">$2,820</div>
										<!--end::Stats-->
									</div>
									<!--end::Label-->
									<!--begin::Label-->
									<div class="d-flex fw-bold align-items-center">
										<!--begin::Bullet-->
										<div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
										<!--end::Bullet-->
										<!--begin::Label-->
										<div class="text-gray-500 flex-grow-1 me-4">Others</div>
										<!--end::Label-->
										<!--begin::Stats-->
										<div class="fw-boldest text-gray-700 text-xxl-end">$45,257</div>
										<!--end::Stats-->
									</div>
									<!--end::Label-->
								</div>
								<!--end::Labels-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Card widget 4-->
						<!--begin::List widget 25-->
						<div class="card card-flush h-lg-50">
							<!--begin::Header-->
							<div class="card-header pt-5">
								<!--begin::Title-->
								<h3 class="card-title text-gray-800">Highlights</h3>
								<!--end::Title-->
								<!--begin::Toolbar-->
								<div class="card-toolbar d-none">
									<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
									<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
										<!--begin::Display range-->
										<div class="text-gray-600 fw-bolder">Loading date range...</div>
										<!--end::Display range-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-1 ms-2 me-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
												<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
												<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Daterangepicker-->
								</div>
								<!--end::Toolbar-->
							</div>
							<!--end::Header-->
							<!--begin::Body-->
							<div class="card-body pt-5">
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Section-->
									<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Client Rating</div>
									<!--end::Section-->
									<!--begin::Statistics-->
									<div class="d-flex align-items-senter">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-success me-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
												<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Number-->
										<span class="text-gray-900 fw-boldest fs-6">7.8</span>
										<!--end::Number-->
										<span class="text-gray-400 fw-bolder fs-6">/10</span>
									</div>
									<!--end::Statistics-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Section-->
									<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Quotes</div>
									<!--end::Section-->
									<!--begin::Statistics-->
									<div class="d-flex align-items-senter">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr093.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-danger me-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="7.05026" y="15.5355" width="13" height="2" rx="1" transform="rotate(-45 7.05026 15.5355)" fill="currentColor" />
												<path d="M9.17158 14.0284L9.17158 8.11091C9.17158 7.52513 8.6967 7.05025 8.11092 7.05025C7.52513 7.05025 7.05026 7.52512 7.05026 8.11091L7.05026 15.9497C7.05026 16.502 7.49797 16.9497 8.05026 16.9497L15.8891 16.9497C16.4749 16.9497 16.9498 16.4749 16.9498 15.8891C16.9498 15.3033 16.4749 14.8284 15.8891 14.8284L9.97158 14.8284C9.52975 14.8284 9.17158 14.4703 9.17158 14.0284Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Number-->
										<span class="text-gray-900 fw-boldest fs-6">730</span>
										<!--end::Number-->
									</div>
									<!--end::Statistics-->
								</div>
								<!--end::Item-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-3"></div>
								<!--end::Separator-->
								<!--begin::Item-->
								<div class="d-flex flex-stack">
									<!--begin::Section-->
									<div class="text-gray-700 fw-bold fs-6 me-2">Avg. Agent Earnings</div>
									<!--end::Section-->
									<!--begin::Statistics-->
									<div class="d-flex align-items-senter">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-success me-2">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="16.9497" y="8.46448" width="13" height="2" rx="1" transform="rotate(135 16.9497 8.46448)" fill="currentColor" />
												<path d="M14.8284 9.97157L14.8284 15.8891C14.8284 16.4749 15.3033 16.9497 15.8891 16.9497C16.4749 16.9497 16.9497 16.4749 16.9497 15.8891L16.9497 8.05025C16.9497 7.49797 16.502 7.05025 15.9497 7.05025L8.11091 7.05025C7.52512 7.05025 7.05025 7.52513 7.05025 8.11091C7.05025 8.6967 7.52512 9.17157 8.11091 9.17157L14.0284 9.17157C14.4703 9.17157 14.8284 9.52975 14.8284 9.97157Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Number-->
										<span class="text-gray-900 fw-boldest fs-6">$2,309</span>
										<!--end::Number-->
									</div>
									<!--end::Statistics-->
								</div>
								<!--end::Item-->
							</div>
							<!--end::Body-->
						</div>
						<!--end::LIst widget 25-->
					</div>
					<!--end::Col-->
					<!--begin::Col-->

				</div>
				<!--end::Row-->
			</div>
			<!--end::Container-->
		</div>
		<!--end::Post-->
	</div>
	<!--end::Content-->
	<!--begin::Footer-->
	<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
		<!--begin::Container-->
		<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
			<!--begin::Copyright-->
			<div class="text-dark order-2 order-md-1">
				<span class="text-muted fw-bold me-1">2022©</span>
				<a href="" target="_blank" class="text-gray-800 text-hover-primary">PMI Malang</a>
			</div>
			<!--end::Copyright-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Footer-->
</div>
<!--end::Wrapper-->