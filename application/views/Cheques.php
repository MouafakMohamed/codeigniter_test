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
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/sweetalert2.min.css">
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

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

   <?php echo include('header.php'); ?>

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Tabs</h2>
                           <!-- <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Components</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tabs
                                    </li>
                                </ol>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Nav Filled Starts -->
                <section id="nav-filled">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card overflow-hidden">
                                <div class="card-content">
                                    <div class="card-body">
                                        <!-- Nav tabs -->
                                        <ul class="nav nav-tabs nav-fill" id="myTab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab" aria-controls="home-fill" aria-selected="true">Les prochaines chéques</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab" aria-controls="profile-fill" aria-selected="false">Les encient chéques</a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content pt-1">
                                            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                                <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Nom et prénom</th>
                                                        <th>Date</th>
                                                        <th>Montant</th>
                                                        <th> RIB </th>
                                                        <th> Banque </th>
                                                        <th> Validation </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($check as $key) { 
                                                         if($key->payer != 'oui'){ ?>
                                                    <tr>
                                                        <?php $profil = $this->Model->get_by('cliens','id',$key->clien); ?>
                                                        
                                                        <td> <?php foreach ($profil as $key1) {
                                                            echo '<img src="'. base_url().'upload/clien/'.$key1->image.'" alt="avtar img holder" height="40" width="40">'; 
                                                        } ?></td>
                                                        <td><?php foreach ($profil as $key1) {
                                                            echo $key1->nom.' '.$key1->pre; 
                                                        } ?></td>
                                                        <td><?php echo $key->date ; ?></td>
                                                        <td><?php echo $key->montant ; ?> DH</td>
                                                        <td><?php echo $key->RIB ; ?></td>
                                                        <td><?php echo $key->banque ; ?></td>
                                                        <td> <div class="custom-control custom-switch switch-lg custom-switch-success mr-2 mb-1">
                                                                 <input type="checkbox" class="custom-control-input" onclick="delet(<?php echo $key->id; ?>)" id="customSwitch<?php echo $key->id; ?>">
                                                                 <label class="custom-control-label" for="customSwitch<?php echo $key->id; ?>">
                                                                     <span class="switch-text-left">payé</span>
                                                                     <span class="switch-text-right">Non payé</span>
                                                                 </label>
                                                             </div>
                                                        </td>
                                                         <!--<button type="button" class="btn btn-outline-primary mr-1 mb-1" id="prompt-function">Question</button>-->
                                                    </tr>
                                                <?php } } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                            </div>
                                            <div class="tab-pane" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                                <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>Image</th>
                                                        <th>Nom et prénom</th>
                                                        <th>Date</th>
                                                        <th>Montant</th>
                                                        <th> RIB </th>
                                                        <th> Banque </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($check as $key) { 
                                                         if($key->payer == 'oui'){ ?>
                                                    <tr>
                                                        <?php $profil = $this->Model->get_by('cliens','id',$key->clien); ?>
                                                        
                                                        <td> <?php foreach ($profil as $key1) {
                                                            echo '<img src="'. base_url().'upload/clien/'.$key1->image.'" alt="avtar img holder" height="40" width="40">'; 
                                                        } ?></td>
                                                        <td><?php foreach ($profil as $key1) {
                                                            echo $key1->nom.' '.$key1->pre; 
                                                        } ?></td>
                                                        <td><?php echo $key->date ; ?></td>
                                                        <td><?php echo $key->montant ; ?> DH</td>
                                                        <td><?php echo $key->RIB ; ?></td>
                                                        <td><?php echo $key->banque ; ?></td>
                                                         <!--<button type="button" class="btn btn-outline-primary mr-1 mb-1" id="prompt-function">Question</button>-->
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
                        </div>
                    </div>
                </section>
                <!-- Nav Filled Ends -->

               

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
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/sweetalert2.all.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/polyfill.min.js"></script>
   <!-- <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/extensions/sweet-alerts.js"></script>
     BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/navs/navs.js"></script>
<?php $pay = "Votre chéque n'est payé"; 
$pay = "Votre chéque est payé";?>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
     <script type="text/javascript">
     function delet(id) {
    Swal.fire({
      title: 'ce chéque est payé ?',
      text: " ",//You won't be able to revert this!
      type: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Valider !',
      cancelButtonText: 'Annuler',
      confirmButtonClass: 'btn btn-success',
      cancelButtonClass: 'btn btn-danger ml-1',
      buttonsStyling: false,
    }).then(function (result) {
      if (result.value) {
                        if (id != '') {
                           $.ajax({
                              url:"ajax_cheque",
                              method:"POST",
                              data:{id:id},
                              success:function(data){
                                    if ($data = 'oui') {
                                        Swal.fire(
                                                   {
                                                     type: "success",
                                                     title: 'Votre chéque est payé',
                                                     confirmButtonClass: 'btn btn-success',
                                                     confirmButtonText: 'Fermer',
                                                   }
                                                 )
                                        setTimeout(alert, 300); 
                                           function alert() {
                                            window.location.href = "<?php echo base_url().'Cheques' ; ?>"; 
                                        }
                                    }else{
                                        Swal.fire(
                                                   {
                                                     type: "success",
                                                     title: "Votre chéque n'est payé",
                                                     confirmButtonClass: 'btn btn-success',
                                                     confirmButtonText: 'Fermer',
                                                   }
                                                 )
                                    }
                                                    }
                            }) 
                        }else{
                         
                        }
       /* */
      }else{
        window.location.href = "<?php echo base_url().'Cheques' ; ?>"; 
      }
    })
  };
     </script>
</body>
<!-- END: Body-->

</html>