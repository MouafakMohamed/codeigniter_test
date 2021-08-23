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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
    <!-- END: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/sweetalert2.min.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/tables/datatable/datatables.min.css">
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
     <!--<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" />-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/popupmodal.css" />
    <!-- BEGIN: Custom CSS-->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style-rtl.css">
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
                            <h2 class="content-header-title float-left mb-0">الأجور</h2>
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
                                            <li class="nav-item" style="background-color: yellow">
                                                <a class="nav-link active" id="home-tab-fill" data-toggle="tab" href="#home-fill" role="tab" aria-controls="home-fill" aria-selected="true">الموارد البشرية</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab-fill" data-toggle="tab" href="#profile-fill" role="tab" aria-controls="profile-fill" aria-selected="false">الأجور </a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content pt-1">
                                            <div class="tab-pane active" id="home-fill" role="tabpanel" aria-labelledby="home-tab-fill">
                                                <div class="table-responsive">
                                            <table class="table zero-configuration">
                                                <thead>
                                                    <tr>
                                                        <th>الصورة</th>
                                                        <th>الاسم الشخصي و العائلي</th>
                                                        <th>العنوان</th>
                                                        <th>الهاتف</th>
                                                        <th>الراتب</th>
                                                        <th>تأكيد الراتب</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($compte as $key) { ?>
                                                    <tr>
                                                        <td> <img src="<?php echo base_url(); ?>upload/compte/<?php echo $key->image ; ?>" alt="avtar img holder" height="32" width="32"></td>
                                                        <td><?php echo $key->nom.' '.$key->pre ; ?></td>
                                                        <td><?php echo $key->adress ; ?></td>
                                                        <td><?php echo $key->tele ; ?></td>
                                                        <td><?php echo $key->salaire ; ?></td>
                                                        <td><button type="button" class="btn btn-flat-success border-success text-success mr-1 mb-1" onclick="promt(<?php echo $key->id; ?>)" id="prompt-function">  تأكيد </button></td>
                                                         <!--<button type="button" class="btn btn-outline-primary mr-1 mb-1" id="prompt-function">Question</button>-->
                                                    </tr>
                                                <?php } ?>
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
                                                        <th>Salaire</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($salaire as $key) { ?>
                                                    <tr>
                                                       <?php $profil = $this->Model->get_by('compte','id',$key->compte); ?>
                                                        
                                                        <td> <?php foreach ($profil as $key1) {
                                                            echo '<img src="'. base_url().'upload/compte/'.$key1->image.'" alt="avtar img holder" height="40" width="40">'; 
                                                        } ?></td>
                                                        <td><?php foreach ($profil as $key1) {
                                                            echo $key1->nom.' '.$key1->pre; 
                                                        } ?></td>
                                                        <td><?php echo $key->date ; ?></td>
                                                        <td><?php echo $key->salaire ; ?></td>
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
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables-rtl.min.js"></script>
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
           var date = prompt("ادخل تاريخ صرف الراتب :", "<?php echo date('Y-m-d'); ?>");
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