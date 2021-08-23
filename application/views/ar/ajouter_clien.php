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
      <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/sweetalert2.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
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
                            <h2 class="content-header-title float-left mb-0" style="padding-right: 20px"><b>الزبائن </b></h2>
                            
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
                                                        <input type="radio" onclick="change()" name="radio" value="1">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span style="padding: 5px"><b>شخص    </b></span>
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
                                                        <span style="padding: 5px"><b>شركة </b></span>
                                                    </div>
                                                </fieldset>
                                            </li>
                                            <li class="d-inline-block mr-2">
                                                <fieldset>
                                                    <div class="vs-radio-con vs-radio-primary">
                                                        <input type="radio" onclick="change2()" name="radio" value="3">
                                                        <span class="vs-radio">
                                                            <span class="vs-radio--border"></span>
                                                            <span class="vs-radio--circle"></span>
                                                        </span>
                                                        <span style="padding: 5px"><b>مقاول ذاتي </b></span>
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
                                                <div id="1"></div>
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
                                        <div class="row">
                                          <div class="col-sm-12 col-12">
                                               
                                              <center>  <button type="submit" class="btn btn-primary">  <i class="feather icon-file" style="margin-left:10px"></i>إضافة</button></center> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                </section>
                <!-- Input with Icons end -->
  
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
           var salam = '<div class="row"> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px">  تحميل صورة  </div> <fieldset class="form-group"> <div class="custom-file"> <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">  <label class="custom-file-label" for="inputGroupFile01">  </label>  </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px">  الاسم العائلي </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" name="nom" class="form-control" id="iconLeft4" placeholder="الاسم العائلي " required> <div class="form-control-position"> <i class="feather icon-user"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px"> الاسم الشخصي    </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" name="pre" class="form-control" id="iconLeft4" placeholder="الاسم الشخصي  " required> <div class="form-control-position"> <i class="feather icon-user"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 520px">  عنوان  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" name="adress" class="form-control" id="iconLeft4" placeholder="عنوان "> <div class="form-control-position"> <i class="feather  icon-map-pin"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 520px">   هاتف  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="number" name="tele" class="form-control" id="iconLeft4" placeholder="هاتف" required> <div class="form-control-position"> <i class="feather icon-phone"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 400px">   الحد الاقصى للاتمان  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="number" name="credit" class="form-control" id="iconLeft4" placeholder="الحد الاقصى للاتمان " required> <div class="form-control-position"> <i class="feather  icon-arrow-up-right"></i> </div> </fieldset> </div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px"> البريد الإلكتروني </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="Email"><div class="form-control-position"><i class="feather icon-mail"></i></div></fieldset></div> </div>';
             var salam5 = '<div class="card-header"><h4 class="card-title">للاتصال</h4><br> </div><hr><div class="card-content"><div class="card-body"><form class="form form-horizontal"><div class="form-body"><div class="row"><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> الفيسبوك </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="الفيسبوك"><div class="form-control-position"><i class="feather icon-facebook"></i> </div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> تويتر </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="تغريد"><div class="form-control-position"><i class="feather  icon-twitter"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> انستغرام </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="انستغرام"><div class="form-control-position"><i class="feather icon-instagram"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> يوتيوب </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="يوتيوب"><div class="form-control-position"><i class="fa fa-youtube"></i></div></fieldset></div></div></div></form></div></div>';
           $('#2').html(salam5);
        $('#1').html(salam);
       // alert('salam');
         
        }
        function change1() {
            var salam1 = "<div class='row'><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 450px'>تحميل صورة  </div><fieldset class='form-group'><div class='custom-file'><input type='file' name='image1' class='custom-file-input' id='inputGroupFile01'><label class='custom-file-label' for='inputGroupFile01'>Photo</label> </div></fieldset> </div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 450px'>الاسم العائلي  </div><fieldset class='form-group position-relative input-divider-right'><input type='text' class='form-control' name='nom1' id='iconLeft4' placeholder='الاسم العائلي  ' required><div class='form-control-position'> <i class='feather icon-user'></i></div></fieldset> </div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 450px'> الاسم الشخصي  </div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='pre1' class='form-control' id='iconLeft4' placeholder='الاسم الشخصي  ' required> <div class='form-control-position'><i class='feather icon-user'></i></div></fieldset></div><div class='col-sm-6 col-12'>  <div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 450px'>اسم الشركة </div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='nom_e' class='form-control' id='iconLeft4' placeholder='اسم الشركة ' required><div class='form-control-position'><i class='feather icon-globe'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 450px'>الشكل القانوني </div><fieldset class='form-group position-relative input-divider-right'><select name='type' class='form-control' id='basicSelect' required><option> شركة مجهولة الاسم (S.A) </option><option>شركة مجهولة الاسم مبسطة (SAS)</option><option>شركة ذات مسؤولية محدودة  (SARL) </option><option>شركة باسم مشترك (SNC)</option><option>شراكة محدودة (SCS)</option><option>شراكة محدودة من الأسهم (SCA)</option><option>شركة الاشخاص</option></select><div class='form-control-position'><i class='feather icon-file-text'></i></div></fieldset></div> <div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 380px'>رقم التسجيل التجاري </div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='num_rc' class='form-control' id='iconLeft4' placeholder='رقم التسجيل التجاري ' required><div class='form-control-position'><i class='feather icon-slack'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 350px'>رقم التعريف المشترك للشركة  </div> <fieldset class='form-group position-relative input-divider-right'><input type='text' name='num_ice' class='form-control' id='iconLeft4' placeholder='رقم التعريف المشترك للشركة ' required><div class='form-control-position'><i class='feather icon-slack'></i></div></fieldset></div> <div class='col-sm-6 col-12'>  <div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 420px'> رقم التعريف المالي  </div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='num_if' class='form-control' id='iconLeft4' placeholder='رقم التعريف المالي '><div class='form-control-position'><i class='feather icon-slack'></i> </div> </fieldset> </div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 500px'> العنوان</div> <fieldset class='form-group position-relative input-divider-right'> <input type='text' name='adress1' class='form-control' id='iconLeft4' placeholder='العنوان'><div class='form-control-position'><i class='feather  icon-map-pin'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 500px'>الهاتف</div><fieldset class='form-group position-relative input-divider-right'><input type='text' name='tele1' class='form-control' id='iconLeft4' placeholder='الهاتف' required><div class='form-control-position'><i class='feather icon-phone'></i></div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 400px'>الحد الاقصى للاتمان</div> <fieldset class='form-group position-relative input-divider-right'> <input type='text' name='credit1' class='form-control' id='iconLeft4' placeholder='الحد الاقصى ' required> <div class='form-control-position'><i class='feather  icon-arrow-up-right'></i> </div></fieldset></div><div class='col-sm-6 col-12'><div class='text-bold-600 font-medium-2 mb-1' style='padding-left: 450px'> البريد الإلكتروني </div><fieldset class='form-group position-relative input-divider-right'><input type='text' class='form-control' id='iconLeft4' placeholder='Email'><div class='form-control-position'><i class='feather icon-mail'></i></div></fieldset></div> </div>";
          var salam5 = '<div class="card-header"><h4 class="card-title">للاتصال</h4><br> </div><hr><div class="card-content"><div class="card-body"><form class="form form-horizontal"><div class="form-body"><div class="row"><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> الفيسبوك </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="الفيسبوك"><div class="form-control-position"><i class="feather icon-facebook"></i> </div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> تويتر </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="تغريد"><div class="form-control-position"><i class="feather  icon-twitter"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> انستغرام </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="انستغرام"><div class="form-control-position"><i class="feather icon-instagram"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> يوتيوب </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="يوتيوب"><div class="form-control-position"><i class="fa fa-youtube"></i></div></fieldset></div></div></div></form></div></div>';
           $('#2').html(salam5);
$('#1').html(salam1);
           // alert('salam1');
        }
        function change2() {

           var salam2 = ' <div class="row"><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px"> تحميل صورة   </div> <fieldset class="form-group"> <div class="custom-file"><input type="file" name="image2" class="custom-file-input" id="inputGroupFile01"><label class="custom-file-label" for="inputGroupFile01">Photo</label></div></fieldset> </div> <div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px"> الاسم العائلي   </div> <fieldset class="form-group position-relative input-divider-right">  <input type="text" class="form-control" name="nom2" id="iconLeft4" placeholder="الاسم العائلي  " required>  <div class="form-control-position"> <i class="feather icon-user"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12">  <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px">  الاسم الشخصي  </div> <fieldset class="form-group position-relative input-divider-right">  <input type="text" class="form-control" name="pre2" id="iconLeft4" placeholder="الاسم الشخصي " required> <div class="form-control-position">  <i class="feather icon-user"></i>  </div> </fieldset>  </div> <div class="col-sm-6 col-12">  <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px">  اسم الشركة   </div> <fieldset class="form-group position-relative input-divider-right">  <input type="text" class="form-control" name="nom_e1" id="iconLeft4" placeholder="اسم الشركة " required> <div class="form-control-position">  <i class="feather icon-globe"></i>  </div> </fieldset>  </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 400px"> رقم التسجيل التجاري   </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" class="form-control" name="num_rc1" id="iconLeft4" placeholder="رقم التسجيل التجاري " required>  <div class="form-control-position"> <i class="feather icon-slack"></i> </div> </fieldset> </div>  <div class="col-sm-6 col-12">  <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> العنوان  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" class="form-control" name="adress2" id="iconLeft4" placeholder="العنوان ">  <div class="form-control-position"> <i class="feather  icon-map-pin"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> الهاتف  </div> <fieldset class="form-group position-relative input-divider-right"> <input type="text" class="form-control" name="tele2" id="iconLeft4" placeholder="الهاتف " required>  <div class="form-control-position"> <i class="feather icon-phone"></i> </div> </fieldset> </div> <div class="col-sm-6 col-12"> <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 420px"> الحد الاقصى للاتمان </div>  <fieldset class="form-group position-relative input-divider-right">  <input type="text" class="form-control" name="credit2" id="iconLeft4" placeholder="الحد الاقصى للاتمان " required> <div class="form-control-position"> <i class="feather  icon-arrow-up-right"></i> </div> </fieldset> </div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 450px"> البريد الإلكتروني </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="Email"><div class="form-control-position"><i class="feather icon-mail"></i></div></fieldset></div> </div>';
           var salam5 = '<div class="card-header"><h4 class="card-title">للاتصال</h4><br> </div><hr><div class="card-content"><div class="card-body"><form class="form form-horizontal"><div class="form-body"><div class="row"><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> الفيسبوك </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="الفيسبوك"><div class="form-control-position"><i class="feather icon-facebook"></i> </div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> تويتر </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="تغريد"><div class="form-control-position"><i class="feather  icon-twitter"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> انستغرام </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="انستغرام"><div class="form-control-position"><i class="feather icon-instagram"></i></div></fieldset></div><div class="col-sm-6 col-12"><div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 500px"> يوتيوب </div><fieldset class="form-group position-relative input-divider-right"><input type="text" class="form-control" id="iconLeft4" placeholder="يوتيوب"><div class="form-control-position"><i class="fa fa-youtube"></i></div></fieldset></div></div></div></form></div></div>';
           $('#2').html(salam5);
            $('#1').html(salam2);
            // alert('salam2');

        }
    </script>
</body>
<!-- END: Body-->

</html>