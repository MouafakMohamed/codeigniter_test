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
        
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/prompt/css/popupmodal.css" >

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
     <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/popupmodal.css" />
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
                                            <li class="nav-item" style="background-color: #243665">
                                                <a class="nav-link active" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab" aria-controls="profile-fill" aria-selected="false" style="color: #8BD8BD">le retour</a>
                                            </li>
                                            <li class="nav-item"  style="background-color: #8BD8BD">
                                                <a class="nav-link" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab" aria-controls="home-fill" aria-selected="true" ><b style="color: #243665">SAV</b></a>
                                            </li>
                                            
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content pt-1">

                                            <div class="tab-pane" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                                <button type="button" class="btn btn-outline-primary btn-block " data-toggle="modal" data-target="#inlineForm" style="width: 400px" ><i class="fa fa-plus" style="margin-right:20px"></i>Ajouter un  Réclamation </button>
                                           <div class="table-responsive">
                                            <table class="table table-striped table-bordered complex-headers">
                                                <thead>
                                                    <tr>
                                                        <th><center>photo</center></th>
                                                      
                                                        <th><center>Réf / produit</center></th>
                                                        <th><center>Date de Réclamation</center></th>
                                                     
                                                        <th  style="width:40%"><center>Note</center></th>
                                                       <!-- <th style="width:2%">Imprimer</th>-->
                                                         
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($SAV as $key) { 
                                                        if ($key->archive != 'oui') { ?>
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
                                                    <?php } } ?>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane active" id="profile-fill" role="tabpanel" aria-labelledby="profile-tab-fill">
                                        <form method="get">
                                             <div class="row mt-1">
                                            <div class="col-sm-3">
                                            <input type="number" name="facture" class="form-control" placeholder="Entrer le code du facture ...">
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="submit" class="btn btn-success float-left"> Rechercher</button>
                                        </div></div>
                                        </form>
                                               <div class="table-responsive">
                                                                            <table class="table zero-configuration">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>nom de produit</th>
                                                                                        <th>Quantité </th>
                                                                                        <th>Le prix de vente</th>
                                                                                        <th>Remise</th>
                                                                                        <th>Total</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="card">
                                                                                    <?php
                                                                                    if (!empty($query)) {
                                                                                        foreach ($query as $key) { 
                                                                                             $id_bons = $key->id_bons; ?>
                                                                                        <tr>
                                                                                            <td><?php echo $key->name; ?></td>
                                                                                            <td><?php echo $key->quantité; ?></td>
                                                                                            <td><?php echo $key->prix_s; ?> DH</td>
                                                                                            <td><?php echo $key->remise; ?> %</td>
                                                                                            <td><?php echo $key->total; ?> DH</td>
                                                                                        </tr>
                                                                                    <?php }  } ?> 
                                                                                        
                                                                               </tbody>
                                                                               <tfoot>
                                                                                <?php if (!empty($query)) { ?>
                                                                                   <tr>
                                                                                        <td colspan="4"></td>
                                                                                        <td><button type="button" data-toggle="modal" data-target="#danger<?php echo $key->id; ?>" class="btn btn-outline-danger mr-1 mb-1"><i class="feather icon-x"></i> Suprimer</button></td> 
                                                                                   </tr>
                                                                               <?php } ?>
                                                                               </tfoot>
                                                                               
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
                 <!-- Modal -->
                                            <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33"></h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="add_SAV" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                             
                                             
                                                                <label>Photo: </label>
                                                                
                                                                   <fieldset class="form-group">
                                                  
                                                    <div class="custom-file">
                                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01">Photo</label>
                                                    </div>
                                                </fieldset>
                                                                <label>Réf / produit: </label>
                                                                <div class="form-group">
                                                                     <select class="select2-customize-result form-control" name="pro" id="select2-customize-result" required="">
                                                                        <option></option>
                                                                      <?php $pro = $this->Model->get('produit');
                                                                      foreach ($pro as $key2) { ?>
                                                                        <option value="<?php echo $key2->id; ?>"><?php echo $key2->name; ?></option>
                                                                    <?php } ?>
                                                                     </select>
                                                                </div>
                                                                <!--<label>Date de Réclamation : </label>
                                                                <div class="form-group">
                                                                    <input type="date" name="date" placeholder="Date de Réclamation" class="form-control" required="">
                                                                </div>-->
                                                                <label>Note: </label>
                                                                <div class="form-group">
                                                                       <textarea class="form-control" name="note" id="basicTextarea" rows="3" ></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" name="sub" class="btn btn-primary"> Réclame</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if (!empty($query)) {
                                             foreach ($query as $key) { ?>
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
                                                                    <a href="delete_bonat?id=<?php echo $id_bons; ?>"><button type="submit" class="btn btn-danger">Supprimer</button></a>
                                                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php } } ?>

               

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

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- END: Page JS-->
    <script src="<?php echo base_url(); ?>assets/js/polyfill.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/popupmodal-min.js"></script>
    <script type="text/javascript">
      function promt(id){
        /*popup.prompt(
        {
            content : 'Hello. What is your name?',
        },
        function(config){
            if(config.input_value && config.proceed){
                popup.alert({
                        content: 'Hi, ' + config.input_value
                });
            } else if(!config.proceed){
                popup.alert({
                        content: 'You clicked cancel.'
                });
            }
        }
    );*/
           var date = prompt("entrer la date de salaire :", "<?php echo date('Y-m-d'); ?>");
           if (date) {
                           $.ajax({
                              url:"ajax_salaire",
                              method:"POST",
                              data:{id:id,date:date},
                              success:function(data){
                                    if ($data = 'oui') {
                                         window.location.href = "<?php echo base_url().'Salaires' ; ?>"; 
                                    }else{
                                          window.location.href = "<?php echo base_url().'Salaires' ; ?>"; 
                                    }
                                                    }
                            }) 
                        }
             }
    
    </script>

    <!-- <script type="text/javascript">
          $('#prompt-function').on('click', function () {
             
         /* alert('salam');
    popup.prompt(
        {
            content : 'Hello. What is your name?'
        },
        function(config){
            if(config.input_value && config.proceed){
                popup.alert({
                        content: 'Hi, ' + config.input_value
                });
            } else if(!config.proceed){
                popup.alert({
                        content: 'You clicked cancel.'
                });
            }
        }
    );*/
    popup.confirm(
  { content : 'Do you like me?', ...... },
  function(param){
    if(param.e.target.id == 'btn_extra_1_1'){
      popup.alert( { content : 'Is ok, take your time :)' } );
    } else if(param.proceed){
      popup.alert( { content : 'Yay!' } );
    } else if(!param.proceed){
      popup.alert( { content : 'So sad...' } );
    }
  }
);
    /*Swal.mixin({
      input: 'text',
      confirmButtonText: 'Next &rarr;',
      showCancelButton: true,
      progressSteps: ['1', '2'],
      confirmButtonClass: 'btn btn-primary',
      buttonsStyling: false,
      cancelButtonClass: "btn btn-danger ml-1"
    }).queue([
      {
        title: 'Saliare',
        text: 'entrer la valeur du salaire'
      },
      {
        title: 'date',
        text: 'entrer la date de salaire'
      }
    ]).then(function (result) {
      if (result.value) {
        Swal.fire({
          title: 'All done!',
          html:
            'Your answers: <pre><code>' +
            JSON.stringify(result.value) +
            '</code></pre>',
          confirmButtonText: 'Lovely!'
        })
      }
    })*/
  });
        /*  $('#prompt-function').on('click', function () {
    Swal.fire({
      title: 'Search for a user',
      input: 'text',
      value: 'salma',
      confirmButtonClass: 'btn btn-primary',
      buttonsStyling: false,
      inputAttributes: {
        autocapitalize: 'off'
      },
      showCancelButton: true,
      confirmButtonText: 'Look up',
      showLoaderOnConfirm: true,
      cancelButtonClass: "btn btn-danger ml-1",
      preConfirm: function (login) {
        return fetch("//api.github.com/users/" + login + "")
          .then(function (response) {
            if (!response.ok) {
              console.log(response)
              throw new Error(response.statusText)
            }
            return response.json()
          })
          .catch(function (error) {
            Swal.showValidationMessage(
              "Request failed:  " + error + ""
            )
          })
      },
      allowOutsideClick: function () {
        !Swal.isLoading()
      }
    }).then(function (result) {
      if (result.value) {
        Swal.fire({
          title: "" + result.value.login + "'s avatar",
          imageUrl: result.value.avatar_url
        })
      }
    })
  });*/
     </script>-->
</body>
<!-- END: Body-->

</html>