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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->
	<!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/charts/apexcharts.css">
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
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/card-analytics.css">
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
                            
                            <h2 class="content-header-title float-right mb-0">جدول تتبع مدفوعات الزبناء</h2>
                          
                        </div>
                    </div>
                </div>
              
            </div>
             <?php foreach ($clien as $key) { ?>
            <div class="content-body" dir="rtl">
			  <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
							  <section id="profile-info">
                        <div class="row">
               
                         <!--<div class="col-xl-4 col-md-4 col-sm-12 profile-card-1">
                            <div class="card"> 
							  <div class="mt-1" style="text-align:right;margin-right:10px">
                                             <a href="<?php echo base_url(); ?>assets/modifier_profil.html"> <button type="button" class="btn btn-sm btn-icon btn-primary mr-25 "><i class="feather icon-edit"></i></button></a> 
                                          
                                        </div> 
                             <div class="card-body text-center">
                                   <div class="avatar avatar-xl ">
                                        <img class="img-fluid" src="<?php echo base_url(); ?>assets/app-assets/images/portrait/small/avatar-s-20.png" alt="img placeholder" style="width:120px;height:120px">
                                    </div>
                                </div>
							 
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <h4>Zoila Legore</h4><br>
                                        
									   <div class="card-content">
                                    <div class="card-body">
                                        
                                        <div class="avatar bg-primary">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-facebook"></i>
                                                 
                                            </div>
                                        </div>
                                        <div class="avatar bg-info">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-twitter"></i>
                                                
                                            </div>
                                        </div>
                                        <div class="avatar bg-success">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-instagram"></i>
                                                
                                            </div>
                                        </div>
										 <div class="avatar bg-danger">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-youtube"></i>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                       <br><br>     <br><br>
                                      
                                    </div>
                                </div>
                            </div>
							                        
                              
                            
                             
               
               
                      
                        </div>-->
                         <div class="col-xl-4 col-md-4 col-sm-12 profile-card-1">
                            <div class="card"> 
                             <!-- <div class="mt-1" style="text-align:right;margin-right:10px">
                                             <button type="button" class="btn btn-sm btn-icon btn-primary mr-25" data-toggle="modal" data-target="#inlineForm"><i class="feather icon-edit"></i></button>
                                        </div> -->
                                <div class="card-header mx-auto">
                                    <div class="avatar avatar-xl">
                                        <img class="img-fluid" src="<?php echo base_url(); ?>upload/clien/<?php echo $key->image; ?>" alt="img placeholder" style="width:155px;height:155px">
                                    </div>
                                </div>
                             
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <h2><?php echo $key->nom . ' ' . $key->pre; ?></h2><br>
                                        
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
                                        <th>اسم الشركة </th>
                                        <th><?php echo $key->nom_e; ?></th>
                                    </tr>
                              
                                
                                    <tr>
                                        <td> عنوان </td>
                                        <th><?php echo $key->adress; ?></th>
                                       
                                    </tr>
                                    <tr>
                                        <td>هاتف</td>
                                        <th><?php echo $key->tele; ?></th>
                                       
                                    </tr>
                                    <tr>
                                        <td>البريد الإلكتروني</td>
                                        <th><?php echo $key->mail; ?></th>
                                       
                                    </tr>
                                    <tr>
                                        <td>شكل قانوني </td>
                                        <td><?php echo $key->type; ?></td>
                                        
                                    </tr>  
									<tr>
                                        <td>رقم RC</td>
                                        <td><?php echo $key->num_rc; ?></td>
                                        
                                    </tr>
                              <tr>
                                        <td>رقم ICE</td>
                                       <td><?php echo $key->num_ice; ?></td>
                                        
                                    </tr>
                               <tr>
                                        <td>رقم IF</td>
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
			   <section id="dashboard-ecommerce">
                    <div class="row">
                        <div class="col-lg-3 col-sm-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                  
                                    <h2 class="text-bold-700 mt-1"> <?php echo $key->credit; ?> dh</h2>
                                     <p class="mb-0">سقوف الائتان </p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-1"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                  <?php $get = $this->Model->get_by('bons','clien',$key->id);
                                        $total = 0;
                                        $total1 = 0;
                                            foreach ($get as $key1) {
                                                $get1 = $this->Model->get_by('bonat','id_bons',$key1->id_bons);
                                                foreach ($get1 as $key2) {
                                                   $tot = $key2->quantité*($key2->prix_s-$key2->prix_e);
                                                   
                                                   $total = $total+$tot;

                                                }
                                                $tot1 = $key1->credit+$key1->check;
                                                $total1 = $total1+$tot1;
                                            }
                                  ?>
                                    <h2 class="text-bold-700 mt-1">  <?php echo $total; ?> dh</h2>
                                   <p class="mb-0">هامش الربح</p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                   
                                    <h2 class="text-bold-700 mt-1"><?php echo $total1; ?> dh</h2>
                                    <p class="mb-0">مجموع الائتمان </p>
                                </div>
                                <div class="card-content">
                                    <div id="line-area-chart-3"></div>
                                </div>
                            </div>
                        </div>
                     
                    </div>
               </section>
                  
      

                <!-- Column selectors with Export Options and print table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
 
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
												  <tr>
                                                        <th>تاريخ</th>
                                                        <th>العملية</th>
                                                      
                                                     
                                                        
                                                        <th>التدفق</th>
                                                        <th>ائتمان</th>
                                                        <th> نوع العملية</th>
														   <th>رقم الفاتورة</th>
                                                        <th>المجموع</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                     <?php foreach ($get as $key3) { ?>
                                                    <tr>
                                                        <td><?php echo $key3->date; ?></td>
                                                        <td> Paiement</td>
                                                        <td><b><?php echo $key3->espece; ?> DH</b></td>
                                                        <?php $salam = $key3->credit+$key3->check; ?>
                                                       <td><b><?php echo $salam; ?> DH</b></td>
                                                         <td><?php echo $key3->type; ?></td>
                                                         <td> <?php echo $key3->id; ?></td>
                                                         <td><?php echo $key3->total; ?> Dh</td>
                                                    </tr>
                                                 <?php } ?>
                                                   
                                               
                                                </tbody>
                                              
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                  <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33">Inline Login Form </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="update_image" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                 <fieldset class="form-group">
                                                                    <label for="basicInputFile" style="float: right">الصورة : </label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                        <label class="custom-file-label" for="inputGroupFile01">اختر صورة </label>
                                                                    </div>
                                                                </fieldset>
                                                                 <label  style="float: right">الاسم العائلي : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="nom" value="<?php echo $key->nom; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label  style="float: right">الاسم الشخصي : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="pre" value="<?php echo $key->pre; ?>" class="form-control">
                                                                </div>
                                                                 <label  style="float: right">الفيسبوك : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->facebook; ?>" name="facebook" class="form-control">
                                                                </div>
                                                                 <label  style="float: right"> تغريد : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->twitter; ?>" name="twitter" class="form-control">
                                                                </div>
                                                                 <label  style="float: right">انستغرام
: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->insta; ?>" name="insta" class="form-control">
                                                                </div>

                                                                <label  style="float: right">يوتيوب : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->youtube; ?>" name="youtube" class="form-control">
                                                                </div><button type="submit" class="btn btn-primary">تعديل</button>
                                                            </div>
                                                            <div class="modal-footer">
                                                                
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
                                                        <form action="update_clien" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                  <label>اسم الشركة : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="nom_e" value="<?php echo $key->nom_e; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label>العنوان : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="adress" value="<?php echo $key->adress; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label>الهاتف : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="tele" value="<?php echo $key->tele; ?>" class="form-control">
                                                                </div>
                                                                 <label>البريد الإلكتروني : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->mail; ?>" name="mail" class="form-control">
                                                                </div>
                                                                 <label>الشكل القانوني : </label>
                                                                <div class="form-group">
                                                                    <select name='type' class='form-control' id='basicSelect' required>
                                                                        <option><?php echo $key->type; ?></option>
                                                                        <option> شركة مجهولة الاسم (S.A) </option>
                                                                        <option>شركة مجهولة الاسم مبسطة (SAS)</option>
                                                                        <option>شركة ذات مسؤولية محدودة  (SARL) </option>
                                                                        <option>شركة باسم مشترك (SNC)</option>
                                                                        <option>شراكة محدودة (SCS)</option>
                                                                        <option>شراكة محدودة من الأسهم (SCA)</option>
                                                                        <option>شركة الاشخاص</option>
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
                <!-- Column selectors with Export Options and print table -->

 
                <!--/ Scroll - horizontal and vertical table -->

            </div>
        </div>
    </div>
    <?php } ?>
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