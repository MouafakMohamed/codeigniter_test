<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuesax admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuesax admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <?php include('logo.php'); ?>
     <link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

 
    <?php include('header.php'); ?>

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-right mb-0">أضف منتج</h2>
                            
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body" >
                <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-4">
                                                <div class="form-group">
                                                    <select class="select2-customize-result form-control search-product" onchange="searsh()" id="select2-customize-result">
                                                        <option value="Nouveau"> منتج جديد </option>
                                                        <?php foreach ($pro as $key) { ?>
                                                        <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?> (<?php echo $key->ref; ?>)</option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                            </div>
                        </div>
                    </section>
                <form action="add_product" method="post" enctype="multipart/form-data">
                <!-- Basic Inputs start -->
                    <section id="input-with-icons">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                                    <center>

                                                            <img id="image" class="img-circle" src="<?php echo base_url(); ?>upload/images/<?php echo $key->image; ?>" alt=""  style="width: 150px;height: 150px; padding : 10px">

                                                    </center>
                                        <div class="row" id="card">
                                           
											 
                                     <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                  تحميل صورة 
                                                </div>
                                               <fieldset class="form-group">
                                                  
                                                    <div class="custom-file">
                                                        <input onchange="show_image.call(this)" name="image" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01"> </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                  اسم المنتج
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="name" class="form-control" id="iconLeft4" placeholder="اسم المنتج">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                         <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                    مرجع/الرمز الشريطي
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="ref" class="form-control" id="iconLeft4" placeholder="    مرجع/الرمز الشريطي">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   صنف
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="form-control" name="cat" id="basicSelect">
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
                                                   علامة التجارية
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="form-control" name="marque" id="basicSelect">
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
                                                   مزود
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="form-control" name="four" id="basicSelect">
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
                                                   كمية
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                       <input type="number" name="quantité" class="form-control" id="iconLeft4" placeholder="">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-list-ol"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
											 	<div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                تاريخ نهاية الصلاحية
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                       <input type="number" name="date" class="form-control" id="iconLeft4" placeholder="12/12/2020">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-calendar"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
											 	 	<div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                            الحد الادنى من السلعة
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                       <input type="number" name="min_stock" class="form-control" id="iconLeft4" placeholder="">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-edit"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
											 
											 
                                        </div>
                                    </div>
                                </div>
                                </div>
                                     <div class="card">
								             <div class="card-content">
                                    <div class="card-body">
                                        <div class="row" id="card1">
                                            
											 
                                     <div class="col-sm-12 col-12" style="margin-bottom:20px">
                                                             <div class="card-header">
								   <ul class="list-unstyled mb-0" >
                                               <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <span class="text-bold-600 font-medium-2 " style="padding: 5px"> التقسيط  </span>
                                                        <input type="radio" onclick="change()" name="radio" value="1">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <span class="text-bold-600 font-medium-2 " style="padding: 5px">الجملة  </span>
                                                        <input type="radio" onclick="change1()" name="radio" value="2">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        
                                                    </div>
                                                </fieldset>
                                            </li>
										 
											</ul>
											</div>
                                            </div> 
                                            </div> 
                                            </div> 
                                            </div> 
                                            </div> <div id="1"></div> 
                        </div>
                       
                        </div>
                    </div>
                </section>
</form>
              

               
                <!-- Input Sizing end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
     <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">  &copy; 2019 Smart Service Team</span> 
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

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
                              url:"ajax_search_produit1111",
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
           var salam = '<div class="card"><div class="card-content"><div class="card-body"><div class="row"><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1"> السعر للدخول </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="prix_e" class="form-control" id="iconLeft4" placeholder="EX: 120dh"><div class="form-control-position"><i class="fa fa-usd"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1"> السعر للخروج </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="prix_1" class="form-control" id="iconLeft4" placeholder="EX: 120dh"><div class="form-control-position"><i class="fa fa-usd"></i></div> </fieldset></div><div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"><br></div><center>  <button type="submit" name="sub" class="btn btn-primary">  <i class="feather icon-file" style="margin-right:10px"></i> سجل</button></center></div></div></div></div></div>';
        $('#1').html(salam);
       // alert('salam');
         
        }
        function change1() {
           var salam = ' <div class="card"><div class="card-content"><div class="card-body"><div class="row"><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1"> السعر للدخول  </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="prix_e" class="form-control" id="iconLeft4" placeholder="EX: 120dh"><div class="form-control-position"><i class="fa fa-usd"></i></div></fieldset></div><div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1">سعر الجملة </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="prix_3" class="form-control" id="iconLeft4" placeholder="EX: 120dh"><div class="form-control-position"><i class="fa fa-usd"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1">سعر الجملة البسيطة  </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="prix_2" class="form-control" id="iconLeft4" placeholder="EX: 120dh"><div class="form-control-position"><i class="fa fa-usd"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1"> سعر التقسيط  </div><fieldset class="form-group position-relative input-divider-right"><input type="text" name="prix_1" class="form-control" id="iconLeft4" placeholder="EX: 120dh"><div class="form-control-position"><i class="fa fa-usd"></i></div></fieldset></div> <div class="col-sm-12 col-12"><div class="text-bold-600 font-medium-2 mb-1"><br></div><center>  <button type="submit" name="sub" class="btn btn-primary">  <i class="feather icon-file" style="margin-right:10px"></i>   سجل</button></center></div></div></div></div></div>';
        $('#1').html(salam);
       // alert('salam');
         
        }
   </script>

</body>
<!-- END: Body-->

</html>