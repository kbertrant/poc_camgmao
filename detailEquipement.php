<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CAMGMAO -Details Equipement</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/animate.cs" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
    <!-- Scripts -->
    <style>
        .pageLoader{
          background: url(assets/img/Iphone-spinner-2.gif) no-repeat center center;
          position: fixed;
          top: 0;
          left: 0;
          height: 100%;
          width: 100%;
          z-index: 9999999;
          background-color: #ffffff8c;
  
        }
      </style>
</head>
<body>
    <div  class="pageLoader" id="pageLoaders"></div>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <?php
            include 'inc/sidebar.php';
            ?>
        <div class="layout-page">
        <?php
            include 'inc/headers.php';
            ?>
             <!-- Content wrapper -->
    <div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Details </span> Equipements
        </h4>
        
        <!-- Content wrapper -->
        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              
              <div class="row">
                <div class="col-md-12">
                  <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                      <a class="nav-link active" href="detailEquipementMaintenance.php"><i class="bx bx-user me-1"></i> Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="detailEquipementMaintenance.php"
                        ><i class="bx bx-bell me-1"></i> Maintenance</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="detailEquipementPeriode.php"
                        ><i class="bx bx-link-alt me-1"></i> Periodicité</a>
                    </li>
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header"> Details</h5>
                    <!-- Account -->
                    
                    <div class="card-body">
                      <form id="formAccountSettings" method="POST" onsubmit="return false">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Num. Serie</label>
                            <input disabled
                              class="form-control"
                              type="text"
                              id="firstName"
                              name="firstName"
                              value="7039"
                              autofocus
                            />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Marque </label>
                            <input disabled class="form-control" type="text" name="lastName" id="lastName" value="Alternup Medical" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Model</label>
                            <input disabled
                              class="form-control"
                              type="text"
                              id="email"
                              name="email"
                              value="A345"
                              placeholder="john.doe@example.com"
                            />
                          </div>
                          
                          <div class="mb-3 col-md-6">
                            <label for="address" class="form-label">Description</label>
                            <input disabled type="text" class="form-control" id="address" name="address" value="Table Operation electrique" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="state" class="form-label">Categorie</label>
                            <input disabled class="form-control" type="text" id="state" name="state" value="Instruments chirurgicaux" />
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Date d'dachat</label>
                            <input disabled
                              type="date"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              value="2021-03-14"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="zipCode" class="form-label">Fournisseur</label>
                            <input disabled
                              type="text"
                              class="form-control"
                              id="zipCode"
                              name="zipCode"
                              value="Alternup medical Corporation"/>
                          </div>
                         
                          
                        </div>
                        
                      </form>
                    </div>
                    <!-- /Account -->
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- / Content -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
    </div>


            <?php
            include 'inc/footer.php';
            ?>
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script> 
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="assets/js/main.js"></script> 
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main2.js"></script>
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!-- Core plugin JavaScript-->
    
    <!-- Page JS -->
</body>
<script type="text/javascript">
    $(window).on('beforeunload', function(){
          $('#pageLoaders').show();
      });
      $(window).bind("pageshow", function(event) {
        $("#pageLoaders").hide();
      });
   $(document).ready(function() { 
        let token = $('#csrf').html();
        $.ajax({ 
            type:'POST', 
            url:'/ajax', 
            data: {_token: token, my_data: 'john'}
        }); 
    }); 
    </script>
</html>
