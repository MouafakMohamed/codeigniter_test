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
<style type="text/css">
    .display{

    display: none;

  }
</style>
<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
   <?php include('header.php'); ?>
        <!-- END: Header-->

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Ajouter un client : Inscrire un nouveau client</h2>
                            
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
                
             <section id="basic-horizontal-layouts">
                <form method="post" action="add_clien" enctype="multipart/form-data">
                    <div class="row match-height">
                        <div class="col-md-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                   <ul class="list-unstyled mb-0">
                                               <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <h3> Typologies de clients :</h3>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" onclick="change()" name="radio" value="1" required="">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="">Particulière</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" onclick="change1()" name="radio" value="2" required="">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="">professionnelle</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" onclick="change2()" name="radio" value="3" required="">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="">Auto-Entrepreneur</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            </ul>
                                            </div>
                                           <hr>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form class="form form-horizontal">
                                            <div class="form-body">
                                                <div  id="1">
                                         </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-content">
                            <div id="2">
                                    
                                    
                            </div>
                        </div>
                    </div>
                    <div class="card">
					    <div class="card-content">

                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-sm-12 col-12">
                                            <center> <button name="sub" type="submit" class="btn btn-primary"> <i class="feather icon-file" style="margin-right:10px"></i>Ajouter un clien</button></center> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    </div>
                </form>
                </section>

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
    <script type="text/javascript">
        function change() {
           var salam = '<div class="row"> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1">  Télécharger une image  </div> <fieldset class="form-group"> <div class="custom-file"> <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">  <label class="custom-file-label" for="inputGroupFile01">  </label>  </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1">  Nom </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" name="nom" class="form-control" id="iconLeft4" placeholder="Nom" required> <div class="form-control-position"> <i class="feather icon-user"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1"> Prénom  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" name="pre" class="form-control" id="iconLeft4" placeholder="Prénom" required> <div class="form-control-position"> <i class="feather icon-user"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1">  Adresse </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" name="adress" class="form-control" id="iconLeft4" placeholder="Adresse"> <div class="form-control-position"> <i class="feather  icon-map-pin"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1">   Tél  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="number" name="tele" class="form-control" id="iconLeft4" placeholder="Tél" required> <div class="form-control-position"> <i class="feather icon-phone"></i> </div> </fieldset> </div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1">  E-mail  </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="mail" class="form-control" id="iconLeft4" placeholder="Email"><div class="form-control-position"><i class="feather icon-mail"></i></div></fieldset></div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1">   Plafond de crédit  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="number" name="credit" class="form-control" id="iconLeft4" placeholder="plafond de crédit" required> <div class="form-control-position"> <i class="feather  icon-arrow-up-right"></i> </div> </fieldset> </div> </div>';
           var salam2 = '<div class="card-header"><H3>Réseaux sociaux</H3></div><div class="card-body"><div class="form-body"><div class="row"><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1">   Facebook  </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="facebook" class="form-control" id="iconLeft4" placeholder="Facebook"><div class="form-control-position"><i class="feather icon-facebook"></i></div></fieldset></div><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Twitter</div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="twitter" class="form-control" id="iconLeft4" placeholder="Twitter"><div class="form-control-position"><i class="feather  icon-twitter"></i></div></fieldset></div> <div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Instagram </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="insta" class="form-control" id="iconLeft4" placeholder="Instagram"><div class="form-control-position"><i class="feather icon-instagram"></i></div></fieldset></div><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Youtube </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="youtube" class="form-control" id="iconLeft4" placeholder="Youtube"> <div class="form-control-position"> <i class="fa fa-youtube"></i></div></fieldset></div></div></div></div>';
           $('#2').html(salam2);
        $('#1').html(salam);
       // alert('salam');
         
        }
        function change1() {
            var salam1 = "<div class='row'><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'>Télécharger une image</div><fieldset class='form-group'><div class='custom-file'><input type='file' name='image1' class='custom-file-input' id='inputGroupFile01'><label class='custom-file-label' for='inputGroupFile01'>Photo</label> </div></fieldset> </div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'>Nom</div><fieldset class='form-group position-relative input-divider-right'><input type='text' class='form-control' name='nom1' id='iconLeft4' placeholder='Nom' required><div class='form-control-position'> <i class='feather icon-user'></i></div></fieldset> </div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'> Prénom</div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='pre1' class='form-control' id='iconLeft4' placeholder='Prénom' required> <div class='form-control-position'><i class='feather icon-user'></i></div></fieldset></div><div class='col-sm-6 col-12'>  <div class='text-bold-600 font-medium-2 mb-1'>Nom de l Entreprise</div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='nom_e' class='form-control' id='iconLeft4' placeholder='  Nom de l Entreprise' required><div class='form-control-position'><i class='feather icon-globe'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'>Forme juridique</div><fieldset class='form-group position-relative input-divider-right'><select name='type' class='form-control' id='basicSelect' required><option>Société Anonyme (S.A) </option><option>Société Anonyme Simplifiée (SAS)</option><option>Société à Responsabilité Limitée (SARL) </option><option>Société en nom collectif (SNC)</option><option>Société en Commandite Simple (SCS)</option><option>Société en Commandite par Actions (SCA)</option><option>Société en Participation</option></select><div class='form-control-position'><i class='feather icon-file-text'></i></div></fieldset></div> <div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'> N° de RC</div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='num_rc' class='form-control' id='iconLeft4' placeholder=' N° de RC' required><div class='form-control-position'><i class='feather icon-slack'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'>N° de ICE </div> <fieldset class='form-group position-relative input-divider-right'><input type='text' name='num_ice' class='form-control' id='iconLeft4' placeholder='   N° de ICE' required><div class='form-control-position'><i class='feather icon-slack'></i></div></fieldset></div> <div class='col-sm-6 col-12'>  <div class='text-bold-600 font-medium-2 mb-1'> N° de IF </div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='num_if' class='form-control' id='iconLeft4' placeholder='N° de IF'><div class='form-control-position'><i class='feather icon-slack'></i> </div> </fieldset> </div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'> Adresse</div> <fieldset class='form-group position-relative input-divider-right'> <input type='text' name='adress1' class='form-control' id='iconLeft4' placeholder='Adresse'><div class='form-control-position'><i class='feather  icon-map-pin'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'>Tél</div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='tele1' class='form-control' id='iconLeft4' placeholder='Tél' required><div class='form-control-position'><i class='feather icon-phone'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'>  E-mail  </div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='mail' class='form-control' id='iconLeft4' placeholder='Email'><div class='form-control-position'> <i class='feather icon-mail'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1'> Plafond de crédit</div> <fieldset class='form-group position-relative input-divider-right'> <input type='text' name='credit1' class='form-control' id='iconLeft4' placeholder='plafond de crédit' required> <div class='form-control-position'><i class='feather  icon-arrow-up-right'></i> </div></fieldset></div></div>";
            var salam2 = '<div class="card-header"><H3>Réseaux sociaux</H3></div><div class="card-body"><div class="form-body"><div class="row"><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1">   Facebook  </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="facebook" class="form-control" id="iconLeft4" placeholder="Facebook"><div class="form-control-position"><i class="feather icon-facebook"></i></div></fieldset></div><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Twitter</div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="twitter" class="form-control" id="iconLeft4" placeholder="Twitter"><div class="form-control-position"><i class="feather  icon-twitter"></i></div></fieldset></div> <div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Instagram </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="insta" class="form-control" id="iconLeft4" placeholder="Instagram"><div class="form-control-position"><i class="feather icon-instagram"></i></div></fieldset></div><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Youtube </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="youtube" class="form-control" id="iconLeft4" placeholder="Youtube"> <div class="form-control-position"> <i class="fa fa-youtube"></i></div></fieldset></div></div></div></div>';
           $('#2').html(salam2);
           $('#1').html(salam1);
           // alert('salam1');
        }
        function change2() {

           var salam3 = ' <div class="row"><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Télécharger une image </div> <fieldset class="form-group"> <div class="custom-file"><input type="file" name="image2" class="custom-file-input" id="inputGroupFile01"><label class="custom-file-label" for="inputGroupFile01">Photo</label></div></fieldset> </div> <div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Nom </div> <fieldset class="form-group position-relative input-divider-right">  <input type="text" class="form-control" name="nom2" id="iconLeft4" placeholder="Nom" required>  <div class="form-control-position"> <i class="feather icon-user"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12">  <div class="text-bold-600 font-medium-2 mb-1">  Prénom </div> <fieldset class="form-group position-relative input-divider-right">  <input type="text" class="form-control" name="pre2" id="iconLeft4" placeholder="Prénom" required> <div class="form-control-position">  <i class="feather icon-user"></i>  </div> </fieldset>  </div> <div class="col-sm-6 col-12">  <div class="text-bold-600 font-medium-2 mb-1">  Nom de l Entreprise  </div> <fieldset class="form-group position-relative input-divider-right">  <input type="text" class="form-control" name="nom_e1" id="iconLeft4" placeholder="Nom de l Entreprise" required> <div class="form-control-position">  <i class="feather icon-globe"></i>  </div> </fieldset>  </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1">  N° de RC  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" class="form-control" name="num_rc1" id="iconLeft4" placeholder=" N° de RC" required>  <div class="form-control-position"> <i class="feather icon-slack"></i> </div> </fieldset> </div>  <div class="col-sm-6 col-12">  <div class="text-bold-600 font-medium-2 mb-1"> Adresse </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" class="form-control" name="adress2" id="iconLeft4" placeholder="Adresse">  <div class="form-control-position"> <i class="feather  icon-map-pin"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1"> Tél </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" class="form-control" name="tele2" id="iconLeft4" placeholder="Tél" required>  <div class="form-control-position"> <i class="feather icon-phone"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1">  E-mail  </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="mail" class="form-control" id="iconLeft4" placeholder="Email"><div class="form-control-position"><i class="feather icon-mail"></i></div></fieldset></div><div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1"> plafond de crédit </div>  <fieldset class="form-group position-relative input-divider-right">  <input type="text" class="form-control" name="credit2" id="iconLeft4" placeholder="Plafond de crédit" required> <div class="form-control-position"> <i class="feather  icon-arrow-up-right"></i> </div> </fieldset> </div></div>';
           var salam2 = '<div class="card-header"><H3>Réseaux sociaux</H3></div><div class="card-body"><div class="form-body"><div class="row"><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1">   Facebook  </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="facebook" class="form-control" id="iconLeft4" placeholder="Facebook"><div class="form-control-position"><i class="feather icon-facebook"></i></div></fieldset></div><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Twitter</div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="twitter" class="form-control" id="iconLeft4" placeholder="Twitter"><div class="form-control-position"><i class="feather  icon-twitter"></i></div></fieldset></div> <div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Instagram </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="insta" class="form-control" id="iconLeft4" placeholder="Instagram"><div class="form-control-position"><i class="feather icon-instagram"></i></div></fieldset></div><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Youtube </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="youtube" class="form-control" id="iconLeft4" placeholder="Youtube"> <div class="form-control-position"> <i class="fa fa-youtube"></i></div></fieldset></div></div></div></div>';
           $('#2').html(salam2);
            $('#1').html(salam3);
            // alert('salam2');

        }
    </script>

</body>
<!-- END: Body-->

</html>