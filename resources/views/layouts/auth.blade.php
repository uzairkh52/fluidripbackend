<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />

   <title>News dashboard</title>

   <!-- theme meta -->
   <meta name="theme-name" content="mono" />

   <!-- GOOGLE FONTS -->
   <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
   <link href="{{asset('assets/auth/plugins/material/css/materialdesignicons.min.css')}}" rel="stylesheet" />
   <link href="{{asset('assets/auth/plugins/simplebar/simplebar.css')}}" rel="stylesheet" />
   <!-- PLUGINS CSS STYLE -->
   <link href="{{asset('assets/auth/plugins/nprogress/nprogress.css')}}" rel="stylesheet" />
   <link href="{{asset('assets/auth/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css')}}" rel="stylesheet" />
   <link href="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.css')}}" rel="stylesheet" />
   <link href="{{asset('assets/auth/plugins/daterangepicker/daterangepicker.css')}}" rel="stylesheet" />|
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
   <link href="{{asset('assets/auth/plugins/toaster/toastr.min.css')}}" rel="stylesheet" />
   <!-- MONO CSS -->
   <link id="main-css-href" rel="stylesheet" href="{{asset('assets/auth/css/style.css')}}" />
   <!-- FAVICON -->
   <link href="{{asset('assets/auth/images/favicon.png')}}" rel="shortcut icon" />
   <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  
  
  
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
   
   
   
   
   
   
   
   
   
   
   
   
   {{-- jquery --}}
   {{-- <script src="{{asset('assets/auth/plugins/jquery/jquery.min.js')}}"></script> --}}
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="{{asset('assets/auth/plugins/nprogress/nprogress.js')}}"></script>
   <script src="{{asset('assets/auth/plugins/simplebar/simplebar.min.js')}}"></script>
   <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
   <script src="{{asset('assets/auth/plugins/apexcharts/apexcharts.js')}}"></script>
   <script src="{{asset('assets/auth/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js')}}"></script>
   <script src="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
   <script src="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-world-mill.js')}}"></script>
   <script src="{{asset('assets/auth/plugins/jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
   <script src="{{asset('assets/auth/plugins/daterangepicker/moment.min.js')}}"></script>
   <script src="{{asset('assets/auth/plugins/daterangepicker/daterangepicker.js')}}"></script>
   <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
   <script src="{{asset('assets/auth/plugins/toaster/toastr.min.js')}}"></script>
   
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
   {{-- plugins --}}
   <script src="{{asset('assets/auth/js/mono.js')}}"></script>
   <script src="{{asset('assets/auth/js/chart.js')}}"></script>
   <script src="{{asset('assets/auth/js/map.js')}}"></script>
   <script src="{{asset('assets/auth/js/custom.js')}}"></script>
   {{-- bootstrap js --}}
   

   <script>
      $(document).ready(function () {
         $(".logout-btn").on("click", function (e) { 
            $("#logout-form").submit();
         });
         
      });
      </script>

<script>
   jQuery(document).ready(function() {
            $('select').selectpicker();
            jQuery('input[name="dateRange"]').daterangepicker({
               autoUpdateInput: false,
               singleDatePicker: true,
               locale: {
                  cancelLabel: 'Clear'
               }
            });
            jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
               jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
            });
            jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
               jQuery(this).val('');
            });
         });
         NProgress.configure({
            showSpinner: false
         });
         NProgress.start();
   </script>
</head>


<body class="navbar-fixed sidebar-fixed" id="body">


   <div id="toaster"></div>


   <!-- ====================================
    ——— WRAPPER
    ===================================== -->
   @yield('content')  

   <!-- Card Offcanvas -->
   <div class="card card-offcanvas" id="contact-off">
      <div class="card-header">
         <h2>Contacts</h2>
         <a href="#" class="btn btn-primary btn-pill px-4">Add New</a>
      </div>
      <div class="card-body">

         <div class="mb-4">
            <input type="text" class="form-control form-control-lg form-control-secondary rounded-0"
               placeholder="Search contacts...">
         </div>

         <div class="media media-sm">
            <div class="media-sm-wrapper">
               <a href="user-profile.html">
                  <img src="{{asset('assets/auth/images/user/user-sm-01.jpg')}}" alt="User Image">
                  <span class="active bg-primary"></span>
               </a>
            </div>
            <div class="media-body">
               <a href="user-profile.html">
                  <span class="title">Selena Wagner</span>
                  <span class="discribe">Designer</span>
               </a>
            </div>
         </div>

         <div class="media media-sm">
            <div class="media-sm-wrapper">
               <a href="user-profile.html">
                  <img src="{{asset('assets/auth/images/user/user-sm-02.jpg')}}" alt="User Image">
                  <span class="active bg-primary"></span>
               </a>
            </div>
            <div class="media-body">
               <a href="user-profile.html">
                  <span class="title">Walter Reuter</span>
                  <span>Developer</span>
               </a>
            </div>
         </div>

         <div class="media media-sm">
            <div class="media-sm-wrapper">
               <a href="user-profile.html">
                  <img src="{{asset('assets/auth/images/user/user-sm-03.jpg')}}" alt="User Image">
               </a>
            </div>
            <div class="media-body">
               <a href="user-profile.html">
                  <span class="title">Larissa Gebhardt</span>
                  <span>Cyber Punk</span>
               </a>
            </div>
         </div>

         <div class="media media-sm">
            <div class="media-sm-wrapper">
               <a href="user-profile.html">
                  <img src="{{asset('assets/auth/images/user/user-sm-04.jpg')}}" alt="User Image">
               </a>

            </div>
            <div class="media-body">
               <a href="user-profile.html">
                  <span class="title">Albrecht Straub</span>
                  <span>Photographer</span>
               </a>
            </div>
         </div>

         <div class="media media-sm">
            <div class="media-sm-wrapper">
               <a href="user-profile.html">
                  <img src="{{asset('assets/auth/images/user/user-sm-05.jpg')}}" alt="User Image">
                  <span class="active bg-danger"></span>
               </a>
            </div>
            <div class="media-body">
               <a href="user-profile.html">
                  <span class="title">Leopold Ebert</span>
                  <span>Fashion Designer</span>
               </a>
            </div>
         </div>

         <div class="media media-sm">
            <div class="media-sm-wrapper">
               <a href="user-profile.html">
                  <img src="{{asset('assets/auth/images/user/user-sm-06.jpg')}}" alt="User Image">
                  <span class="active bg-primary"></span>
               </a>
            </div>
            <div class="media-body">
               <a href="user-profile.html">
                  <span class="title">Selena Wagner</span>
                  <span>Photographer</span>
               </a>
            </div>
         </div>

      </div>
   </div>




   <!--  -->


</body>

</html>