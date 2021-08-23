<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <?php include('logo.php'); ?>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/charts/apexcharts.css">
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
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <!-- BEGIN: Main Menu-->
    <?php include('header.php'); ?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    
        <div class="content-wrapper">
            <div class="content-body">
                <!-- apex charts section start -->
                <section id="dashboard-ecommerce">
                    <div class="row">
                        <!--<div class="col-lg-6 col-sm-6 col-12"></div>
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
                                          $total1 = $total1 + $salam->total1 ;
                                      }
                                  }?>
                                        <h3 style="padding-left: 50px">  رقم المعاملات</h3>
                                        <p class="mb-0" ><h3 dir="rtl" style="color: #1991FA;" class="text-bold-700" ><b style="padding-right: 50px"><?php echo $total1; ?></b> د.م  </h3></p>
                                    </div>
                                </div>
                               
                            </div>
                        </div>-->
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
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
                                          $total1 = $total1 + $salam->total1 ;
                                      }
                                  }?>
                                        <h3 style="padding-left: 50px">  رقم المعاملات</h3>
                                        <p class="mb-0" ><h3 dir="rtl" style="color: #1991FA;" class="text-bold-700" ><b style="padding-right: 50px"><?php echo $total1; ?></b> د.م  </h3></p>
                                    </div>
                                    <div class="avatar bg-rgba-success p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-server text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="card">
                                <div class="card-header d-flex align-items-start pb-0">
                                    <div>
                                          <?php $total = 0;
                                        foreach ($pro as $row) {
                                          if ($row->archive != 'oui') {
                                                        $tot = $row->quantité*$row->prix_e;
                                                        $total = $total+$tot ;  
                                                                     } } ?>
                                       <h3 style="padding-left: 70px"> رأس المال </h3>
                                        <p class="mb-0" ><h3 dir="rtl" style="color: #1991FA;" class="text-bold-700" ><b style="padding-right: 50px"><?php echo $total; ?> </b> د.م  </h3></p>
                                    </div>
                                    <div class="avatar bg-rgba-danger p-50 m-0">
                                        <div class="avatar-content">
                                            <i class="feather icon-activity text-danger font-medium-5"></i>
                                        </div>
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
                        $charge1 = 0;
                        $charge2 = 0;
                        $charge3 = 0;
                        $charge4 = 0;
                        $charge5 = 0;
                        $charge6 = 0;
                        $charge7 = 0;
                        $charge8 = 0;
                        $charge9 = 0;
                        $charge10 = 0;
                        $charge11 = 0;
                        $charge12 = 0;
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
                                       $bonat = $this->Model->get_by('bonat','id_bons',$keya->id_bons);
                                      if (!empty($bonat)) {
                                          foreach ($bonat as $key5) {
                                            $ben12 = $ben12+($key5->quantité*($key5->prix_s-$key5->prix_e));
                                          }
                                      }
                                    }
                                  }

                              }
                                $this->db->order_by("id", "asc");
                              $cre = $this->Model->get('charge');
                               foreach ($cre as $keya) {
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
                                      $charge1 = $charge1+$keya->montant;
                                      $ben1 = $ben1-$keya->montant;
                                    }
                                  }
                                  if ($var2 <= $date) {
                                    if ($var3 > $date) {
                                     $charge2 = $charge2+$keya->montant;
                                     $ben2 = $ben2-$keya->montant;
                                    }
                                  }
                                  if ($var3 <= $date) {
                                    if ($var4 > $date) {
                                     $charge3 = $charge3+$keya->montant;
                                     $ben3 = $ben3-$keya->montant;
                                    }
                                  }
                                  if ($var4 <= $date) {
                                    if ($var5 > $date) {
                                      $charge4 = $charge4+$keya->montant;
                                      $ben4 = $ben4-$keya->montant;
                                    }
                                  }
                                  if ($var5 <= $date) {
                                    if ($var6 > $date) {
                                    $charge5 = $charge5+$keya->montant;
                                    $ben5 = $ben5-$keya->montant;
                                    }
                                  }
                                  if ($var6 <= $date) {
                                    if ($var7 > $date) {
                                    $charge6 = $charge6+$keya->montant;
                                    $ben6 = $ben6-$keya->montant;
                                    }
                                  }
                                  if ($var7 <= $date) {
                                    if ($var8 > $date) {
                                    $charge7 = $charge7+$keya->montant;
                                    $ben7 = $ben7-$keya->montant;
                                    }
                                  }
                                  if ($var8 <= $date) {
                                    if ($var9 > $date) {
                                   $charge8 = $charge8+$keya->montant;
                                   $ben8 = $ben8-$keya->montant;
                                    }
                                  }
                                  if ($var9 <= $date) {
                                    if ($var10 > $date) {
                                    $charge9 = $charge9+$keya->montant;
                                    $ben9 = $ben9-$keya->montant;
                                    }
                                  }
                                  if ($var10 <= $date) {
                                    if ($var11 > $date) {
                                      $charge10 = $charge10+$keya->montant;
                                      $ben10 = $ben10-$keya->montant;
                                    }
                                  }
                                  if ($var11 <= $date) {
                                    if ($var12 > $date) {
                                     $charge11 = $charge11+$keya->montant;
                                     $ben11 = $ben11-$keya->montant;
                                    }
                                  }
                                  if ($var12 <= $date) {
                                    if ($var13 >= $date) {
                                      $charge12 = $charge12+$keya->montant;
                                      $ben12 = $ben12-$keya->montant;
                                    }
                                  }
                              }   
                                     $this->db->order_by("id", "asc");
                              $cre = $this->Model->get('credit');
                               foreach ($cre as $keya) {
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
                                    if ($var2 > $date) {
                                      $credit1 = $credit1+$keya->credit-$keya->debit;
                                    }
                                  if ($var2 <= $date) {
                                    if ($var3 > $date) {
                                     $credit2 = $credit2+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var3 <= $date) {
                                    if ($var4 > $date) {
                                     $credit3 = $credit3+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var4 <= $date) {
                                    if ($var5 > $date) {
                                     $credit4 = $credit4+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var5 <= $date) {
                                    if ($var6 > $date) {
                                      $credit5 = $credit5+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var6 <= $date) {
                                    if ($var7 > $date) {
                                      $credit6 = $credit6+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var7 <= $date) {
                                    if ($var8 > $date) {
                                      $credit7 = $credit7+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var8 <= $date) {
                                    if ($var9 > $date) {
                                     $credit8 = $credit8+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var9 <= $date) {
                                    if ($var10 > $date) {
                                      $credit9 = $credit9+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var10 <= $date) {
                                    if ($var11 > $date) {
                                      $credit10 = $credit10+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var11 <= $date) {
                                    if ($var12 > $date) {
                                     $credit11 = $credit11+$keya->credit-$keya->debit;
                                    }
                                  }
                                  if ($var12 <= $date) {
                                    if ($var13 >= $date) {
                                      $credit12 = $credit12+$keya->credit-$keya->debit;
                                    }
                                  } 
                              }   
                                  $credit2 = $credit2+$credit1;
                                  $credit3 = $credit3+$credit2;
                                  $credit4 = $credit4+$credit3;
                                  $credit5 = $credit5+$credit4;
                                  $credit6 = $credit6+$credit5;
                                  $credit7 = $credit7+$credit6;
                                  $credit8 = $credit8+$credit7;
                                  $credit9 = $credit9+$credit8;
                                  $credit10 = $credit10+$credit9;
                                  $credit11 = $credit11+$credit10;
                                  $credit12 = $credit12+$credit11;
                                  if ($date2 < $var2) {
                                    $credit2 = 0;
                                  }
                                  if ($date2 < $var3) {
                                    $credit3 = 0;
                                  }
                                  if ($date2 < $var4) {
                                    $credit4 = 0;
                                  }
                                  if ($date2 < $var5) {
                                    $credit5 = 0;
                                  }
                                  if ($date2 < $var5) {
                                    $credit5 = 0;
                                  }
                                  if ($date2 < $var6) {
                                    $credit6 = 0;
                                  }
                                  if ($date2 < $var7) {
                                    $credit7 = 0;
                                  }
                                  if ($date2 < $var8) {
                                    $credit8 = 0;
                                  }
                                  if ($date2 < $var9) {
                                    $credit9 = 0;
                                  }
                                  if ($date2 < $var10) {
                                    $credit10 = 0;
                                  }
                                  if ($date2 < $var11) {
                                    $credit11 = 0;
                                  }
                                  if ($date2 < $var12) {
                                    $credit12 = 0;
                                  }
                                  $this->db->order_by("id", "asc");
                              $cre = $this->Model->get('salaire');
                               foreach ($cre as $keyi) {
                                $date = $keyi->date;
                                  $date = explode(' ', $date);
                                  $date = explode('-', $date[0]);
                                  $date = $date[0].$date[1].$date[2];
                                  if ($var1 <= $date) {
                                    if ($var2 > $date) {
                                       $charge1 = $charge1+$keyi->salaire;
                                       $ben1 = $ben1-$keyi->salaire;
                                    }
                                  }
                                  if ($var2 <= $date) {
                                    if ($var3 > $date) {
                                      $ben2 = $ben2-$keyi->salaire;
                                      $charge2 = $charge2+$keyi->salaire;
                                    }
                                  }
                                  if ($var3 <= $date) {
                                    if ($var4 > $date) {
                                      $ben3 = $ben3-$keyi->salaire;
                                      $charge3 = $charge3+$keyi->salaire;
                                    }
                                  }
                                  if ($var4 <= $date) {
                                    if ($var5 > $date) {
                                      $ben4 = $ben4-$keyi->salaire;
                                      $charge4 = $charge4+$keyi->salaire;
                                    }
                                  }
                                  if ($var5 <= $date) {
                                    if ($var6 > $date) {
                                       $ben5 = $ben5-$keyi->salaire;
                                       $charge5 = $charge5+$keyi->salaire;
                                    }
                                  }
                                  if ($var6 <= $date) {
                                    if ($var7 > $date) {
                                       $ben6 = $ben6-$keyi->salaire;
                                       $charge6 = $charge6+$keyi->salaire;
                                    }
                                  }
                                  if ($var7 <= $date) {
                                    if ($var8 > $date) {
                                         $ben7 = $ben7-$keyi->salaire;
                                         $charge7 = $charge7+$keyi->salaire;
                                    }
                                  }
                                  if ($var8 <= $date) {
                                    if ($var9 > $date) {
                                         $ben8 = $ben8-$keyi->salaire;
                                         $charge8 = $charge8+$keyi->salaire;
                                    }
                                  }
                                  if ($var9 <= $date) {
                                    if ($var10 > $date) {
                                         $ben9 = $ben9-$keyi->salaire;
                                         $charge9 = $charge9+$keyi->salaire;
                                    }
                                  }
                                  if ($var10 <= $date) {
                                    if ($var11 > $date) {
                                           $ben10 = $ben10-$keyi->salaire;
                                           $charge10 = $charge10+$keyi->salaire;
                                    }
                                  }
                                  if ($var11 <= $date) {
                                    if ($var12 > $date) {
                                           $ben11 = $ben11-$keyi->salaire;
                                           $charge11 = $charge11+$keyi->salaire;
                                    }
                                  }
                                  if ($var12 <= $date) {
                                    if ($var13 >= $date) {
                                           $ben12 = $ben12-$keyi->salaire ;
                                           $charge12 = $charge12+$keyi->salaire;
                                    }
                                  } 
                                }
                         ?>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="Categories"><div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-info p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-eye text-info font-medium-5"></i>
                                            </div>
                                        </div>
                                        <?php $num3 = 0;
                                                foreach ($cat as $key) {
                                                  if ($key->archive != 'oui') {
                                                    $num3 = $num3+1;
                                                  }
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num3; ?></h2>
                                        <p class="mb-0" >الفئات </p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="commande"><div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-warning p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-message-square text-warning font-medium-5"></i>
                                            </div>
                                        </div>
                                        <?php $num4 = 0;
                                                  foreach ($pro as $key) {
                                                    if ($key->archive != 'oui') {
                                                        if ($key->min_stock >= $key->quantité) { 
                                                            $num4 = $num4+1;
                                                          }
                                                    }
                                                  } ?>
                                        <h2 class="text-bold-700" ><?php echo $num4; ?></h2>
                                        <p class="mb-0" >السلع المطلوبة</p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="produit"><div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-shopping-bag text-danger font-medium-5"></i>
                                            </div>
                                        </div>
                                        <?php $num2 = 0;
                                                foreach ($pro as $key) {
                                                  if ($key->archive != 'oui') {
                                                    $num2 = $num2+1;
                                                  }
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num2; ?></h2>
                                        <p class="mb-0" >المنتجات</p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                           <a href="table_credit"> <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-primary p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-heart text-primary font-medium-5"></i>
                                            </div>
                                        </div>
                                        <?php $num = 0;
                                        $salam = 50;
                                                foreach ($clien as $key) {
                                                  if ($key->archive != 'oui') {
                                                    $num = $num+1;
                                                } } ?>
                                        <h2 class="text-bold-700" ><?php echo $num; ?></h2>
                                        <p class="mb-0" >العملاء</p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                           <a href="SAV"> <div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-success p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-award text-success font-medium-5"></i>
                                            </div>
                                        </div>
                                        <?php $num5 = 0;
                                                foreach ($SAV as $key) {
                                                  if ($key->archive != 'oui') {
                                                    $num5 = $num5+1;
                                                } } ?>
                                        <h2 class="text-bold-700" ><?php echo $num5; ?></h2>
                                        <p class="mb-0" >خدمة بعد البيع </p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <div class="col-xl-2 col-md-4 col-sm-6">
                            <a href="fournisseur"><div class="card text-center">
                                <div class="card-content">
                                    <div class="card-body">
                                        <div class="avatar bg-rgba-danger p-50 m-0 mb-1">
                                            <div class="avatar-content">
                                                <i class="feather icon-truck text-danger font-medium-5"></i>
                                            </div>
                                        </div>
                                        <?php $num1 = 0;
                                                foreach ($four as $key) {
                                                  if ($key->archive != 'oui') {
                                                    $num1 = $num1+1;
                                                  }
                                                } ?>
                                        <h2 class="text-bold-700" ><?php echo $num1; ?></h2>
                                        <p class="mb-0" >الموردين </p>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                        <!--<div class="col-lg-4 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px">
                                <a href="fournisseur"><div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                      
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
                                        <p class="mb-0" >خدمة بعد البيع </p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-user-check text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div></a>
                        </div>-->
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
                <!-- // Apex charts section end -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    <!-- END: Footer-->
 <?php include('footer.php'); ?>
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
   <?php $chifre = "Chiffre d'affaires (H.T)";
    $jun = 'يناير';
$salam = ' رقم المعاملات'; ?>?>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>

    <!-- <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/charts/chart-apex.js"></script>
     END: Page JS-->
    <script type="text/javascript">
        $(document).ready(function () {
/*
  var $primary = '#7367F0',
    $success = '#28C76F',
    $danger = '#EA5455',
    $warning = '#FF9F43',
    $info = '#00cfe8',
    $label_color_light = '#dae1e7';

  var themeColors = ["#1d2946", $success, $danger, $warning, $info];
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
      name: "<?php echo $chifre ; ?>",
      data: [<?php echo $mois1; ?>, <?php echo $mois2; ?>, <?php echo $mois3; ?>, <?php echo $mois4; ?>, <?php echo $mois5; ?>, <?php echo $mois6; ?>, <?php echo $mois7; ?>, <?php echo $mois8; ?>, <?php echo $mois9; ?>, <?php echo $mois10; ?>, <?php echo $mois11; ?>, <?php echo $mois12; ?>]
    } ,{
      name: 'Bénéfice',
      data: [<?php echo $ben1; ?>, <?php echo $ben2; ?>, <?php echo $ben3; ?>, <?php echo $ben3; ?>, <?php echo $ben5; ?>, <?php echo $ben6; ?>, <?php echo $ben7; ?>, <?php echo $ben8; ?>, <?php echo $ben9; ?>, <?php echo $ben10; ?>, <?php echo $ben11; ?>, <?php echo $ben12; ?>]
    }, {
      name: 'Crédit',
      data: [<?php echo $credit1; ?>, <?php echo $credit2; ?>, <?php echo $credit3; ?>, <?php echo $credit3; ?>, <?php echo $credit5; ?>, <?php echo $credit6; ?>, <?php echo $credit7; ?>, <?php echo $credit8; ?>, <?php echo $credit9; ?>, <?php echo $credit10; ?>, <?php echo $credit11; ?>, <?php echo $credit12; ?>]
    }, {
      name: 'charge',
      data: [<?php echo $charge1; ?>, <?php echo $charge2; ?>, <?php echo $charge3; ?>, <?php echo $charge4; ?>, <?php echo $charge5; ?>, <?php echo $charge6; ?>, <?php echo $charge7; ?>, <?php echo $charge8; ?>, <?php echo $charge9; ?>, <?php echo $charge10; ?>, <?php echo $charge11; ?>, <?php echo $charge12; ?>]
    }, ],
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

  columnChart.render();*/



  var $primary = '#7367F0',
    $success = '#28C76F',
    $danger = '#EA5455',
    $warning = '#FF9F43',
    $info = '#00cfe8',
    $label_color_light = '#dae1e7';

  var themeColors = [$primary, $success, $danger, $warning, $info];

  // RTL Support
  var yaxis_opposite = false;
  if($('html').data('textdirection') == 'rtl'){
    yaxis_opposite = true;
  }
  // Column Chart
  // ----------------------------------
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
      name: '  رقم المعاملات',
      data: [<?php echo $mois12; ?>, <?php echo $mois11; ?>, <?php echo $mois10; ?>, <?php echo $mois9; ?>, <?php echo $mois8; ?>, <?php echo $mois7; ?>, <?php echo $mois6; ?>, <?php echo $mois5; ?>, <?php echo $mois4; ?>, <?php echo $mois3; ?>, <?php echo $mois2; ?>, <?php echo $mois1; ?>]
    }, {
      name: '  الاتباح',
      data: [<?php echo $ben12; ?>, <?php echo $ben11; ?>, <?php echo $ben10; ?>, <?php echo $ben9; ?>, <?php echo $ben8; ?>, <?php echo $ben7; ?>, <?php echo $ben6; ?>, <?php echo $ben5; ?>, <?php echo $ben4; ?>, <?php echo $ben3; ?>, <?php echo $ben2; ?>, <?php echo $ben1; ?>]
    }, {
      name: '  الائتمان',
      data: [<?php echo $credit12; ?>, <?php echo $credit11; ?>, <?php echo $credit10; ?>, <?php echo $credit9; ?>, <?php echo $credit8; ?>, <?php echo $credit7; ?>, <?php echo $credit6; ?>, <?php echo $credit5; ?>, <?php echo $credit4; ?>, <?php echo $credit3; ?>, <?php echo $credit2; ?>, <?php echo $credit1; ?>]
    }, {
      name: '  المصاريف ',
      data: [<?php echo $charge12; ?>, <?php echo $charge11; ?>, <?php echo $charge10; ?>, <?php echo $charge9; ?>, <?php echo $charge8; ?>, <?php echo $charge7; ?>, <?php echo $charge6; ?>, <?php echo $charge5; ?>, <?php echo $charge4; ?>, <?php echo $charge3; ?>, <?php echo $charge2; ?>, <?php echo $charge1; ?>]
    }],
    legend: {
      offsetY: -10
    },
    xaxis: {
      categories: ['Dec','Nov', 'Oct', 'Sep', 'Aug', 'Jul', 'Jun', 'May', 'Apr', 'Mar', 'Feb', 'Jan'],
    },
    yaxis: {
      title: {
        text: ' DH'
      },
      opposite: yaxis_opposite
    },
    fill: {
      opacity: 1

    },
    tooltip: {
      y: {
        formatter: function (val) {
          return val + " DH"
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