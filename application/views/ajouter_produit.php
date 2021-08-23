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
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->

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
                            <h2 class="content-header-title float-left mb-0">Ajouter Un Produit / Modifier la quantité</h2>
                            
                        </div>
                    </div>
                </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
    

                <!-- Input with Icons start -->
                
                    <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <select class="select2-customize-result form-control search-product" onchange="searsh()" id="select2-customize-result" >
                                                        <option value="Nouveau">Nouveau produit</option>
                                                        <?php foreach ($pro as $key) { ?>
                                                        <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?> (<?php echo $key->ref; ?>)</option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                            </div>
                        </div>
                    </section>
                <form action="add_product" method="post" enctype="multipart/form-data">
                <section id="input-with-icons" >
                    <div class="row match-height">
                        <div class="col-12" style="width: 1300px">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-content">
                                    <div class="card-body"><center>

                                                            <img id="image" class="img-circle" src="<?php echo base_url(); ?>upload/images/<?php echo $key->image; ?>" alt=""  style="width: 150px;height: 150px; padding : 10px">

                                                    </center>
                                        <div class="row"  id="card">

                                     <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Télécharger une image
                                                </div>
                                               <fieldset class="form-group">
                                                  
                                                    <div class="custom-file">
                                                        <input onchange="show_image.call(this)" name="image" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Photo</label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Nom de Produit
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="name" class="form-control" id="iconLeft4" placeholder="Nom" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                         <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Référence/Code barre
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="ref" class="form-control" id="iconLeft4" placeholder="Référence/Code barre"required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Catégorie
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="form-control" name="cat" id="basicSelect" required>
                                                        <option></option>
                                                        <?php foreach ($query as $key) { ?>
                                                           <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather  icon-tag"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
											<div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Marque
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="form-control" name="marque" id="basicSelect" required>
                                                        <option></option>
                                                        <?php foreach ($query1 as $key1) { ?>
                                                           <option value="<?php echo $key1->id; ?>"><?php echo $key1->name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-check-square"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
											 <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Fournisseur
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="form-control" name="four" id="basicSelect" required>
                                                        <option></option>
                                                        <?php foreach ($query2 as $key2) { ?>
                                                           <option value="<?php echo $key2->id; ?>"><?php echo $key2->nom .' '. $key2->pre; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user-check"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
											<div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Quantité
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                       <input type="number" class="form-control" name="quantité" id="iconLeft4" placeholder="" required>
                                                    <div class="form-control-position">
                                                        <i class="fa fa-list-ol"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
											 	<div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                 Date d'expiration
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                       <input type="date" name="date" class="form-control" id="iconLeft4" placeholder="12/12/2020">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
											 	   <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Minimum de stock
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                       <input type="number" name="min_stock" class="form-control" id="iconLeft4" placeholder="">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-edit"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                                <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Description
                                                </div>
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" name="desc" id="basicTextarea" rows="3" placeholder="Textarea"></textarea>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                     <div class="card" id="card1">
								             <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                           
											 
                                     <div class="col-sm-12 col-12" style="margin-bottom:20px">
                                                             <div class="card-header">
								   <ul class="list-unstyled mb-0" >
                                               <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" onclick="change()" name="radio" value="1">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="text-bold-600 font-medium-2 ">Détail</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" onclick="change1()" name="radio" value="2">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="text-bold-600 font-medium-2 ">Gros</span>
                                                    </div>
                                                </fieldset>
                                            </li>
										</ul>
											</div>
                                            </div> 
                                           
                                            </div>  <div id="1"></div>
                                            </div> 
                                            </div> 
                                            </div> 	      
                        </div>
                       
                        </div>
                    </div>
                </section>
                </form>
                <!-- Input with Icons end -->

               
                <!-- Input Sizing end -->

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
<!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/ui/prism.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/wNumb.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->
<script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/select/form-select2.js"></script>

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/form-tooltip-valid.js"></script>
    <!-- END: Page JS-->
   <script type="text/javascript">
    function show_image() {

                if (this.files && this.files[0]) {

                    var obj = new FileReader();

                    obj.onload = function (data) {

                        var image = document.getElementById('image');

                        image.src = data.target.result;

                        image.style.display = "block";

                    }

                    obj.readAsDataURL(this.files[0]);

                }

            }
    function searsh(){
                           var searsh = $('#select2-customize-result').val();
                          if (searsh != 'Nouveau') {
                            $.ajax({
                              url:"ajax_search_produit1",
                              method:"POST",
                              data:{searsh:searsh},
                              success:function(data){
                                 $('#card').html(data);
                                 $('#card1').html(' ');
                                                    }
                            }) 
                           }else{
                                            window.location.href = "<?php echo base_url().'ajouter_produit' ; ?>"; 
                           }
                      }
       function change() {
           var salam = '<div class="row"><div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1"> Prix D Entrer </div>  <fieldset class="form-group position-relative input-divider-right"> <input type="number" name="prix_e" class="form-control" id="iconLeft4" placeholder="EX: 120dh" required> <div class="form-control-position"> <i class="fa fa-usd"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12">  <div class="text-bold-600 font-medium-2 mb-1"> Prix De Sortir </div> <fieldset class="form-group position-relative input-divider-right"> <input type="number" name="prix_1" class="form-control" id="iconLeft4" placeholder="EX: 120dh" required>  <div class="form-control-position"> <i class="fa fa-usd"></i>  </div>  </fieldset> </div>  <div class="col-sm-12 col-12"> <div class="text-bold-600 font-medium-2 mb-1"> <br> </div> <center>  <button type="submit" name="sub" class="btn btn-primary">  <i class="feather icon-file" style="margin-right:10px"></i>   Enregistrer</button></center> </div></div>';
        $('#1').html(salam);
       // alert('salam');
         
        }
        function change1() {
           var salam = '<div class="row"><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1">Prix D Entrer</div><fieldset class="form-group position-relative input-divider-right"><input type="number" name="prix_e" class="form-control" id="iconLeft4" placeholder="EX: 120dh"><div class="form-control-position"><i class="fa fa-usd"></i></div> </fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1">Prix De Gros </div> <fieldset class="form-group position-relative input-divider-right"><input type="number" name="prix_3" class="form-control" id="iconLeft4" placeholder="EX: 120dh"><div class="form-control-position"><i class="fa fa-usd"></i></div></fieldset></div> <div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1">Prix De Mini-Gros </div> <fieldset class="form-group position-relative input-divider-right"> <input type="number" name="prix_2" class="form-control" id="iconLeft4" placeholder="EX: 120dh"> <div class="form-control-position"> <i class="fa fa-usd"></i> </div> </fieldset> </div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1"> Prix De Détail </div> <fieldset class="form-group position-relative input-divider-right"> <input name="prix_1" type="number" class="form-control" id="iconLeft4" placeholder="EX: 120dh"> <div class="form-control-position"> <i class="fa fa-usd"></i> </div> </fieldset> </div>  <div class="col-sm-12 col-12">  <div class="text-bold-600 font-medium-2 mb-1"> <br>  </div> <center>  <button type="submit" name="sub" class="btn btn-primary">  <i class="feather icon-file" style="margin-right:10px"></i>   Enregistrer</button></center> </div> </div>';
        $('#1').html(salam);
       // alert('salam');
         
        }
   </script>
</body>
<!-- END: Body-->

</html>