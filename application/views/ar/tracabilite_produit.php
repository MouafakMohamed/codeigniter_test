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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/file-uploaders/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/extensions/dataTables.checkboxes.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/plugins/file-uploaders/dropzone.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/data-list-view.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css-rtl/style.css">
    <!-- END: Custom CSS-->
<style type="text/css">
    .btn-outline-primary{
        display: none;
    }
</style>
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
                            <h2 class="content-header-title float-right mb-0">البضاعة</h2>
                             
                        </div>
                    </div>
                </div>
             
            </div>
             <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-4">
                                 <div class="form-group">
                                    <select class="select2-customize-result form-control search-product" onchange="searsh()" id="select2-customize-result">
                                        <option value=""> </option>
                                        <?php foreach ($produit as $key) { ?>
                                        <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </section>
            <div class="content-body">
 
                <!-- Data list view starts -->
                <section id="data-thumb-view" class="data-thumb-view-header">
				
				 
                         
                              
                    <!-- dataTable starts -->
                    <div class="table-responsive">
                        <table class="table data-thumb-view" dir="rtl">
                             <thead>
                                <tr>
                                     <th>الصورة</th>
                                     <th>اسم الزبون </th>
                                    <th>الهاتف</th>
                                    <th style="width: 30%">العنوان</th>
                                    <th>العدد </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $con = array();
                    foreach ($clien as $key2) {
                         
                         
                         $bons = $this->Model->get('bons');
                            
                         $quantité = 0;

                         foreach ($bons as $key1) { 

                               if ($key1->clien == $key2->id) {
                               
                                   $bonat = $this->Model->get_by('bonat','id_bons',$key1->id_bons);
                                   foreach ($bonat as $key3) {
                                       if ($key3->pro == $pro) {
                                           $quantité = $quantité+$key3->quantité;
                                       }
                                   }
                                }
                        } 
                        ?>
                         <tr>
                                     <td class="product-img"><img src="<?php echo base_url(); ?>upload/clien/<?php echo $key2->image; ?>" style="width: 100px;height: 100px" alt="Img placeholder">
                                       <td class="product-name"><?php echo $key2->nom.' '.$key2->pre; ?> </td>
                                       <td class="product-name"><?php echo $key2->tele ; ?> </td>
                                       <td class="product-name"><?php echo $key2->adress ; ?> </td>
                                   
                                    <td class="product-name"><h3><b><?php echo $quantité; ?></b></h3></td>
                                </tr>
<?php
                    } if (!empty($con)) {
                        rsort($con);
                         foreach ($con as $key => $value) {
                             echo $key.' ==> '.$value.'<br>';
                         }
                    }?> 
                            </tbody>
                        </table>
                    </div>
                    <!-- dataTable ends -->

       
                    <!-- add new sidebar ends -->
                </section>
                <!-- Data list view end -->

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
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/dropzone.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
 
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/ui/data-list-view.js"></script>

    <script type="text/javascript">
        function searsh() {
            var searsh = $('#select2-customize-result').val();
            window.location.href = "<?php echo base_url().'tracabilite_produit?id=' ; ?>" + searsh; 
        }
    </script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>