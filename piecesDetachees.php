<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CAMGMAO - Pièces Détachées</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/lineicons.css" />
    <link rel="stylesheet" href="assets/css/animate.css" />
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
            <span class="text-muted fw-light">Pièces</span> Détachées
        </h4>
        
        <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
            <div class="flex-grow-1 mt-3 mt-sm-5">
                <div
                    class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                    <?php
                    @include('addEquipement');
                    ?>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEquip"
                        data-bs-whatever="@mdo"><i class='bx bx-check me-1'></i>Nouvelle Piece</button>
                </div><br>
                <div class="modal fade" id="addEquip" tabindex="-1" aria-labelledby="addEquipLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addEquipLabel">Créer une Nouvelle pieces</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="" >
                            <div class="modal-body">
                            <div class="mb-3">
                                <label for="nomEquip" class="form-label">Famille </label>
                                <select class="form-select" id="exampleSelect" aria-label="Sélection">
                                    <option selected></option>
                                    <option value="1">Arret prevu</option>
                                    <option value="2">Changement equipement</option>
                                    <option value="3">Maintenance</option>
                                    <option value="3">En marche</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="nomEquip" class="form-label">Description</label>
                                <input type="text" class="form-control" id="nomEquip" name="nomEquip" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomEquip" class="form-label">Quantite</label>
                                <input type="text" class="form-control" id="nomEquip" name="nomEquip" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomEquip" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nomEquip" name="nomEquip" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomEquip" class="form-label">Montant</label>
                                <input type="number" class="form-control" id="nomEquip" name="nomEquip" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomEquip" class="form-label">Date dernier Mvt</label>
                                <input type="date" class="form-control" id="nomEquip" name="nomEquip" required>
                            </div>
                            <div class="mb-3">
                                <label for="nomEquip" class="form-label">Date achat</label>
                                <input type="date" class="form-control" id="nomEquip" name="nomEquip" required>
                            </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Soumettre</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h5 class="card-header">Liste des pièces détachées</h5>
                    <div class="card-body">
                        <div class="table-responsive  text-nowrap">
                            <table class="table table-striped table-bordered" id="produitable">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">FAMILLE</th>
                                        <th scope="col">DESIGNATION</th>
                                        <th scope="col">QUANTITE</th>
                                        <th scope="col">MONTANT</th>
                                        <th scope="col">DATE D. MVT</th>
                                        <th scope="col">DATE ACHAT</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="col">1</td>
                                        <td scope="col">Materiel electronique</td>
                                        <td scope="col">Lecteur imagerie</td>
                                        <td scope="col">3</td>
                                        <td scope="col">340 000 XAF</td>
                                        <td scope="col">12/11/2024</td>
                                        <td scope="col">12/05/2023</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">2</td>
                                        <td scope="col">Materiel electrique</td>
                                        <td scope="col">Boitier alimentation</td>
                                        <td scope="col">9</td>
                                        <td scope="col">54 000 XAF </td>
                                        <td scope="col">14/12/2024</td>
                                        <td scope="col">12/05/2023</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">3</td>
                                        <td scope="col">Materiel electronique</td>
                                        <td scope="col">Regulateur optique echographe</td>
                                        <td scope="col">3</td>
                                        <td scope="col">1 340 000 XAF </td>
                                        <td scope="col">12/05/2024</td>
                                        <td scope="col">12/05/2023</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">4</td>
                                        <td scope="col">Materiel electronique</i></td>
                                        <td scope="col">Fusibles - coupe circuit </td>
                                        <td scope="col">7</td>
                                        <td scope="col">23 000 XAF</td>
                                        <td scope="col">02/01/2025</td>
                                        <td scope="col">02/09/2022</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">5</td>
                                        <td scope="col">Materiel electrique</td>
                                        <td scope="col">Lentilles endommagées</td>
                                        <td scope="col">13</td>
                                        <td scope="col">130 500 XAF</td>
                                        <td scope="col"> 01/02/2023</td>
                                        <td scope="col">17/06/2018</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    <tr>
                                        <td scope="col">6</td>
                                        <td scope="col">Consommables informatiques</td>
                                        <td scope="col">Encre scanners</td>
                                        <td scope="col">45</td>
                                        <td scope="col">31 000 XAF</td>
                                        <td scope="col"> 11/02/2021</td>
                                        <td scope="col">11/02/2021</td>
                                        <td scope="col"><button type="button" class="btn btn-sm btn-warning">V</button> <button type="button" class="btn btn-sm btn-danger">S</button></td>
                                    </tr>
                                    
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
        <!-- Vendors JS -->
    <script src="{{ asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

<!-- Main JS -->
<script src="{{ asset('assets/js/main.js')}}"></script>

<!-- Page JS -->
<script src="assets/js/dashboards-analytics.js"></script>
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
