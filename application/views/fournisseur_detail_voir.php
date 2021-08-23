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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->
	<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/charts/apexcharts.css">
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
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/pages/card-analytics.css">
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
                            <h2 class="content-header-title float-left mb-0">Profil de Fournisseur
</h2>
                          
                        </div>
                    </div>
                </div>
              
            </div>
            <?php foreach ($clien as $key) { ?>
            <div class="content-body">
			  <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
							  <section id="profile-info">
                        <div class="row">
               
                                 <div class="col-xl-4 col-md-4 col-sm-12 profile-card-1">
                            <div class="card"> 
							  <!--<div class="mt-1" style="text-align:right;margin-right:10px">
                                             <button type="button" class="btn btn-sm btn-icon btn-primary mr-25" data-toggle="modal" data-target="#inlineForm"><i class="feather icon-edit"></i></button>
                                        </div> -->
                                <div class="card-header mx-auto">
                                    <div class="avatar avatar-xl">
                                        <img class="img-fluid" src="<?php echo base_url(); ?>upload/clien/<?php echo $key->image; ?>" alt="img placeholder" style="width:162px;height:162px">
                                    </div>
                                </div>
							 
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <h4><?php echo $key->nom . ' ' . $key->pre; ?></h4><br>
                                        
									   <div class="card-content">
                                    <div class="card-body">
                                        <?php if (!empty($key->facebook) and $key->facebook != '-') { ?>
                                        <div class="avatar bg-primary">
                                            <div class="avatar-content position-relative">
                                                <a href="<?php echo $key->facebook; ?>"><i class="avatar-icon feather icon-facebook" style="color: #fff"></i></a>
                                            </div>
                                        </div>
                                        <?php }else{ ?>

                                            <div class="avatar bg-light">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-facebook" style="color: #fff"></i>
                                            </div>
                                        </div>
                                        <?php } if (!empty($key->twitter) and $key->twitter != '-') {  ?>
                                        <div class="avatar bg-info">
                                            <div class="avatar-content position-relative">
                                                <a href="<?php echo $key->twitter; ?>"><i class="avatar-icon feather icon-twitter" style="color: #fff"></i></a>
                                                
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="avatar bg-light">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-twitter" style="color: #fff"></i>
                                                
                                            </div>
                                        </div>
                                        <?php } if (!empty($key->insta) and $key->insta != '-') {  ?>
                                        <div class="avatar bg-success">
                                            <div class="avatar-content position-relative">
                                                <a href="<?php echo $key->insta; ?>"><i class="avatar-icon feather icon-instagram" style="color: #fff"></i></a>
                                                
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="avatar bg-light">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-instagram" style="color: #fff"></i>
                                                
                                            </div>
                                        </div>
                                        <?php } if (!empty($key->youtube) and $key->youtube != '-') {  ?>
										 <div class="avatar bg-danger">
                                            <div class="avatar-content position-relative">
                                                <a href="<?php echo $key->youtube; ?>"><i class="avatar-icon feather icon-youtube" style="color: #fff"></i></a>
                                                
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="avatar bg-light">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-youtube" style="color: #fff"></i>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                       <br><br>     <br><br>
                                      
                                    </div>
                                </div>
                            </div>
							                        
                              
                            
                             
               
               
                      
                        </div>
						 <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="card">
                                  <!--<div class="mt-1" style="text-align:right;margin-right:10px">
                                             <button type="button" class="btn btn-sm btn-icon btn-primary mr-25" data-toggle="modal" data-target="#inlineForm1"><i class="feather icon-edit"></i></button>
                                        </div> -->
                                    <div class="card-body">
                                             <div class="card">
                              
                                
                                       <div class="table-responsive" style="margin-bottom:-30px">
                                       <table class="table table-bordered table-striped">
                               
                                    <tr>
                                        <th>Nom de l'Entreprise </th>
                                        <th><?php echo $key->nom_e; ?></th>
                                    </tr>
                              
                                
                                    <tr>
                                        <td> Adresse </td>
                                        <td><?php echo $key->adress; ?></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Tél</td>
                                        <td><?php echo $key->tele; ?></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><?php echo $key->mail; ?></td>
                                       
                                    </tr>
                                    <tr>
                                        <td>Forme juridique </td>
                                        <td><?php echo $key->type; ?></td>
                                        
                                    </tr>  
									<tr>
                                        <td>N° de RC</td>
                                        <td><?php echo $key->num_rc; ?></td>
                                        
                                    </tr>
                              <tr>
                                        <td>N° de ICE</td>
                                        <td><?php echo $key->num_ice; ?></td>
                                        
                                    </tr>
                               <tr>
                                        <td>N° de IF</td>
                                        <td><?php echo $key->num_if; ?></td>
                                        
                                    </tr>
                              
                            </table>   
                                   
                                </div>
                                </div>
                                </div>
                                </div>
                                </div>       
                     </div>
 </section>
      
    </div>
			  <!-- <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                  
                                    <h2 class="text-bold-700 mt-1"> <?php echo $key->credit; ?> dh</h2>
                                     <p class="mb-0">Plafonds de Crédit </p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                  
                                    <h2 class="text-bold-700 mt-1"> 87 dh</h2>
                                   <p class="mb-0">La marge bénéficiaire</p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                   
                                    <h2 class="text-bold-700 mt-1">125487 dh</h2>
                                    <p class="mb-0">Total de Crédit :</p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-3"></div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
               </section>-->
                  
      

                <!-- Column selectors with Export Options and print table -->
              <!--  <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
 
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>Date</th>
                                                        <th>Opération</th>
                                                      
                                                     
                                                        
                                                        <th>Débit</th>
                                                        <th>Crédit</th>
                                                        <th>Type d'opération</th>
														   <th>N° Facture</th>
                                                        <th>Total</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>12/02/2013</td>
                                                        <td> Paiement</td>
                                                        <td><b>6200 DH</b></td>
                                                        
													   <td><b>6200 DH</b></td>
                                                         <td>espece</td>
                                                         <td> 2</td>
                                                         <td>2000 Dh</td>
                                                    </tr>
                                                 
                                                </tbody>
                                              
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>-->
                <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="update_image1" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                 <fieldset class="form-group">
                                                                    <label for="basicInputFile">Image</label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                        <label class="custom-file-label" for="inputGroupFile01">choisir image</label>
                                                                    </div>
                                                                </fieldset>
                                                                 <label>nom: </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="nom" value="<?php echo $key->nom; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label>Prénom: </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="pre" value="<?php echo $key->pre; ?>" class="form-control">
                                                                </div>
                                                                 <label>Facebook: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->facebook; ?>" name="facebook" class="form-control">
                                                                </div>
                                                                 <label>Twitter: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->twitter; ?>" name="twitter" class="form-control">
                                                                </div>
                                                                 <label>Instagram: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->insta; ?>" name="insta" class="form-control">
                                                                </div>

                                                                <label>Youtube: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->youtube; ?>" name="youtube" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                     <div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="update_four" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                  <label>Nom de l'Entreprise : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="nom_e" value="<?php echo $key->nom_e; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label>Adresse: </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="adress" value="<?php echo $key->adress; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label>Tél: </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="tele" value="<?php echo $key->tele; ?>" class="form-control">
                                                                </div>
                                                                 <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->mail; ?>" name="mail" class="form-control">
                                                                </div>
                                                                 <label>Forme juridique: </label>
                                                                <div class="form-group">
                                                                    <select name='type' class='form-control' id='basicSelect' required>
                                                                        <option><?php echo $key->type; ?></option>
                                                                        <option>Société Anonyme (S.A) </option>
                                                                        <option>Société Anonyme Simplifiée (SAS)</option>
                                                                        <option>Société à Responsabilité Limitée (SARL) </option>
                                                                        <option>Société en nom collectif (SNC)</option>
                                                                        <option>Société en Commandite Simple (SCS)</option>
                                                                        <option>Société en Commandite par Actions (SCA)</option>
                                                                        <option>Société en Participation</option>
                                                                    </select>
                                                                </div>
                                                                 <label>N° de RC: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_rc; ?>" name="num_rc" class="form-control">
                                                                </div>

                                                                <label>N° de ICE: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_ice; ?>" name="num_ice" class="form-control">
                                                                </div>
                                                                <label>N° de IF: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_if; ?>" name="num_if" class="form-control">
                                                                </div>
                                                                <label>Plafonds de Crédit: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->credit; ?>" name="credit" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    </div>
<?php } ?>
    <!-- END: Content-->
 <!-- Modal -->
                                          
                                       



    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('footer.php'); ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->
<!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
   <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
</body>
<!-- END: Body-->

</html>