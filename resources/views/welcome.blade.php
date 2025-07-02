<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Metronic - The World's #1 Selling Tailwind CSS & Bootstrap Admin Template by KeenThemes" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Metronic by Keenthemes" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8/demo61/index.html" />
    <link rel="shortcut icon" href="/metronic8/demo61/assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" /> <!--end::Global Stylesheets Bundle-->

</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">




            <!--begin::Header-->
            <div id="kt_app_header" class="app-header ">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_container">
                    <!--begin::Header logo-->
                    <div class="app-header-logo d-flex align-items-center me-lg-20 gap-1 gap-lg-2">
                        <!--begin::Drawer toggle-->
                        <button class="btn btn-icon ms-n2 ms-lg-n4" id="kt_activities_toggle">
                            <i class="ki-outline ki-burger-menu-2 fs-1 lh-0"></i>
                        </button>
                        <!--end::Drawer toggle-->

                        <!--begin::Logo image-->
                        <a href="/metronic8/demo61/index.html">
                            <img alt="Logo" src="{{ asset('assets/media/logos/demo44.svg') }}" class="h-25px theme-light-show" />
                            <img alt="Logo" src="{{ asset('assets/media/logos/demo44-dark.svg') }}" class="h-25px theme-dark-show" />
                        </a>
                        <!--end::Logo image-->

                        <!--begin::Mobile toggle-->
                        <div class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px d-flex d-lg-none" id="kt_app_header_menu_toggle">
                            <i class="ki-outline ki-abstract-14 lh-0 fs-1"></i>
                        </div>
                        <!--end::Mobile toggle-->
                    </div>
                    <!--end::Header logo-->
                    <!--begin::Header wrapper-->
                    <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">

                        <!--begin::Menu wrapper-->
                        <div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
                            <!--begin::Menu holder-->
                            <div
                                class="app-header-menu app-header-mobile-drawer align-items-stretch"

                                data-kt-drawer="true"
                                data-kt-drawer-name="app-header-menu"
                                data-kt-drawer-activate="{default: true, lg: false}"
                                data-kt-drawer-overlay="true"
                                data-kt-drawer-width="{default:'200px', '300px': '250px'}"
                                data-kt-drawer-direction="start"
                                data-kt-drawer-toggle="#kt_app_header_menu_toggle"

                                data-kt-swapper="true"
                                data-kt-swapper-mode="prepend"
                                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}">
                                <!--begin::Menu-->
                                <div
                                    class="menu menu-rounded menu-column menu-lg-row menu-active-bg menu-title-gray-600 menu-state-gray-900 menu-arrow-gray-500 fw-semibold fw-semibold fs-6 align-items-stretch my-5 my-lg-0 px-2 px-lg-0"
                                    id="#kt_app_header_menu"
                                    data-kt-menu="true">
                                    <!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span class="menu-link"><span class="menu-title">Home</span><span class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px"><!--begin:Dashboards menu-->
                                            <div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
                                                <!--begin:Row-->
                                                <div class="row">
                                                    <!--begin:Col-->
                                                    <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/index.html" class="menu-link active">
                                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i class="ki-outline ki-element-11 text-primary fs-1"></i> </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">Default</span>
                                                                            <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/dashboards/ecommerce.html" class="menu-link ">
                                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i class="ki-outline ki-basket text-danger fs-1"></i> </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                                                            <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/dashboards/projects.html" class="menu-link ">
                                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i class="ki-outline ki-abstract-44 text-info fs-1"></i> </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                                                            <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/dashboards/online-courses.html" class="menu-link ">
                                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i class="ki-outline ki-color-swatch text-success fs-1"></i> </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                                                            <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/dashboards/marketing.html" class="menu-link ">
                                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i class="ki-outline ki-chart-simple text-gray-900 fs-1"></i> </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                                                            <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/dashboards/bidding.html" class="menu-link ">
                                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i class="ki-outline ki-switch text-warning fs-1"></i> </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                                                            <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/dashboards/pos.html" class="menu-link ">
                                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i class="ki-outline ki-abstract-42 text-danger fs-1"></i> </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                                                            <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                            <!--begin:Col-->
                                                            <div class="col-lg-6 mb-3">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/dashboards/call-center.html" class="menu-link ">
                                                                        <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                                                            <i class="ki-outline ki-call text-primary fs-1"></i> </span>

                                                                        <span class="d-flex flex-column">
                                                                            <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                                                            <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                                                        </span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->

                                                        <div class="separator separator-dashed mx-5 my-5"></div>

                                                        <!--begin:Landing-->
                                                        <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                                                            <div class="d-flex flex-column me-5">
                                                                <div class="fs-6 fw-bold text-gray-800">
                                                                    Landing Page Template
                                                                </div>
                                                                <div class="fs-7 fw-semibold text-muted">
                                                                    Onpe page landing template with pricing & others
                                                                </div>
                                                            </div>

                                                            <a href="/metronic8/demo61/landing.html" class="btn btn-sm btn-primary fw-bold">
                                                                Explore
                                                            </a>
                                                        </div>
                                                        <!--end:Landing-->
                                                    </div>
                                                    <!--end:Col-->

                                                    <!--begin:Col-->
                                                    <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
                                                        <!--begin:Heading-->
                                                        <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
                                                        <!--end:Heading-->


                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/logistics.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Logistics </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/website-analytics.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Website Analytics </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/finance-performance.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Finance Performance </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/store-analytics.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Store Analytics </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/social.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Social </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/delivery.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Delivery </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/crypto.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Crypto </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/school.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    School </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->

                                                        <!--begin:Menu item-->
                                                        <div class="menu-item p-0 m-0">
                                                            <!--begin:Menu link-->
                                                            <a href="/metronic8/demo61/dashboards/podcast.html" class="menu-link py-2 ">
                                                                <span class="menu-title">
                                                                    Podcast </span>
                                                            </a>
                                                            <!--end:Menu link-->
                                                        </div>
                                                        <!--end:Menu item-->
                                                    </div>
                                                    <!--end:Col-->
                                                </div>
                                                <!--end:Row-->
                                            </div>
                                            <!--end:Dashboards menu-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span class="menu-link"><span class="menu-title">Pages</span><span class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0"><!--begin:Pages menu-->
                                            <div class="menu-active-bg px-4 px-lg-0">
                                                <!--begin:Tabs nav-->
                                                <div class="d-flex w-100 overflow-auto">
                                                    <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">
                                                                General </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">
                                                                Account </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">
                                                                Authentication </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">
                                                                Utilities </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                        <!--begin:Nav item-->
                                                        <li class="nav-item mx-lg-1">
                                                            <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">
                                                                Widgets </a>
                                                        </li>
                                                        <!--end:Nav item-->
                                                    </ul>
                                                </div>
                                                <!--end:Tabs nav-->

                                                <!--begin:Tab content-->
                                                <div class="tab-content py-4 py-lg-8 px-lg-7">
                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-8">
                                                                <!--begin:Row-->
                                                                <div class="row">
                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                                        <!--begin:Menu heading-->
                                                                        <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                                                                        <!--end:Menu heading-->

                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/pages/user-profile/overview.html" class="menu-link ">
                                                                                <span class="menu-title">Overview</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/pages/user-profile/projects.html" class="menu-link ">
                                                                                <span class="menu-title">Projects</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/pages/user-profile/campaigns.html" class="menu-link ">
                                                                                <span class="menu-title">Campaigns</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/pages/user-profile/documents.html" class="menu-link ">
                                                                                <span class="menu-title">Documents</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/pages/user-profile/followers.html" class="menu-link ">
                                                                                <span class="menu-title">Followers</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/pages/user-profile/activity.html" class="menu-link ">
                                                                                <span class="menu-title">Activity</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-6">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/about.html" class="menu-link ">
                                                                                    <span class="menu-title">About</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/team.html" class="menu-link ">
                                                                                    <span class="menu-title">Our Team</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/contact.html" class="menu-link ">
                                                                                    <span class="menu-title">Contact Us</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/licenses.html" class="menu-link ">
                                                                                    <span class="menu-title">Licenses</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/sitemap.html" class="menu-link ">
                                                                                    <span class="menu-title">Sitemap</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->

                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/careers/list.html" class="menu-link ">
                                                                                    <span class="menu-title">Careers List</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/careers/apply.html" class="menu-link ">
                                                                                    <span class="menu-title">Careers Apply</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-6">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/faq/classic.html" class="menu-link ">
                                                                                    <span class="menu-title">FAQ Classic</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/faq/extended.html" class="menu-link ">
                                                                                    <span class="menu-title">FAQ Extended</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->

                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-6">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/blog/home.html" class="menu-link ">
                                                                                    <span class="menu-title">Blog Home</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/blog/post.html" class="menu-link ">
                                                                                    <span class="menu-title">Blog Post</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->

                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/pricing.html" class="menu-link ">
                                                                                    <span class="menu-title">Column Pricing</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/pricing/table.html" class="menu-link ">
                                                                                    <span class="menu-title">Table Pricing</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-3 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/social/feeds.html" class="menu-link ">
                                                                                    <span class="menu-title">Feeds</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/social/activity.html" class="menu-link ">
                                                                                    <span class="menu-title">Activty</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/social/followers.html" class="menu-link ">
                                                                                    <span class="menu-title">Followers</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/pages/social/settings.html" class="menu-link ">
                                                                                    <span class="menu-title">Settings</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->
                                                                </div>
                                                                <!--end:Row-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-4">
                                                                <img src="{{ asset('assets/media/stock/600x600/img-82.jpg') }}" class="rounded mw-100" alt="" />
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->

                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane  w-lg-600px" id="kt_app_header_menu_pages_account">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-5 mb-6 mb-lg-0">
                                                                <!--begin:Row-->
                                                                <div class="row">
                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-6">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/overview.html" class="menu-link ">
                                                                                <span class="menu-title">Overview</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/settings.html" class="menu-link ">
                                                                                <span class="menu-title">Settings</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/security.html" class="menu-link ">
                                                                                <span class="menu-title">Security</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/activity.html" class="menu-link ">
                                                                                <span class="menu-title">Activity</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/billing.html" class="menu-link ">
                                                                                <span class="menu-title">Billing</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-6">
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/statements.html" class="menu-link ">
                                                                                <span class="menu-title">Statements</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/referrals.html" class="menu-link ">
                                                                                <span class="menu-title">Referrals</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/api-keys.html" class="menu-link ">
                                                                                <span class="menu-title">API Keys</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                        <!--begin:Menu item-->
                                                                        <div class="menu-item p-0 m-0">
                                                                            <!--begin:Menu link-->
                                                                            <a href="/metronic8/demo61/account/logs.html" class="menu-link ">
                                                                                <span class="menu-title">Logs</span>
                                                                            </a>
                                                                            <!--end:Menu link-->
                                                                        </div>
                                                                        <!--end:Menu item-->
                                                                    </div>
                                                                    <!--end:Col-->
                                                                </div>
                                                                <!--end:Row-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-7">
                                                                <img src="{{ asset('assets/media/stock/900x600/46.jpg') }}" class="rounded mw-100" alt="" />
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->

                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_authentication">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/corporate/sign-in.html" class="menu-link ">
                                                                            <span class="menu-title">Sign-In</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/corporate/sign-up.html" class="menu-link ">
                                                                            <span class="menu-title">Sign-Up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/corporate/two-factor.html" class="menu-link ">
                                                                            <span class="menu-title">Two-Factor</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/corporate/reset-password.html" class="menu-link ">
                                                                            <span class="menu-title">Reset Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/corporate/new-password.html" class="menu-link ">
                                                                            <span class="menu-title">New Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->

                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/overlay/sign-in.html" class="menu-link ">
                                                                            <span class="menu-title">Sign-In</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/overlay/sign-up.html" class="menu-link ">
                                                                            <span class="menu-title">Sign-Up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/overlay/two-factor.html" class="menu-link ">
                                                                            <span class="menu-title">Two-Factor</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/overlay/reset-password.html" class="menu-link ">
                                                                            <span class="menu-title">Reset Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/overlay/new-password.html" class="menu-link ">
                                                                            <span class="menu-title">New Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/creative/sign-in.html" class="menu-link ">
                                                                            <span class="menu-title">Sign-in</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/creative/sign-up.html" class="menu-link ">
                                                                            <span class="menu-title">Sign-up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/creative/two-factor.html" class="menu-link ">
                                                                            <span class="menu-title">Two-Factor</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/creative/reset-password.html" class="menu-link ">
                                                                            <span class="menu-title">Reset Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/creative/new-password.html" class="menu-link ">
                                                                            <span class="menu-title">New Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->

                                                                <!--begin:Menu section-->
                                                                <div class="mb-6">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/fancy/sign-in.html" class="menu-link ">
                                                                            <span class="menu-title">Sign-In</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/fancy/sign-up.html" class="menu-link ">
                                                                            <span class="menu-title">Sign-Up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/fancy/two-factor.html" class="menu-link ">
                                                                            <span class="menu-title">Two-Factor</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/fancy/reset-password.html" class="menu-link ">
                                                                            <span class="menu-title">Reset Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/layouts/fancy/new-password.html" class="menu-link ">
                                                                            <span class="menu-title">New Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/extended/multi-steps-sign-up.html" class="menu-link ">
                                                                            <span class="menu-title">Multi-Steps Sign-Up</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/general/welcome.html" class="menu-link ">
                                                                            <span class="menu-title">Welcome Message</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/general/verify-email.html" class="menu-link ">
                                                                            <span class="menu-title">Verify Email</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/general/coming-soon.html" class="menu-link ">
                                                                            <span class="menu-title">Coming Soon</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/general/password-confirmation.html" class="menu-link ">
                                                                            <span class="menu-title">Password Confirmation</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/general/account-deactivated.html" class="menu-link ">
                                                                            <span class="menu-title">Account Deactivation</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/general/error-404.html" class="menu-link ">
                                                                            <span class="menu-title">Error 404</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/general/error-500.html" class="menu-link ">
                                                                            <span class="menu-title">Error 500</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-3 mb-6 mb-lg-0">
                                                                <!--begin:Menu section-->
                                                                <div class="mb-0">
                                                                    <!--begin:Menu heading-->
                                                                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
                                                                    <!--end:Menu heading-->

                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/email/welcome-message.html" class="menu-link ">
                                                                            <span class="menu-title">Welcome Message</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/email/reset-password.html" class="menu-link ">
                                                                            <span class="menu-title">Reset Password</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/email/subscription-confirmed.html" class="menu-link ">
                                                                            <span class="menu-title">Subscription Confirmed</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/email/card-declined.html" class="menu-link ">
                                                                            <span class="menu-title">Credit Card Declined</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/email/promo-1.html" class="menu-link ">
                                                                            <span class="menu-title">Promo 1</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/email/promo-2.html" class="menu-link ">
                                                                            <span class="menu-title">Promo 2</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                    <!--begin:Menu item-->
                                                                    <div class="menu-item p-0 m-0">
                                                                        <!--begin:Menu link-->
                                                                        <a href="/metronic8/demo61/authentication/email/promo-3.html" class="menu-link ">
                                                                            <span class="menu-title">Promo 3</span>
                                                                        </a>
                                                                        <!--end:Menu link-->
                                                                    </div>
                                                                    <!--end:Menu item-->
                                                                </div>
                                                                <!--end:Menu section-->
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->

                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_utilities">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-7">
                                                                <!--begin:Row-->
                                                                <div class="row">
                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/general/invite-friends.html" class="menu-link ">
                                                                                    <span class="menu-title">Invite Friends</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/general/view-users.html" class="menu-link ">
                                                                                    <span class="menu-title">View Users</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/general/select-users.html" class="menu-link ">
                                                                                    <span class="menu-title">Select Users</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/general/upgrade-plan.html" class="menu-link ">
                                                                                    <span class="menu-title">Upgrade Plan</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/general/share-earn.html" class="menu-link ">
                                                                                    <span class="menu-title">Share & Earn</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/forms/new-target.html" class="menu-link ">
                                                                                    <span class="menu-title">New Target</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/forms/new-card.html" class="menu-link ">
                                                                                    <span class="menu-title">New Card</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/forms/new-address.html" class="menu-link ">
                                                                                    <span class="menu-title">New Address</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/forms/create-api-key.html" class="menu-link ">
                                                                                    <span class="menu-title">Create API Key</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/forms/bidding.html" class="menu-link ">
                                                                                    <span class="menu-title">Bidding</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-6">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/wizards/create-app.html" class="menu-link ">
                                                                                    <span class="menu-title">Create App</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/wizards/create-campaign.html" class="menu-link ">
                                                                                    <span class="menu-title">Create Campaign</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/wizards/create-account.html" class="menu-link ">
                                                                                    <span class="menu-title">Create Business Acc</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/wizards/create-project.html" class="menu-link ">
                                                                                    <span class="menu-title">Create Project</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                                                                    <span class="menu-title">Top Up Wallet</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/wizards/offer-a-deal.html" class="menu-link ">
                                                                                    <span class="menu-title">Offer a Deal</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/wizards/two-factor-authentication.html" class="menu-link ">
                                                                                    <span class="menu-title">Two Factor Auth</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->

                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/search/horizontal.html" class="menu-link ">
                                                                                    <span class="menu-title">Horizontal</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/search/vertical.html" class="menu-link ">
                                                                                    <span class="menu-title">Vertical</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/search/users.html" class="menu-link ">
                                                                                    <span class="menu-title">Users</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/search/select-location.html" class="menu-link ">
                                                                                    <span class="menu-title">Select Location</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->

                                                                    <!--begin:Col-->
                                                                    <div class="col-lg-4 mb-6 mb-lg-0">
                                                                        <!--begin:Menu section-->
                                                                        <div class="mb-0">
                                                                            <!--begin:Menu heading-->
                                                                            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                                                                            <!--end:Menu heading-->

                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/wizards/horizontal.html" class="menu-link ">
                                                                                    <span class="menu-title">Horizontal</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/wizards/vertical.html" class="menu-link ">
                                                                                    <span class="menu-title">Vertical</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/wizards/two-factor-authentication.html" class="menu-link ">
                                                                                    <span class="menu-title">Two Factor Auth</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/wizards/create-app.html" class="menu-link ">
                                                                                    <span class="menu-title">Create App</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/wizards/create-campaign.html" class="menu-link ">
                                                                                    <span class="menu-title">Create Campaign</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/wizards/create-account.html" class="menu-link ">
                                                                                    <span class="menu-title">Create Account</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/wizards/create-project.html" class="menu-link ">
                                                                                    <span class="menu-title">Create Project</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                                                                    <span class="menu-title">Top Up Wallet</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                            <!--begin:Menu item-->
                                                                            <div class="menu-item p-0 m-0">
                                                                                <!--begin:Menu link-->
                                                                                <a href="/metronic8/demo61/utilities/wizards/offer-a-deal.html" class="menu-link ">
                                                                                    <span class="menu-title">Offer a Deal</span>
                                                                                </a>
                                                                                <!--end:Menu link-->
                                                                            </div>
                                                                            <!--end:Menu item-->
                                                                        </div>
                                                                        <!--end:Menu section-->
                                                                    </div>
                                                                    <!--end:Col-->
                                                                </div>
                                                                <!--end:Row-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-5 pe-lg-5">
                                                                <img src="{{ asset('assets/media/stock/600x600/img-84.jpg') }}" class="rounded mw-100" alt="" />
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->

                                                    <!--begin:Tab pane-->
                                                    <div class="tab-pane  w-lg-500px" id="kt_app_header_menu_pages_widgets">
                                                        <!--begin:Row-->
                                                        <div class="row">
                                                            <!--begin:Col-->
                                                            <div class="col-lg-4 mb-6 mb-lg-0">
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/widgets/lists.html" class="menu-link ">
                                                                        <span class="menu-title">Lists</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/widgets/statistics.html" class="menu-link ">
                                                                        <span class="menu-title">Statistics</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/widgets/charts.html" class="menu-link ">
                                                                        <span class="menu-title">Charts</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/widgets/mixed.html" class="menu-link ">
                                                                        <span class="menu-title">Mixed</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/widgets/tables.html" class="menu-link ">
                                                                        <span class="menu-title">Tables</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                                <!--begin:Menu item-->
                                                                <div class="menu-item p-0 m-0">
                                                                    <!--begin:Menu link-->
                                                                    <a href="/metronic8/demo61/widgets/feeds.html" class="menu-link ">
                                                                        <span class="menu-title">Feeds</span>
                                                                    </a>
                                                                    <!--end:Menu link-->
                                                                </div>
                                                                <!--end:Menu item-->
                                                            </div>
                                                            <!--end:Col-->

                                                            <!--begin:Col-->
                                                            <div class="col-lg-8">
                                                                <img src="{{ asset('assets/media/stock/900x600/44.jpg') }}" class="rounded mw-100" alt="" />
                                                            </div>
                                                            <!--end:Col-->
                                                        </div>
                                                        <!--end:Row-->
                                                    </div>
                                                    <!--end:Tab pane-->
                                                </div>
                                                <!--end:Tab content-->
                                            </div>
                                            <!--end:Pages menu-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"><!--begin:Menu link--><span class="menu-link"><span class="menu-title">Apps</span><span class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px"><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-rocket fs-2"></i></span><span class="menu-title">Projects</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/projects/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">My Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/projects/project.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Project</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/projects/targets.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Targets</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/projects/budget.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Budget</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/projects/users.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/projects/files.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/projects/activity.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Activity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/projects/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-handcart fs-2"></i></span><span class="menu-title">eCommerce</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Catalog</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/catalog/products.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Products</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/catalog/categories.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Categories</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/catalog/add-product.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/catalog/edit-product.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/catalog/add-category.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Category</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/catalog/edit-category.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Category</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sales</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/sales/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Orders Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/sales/details.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Order Details</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/sales/add-order.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Order</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/sales/edit-order.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Order</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customers</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/customers/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customers Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/customers/details.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customers Details</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion menu-sub-indention"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Reports</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/reports/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Products Viewed</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/reports/sales.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Sales</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/reports/returns.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Returns</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/reports/customer-orders.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Orders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/reports/shipping.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Shipping</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/ecommerce/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-chart fs-2"></i></span><span class="menu-title">Support Center</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/support-center/overview.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tickets</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/support-center/tickets/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Ticket List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/support-center/tickets/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Ticket View</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorials</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/support-center/tutorials/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorials List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/support-center/tutorials/post.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Tutorials Post</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/support-center/faq.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">FAQ</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/support-center/licenses.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Licenses</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/support-center/contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Contact Us</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-shield-tick fs-2"></i></span><span class="menu-title">User Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/user-management/users/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Users List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/user-management/users/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View User</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Roles</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/user-management/roles/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Roles List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/user-management/roles/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Roles</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/user-management/permissions.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Permissions</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-phone fs-2"></i></span><span class="menu-title">Contacts</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/contacts/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/contacts/add-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/contacts/edit-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Edit Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/contacts/view-contact.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Contact</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-basket fs-2"></i></span><span class="menu-title">Subscriptions</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/subscriptions/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/subscriptions/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Subscription List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/subscriptions/add.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Add Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/subscriptions/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View Subscription</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-briefcase fs-2"></i></span><span class="menu-title">Customers</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/customers/getting-started.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/customers/list.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/customers/view.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Customer Details</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-credit-cart fs-2"></i></span><span class="menu-title">Invoice Management</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Profile</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/invoices/view/invoice-1.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 1</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/invoices/view/invoice-2.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 2</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/invoices/view/invoice-3.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Invoice 3</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                        </div><!--end:Menu sub-->
                                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/invoices/create.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Create Invoice</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-file-added fs-2"></i></span><span class="menu-title">File Manager</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/file-manager/folders.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Folders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/file-manager/files.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/file-manager/blank.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Blank Directory</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/file-manager/settings.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Settings</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-sms fs-2"></i></span><span class="menu-title">Inbox</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/inbox/listing.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Messages</span><span class="menu-badge"><span class="badge badge-light-success">3</span></span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/inbox/compose.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Compose</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/inbox/reply.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">View & Reply</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start" class="menu-item menu-lg-down-accordion"><!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i class="ki-outline ki-message-text-2 fs-2"></i></span><span class="menu-title">Chat</span><span class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                                <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px"><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/chat/private.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Private Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/chat/group.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Group Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                                    <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/chat/drawer.html"><span class="menu-bullet"><span class="bullet bullet-dot"></span></span><span class="menu-title">Drawer Chat</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                                </div><!--end:Menu sub-->
                                            </div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/apps/calendar.html"><span class="menu-icon"><i class="ki-outline ki-calendar-8 fs-2"></i></span><span class="menu-title">Calendar</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item--><!--begin:Menu item-->
                                    <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2"><!--begin:Menu link--><span class="menu-link"><span class="menu-title">Help</span><span class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                        <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px"><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i class="ki-outline ki-rocket fs-2"></i></span><span class="menu-title">Components</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i class="ki-outline ki-abstract-26 fs-2"></i></span><span class="menu-title">Documentation</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="/metronic8/demo61/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span class="menu-icon"><i class="ki-outline ki-switch fs-2"></i></span><span class="menu-title">Layout Builder</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item-->
                                            <div class="menu-item"><!--begin:Menu link--><a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank"><span class="menu-icon"><i class="ki-outline ki-code fs-2"></i></span><span class="menu-title">Changelog v8.3.1</span></a><!--end:Menu link--></div><!--end:Menu item-->
                                        </div><!--end:Menu sub-->
                                    </div><!--end:Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Menu holder-->
                        </div>
                        <!--end::Menu wrapper-->

                        <!--begin::Navbar-->
                        <div class="app-navbar flex-shrink-0 gap-2 gap-lg-5">
                            <!--begin::Notifications-->
                            <div class="app-navbar-item">
                                <!--begin::Menu- wrapper-->
                                <div class="btn btn-icon rounded-circle w-35px h-35px bg-light-warning border-clarity-warning" style="border: 1px solid var(--bs-warning-clarity)" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
                                    <i class="ki-outline ki-notification-on text-warning fs-3"></i>
                                </div>

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
                                    <!--begin::Heading-->
                                    <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('/metronic8/demo61/assets/media/misc/menu-header-bg.jpg')">
                                        <!--begin::Title-->
                                        <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                            Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                        </h3>
                                        <!--end::Title-->

                                        <!--begin::Tabs-->
                                        <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                            </li>
                                        </ul>
                                        <!--end::Tabs-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-outline ki-abstract-28 fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Alice</a>
                                                            <div class="text-gray-500 fs-7">Phase 1 development</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">1 hr</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-danger">
                                                                <i class="ki-outline ki-information fs-2 text-danger"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">HR Confidential</a>
                                                            <div class="text-gray-500 fs-7">Confidential staff documents</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-outline ki-briefcase fs-2 text-warning"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Company HR</a>
                                                            <div class="text-gray-500 fs-7">Corporeate staff profiles</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">5 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-outline ki-abstract-12 fs-2 text-success"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Redux</a>
                                                            <div class="text-gray-500 fs-7">New frontend admin theme</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 days</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-outline ki-colors-square fs-2 text-primary"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Breafing</a>
                                                            <div class="text-gray-500 fs-7">Product launch status update</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">21 Jan</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-info">
                                                                <i class="ki-outline ki-picture
 fs-2 text-info"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner Assets</a>
                                                            <div class="text-gray-500 fs-7">Collection of banner images</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">21 Jan</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Symbol-->
                                                        <div class="symbol symbol-35px me-4">
                                                            <span class="symbol-label bg-light-warning">
                                                                <i class="ki-outline ki-color-swatch fs-2 text-warning"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Symbol-->

                                                        <!--begin::Title-->
                                                        <div class="mb-0 me-2">
                                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon Assets</a>
                                                            <div class="text-gray-500 fs-7">Collection of SVG icons</div>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">20 March</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->

                                            </div>
                                            <!--end::Items-->

                                            <!--begin::View more-->
                                            <div class="py-3 text-center border-top">
                                                <a href="/metronic8/demo61/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                                                    View All
                                                    <i class="ki-outline ki-arrow-right fs-5"></i> </a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tab panel-->

                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column px-9">
                                                <!--begin::Section-->
                                                <div class="pt-10 pb-0">
                                                    <!--begin::Title-->
                                                    <h3 class="text-gray-900 text-center fw-bold">
                                                        Get Pro Access
                                                    </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Text-->
                                                    <div class="text-center text-gray-600 fw-semibold pt-1">
                                                        Outlines keep you honest. They stoping you from amazing poorly about drive
                                                    </div>
                                                    <!--end::Text-->

                                                    <!--begin::Action-->
                                                    <div class="text-center mt-5 mb-9">
                                                        <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Section-->

                                                <!--begin::Illustration-->
                                                <div class="text-center px-4">
                                                    <img class="mw-100 mh-200px" alt="image" src="{{ asset('assets/media/illustrations/sketchy-1/1.png') }}" />
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Tab panel-->

                                        <!--begin::Tab panel-->
                                        <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New order</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Just now</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">New customer</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Payment process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">5 hrs</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Search query</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">2 days</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API connection</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">1 week</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Database restore</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Mar 5</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">System update</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">May 15</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Server OS update</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Apr 3</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-warning me-4">300 WRN</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">API rollback</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Jun 30</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Refund process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Jul 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Withdrawal process</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Sep 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack py-4">
                                                    <!--begin::Section-->
                                                    <div class="d-flex align-items-center me-2">
                                                        <!--begin::Code-->
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <!--end::Code-->

                                                        <!--begin::Title-->
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-semibold">Mail tasks</a>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Label-->
                                                    <span class="badge badge-light fs-8">Dec 10</span>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Item-->

                                            </div>
                                            <!--end::Items-->

                                            <!--begin::View more-->
                                            <div class="py-3 text-center border-top">
                                                <a href="/metronic8/demo61/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">
                                                    View All
                                                    <i class="ki-outline ki-arrow-right fs-5"></i> </a>
                                            </div>
                                            <!--end::View more-->
                                        </div>
                                        <!--end::Tab panel-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Menu--> <!--end::Menu wrapper-->
                            </div>
                            <!--end::Notifications-->

                            <!--begin::Chat-->
                            <div class="app-navbar-item">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon rounded-circle w-35px h-35px bg-light-primary border-clarity-primary" style="border: 1px solid var(--bs-primary-clarity)" id="kt_drawer_chat_toggle">
                                    <i class="ki-outline ki-message-text-2 text-primary fs-3"></i>
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Chat-->

                            <!--begin::My apps links-->
                            <div class="app-navbar-item">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon rounded-circle w-35px h-35px bg-light-success border-clarity-success" style="border: 1px solid var(--bs-success-clarity)" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <i class="ki-outline ki-element-11 text-success fs-3"></i>
                                </div>

                                <!--begin::My apps-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true">
                                    <!--begin::Card-->
                                    <div class="card">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <!--begin::Card title-->
                                            <div class="card-title">My Apps</div>
                                            <!--end::Card title-->

                                            <!--begin::Card toolbar-->
                                            <div class="card-toolbar">
                                                <!--begin::Menu-->
                                                <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n3" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end">
                                                    <i class="ki-outline ki-setting-3 fs-2"></i> </button>

                                                <!--begin::Menu 3-->
                                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                                                    <!--begin::Heading-->
                                                    <div class="menu-item px-3">
                                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                            Payments
                                                        </div>
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Create Invoice
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link flex-stack px-3">
                                                            Create Payment

                                                            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference">
                                                                <i class="ki-outline ki-information fs-6"></i> </span>
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">
                                                            Generate Bill
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                                                        <a href="#" class="menu-link px-3">
                                                            <span class="menu-title">Subscription</span>
                                                            <span class="menu-arrow"></span>
                                                        </a>

                                                        <!--begin::Menu sub-->
                                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Plans
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Billing
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <a href="#" class="menu-link px-3">
                                                                    Statements
                                                                </a>
                                                            </div>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu separator-->
                                                            <div class="separator my-2"></div>
                                                            <!--end::Menu separator-->

                                                            <!--begin::Menu item-->
                                                            <div class="menu-item px-3">
                                                                <div class="menu-content px-3">
                                                                    <!--begin::Switch-->
                                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                                        <!--begin::Input-->
                                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                                        <!--end::Input-->

                                                                        <!--end::Label-->
                                                                        <span class="form-check-label text-muted fs-6">
                                                                            Recuring
                                                                        </span>
                                                                        <!--end::Label-->
                                                                    </label>
                                                                    <!--end::Switch-->
                                                                </div>
                                                            </div>
                                                            <!--end::Menu item-->
                                                        </div>
                                                        <!--end::Menu sub-->
                                                    </div>
                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3 my-1">
                                                        <a href="#" class="menu-link px-3">
                                                            Settings
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu 3-->
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::Card toolbar-->
                                        </div>
                                        <!--end::Card header-->

                                        <!--begin::Card body-->
                                        <div class="card-body py-5">
                                            <!--begin::Scroll-->
                                            <div class="mh-450px scroll-y me-n5 pe-5">
                                                <!--begin::Row-->
                                                <div class="row g-2">
                                                    <!--begin::Col-->
                                                    <div class="col-4">
                                                        <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                            <img src="{{ asset('assets/media/svg/brand-logos/amazon.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                                            <span class="fw-semibold">AWS</span>
                                                        </a>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4">
                                                        <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                            <img src="{{ asset('assets/media/svg/brand-logos/angular-icon-1.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                                            <span class="fw-semibold">AngularJS</span>
                                                        </a>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4">
                                                        <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                            <img src="{{ asset('assets/media/svg/brand-logos/atica.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                                            <span class="fw-semibold">Atica</span>
                                                        </a>
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-4">
                                                        <a href="#" class="d-flex flex-column flex-center text-center text-gray-800 text-hover-primary bg-hover-light rounded py-4 px-3 mb-3">
                                                            <img src="{{ asset('assets/media/svg/brand-logos/beats-electronics.svg') }}" class="w-25px h-25px mb-2" alt="" />
                                                            <span class="fw-semibold">Music</span>
                                                        </a>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Scroll-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                </div>
                                <!--end::My apps--> <!--end::Menu wrapper-->
                            </div>
                            <!--end::My apps links-->

                            <!--begin::User menu-->
                            <div class="app-navbar-item ms-lg-5" id="kt_header_user_menu_toggle">
                                <!--begin::Menu wrapper-->
                                <div class="d-flex align-items-center"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                    data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-end">
                                    <!--begin:Info-->
                                    <div class="text-end d-none d-sm-flex flex-column justify-content-center me-3">
                                        <span class="/metronic8/demo61/pages/user-profile/overview.html" class="text-gray-500 fs-8 fw-bold">Hello</span>
                                        <a href="/metronic8/demo61/pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-7 fw-bold d-block">Ethan</a>
                                    </div>
                                    <!--end:Info-->

                                    <!--begin::User-->
                                    <div class="cursor-pointer symbol symbol symbol-circle symbol-35px symbol-md-40px">
                                        <img class src="{{ asset('assets/media/avatars/300-3.jpg') }}" alt="user" />
                                        <div class="position-absolute translate-middle bottom-0 mb-1 start-100 ms-n1 bg-success rounded-circle h-8px w-8px"></div>
                                    </div>
                                    <!--end::User-->
                                </div>

                                <!--begin::User account menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{ asset('assets/media/avatars/300-3.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Username-->
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
                                                    Ethan <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                                </div>

                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                                    ethan@kt.com </a>
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
                                        <a href="/metronic8/demo61/account/overview.html" class="menu-link px-5">
                                            My Profile
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/metronic8/demo61/apps/projects/list.html" class="menu-link px-5">
                                            <span class="menu-text">My Projects</span>
                                            <span class="menu-badge">
                                                <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title">My Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/referrals.html" class="menu-link px-5">
                                                    Referrals
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/billing.html" class="menu-link px-5">
                                                    Billing
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/statements.html" class="menu-link px-5">
                                                    Payments
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/statements.html" class="menu-link d-flex flex-stack px-5">
                                                    Statements

                                                    <span class="ms-2 lh-0" data-bs-toggle="tooltip" title="View your statements">
                                                        <i class="ki-outline ki-information-5 fs-5"></i> </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu separator-->
                                            <div class="separator my-2"></div>
                                            <!--end::Menu separator-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-7">
                                                            Notifications
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/metronic8/demo61/account/statements.html" class="menu-link px-5">
                                            My Statements
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">
                                                Mode

                                                <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                                    <i class="ki-outline ki-night-day theme-light-show fs-2"></i> <i class="ki-outline ki-moon theme-dark-show fs-2"></i> </span>
                                            </span>
                                        </a>

                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-night-day fs-2"></i> </span>
                                                    <span class="menu-title">
                                                        Light
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-moon fs-2"></i> </span>
                                                    <span class="menu-title">
                                                        Dark
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3 my-0">
                                                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                                                    <span class="menu-icon" data-kt-element="icon">
                                                        <i class="ki-outline ki-screen fs-2"></i> </span>
                                                    <span class="menu-title">
                                                        System
                                                    </span>
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->

                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                        <a href="#" class="menu-link px-5">
                                            <span class="menu-title position-relative">
                                                Language

                                                <span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                                    English <img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" />
                                                </span>
                                            </span>
                                        </a>

                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/settings.html" class="menu-link d-flex px-5 active">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="{{ asset('assets/media/flags/united-states.svg') }}" alt="" />
                                                    </span>
                                                    English
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="{{ asset('assets/media/flags/spain.svg') }}" alt="" />
                                                    </span>
                                                    Spanish
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="{{ asset('assets/media/flags/germany.svg') }}" alt="" />
                                                    </span>
                                                    German
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="{{ asset('assets/media/flags/japan.svg') }}" alt="" />
                                                    </span>
                                                    Japanese
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="/metronic8/demo61/account/settings.html" class="menu-link d-flex px-5">
                                                    <span class="symbol symbol-20px me-4">
                                                        <img class="rounded-1" src="{{ asset('assets/media/flags/france.svg') }}" alt="" />
                                                    </span>
                                                    French
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5 my-1">
                                        <a href="/metronic8/demo61/account/settings.html" class="menu-link px-5">
                                            Account Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-5">
                                        <a href="/metronic8/demo61/authentication/layouts/corporate/sign-in.html" class="menu-link px-5">
                                            Sign Out
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::User account menu-->

                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::User menu-->

                            <!--begin::Sidebar menu toggle-->
                            <!--end::Sidebar menu toggle-->
                        </div>
                        <!--end::Navbar-->
                    </div>
                    <!--end::Header wrapper-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  d-flex flex-column flex-column-fluid " id="kt_app_wrapper">



                <!--begin::Hero-->
                <div id="kt_app_hero" class="app-hero  pt-6 pb-7 border-bottom border-gray-300 ">
                    <!--begin::Hero container-->
                    <div id="kt_app_hero_container" class="app-container  container-fluid ">
                        <div class="d-flex flex-column grow-1 mb-5">
                            <ul class="nav nav-tabs fw-bold border-0 gap-2">
                                <li class="nav-item">
                                    <a class="nav-link btn btn-active-light btn-active-text-gray-800 btn-text-gray-600 py-3 px-4 fs-6" data-bs-toggle="tab" href="#kt_search_rent">Rent</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-active-light btn-active-text-gray-800 btn-text-gray-600 py-3 px-4 fs-6 active" data-bs-toggle="tab" href="#kt_search_buy">Buy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-active-light btn-active-text-gray-800 btn-text-gray-600 py-3 px-4 fs-6" data-bs-toggle="tab" href="#kt_search_new_construction">New Construction</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-active-light tbtn-active-text-gray-800 btn-text-gray-600 py-3 px-4 fs-6" data-bs-toggle="tab" href="#kt_search_business_space">Business Space</a>
                                </li>
                            </ul>
                        </div>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade" id="kt_search_rent" role="tabpanel">
                                <form action="" method="get" class="d-flex flex-wrap gap-5">
                                    <div class="w-lg-300px position-relative">
                                        <div class="d-flex align-items-center position-absolute translate-middle-y top-50 start-0 ms-3">
                                            <i class="ki-outline ki-magnifier text-gray-600 fs-3"></i>
                                        </div>

                                        <input type="text" class="form-control form-control-solid border ps-10" minlength="3" maxlength="4" placeholder="Location" value="Amsterdam" name="location" />
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1" selected>Apartment</option>
                                            <option value="2">Condos</option>
                                            <option value="3">Townhouse</option>
                                            <option value="4">Commercial</option>
                                        </select>
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1" selected>€1,000</option>
                                            <option value="2">€3,000</option>
                                            <option value="3">€5,000</option>
                                            <option value="5">€10,000+</option>
                                        </select>
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1">1 bed</option>
                                            <option value="2" selected>2 beds</option>
                                            <option value="3">3 beds</option>
                                            <option value="4">4 beds</option>
                                            <option value="5">5+ beds</option>
                                        </select>
                                    </div>

                                    <button class="btn btn-icon border btn-light btn-active-light">
                                        <i class="ki-outline ki-setting-4 text-gray-600 fs-2"></i> </button>

                                    <button class="btn btn-dark">
                                        Search
                                    </button>
                                </form>
                            </div>

                            <div class="tab-pane fade show active" id="kt_search_buy" role="tabpanel">
                                <form action="" method="get" class="d-flex flex-wrap gap-5">
                                    <div class="w-lg-300px position-relative">
                                        <div class="d-flex align-items-center position-absolute translate-middle-y top-50 start-0 ms-3">
                                            <i class="ki-outline ki-magnifier text-gray-600 fs-3"></i>
                                        </div>

                                        <input type="text" class="form-control form-control-solid border ps-10" minlength="3" maxlength="4" placeholder="Location" value="Amsterdam" name="location" />
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1" selected>Apartment</option>
                                            <option value="2">Condos</option>
                                            <option value="3">Townhouse</option>
                                            <option value="4">Commercial</option>
                                        </select>
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1" selected>€75,000</option>
                                            <option value="2">€100,000</option>
                                            <option value="3">€150,000</option>
                                            <option value="4">€200,000</option>
                                            <option value="5">€500,000+</option>
                                        </select>
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1">1 bed</option>
                                            <option value="2" selected>2 beds</option>
                                            <option value="3">3 beds</option>
                                            <option value="4">4 beds</option>
                                            <option value="5">5+ beds</option>
                                        </select>
                                    </div>

                                    <button class="btn btn-icon border btn-light btn-active-light">
                                        <i class="ki-outline ki-setting-4 text-gray-600 fs-2"></i> </button>

                                    <button class="btn btn-dark">
                                        Search
                                    </button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="kt_search_new_construction" role="tabpanel">
                                <form action="" method="get" class="d-flex flex-wrap gap-5">
                                    <div class="w-lg-300px position-relative">
                                        <div class="d-flex align-items-center position-absolute translate-middle-y top-50 start-0 ms-3">
                                            <i class="ki-outline ki-magnifier text-gray-600 fs-3"></i>
                                        </div>

                                        <input type="text" class="form-control form-control-solid border ps-10" minlength="3" maxlength="4" placeholder="New York" value="Amsterdam" name="location" />
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1" selected>Apartment</option>
                                            <option value="2">Condos</option>
                                            <option value="3">Townhouse</option>
                                            <option value="4">Commercial</option>
                                        </select>
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1" selected>€175,000</option>
                                            <option value="2">€200,000</option>
                                            <option value="3">€350,000</option>
                                            <option value="4">€500,000</option>
                                            <option value="5">€1,000,000+</option>
                                        </select>
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1">1 bed</option>
                                            <option value="2" selected>2 beds</option>
                                            <option value="3">3 beds</option>
                                            <option value="4">4 beds</option>
                                            <option value="5">5+ beds</option>
                                        </select>
                                    </div>

                                    <button class="btn btn-icon border btn-light btn-active-light">
                                        <i class="ki-outline ki-setting-4 text-gray-600 fs-2"></i> </button>

                                    <button class="btn btn-dark">
                                        Search
                                    </button>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="kt_search_business_space" role="tabpanel">
                                <form action="" method="get" class="d-flex flex-wrap gap-5">
                                    <div class="w-lg-300px position-relative">
                                        <div class="d-flex align-items-center position-absolute translate-middle-y top-50 start-0 ms-3">
                                            <i class="ki-outline ki-magnifier text-gray-600 fs-3"></i>
                                        </div>

                                        <input type="text" class="form-control form-control-solid border ps-10" minlength="3" maxlength="4" placeholder="Location" value="Amsterdam" name="location" />
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1" selected>Industrial</option>
                                            <option value="2">Coworking</option>
                                            <option value="3">Retail</option>
                                            <option value="4">Commercial</option>
                                        </select>
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1" selected>€75,000</option>
                                            <option value="2">€100,000</option>
                                            <option value="3">€150,000</option>
                                            <option value="4">€200,000</option>
                                            <option value="5">€500,000+</option>
                                        </select>
                                    </div>

                                    <div class="d-flex w-lg-175px">
                                        <select class="form-select form-select-solid border" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                            <option value="0">All</option>
                                            <option value="1">500 sf</option>
                                            <option value="2" selected>2000 sf</option>
                                            <option value="3">3000 sf</option>
                                            <option value="4">5000 sf</option>
                                            <option value="5">10000+ sf</option>
                                        </select>
                                    </div>

                                    <button class="btn btn-icon border btn-light btn-active-light">
                                        <i class="ki-outline ki-setting-4 text-gray-600 fs-2"></i> </button>

                                    <button class="btn btn-dark">
                                        Search
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--end::Hero container-->
                </div>
                <!--end::Hero-->

                <!--begin::Wrapper container-->
                <div class="app-container  container-fluid d-flex flex-row-fluid ">



                    <!--begin::Main-->
                    <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                        <!--begin::Content wrapper-->
                        <div class="d-flex flex-column flex-column-fluid">


                            <!--begin::Content-->
                            <div id="kt_app_content" class="app-content  flex-column-fluid ">

                                <div class="row flex-row-fluid">
                                    <div class="col-lg-3">
                                        <div class="d-flex flex-stack gap-5 flex-wrap" id="kt_app_search_filter">
                                            <div class="fs-6 fw-semibold text-gray-500">
                                                Showing <span class="text-gray-800">65</span>&nbsp; search results
                                            </div>

                                            <div class="d-flex gap-5">
                                                <select class="form-select form-select-sm form-select-solid border h-35px w-150px" data-control="select2" data-placeholder="Select" data-hide-search="true">
                                                    <option value="0">All</option>
                                                    <option value="1" selected>Popular</option>
                                                    <option value="2">Top Rated</option>
                                                    <option value="3">Best Match</option>
                                                </select>

                                                <ul class="nav nav-tabs nav-tabs-switch h-35px flex-shrink-0 rounded">
                                                    <li class="nav-item d-flex align-items-stretch">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_search_results_1">
                                                            <i class="ki-outline ki-element-11 fs-5 lh-0"></i> </a>
                                                    </li>
                                                    <li class="nav-item d-flex align-items-stretch">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_search_results_2">
                                                            <i class="ki-outline ki-row-horizontal fs-5 lh-0"></i> </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <div class="separator separator-dashed my-5"></div>

                                        <div class="hover-scroll me-n2" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header, #kt_app_footer, #kt_app_hero, #kt_app_search_filter" data-kt-scroll-wrappers="#kt_app_content" data-kt-scroll-offset="35px">
                                            <div class="tab-content">
                                                <div class="tab-pane fade" id="kt_search_results_1" role="tabpanel">

                                                </div>
                                                <div class="tab-pane fade show active" id="kt_search_results_2" role="tabpanel">
                                                    <div class="d-flex flex-column flex-grow-1 gap-6">
                                                        <div class="card card-hover-border p-5 flex-lg-row align-items-lg-center gap-5 ">
                                                            <div class="d-flex flex-column flex-grow-1">
                                                                <div class="d-flex flex-stack gap-5">
                                                                    <div class="d-flex flex-stack gap-2 mb-1">
                                                                        <i class="ki-outline ki-magnifier text-gray-500 fs-3"></i>
                                                                        <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                            Bella Vistastraat 246 </a>
                                                                    </div>

                                                                    <i class="ki-outline ki-heart text-danger fs-3 me-2"></i>
                                                                </div>

                                                                <div class="text-gray-500 mb-3">
                                                                    1074 SH Amsterdam </div>

                                                                <div class="d-flex gap-4 mb-3 fw-semibold">
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="fs-3 text-gray-500 lh-0" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.1244 0.333008H2.87547C2.2016 0.334183 1.55565 0.602401 1.07915 1.07891C0.602645 1.55541 0.334427 2.20135 0.333252 2.87523V11.1241C0.334427 11.798 0.602645 12.4439 1.07915 12.9204C1.55565 13.3969 2.2016 13.6652 2.87547 13.6663H11.1244C11.7982 13.6652 12.4442 13.3969 12.9207 12.9204C13.3972 12.4439 13.6654 11.798 13.6666 11.1241V2.87523C13.6654 2.20135 13.3972 1.55541 12.9207 1.07891C12.4442 0.602401 11.7982 0.334183 11.1244 0.333008ZM12.7777 11.1241C12.7765 11.5623 12.602 11.9821 12.2922 12.2919C11.9823 12.6017 11.5625 12.7763 11.1244 12.7775H2.87547C2.43734 12.7763 2.01749 12.6017 1.70769 12.2919C1.39788 11.9821 1.22331 11.5623 1.22214 11.1241V2.87523C1.22331 2.4371 1.39788 2.01725 1.70769 1.70744C2.01749 1.39764 2.43734 1.22307 2.87547 1.2219H11.1244C11.5625 1.22307 11.9823 1.39764 12.2922 1.70744C12.602 2.01725 12.7765 2.4371 12.7777 2.87523V11.1241Z" fill="currentColor" />
                                                                            <path d="M10.9999 7.81789C10.882 7.81789 10.7689 7.86471 10.6856 7.94806C10.6022 8.03141 10.5554 8.14446 10.5554 8.26233V9.929L4.07098 3.44455H5.73764C5.85552 3.44455 5.96856 3.39773 6.05191 3.31438C6.13526 3.23103 6.18209 3.11798 6.18209 3.00011C6.18209 2.88223 6.13526 2.76919 6.05191 2.68584C5.96856 2.60249 5.85552 2.55566 5.73764 2.55566H2.86209C2.78075 2.55566 2.70275 2.58797 2.64524 2.64548C2.58773 2.703 2.55542 2.781 2.55542 2.86233V5.73789C2.55542 5.85576 2.60225 5.96881 2.68559 6.05216C2.76894 6.13551 2.88199 6.18233 2.99986 6.18233C3.11774 6.18233 3.23078 6.13551 3.31413 6.05216C3.39748 5.96881 3.44431 5.85576 3.44431 5.73789V4.07122L9.92875 10.5557H8.26209C8.14421 10.5557 8.03117 10.6025 7.94782 10.6858C7.86447 10.7692 7.81764 10.8822 7.81764 11.0001C7.81764 11.118 7.86447 11.231 7.94782 11.3144C8.03117 11.3977 8.14421 11.4446 8.26209 11.4446H11.1376C11.219 11.4446 11.297 11.4122 11.3545 11.3547C11.412 11.2972 11.4443 11.2192 11.4443 11.1379V8.26233C11.4443 8.14446 11.3975 8.03141 11.3141 7.94806C11.2308 7.86471 11.1177 7.81789 10.9999 7.81789Z" fill="currentColor" />
                                                                        </svg>

                                                                        64 m2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.6656 6.24696V2.16892C13.6656 1.33968 12.991 0.665039 12.1617 0.665039H3.83846C3.00921 0.665039 2.33463 1.33968 2.33463 2.16892V6.24696C1.37912 6.47681 0.666748 7.33811 0.666748 8.36315V11.4049C0.666748 11.6462 0.862371 11.8418 1.10368 11.8418H2.3346V12.8986C2.3346 13.1399 2.53022 13.3355 2.77154 13.3355C3.01285 13.3355 3.20847 13.1399 3.20847 12.8986V11.8418H12.7917V12.8986C12.7917 13.1399 12.9873 13.3355 13.2286 13.3355C13.4699 13.3355 13.6656 13.1399 13.6656 12.8986V11.8418H14.8965C15.1378 11.8418 15.3334 11.6462 15.3334 11.4049V8.36315C15.3335 7.33811 14.6211 6.47681 13.6656 6.24696ZM3.2085 2.16892C3.2085 1.82156 3.49112 1.53894 3.83846 1.53894H12.1617C12.5091 1.53894 12.7917 1.82156 12.7917 2.16892V6.18629H11.3478V5.49695C11.3478 4.35484 10.4186 3.42568 9.27654 3.42568H6.72373C5.58162 3.42568 4.65246 4.35487 4.65246 5.49695V6.18626H3.2085V2.16892ZM10.4739 5.49695V6.18626H5.52628V5.49695C5.52628 4.83669 6.06342 4.29955 6.72368 4.29955H9.27652C9.93675 4.29952 10.4739 4.83672 10.4739 5.49695ZM1.54062 10.9679V8.36315C1.54062 7.64468 2.12514 7.06016 2.84361 7.06016H13.1566C13.875 7.06016 14.4595 7.64468 14.4595 8.36315V10.9679H1.54062Z" fill="currentColor" />
                                                                        </svg>
                                                                        2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700 text-uppercase">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7.99992 15.1663C6.58249 15.1663 5.19689 14.746 4.01833 13.9585C2.83978 13.1711 1.92121 12.0518 1.37879 10.7422C0.836357 9.4327 0.694433 7.99173 0.970961 6.60153C1.24749 5.21133 1.93005 3.93436 2.93232 2.93208C3.9346 1.9298 5.21158 1.24724 6.60177 0.970717C7.99197 0.694189 9.43295 0.836113 10.7425 1.37854C12.052 1.92097 13.1713 2.83954 13.9588 4.01809C14.7463 5.19664 15.1666 6.58224 15.1666 7.99968C15.1648 9.89985 14.4092 11.7217 13.0656 13.0653C11.7219 14.409 9.9001 15.1646 7.99992 15.1663ZM7.99992 1.83301C6.78027 1.83301 5.58801 2.19468 4.5739 2.87228C3.5598 3.54988 2.76941 4.51299 2.30266 5.6398C1.83592 6.76661 1.7138 8.00652 1.95175 9.20273C2.18969 10.399 2.77701 11.4977 3.63943 12.3602C4.50185 13.2226 5.60065 13.8099 6.79686 14.0479C7.99308 14.2858 9.23299 14.1637 10.3598 13.6969C11.4866 13.2302 12.4497 12.4398 13.1273 11.4257C13.8049 10.4116 14.1666 9.21933 14.1666 7.99968C14.1648 6.36472 13.5146 4.79723 12.3585 3.64113C11.2024 2.48504 9.63488 1.83478 7.99992 1.83301ZM7.33325 12.2463C7.2357 12.2477 7.13868 12.2319 7.04659 12.1997C6.88899 12.1424 6.75273 12.0382 6.65618 11.9012C6.55963 11.7641 6.50742 11.6007 6.50659 11.433V8.99301H5.62659C5.47423 8.98822 5.32623 8.94105 5.19919 8.85681C5.07215 8.77257 4.97111 8.65458 4.90741 8.5161C4.84371 8.37762 4.81987 8.22412 4.83856 8.07284C4.85726 7.92156 4.91776 7.77848 5.01325 7.65968L8.11325 4.05968C8.22431 3.93375 8.37108 3.84463 8.53404 3.80416C8.69699 3.7637 8.8684 3.77382 9.02547 3.83317C9.18253 3.89252 9.3178 3.99829 9.41327 4.13641C9.50874 4.27453 9.5599 4.43844 9.55992 4.60634V7.08634H10.3933C10.5462 7.08994 10.695 7.13623 10.823 7.22C10.951 7.30377 11.053 7.42167 11.1175 7.56037C11.182 7.69907 11.2064 7.85305 11.188 8.0049C11.1696 8.15676 11.1091 8.30043 11.0133 8.41968L7.91992 11.9997C7.84374 12.0781 7.75252 12.1404 7.65172 12.1828C7.55091 12.2252 7.4426 12.2468 7.33325 12.2463ZM5.99992 7.99968H7.43992V10.9463L9.99992 8.05968H8.52659V5.05301L5.99992 7.99968Z" fill="currentColor" />
                                                                        </svg>
                                                                        c
                                                                    </div>
                                                                </div>

                                                                <div class="text-gray-800 mb-3 fs-2 fw-bold">
                                                                    €499,000 </div>

                                                                <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                    Vondelland Makelaar B.V. </a>
                                                            </div>
                                                        </div>
                                                        <div class="card card-hover-border p-5 flex-lg-row align-items-lg-center gap-5 ">
                                                            <div class="d-flex flex-column flex-grow-1">
                                                                <div class="d-flex flex-stack gap-5">
                                                                    <div class="d-flex flex-stack gap-2 mb-1">
                                                                        <i class="ki-outline ki-magnifier text-gray-500 fs-3"></i>
                                                                        <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                            Brenner 79 A </a>
                                                                    </div>

                                                                    <i class="ki-solid ki-heart text-danger fs-3 me-2"></i>
                                                                </div>

                                                                <div class="text-gray-500 mb-3">
                                                                    1061 OG Amsterdam </div>

                                                                <div class="d-flex gap-4 mb-3 fw-semibold">
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="fs-3 text-gray-500 lh-0" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.1244 0.333008H2.87547C2.2016 0.334183 1.55565 0.602401 1.07915 1.07891C0.602645 1.55541 0.334427 2.20135 0.333252 2.87523V11.1241C0.334427 11.798 0.602645 12.4439 1.07915 12.9204C1.55565 13.3969 2.2016 13.6652 2.87547 13.6663H11.1244C11.7982 13.6652 12.4442 13.3969 12.9207 12.9204C13.3972 12.4439 13.6654 11.798 13.6666 11.1241V2.87523C13.6654 2.20135 13.3972 1.55541 12.9207 1.07891C12.4442 0.602401 11.7982 0.334183 11.1244 0.333008ZM12.7777 11.1241C12.7765 11.5623 12.602 11.9821 12.2922 12.2919C11.9823 12.6017 11.5625 12.7763 11.1244 12.7775H2.87547C2.43734 12.7763 2.01749 12.6017 1.70769 12.2919C1.39788 11.9821 1.22331 11.5623 1.22214 11.1241V2.87523C1.22331 2.4371 1.39788 2.01725 1.70769 1.70744C2.01749 1.39764 2.43734 1.22307 2.87547 1.2219H11.1244C11.5625 1.22307 11.9823 1.39764 12.2922 1.70744C12.602 2.01725 12.7765 2.4371 12.7777 2.87523V11.1241Z" fill="currentColor" />
                                                                            <path d="M10.9999 7.81789C10.882 7.81789 10.7689 7.86471 10.6856 7.94806C10.6022 8.03141 10.5554 8.14446 10.5554 8.26233V9.929L4.07098 3.44455H5.73764C5.85552 3.44455 5.96856 3.39773 6.05191 3.31438C6.13526 3.23103 6.18209 3.11798 6.18209 3.00011C6.18209 2.88223 6.13526 2.76919 6.05191 2.68584C5.96856 2.60249 5.85552 2.55566 5.73764 2.55566H2.86209C2.78075 2.55566 2.70275 2.58797 2.64524 2.64548C2.58773 2.703 2.55542 2.781 2.55542 2.86233V5.73789C2.55542 5.85576 2.60225 5.96881 2.68559 6.05216C2.76894 6.13551 2.88199 6.18233 2.99986 6.18233C3.11774 6.18233 3.23078 6.13551 3.31413 6.05216C3.39748 5.96881 3.44431 5.85576 3.44431 5.73789V4.07122L9.92875 10.5557H8.26209C8.14421 10.5557 8.03117 10.6025 7.94782 10.6858C7.86447 10.7692 7.81764 10.8822 7.81764 11.0001C7.81764 11.118 7.86447 11.231 7.94782 11.3144C8.03117 11.3977 8.14421 11.4446 8.26209 11.4446H11.1376C11.219 11.4446 11.297 11.4122 11.3545 11.3547C11.412 11.2972 11.4443 11.2192 11.4443 11.1379V8.26233C11.4443 8.14446 11.3975 8.03141 11.3141 7.94806C11.2308 7.86471 11.1177 7.81789 10.9999 7.81789Z" fill="currentColor" />
                                                                        </svg>

                                                                        56 m2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.6656 6.24696V2.16892C13.6656 1.33968 12.991 0.665039 12.1617 0.665039H3.83846C3.00921 0.665039 2.33463 1.33968 2.33463 2.16892V6.24696C1.37912 6.47681 0.666748 7.33811 0.666748 8.36315V11.4049C0.666748 11.6462 0.862371 11.8418 1.10368 11.8418H2.3346V12.8986C2.3346 13.1399 2.53022 13.3355 2.77154 13.3355C3.01285 13.3355 3.20847 13.1399 3.20847 12.8986V11.8418H12.7917V12.8986C12.7917 13.1399 12.9873 13.3355 13.2286 13.3355C13.4699 13.3355 13.6656 13.1399 13.6656 12.8986V11.8418H14.8965C15.1378 11.8418 15.3334 11.6462 15.3334 11.4049V8.36315C15.3335 7.33811 14.6211 6.47681 13.6656 6.24696ZM3.2085 2.16892C3.2085 1.82156 3.49112 1.53894 3.83846 1.53894H12.1617C12.5091 1.53894 12.7917 1.82156 12.7917 2.16892V6.18629H11.3478V5.49695C11.3478 4.35484 10.4186 3.42568 9.27654 3.42568H6.72373C5.58162 3.42568 4.65246 4.35487 4.65246 5.49695V6.18626H3.2085V2.16892ZM10.4739 5.49695V6.18626H5.52628V5.49695C5.52628 4.83669 6.06342 4.29955 6.72368 4.29955H9.27652C9.93675 4.29952 10.4739 4.83672 10.4739 5.49695ZM1.54062 10.9679V8.36315C1.54062 7.64468 2.12514 7.06016 2.84361 7.06016H13.1566C13.875 7.06016 14.4595 7.64468 14.4595 8.36315V10.9679H1.54062Z" fill="currentColor" />
                                                                        </svg>
                                                                        2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700 text-uppercase">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7.99992 15.1663C6.58249 15.1663 5.19689 14.746 4.01833 13.9585C2.83978 13.1711 1.92121 12.0518 1.37879 10.7422C0.836357 9.4327 0.694433 7.99173 0.970961 6.60153C1.24749 5.21133 1.93005 3.93436 2.93232 2.93208C3.9346 1.9298 5.21158 1.24724 6.60177 0.970717C7.99197 0.694189 9.43295 0.836113 10.7425 1.37854C12.052 1.92097 13.1713 2.83954 13.9588 4.01809C14.7463 5.19664 15.1666 6.58224 15.1666 7.99968C15.1648 9.89985 14.4092 11.7217 13.0656 13.0653C11.7219 14.409 9.9001 15.1646 7.99992 15.1663ZM7.99992 1.83301C6.78027 1.83301 5.58801 2.19468 4.5739 2.87228C3.5598 3.54988 2.76941 4.51299 2.30266 5.6398C1.83592 6.76661 1.7138 8.00652 1.95175 9.20273C2.18969 10.399 2.77701 11.4977 3.63943 12.3602C4.50185 13.2226 5.60065 13.8099 6.79686 14.0479C7.99308 14.2858 9.23299 14.1637 10.3598 13.6969C11.4866 13.2302 12.4497 12.4398 13.1273 11.4257C13.8049 10.4116 14.1666 9.21933 14.1666 7.99968C14.1648 6.36472 13.5146 4.79723 12.3585 3.64113C11.2024 2.48504 9.63488 1.83478 7.99992 1.83301ZM7.33325 12.2463C7.2357 12.2477 7.13868 12.2319 7.04659 12.1997C6.88899 12.1424 6.75273 12.0382 6.65618 11.9012C6.55963 11.7641 6.50742 11.6007 6.50659 11.433V8.99301H5.62659C5.47423 8.98822 5.32623 8.94105 5.19919 8.85681C5.07215 8.77257 4.97111 8.65458 4.90741 8.5161C4.84371 8.37762 4.81987 8.22412 4.83856 8.07284C4.85726 7.92156 4.91776 7.77848 5.01325 7.65968L8.11325 4.05968C8.22431 3.93375 8.37108 3.84463 8.53404 3.80416C8.69699 3.7637 8.8684 3.77382 9.02547 3.83317C9.18253 3.89252 9.3178 3.99829 9.41327 4.13641C9.50874 4.27453 9.5599 4.43844 9.55992 4.60634V7.08634H10.3933C10.5462 7.08994 10.695 7.13623 10.823 7.22C10.951 7.30377 11.053 7.42167 11.1175 7.56037C11.182 7.69907 11.2064 7.85305 11.188 8.0049C11.1696 8.15676 11.1091 8.30043 11.0133 8.41968L7.91992 11.9997C7.84374 12.0781 7.75252 12.1404 7.65172 12.1828C7.55091 12.2252 7.4426 12.2468 7.33325 12.2463ZM5.99992 7.99968H7.43992V10.9463L9.99992 8.05968H8.52659V5.05301L5.99992 7.99968Z" fill="currentColor" />
                                                                        </svg>
                                                                        d
                                                                    </div>
                                                                </div>

                                                                <div class="text-gray-800 mb-3 fs-2 fw-bold">
                                                                    €575,000 </div>

                                                                <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                    RijksPlaats Makelaar </a>
                                                            </div>
                                                        </div>
                                                        <div class="card card-hover-border p-5 flex-lg-row align-items-lg-center gap-5 border-2 border-success">
                                                            <div class="d-flex flex-column flex-grow-1">
                                                                <div class="d-flex flex-stack gap-5">
                                                                    <div class="d-flex flex-stack gap-2 mb-1">
                                                                        <i class="ki-outline ki-magnifier text-gray-500 fs-3"></i>
                                                                        <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                            Bella Vistastraat 246 </a>
                                                                    </div>

                                                                    <i class="ki-outline ki-heart text-danger fs-3 me-2"></i>
                                                                </div>

                                                                <div class="text-gray-500 mb-3">
                                                                    1109 RV Amsterdam </div>

                                                                <div class="d-flex gap-4 mb-3 fw-semibold">
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="fs-3 text-gray-500 lh-0" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.1244 0.333008H2.87547C2.2016 0.334183 1.55565 0.602401 1.07915 1.07891C0.602645 1.55541 0.334427 2.20135 0.333252 2.87523V11.1241C0.334427 11.798 0.602645 12.4439 1.07915 12.9204C1.55565 13.3969 2.2016 13.6652 2.87547 13.6663H11.1244C11.7982 13.6652 12.4442 13.3969 12.9207 12.9204C13.3972 12.4439 13.6654 11.798 13.6666 11.1241V2.87523C13.6654 2.20135 13.3972 1.55541 12.9207 1.07891C12.4442 0.602401 11.7982 0.334183 11.1244 0.333008ZM12.7777 11.1241C12.7765 11.5623 12.602 11.9821 12.2922 12.2919C11.9823 12.6017 11.5625 12.7763 11.1244 12.7775H2.87547C2.43734 12.7763 2.01749 12.6017 1.70769 12.2919C1.39788 11.9821 1.22331 11.5623 1.22214 11.1241V2.87523C1.22331 2.4371 1.39788 2.01725 1.70769 1.70744C2.01749 1.39764 2.43734 1.22307 2.87547 1.2219H11.1244C11.5625 1.22307 11.9823 1.39764 12.2922 1.70744C12.602 2.01725 12.7765 2.4371 12.7777 2.87523V11.1241Z" fill="currentColor" />
                                                                            <path d="M10.9999 7.81789C10.882 7.81789 10.7689 7.86471 10.6856 7.94806C10.6022 8.03141 10.5554 8.14446 10.5554 8.26233V9.929L4.07098 3.44455H5.73764C5.85552 3.44455 5.96856 3.39773 6.05191 3.31438C6.13526 3.23103 6.18209 3.11798 6.18209 3.00011C6.18209 2.88223 6.13526 2.76919 6.05191 2.68584C5.96856 2.60249 5.85552 2.55566 5.73764 2.55566H2.86209C2.78075 2.55566 2.70275 2.58797 2.64524 2.64548C2.58773 2.703 2.55542 2.781 2.55542 2.86233V5.73789C2.55542 5.85576 2.60225 5.96881 2.68559 6.05216C2.76894 6.13551 2.88199 6.18233 2.99986 6.18233C3.11774 6.18233 3.23078 6.13551 3.31413 6.05216C3.39748 5.96881 3.44431 5.85576 3.44431 5.73789V4.07122L9.92875 10.5557H8.26209C8.14421 10.5557 8.03117 10.6025 7.94782 10.6858C7.86447 10.7692 7.81764 10.8822 7.81764 11.0001C7.81764 11.118 7.86447 11.231 7.94782 11.3144C8.03117 11.3977 8.14421 11.4446 8.26209 11.4446H11.1376C11.219 11.4446 11.297 11.4122 11.3545 11.3547C11.412 11.2972 11.4443 11.2192 11.4443 11.1379V8.26233C11.4443 8.14446 11.3975 8.03141 11.3141 7.94806C11.2308 7.86471 11.1177 7.81789 10.9999 7.81789Z" fill="currentColor" />
                                                                        </svg>

                                                                        109 m2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.6656 6.24696V2.16892C13.6656 1.33968 12.991 0.665039 12.1617 0.665039H3.83846C3.00921 0.665039 2.33463 1.33968 2.33463 2.16892V6.24696C1.37912 6.47681 0.666748 7.33811 0.666748 8.36315V11.4049C0.666748 11.6462 0.862371 11.8418 1.10368 11.8418H2.3346V12.8986C2.3346 13.1399 2.53022 13.3355 2.77154 13.3355C3.01285 13.3355 3.20847 13.1399 3.20847 12.8986V11.8418H12.7917V12.8986C12.7917 13.1399 12.9873 13.3355 13.2286 13.3355C13.4699 13.3355 13.6656 13.1399 13.6656 12.8986V11.8418H14.8965C15.1378 11.8418 15.3334 11.6462 15.3334 11.4049V8.36315C15.3335 7.33811 14.6211 6.47681 13.6656 6.24696ZM3.2085 2.16892C3.2085 1.82156 3.49112 1.53894 3.83846 1.53894H12.1617C12.5091 1.53894 12.7917 1.82156 12.7917 2.16892V6.18629H11.3478V5.49695C11.3478 4.35484 10.4186 3.42568 9.27654 3.42568H6.72373C5.58162 3.42568 4.65246 4.35487 4.65246 5.49695V6.18626H3.2085V2.16892ZM10.4739 5.49695V6.18626H5.52628V5.49695C5.52628 4.83669 6.06342 4.29955 6.72368 4.29955H9.27652C9.93675 4.29952 10.4739 4.83672 10.4739 5.49695ZM1.54062 10.9679V8.36315C1.54062 7.64468 2.12514 7.06016 2.84361 7.06016H13.1566C13.875 7.06016 14.4595 7.64468 14.4595 8.36315V10.9679H1.54062Z" fill="currentColor" />
                                                                        </svg>
                                                                        3
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700 text-uppercase">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7.99992 15.1663C6.58249 15.1663 5.19689 14.746 4.01833 13.9585C2.83978 13.1711 1.92121 12.0518 1.37879 10.7422C0.836357 9.4327 0.694433 7.99173 0.970961 6.60153C1.24749 5.21133 1.93005 3.93436 2.93232 2.93208C3.9346 1.9298 5.21158 1.24724 6.60177 0.970717C7.99197 0.694189 9.43295 0.836113 10.7425 1.37854C12.052 1.92097 13.1713 2.83954 13.9588 4.01809C14.7463 5.19664 15.1666 6.58224 15.1666 7.99968C15.1648 9.89985 14.4092 11.7217 13.0656 13.0653C11.7219 14.409 9.9001 15.1646 7.99992 15.1663ZM7.99992 1.83301C6.78027 1.83301 5.58801 2.19468 4.5739 2.87228C3.5598 3.54988 2.76941 4.51299 2.30266 5.6398C1.83592 6.76661 1.7138 8.00652 1.95175 9.20273C2.18969 10.399 2.77701 11.4977 3.63943 12.3602C4.50185 13.2226 5.60065 13.8099 6.79686 14.0479C7.99308 14.2858 9.23299 14.1637 10.3598 13.6969C11.4866 13.2302 12.4497 12.4398 13.1273 11.4257C13.8049 10.4116 14.1666 9.21933 14.1666 7.99968C14.1648 6.36472 13.5146 4.79723 12.3585 3.64113C11.2024 2.48504 9.63488 1.83478 7.99992 1.83301ZM7.33325 12.2463C7.2357 12.2477 7.13868 12.2319 7.04659 12.1997C6.88899 12.1424 6.75273 12.0382 6.65618 11.9012C6.55963 11.7641 6.50742 11.6007 6.50659 11.433V8.99301H5.62659C5.47423 8.98822 5.32623 8.94105 5.19919 8.85681C5.07215 8.77257 4.97111 8.65458 4.90741 8.5161C4.84371 8.37762 4.81987 8.22412 4.83856 8.07284C4.85726 7.92156 4.91776 7.77848 5.01325 7.65968L8.11325 4.05968C8.22431 3.93375 8.37108 3.84463 8.53404 3.80416C8.69699 3.7637 8.8684 3.77382 9.02547 3.83317C9.18253 3.89252 9.3178 3.99829 9.41327 4.13641C9.50874 4.27453 9.5599 4.43844 9.55992 4.60634V7.08634H10.3933C10.5462 7.08994 10.695 7.13623 10.823 7.22C10.951 7.30377 11.053 7.42167 11.1175 7.56037C11.182 7.69907 11.2064 7.85305 11.188 8.0049C11.1696 8.15676 11.1091 8.30043 11.0133 8.41968L7.91992 11.9997C7.84374 12.0781 7.75252 12.1404 7.65172 12.1828C7.55091 12.2252 7.4426 12.2468 7.33325 12.2463ZM5.99992 7.99968H7.43992V10.9463L9.99992 8.05968H8.52659V5.05301L5.99992 7.99968Z" fill="currentColor" />
                                                                        </svg>
                                                                        a
                                                                    </div>
                                                                </div>

                                                                <div class="text-gray-800 mb-3 fs-2 fw-bold">
                                                                    €799,000 </div>

                                                                <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                    Vondelland Makelaar B.V. </a>
                                                            </div>
                                                        </div>
                                                        <div class="card card-hover-border p-5 flex-lg-row align-items-lg-center gap-5 ">
                                                            <div class="d-flex flex-column flex-grow-1">
                                                                <div class="d-flex flex-stack gap-5">
                                                                    <div class="d-flex flex-stack gap-2 mb-1">
                                                                        <i class="ki-outline ki-magnifier text-gray-500 fs-3"></i>
                                                                        <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                            Argonautenstraat 16 C </a>
                                                                    </div>

                                                                    <i class="ki-outline ki-heart text-danger fs-3 me-2"></i>
                                                                </div>

                                                                <div class="text-gray-500 mb-3">
                                                                    1074 SH Amsterdam </div>

                                                                <div class="d-flex gap-4 mb-3 fw-semibold">
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="fs-3 text-gray-500 lh-0" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.1244 0.333008H2.87547C2.2016 0.334183 1.55565 0.602401 1.07915 1.07891C0.602645 1.55541 0.334427 2.20135 0.333252 2.87523V11.1241C0.334427 11.798 0.602645 12.4439 1.07915 12.9204C1.55565 13.3969 2.2016 13.6652 2.87547 13.6663H11.1244C11.7982 13.6652 12.4442 13.3969 12.9207 12.9204C13.3972 12.4439 13.6654 11.798 13.6666 11.1241V2.87523C13.6654 2.20135 13.3972 1.55541 12.9207 1.07891C12.4442 0.602401 11.7982 0.334183 11.1244 0.333008ZM12.7777 11.1241C12.7765 11.5623 12.602 11.9821 12.2922 12.2919C11.9823 12.6017 11.5625 12.7763 11.1244 12.7775H2.87547C2.43734 12.7763 2.01749 12.6017 1.70769 12.2919C1.39788 11.9821 1.22331 11.5623 1.22214 11.1241V2.87523C1.22331 2.4371 1.39788 2.01725 1.70769 1.70744C2.01749 1.39764 2.43734 1.22307 2.87547 1.2219H11.1244C11.5625 1.22307 11.9823 1.39764 12.2922 1.70744C12.602 2.01725 12.7765 2.4371 12.7777 2.87523V11.1241Z" fill="currentColor" />
                                                                            <path d="M10.9999 7.81789C10.882 7.81789 10.7689 7.86471 10.6856 7.94806C10.6022 8.03141 10.5554 8.14446 10.5554 8.26233V9.929L4.07098 3.44455H5.73764C5.85552 3.44455 5.96856 3.39773 6.05191 3.31438C6.13526 3.23103 6.18209 3.11798 6.18209 3.00011C6.18209 2.88223 6.13526 2.76919 6.05191 2.68584C5.96856 2.60249 5.85552 2.55566 5.73764 2.55566H2.86209C2.78075 2.55566 2.70275 2.58797 2.64524 2.64548C2.58773 2.703 2.55542 2.781 2.55542 2.86233V5.73789C2.55542 5.85576 2.60225 5.96881 2.68559 6.05216C2.76894 6.13551 2.88199 6.18233 2.99986 6.18233C3.11774 6.18233 3.23078 6.13551 3.31413 6.05216C3.39748 5.96881 3.44431 5.85576 3.44431 5.73789V4.07122L9.92875 10.5557H8.26209C8.14421 10.5557 8.03117 10.6025 7.94782 10.6858C7.86447 10.7692 7.81764 10.8822 7.81764 11.0001C7.81764 11.118 7.86447 11.231 7.94782 11.3144C8.03117 11.3977 8.14421 11.4446 8.26209 11.4446H11.1376C11.219 11.4446 11.297 11.4122 11.3545 11.3547C11.412 11.2972 11.4443 11.2192 11.4443 11.1379V8.26233C11.4443 8.14446 11.3975 8.03141 11.3141 7.94806C11.2308 7.86471 11.1177 7.81789 10.9999 7.81789Z" fill="currentColor" />
                                                                        </svg>

                                                                        73 m2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.6656 6.24696V2.16892C13.6656 1.33968 12.991 0.665039 12.1617 0.665039H3.83846C3.00921 0.665039 2.33463 1.33968 2.33463 2.16892V6.24696C1.37912 6.47681 0.666748 7.33811 0.666748 8.36315V11.4049C0.666748 11.6462 0.862371 11.8418 1.10368 11.8418H2.3346V12.8986C2.3346 13.1399 2.53022 13.3355 2.77154 13.3355C3.01285 13.3355 3.20847 13.1399 3.20847 12.8986V11.8418H12.7917V12.8986C12.7917 13.1399 12.9873 13.3355 13.2286 13.3355C13.4699 13.3355 13.6656 13.1399 13.6656 12.8986V11.8418H14.8965C15.1378 11.8418 15.3334 11.6462 15.3334 11.4049V8.36315C15.3335 7.33811 14.6211 6.47681 13.6656 6.24696ZM3.2085 2.16892C3.2085 1.82156 3.49112 1.53894 3.83846 1.53894H12.1617C12.5091 1.53894 12.7917 1.82156 12.7917 2.16892V6.18629H11.3478V5.49695C11.3478 4.35484 10.4186 3.42568 9.27654 3.42568H6.72373C5.58162 3.42568 4.65246 4.35487 4.65246 5.49695V6.18626H3.2085V2.16892ZM10.4739 5.49695V6.18626H5.52628V5.49695C5.52628 4.83669 6.06342 4.29955 6.72368 4.29955H9.27652C9.93675 4.29952 10.4739 4.83672 10.4739 5.49695ZM1.54062 10.9679V8.36315C1.54062 7.64468 2.12514 7.06016 2.84361 7.06016H13.1566C13.875 7.06016 14.4595 7.64468 14.4595 8.36315V10.9679H1.54062Z" fill="currentColor" />
                                                                        </svg>
                                                                        3
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700 text-uppercase">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7.99992 15.1663C6.58249 15.1663 5.19689 14.746 4.01833 13.9585C2.83978 13.1711 1.92121 12.0518 1.37879 10.7422C0.836357 9.4327 0.694433 7.99173 0.970961 6.60153C1.24749 5.21133 1.93005 3.93436 2.93232 2.93208C3.9346 1.9298 5.21158 1.24724 6.60177 0.970717C7.99197 0.694189 9.43295 0.836113 10.7425 1.37854C12.052 1.92097 13.1713 2.83954 13.9588 4.01809C14.7463 5.19664 15.1666 6.58224 15.1666 7.99968C15.1648 9.89985 14.4092 11.7217 13.0656 13.0653C11.7219 14.409 9.9001 15.1646 7.99992 15.1663ZM7.99992 1.83301C6.78027 1.83301 5.58801 2.19468 4.5739 2.87228C3.5598 3.54988 2.76941 4.51299 2.30266 5.6398C1.83592 6.76661 1.7138 8.00652 1.95175 9.20273C2.18969 10.399 2.77701 11.4977 3.63943 12.3602C4.50185 13.2226 5.60065 13.8099 6.79686 14.0479C7.99308 14.2858 9.23299 14.1637 10.3598 13.6969C11.4866 13.2302 12.4497 12.4398 13.1273 11.4257C13.8049 10.4116 14.1666 9.21933 14.1666 7.99968C14.1648 6.36472 13.5146 4.79723 12.3585 3.64113C11.2024 2.48504 9.63488 1.83478 7.99992 1.83301ZM7.33325 12.2463C7.2357 12.2477 7.13868 12.2319 7.04659 12.1997C6.88899 12.1424 6.75273 12.0382 6.65618 11.9012C6.55963 11.7641 6.50742 11.6007 6.50659 11.433V8.99301H5.62659C5.47423 8.98822 5.32623 8.94105 5.19919 8.85681C5.07215 8.77257 4.97111 8.65458 4.90741 8.5161C4.84371 8.37762 4.81987 8.22412 4.83856 8.07284C4.85726 7.92156 4.91776 7.77848 5.01325 7.65968L8.11325 4.05968C8.22431 3.93375 8.37108 3.84463 8.53404 3.80416C8.69699 3.7637 8.8684 3.77382 9.02547 3.83317C9.18253 3.89252 9.3178 3.99829 9.41327 4.13641C9.50874 4.27453 9.5599 4.43844 9.55992 4.60634V7.08634H10.3933C10.5462 7.08994 10.695 7.13623 10.823 7.22C10.951 7.30377 11.053 7.42167 11.1175 7.56037C11.182 7.69907 11.2064 7.85305 11.188 8.0049C11.1696 8.15676 11.1091 8.30043 11.0133 8.41968L7.91992 11.9997C7.84374 12.0781 7.75252 12.1404 7.65172 12.1828C7.55091 12.2252 7.4426 12.2468 7.33325 12.2463ZM5.99992 7.99968H7.43992V10.9463L9.99992 8.05968H8.52659V5.05301L5.99992 7.99968Z" fill="currentColor" />
                                                                        </svg>
                                                                        c
                                                                    </div>
                                                                </div>

                                                                <div class="text-gray-800 mb-3 fs-2 fw-bold">
                                                                    €799,000 </div>

                                                                <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                    RijksPlaats Makelaar </a>
                                                            </div>
                                                        </div>
                                                        <div class="card card-hover-border p-5 flex-lg-row align-items-lg-center gap-5 ">
                                                            <div class="d-flex flex-column flex-grow-1">
                                                                <div class="d-flex flex-stack gap-5">
                                                                    <div class="d-flex flex-stack gap-2 mb-1">
                                                                        <i class="ki-outline ki-magnifier text-gray-500 fs-3"></i>
                                                                        <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                            Bella Vistastraat 246 </a>
                                                                    </div>

                                                                    <i class="ki-outline ki-heart text-danger fs-3 me-2"></i>
                                                                </div>

                                                                <div class="text-gray-500 mb-3">
                                                                    1074 SH Amsterdam </div>

                                                                <div class="d-flex gap-4 mb-3 fw-semibold">
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="fs-3 text-gray-500 lh-0" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.1244 0.333008H2.87547C2.2016 0.334183 1.55565 0.602401 1.07915 1.07891C0.602645 1.55541 0.334427 2.20135 0.333252 2.87523V11.1241C0.334427 11.798 0.602645 12.4439 1.07915 12.9204C1.55565 13.3969 2.2016 13.6652 2.87547 13.6663H11.1244C11.7982 13.6652 12.4442 13.3969 12.9207 12.9204C13.3972 12.4439 13.6654 11.798 13.6666 11.1241V2.87523C13.6654 2.20135 13.3972 1.55541 12.9207 1.07891C12.4442 0.602401 11.7982 0.334183 11.1244 0.333008ZM12.7777 11.1241C12.7765 11.5623 12.602 11.9821 12.2922 12.2919C11.9823 12.6017 11.5625 12.7763 11.1244 12.7775H2.87547C2.43734 12.7763 2.01749 12.6017 1.70769 12.2919C1.39788 11.9821 1.22331 11.5623 1.22214 11.1241V2.87523C1.22331 2.4371 1.39788 2.01725 1.70769 1.70744C2.01749 1.39764 2.43734 1.22307 2.87547 1.2219H11.1244C11.5625 1.22307 11.9823 1.39764 12.2922 1.70744C12.602 2.01725 12.7765 2.4371 12.7777 2.87523V11.1241Z" fill="currentColor" />
                                                                            <path d="M10.9999 7.81789C10.882 7.81789 10.7689 7.86471 10.6856 7.94806C10.6022 8.03141 10.5554 8.14446 10.5554 8.26233V9.929L4.07098 3.44455H5.73764C5.85552 3.44455 5.96856 3.39773 6.05191 3.31438C6.13526 3.23103 6.18209 3.11798 6.18209 3.00011C6.18209 2.88223 6.13526 2.76919 6.05191 2.68584C5.96856 2.60249 5.85552 2.55566 5.73764 2.55566H2.86209C2.78075 2.55566 2.70275 2.58797 2.64524 2.64548C2.58773 2.703 2.55542 2.781 2.55542 2.86233V5.73789C2.55542 5.85576 2.60225 5.96881 2.68559 6.05216C2.76894 6.13551 2.88199 6.18233 2.99986 6.18233C3.11774 6.18233 3.23078 6.13551 3.31413 6.05216C3.39748 5.96881 3.44431 5.85576 3.44431 5.73789V4.07122L9.92875 10.5557H8.26209C8.14421 10.5557 8.03117 10.6025 7.94782 10.6858C7.86447 10.7692 7.81764 10.8822 7.81764 11.0001C7.81764 11.118 7.86447 11.231 7.94782 11.3144C8.03117 11.3977 8.14421 11.4446 8.26209 11.4446H11.1376C11.219 11.4446 11.297 11.4122 11.3545 11.3547C11.412 11.2972 11.4443 11.2192 11.4443 11.1379V8.26233C11.4443 8.14446 11.3975 8.03141 11.3141 7.94806C11.2308 7.86471 11.1177 7.81789 10.9999 7.81789Z" fill="currentColor" />
                                                                        </svg>

                                                                        164 m2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.6656 6.24696V2.16892C13.6656 1.33968 12.991 0.665039 12.1617 0.665039H3.83846C3.00921 0.665039 2.33463 1.33968 2.33463 2.16892V6.24696C1.37912 6.47681 0.666748 7.33811 0.666748 8.36315V11.4049C0.666748 11.6462 0.862371 11.8418 1.10368 11.8418H2.3346V12.8986C2.3346 13.1399 2.53022 13.3355 2.77154 13.3355C3.01285 13.3355 3.20847 13.1399 3.20847 12.8986V11.8418H12.7917V12.8986C12.7917 13.1399 12.9873 13.3355 13.2286 13.3355C13.4699 13.3355 13.6656 13.1399 13.6656 12.8986V11.8418H14.8965C15.1378 11.8418 15.3334 11.6462 15.3334 11.4049V8.36315C15.3335 7.33811 14.6211 6.47681 13.6656 6.24696ZM3.2085 2.16892C3.2085 1.82156 3.49112 1.53894 3.83846 1.53894H12.1617C12.5091 1.53894 12.7917 1.82156 12.7917 2.16892V6.18629H11.3478V5.49695C11.3478 4.35484 10.4186 3.42568 9.27654 3.42568H6.72373C5.58162 3.42568 4.65246 4.35487 4.65246 5.49695V6.18626H3.2085V2.16892ZM10.4739 5.49695V6.18626H5.52628V5.49695C5.52628 4.83669 6.06342 4.29955 6.72368 4.29955H9.27652C9.93675 4.29952 10.4739 4.83672 10.4739 5.49695ZM1.54062 10.9679V8.36315C1.54062 7.64468 2.12514 7.06016 2.84361 7.06016H13.1566C13.875 7.06016 14.4595 7.64468 14.4595 8.36315V10.9679H1.54062Z" fill="currentColor" />
                                                                        </svg>
                                                                        5
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700 text-uppercase">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7.99992 15.1663C6.58249 15.1663 5.19689 14.746 4.01833 13.9585C2.83978 13.1711 1.92121 12.0518 1.37879 10.7422C0.836357 9.4327 0.694433 7.99173 0.970961 6.60153C1.24749 5.21133 1.93005 3.93436 2.93232 2.93208C3.9346 1.9298 5.21158 1.24724 6.60177 0.970717C7.99197 0.694189 9.43295 0.836113 10.7425 1.37854C12.052 1.92097 13.1713 2.83954 13.9588 4.01809C14.7463 5.19664 15.1666 6.58224 15.1666 7.99968C15.1648 9.89985 14.4092 11.7217 13.0656 13.0653C11.7219 14.409 9.9001 15.1646 7.99992 15.1663ZM7.99992 1.83301C6.78027 1.83301 5.58801 2.19468 4.5739 2.87228C3.5598 3.54988 2.76941 4.51299 2.30266 5.6398C1.83592 6.76661 1.7138 8.00652 1.95175 9.20273C2.18969 10.399 2.77701 11.4977 3.63943 12.3602C4.50185 13.2226 5.60065 13.8099 6.79686 14.0479C7.99308 14.2858 9.23299 14.1637 10.3598 13.6969C11.4866 13.2302 12.4497 12.4398 13.1273 11.4257C13.8049 10.4116 14.1666 9.21933 14.1666 7.99968C14.1648 6.36472 13.5146 4.79723 12.3585 3.64113C11.2024 2.48504 9.63488 1.83478 7.99992 1.83301ZM7.33325 12.2463C7.2357 12.2477 7.13868 12.2319 7.04659 12.1997C6.88899 12.1424 6.75273 12.0382 6.65618 11.9012C6.55963 11.7641 6.50742 11.6007 6.50659 11.433V8.99301H5.62659C5.47423 8.98822 5.32623 8.94105 5.19919 8.85681C5.07215 8.77257 4.97111 8.65458 4.90741 8.5161C4.84371 8.37762 4.81987 8.22412 4.83856 8.07284C4.85726 7.92156 4.91776 7.77848 5.01325 7.65968L8.11325 4.05968C8.22431 3.93375 8.37108 3.84463 8.53404 3.80416C8.69699 3.7637 8.8684 3.77382 9.02547 3.83317C9.18253 3.89252 9.3178 3.99829 9.41327 4.13641C9.50874 4.27453 9.5599 4.43844 9.55992 4.60634V7.08634H10.3933C10.5462 7.08994 10.695 7.13623 10.823 7.22C10.951 7.30377 11.053 7.42167 11.1175 7.56037C11.182 7.69907 11.2064 7.85305 11.188 8.0049C11.1696 8.15676 11.1091 8.30043 11.0133 8.41968L7.91992 11.9997C7.84374 12.0781 7.75252 12.1404 7.65172 12.1828C7.55091 12.2252 7.4426 12.2468 7.33325 12.2463ZM5.99992 7.99968H7.43992V10.9463L9.99992 8.05968H8.52659V5.05301L5.99992 7.99968Z" fill="currentColor" />
                                                                        </svg>
                                                                        c
                                                                    </div>
                                                                </div>

                                                                <div class="text-gray-800 mb-3 fs-2 fw-bold">
                                                                    €810,000 </div>

                                                                <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                    RijksPlaats Makelaar </a>
                                                            </div>
                                                        </div>
                                                        <div class="card card-hover-border p-5 flex-lg-row align-items-lg-center gap-5 ">
                                                            <div class="d-flex flex-column flex-grow-1">
                                                                <div class="d-flex flex-stack gap-5">
                                                                    <div class="d-flex flex-stack gap-2 mb-1">
                                                                        <i class="ki-outline ki-magnifier text-gray-500 fs-3"></i>
                                                                        <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                            Bella Vistastraat 246 </a>
                                                                    </div>

                                                                    <i class="ki-outline ki-heart text-danger fs-3 me-2"></i>
                                                                </div>

                                                                <div class="text-gray-500 mb-3">
                                                                    1074 SH Amsterdam </div>

                                                                <div class="d-flex gap-4 mb-3 fw-semibold">
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="fs-3 text-gray-500 lh-0" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.1244 0.333008H2.87547C2.2016 0.334183 1.55565 0.602401 1.07915 1.07891C0.602645 1.55541 0.334427 2.20135 0.333252 2.87523V11.1241C0.334427 11.798 0.602645 12.4439 1.07915 12.9204C1.55565 13.3969 2.2016 13.6652 2.87547 13.6663H11.1244C11.7982 13.6652 12.4442 13.3969 12.9207 12.9204C13.3972 12.4439 13.6654 11.798 13.6666 11.1241V2.87523C13.6654 2.20135 13.3972 1.55541 12.9207 1.07891C12.4442 0.602401 11.7982 0.334183 11.1244 0.333008ZM12.7777 11.1241C12.7765 11.5623 12.602 11.9821 12.2922 12.2919C11.9823 12.6017 11.5625 12.7763 11.1244 12.7775H2.87547C2.43734 12.7763 2.01749 12.6017 1.70769 12.2919C1.39788 11.9821 1.22331 11.5623 1.22214 11.1241V2.87523C1.22331 2.4371 1.39788 2.01725 1.70769 1.70744C2.01749 1.39764 2.43734 1.22307 2.87547 1.2219H11.1244C11.5625 1.22307 11.9823 1.39764 12.2922 1.70744C12.602 2.01725 12.7765 2.4371 12.7777 2.87523V11.1241Z" fill="currentColor" />
                                                                            <path d="M10.9999 7.81789C10.882 7.81789 10.7689 7.86471 10.6856 7.94806C10.6022 8.03141 10.5554 8.14446 10.5554 8.26233V9.929L4.07098 3.44455H5.73764C5.85552 3.44455 5.96856 3.39773 6.05191 3.31438C6.13526 3.23103 6.18209 3.11798 6.18209 3.00011C6.18209 2.88223 6.13526 2.76919 6.05191 2.68584C5.96856 2.60249 5.85552 2.55566 5.73764 2.55566H2.86209C2.78075 2.55566 2.70275 2.58797 2.64524 2.64548C2.58773 2.703 2.55542 2.781 2.55542 2.86233V5.73789C2.55542 5.85576 2.60225 5.96881 2.68559 6.05216C2.76894 6.13551 2.88199 6.18233 2.99986 6.18233C3.11774 6.18233 3.23078 6.13551 3.31413 6.05216C3.39748 5.96881 3.44431 5.85576 3.44431 5.73789V4.07122L9.92875 10.5557H8.26209C8.14421 10.5557 8.03117 10.6025 7.94782 10.6858C7.86447 10.7692 7.81764 10.8822 7.81764 11.0001C7.81764 11.118 7.86447 11.231 7.94782 11.3144C8.03117 11.3977 8.14421 11.4446 8.26209 11.4446H11.1376C11.219 11.4446 11.297 11.4122 11.3545 11.3547C11.412 11.2972 11.4443 11.2192 11.4443 11.1379V8.26233C11.4443 8.14446 11.3975 8.03141 11.3141 7.94806C11.2308 7.86471 11.1177 7.81789 10.9999 7.81789Z" fill="currentColor" />
                                                                        </svg>

                                                                        64 m2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.6656 6.24696V2.16892C13.6656 1.33968 12.991 0.665039 12.1617 0.665039H3.83846C3.00921 0.665039 2.33463 1.33968 2.33463 2.16892V6.24696C1.37912 6.47681 0.666748 7.33811 0.666748 8.36315V11.4049C0.666748 11.6462 0.862371 11.8418 1.10368 11.8418H2.3346V12.8986C2.3346 13.1399 2.53022 13.3355 2.77154 13.3355C3.01285 13.3355 3.20847 13.1399 3.20847 12.8986V11.8418H12.7917V12.8986C12.7917 13.1399 12.9873 13.3355 13.2286 13.3355C13.4699 13.3355 13.6656 13.1399 13.6656 12.8986V11.8418H14.8965C15.1378 11.8418 15.3334 11.6462 15.3334 11.4049V8.36315C15.3335 7.33811 14.6211 6.47681 13.6656 6.24696ZM3.2085 2.16892C3.2085 1.82156 3.49112 1.53894 3.83846 1.53894H12.1617C12.5091 1.53894 12.7917 1.82156 12.7917 2.16892V6.18629H11.3478V5.49695C11.3478 4.35484 10.4186 3.42568 9.27654 3.42568H6.72373C5.58162 3.42568 4.65246 4.35487 4.65246 5.49695V6.18626H3.2085V2.16892ZM10.4739 5.49695V6.18626H5.52628V5.49695C5.52628 4.83669 6.06342 4.29955 6.72368 4.29955H9.27652C9.93675 4.29952 10.4739 4.83672 10.4739 5.49695ZM1.54062 10.9679V8.36315C1.54062 7.64468 2.12514 7.06016 2.84361 7.06016H13.1566C13.875 7.06016 14.4595 7.64468 14.4595 8.36315V10.9679H1.54062Z" fill="currentColor" />
                                                                        </svg>
                                                                        2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700 text-uppercase">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7.99992 15.1663C6.58249 15.1663 5.19689 14.746 4.01833 13.9585C2.83978 13.1711 1.92121 12.0518 1.37879 10.7422C0.836357 9.4327 0.694433 7.99173 0.970961 6.60153C1.24749 5.21133 1.93005 3.93436 2.93232 2.93208C3.9346 1.9298 5.21158 1.24724 6.60177 0.970717C7.99197 0.694189 9.43295 0.836113 10.7425 1.37854C12.052 1.92097 13.1713 2.83954 13.9588 4.01809C14.7463 5.19664 15.1666 6.58224 15.1666 7.99968C15.1648 9.89985 14.4092 11.7217 13.0656 13.0653C11.7219 14.409 9.9001 15.1646 7.99992 15.1663ZM7.99992 1.83301C6.78027 1.83301 5.58801 2.19468 4.5739 2.87228C3.5598 3.54988 2.76941 4.51299 2.30266 5.6398C1.83592 6.76661 1.7138 8.00652 1.95175 9.20273C2.18969 10.399 2.77701 11.4977 3.63943 12.3602C4.50185 13.2226 5.60065 13.8099 6.79686 14.0479C7.99308 14.2858 9.23299 14.1637 10.3598 13.6969C11.4866 13.2302 12.4497 12.4398 13.1273 11.4257C13.8049 10.4116 14.1666 9.21933 14.1666 7.99968C14.1648 6.36472 13.5146 4.79723 12.3585 3.64113C11.2024 2.48504 9.63488 1.83478 7.99992 1.83301ZM7.33325 12.2463C7.2357 12.2477 7.13868 12.2319 7.04659 12.1997C6.88899 12.1424 6.75273 12.0382 6.65618 11.9012C6.55963 11.7641 6.50742 11.6007 6.50659 11.433V8.99301H5.62659C5.47423 8.98822 5.32623 8.94105 5.19919 8.85681C5.07215 8.77257 4.97111 8.65458 4.90741 8.5161C4.84371 8.37762 4.81987 8.22412 4.83856 8.07284C4.85726 7.92156 4.91776 7.77848 5.01325 7.65968L8.11325 4.05968C8.22431 3.93375 8.37108 3.84463 8.53404 3.80416C8.69699 3.7637 8.8684 3.77382 9.02547 3.83317C9.18253 3.89252 9.3178 3.99829 9.41327 4.13641C9.50874 4.27453 9.5599 4.43844 9.55992 4.60634V7.08634H10.3933C10.5462 7.08994 10.695 7.13623 10.823 7.22C10.951 7.30377 11.053 7.42167 11.1175 7.56037C11.182 7.69907 11.2064 7.85305 11.188 8.0049C11.1696 8.15676 11.1091 8.30043 11.0133 8.41968L7.91992 11.9997C7.84374 12.0781 7.75252 12.1404 7.65172 12.1828C7.55091 12.2252 7.4426 12.2468 7.33325 12.2463ZM5.99992 7.99968H7.43992V10.9463L9.99992 8.05968H8.52659V5.05301L5.99992 7.99968Z" fill="currentColor" />
                                                                        </svg>
                                                                        c
                                                                    </div>
                                                                </div>

                                                                <div class="text-gray-800 mb-3 fs-2 fw-bold">
                                                                    €399,000 </div>

                                                                <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                    RijksPlaats Makelaar </a>
                                                            </div>
                                                        </div>
                                                        <div class="card card-hover-border p-5 flex-lg-row align-items-lg-center gap-5 ">
                                                            <div class="d-flex flex-column flex-grow-1">
                                                                <div class="d-flex flex-stack gap-5">
                                                                    <div class="d-flex flex-stack gap-2 mb-1">
                                                                        <i class="ki-outline ki-magnifier text-gray-500 fs-3"></i>
                                                                        <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                            Bella Vistastraat 246 </a>
                                                                    </div>

                                                                    <i class="ki-outline ki-heart text-danger fs-3 me-2"></i>
                                                                </div>

                                                                <div class="text-gray-500 mb-3">
                                                                    1074 SH Amsterdam </div>

                                                                <div class="d-flex gap-4 mb-3 fw-semibold">
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="fs-3 text-gray-500 lh-0" width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.1244 0.333008H2.87547C2.2016 0.334183 1.55565 0.602401 1.07915 1.07891C0.602645 1.55541 0.334427 2.20135 0.333252 2.87523V11.1241C0.334427 11.798 0.602645 12.4439 1.07915 12.9204C1.55565 13.3969 2.2016 13.6652 2.87547 13.6663H11.1244C11.7982 13.6652 12.4442 13.3969 12.9207 12.9204C13.3972 12.4439 13.6654 11.798 13.6666 11.1241V2.87523C13.6654 2.20135 13.3972 1.55541 12.9207 1.07891C12.4442 0.602401 11.7982 0.334183 11.1244 0.333008ZM12.7777 11.1241C12.7765 11.5623 12.602 11.9821 12.2922 12.2919C11.9823 12.6017 11.5625 12.7763 11.1244 12.7775H2.87547C2.43734 12.7763 2.01749 12.6017 1.70769 12.2919C1.39788 11.9821 1.22331 11.5623 1.22214 11.1241V2.87523C1.22331 2.4371 1.39788 2.01725 1.70769 1.70744C2.01749 1.39764 2.43734 1.22307 2.87547 1.2219H11.1244C11.5625 1.22307 11.9823 1.39764 12.2922 1.70744C12.602 2.01725 12.7765 2.4371 12.7777 2.87523V11.1241Z" fill="currentColor" />
                                                                            <path d="M10.9999 7.81789C10.882 7.81789 10.7689 7.86471 10.6856 7.94806C10.6022 8.03141 10.5554 8.14446 10.5554 8.26233V9.929L4.07098 3.44455H5.73764C5.85552 3.44455 5.96856 3.39773 6.05191 3.31438C6.13526 3.23103 6.18209 3.11798 6.18209 3.00011C6.18209 2.88223 6.13526 2.76919 6.05191 2.68584C5.96856 2.60249 5.85552 2.55566 5.73764 2.55566H2.86209C2.78075 2.55566 2.70275 2.58797 2.64524 2.64548C2.58773 2.703 2.55542 2.781 2.55542 2.86233V5.73789C2.55542 5.85576 2.60225 5.96881 2.68559 6.05216C2.76894 6.13551 2.88199 6.18233 2.99986 6.18233C3.11774 6.18233 3.23078 6.13551 3.31413 6.05216C3.39748 5.96881 3.44431 5.85576 3.44431 5.73789V4.07122L9.92875 10.5557H8.26209C8.14421 10.5557 8.03117 10.6025 7.94782 10.6858C7.86447 10.7692 7.81764 10.8822 7.81764 11.0001C7.81764 11.118 7.86447 11.231 7.94782 11.3144C8.03117 11.3977 8.14421 11.4446 8.26209 11.4446H11.1376C11.219 11.4446 11.297 11.4122 11.3545 11.3547C11.412 11.2972 11.4443 11.2192 11.4443 11.1379V8.26233C11.4443 8.14446 11.3975 8.03141 11.3141 7.94806C11.2308 7.86471 11.1177 7.81789 10.9999 7.81789Z" fill="currentColor" />
                                                                        </svg>

                                                                        64 m2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="14" viewBox="0 0 16 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M13.6656 6.24696V2.16892C13.6656 1.33968 12.991 0.665039 12.1617 0.665039H3.83846C3.00921 0.665039 2.33463 1.33968 2.33463 2.16892V6.24696C1.37912 6.47681 0.666748 7.33811 0.666748 8.36315V11.4049C0.666748 11.6462 0.862371 11.8418 1.10368 11.8418H2.3346V12.8986C2.3346 13.1399 2.53022 13.3355 2.77154 13.3355C3.01285 13.3355 3.20847 13.1399 3.20847 12.8986V11.8418H12.7917V12.8986C12.7917 13.1399 12.9873 13.3355 13.2286 13.3355C13.4699 13.3355 13.6656 13.1399 13.6656 12.8986V11.8418H14.8965C15.1378 11.8418 15.3334 11.6462 15.3334 11.4049V8.36315C15.3335 7.33811 14.6211 6.47681 13.6656 6.24696ZM3.2085 2.16892C3.2085 1.82156 3.49112 1.53894 3.83846 1.53894H12.1617C12.5091 1.53894 12.7917 1.82156 12.7917 2.16892V6.18629H11.3478V5.49695C11.3478 4.35484 10.4186 3.42568 9.27654 3.42568H6.72373C5.58162 3.42568 4.65246 4.35487 4.65246 5.49695V6.18626H3.2085V2.16892ZM10.4739 5.49695V6.18626H5.52628V5.49695C5.52628 4.83669 6.06342 4.29955 6.72368 4.29955H9.27652C9.93675 4.29952 10.4739 4.83672 10.4739 5.49695ZM1.54062 10.9679V8.36315C1.54062 7.64468 2.12514 7.06016 2.84361 7.06016H13.1566C13.875 7.06016 14.4595 7.64468 14.4595 8.36315V10.9679H1.54062Z" fill="currentColor" />
                                                                        </svg>
                                                                        2
                                                                    </div>
                                                                    <div class="d-flex align-items-center gap-1 text-gray-700 text-uppercase">
                                                                        <svg class="text-gray-500 fs-3 lh-0" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M7.99992 15.1663C6.58249 15.1663 5.19689 14.746 4.01833 13.9585C2.83978 13.1711 1.92121 12.0518 1.37879 10.7422C0.836357 9.4327 0.694433 7.99173 0.970961 6.60153C1.24749 5.21133 1.93005 3.93436 2.93232 2.93208C3.9346 1.9298 5.21158 1.24724 6.60177 0.970717C7.99197 0.694189 9.43295 0.836113 10.7425 1.37854C12.052 1.92097 13.1713 2.83954 13.9588 4.01809C14.7463 5.19664 15.1666 6.58224 15.1666 7.99968C15.1648 9.89985 14.4092 11.7217 13.0656 13.0653C11.7219 14.409 9.9001 15.1646 7.99992 15.1663ZM7.99992 1.83301C6.78027 1.83301 5.58801 2.19468 4.5739 2.87228C3.5598 3.54988 2.76941 4.51299 2.30266 5.6398C1.83592 6.76661 1.7138 8.00652 1.95175 9.20273C2.18969 10.399 2.77701 11.4977 3.63943 12.3602C4.50185 13.2226 5.60065 13.8099 6.79686 14.0479C7.99308 14.2858 9.23299 14.1637 10.3598 13.6969C11.4866 13.2302 12.4497 12.4398 13.1273 11.4257C13.8049 10.4116 14.1666 9.21933 14.1666 7.99968C14.1648 6.36472 13.5146 4.79723 12.3585 3.64113C11.2024 2.48504 9.63488 1.83478 7.99992 1.83301ZM7.33325 12.2463C7.2357 12.2477 7.13868 12.2319 7.04659 12.1997C6.88899 12.1424 6.75273 12.0382 6.65618 11.9012C6.55963 11.7641 6.50742 11.6007 6.50659 11.433V8.99301H5.62659C5.47423 8.98822 5.32623 8.94105 5.19919 8.85681C5.07215 8.77257 4.97111 8.65458 4.90741 8.5161C4.84371 8.37762 4.81987 8.22412 4.83856 8.07284C4.85726 7.92156 4.91776 7.77848 5.01325 7.65968L8.11325 4.05968C8.22431 3.93375 8.37108 3.84463 8.53404 3.80416C8.69699 3.7637 8.8684 3.77382 9.02547 3.83317C9.18253 3.89252 9.3178 3.99829 9.41327 4.13641C9.50874 4.27453 9.5599 4.43844 9.55992 4.60634V7.08634H10.3933C10.5462 7.08994 10.695 7.13623 10.823 7.22C10.951 7.30377 11.053 7.42167 11.1175 7.56037C11.182 7.69907 11.2064 7.85305 11.188 8.0049C11.1696 8.15676 11.1091 8.30043 11.0133 8.41968L7.91992 11.9997C7.84374 12.0781 7.75252 12.1404 7.65172 12.1828C7.55091 12.2252 7.4426 12.2468 7.33325 12.2463ZM5.99992 7.99968H7.43992V10.9463L9.99992 8.05968H8.52659V5.05301L5.99992 7.99968Z" fill="currentColor" />
                                                                        </svg>
                                                                        c
                                                                    </div>
                                                                </div>

                                                                <div class="text-gray-800 mb-3 fs-2 fw-bold">
                                                                    €899,000 </div>

                                                                <a href="#" class="text-primary text-hover-primary-active fw-semibold">
                                                                    RijksPlaats Makelaar </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div id="kt_search_map" class="w-100 h-100 card-rounded"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Content wrapper-->


                        <!--begin::Footer-->
                        <div id="kt_app_footer" class="app-footer  d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">



                            <!--begin::Copyright-->
                            <div class="text-gray-900 order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2025&copy;</span>
                                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

                                <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end:::Main-->


                </div>
                <!--end::Wrapper container-->
            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->


    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div
        id="kt_activities"
        class="bg-body"

        data-kt-drawer="true"
        data-kt-drawer-name="activities"
        data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
        data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle"
        data-kt-drawer-close="#kt_activities_close">

        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
                        <i class="ki-outline ki-cross fs-1"></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll"
                    class="position-relative scroll-y me-n5 pe-5"

                    data-kt-scroll="true"
                    data-kt-scroll-height="auto"
                    data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">

                    <!--begin::Timeline items-->
                    <div class="timeline timeline-border-dashed">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="/metronic8/demo61/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="/metronic8/demo61/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->

                                    <!--begin::Record-->
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="/metronic8/demo61/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{ asset('assets/media/avatars/300-20.jpg') }}" alt="img" />
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="/metronic8/demo61/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon me-4">
                                <i class="ki-outline ki-flag fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="{{ asset('assets/media/avatars/300-1.jpg') }}" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3" src="{{ asset('assets/media/svg/files/pdf.svg') }}" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="/metronic8/demo61/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo61/apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/doc.svg') }}" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="/metronic8/demo61/apps/projects/project.html" class="w-30px me-3" src="{{ asset('assets/media/svg/files/css.svg') }}" />
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-500">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                        merged with <a href="#" class="text-primary fw-bold me-1">#45890</a> in “Ads Pro Admin Dashboard project:
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                            <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-29.jpg') }}" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-31.jpg') }}" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px" src="{{ asset('assets/media/stock/600x400/img-40.jpg') }}" />
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-sms fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is assigned to you in Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <!--end::Info-->

                                            <!--begin::User-->
                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="{{ asset('assets/media/avatars/300-4.jpg') }}" alt="img" />
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">

                                    <!--begin::Notice-->
                                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i> <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>

                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">
                                                Proceed </a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->

                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon">
                                <i class="ki-outline ki-basket fs-2 text-gray-500"></i>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is placed for Workshow Planning & Budget Estimation
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="/metronic8/demo61/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
                    View All Activities <i class="ki-outline ki-arrow-right fs-3 text-primary"></i> </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->

    <!--begin::Chat drawer-->
    <div
        id="kt_drawer_chat"

        class="bg-body"
        data-kt-drawer="true"
        data-kt-drawer-name="chat"
        data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}"
        data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle"
        data-kt-drawer-close="#kt_drawer_chat_close">

        <!--begin::Messenger-->
        <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-0">
                        <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-outline ki-dots-square fs-2"></i> </button>

                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Contacts
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
                                    Add Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                    Invite Contacts

                                    <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                                        <i class="ki-outline ki-information fs-7"></i> </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Create Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Invite Members
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                    Settings
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                        <i class="ki-outline ki-cross-square fs-2"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div
                    class="scroll-y me-n5 pe-5"

                    data-kt-element="messages"

                    data-kt-scroll="true"
                    data-kt-scroll-activate="true"
                    data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
                    data-kt-scroll-offset="0px">



                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                How likely are you to recommend our company to your friends and family ? </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                Ok, Understood! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                You’ll receive notifications for all issues, pull requests! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com">Keenthemes.com</a> </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                                Most purchased Business courses during this sale! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" /></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->

                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" /></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                                Right before vacation season we have the next Big Deal for you. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">

            </textarea>
                <!--end::Input-->

                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-outline ki-paper-clip fs-3"></i> </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-outline ki-cloud-add fs-3"></i> </button>
                    </div>
                    <!--end::Actions-->

                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->

    <!--begin::Chat drawer-->
    <div
        id="kt_shopping_cart"

        class="bg-body"
        data-kt-drawer="true"
        data-kt-drawer-name="cart"
        data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}"
        data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
        data-kt-drawer-close="#kt_drawer_shopping_cart_close">

        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <i class="ki-outline ki-cross fs-2"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/metronic8/demo61/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('assets/media/stock/600x400/img-1.jpg') }}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/metronic8/demo61/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('assets/media/stock/600x400/img-3.jpg') }}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/metronic8/demo61/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('assets/media/stock/600x400/img-8.jpg') }}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/metronic8/demo61/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('assets/media/stock/600x400/img-26.jpg') }}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/metronic8/demo61/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('assets/media/stock/600x400/img-21.jpg') }}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/metronic8/demo61/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('assets/media/stock/600x400/img-34.jpg') }}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="/metronic8/demo61/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('assets/media/stock/600x400/img-27.jpg') }}" alt="" />
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->



            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->

                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->

    <!--begin::Engage modals-->
    <!--begin::Modal - Sitemap-->
    <div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-5 p-lg-10" id="kt_engage_prebuilts_modal_dialog">
            <!--begin::Modal content-->
            <div class="modal-content rounded-4">
                <!--begin::Modal header-->
                <div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
                    <!--begin::View menu-->
                    <div id="kt_app_engage_prebuilts_view_menu" class="position-relative z-index-1">
                        <!--begin::Toggle-->
                        <button type="button" data-kt-element="selected" class="btn btn-flex px-0 rotate-" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, -1px">
                            <!--begin::Title-->
                            <span class="fs-6 fw-bold text-gray-600 me-2" data-kt-element="title">
                                Image View
                            </span>
                            <!--end::Title-->

                            <!--begin::Arrow-->
                            <i class="ki-outline ki-down fs-4 text-gray-600 rotate-180-"></i> <!--end::Arrow-->
                        </button>
                        <!--end::Toggle-->

                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3" data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link px-4 py-2 active" data-kt-mode="image">
                                    Image View
                                </a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item">
                                <!--begin::Menu link-->
                                <a href="#" class="menu-link px-4 py-2" data-kt-mode="text">
                                    Text View
                                </a>
                                <!--end::Menu link-->
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::View menu-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross-square fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-5 px-15 mt-n5" id="kt_app_engage_prebuilts_body">
                    <div class="container-fluid">

                        <style>
                            .app-prebuilts-thumbnail {
                                border: 1px solid var(--kt-body-bg);
                                filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
                            }
                        </style>

                        <!--begin::Image view-->
                        <div class="d-block" id="kt_app_engage_prebuilts_view_image">
                            <!--begin::Tabs wrapper-->
                            <div class="d-flex flex-center" id="kt_app_engage_prebuilts_view_image_tabs">
                                <!--begin::Tabs-->
                                <ul class="nav nav-tabs border-0 mb-5">
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a
                                            class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						"
                                            data-bs-toggle="tab"
                                            href="#kt_app_engage_prebuilts_tab_demos">

                                            Layouts </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a
                                            class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						active"
                                            data-bs-toggle="tab"
                                            href="#kt_app_engage_prebuilts_tab_dashboards">

                                            Dashboards </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a
                                            class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						"
                                            data-bs-toggle="tab"
                                            href="#kt_app_engage_prebuilts_tab_pages">

                                            Pages </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                    <!--begin::Tab item-->
                                    <li class="nav-item px-2">
                                        <!--begin::Tab link-->
                                        <a
                                            class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						"
                                            data-bs-toggle="tab"
                                            href="#kt_app_engage_prebuilts_tab_apps">

                                            Apps </a>
                                        <!--end::Tab link-->
                                    </li>
                                    <!--end::Tab item-->
                                </ul>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Tabs wrapper-->

                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_demos" role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div
                                        class="hover-scroll-y pe-12 me-n12"
                                        data-kt-scroll="true"
                                        data-kt-scroll-height="auto"
                                        data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                        data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                        data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">


                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo1/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Metronic Original </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo1.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo2/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        SaaS App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo2.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo39/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Billing SaaS </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo39.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo31/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Marketing Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo31.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo9/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Sales Manager </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo9.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo38/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Email Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo38.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo30/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Sales Tracking App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo30.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo6/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Time Reporting </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo6.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo60/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        CRM Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo60.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo8/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Analytics App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo8.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo62/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Scheduler </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo62.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo58/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Store Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo58.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo56/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Budgeting App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo56.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo34/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance Analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo34.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo27/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Databox Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo27.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo29/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Workspace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo29.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo57/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Billing System </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo57.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo3/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        New Trend </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo3.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo36/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Digital Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo36.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo20/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        CRM Software </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo20.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo59/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Todo App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo59.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo55/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Backend Console </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo55.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo51/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Payroll App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo51.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo10/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Grid </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo10.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo61/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Property Portal </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo61.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo52/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Site Builder </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo52.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo63/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Discussion Board </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo63.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo40/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        HR App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo40.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo23/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Member Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo23.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo64/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Voice Call App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo64.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo35/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Traffic Analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo35.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo33/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Social Campaings </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo33.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo19/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Reports Panel </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo19.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo25/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        User Guiding App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo25.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo50/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Micro-SaaS App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo50.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo32/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Delivery Management </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo32.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo37/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Cloud Suite </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo37.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo42/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Calendar Workspace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo42.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo5/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Support Forum </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo5.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo16/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Podcast App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo16.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo4/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Jobs Site </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo4.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo53/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Healthcare Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo53.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo7/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        HR Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo7.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo21/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Monochrome App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo21.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo24/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Helpdesk App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo24.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo28/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        eCommerce App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo28.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo44/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Recruit Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo44.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo11/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance Planner </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo11.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo26/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Planable App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo26.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo22/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Media Publisher </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo22.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo41/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Business Intelligence </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo41.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo18/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Goal Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo18.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo54/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Workspace App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo54.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo15/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Crypto Planner </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo15.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo14/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Project Workplace </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo14.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo13/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Classic Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo13.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo12/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Data Analyzer </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo12.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo48/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Cloud ERP </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo48.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo17/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Events Scheduler </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo17.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo49/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        KPI Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo49.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo43/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Healthcare Dashboard </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo43.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo45/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        OKR Tracking </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo45.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo47/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Campaign Automation </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo47.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">


                                                <!--begin::Preview-->
                                                <a
                                                    href="https://preview.keenthemes.com/metronic8/demo46/index.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Audit Board App </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/demos/demo46.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->


                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                                <div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards" role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div
                                        class="hover-scroll-y pe-12 me-n12"
                                        data-kt-scroll="true"
                                        data-kt-scroll-height="auto"
                                        data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                        data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                        data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">



                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/marketing.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Marketing </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/marketing.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/social.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Social </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/social.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/ecommerce.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Ecommerce </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/ecommerce.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/store-analytics.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Store-analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/store-analytics.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/logistics.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Logistics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/logistics.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/delivery.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Delivery </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/delivery.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/online-courses.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Online-courses </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/online-courses.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/school.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        School </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/school.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/crypto.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Crypto </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/crypto.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/finance-performance.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Finance-performance </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/finance-performance.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/website-analytics.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Website-analytics </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/website-analytics.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/bidding.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Bidding </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/bidding.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/podcast.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Podcast </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/podcast.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/projects.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Projects </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/projects.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/call-center.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Call-center </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/call-center.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/dashboards/pos.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        POS </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/dashboards/pos.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                                <div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
                                    <!--begin::Scroll wrapper-->
                                    <div
                                        class="hover-scroll-y pe-12 me-n12"
                                        data-kt-scroll="true"
                                        data-kt-scroll-height="auto"
                                        data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body"
                                        data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs"
                                        data-kt-scroll-offset="215px">

                                        <!--begin::Row-->
                                        <div class="row gy-10">


                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/projects/list.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Projects </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/projects.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/ecommerce/catalog/products.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Ecommerce </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/ecommerce.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/customers/list.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Customers </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/customers.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/subscriptions/list.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Subscriptions </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/subscriptions.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/user-management/users/list.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        User Management </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/user-management.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/invoices/create.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Invoices </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/invoices.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/support-center/overview.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Support Center </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/support-center.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/chat/private.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Chat </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/chat.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/calendar.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Calendar </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/calendar.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/file-manager/folders.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        File Manager </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/file-manager.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/inbox/listing.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Inbox </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/inbox.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-lg-4">

                                                <!--begin::Preview-->
                                                <a
                                                    href="/metronic8/demo61/apps/contacts/getting-started.html"
                                                    data-kt-href="true"
                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                    <!--begin::Title-->
                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                        Contacts </h3>
                                                    <!--end::Title-->

                                                    <!--begin::Thumbnail-->
                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/apps/contacts.png" class="lozad w-100 rounded" alt="" />
                                                    </span>
                                                    <!--end::Thumbnail-->
                                                </a>
                                                <!--end::Preview-->
                                            </div>
                                            <!--end::Col-->

                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>

                                <div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages">

                                    <!--begin::Tabs wrapper-->
                                    <div class="d-flex flex-center mb-5">
                                        <div class="border-bottom">
                                            <!--begin::Tabs-->
                                            <ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4">
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a
                                                        class="nav-link text-muted text-active-primary pt-0 pb-4 
						active"
                                                        data-bs-toggle="tab"
                                                        href="#kt_app_engage_prebuilts_tab_pages_authentication">

                                                        Authentication </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a
                                                        class="nav-link text-muted text-active-primary pt-0 pb-4 
						"
                                                        data-bs-toggle="tab"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general">

                                                        General </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a
                                                        class="nav-link text-muted text-active-primary pt-0 pb-4 
						"
                                                        data-bs-toggle="tab"
                                                        href="#kt_app_engage_prebuilts_tab_pages_account">

                                                        Account </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a
                                                        class="nav-link text-muted text-active-primary pt-0 pb-4 
						"
                                                        data-bs-toggle="tab"
                                                        href="#kt_app_engage_prebuilts_tab_pages_modals">

                                                        Modals </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a
                                                        class="nav-link text-muted text-active-primary pt-0 pb-4 
						"
                                                        data-bs-toggle="tab"
                                                        href="#kt_app_engage_prebuilts_tab_pages_wizards">

                                                        Wizards </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a
                                                        class="nav-link text-muted text-active-primary pt-0 pb-4 
						"
                                                        data-bs-toggle="tab"
                                                        href="#kt_app_engage_prebuilts_tab_pages_search">

                                                        Search </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a
                                                        class="nav-link text-muted text-active-primary pt-0 pb-4 
						"
                                                        data-bs-toggle="tab"
                                                        href="#kt_app_engage_prebuilts_tab_pages_widgets">

                                                        Widgets </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                                <!--begin::Tab item-->
                                                <li class="nav-item p-0 m-0">
                                                    <!--begin::Tab link-->
                                                    <a
                                                        class="nav-link text-muted text-active-primary pt-0 pb-4 
						"
                                                        data-bs-toggle="tab"
                                                        href="#kt_app_engage_prebuilts_tab_pages_email-templates">

                                                        Email Templates </a>
                                                    <!--end::Tab link-->
                                                </li>
                                                <!--end::Tab item-->
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                    </div>
                                    <!--end::Tabs wrapper-->

                                    <!--begin::Scroll wrapper-->
                                    <div
                                        class="hover-scroll-y pe-12 me-n12"
                                        data-kt-scroll="true"
                                        data-kt-scroll-height="auto"
                                        data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image"
                                        data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
                                        data-kt-scroll-offset="250px">

                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <div class="tab-pane fade show active" id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/layouts/corporate/sign-in.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Corporate </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-corporate.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/layouts/creative/sign-in.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Creative </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-creative.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/layouts/fancy/sign-in.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Fancy </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-fancy.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/layouts/overlay/sign-in.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Overlay </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-overlay.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/extended/multi-steps-sign-up.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Multi-Step </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-multistep.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/layouts/corporate/two-factor.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Two-Factor </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-2factor.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/general/password-confirmation.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Password Changed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-passwordchanged.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/general/verify-email.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Verify Email </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-verifyemail.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/general/welcome.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Welcome </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-welcome.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/general/coming-soon.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Coming Soon </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-comingsoon.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/general/account-deactivated.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Account Deactivated </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-accountdeactivated.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/general/error-404.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                404 Page </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-404.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/general/error-500.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                505 Page </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/auth-500.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_general" role="tabpanel">


                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a
                                                        class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">

                                                        <span class="fw-bolder fs-2">
                                                            User Profile </span>

                                                        <i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i>
                                                        <i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="show" id="kt_app_engage_prebuilts_tab_pages_general_user-profile">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/user-profile/overview.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Profile Overview </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/user-profile/projects.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Projects </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/user-profile/campaigns.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Campaigns </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/profile-campaigns.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/user-profile/documents.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Documents </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/profile-documents.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/user-profile/followers.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Followers </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/profile-followers.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/user-profile/activity.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        User Activity </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/profile-activity.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a
                                                        class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general_corporate">

                                                        <span class="fw-bolder fs-2">
                                                            Corporate </span>

                                                        <i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i>
                                                        <i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_corporate">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/about.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        About Us </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/corporate-aboutus.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/contact.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Contact Us </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/corporate-contactus.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/licenses.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        License </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/corporate-license.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/team.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Our Team </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/corporate-ourteam.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/sitemap.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Sitemap </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/corporate-sitemap.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a
                                                        class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general_social">

                                                        <span class="fw-bolder fs-2">
                                                            Social </span>

                                                        <i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i>
                                                        <i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_social">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/social/feeds.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Activity </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/social-activity.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/social/activity.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Feeds </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/social-feeds.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/social/followers.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Followers </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/social-followers.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/social/settings.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Settings </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/social-settings.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>
                                                <div class="mb-5">
                                                    <!--begin::Collapse toggle-->
                                                    <a
                                                        class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed"
                                                        data-bs-toggle="collapse"
                                                        href="#kt_app_engage_prebuilts_tab_pages_general_others">

                                                        <span class="fw-bolder fs-2">
                                                            Others </span>

                                                        <i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i>
                                                        <i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>
                                                    </a>
                                                    <!--end::Collapse toggle-->

                                                    <!--begin::Collapse content-->
                                                    <div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_others">
                                                        <!--begin::Row-->
                                                        <div class="row g-10 pt-2 pb-5">

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/faq/classic.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        FAQ Classic </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/faq-classic.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/faq/extended.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        FAQ Extended </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/faq-extended.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/blog/home.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Blog Home </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/blog-home.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->

                                                            <!--begin::Col-->
                                                            <div class="col-lg-4">

                                                                <!--begin::Preview-->
                                                                <a
                                                                    href="/metronic8/demo61/pages/blog/post.html"
                                                                    data-kt-href="true"
                                                                    class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                                    <!--begin::Title-->
                                                                    <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                        Blog Post </h3>
                                                                    <!--end::Title-->

                                                                    <!--begin::Thumbnail-->
                                                                    <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                        <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/blog-post.png" class="lozad w-100 rounded" alt="" />
                                                                    </span>
                                                                    <!--end::Thumbnail-->
                                                                </a>
                                                                <!--end::Preview-->
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Collapse content-->
                                                </div>


                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_account" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/overview.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Overview </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-overview.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/settings.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Settings </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-settings.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/billing.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Billing </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/security.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Security </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-security.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/referrals.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Referrals </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-referrals.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/logs.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Logs </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-logs.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/api-keys.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                API Keys </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-apikeys.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/statements.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Statements </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-statements.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/account/billing.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Billing </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_modals" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/general/view-users.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                View Friends </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-viewfriends.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/general/upgrade-plan.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Upgrade Plan </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-upgradeplan.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/wizards/top-up-wallet.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Topup Wallet </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-topupwallet.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/general/share-earn.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Share & Earn </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-shareandearn.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/general/select-users.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Select User </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-selectuser.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/forms/bidding.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Place Bid </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-placeyourbid.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/wizards/offer-a-deal.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Offer Deal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-offeradeal.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/forms/new-target.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Target </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-newtarget.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/forms/new-card.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Card </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-newcard.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/forms/new-address.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                New Address </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-newaddress.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/general/invite-friends.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Invite Friend </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-invitefriend.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/wizards/create-project.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Project </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-createproject.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/wizards/create-campaign.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Campaign </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-createcampaign.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/wizards/create-account.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Business Account </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-createbusinessacc.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/wizards/create-app.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create App </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-createapp.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/forms/create-api-key.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Create Api Key </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-createapikey.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/modals/wizards/two-factor-authentication.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                2 Factor Auth </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/modal-2factorauth.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_wizards" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/wizards/horizontal.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                2 Factor Auth </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/wizard-2factorauth.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/wizards/horizontal.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Horizontal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/wizard-horizontal.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/wizards/vertical.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Vertical </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/wizard-vertical.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_search" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/search/users.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Users </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/search-users.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/search/horizontal.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Horizontal </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/search-horizontal.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/search/vertical.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Vertical </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/search-vertical.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/utilities/search/select-location.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Search Location </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/search-location.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_widgets" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/widgets/charts.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Charts </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/widgets-charts.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/widgets/feeds.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Feeds </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/widgets-feeds.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/widgets/lists.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Lists </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/widgets-lists.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/widgets/mixed.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Mixed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/widgets-mixed.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/widgets/statistics.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Statistics </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/widgets-stats.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/widgets/tables.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Tables </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/widgets-tables.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                            <div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_email-templates" role="tabpanel">


                                                <!--begin::Row-->
                                                <div class="row g-10">

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/email/welcome-message.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Welcome </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/email-welcome.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/email/subscription-confirmed.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Subscription Confirmed </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/email/reset-password.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Reset Password </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/email-resetpassword.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/email/card-declined.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Card Declined </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/email-creditcarddeclined.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/email/promo-1.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 1 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/email-promo1.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/email/promo-2.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 2 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/email-promo2.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-lg-4">

                                                        <!--begin::Preview-->
                                                        <a
                                                            href="/metronic8/demo61/authentication/email/promo-3.html"
                                                            data-kt-href="true"
                                                            class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden">
                                                            <!--begin::Title-->
                                                            <h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
                                                                Promotion 3 </h3>
                                                            <!--end::Title-->

                                                            <!--begin::Thumbnail-->
                                                            <span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
                                                                <img src="{{ asset('assets/media/preview/demos/placeholder.jpg') }}" data-src="/metronic8/demo61/assets/media/preview/prebuilts/pages/email-promo3.png" class="lozad w-100 rounded" alt="" />
                                                            </span>
                                                            <!--end::Thumbnail-->
                                                        </a>
                                                        <!--end::Preview-->
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->

                                            </div>
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Scroll wrapper-->
                                </div>
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Image view-->
                        <!--begin::Text view-->
                        <div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
                            <!--begin::Heading-->
                            <h1 class="fs-2x text-gray-900 fw-bolder text-center mb-4" id="kt_app_engage_prebuilts_view_text_heading">
                                Sitemap
                            </h1>
                            <!--end::Heading-->

                            <!--begin::Wrapper-->
                            <div
                                id="kt_app_engage_prebuilts_view_text_heading"
                                class="hover-scroll-y pe-12 me-n12"
                                data-kt-scroll="true"
                                data-kt-scroll-height="auto"
                                data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text"
                                data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading"
                                data-kt-scroll-offset="190px">
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Layouts
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/index.html">
                                                    Metronic Original </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo2/index.html">
                                                    SaaS App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo39/index.html">
                                                    Billing SaaS </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo31/index.html">
                                                    Marketing Automation </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo9/index.html">
                                                    Sales Manager </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo38/index.html">
                                                    Email Marketing </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo30/index.html">
                                                    Sales Tracking App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo6/index.html">
                                                    Time Reporting </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo60/index.html">
                                                    CRM Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo8/index.html">
                                                    Analytics App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo62/index.html">
                                                    Project Scheduler </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo58/index.html">
                                                    Store Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo56/index.html">
                                                    Budgeting App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo34/index.html">
                                                    Finance Analytics </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo27/index.html">
                                                    Databox Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo29/index.html">
                                                    Project Workspace </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo57/index.html">
                                                    Billing System </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo3/index.html">
                                                    New Trend </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo36/index.html">
                                                    Digital Marketing </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo20/index.html">
                                                    CRM Software </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo59/index.html">
                                                    Todo App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo55/index.html">
                                                    Backend Console </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo51/index.html">
                                                    Payroll App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo10/index.html">
                                                    Project Grid </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo61/index.html">
                                                    Property Portal </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo52/index.html">
                                                    Site Builder </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo63/index.html">
                                                    Discussion Board </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo40/index.html">
                                                    HR App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo23/index.html">
                                                    Member Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo64/index.html">
                                                    Voice Call App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo35/index.html">
                                                    Traffic Analytics </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo33/index.html">
                                                    Social Campaings </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo19/index.html">
                                                    Reports Panel </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo25/index.html">
                                                    User Guiding App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo50/index.html">
                                                    Micro-SaaS App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo32/index.html">
                                                    Delivery Management </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo37/index.html">
                                                    Cloud Suite </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo42/index.html">
                                                    Calendar Workspace </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo5/index.html">
                                                    Support Forum </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo16/index.html">
                                                    Podcast App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo4/index.html">
                                                    Jobs Site </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo53/index.html">
                                                    Healthcare Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo7/index.html">
                                                    HR Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo21/index.html">
                                                    Monochrome App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo24/index.html">
                                                    Helpdesk App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo28/index.html">
                                                    eCommerce App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo44/index.html">
                                                    Recruit Automation </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo11/index.html">
                                                    Finance Planner </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">


                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo26/index.html">
                                                    Planable App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo22/index.html">
                                                    Media Publisher </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo41/index.html">
                                                    Business Intelligence </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo18/index.html">
                                                    Goal Tracking </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo54/index.html">
                                                    Workspace App </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo15/index.html">
                                                    Crypto Planner </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo14/index.html">
                                                    Project Workplace </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo13/index.html">
                                                    Classic Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo12/index.html">
                                                    Data Analyzer </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo48/index.html">
                                                    Cloud ERP </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo17/index.html">
                                                    Events Scheduler </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo49/index.html">
                                                    KPI Tracking </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo43/index.html">
                                                    Healthcare Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo45/index.html">
                                                    OKR Tracking </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo47/index.html">
                                                    Campaign Automation </a>




                                                <a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo46/index.html">
                                                    Audit Board App </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Dashboards
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/index.html">
                                                    eCommerce Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/marketing.html">
                                                    Marketing Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/social.html">
                                                    Social Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/ecommerce.html">
                                                    eCommerce Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/store-analytics.html">
                                                    Store Analytics </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/logistics.html">
                                                    Logistics </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/delivery.html">
                                                    Delivery </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/online-courses.html">
                                                    Online Courses </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/school.html">
                                                    Hello Tyler </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/crypto.html">
                                                    My Balance: 37,045$ </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/finance-performance.html">
                                                    Finance Performance </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/website-analytics.html">
                                                    Website Analytics </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/bidding.html">
                                                    Bidding Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/podcast.html">
                                                    Podcast Dashboard </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/projects.html">
                                                    Projects Dashboard </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->


                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/call-center.html">
                                                    Call Center </a>




                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/dashboards/pos.html">
                                                    POS System </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">

                                </div>
                                <!--end::Section-->


                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - Authentication </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/layouts/corporate/sign-in.html">
                                                    Corporate </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/layouts/creative/sign-in.html">
                                                    Creative </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/layouts/fancy/sign-in.html">
                                                    Fancy </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/layouts/overlay/sign-in.html">
                                                    Overlay </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/extended/multi-steps-sign-up.html">
                                                    Multi-Step </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/layouts/corporate/two-factor.html">
                                                    Two-Factor </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/general/password-confirmation.html">
                                                    Password Changed </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/general/verify-email.html">
                                                    Verify Email </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/general/welcome.html">
                                                    Welcome </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/general/coming-soon.html">
                                                    Coming Soon </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/general/account-deactivated.html">
                                                    Account Deactivated </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/general/error-404.html">
                                                    404 Page </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/general/error-500.html">
                                                    505 Page </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - Account </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/overview.html">
                                                    Overview </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/settings.html">
                                                    Settings </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/billing.html">
                                                    Billing </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/security.html">
                                                    Security </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/referrals.html">
                                                    Referrals </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/logs.html">
                                                    Logs </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/api-keys.html">
                                                    API Keys </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/statements.html">
                                                    Statements </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/account/billing.html">
                                                    Billing </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - Modals </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/general/view-users.html">
                                                    View Friends </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/general/upgrade-plan.html">
                                                    Upgrade Plan </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/wizards/top-up-wallet.html">
                                                    Topup Wallet </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/general/share-earn.html">
                                                    Share & Earn </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/general/select-users.html">
                                                    Select User </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/forms/bidding.html">
                                                    Place Bid </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/wizards/offer-a-deal.html">
                                                    Offer Deal </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/forms/new-target.html">
                                                    New Target </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/forms/new-card.html">
                                                    New Card </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/forms/new-address.html">
                                                    New Address </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/general/invite-friends.html">
                                                    Invite Friend </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/wizards/create-project.html">
                                                    Create Project </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/wizards/create-campaign.html">
                                                    Create Campaign </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/wizards/create-account.html">
                                                    Create Business Account </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/wizards/create-app.html">
                                                    Create App </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/forms/create-api-key.html">
                                                    Create Api Key </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/modals/wizards/two-factor-authentication.html">
                                                    2 Factor Auth </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - Wizards </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/wizards/horizontal.html">
                                                    2 Factor Auth </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/wizards/horizontal.html">
                                                    Horizontal </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/wizards/vertical.html">
                                                    Vertical </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - Search </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/search/users.html">
                                                    Search Users </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/search/horizontal.html">
                                                    Search Horizontal </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/search/vertical.html">
                                                    Search Vertical </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/utilities/search/select-location.html">
                                                    Search Location </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - Widgets </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/widgets/charts.html">
                                                    Charts </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/widgets/feeds.html">
                                                    Feeds </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/widgets/lists.html">
                                                    Lists </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/widgets/mixed.html">
                                                    Mixed </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/widgets/statistics.html">
                                                    Statistics </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/widgets/tables.html">
                                                    Tables </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - Email Templates </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/email/welcome-message.html">
                                                    Welcome </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/email/subscription-confirmed.html">
                                                    Subscription Confirmed </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/email/reset-password.html">
                                                    Reset Password </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/email/card-declined.html">
                                                    Card Declined </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/email/promo-1.html">
                                                    Promotion 1 </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/email/promo-2.html">
                                                    Promotion 2 </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/authentication/email/promo-3.html">
                                                    Promotion 3 </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - General - User Profile </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/user-profile/overview.html">
                                                    Profile Overview </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/user-profile/projects.html">
                                                    User Projects </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/user-profile/campaigns.html">
                                                    User Campaigns </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/user-profile/documents.html">
                                                    User Documents </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/user-profile/followers.html">
                                                    User Followers </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/user-profile/activity.html">
                                                    User Activity </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - General - Corporate </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/about.html">
                                                    About Us </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/contact.html">
                                                    Contact Us </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/licenses.html">
                                                    License </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/team.html">
                                                    Our Team </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/sitemap.html">
                                                    Sitemap </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - General - Social </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/social/feeds.html">
                                                    Activity </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/social/activity.html">
                                                    Feeds </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/social/followers.html">
                                                    Followers </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/social/settings.html">
                                                    Settings </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->
                                <!--begin::Section-->
                                <div class="mb-10 mb-lg-17">
                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Pages - General - Others </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/faq/classic.html">
                                                    FAQ Classic </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/faq/extended.html">
                                                    FAQ Extended </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/blog/home.html">
                                                    Blog Home </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/pages/blog/post.html">
                                                    Blog Post </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Section-->



                                <!--begin::Section-->
                                <div class="">

                                    <!--begin::Title-->
                                    <h3 class="text-gray-900 fw-bolder mb-7">
                                        Apps
                                    </h3>
                                    <!--end::Title-->

                                    <!--begin::Row-->
                                    <div class="row">

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/projects/list.html">
                                                    Projects </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/ecommerce/catalog/products.html">
                                                    Ecommerce </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/customers/list.html">
                                                    Customers </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/subscriptions/list.html">
                                                    Subscriptions </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/user-management/users/list.html">
                                                    User Management </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/invoices/create.html">
                                                    Invoices </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/support-center/overview.html">
                                                    Support Center </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/chat/private.html">
                                                    Chat </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/calendar.html">
                                                    Calendar </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col-lg-3">
                                            <!--begin::List-->
                                            <div class="d-flex flex-column gap-3 gap-lg-5">

                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/file-manager/folders.html">
                                                    File Manager </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/inbox/listing.html">
                                                    Inbox </a>



                                                <a class="fw-6 fw-semibold" href="/metronic8/demo61/apps/contacts/getting-started.html">
                                                    Contacts </a>

                                            </div>
                                            <!--end::List-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->

                                </div>
                                <!--end::Section-->



                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Text view--->
                    </div>
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Sitemap--> <!--end::Engage modals-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-outline ki-arrow-up"></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>

                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->

                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">
                                Monthly
                            </button>
                            <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">
                                Annual
                            </button>
                        </div>
                        <!--end::Nav group-->

                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                                39 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="advanced" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">
                                                339 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="enterprise" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                    <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                999 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="custom" />
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-outline ki-cross-circle fs-1"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Users </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Project Integrations </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-outline ki-check-circle fs-1 text-success"></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->

                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

                            <!--begin::Indicator label-->
                            <span class="indicator-label">
                                Upgrade Plan</span>
                            <!--end::Indicator label-->

                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan--><!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>

                        <div class="text-muted fw-semibold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Search-->
                    <div
                        id="kt_modal_users_search_handler"

                        data-kt-search-keypress="true"
                        data-kt-search-min-length="2"
                        data-kt-search-enter="enter"
                        data-kt-search-layout="inline">

                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden" />
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i> <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                                <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i> </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->

                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                <!--end::Heading-->

                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Suggestions-->

                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-21.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->


                                </div>
                                <!--end::Users-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                                        Add Selected Users
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <!--end::Message-->

                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="{{ asset('assets/media/illustrations/sketchy-1/1.png') }}" alt="" class="w-100 h-200px h-sm-325px" />
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-outline ki-cross fs-1"></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="{{ asset('assets/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3" />
                        Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->

                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                </textarea>
                    <!--end::Textarea-->

                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--end::Heading-->

                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-6.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-1.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-5.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-25.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-9.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-12.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-13.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">
                                            L </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-21.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('assets/media/avatars/300-23.jpg') }}" />
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend--> <!--end::Modals-->

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/leaflet/leaflet.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    
    <!--end::Vendors Javascript-->

    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>