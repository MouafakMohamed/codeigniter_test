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
      <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/sweetalert2.min.css">
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

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
     <?php include('header.php'); ?>

        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Les Fournisseurs</h2>
                            
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body">
                <!-- Basic Inputs start -->
    

                <!-- Input with Icons start -->
              
                <!-- Input with Icons end -->
  <div class="row" id="table-borderless">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                               
                                <div class="table-responsive">
                                        <table class="table">
                                        <thead>
                                            <tr>
                                                            <th>Menu</th>                                                                
                                                            <th>Pas afficher</th>                                                                
                                                            <th>just afficher</th>                                                                
                                                            <th>Modifier</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php foreach ($compte as $key){ ?>                                                            
                                                        <tr>                                                                
                                                            <td><h4><b>Dashboard</b></h4></td>                                                                
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->dashboard == 'non' or $key->dashboard == ''){ ?>
                                                                    <input type="radio" name="dashboard" onclick="salam('<?php echo $key->id; ?>','dashboard','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="dashboard" onclick="salam('<?php echo $key->id; ?>','dashboard','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->dashboard == 'voir'){ ?>
                                                                    <input type="radio" name="dashboard" onclick="salam('<?php echo $key->id; ?>','dashboard','voir')" checked>
                                                                        <?php }else{ ?> 
                                                                    <input type="radio" name="dashboard" onclick="salam('<?php echo $key->id; ?>','dashboard','voir')">
                                                                        <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                  
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->dashboard == 'edit'){ ?>
                                                                    <input type="radio" name="dashboard" onclick="salam('<?php echo $key->id; ?>','dashboard','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="dashboard" onclick="salam('<?php echo $key->id; ?>','dashboard','edit')" name="dashboard">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>                                                            
                                                        </tr> 
                                                        <tr>
                                                            <td><h4><b>CRM</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->CRM == 'non' or $key->CRM == ''){ ?>
                                                                    <input type="radio" name="CRM" onclick="salam('<?php echo $key->id; ?>','CRM','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="CRM" onclick="salam('<?php echo $key->id; ?>','CRM','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->CRM == 'voir'){ ?>
                                                                    <input type="radio" name="CRM" onclick="salam('<?php echo $key->id; ?>','CRM','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="CRM" onclick="salam('<?php echo $key->id; ?>','CRM','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                    
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->CRM == 'edit'){ ?>
                                                                    <input type="radio" name="CRM" onclick="salam('<?php echo $key->id; ?>','CRM','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="CRM" onclick="salam('<?php echo $key->id; ?>','CRM','edit')" name="CRM">
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>Fournisseur</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->four == 'non' or $key->four == ''){ ?>
                                                                    <input type="radio" name="four" onclick="salam('<?php echo $key->id; ?>','four','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="four" onclick="salam('<?php echo $key->id; ?>','four','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->four == 'voir'){ ?>
                                                                    <input type="radio" name="four" onclick="salam('<?php echo $key->id; ?>','four','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="four" onclick="salam('<?php echo $key->id; ?>','four','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                    
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->four == 'edit'){ ?>
                                                                    <input type="radio" name="four" onclick="salam('<?php echo $key->id; ?>','four','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="four" onclick="salam('<?php echo $key->id; ?>','four','edit')" name="four">
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <!--<tr>
                                                            <td><h4><b>gestion_fournisseur</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->four_detail == 'non' or $key->four_detail == ''){ ?>
                                                                    <input type="radio" name="four_detail" onclick="salam('<?php echo $key->id; ?>','four_detail','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="four_detail" onclick="salam('<?php echo $key->id; ?>','four_detail','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->four_detail == 'voir'){ ?>
                                                                    <input type="radio" name="four_detail" onclick="salam('<?php echo $key->id; ?>','four_detail','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="four_detail" onclick="salam('<?php echo $key->id; ?>','four_detail','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                    
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->four_detail == 'edit'){ ?>
                                                                    <input type="radio" name="four_detail" onclick="salam('<?php echo $key->id; ?>','four_detail','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="four_detail" onclick="salam('<?php echo $key->id; ?>','four_detail','edit')" >
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> -->
                                                         <tr>
                                                            <td><h4><b>Catégorie</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->cat == 'non' or $key->cat == ''){ ?>
                                                                    <input type="radio" name="cat" onclick="salam('<?php echo $key->id; ?>','cat','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="cat" onclick="salam('<?php echo $key->id; ?>','cat','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->cat == 'voir'){ ?>
                                                                    <input type="radio" name="cat" onclick="salam('<?php echo $key->id; ?>','cat','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="cat" onclick="salam('<?php echo $key->id; ?>','cat','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                    
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->cat == 'edit'){ ?>
                                                                    <input type="radio" name="cat" onclick="salam('<?php echo $key->id; ?>','cat','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="cat" onclick="salam('<?php echo $key->id; ?>','cat','edit')" name="cat">
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>Marque</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->marque == 'non' or $key->marque == ''){ ?>
                                                                    <input type="radio" name="marque" onclick="salam('<?php echo $key->id; ?>','marque','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="marque" onclick="salam('<?php echo $key->id; ?>','marque','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->marque == 'voir'){ ?>
                                                                    <input type="radio" name="marque" onclick="salam('<?php echo $key->id; ?>','marque','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="marque" onclick="salam('<?php echo $key->id; ?>','marque','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                    
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->marque == 'edit'){ ?>
                                                                    <input type="radio" name="marque" onclick="salam('<?php echo $key->id; ?>','marque','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="marque" onclick="salam('<?php echo $key->id; ?>','marque','edit')" name="marque">
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>produit</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->produit == 'non' or $key->produit == ''){ ?>
                                                                    <input type="radio" name="produit" onclick="salam('<?php echo $key->id; ?>','produit','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="produit" onclick="salam('<?php echo $key->id; ?>','produit','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->produit == 'voir'){ ?>
                                                                    <input type="radio" name="produit" onclick="salam('<?php echo $key->id; ?>','produit','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="produit" onclick="salam('<?php echo $key->id; ?>','produit','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                    
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->produit == 'edit'){ ?>
                                                                    <input type="radio" name="produit" onclick="salam('<?php echo $key->id; ?>','produit','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="produit" onclick="salam('<?php echo $key->id; ?>','produit','edit')" name="produit">
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>compte</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->compte == 'non' or $key->compte == ''){ ?>
                                                                    <input type="radio" name="compte" onclick="salam('<?php echo $key->id; ?>','compte','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="compte" onclick="salam('<?php echo $key->id; ?>','compte','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->compte == 'voir'){ ?>
                                                                    <input type="radio" name="compte" onclick="salam('<?php echo $key->id; ?>','compte','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="compte" onclick="salam('<?php echo $key->id; ?>','compte','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                    
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->compte == 'edit'){ ?>
                                                                    <input type="radio" name="compte" onclick="salam('<?php echo $key->id; ?>','compte','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="compte" onclick="salam('<?php echo $key->id; ?>','compte','edit')" name="compte">
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>caisse</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->caisse == 'non' or $key->caisse == ''){ ?>
                                                                    <input type="radio" name="caisse" onclick="salam('<?php echo $key->id; ?>','caisse','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="caisse" onclick="salam('<?php echo $key->id; ?>','caisse','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <!--<fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->caisse == 'voir'){ ?>
                                                                    <input type="radio" name="caisse" onclick="salam('<?php echo $key->id; ?>','caisse','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="caisse" onclick="salam('<?php echo $key->id; ?>','caisse','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset> -->                                                                   
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->caisse == 'edit'){ ?>
                                                                    <input type="radio" name="caisse" onclick="salam('<?php echo $key->id; ?>','caisse','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="caisse" onclick="salam('<?php echo $key->id; ?>','caisse','edit')" >
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>Tracibilité</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->trac == 'non' or $key->trac == ''){ ?>
                                                                    <input type="radio" name="trac" onclick="salam('<?php echo $key->id; ?>','trac','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="trac" onclick="salam('<?php echo $key->id; ?>','trac','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <!--<fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->entrer == 'voir'){ ?>
                                                                    <input type="radio" name="entrer" onclick="salam('<?php echo $key->id; ?>','entrer','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="entrer" onclick="salam('<?php echo $key->id; ?>','entrer','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>  -->                                                                  
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->trac == 'edit'){ ?>
                                                                    <input type="radio" name="trac" onclick="salam('<?php echo $key->id; ?>','trac','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="trac" onclick="salam('<?php echo $key->id; ?>','trac','edit')" >
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                        <!-- <tr>
                                                            <td><h4><b>sortir</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->sortir == 'non' or $key->sortir == ''){ ?>
                                                                    <input type="radio" name="sortir" onclick="salam('<?php echo $key->id; ?>','sortir','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="sortir" onclick="salam('<?php echo $key->id; ?>','sortir','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                               <!-- <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->sortir == 'voir'){ ?>
                                                                    <input type="radio" name="sortir" onclick="salam('<?php echo $key->id; ?>','sortir','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="sortir" onclick="salam('<?php echo $key->id; ?>','sortir','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                 
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->sortir == 'edit'){ ?>
                                                                    <input type="radio" name="sortir" onclick="salam('<?php echo $key->id; ?>','sortir','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="sortir" onclick="salam('<?php echo $key->id; ?>','sortir','edit')" >
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> -->
                                                         <tr>
                                                            <td><h4><b>comptabilité</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->comptabilité == 'non' or $key->comptabilité == ''){ ?>
                                                                    <input type="radio" name="comptabilité" onclick="salam('<?php echo $key->id; ?>','comptabilité','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="comptabilité" onclick="salam('<?php echo $key->id; ?>','comptabilité','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <!--<fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->comptabilité == 'voir'){ ?>
                                                                    <input type="radio" name="comptabilité" onclick="salam('<?php echo $key->id; ?>','comptabilité','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="comptabilité" onclick="salam('<?php echo $key->id; ?>','comptabilité','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset> -->                                                                   
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->comptabilité == 'edit'){ ?>
                                                                    <input type="radio" name="comptabilité" onclick="salam('<?php echo $key->id; ?>','comptabilité','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="comptabilité" onclick="salam('<?php echo $key->id; ?>','comptabilité','edit')" >
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>SAV</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->SAV == 'non' or $key->SAV == ''){ ?>
                                                                    <input type="radio" name="SAV" onclick="salam('<?php echo $key->id; ?>','SAV','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="SAV" onclick="salam('<?php echo $key->id; ?>','SAV','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->SAV == 'voir'){ ?>
                                                                    <input type="radio" name="SAV" onclick="salam('<?php echo $key->id; ?>','SAV','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="SAV" onclick="salam('<?php echo $key->id; ?>','SAV','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                    
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->SAV == 'edit'){ ?>
                                                                    <input type="radio" name="SAV" onclick="salam('<?php echo $key->id; ?>','SAV','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="SAV" onclick="salam('<?php echo $key->id; ?>','SAV','edit')" >
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>command</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->command == 'non' or $key->command == ''){ ?>
                                                                    <input type="radio" name="command" onclick="salam('<?php echo $key->id; ?>','command','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="command" onclick="salam('<?php echo $key->id; ?>','command','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <!--<fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->command == 'voir'){ ?>
                                                                    <input type="radio" name="command" onclick="salam('<?php echo $key->id; ?>','command','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="command" onclick="salam('<?php echo $key->id; ?>','command','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset> -->                                                                   
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->command == 'edit'){ ?>
                                                                    <input type="radio" name="command" onclick="salam('<?php echo $key->id; ?>','command','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="command" onclick="salam('<?php echo $key->id; ?>','command','edit')" >
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr> 
                                                         <tr>
                                                            <td><h4><b>POUVOIRS</b></h4></td> 
                                                            <td> 
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-danger">
                                                                    <?php if ($key->POUVOIRS == 'non' or $key->POUVOIRS == ''){ ?>
                                                                    <input type="radio" name="POUVOIRS" onclick="salam('<?php echo $key->id; ?>','POUVOIRS','non')" checked="">
                                                                    <?php }else{ ?>
                                                                    <input type="radio" name="POUVOIRS" onclick="salam('<?php echo $key->id; ?>','POUVOIRS','non')">
                                                                    <?php } ?>
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>
                                                            </td>                                                                
                                                            <td>                                                                     
                                                                <!--<fieldset>
                                                                    <div class="vs-radio-con vs-radio-warning">
                                                                    <?php if ($key->POUVOIRS == 'voir'){ ?>
                                                                    <input type="radio" name="POUVOIRS" onclick="salam('<?php echo $key->id; ?>','POUVOIRS','voir')" checked>
                                                                         <?php }else{ ?> 
                                                                    <input type="radio" name="POUVOIRS" onclick="salam('<?php echo $key->id; ?>','POUVOIRS','voir')">
                                                                         <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>   -->                                                                 
                                                            </td>                                                                
                                                            <td>  
                                                                <fieldset>
                                                                    <div class="vs-radio-con vs-radio-success">
                                                                    <?php if ($key->POUVOIRS == 'edit'){ ?>
                                                                    <input type="radio" name="POUVOIRS" onclick="salam('<?php echo $key->id; ?>','POUVOIRS','edit')" checked="">
                                                                    <?php }else{ ?> 
                                                                    <input type="radio" name="POUVOIRS" onclick="salam('<?php echo $key->id; ?>','POUVOIRS','edit')" >
                                                                    <?php } ?>  
                                                                    <span class="vs-radio">
                                                                    <span class="vs-radio--border"></span>
                                                                    <span class="vs-radio--circle"></span>
                                                                    </span>
                                                                    </div>
                                                                </fieldset>                                                                           
                                                            </td>       
                                                        </tr>      
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- Input Sizing end -->

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
        function searsh() {     
            var ok = $('#change').val();             
            if (ok == 'CDD') {                 
                var data = '<div class="input-daterange input-group" id="date-range"><input name="date1" type="date" class="form-control" name="start" /><span class="input-group-addon bg-custom b-0 text-white">to</span><input name="date2" type="date" class="form-control" name="end" /></div>';                            
            }else{                 
                var data = '<div class="input-group"><span class="input-group-addon bg-custom b-0 text-white"><i class="icon-calender"></i></span><input name="date1" type="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose"></div>';             
            }             
        $('#data').html(data); 
    }  
    function salam(id,menu,value) {     
                $.ajax({                              
                       url:"ajax_check",                              
                       method:"POST",                              
                       data:{value:value,id:id,menu:menu},                              
                       success:function(data){                                                 
                                             }                            
                       }) 
                }

    </script>
</body>
<!-- END: Body-->

</html>