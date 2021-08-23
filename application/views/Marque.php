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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
      <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
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

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->

   <?php include('header.php'); ?>

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Les Marques </h2>
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
                <div><button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#categorie">  <i class="feather icon-plus" style="margin-right:10px"></i>Ajouter une nouvelle marque</button></div>   <br>
                <!-- Input with Icons end -->
  <div class="row" id="table-borderless">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                               
                            </div>
                            <div class="card-content">
                               
                                <div class="table-responsive">
                                        <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Marque</th>
                                                <th style="width:2%">MODIFIER</th>
                                                <th style="width:2%">EFFACER</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($marque as $key) { 
                                                if ($key->archive != 'oui') { ?>
                                            <tr>
                                                <th scope="row"><?php echo $key->id; ?></th>
                                                <td><?php echo $key->name; ?></td>
                                            <td><h3><a href="#"><i class="feather icon-edit"  data-toggle="modal" data-target="#inlineForm<?php echo $key->id; ?>"></i></a></h3></td>
                                               <td> <h3 style="color: red"> <i class="feather icon-x" data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></td>
                                               
                                            </tr> 
                                        <?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>  
                        </div>
                    </div>   
                                                   
                                                      <div class="modal fade text-left" id="categorie" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true"  >
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                           
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form method="post" action="add_marque">
                                                            <div class="modal-body">
                                                                <label>Marque: </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="name" placeholder="Example : Iphone" class="form-control">
                                                                </div>
                                                                 
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">  Ajouter</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                                    <!-- Modal -->
                                                    <?php foreach ($marque as $key) { ?>
                                                    <div class="modal fade text-left" id="danger<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
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
                                                                    <a href="delete_marque?id=<?php echo $key->id; ?>"><button type="button" class="btn btn-danger">Supprimer</button></a>
																	<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                             
                </div>
               
                <!-- Input Sizing end --> 
                <?php foreach ($marque as $key) { ?>
				<div class="modal fade text-left" id="inlineForm<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true"  >
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                           
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="update_marque" method="post">
                                                            <div class="modal-body">
																<label>Marque : </label>
                                                                <div class="form-group">
                                                                    <input type="hidden" name="id" value="<?php echo $key->id; ?>" >
                                                                    <input type="text" name="name" value="<?php echo $key->name; ?>" class="form-control">
                                                                </div>
																 
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">  MODIFIER</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php } ?>

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

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/form-tooltip-valid.js"></script>
    <!-- END: Page JS-->
     <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/polyfill.min.js"></script>
	 <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
	   
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/modal/components-modal.js"></script>
</body>
<!-- END: Body-->

</html>