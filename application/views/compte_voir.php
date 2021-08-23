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
                            <h2 class="content-header-title float-left mb-0">Les Comptes</h2>
                            
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
    

                <!-- Input with Icons start -->    
                            <!--<center style="text-align: right" >  <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#large">  <i class="feather icon-file" style="margin-right:10px"></i>Ajouter</button></center>-->
                       <br>
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
                                                <th>Image</th>
                                                <th>NOM</th>
                                                <th>PRENOM</th>
                                                <th>ADRESSE</th>
                                                <th>TEL</th>
                                                <th>EMAIL</th>
                                                <th>TYPE DE CONTRAT</th>
                                                <th>POUVOIRS</th>
                                                
                                                 <!-- <th style="width:2%">MODIFIER</th>
                                                <th style="width:2%">EFFACER</th>-->
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($compte as $key) { 
                                                if ($key->archive != 'oui') {  ?>
                                            <tr>
                                                <td>    <div class="avatar mr-1 ">
                                            <img src="<?php echo base_url(); ?>upload/compte/<?php echo $key->image ; ?>" alt="avtar img holder" height="32" width="32">
                                        </div></td>
                                                <td><?php echo $key->nom; ?></td>
                                                <td><?php echo $key->pre; ?></td>
                                                <td><?php echo $key->adress; ?></td>
                                                <td><?php echo $key->tele; ?></td>
                                                <td><?php echo $key->mail; ?></td>
                                                <td><?php echo $key->type; ?>.</td>
                                                <td><a href="POUVOIRS?id=<?php echo $key->id; ?>"><button type="button" class="btn btn-outline-primary mb-2" >  <i class="feather icon-eye"></i></button></a></td>
                                               <!-- <td>  <button type="button" class="btn btn-outline-primary mb-2" data-toggle="modal" data-target="#large<?php echo $key->id; ?>">  <i class="feather icon-edit"></i></button></td>
                                               <td>  <button type="button" class="btn btn-outline-danger mb-2" data-toggle="modal" data-target="#danger<?php echo $key->id; ?>">  <i class="feather icon-x"></i></button></td>-->
                                            </tr> 
                                        <?php } } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Input Sizing end -->

            </div>
        </div>
    </div>
    <div class="modal-size-lg mr-1 mb-1 d-inline-block" style="">
                                                    <!-- Button trigger modal -->

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel17">Ajouté un compte</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="add_compte" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                   <div class="row">
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Nom
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="nom" class="form-control" id="iconLeft4" placeholder="Nom" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                         <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Prénom
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="pre" class="form-control" id="iconLeft4" placeholder="Prénom" required="" >
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                             
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Adresse
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="adress" class="form-control" id="iconLeft4" placeholder="Adresse" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-map-pin"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Tél
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="tele" class="form-control" id="iconLeft4" placeholder="Tél" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                             Email
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="mail" class="form-control" id="iconLeft4" placeholder=" Email" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                       Type de contrat
                                                </div>
                                                 <fieldset class="form-group position-relative input-divider-right">
                                                   <select class="form-control" name="type" id="basicSelect" required="">
                                                        <option value="CDI – Contrat à durée indéterminée">CDI – Contrat à durée indéterminée </option>
                                                        <option value="CDD – Contrat à durée déterminée">CDD – Contrat à durée déterminée.</option>
                                                        <option value="CTT – Contrat de travail temporaire">CTT – Contrat de travail temporaire</option>
                                                        <option value="Contrat d'apprentissage">Contrat d'apprentissage</option>
                                                        <option value="Contrat de professionnalisation">Contrat de professionnalisation</option>
                                                        <option value="CUI – Contrat unique d'insertion">CUI – Contrat unique d'insertion.</option>
                                                        
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                
                                                    
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">  Image  </div>
                                                            <fieldset class="form-group">
                                                                 <div class="custom-file">
                                                                     <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                     <label class="custom-file-label" for="inputGroupFile01">  </label>
                                                                 </div>
                                                             </fieldset>
                                                </div>
                                             <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">   Facebook  </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="facebook" class="form-control" id="iconLeft4" placeholder="Facebook">
                                                    <div class="form-control-position">
                                                    <i class="feather icon-facebook"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Twitter
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="twitter" class="form-control" id="iconLeft4" placeholder="Twitter">
                                                    <div class="form-control-position">
                                                        <i class="feather  icon-twitter"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                             <div class="text-bold-600 font-medium-2 mb-1">
                                               Instagram
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="insta" class="form-control" id="iconLeft4" placeholder="Instagram">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-instagram"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                         <div class="text-bold-600 font-medium-2 mb-1">
                                               Youtube
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="youtube" class="form-control" id="iconLeft4" placeholder="Youtube">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-youtube"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="sub" class="btn btn-primary">Valider</button>
                                                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>











