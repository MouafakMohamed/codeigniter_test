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

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/card-analytics.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/../assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

 <?php include('header.php'); ?>

        <div class="content-wrapper" dir="rtl">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                      <section id="input-with-icons">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                                      <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                             التصنيف
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                   <select class="form-control" id="kaki" id="add-type">
                                                        <option></option>
                                                        <option value="tous">جميع التصنيفات</option>
                                                        <?php foreach ($query as $key) { 
                                                            if ($key->archive != 'oui') {?>
                                                                <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>
                                                                <?php } } ?>
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="fa fa-tag"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                              <br>
                                                </div>
                                                <h3 style="text-align: center"><b id="kaki1"></b></h3>
                                            </div>
                                        </div>
                                    </div> 
                                                 
                        </div>
                    </div>
                </section>
                      <section id="input-with-icons">
                    <div class="row match-height">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="row">
                                            
                                                  <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1" style="text-align: right">
                                    من

                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <input type="date" id="date1" onchange="searsh();" class="form-control " />
                                                    <div class="form-control-position">
                                                        <i class="fa fa-search"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
                                                  <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="text-align: right">
                                    الى

                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="date" id="date2" onchange="searsh();" class="form-control " />
                                                    <div class="form-control-position">
                                                        <i class="fa fa-tag"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
                                            <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                              <br>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        </div>
                    </div>
                </section>
                <section id="dashboard-ecommerce">
                    <div class="row" id="ok">
                        <div class="col-lg-3 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >0 DH</h2>
                                        <p class="mb-0" >حجم المعاملات</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-sm-6 col-12">
                              <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >0 DH</h2>
                                        <p class="mb-0" > رأس مال</p>
                                    </div>
                                    <div class="avatar bg-rgba-success p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-money text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                              <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >0 DH</h2>
                                        <p class="mb-0" >أرباح</p>
                                    </div>
                                    <div class="avatar bg-rgba-warning p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-tachometer text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >0</h2>
                                        <p class="mb-0" >الفواتير</p>
                                    </div>
                                    <div class="avatar bg-rgba-info p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-files-o text-info font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                 
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
                                                        <th>الزبون</th>
                                                        <th>تاريخ</th>
                                                        <th>المجموع</th>
                                                        <th>خصم.</th>
                                                        <th>فاتورة</th>
                                                    </tr>
                                                </thead>
                                               <tbody id="body">
                                                    
                                                </tbody> 
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
   
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
     <script>
         $('#cat').change(function(){
                        var place = $('#cat').val();
                           if (place != '') {
                           $.ajax({
                              url:"salam",
                              method:"POST",
                              data:{place:place},
                              success:function(data){
                                         $('#réf').html(data);
                                                    }
                            }) 
                        } else{
                            $('#club').html('hello all');
                        }
                     })
                     
         $('#searsh').keyup(function(){
                           var searsh = $(this).val();
                           if (searsh != '') {
                            $.ajax({
                              url:"searsh1",
                              method:"POST",
                              data:{searsh:searsh},
                              success:function(data){
                                         $('#réf').html(data);
                                                    }
                            }) 
                           }
                      })
            $('#kaki').change(function(){
                var kaki = $('#kaki').val();
                        if (kaki != '') {
                          $.ajax({
                              url:"ajax_kaki",
                              method:"POST",
                              data:{kaki:kaki},
                              success:function(data){
                                         $('#kaki1').html(data);
                                                    }
                                  }) 
                             }
            })
         function searsh() {
            var date1 = $('#date1').val();
            var date2 = $('#date2').val();
            if (date1 != '') {
                if (date2 != '') {
                          $.ajax({
                              url:"date3",
                              method:"POST",
                              data:{date1:date1,date2:date2},
                              success:function(data){
                                         $('#body').html(data);
                                                    }
                            }) 
                          $.ajax({
                              url:"date101",
                              method:"POST",
                              data:{date1:date1,date2:date2},
                              success:function(data){
                                         $('#ok').html(data);
                                                    }
                            }) 
            }
            }
              
         }
    </script>
</body>
<!-- END: Body-->

</html>