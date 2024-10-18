<!DOCTYPE html>
<html lang="en"> <!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>GORRITOS</title><!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE v4 | Dashboard">
    <meta name="author" content="ColorlibHQ">
    <meta name="description" content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard"><!--end::Primary Meta Tags--><!--begin::Fonts-->
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css')}}" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/styles/overlayscrollbars.min.css')}}"integrity="sha256-dSokZseQNT08wYEWiz5iLI8QPlKxG+TswNRD8k35cpg=" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.min.css')}}" integrity="sha256-Qsx5lrStHZyR9REqhUF8iQt73X06c8LGIUPzpOhwRrI=" crossorigin="anonymous" >
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css')}}" 
    <link rel="stylesheet" href="{{asset('https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css')}}" 
    
    @vite(['resources/js/app.js'])
    @stack('styles')
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary"> <!--begin::App Wrapper-->
    <div class="app-wrapper"> <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Start Navbar Links-->
                <ul class="navbar-nav">
                    <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> 
                        <i class="bi bi-list"></i> 
                    </a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
                    <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li>
                </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
             {{--    <aside class="control-sidebar control-sidebar-dark"
            style="background: linear-gradient(0deg, rgba(0,24,72,0.9), rgba(0,24,72,0.9)), url({{ asset('dist/img/crop.jpg') }}); background-size:cover;">

            <div class="p-3 text-center">
                
                <h5><i class="fas fa-user"></i></h5>
                <a class="nav-link btn btn-primary btn-block rounded-0 text-white" data-toggle="modal"
                    data-target="#changepass"><i class="fas fa-key text-white"></i> Cambiar Contraseña</a>
                
                <form action="{{ route('logout') }}" method="POST" class="pt-2">
                    @csrf
                    <button class="btn btn-danger btn-block rounded-0" type="submit" name="button"><i
                            class="fas fa-sign-out-alt"></i> {{ __('Logout') }}</button>
                </form>
            </div>
        </aside> --}}
                <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
                    <li class="nav-item"> 
                        <a class="nav-link" data-widget="navbar-search" href="#" role="button"> 
                            <i class="bi bi-search"></i>
                         </a> 
                        </li> <!--end::Navbar Search--> <!--begin::Messages Dropdown Menu-->                
                        <li class="nav-item"> 
                            <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                                 <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen">
                                 </i> 
                                 <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;">
                                 </i>
                                 </a> 
                                </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
                                <li class="nav-item dropdown user-menu"> 
                                    <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> 
                                        <img src="{{'dist/assets/img/user2-160x160.jpg'}}" class="user-image rounded-circle shadow" alt="User Image"> 
                                        <span class="d-none d-md-inline">Alexander Pierce</span> 
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                                        <li class="user-header text-bg-primary">
                                             <img src="{{'dist/assets/img/user2-160x160.jpg'}}" class="rounded-circle shadow" alt="User Image">
                                            <p>
                                                Alexander Pierce - Web Developer
                                                <small>Member since Nov. 2023</small>
                                            </p>
                                        </li> <!--end::User Image--> <!--begin::Menu Body-->
                                        <li class="user-body"> <!--begin::Row-->
                                            <div class="row">
                                                <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                                                <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                                                <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                                            </div> <!--end::Row-->
                                        </li> <!--end::Menu Body--> <!--begin::Menu Footer-->
                                        <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a>
                                             <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                                             </li> <!--end::Menu Footer-->
                                    </ul>
                                </li>
                </ul> <!--end::End Navbar Links-->
            </div> <!--end::Container-->
        </nav> <!--end::Header--> <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
            <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="{{url('/af')}}" class="brand-link"> <!--begin::Brand Image-->
                 <img src="{{'imagenes/logo-gorritos.jpg'}}"
                  alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
                   <span class="brand-text fw-light">TusGorritos.com</span>
                </a> 
            </div> 
            <div class="sidebar-wrapper">
                <nav class="mt-2"> <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                            @yield('menu')
                            <li class="nav-item pb-5">
                            </li>
                            <li class="nav-item pb-4">
                            </li>
                            
                    </ul> <!--end::Sidebar Menu-->
                </nav>
            </div> <!--end::Sidebar Wrapper-->
        </aside> <!--end::Sidebar--> <!--begin::App Main-->
        <main class="app-main"> <!--begin::App Content Header-->
            <div class="app-content-header"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->
                    <div class="row">
                        @yield('seccion')
                   
                    </div> <!--end::Row-->
                </div> <!--end::Container-->
            </div> <!--end::App Content Header--> <!--begin::App Content-->
            <div class="app-content"> <!--begin::Container-->
                <div class="container-fluid"> <!--begin::Row-->              
                    <div class="row"> <!-- Start col -->
                    </div> <!-- /.row (main row) -->
                </div> <!--end::Container-->
            </div> <!--end::App Content-->
        </main> <!--end::App Main--> <!--begin::Footer-->
        <footer class="app-footer"> <!--begin::To the end-->
            <div class="float-end d-none d-sm-inline">Anything you want</div> <!--end::To the end--> <!--begin::Copyright--> <strong>
                Copyright &copy; 2024&nbsp;
                <a href="https://adminlte.io" class="text-decoration-none">APMP</a>.
            </strong>
            All rights reserved.
            <!--end::Copyright-->
        </footer> <!--end::Footer-->
    </div> <!--end::App Wrapper--> <!--begin::Script--> <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="{{'https://cdn.jsdelivr.net/npm/overlayscrollbars@2.3.0/browser/overlayscrollbars.browser.es6.min.js'}}" integrity="sha256-H2VM7BKda+v2Z4+DRy69uknwxjyDRhszjXFhsL4gD3w=" crossorigin="anonymous"></script> <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="{{'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js'}}" integrity="sha256-whL0tQWoY1Ku1iskqPFvmZ+CHsvmRWx/PIoEvIeWh4I=" crossorigin="anonymous"></script> <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="{{'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js'}}" integrity="sha256-YMa+wAM6QkVyz999odX7lPRxkoYAan8suedu4k2Zur8=" crossorigin="anonymous"></script> <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{'dist/js/adminlte.js'}}"></script> <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };
        document.addEventListener("DOMContentLoaded", function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script> <!--end::OverlayScrollbars Configure--> <!-- OPTIONAL SCRIPTS --> <!-- sortablejs -->
    <script src="{{'https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js'}}" integrity="sha256-ipiJrswvAR4VAx/th+6zWsdeYmVae0iJuiR+6OqHJHQ=" crossorigin="anonymous"></script> <!-- sortablejs -->
    <script>
        const connectedSortables =
            document.querySelectorAll(".connectedSortable");
        connectedSortables.forEach((connectedSortable) => {
            let sortable = new Sortable(connectedSortable, {
                group: "shared",
                handle: ".card-header",
            });
        });

        const cardHeaders = document.querySelectorAll(
            ".connectedSortable .card-header",
        );
        cardHeaders.forEach((cardHeader) => {
            cardHeader.style.cursor = "move";
        });
    </script> <!-- apexcharts -->
    <script src="{{'https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js'}}" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script> <!-- ChartJS -->
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        const sales_chart_options = {
            series: [{
                    name: "Digital Goods",
                    data: [28, 48, 40, 19, 86, 27, 90],
                },
                {
                    name: "Electronics",
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
            ],
            chart: {
                height: 300,
                type: "area",
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ["#0d6efd", "#20c997"],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: "smooth",
            },
            xaxis: {
                type: "datetime",
                categories: [
                    "2023-01-01",
                    "2023-02-01",
                    "2023-03-01",
                    "2023-04-01",
                    "2023-05-01",
                    "2023-06-01",
                    "2023-07-01",
                ],
            },
            tooltip: {
                x: {
                    format: "MMMM yyyy",
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector("#revenue-chart"),
            sales_chart_options,
        );
        sales_chart.render();
    </script> <!-- jsvectormap -->
    <script src="{{'https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js'}}" integrity="sha256-/t1nN2956BT869E6H4V1dnt0X5pAQHPytli+1nTZm2Y=" crossorigin="anonymous"></script>
    <script src="{{'https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js'}}" integrity="sha256-XPpPaZlU8S/HWf7FZLAncLg2SAkP8ScUTII89x9D3lY=" crossorigin="anonymous"></script> <!-- jsvectormap -->
    <script>
        const visitorsData = {
            US: 398, // USA
            SA: 400, // Saudi Arabia
            CA: 1000, // Canada
            DE: 500, // Germany
            FR: 760, // France
            CN: 300, // China
            AU: 700, // Australia
            BR: 600, // Brazil
            IN: 800, // India
            GB: 320, // Great Britain
            RU: 3000, // Russia
        };

        // World map by jsVectorMap
        const map = new jsVectorMap({
            selector: "#world-map",
            map: "world",
        });

        // Sparkline charts
        const option_sparkline1 = {
            series: [{
                data: [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline1 = new ApexCharts(
            document.querySelector("#sparkline-1"),
            option_sparkline1,
        );
        sparkline1.render();

        const option_sparkline2 = {
            series: [{
                data: [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline2 = new ApexCharts(
            document.querySelector("#sparkline-2"),
            option_sparkline2,
        );
        sparkline2.render();

        const option_sparkline3 = {
            series: [{
                data: [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21],
            }, ],
            chart: {
                type: "area",
                height: 50,
                sparkline: {
                    enabled: true,
                },
            },
            stroke: {
                curve: "straight",
            },
            fill: {
                opacity: 0.3,
            },
            yaxis: {
                min: 0,
            },
            colors: ["#DCE6EC"],
        };

        const sparkline3 = new ApexCharts(
            document.querySelector("#sparkline-3"),
            option_sparkline3,
        );
        sparkline3.render();
    </script> <!--end::Script-->

<script>
    $(function () {
      /* jQueryKnob */
  
      $('.knob').knob({
        /*change : function (value) {
         //console.log("change : " + value);
         },
         release : function (value) {
         console.log("release : " + value);
         },
         cancel : function () {
         console.log("cancel : " + this.value);
         },*/
        draw: function () {
  
          // "tron" case
          if (this.$.data('skin') == 'tron') {
  
            var a   = this.angle(this.cv)  // Angle
              ,
                sa  = this.startAngle          // Previous start angle
              ,
                sat = this.startAngle         // Start angle
              ,
                ea                            // Previous end angle
              ,
                eat = sat + a                 // End angle
              ,
                r   = true
  
            this.g.lineWidth = this.lineWidth
  
            this.o.cursor
            && (sat = eat - 0.3)
            && (eat = eat + 0.3)
  
            if (this.o.displayPrevious) {
              ea = this.startAngle + this.angle(this.value)
              this.o.cursor
              && (sa = ea - 0.3)
              && (ea = ea + 0.3)
              this.g.beginPath()
              this.g.strokeStyle = this.previousColor
              this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sa, ea, false)
              this.g.stroke()
            }
  
            this.g.beginPath()
            this.g.strokeStyle = r ? this.o.fgColor : this.fgColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth, sat, eat, false)
            this.g.stroke()
  
            this.g.lineWidth = 2
            this.g.beginPath()
            this.g.strokeStyle = this.o.fgColor
            this.g.arc(this.xy, this.xy, this.radius - this.lineWidth + 1 + this.lineWidth * 2 / 3, 0, 2 * Math.PI, false)
            this.g.stroke()
  
            return false
          }
        }
      })
      /* END JQUERY KNOB */
  
      //INITIALIZE SPARKLINE CHARTS
      var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 240, height: 70, lineColor: '#92c1dc', endColor: '#92c1dc' })
      var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 240, height: 70, lineColor: '#f56954', endColor: '#f56954' })
      var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 240, height: 70, lineColor: '#3af221', endColor: '#3af221' })
  
      sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
      sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
      sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])
  
    })
  
  </script>
</body><!--end::Body-->