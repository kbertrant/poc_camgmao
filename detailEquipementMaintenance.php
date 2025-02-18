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
                      <a class="nav-link " href="detailEquipement.php"><i class="bx bx-user me-1"></i> Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href="detailEquipementMaintenance.php"
                        ><i class="bx bx-bell me-1"></i> Maintenance</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="detailEquipementPeriode.php"
                        ><i class="bx bx-link-alt me-1"></i> Periodicité</a>
                    </li>
                  </ul>
                  <div class="card mb-4">
                    <h5 class="card-header"> Maintenance</h5>
                    <!-- Account -->
                    <div class="card-body">
                    <div class="table-responsive  text-nowrap">
                            <table class="table table-striped table-bordered" id="produitable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">CAT.</th>
                                        <th scope="col">DESCRIPTION</th>
                                        <th scope="col">PHASE</th>
                                        <th scope="col">RESP.</th>
                                        <th scope="col">ACTIF</th>
                                        <th scope="col">DEMANDEUR</th>
                                        <th scope="col">DATE</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col">1</td>
                                        <td scope="col">Sterilisateur</td>
                                        <td scope="col">Diminution de chaleur</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">En arret</button></td>
                                        <td scope="col">--</td>
                                        <td scope="col">Ampoules violette etainte</td>
                                        <td scope="col">Dr. NANA</td>
                                        <td scope="col">12/05/2023</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">2</td>
                                        <td scope="col">Scanners</td>
                                        <td scope="col">Imagerie pas nette </td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-primary">En cours</button></td>
                                        <td scope="col">Colette FONKOU</td>
                                        <td scope="col">Ampoules grillées</td>
                                        <td scope="col">Dr. Mbollo </td>
                                        <td scope="col">12/05/2023</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">3</td>
                                        <td scope="col">Scanners</td>
                                        <td scope="col">Image pas nette</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-success">En cours</button></td>
                                        <td scope="col">Olivier Wague</td>
                                        <td scope="col">Plancher d'impression </td>
                                        <td scope="col">Dr. NTAMACK Leslie</td>
                                        <td scope="col">12/05/2023</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">4</td>
                                        <td scope="col">Instruments</i></td>
                                        <td scope="col">Scalpel cassé</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-success">En cours</button></td>
                                        <td scope="col">Georges W.</td>
                                        <td scope="col">Rouille sur les instruments</td>
                                        <td scope="col">Dr. Ayele </td>
                                        <td scope="col">02/09/2022</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">5</td>
                                        <td scope="col">Microscopes</td>
                                        <td scope="col">Lentilles endommagées</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-danger">En panne</button></td>
                                        <td scope="col">--</td>
                                        <td scope="col">Lentilles d'aggrandissement  </td>
                                        <td scope="col"> Blaise NONO</td>
                                        <td scope="col">17/06/2018</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">6</td>
                                        <td scope="col">Scanners</td>
                                        <td scope="col">Demarrage bruyant </td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-primary">En cours</button></td>
                                        <td scope="col">Rene Bell</td>
                                        <td scope="col">Surface de scanne</td>
                                        <td scope="col"> Henri S.</td>
                                        <td scope="col">11/02/2021</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">7</td>
                                        <td scope="col">Table hospitalisation</td>
                                        <td scope="col">Accoudoir et mousse </td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-primary">En cours</button></td>
                                        <td scope="col">Antoine N.</td>
                                        <td scope="col">Boite alimentation</td>
                                        <td scope="col">Dr Mbeleck</td>
                                        <td scope="col">12/05/2023</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">8</td>
                                        <td scope="col">Scanners</td>
                                        <td scope="col">Circuit de charge</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">En arret</button></td>
                                        <td scope="col">M. ZANG</td>
                                        <td scope="col">RANCON</td>
                                        <td scope="col">DR. Noubissie </td>
                                        <td scope="col">12/05/2024</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
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
