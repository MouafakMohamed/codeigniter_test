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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/charts/apexcharts.css">
    <!-- END: Vendor CSS-->
 <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/pickers/pickadate/pickadate.css">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/themes/semi-dark-layout.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/forms/select/select2.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/card-analytics.css">
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
                            <h2 class="content-header-title float-right mb-0">خدمة ما بعد البيع</h2>
                           
                        </div>
                    </div>
                </div>
                
               <!-- <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                       
                          <button type="button" class="btn btn-outline-primary btn-block " data-toggle="modal" data-target="#inlineForm" ><i class="fa fa-plus" style="margin-right:20px"></i>اضف شكاية </button>
                        
                    </div>
                </div>-->
                </div>
        
            <div class="content-body" dir="rtl">
                <!-- Dashboard Ecommerce Starts -->
					 
                         <section id="headers">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                             
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                     
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered complex-headers">
                                                <thead>
                                                   
                                                    <tr>
                                                        <th>الصور</th>
                                                      
                                                        <th> المرجع /المنتج</th>
                                                        <th>تاريخ الشكاية</th>
													 
                                                        <th  style="width:40%">ملاحظة</th>
                                                         
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                       <?php foreach ($SAV as $key) { ?>
                                                    <tr>
                                                        <td><center>    
                                                            <div class="avatar mr-1 ">
                                                                <img src="<?php echo base_url(); ?>upload/produits/<?php echo $key->image; ?>" alt="avtar img holder" height="32" width="32">
                                                            </div>
                                                        </center></td>
                                                        <td><center><?php $pro = $this->Model->get_by('produit','id',$key->pro);
                                                        foreach ($pro as $key1) {
                                                              echo $key1->name;
                                                          }  ?></center></td>
                                                        <td><center><?php echo $key->date; ?></center></td>
                                                        <td><center><?php echo $key->note; ?></center></td>
                                                        <!--<td>  <button type="button" class="btn btn-outline-primary mb-2"  >  <i class="fa fa-print"></i></button></td>-->
                                                    </tr>
                                                    <?php } ?>

                                                    
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
                     
                <!-- Dashboard Ecommerce ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->           

                                            <!-- Modal -->
                                            <div class="modal fade text-right" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true" dir="rtl">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="add_SAV" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                <label>صورة: </label>
                                                                
                                                                   <fieldset class="form-group">
                                                                        <div class="custom-file">
                                                                            <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                            <label class="custom-file-label" for="inputGroupFile01">صورة</label>
                                                                        </div>
                                                                    </fieldset>
																<label> المرجع /المنتج: </label>
                                                                <div class="form-group">
                                                                     <select class="select2-customize-result form-control"  name="pro" id="select2-customize-result" required="">
                                                                        <option></option>
                                                                      <?php $pro = $this->Model->get('produit');
                                                                      foreach ($pro as $key2) { ?>
                                                                        <option value="<?php echo $key2->id; ?>"><?php echo $key2->name; ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>
																<label>تاريخ الشكاية: </label>
                                                                <div class="form-group">
                                                                    <input type="date" placeholder="تاريخ الشكاية" class="form-control">
                                                                </div>
																<label>ملاحظة: </label>
                                                                <div class="form-group">
                                                                      <textarea class="form-control" name="note" id="basicTextarea" rows="3" ></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="sub" class="btn btn-primary">  اضافة</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->
 
	 <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
	 <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pickers/dateTime/pick-a-datetime.js"></script>
  <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
	  <!-- BEGIN: Page Vendor JS-->
   <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/modal/components-modal.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/select/form-select2.js"></script>
</body>
<!-- END: Body-->

</html>