<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" lang="ar" xml:lang="ar" dir='rtl'>
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/vendors/css/charts/apexcharts.css">
    <!-- END: Vendor CSS-->
    <link href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300" rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/app-assets/css/pages/card-analytics.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets_ar/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
      <!-- BEGIN: Main Menu-->

        <!-- BEGIN: Header-->
        <?php include('header.php'); ?>
        <!-- END: Header-->

        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <!--<div class="col-lg-6 col-sm-6 col-12"></div>-->
                        <div class="col-lg-6 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px;">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-refresh-cw text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <?php $total = 0;
                                        foreach ($pro as $row) {
                                                        $tot = $row->quantité*$row->prix_e;
                                                        $total = $total+$tot ;  
                                                                     }?>
                                        <h3 style="padding-left: 70px"> رأس المال </h3>
                                        <p class="mb-0" ><h3 dir="rtl" style="color: #1991FA;" class="text-bold-700" ><b style="padding-right: 50px"><?php echo $total; ?> </b> د.م  </h3></p>
                                    </div>
                                    
                                </div>
                               
                            </div>
                        </div>
                         <div class="col-lg-6 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-bar-chart text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <?php $total1 = 0;
                                        $bons = $this->Model->get('bons');
                                        foreach ($bons as $salam) {
                                            $kham = $salam->date;
                                      $date = explode(' ', $salam->date);
                                      $date11 = $date[0];
                                      $date1 = explode('-', $date11);
                                      $date3 = $date1[0];
                                      $data = date('Y-m-d');
                                      $now = explode('-', $data);
                                      $now1 = $now[0];
                                      if ($now1 == $date3) {
                                          $total1 = $total1 + $salam->total ;
                                      }
                                  }?>
                                        <h3 style="padding-left: 50px">  رقم المعاملات</h3>
                                        <p class="mb-0" ><h3 dir="rtl" style="color: #1991FA;" class="text-bold-700" ><b style="padding-right: 50px"><?php echo ''.$total1; ?></b> د.م  </h3></p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">الاحصائيات </h4>
                                </div>
                                <div class="card-content" >
                                    <div class="card-body">
                                        <div id="column-chart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <?php 
                        $date = '';
                        $date1 = '';
                        $mois2 = 0;
                        $mois3 = 0;
                        $mois4 = 0;
                        $mois5 = 0;
                        $mois6 = 0;
                        $mois7 = 0;
                        $mois8 = 0;
                        $mois9 = 0;
                        $mois10 = 0;
                        $mois11 = 0;
                        $mois12 = 0;
                        $mois1 = 0;
                        $credit1 = 0;
                        $credit2= 0;
                        $credit3 = 0;
                        $credit4 = 0;
                        $credit5 = 0;
                        $credit6 = 0;
                        $credit7 = 0;
                        $credit8 = 0;
                        $credit9 = 0;
                        $credit10 = 0;
                        $credit11 = 0;
                        $credit12 = 0;
                        $ben1 = 0;
                        $ben2 = 0;
                        $ben3 = 0;
                        $ben4 = 0;
                        $ben5 = 0;
                        $ben6 = 0;
                        $ben7 = 0;
                        $ben8 = 0;
                        $ben9 = 0;
                        $ben10 = 0;
                        $ben11 = 0;
                        $ben12 = 0;
                                  foreach ($sortir as $keya) {
                                  $date = $keya->date;
                                  $date = explode(' ', $date);
                                  $date = explode('-', $date[0]);
                                  $date = $date[0].$date[1].$date[2];
                                  $date1 = explode('-', date('Y-m-d'));
                                  $date2 = $date1[0].$date1[1].$date1[2];
                                  $var1 = $date1[0].'0101';
                                  $var2 = $date1[0].'0201';
                                  $var3 = $date1[0].'0301';
                                  $var4 = $date1[0].'0401';
                                  $var5 = $date1[0].'0501';
                                  $var6 = $date1[0].'0601';
                                  $var7 = $date1[0].'0701';
                                  $var8 = $date1[0].'0801';
                                  $var9 = $date1[0].'0901';
                                  $var10 = $date1[0].'1001';
                                  $var11 = $date1[0].'1101';
                                  $var12 = $date1[0].'1201';
                                  $var13 = $date1[0].'1231';
                                  if ($var1 <= $date) {
                                    if ($var2 > $date) {
                                      $mois1 = $mois1+$keya->total;
                                      $credit1 = $credit1+$keya->credit+$keya->check;
                                      $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben1 = $ben1+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var2 <= $date) {
                                    if ($var3 > $date) {
                                      $mois2 = $mois2+$keya->total;
                                      $credit2 = $credit2+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben2 = $ben2+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var3 <= $date) {
                                    if ($var4 > $date) {
                                      $mois3 = $mois3+$keya->total;
                                      $credit3 = $credit3+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben3 = $ben3+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var4 <= $date) {
                                    if ($var5 > $date) {
                                      $mois4 = $mois4+$keya->total;
                                      $credit4 = $credit4+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben4 = $ben4+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var5 <= $date) {
                                    if ($var6 > $date) {
                                      $mois5 = $mois5+$keya->total;
                                      $credit5 = $credit5+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben5 = $ben5+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var6 <= $date) {
                                    if ($var7 > $date) {
                                      $mois6 = $mois6+$keya->total;
                                      $credit6 = $credit6+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben6 = $ben6+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var7 <= $date) {
                                    if ($var8 > $date) {
                                      $mois7 = $mois7+$keya->total;
                                      $credit7 = $credit7+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben7 = $ben7+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var8 <= $date) {
                                    if ($var9 > $date) {
                                      $mois8 = $mois8+$keya->total;
                                      $credit8 = $credit8+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben8 = $ben8+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var9 <= $date) {
                                    if ($var10 > $date) {
                                      $mois9 = $mois9+$keya->total;
                                      $credit9 = $credit9+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben9 = $ben9+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var10 <= $date) {
                                    if ($var11 > $date) {
                                      $mois10 = $mois10+$keya->total;
                                      $credit10 = $credit10+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben10 = $ben10+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var11 <= $date) {
                                    if ($var12 > $date) {
                                      $mois11 = $mois11+$keya->total;
                                      $credit11 = $credit11+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben11 = $ben11+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }
                                  if ($var12 <= $date) {
                                    if ($var13 >= $date) {
                                      $mois12 = $mois12+$keya->total;
                                      $credit12 = $credit12+$keya->credit+$keya->check;
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben12 = $ben12+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }

                              }
                         ?>
                        <div class="col-lg-4 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px">
                                <a href="fournisseur"><div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                      <?php $num1 = 0;
                                                foreach ($four as $key) {
                                                    $num1 = $num1+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num1; ?></h2>
                                        <p class="mb-0" >FOURNISSEURS</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div></a>
                               
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-sm-6 col-12">
                              <a href="produit"><div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                      <?php $num2 = 0;
                                                foreach ($pro as $key) {
                                                    $num2 = $num2+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num2; ?></h2>
                                        <p class="mb-0" >PRODUITS</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-user-check text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div></a>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="table_credit">  <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                      <?php $num = 0;
                                        $salam = 50;
                                                foreach ($clien as $key) {
                                                    $num = $num+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num; ?></h2>
                                        <p class="mb-0" >CLIENTS</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-tag text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div></a>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                            <a href="Categories"> <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                      <?php $num3 = 0;
                                                foreach ($cat as $key) {
                                                    $num3 = $num3+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num3; ?></h2>
                                        <p class="mb-0" >CATEGORIES</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather  icon-bookmark text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div></a>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12">
                             
                            <a href="commande"><div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                      <?php $num4 = 0;
                                                  foreach ($pro as $key) {
                                                        if ($key->min_stock >= $key->quantité) { 
                                                            $num4 = $num4+1;}}?>
                                        <h2 class="text-bold-700" ><?php echo $num4; ?></h2>
                                        <p class="mb-0" >COMMANDES</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div></a>
                        </div>
                       
                        <div class="col-lg-4 col-sm-6 col-12">
                             <a href="SAV"> <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                      <?php $num5 = 0;
                                                foreach ($SAV as $key) {
                                                    $num5 = $num5+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num5; ?></h2>
                                        <p class="mb-0" >SAV</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-user-check text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div></a>
                        </div>
                        <!--<div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="card text-white bg-gradient-dark text-center">
                                <div class="card-content d-flex">
                                    <div class="card-body" >
                                        <h4 class="card-title text-white mt-3">Commandes </h4>
                                        <h4 class="card-title text-white">10</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                              <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <?php $num1 = 0;
                                                foreach ($four as $key) {
                                                    $num1 = $num1+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num1; ?></h2>
                                        <p class="mb-0" >FOURNISSEURS</p>
                                    </div>
                                    <div class="avatar bg-rgba-success p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-user-check text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                         <div class="col-lg-3 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >LES CLIENTS</h2>
                                        <p class="mb-0" ></p>
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
                                        <?php $num2 = 0;
                                                foreach ($cat as $key) {
                                                    $num2 = $num2+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num2; ?></h2>
                                        <p class="mb-0" >CATÉGORIES </p>
                                    </div>
                                    <div class="avatar bg-rgba-warning p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-tag text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <?php $num3 = 0;
                                                foreach ($marque as $key) {
                                                    $num3 = $num3+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num3; ?></h2>
                                        <p class="mb-0" >MARQUES</p>
                                    </div>
                                    <div class="avatar bg-rgba-info p-50">
                                        <div class="avatar-content">
                                            <i class="feather  icon-bookmark text-info font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <?php $num = 0;
                                        $salam = 50;
                                                foreach ($clien as $key) {
                                                    $num = $num+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num; ?></h2>
                                        <p class="mb-0" >LES CLIENTS</p>
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
                                        <?php $num1 = 0;
                                                foreach ($four as $key) {
                                                    $num1 = $num1+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num1; ?></h2>
                                        <p class="mb-0" >FOURNISSEURS</p>
                                    </div>
                                    <div class="avatar bg-rgba-success p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-user-check text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                              <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <?php $num2 = 0;
                                                foreach ($cat as $key) {
                                                    $num2 = $num2+1;
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num2; ?></h2>
                                        <p class="mb-0" >CATÉGORIES </p>
                                    </div>
                                    <div class="avatar bg-rgba-warning p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-tag text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" ><?php echo $num3; ?></h2>
                                        
                                    </div>
                                    <div class="avatar bg-rgba-info p-50">
                                        <div class="avatar-content">
                                            <i class="feather  icon-bookmark text-info font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>-->
                    </div>

                
            </section>
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
    <script src="<?php echo base_url(); ?>assets_ar/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets_ar/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets_ar/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets_ar/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets_ar/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->
<?php $jun = 'يناير'; ?>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets_ar/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->
    <!-- BEGIN: Page JS
    <script src="<?php echo base_url(); ?>assets_ar/app-assets/js/scripts/charts/chart-apex.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function () {
            //alert("<?php echo $jun; ?>");
  var $primary = '#7367F0',
    $success = '#28C76F',
    $danger = '#EA5455',
    $warning = '#FF9F43',
    $info = '#00cfe8',
    $label_color_light = '#dae1e7';

  var themeColors = [$primary, $success, $danger, $warning, $info];
        var columnChartOptions = {
    chart: {
      height: 350,
      type: 'bar',
    },
    colors: themeColors,
    plotOptions: {
      bar: {
        horizontal: false,
        endingShape: 'rounded',
        columnWidth: '55%',
      },
    },
    dataLabels: {
      enabled: false
    },
    stroke: {
      show: true,
      width: 2,
      colors: ['transparent']
    },
    series: [{
      name: 'رقم المعاملات',
      data: [<?php echo $mois1; ?>, <?php echo $mois2; ?>, <?php echo $mois3; ?>, <?php echo $mois4; ?>, <?php echo $mois5; ?>, <?php echo $mois6; ?>, <?php echo $mois7; ?>, <?php echo $mois8; ?>, <?php echo $mois9; ?>, <?php echo $mois10; ?>, <?php echo $mois11; ?>, <?php echo $mois12; ?>]
    },{
      name: 'الاتباح',
      data: [<?php echo $ben1; ?>, <?php echo $ben2; ?>, <?php echo $ben3; ?>, <?php echo $ben3; ?>, <?php echo $ben5; ?>, <?php echo $ben6; ?>, <?php echo $ben7; ?>, <?php echo $ben8; ?>, <?php echo $ben9; ?>, <?php echo $ben10; ?>, <?php echo $ben11; ?>, <?php echo $ben12; ?>]
    }, {
      name: 'الائتمان',
      data: [<?php echo $credit1; ?>, <?php echo $credit2; ?>, <?php echo $credit3; ?>, <?php echo $credit3; ?>, <?php echo $credit5; ?>, <?php echo $credit6; ?>, <?php echo $credit7; ?>, <?php echo $credit8; ?>, <?php echo $credit9; ?>, <?php echo $credit10; ?>, <?php echo $credit11; ?>, <?php echo $credit12; ?>]
    }],
    legend: {
      offsetY: -10
    },
    xaxis: {
      categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
    },
    yaxis: {
      title: {
        text: ' DH'
      }
    },
    fill: {
      opacity: 1

    },
    tooltip: {
      y: {
        formatter: function (val) {
          return  val + " DH"
        }
      }
    }
  }
  var columnChart = new ApexCharts(
    document.querySelector("#column-chart"),
    columnChartOptions
  );

  columnChart.render();
});
    </script>


</body>
<!-- END: Body-->

</html>