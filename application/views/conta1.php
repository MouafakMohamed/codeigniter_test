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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
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

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <?php include('header.php'); ?>

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                </div>
            </div>
            <div class="content-body">
                <!-- Basic tabs start -->

                <!-- Nav Filled Starts -->
                <section id="nav-filled">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="card-header">
                                    <h4 class="card-title">Les charges</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Nav tabs -->

                                        <!-- Tab panes -->
                                        <div class="tab-content pt-1">
                                            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                                  <section id="basic-datatable">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="card">
                        <div class="row mt-1">
                            <div class="col-sm-3" style="float: left;">
                                 <div class="form-group">
                                    <select class="select2-customize-result form-control search-product" onchange="change()" id="select2-customize-result">
                                        <option value="tous">Toutes les dépenses</option>
                                         <?php  
                                                                             $date1 = explode('-', date('Y-m-d'));
                                                                             $date1 = $date1[1];
                                                                             for ($i=1; $i <= $date1; $i++) { 
                                                                                if ($i == '1') {
                                                                                  $b = 'Janvier';
                                                                                }
                                                                                elseif ($i == '2') {
                                                                                    $b = 'Fevrier';
                                                                                }
                                                                                elseif ($i == '3') {
                                                                                    $b = 'Mars';
                                                                                }
                                                                                elseif ($i == '4') {
                                                                                    $b = 'Avril';
                                                                                }
                                                                                elseif ($i == '5') {
                                                                                    $b = 'Mai';
                                                                                }
                                                                                elseif ($i == '6') {
                                                                                    $b = 'Juin';
                                                                                }
                                                                                elseif ($i == '7') {
                                                                                    $b = 'Juillet';
                                                                                }
                                                                                elseif ($i == '8') {
                                                                                    $b = 'Août';
                                                                                }
                                                                                elseif ($i == '9') {
                                                                                    $b = 'Septembre';
                                                                                }
                                                                                elseif ($i == '10') {
                                                                                    $b = 'Octobre';
                                                                                }
                                                                                elseif ($i == '11') {
                                                                                    $b = 'Novembre';
                                                                                }elseif ($i == '12') {
                                                                                    $b = 'Décembre';
                                                                                }
                                                                             echo '<option value="'.$i.'"><center>'.$b.'</center></option>';    
                                                                                   }
                                                                            ?>
                                        <?php foreach ($produit as $key) { ?>
                                        <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3" style="float: left;">
                                 <div class="form-group">
                                     <button type="button" style="width: 200px"  class="btn btn-success float-right" data-toggle="modal" data-target="#large">إضافة مصاريف </button>
                                </div>
                            </div>
                        </div>
                    </section>
                                                                <div class="card-content">
                                                                    <div class="card-body card-dashboard">
                                                                        <div class="table-responsive">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>ID</th>
                                                                                        <th>Nom de la charge</th>
                                                                                        <th>montant </th>
                                                                                        <th>Date</th>
                                                                                        <th>Modifier</th>
                                                                                        <th>Suprimer</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="card">
                                                                                    <?php
                                                                                         foreach ($query as $key) {
                                                                                         if ($key->archive != 'oui') {  ?>
                                                                                        <tr>
                                                                                            <td><?php echo $key->id; ?></td>
                                                                                             <td><?php echo $key->name; ?></td>
                                                                                             <td><?php echo $key->montant; ?> DH</td>
                                                                                             <td><?php echo $key->date; ?></td>
                                                                                             <td> <h3><a href="#"> <i class="feather icon-edit" data-toggle="modal" data-target="#large<?php echo $key->id; ?>"></i></a></h3></td>
                                                                                             <td> <h3 style="color: red"><i class="feather icon-x" data-toggle="modal" data-target="#danger<?php echo $key->id; ?>"></i></h3></td>
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
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Nav Filled Ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
                                       <div class="modal-size-lg mr-1 mb-1 d-inline-block" style="">
                                                    <!-- Button trigger modal -->
                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable " role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel17">Ajouté une charge</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="add_charge" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                   <div class="row">
                                                                        <div class="col-sm-12 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1">
                                                                               Nom
                                                                         </div>
                                                                         <fieldset class="form-group position-relative input-divider-right">
                                                                             <input type="text" name="name" class="form-control" id="iconLeft4" placeholder="Nom" required="">
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-user"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                    </div>
                                                                    <div class="col-sm-12 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1">
                                                                        montant
                                                                         </div>
                                                                         <fieldset class="form-group position-relative input-divider-right">
                                                                             <input type="number" name="montant" class="form-control" id="iconLeft4" placeholder="Prénom" required="" >
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-user"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                    </div>
                                                                    <div class="col-sm-12 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1">
                                                                        Date
                                                                         </div>
                                                                         <fieldset class="form-group position-relative input-divider-right">
                                                                             <input type="date" name="date" class="form-control" id="iconLeft4" value="<?php echo date('Y-m-d'); ?>" required="">
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-map-pin"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                     </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="sub" class="btn btn-primary">Valider</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php foreach ($query as $key) { ?>
                                                 <div class="modal-size-lg mr-1 mb-1 d-inline-block">
                                                    <!-- Button trigger modal -->

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="large<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable " role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel17">Modifier</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="modifier_charge" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                   <div class="row">
                                                                        <div class="col-sm-12 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1">
                                                                               Nom
                                                                         </div>
                                                                         <fieldset class="form-group position-relative input-divider-right">
                                                                             <input type="text" name="name" class="form-control" id="iconLeft4" value="<?php echo $key->name; ?>" required="">
                                                                             <input type="hidden" name="id" class="form-control" id="iconLeft4" value="<?php echo $key->id; ?>" required="">
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-user"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                    </div>
                                                                    <div class="col-sm-12 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1">
                                                                        montant
                                                                         </div>
                                                                         <fieldset class="form-group position-relative input-divider-right">
                                                                             <input type="number" name="montant" class="form-control" id="iconLeft4" value="<?php echo $key->montant; ?>" required="" >
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-user"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                    </div>
                                                                    <div class="col-sm-12 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1">
                                                                        Date
                                                                         </div>
                                                                         <fieldset class="form-group position-relative input-divider-right">
                                                                             <input type="date" name="date" class="form-control" id="iconLeft4" value="<?php echo $key->date; ?>" required="">
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-map-pin"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                     </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="sub" class="btn btn-primary">Valider</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                            <?php foreach ($query as $key) { ?>
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
                                                                <center> <h1 style="font-size:30px">   Êtes-vous sûr ? </center> 
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="delete_charge?id=<?php echo $key->id; ?>"><button type="submit" class="btn btn-danger">Supprimer</button></a>
                                                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } ?>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('footer.php'); ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->
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

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/navs/navs.js"></script>
    <!-- END: Page JS-->
      <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
    <script type="text/javascript">
        function change() {
          var id = $('#select2-customize-result').val();
            if (id != 'tous') {
                            $.ajax({
                              url:"ajax_charge",
                              method:"POST",
                              data:{id:id},
                              success:function(data){
                                    $('#card').html(data);
                                                    }
                            }) 
                           }else{
                            window.location.href = "<?php echo base_url().'comptabilite2' ; ?>"; 
                           }
        }
    </script>
</body>
<!-- END: Body-->

</html>