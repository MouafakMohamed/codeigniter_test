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
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
      <!-- BEGIN: Vendor CSS-->
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
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style-rtl.css">
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
                            <h2 class="content-header-title float-right mb-0">الموردين</h2>
                            
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body"dir="rtl">
                <!-- Basic Inputs start -->
    

                <!-- Input with Icons start -->
              
                <!-- Input with Icons end -->
  <div class="row" id="table-borderless">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            <a href="ajouter_fournisseur"  style="float:right"><button type="button" class="btn btn-outline-primary mb-2">  <i class="feather icon-plus"></i>إضافة مورد</button></a>
                            </div>
                            <div class="card-content">
                                    <div class="card-body card-dashboard">
                                      
                                        <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                            <tr>
                                                <th>#</th>
                                                 <th>صور</th>
                                                <th>الاسم العائلي</th>
                                                <th>الاسم الشخصي</th>
                                                <th>اسم الشركة</th>
                                              
                                                   <th> هاتف</th>
                                                
                                             
                                                <th>تعديل </th>
                                                <th>مسح </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                              <?php foreach ($res1 as $key) { 
                                                if ($key->archive != 'oui') { ?>
                                            <tr>
                                            <td>    <div class="avatar mr-1 ">
                                            <img src="<?php echo base_url(); ?>upload/fournisseur/<?php echo $key->image; ?>" alt="avtar img holder" height="32" width="32">
                                              </div></td>
                                                <th scope="row"><?php echo $key->id; ?></th>
                                                <td><?php echo $key->nom; ?></td>
                                                <td><?php echo $key->pre; ?></td>
                                                <td><?php echo $key->nom_e; ?></td>
                                                <td><?php echo $key->tele; ?></td>
                                                <td><a href="fournisseur_detail?id=<?php echo $key->id; ?>"><h3><i class="fa fa-eye"></i></h3></a></td>  
                                                 <td> <h3 style="color: red"> <i class="feather icon-x"  data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></td>
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
                <?php foreach ($res1 as $key) { ?>
                    <div class="modal fade text-right" id="danger<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
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
															    <center> <h1 style="font-size:30px">  هل انت متأكد?</center> 
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="delete_four?id=<?php echo $key->id; ?>"><button type="button" class="btn btn-danger" style="margin-left:10px">حذف </button></a>
																	<button type="button" class="btn btn-outline-danger" data-dismiss="modal">إلغاء</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                             
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

     <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables-rtl.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- END: Page Vendor JS-->
<script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
</body>
<!-- END: Body-->

</html>