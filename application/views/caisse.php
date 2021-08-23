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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/toastr.css">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/forms/select/select2.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/pages/app-ecommerce-shop.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/plugins/forms/wizard.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/plugins/extensions/toastr.css">
    <!-- END: Page CSS-->
   
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns ecommerce-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
 <?php include('header.php'); ?>

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0"> La Caisse</h2>
                                <form method="post" action="add_bon">
								   <ul class="list-unstyled float-right mb-0">
                                               <li class="d-inline-block mr-2">
                                                <?php    
                                                      if ($check == 'detail' or $check == 'salam') {
                                                          $box = 'checked=""';
                                                          $box1 = '';
                                                          $box2 = '';
                                                      }elseif ($check == 'mini-gros') {
                                                         $box1 = 'checked=""';
                                                          $box = '';
                                                          $box2 = '';
                                                      }elseif ($check == 'gros') {
                                                          $box2 = 'checked=""';
                                                          $box1 = '';
                                                          $box = '';
                                                      }else{
                                                          $box = 'checked=""';
                                                          $box1 = '';
                                                          $box2 = '';
                                                      }
                                                 ?>
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" name="check" value="gros" <?php echo $box2; ?>>
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="text-bold-600 font-medium-2 "> Gros</span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" name="check" value="mini-gros" <?php echo $box1; ?>>
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="text-bold-600 font-medium-2 ">Mini-Gros</span>
                                                    </div>
                                                </fieldset>
                                            </li>
											<li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" name="check" value="detail" <?php echo $box; ?>>
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span class="text-bold-600 font-medium-2 "> Détail </span>
                                                    </div>
                                                </fieldset>
                                            </li>
											</ul>		 
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
			  <section id="input-with-icons">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            
												  <div class="col-sm-3 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Recherche
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                  
                                                    <input type="text" name="searsh" id="searsh" class="form-control">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-search"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
												  <div class="col-sm-3 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Catégorie
                                                </div> 
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <select class="form-control" id="cat" id="basicSelect">
                                                        <option></option>
                                                       <?php foreach ($query as $row1) {
                                                        if ($key->archive != 'oui') {
                                                             ?>
                                                            <option value="<?php echo $row1->id ; ?>"><?php echo $row1->name ; ?></option>
                                                            <?php } } ?>
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="fa fa-tag"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
											<div class="col-sm-3 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Nom <b style="color: red;font-size: 12px;padding-left: 10px"><?php echo $error; ?></b>
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                   <select class="form-control" name="pro" id="ref" id="basicSelect" required>
                                                        <option></option>
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
                                            <div class="col-sm-3 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Remise
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                   <input type="number" class="form-control" name="remise" value="0">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>  
							 
											<div class="col-sm-12 col-12">
                                               
                                              <center>  <button type="submit" name="sub" class="btn btn-primary">  <i class="feather icon-file" style="margin-right:10px"></i>Ajouter</button></center> 
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
                <form action="add_bons" method="post" class="icons-tab-steps checkout-tab-steps wizard-circle">
                    <!-- Checkout Place order starts -->
                    <h6><i class="step-icon step feather icon-shopping-cart"></i>Commande</h6>
                    <fieldset class="checkout-step-1 px-0">
                        <section id="place-order" class="list-view product-checkout">
                            <div class="checkout-items">
                                <?php $total = 0;
                                foreach ($bon as $key) { ?>
                                <div class="card ecommerce-card">
                                    <div class="card-content">
                                        <div class="item-img text-center">
                                            <img src="<?php echo base_url(); ?>upload/produits/<?php echo $key->image; ?>"  alt="img-placeholder" style="width: 200px;height: 180px">
                                        </div>
                                        <div class="card-body"><br>
                                            <div class="item-name">
                                                <span><?php echo $key->name; ?></span>
                                                
                                            </div><br><br>
                                            <div class="item-quantity">
                                               
                                                 <div class="d-inline-block mb-1">
                                                   <p class="quantity-title">Quantity</p>
                                                 <div class="input-group quantity-counter-wrapper">
                                                    <input type="number" class="quantity-counter" id="quantité<?php echo $key->id; ?>" onchange="opp(<?php echo $key->id; ?>)" value="<?php echo $key->quantité; ?>">
                                                </div>  
                                            </div>
                                         
                                            </div>
                                            
                                        </div>
                                        <div class="item-options text-center">
                                            <div class="item-wrapper">
                                                
                                                <div class="item-cost">
                                                    <h6 class="item-price">
                                                       <p id="total<?php echo $key->id; ?>"><?php echo $key->total; ?> DH</p>
                                                    </h6>
                                                   <?php $total = $total + $key->total; ?>
                                                </div>
                                            </div>
                                            <div class="wishlist" data-toggle="modal" data-target="#danger<?php echo $key->id; ?>">
                                                <i class="feather icon-x align-middle"></i>  Supprimer
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                            </div>
                               
                            <div class="checkout-options">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="card-body">
                                           <br>
                                            <div class="detail">
                                                <div class="detail-title detail-total"><h3>Total</h3></div>
                                                <h3><div class="detail-amt total-amt" id="total"><?php echo $total; ?> DH</div></h3>
                                            </div><br>
                                            <?php if (!empty($bon)) { ?>
                                               <div class="btn btn-primary btn-block place-order">Passer la Commande</div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                    <!-- Checkout Place order Ends -->
                    <!-- Checkout Customer Address Starts -->
                
                    <!-- Checkout Customer Address Starts -->
                    <h6><i class="step-icon step feather icon-home"></i>Client</h6>
                    <fieldset class="checkout-step-2 px-0">
                        <section id="checkout-address" class="list-view product-checkout">
                            <div class="card">
						 <br>   
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    Les clients
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="select2-customize-result form-control" name="clien" onchange="client1()" id="select2-customize-result">
                                                        <option value="particulier"> -- particulier -- </option>
                                                        <?php foreach ($clien10 as $key2) {
                                                            if ($key->archive != 'oui') {
                                                             ?>
                                                            <option value="<?php echo $key2->id ; ?>"><?php echo $key2->nom.' '.$key2->pre ; ?></option>
                                                            <?php } } ?>
                                                    </select>
                                              
                                                </fieldset>
                                            </div> 
                                             <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    TVA
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="number" class="form-control" name="TVA" id="tva" value="0">
                                                </fieldset>
                                            </div> 
											<!--<div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                              <br>
                                                </div>
                                               <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="number" name="TVA" class="form-control" id="iconLeft4" placeholder="TVA">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-slack"></i>
                                                    </div>
                                                </fieldset>
                                            </div>-->
                                        </div>
                                    </div>
                                </div>								
                            </div>								
							<div class="customer-card">
                                <div class="card" id="card1" style="height: 160px">
                                   <!-- <div class="card-header">
                                       <h4 class="card-title">John Doe</h4>
                                    </div>-->
                                    <div class="card-content">
                                        <div class="card-body actions" id="style" style="padding-top: 50px">
                                            <div id="card"></div><br>
                                            <div class="btn btn-primary btn-block delivery-address" >Options de paiement</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </fieldset>

                    <!-- Checkout Customer Address Ends -->
					                    <!-- Checkout Customer Address Starts -->
                    <h6><i class="step-icon step feather icon-credit-card"></i>Paiement</h6>
					   <fieldset class="checkout-step-2 px-0">
                        <section id="checkout-address" class="list-view product-checkout">
                            <div class="card">
                              
								<div class="card-content">
                                        <div class="card-body">
                                                   <input type="hidden" value="salam"  class="form-control required" name="fname">
											<ul class="list-unstyled mb-0" id="bdel">
                                        </ul>
                                            
                                            <hr>
                                         
											 <div class="customer-cvv mt-1" id="radio">
                                                
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                              
								
                      
							<div class="amount-payable checkout-options">
                                <div class="card">
                                    <div class="card-header">
                                        <!--<h4 class="card-title"> Détails du paiement</h4>-->
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                            <!-- <div class="col-sm-12 col-12">
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="select2-customize-result form-control" name="fact" >
                                                        <option value="Ticket"> Ticket  </option>
                                                        <option value="Facture"> Facture  </option>
                                                    </select>
                                                </fieldset>
                                            </div> -->
                                            <div class="detail">
                                                <div class="details-title">
                                              <h2>Montant</h2>
                                                </div>
                                                <div class="detail-amt total-amt"><h2 id="mon"><?php echo $total; ?> DH</h2></div>
                                            </div>
											<div id="but"><center><button class="btn btn-primary" style="width: 400px" type="submit">Valider</button></center></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </section>
                    </fieldset>
                  
                    

                    <!-- Checkout Payment Starts -->
                </form>

            </div>
            </div>
            </div>
      

                                                    <!-- Modal -->
                                                    
                              
 
                                          


<?php foreach ($bon as $key) { ?>
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
                                                                    <a href="delete_bon?id=<?php echo $key->id; ?>"><button type="button" class="btn btn-danger" >Supprimer</button></a>
																	<a href="http://localhost/manager/caisse"><button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button></a>
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

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script> 
   <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/jquery.steps.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->
  <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/polyfill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
    <!-- END: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/modal/components-modal.js"></script>
    <!-- BEGIN: Page JS-->
   <!----->  <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/app-ecommerce-shop.js"></script>
    <!-- END: Page JS -->
   <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/number-input.js"></script>
	 <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
	     <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/select/form-select2.js"></script>
         <script>
             var bdel1 = '<li class="d-inline-block mr-2"><fieldset><div class="vs-radio-con"><input type="radio" name="radio1" checked="" onclick="radio(1)" value="1" style="padding-left: 50px"><span class="vs-radio"><span class="vs-radio--border"></span><span class="vs-radio--circle"></span></span><span> Espéce </span></div></fieldset></li>';
             $("#bdel").html(bdel1);
         $('#searsh').keyup(function(){
                           var searsh = $(this).val();
                           if (searsh != '') {
                            $.ajax({
                              url:"ajax_searsh1",
                              method:"POST",
                              data:{searsh:searsh},
                              success:function(data){
                                         $('#ref').html(data);
                                                    }
                            }) 
                           }
                      })
          $('#cat').change(function(){
                        var place = $('#cat').val();

                        if (place != '') {
                           $.ajax({
                              url:"ajax_searsh2",
                              method:"POST",
                              data:{place:place},
                              success:function(data){
                                         $('#ref').html(data);
                                                    }
                            }) 
                        }else{
                            $('#club').html('hello all');
                        }
                     })
          function opp(id){
             var pal = $('#quantité'+id).val();
                 if (pal != '') {
                           $.ajax({
                              url:"ajax_bon",
                              method:"POST",
                              data:{pal:pal,id:id},
                              success:function(data){
                                  $("#quantité"+id).val(data);
                                                    }
                            }) 
                            $.ajax({
                              url:"ajax_total",
                              method:"POST",
                              data:{id:id},
                              success:function(data){
                                  $("#total"+id).html(data+' DH');
                                                    }
                            }) 
                             $.ajax({
                              url:"ajax_total1",
                              method:"POST",
                              data:{id:id},
                              success:function(data){

                                  $("#total").html(data+' DH');
                                  $("#mon").html(data+' DH');

                                                    }
                            }) 
                        }
          }
           function client1(){
             var id = $('#select2-customize-result').val();
                 if (id != 'particulier') {
                           $.ajax({
                              url:"ajax_clien",
                              method:"POST",
                              data:{id:id},
                              success:function(data){
                                  $("#card").html(data);
                                  $("#card1").css("height", "250");
                                  $("#style").css("padding-top", "10px");
                                  var bdel1 = '<li class="d-inline-block mr-2"><fieldset><div class="vs-radio-con"><input type="radio" name="radio1" checked="" onclick="radio(1)" value="1" style="padding-left: 50px"><span class="vs-radio"><span class="vs-radio--border"></span><span class="vs-radio--circle"></span></span><span> Espéce </span></div></fieldset></li><li class="d-inline-block mr-2"> <fieldset><div class="vs-radio-con"><input type="radio" name="radio1" onclick="radio(2)" value="2"><span class="vs-radio"> <span class="vs-radio--border"></span><span class="vs-radio--circle"></span></span><span> Crédit </span></div> </fieldset></li> <li class="d-inline-block mr-2"> <fieldset><div class="vs-radio-con"> <input type="radio" name="radio1" onclick="radio(3)" value="3"><span class="vs-radio"><span class="vs-radio--border"></span><span class="vs-radio--circle"></span></span><span> Par chéque </span></div></fieldset></li>';
                                  $("#bdel").html(bdel1);
                                                    }
                            }) 
                        }else{
                            $("#card").html(' ');
                            $("#card1").css("height", "160");
                            $("#style").css("padding-top", "50px");
                            var bdel1 = '<li class="d-inline-block mr-2"><fieldset><div class="vs-radio-con"><input type="radio" name="radio1" checked="" onclick="radio(1)" value="1" style="padding-left: 50px"><span class="vs-radio"><span class="vs-radio--border"></span><span class="vs-radio--circle"></span></span><span> Espéce </span></div></fieldset></li>';
                                  $("#bdel").html(bdel1);
                        }
          }
          function radio(id){
             if (id == '1') {
                var radio = ' ';
                var button = '<center><button class="btn btn-primary" style="width: 400px" type="submit">Valider</button></center>';
                $("#but").html(button);
             }
             if (id == '2') {
               var radio = '<div class="form-inline"><label class="mb-50" for="card-holder-cvv">Insérer :</label><input type="number" name="credit" onblur="point()" class="form-control reaquired ml-75 mb-50 input-cvv" id="card-holder-cvv" style="padding-right: 50px" ></div>';
               $("#but").html('');
             }
             if (id == '3') {
               var radio = ' <div class="form-row"><div class="col-md-6 col-12 mb-3"><label for="validationTooltip01">RIB</label><input type="text" class="form-control" id="validationTooltip01" name="rib" placeholder="RIB" value="RIB" required> </div><div class="col-md-6 col-12 mb-3"> <label for="validationTooltip02"> Nom de la banque</label><input type="text" class="form-control" id="validationTooltip02" placeholder=" Nom de la banque" name="banque" required></div><div class="col-md-6 col-12 mb-3"><label for="validationTooltip03"> Date de paiement</label> <input type="date" name="date1" class="form-control" id="validationTooltip03" placeholder="Date de paiement " required></div><div class="col-md-6 col-12 mb-3"><label for="validationTooltip03">Montant</label><input type="text" class="form-control" name="check" id="validationTooltip03" placeholder="Montant " required></div></div>';
               var button = '<center><button class="btn btn-primary" style="width: 400px" type="submit">Valider</button></center>';
                $("#but").html(button);
             }   
             $("#radio").html(radio);
          }
          function point() {
              var id = $("#card-holder-cvv").val();
              if (id == 0) {
                id = 'rien';
              }
              var tva = $("#tva").val();
              var clien = $("#select2-customize-result").val();
               $.ajax({
                              url:"ajax_credit",
                              method:"POST",
                              data:{id:id,tva:tva,clien:clien},
                              success:function(data){
                                 var button = '<center><button class="btn btn-primary" style="width: 400px" type="submit">Valider</button></center>';
                                 $("#but").html(button);
                                 if (data == 'non') {
                                         
                                         }else{
                                            Swal.fire({
                                            title: 'Le client dépassé la limite de crédit',
                                            animation: false,
                                            customClass: 'animated tada',
                                            confirmButtonClass: 'btn btn-danger',
                                            buttonsStyling: false,
                                          })
                                            $("#but").html('');
                                         }
                                 }
                            }) 
          }
    </script>
</body>
<!-- END: Body-->

</html>