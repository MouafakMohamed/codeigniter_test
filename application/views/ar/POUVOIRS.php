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
      <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
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
                            <h2 class="content-header-title float-right mb-0"><center>صلاحيات المستخدم</center></h2>
                            
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="content-body" dir="rtl">
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
                                                            <td><h4><b>لوحة المراقبة </b></h4></td>                                                                
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
                                                            <td><h4><b>إدارة الزبناء </b></h4></td> 
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
                                                            <td><h4><b>الموردين</b></h4></td> 
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
                                                            <td><h4><b>التصنيفات</b></h4></td> 
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
                                                            <td><h4><b>العلامات التجارية </b></h4></td> 
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
                                                            <td><h4><b>البضاعة </b></h4></td> 
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
                                                            <td><h4><b>حساب المستخدمين</b></h4></td> 
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
                                                            <td><h4><b>الصندوق</b></h4></td> 
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
                                                            <td><h4><b>التتبع</b></h4></td> 
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
                                                                </fieldset> -->                                                                   
                                                            <!--</td>                                                                
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
                                                            <td><h4><b>المحاسبة </b></h4></td> 
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
                                                            <td><h4><b>خدمة ما بعد البيع </b></h4></td> 
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
                                                            <td><h4><b>السلع المطلوبة</b></h4></td> 
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
                                                            <td><h4><b>الصلاحيات</b></h4></td> 
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
    <div class="modal-size-lg mr-1 mb-1 d-inline-block" >
                                                    <!-- Button trigger modal -->

                                                    <!-- Modal -->
                                                    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="padding-left: 300px" id="myModalLabel17" >إضافة حساب </h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="add_compte" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                  <div class="row">
                                                           
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 250px">
                                                   الاسم العائلي
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="nom" class="form-control" id="iconLeft4" placeholder="Nom">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                         <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 230px">
                                               الاسم الشخصي
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="pre" class="form-control" id="iconLeft4" placeholder="Prénom">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                             
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 300px">
                                               عنوان
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="adress" class="form-control" id="iconLeft4" placeholder="     عنوان">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-map-pin"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 300px">
                                          هاتف
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="tele" class="form-control" id="iconLeft4" placeholder="  هاتف">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 230px">
                                             البريد الإلكتروني
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="mail" class="form-control" id="iconLeft4" placeholder="   البريد الإلكتروني">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 270px">
                                    نوع العقد
                                                </div>
                                                 <fieldset class="form-group position-relative input-divider-right">
                                                   <select name="type" class="form-control" id="basicSelect">
                                                        <option>CDI –عقد لمدة غير محددة </option>
                                                        <option>CDD –عقد محدد المدة</option>
                                                        <option>CTT –عقد العمل المؤقت</option>
                                                        <option>عقد التعلم</option>
                                                        <option>عقد المهنية</option>
                                                        <option>CUI – عقد الإدراج واحد</option>
                                                        
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                
                                                    
                                                </fieldset>
                                            </div>
                                             <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 230px">الصورة الشخصية </div>
                                                 <fieldset class="form-group">
                                                                 <div class="custom-file">
                                                                     <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                     <label class="custom-file-label" for="inputGroupFile01">  </label>
                                                                 </div>
                                                             </fieldset>
                                            </div> 
                                             <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 280px">   فيسبوك  </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="facebook" class="form-control" id="iconLeft4" placeholder="Facebook">
                                                    <div class="form-control-position">
                                                    <i class="feather icon-facebook"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 320px">
                                               تويتر
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="twitter" class="form-control" id="iconLeft4" placeholder="Twitter">
                                                    <div class="form-control-position">
                                                        <i class="feather  icon-twitter"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                             <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 280px">
                                               انستغرام
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="insta" class="form-control" id="iconLeft4" placeholder="Instagram">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-instagram"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                         <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 300px">
                                               يوتيوب
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="youtube" class="form-control" id="iconLeft4" placeholder="Youtube">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-youtube"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                                 
                                            
                                         
                                         
                                            <div class="col-sm-12 col-12">
                                               
                                              <center>  <button type="submit" name="sub" class="btn btn-primary">  <i class="feather icon-file" style="margin-left:10px"></i>إضافة حساب</button></center> 
                                            </div>
                                        </div>
                                                                
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>











