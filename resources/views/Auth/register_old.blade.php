<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>Đăng Ký</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('admin/assets/css/pages/login/login-1.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('admin/assets/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('admin/assets/media/logos/favicon.ico') }}" />
</head>
<style>
    .swal2-icon.swal2-success.swal2-icon-show {
        margin: auto;
    }

    .swal2-icon.swal2-error.swal2-icon-show {
        margin: auto;
    }
</style>
@include('_alert')
@if (session()->has('success'))
    <div class="alert alert-success text-center">{{ session()->get('success') }}</div>
@endif
@if (session()->has('error'))
    <div class="alert alert-danger text-center">{{ session()->get('error') }}</div>
@endif

<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white"
            id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-column flex-row-auto">
                <img style="width:110%;border-radius:10px;" src="{{ asset('img2.jpg') }}" alt="">
                <!--begin::Aside Top-->
                {{-- <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
						<!--begin::Aside header-->
						<a href="#" class="text-center mb-10">
							<img src="{{ asset('admin/assets/media/logos/logo-letter-1.png')}}" class="max-h-70px" alt="" />
						</a>
						<!--end::Aside header-->
						<!--begin::Aside title-->
						<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Discover Amazing Metronic
						<br />with great build tools</h3>
						<!--end::Aside title-->
					</div>
					<!--end::Aside Top-->
					<!--begin::Aside Bottom-->
					<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url(assets/media/svg/illustrations/login-visual-1.svg)"></div>
					<!--end::Aside Bottom--> --}}
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div
                class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <!--begin::Form-->
                        <form method="post" action="{{ route('auth.register') }}" class="form"
                            novalidate="novalidate" enctype="multipart/form-data" id="">
                            <!--begin::Title-->
                            @csrf
                            <div class="pb-13 pt-lg-0 pt-5">
                                <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg"> <img
                                        src="{{ asset('client/image/Logo.png') }}" alt=""></h3>
                                <span class="text-muted font-weight-bold font-size-h4">Relax.
                                    <a href="javascript:;" id="kt_login_signup" class="text-primary font-weight-bolder">
                                        In here we have</a></span>
                            </div>
                            <!--begin::Title-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="font-size-h6 font-weight-bolder text-dark">Email</label>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg"
                                    type="text" name="email" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Name</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg"
                                    type="text" name="name" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Number Phone</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg"
                                    type="text" name="number_phone" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Address</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg"
                                    type="text" name="address" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg"
                                    type="password" name="password" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <div class="d-flex justify-content-between mt-n5">
                                    <label class="font-size-h6 font-weight-bolder text-dark pt-5">Enter the password</label>
                                </div>
                                <input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg"
                                    type="password" name="re_password" autocomplete="off" />
                            </div>
                            <!--end::Form group-->
                            <!--begin::Action-->
                            <div class="pb-lg-0 pb-5">
                                <button type="submit" id=""
                                    class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Register</button>
                            </div>
                            <!--end::Action-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                    <!--begin::Signup-->
                 
                    <!--end::Forgot-->
                </div>
                <!--end::Content body-->
                <!--begin::Content footer-->
                <div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
                    <div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
                        <span class="mr-1">2020©</span>
                        <a href="http://keenthemes.com/metronic" target="_blank"
                            class="text-dark-75 text-hover-primary">Keenthemes</a>
                    </div>
                    <a href="#" class="text-primary font-weight-bolder font-size-lg">Terms</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Plans</a>
                    <a href="#" class="text-primary ml-5 font-weight-bolder font-size-lg">Contact Us</a>
                </div>
                <!--end::Content footer-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>
    <!--end::Main-->
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>
        var KTAppSettings = {
            "breakpoints": {
                "sm": 576,
                "md": 768,
                "lg": 992,
                "xl": 1200,
                "xxl": 1400
            },
            "colors": {
                "theme": {
                    "base": {
                        "white": "#ffffff",
                        "primary": "#3699FF",
                        "secondary": "#E5EAEE",
                        "success": "#1BC5BD",
                        "info": "#8950FC",
                        "warning": "#FFA800",
                        "danger": "#F64E60",
                        "light": "#E4E6EF",
                        "dark": "#181C32"
                    },
                    "light": {
                        "white": "#ffffff",
                        "primary": "#E1F0FF",
                        "secondary": "#EBEDF3",
                        "success": "#C9F7F5",
                        "info": "#EEE5FF",
                        "warning": "#FFF4DE",
                        "danger": "#FFE2E5",
                        "light": "#F3F6F9",
                        "dark": "#D6D6E0"
                    },
                    "inverse": {
                        "white": "#ffffff",
                        "primary": "#ffffff",
                        "secondary": "#3F4254",
                        "success": "#ffffff",
                        "info": "#ffffff",
                        "warning": "#ffffff",
                        "danger": "#ffffff",
                        "light": "#464E5F",
                        "dark": "#ffffff"
                    }
                },
                "gray": {
                    "gray-100": "#F3F6F9",
                    "gray-200": "#EBEDF3",
                    "gray-300": "#E4E6EF",
                    "gray-400": "#D1D3E0",
                    "gray-500": "#B5B5C3",
                    "gray-600": "#7E8299",
                    "gray-700": "#5E6278",
                    "gray-800": "#3F4254",
                    "gray-900": "#181C32"
                }
            },
            "font-family": "Poppins"
        };
    </script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('admin/assets/js/pages/custom/login/login-general.js') }}"></script>
    <!--end::Page Scripts-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<!--end::Body-->

</html>