<?php foreach ($compte as $key) { ?>
                                                 <div class="modal fade text-left" id="large<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel17">Ajouté un compte</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="update_compte" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                   <div class="row">
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Nom
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="hidden" name="id" value="<?php echo $key->id; ?>" >
                                                    <input type="text" name="nom" class="form-control" id="iconLeft4" value="<?php echo $key->nom ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                         <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Prénom
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="pre" class="form-control" id="iconLeft4" value="<?php echo $key->pre ; ?>" required="" >
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                             
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Adresse
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="adress" class="form-control" id="iconLeft4" value="<?php echo $key->adress ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-map-pin"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Tél
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="tele" class="form-control" id="iconLeft4" value="<?php echo $key->tele ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                             Email
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="mail" class="form-control" id="iconLeft4" value="<?php echo $key->mail ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                       Type de contrat
                                                </div>
                                                 <fieldset class="form-group position-relative input-divider-right">
                                                   <select class="form-control" name="type" id="basicSelect" required="">
                                                        <option><?php echo $key->nom ; ?></option>
                                                        <option value="CDI – Contrat à durée indéterminée">CDI – Contrat à durée indéterminée </option>
                                                        <option value="CDD – Contrat à durée déterminée">CDD – Contrat à durée déterminée.</option>
                                                        <option value="CTT – Contrat de travail temporaire">CTT – Contrat de travail temporaire</option>
                                                        <option value="Contrat d'apprentissage">Contrat d'apprentissage</option>
                                                        <option value="Contrat de professionnalisation">Contrat de professionnalisation</option>
                                                        <option value="CUI – Contrat unique d'insertion">CUI – Contrat unique d'insertion.</option>
                                                        
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                
                                                    
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">  Image  </div>
                                                            <fieldset class="form-group">
                                                                 <div class="custom-file">
                                                                     <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                     <label class="custom-file-label" for="inputGroupFile01">  </label>
                                                                 </div>
                                                             </fieldset>
                                                </div>
                                             <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">   Facebook  </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="facebook" class="form-control" id="iconLeft4" value="<?php echo $key->facebook ; ?>">
                                                    <div class="form-control-position">
                                                    <i class="feather icon-facebook"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Twitter
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="twitter" class="form-control" id="iconLeft4" value="<?php echo $key->twitter ; ?>">
                                                    <div class="form-control-position">
                                                        <i class="feather  icon-twitter"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                             <div class="text-bold-600 font-medium-2 mb-1">
                                               Instagram
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="insta" class="form-control" id="iconLeft4" value="<?php echo $key->insta ; ?>">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-instagram"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                         <div class="text-bold-600 font-medium-2 mb-1">
                                               Youtube
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="youtube" class="form-control" id="iconLeft4" value="<?php echo $key->youtube ; ?>">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-youtube"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="sub" class="btn btn-primary">Valider</button>
                                                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
<?php } ?>







<?php foreach ($compte as $key) { ?>
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
															    <center> <h1 style="font-size:30px">   Êtes-vous sûr ? </center> 
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="delete_compte?id=<?php echo $key->id; ?>"><button type="submit" class="btn btn-danger">Supprimer</button></a>
																	<button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>
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