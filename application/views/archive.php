<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <?php include('logo.php'); ?>
    <link href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
      <!-- BEGIN: Vendor CSS-->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
     <?php include('header.php'); ?>

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0"> Archive </h2>
                            
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
 <div class="row">
                                            <div class="col-12">
                                                <!-- basic buttons -->
                                                <a href="Archive?page=cliens"><button type="button" class="btn btn-primary mr-1 mb-1"> CRM </button></a>
                                                <a href="Archive?page=fournisseur"><button type="button" class="btn btn-success mr-1 mb-1"> Fournisseur </button></a>
                                                <a href="Archive?page=produit"><button type="button" class="btn btn-info mr-1 mb-1"> Produits </button></a>
                                                <a href="Archive?page=catégorie"><button type="button" class="btn btn-warning mr-1 mb-1"> Catégories </button></a>
                                                <a href="Archive?page=marques"><button type="button" class="btn btn-danger mr-1 mb-1"> Marques </button></a>
                                                <a href="Archive?page=compte"><button type="button" class="btn btn-light mr-1 mb-1"> Comptes </button></a>
                                                <a href="Archive?page=charge"><button type="button" class="btn btn-dark mr-1 mb-1"> Charges </button></a>
                                               <!--<a href="Archive?page="> <button type="button" class="btn mr-1 mb-1" style="background-color: brown; color: white"> SAV </button></a>-->
                                            </div>
                                        </div>
                <!-- Input with Icons start -->
              
                <!-- Input with Icons end -->
                <?php if ($result != '') { 
                    if ($_GET['page'] == 'cliens') {
                     ?>

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> CRM </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                               <thead>
                                                    <tr>
                                                        <th>Photo</th>
                                                        <th>Nom</th>
                                                        <th>Tél</th>
                                                        <th>Email</th>
                                                        <th>Restaurer</th>
                                                        <th>Suprimer</th> 
                                                        
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                         foreach ($result as $key) {
                                                         if ($key->archive == 'oui') {
                                                            $route = 'delete_clien1';
                                                          ?>
                                                    <tr>
                                                        <td><div class="avatar mr-1 "><img src="<?php echo base_url(); ?>upload/clien/<?php echo $key->image ; ?>" alt="avtar img holder" height="32" width="32"></div></td>
                                                        <td><?php echo $key->nom .' '.$key->pre; ?>
                                                        </td><td><?php echo $key->mail; ?></td>
                                                        <td><?php echo $key->tele; ?></td>
                                                         <td><center><h3>  <i class="fa fa-repeat"  data-toggle="modal" data-target="#success<?php echo $key->id; ?>"></i></h3></center></td>
                                                         <td><center><h3 style="color: red">  <i class="feather icon-x"  data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></center></td>
                                                    </tr>
                                                   <?php } } ?>
                                               </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <?php } } ?>
                <?php if ($result != '') { 
                    if ($_GET['page'] == 'fournisseur') {
                     ?>

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Fournisseur </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                              <thead>
                                            <tr>
                                                <th>#</th>
                                                 <th>Photo</th>
                                                <th>NOM</th>
                                                <th>PRENOM</th>
                                                <th>NOM DE L'ENTREPRISE</th>
                                                <th> TÉL</th>
                                                <th>Restaurer</th>
                                                <th>Suprimer</th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                         foreach ($result as $key) {
                                                         if ($key->archive == 'oui') {
                                                            $route = 'delete_four1';
                                                          ?>
                                            <tr>
                                            <td>    <div class="avatar mr-1 ">
                                            <img src="<?php echo base_url(); ?>upload/fournisseur/<?php echo $key->image; ?>" alt="avtar img holder" height="32" width="32">
                                              </div></td>
                                                <th scope="row"><?php echo $key->id; ?></th>
                                                <td><?php echo $key->nom; ?></td>
                                                <td><?php echo $key->pre; ?></td>
                                                <td><?php echo $key->nom_e; ?></td>
                                                <td><?php echo $key->tele; ?></td>
                                                 <td><center><h3>  <i class="fa fa-repeat"  data-toggle="modal" data-target="#success<?php echo $key->id; ?>"></i></h3></center></td>
                                                         <td><center><h3 style="color: red">  <i class="feather icon-x"  data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></center></td>
                                            </tr> 
                                        <?php } } ?>
                                        </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <?php } } ?>
                <?php if ($result != '') { 
                    if ($_GET['page'] == 'produit') {
                     ?>

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Produit </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                              <thead>
                                            <tr>
                                                <th>#</th>
                                                 <th>Photo</th>
                                                <th> NOM </th>
                                                <th> Référence </th>
                                                <th>Restaurer</th>
                                                <th>Suprimer</th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                         foreach ($result as $key) {
                                                         if ($key->archive == 'oui') {
                                                            $route = 'delete_pro1';
                                                          ?>
                                            <tr>
                                                <th scope="row"><?php echo $key->id; ?></th>
                                                <td><div class="avatar mr-1 ">
                                            <img src="<?php echo base_url(); ?>upload/produits/<?php echo $key->image; ?>" alt="avtar img holder" height="32" width="32">
                                              </div></td>
                                                <td><?php echo $key->name; ?></td>
                                                <td><?php echo $key->ref; ?></td>
                                                <td><center><h3>  <i class="fa fa-repeat"  data-toggle="modal" data-target="#success<?php echo $key->id; ?>"></i></h3></center></td>
                                                <td><center><h3 style="color: red">  <i class="feather icon-x"  data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></center></td>
                                            </tr> 
                                        <?php } } ?>
                                        </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <?php } } ?>
                <?php if ($result != '') { 
                    if ($_GET['page'] == 'catégorie') {
                     ?>

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Catégorie </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                              <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NOM</th>
                                                <th>Restaurer</th>
                                                <th>Suprimer</th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                         foreach ($result as $key) {
                                                         if ($key->archive == 'oui') {
                                                            $route = 'delete_cat1';
                                                          ?>
                                            <tr>
                                                <th scope="row"><?php echo $key->id; ?></th>
                                                <td><?php echo $key->name; ?></td>
                                                 <td><center><h3>  <i class="fa fa-repeat"  data-toggle="modal" data-target="#success<?php echo $key->id; ?>"></i></h3></center></td>
                                                         <td><center><h3 style="color: red">  <i class="feather icon-x"  data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></center></td>
                                            </tr> 
                                        <?php } } ?>
                                        </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <?php } } ?>
                <?php if ($result != '') { 
                    if ($_GET['page'] == 'marques') {
                     ?>

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12"> 
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Marques </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                      <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>NOM</th>
                                                <th>Restaurer</th>
                                                <th>Suprimer</th> 
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                         foreach ($result as $key) {
                                                         if ($key->archive == 'oui') {
                                                            $route = 'delete_marque1';
                                                          ?>
                                            <tr>
                                                <th scope="row"><?php echo $key->id; ?></th>
                                                <td><?php echo $key->name; ?></td>
                                                 <td><center><h3>  <i class="fa fa-repeat"  data-toggle="modal" data-target="#success<?php echo $key->id; ?>"></i></h3></center></td>
                                                         <td><center><h3 style="color: red">  <i class="feather icon-x"  data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></center></td>
                                            </tr> 
                                        <?php } } ?>
                                        </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <?php } } ?>
                <?php if ($result != '') { 
                    if ($_GET['page'] == 'compte') {
                     ?>

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Compte </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                               <thead>
                                            <tr>
                                                <th>Image</th>
                                                <th>NOM</th>
                                                <th>PRENOM</th>
                                                <th>ADRESSE</th>
                                                <th>TEL</th>
                                                <th>EMAIL</th>
                                                <th>Restaurer</th>
                                                <th>Suprimer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php 
                                                         foreach ($result as $key) {
                                                         if ($key->archive == 'oui') {
                                                            $route = 'delete_compte1';
                                                          ?>
                                            <tr>
                                                <td>    <div class="avatar mr-1 ">
                                            <img src="<?php echo base_url(); ?>upload/compte/<?php echo $key->image ; ?>" alt="avtar img holder" height="32" width="32">
                                        </div></td>
                                                <td><?php echo $key->nom; ?></td>
                                                <td><?php echo $key->pre; ?></td>
                                                <td><?php echo $key->adress; ?></td>
                                                <td><?php echo $key->tele; ?></td>
                                                <td><?php echo $key->mail; ?></td>
                                                <td><center><h3>  <i class="fa fa-repeat"  data-toggle="modal" data-target="#success<?php echo $key->id; ?>"></i></h3></center></td>
                                                         <td><center><h3 style="color: red">  <i class="feather icon-x"  data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></center></td>
                                            </tr> 
                                        <?php } } ?>
                                        </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <?php } } ?>
                 <?php if ($result != '') { 
                    if ($_GET['page'] == 'charge') {
                     ?>

                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> Charge </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                              <thead>
                                           <tr>
                                                                                        <th>ID</th>
                                                                                        <th>Nom de la charge</th>
                                                                                        <th>montant </th>
                                                                                        <th>Date</th>
                                                                                        <th>Restaurer</th>
                                                                                        <th>Suprimer</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="card">
                                                                                    <?php 
                                                         foreach ($result as $key) {
                                                         if ($key->archive == 'oui') {
                                                            $route = 'delete_charge1';
                                                          ?>
                                                                                        <tr>
                                                                                            <td><?php echo $key->id; ?></td>
                                                                                             <td><?php echo $key->name; ?></td>
                                                                                             <td><?php echo $key->montant; ?> DH</td>
                                                                                             <td><?php echo $key->date; ?></td>
                                                                                             <td><center><h3>  <i class="fa fa-repeat"  data-toggle="modal" data-target="#success<?php echo $key->id; ?>"></i></h3></center></td>
                                                         <td><center><h3 style="color: red">  <i class="feather icon-x"  data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></center></td>
                                                                                        </tr> 
                                                                                               
                                                                                        
                                                                                   <?php } } ?>
                                                                               </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
               <?php } } ?>
                <!-- Input Sizing end -->

                <?php if ($result != '') { 
                    foreach ($result as $key1) { ?>
                                                    <div class="modal fade text-left" id="success<?php echo $key1->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-success white">
                                                                    <h5 class="modal-title" id="myModalLabel120"></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                              
                                                               <center> <h1 style="font-size:40px">  <i class="fa fa-trash-o"></i></h1></center>
                                                                <center> <h1 style="font-size:30px">   Êtes-vous sûr Restaurer les informations ?</center> 
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="Restaurer?id=<?php echo $key1->id; ?>&page=<?php echo $_GET['page']; ?>"><button type="button" class="btn btn-success" > Restaurer </button></a>
                                                                    <button type="button" class="btn btn-outline-success" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     <div class="modal fade text-left" id="danger<?php echo $key1->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header bg-danger white">
                                                                    <h5 class="modal-title" id="myModalLabel120"></h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                              
                                                               <center> <h1 style="font-size:40px">  <i class="fa fa-trash-o"></i></h1></center>
                                                                <center> <h1 style="font-size:30px">   Êtes-vous sûr ?</center> 
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="<?php echo $route.'?id='.$key1->id; ?>"><button type="button" class="btn btn-danger" >Supprimer</button></a>
                                                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } } ?>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('footer.php'); ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/form-tooltip-valid.js"></script>
    <!-- END: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
     <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/polyfill.min.js"></script>
     <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
</body>
<!-- END: Body-->

</html>