<?php foreach ($compte as $key) { ?>
                                                 <div class="modal fade text-left" id="large<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel17"  style="padding-left: 300px">إضافة حساب</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="update_compte" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                   <div class="row">
                                                           
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 250px">
                                                   الاسم العائلي
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="hidden" name="id" value="<?php echo $key->id; ?>" >
                                                    <input type="text" name="nom" class="form-control" id="iconLeft4" value="<?php echo $key->nom ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                         <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 230px">
                                               الاسم الشخصي
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="pre" class="form-control" id="iconLeft4" value="<?php echo $key->pre ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                             
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 320px">
                                               عنوان
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="adress" class="form-control" id="iconLeft4" value="<?php echo $key->adress ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-map-pin"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 300px">
                                          هاتف
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="tele" class="form-control" id="iconLeft4" value="<?php echo $key->tele ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-phone"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 230px">
                                             البريد الإلكتروني
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="mail" class="form-control" id="iconLeft4" value="<?php echo $key->mail ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 280px">
                                    نوع العقد
                                                </div>
                                                 <fieldset class="form-group position-relative input-divider-right">
                                                   <select name="type" class="form-control" id="basicSelect">
                                                        <option><?php echo $key->type ; ?></option>
                                                        <option>CDI –عقد لمدة غير محددة </option>
                                                        <option>CDD –عقد محدد المدة</option>
                                                        <option>CTT –عقد العمل المؤقت</option>
                                                        <option>عقد التعلم</option>
                                                        <option>عقد المهنية</option>
                                                        <option>CUI – عقد الإدراج واحد</option>
                                                        
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                
                                                    
                                                </fieldset>
                                            </div>
                                             <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 230px">الصورة الشخصية </div>
                                                 <fieldset class="form-group">
                                                                 <div class="custom-file">
                                                                     <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                     <label class="custom-file-label" for="inputGroupFile01">  </label>
                                                                 </div>
                                                             </fieldset>
                                            </div> 
                                             <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 300px">   فيسبوك  </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="facebook" class="form-control" id="iconLeft4" value="<?php echo $key->facebook ; ?>" required="">
                                                    <div class="form-control-position">
                                                    <i class="feather icon-facebook"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 320px">
                                               تويتر
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="twitter" class="form-control" id="iconLeft4" value="<?php echo $key->twitter ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather  icon-twitter"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                             <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 300px">
                                               انستغرام
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="insta" class="form-control" id="iconLeft4" value="<?php echo $key->insta ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-instagram"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                         <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 300px">
                                               يوتيوب
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="youtube" class="form-control" id="iconLeft4" value="<?php echo $key->youtube ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-youtube"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                                 
                                            
                                         
                                         
                                            <div class="col-sm-12 col-12">
                                               
                                              <center>  <button type="submit" name="sub" class="btn btn-primary">  <i class="feather icon-file" style="margin-left:10px"></i>إضافة حساب</button></center> 
                                            </div>
                                        </div>
                                    </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                </div>
                                            <?php } ?>
<!--<div class="modal fade text-left" id="#danger<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
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
                                                                <center> <h1 style="font-size:30px">   Êtes-vous sûr ?</center> 
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
                                                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>-->
                                                    
<?php foreach ($compte as $key) { ?>
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
                                                                <center> <h1 style="font-size:30px">   Êtes-vous sûr ?</center> 
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Supprimer</button>
                                                                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
    <!-- END: Content--><?php } ?>

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
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/modal/components-modal.js"></script>
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