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
  <?php /*
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/card-analytics.css">
    <!-- END: Page CSS--> */ ?>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
      <!-- BEGIN: Main Menu-->

        <!-- BEGIN: Header-->
        <?php include('header.php'); ?>
        <!-- END: Header-->
<?php if ($type == 'admin') {
  foreach ($pouvoirs as $key) { ?>
        <div class="content-wrapper">

            <div class="content-body">
                <div id="user-profile">
                    <section id="profile-info">
                        <div class="row">
                          <div class="col-lg-9 col-12">
                                <div class="card" dir="rtl">
                                    <div class="card-body">
                  <form method="post" action="update_compte" enctype="multipart/form-data" >
                                       
                     <div class="form-group">
                      <div class="row gutters-xs">
                         
                          <div class="col-3 " style="text-align: right">
                          <label class="form-label">الصورة</label> 
                        </div>
                        <div class="col-9" >
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label"> اختر صورة </label>
                            </div>
                          </div>
                      </div>
                    </div>  
                    <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-3"  style="text-align: right">
                          <span>الاسم الشخصي</span>
                        </div>
                        <div class="col-md-9" >
                          <div class="position-relative has-icon-left">
                            <input type="hidden" value="<?php echo $key->id ;?>" name="id">
                            <input type="hidden" value="profil" name="page">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->nom ;?>" name="nom" placeholder="Nom">
                            <div class="form-control-position">
                              <i class="feather icon-user"></i>
                            </div>
                          </div>
                        </div> 
                        
                         
                      </div>
                    </div>  
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3"  style="text-align: right">
                          <span>الاسم العائلي</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->pre ;?>" name="pre" placeholder="Prenom">
                            <div class="form-control-position">
                              <i class="feather icon-user"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-3"  style="text-align: right">
                          <span>الهاتف المحمول</span>
                        </div>
                        <div class="col-md-9" >
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->tele ;?>" name="tele" placeholder="Phone">
                            <div class="form-control-position">
                              <i class="feather icon-phone"></i>
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-3"  style="text-align: right">
                          <span>البريد الالكتروني</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" name="mail" value="<?php echo $key->mail ;?>" placeholder="Email">
                            <div class="form-control-position">
                              <i class="fa fa-at"></i>
                            </div>
                          </div>
                        </div>
                          
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span>العنوان</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->adress ;?>" name="adress" placeholder="adresse">
                            <div class="form-control-position">
                              <i class="fa fa-map-marker"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span>حساب الفيسبوك</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->facebook ;?>" name="facebook" placeholder="Facebook">
                            <div class="form-control-position">
                              <i class="fa fa-facebook-square"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div><div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span>حساب الانستغرام</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->insta ;?>" name="insta" placeholder="Instagram">
                            <div class="form-control-position">
                              <i class="fa fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span>حساب التويتر</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->twitter ;?>" name="twitter" placeholder="Twitter">
                            <div class="form-control-position">
                              <i class="fa fa-twitter-square"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                     <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span>حساب اليوتيوب</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->youtube ;?>" name="youtube" placeholder="Twitter">
                            <div class="form-control-position">
                              <i class="fa fa-youtube-square"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-12">
                          <div class="modal-footer">
                                                        <input type="submit" value="Enregistrer" name="UPDATE" class="btn btn-primary" />
                                                    </div>
                        </div>
                        
                         
                      </div>
                    </div>
                  
                  
                  
                  
                  </form>
                                    </div>
                                </div>


               </div>
                            <div class="col-lg-3 col-12">
                                <div class="card" >
                                    <div class="profile-header mb-2">
                                      <div class="relative">
                                        <div class="cover-container" >
                                          <img class="img-fluid bg-cover rounded-0 w-100" src="<?php echo base_url(); ?>assets/app-assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
                                        </div>
                                        <div class="profile-img-container d-flex align-items-center justify-content-between" style="padding-left: 20px;">
                                         <a href="profil" ><button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                              <i class="feather icon-settings"></i>
                                            </button></a>
                                          <div class="float-left" style="float:
                            left">
                                           <!-- <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                               <i class="feather icon-edit-2"></i>
                                            </button>-->
                                            
                                            <img src="<?php echo base_url();?>upload/compte/<?php echo $key->image; ?>" class="rounded-circle img-border box-shadow-1" style="width: 50px; height: 50px;">
                                          </div>
                                        </div>
                                      </div>
                    
                                    </div>
                  
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body"  style="text-align: right">
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b> :  الاسم الشخصي و العائلي</b></h6>
                                            <p><?php echo $key->nom.' '.$key->pre; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>:  الهاتف المحمول</b></h6>
                                            <p><?php echo $key->tele; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>:  البريد الالكتروني</b></h6>
                                            <p><?php echo $key->mail; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>: العنوان</b></h6>
                                            <p><?php echo $key->adress; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>: نوع العقد</b></h6>
                                            <p><?php echo $key->type; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>: نوع الحساب</b></h6>
                                            <p><?php echo 'مستخدم'; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <a href="<?php echo $key->facebook; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-facebook"></i></button></a>
                                            <a href="<?php echo $key->twitter; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-twitter"></i></button></a>
                                            <a href="<?php echo $key->insta; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-instagram"></i></button></a>
                                            <a href="<?php echo $key->youtube; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-youtube"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                              </div>
                          </div>
                      </section>
                </div>

            </div>
        </div>
      <?php } }else{ $get = $this->Model->get_by('login','id',$id);   
                             foreach ($get as $key) { ?>
             <div class="content-wrapper">

            <div class="content-body">
                <div id="user-profile">
                     
                 
                    <section id="profile-info">
                        <div class="row">
                          <div class="col-lg-9 col-12">
                                <div class="card" dir="rtl">
                                    <div class="card-body">
                                      <div id="1">
                  <form method="post" action="update_login" enctype="multipart/form-data" >
                     <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-3" style="text-align: right">
                          <label class="form-label"><b>صورة المستخدم </b></label> 
                        </div>
                        <div class="col-9">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" name="image">
                            <label class="custom-file-label"> اختر صورة </label>
                            </div>
                          </div>
                      </div>
                    </div>  
                    <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-3" style="text-align: right">
                          <span><b>الاسم الشخصي </b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="hidden" value="<?php echo $key->id ;?>" name="id">
                            <input type="hidden" value="profil" name="page">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->nom ;?>" name="nom" placeholder="Nom">
                            <div class="form-control-position">
                              <i class="feather icon-user"></i>
                            </div>
                          </div>
                        </div> 
                      </div>
                    </div>  
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span><b>الاسم العائلي </b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->pre ;?>" name="pre" placeholder="Prenom">
                            <div class="form-control-position">
                              <i class="feather icon-user"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-3" style="text-align: right">
                          <span><b>رقم الهاتف المحمول</b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->tele ;?>" name="tele" placeholder="Phone">
                            <div class="form-control-position">
                              <i class="feather icon-phone"></i>
                            </div>
                          </div>
                        </div> 
                        
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-3" style="text-align: right">
                          <span><b>رقم الهاتف الثابت</b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->fix ;?>" name="fix" placeholder="Phone">
                            <div class="form-control-position">
                              <i class="feather icon-phone"></i>
                            </div>
                          </div>
                        </div> 
                        
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-3" style="text-align: right">
                          <span><b>البريد الالكتروني</b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" name="mail" value="<?php echo $key->mail ;?>" placeholder="Email">
                            <div class="form-control-position">
                              <i class="fa fa-at"></i>
                            </div>
                          </div>
                        </div>
                          
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span><b>العنوان </b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->adress ;?>" name="adress" placeholder="adresse">
                            <div class="form-control-position">
                              <i class="fa fa-map-marker"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span><b>الفيسبوك</b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->facebook ;?>" name="facebook" placeholder="Facebook">
                            <div class="form-control-position">
                              <i class="fa fa-facebook-square"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div><div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span><b>الانستغرام</b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->insta ;?>" name="insta" placeholder="Instagram">
                            <div class="form-control-position">
                              <i class="fa fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span><b>التويتر</b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->twitter ;?>" name="twitter" placeholder="Twitter">
                            <div class="form-control-position">
                              <i class="fa fa-twitter-square"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                     <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3" style="text-align: right">
                          <span><b>اليوتيوب</b></span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->youtube ;?>" name="youtube" placeholder="Twitter">
                            <div class="form-control-position">
                              <i class="fa fa-youtube-square"></i>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-12">
                          <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">تعديل</button>
                                                    </div>
                        </div>
                      </div>
                    </div>
                  </form></div>
                                    </div>
                                </div>


               </div>
                            <div class="col-lg-3 col-12">
                                <div class="card" >
                                    <div class="profile-header mb-2">
                                      <div class="relative">
                                        <div class="cover-container" >
                                          <img class="img-fluid bg-cover rounded-0 w-100" src="<?php echo base_url(); ?>assets/app-assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
                                        </div>
                                        <div class="profile-img-container d-flex align-items-center justify-content-between" style="padding-left: 20px;">
                                          <a href="profil"><button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                                  <i class="feather icon-settings"></i>
                                                </button></a>
                                        
                                          <div class="float-left">
                                            <div id="2">
                                                 <img src="<?php echo base_url();?>upload/compte/<?php echo $key->image; ?>" class="rounded-circle img-border box-shadow-1" style="width: 50px; height: 50px;">
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                    
                                    </div>
                  
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body" style="text-align: right">
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b> :  الاسم الشخصي و العائلي</b></h6>
                                            <p ><?php echo $key->nom.' '.$key->pre; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>:  الهاتف المحمول</b></h6>
                                            <p><?php echo $key->tele; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>:  الهاتف الثابت </b></h6>
                                            <p ><?php echo $key->fix; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>:  البريد الالكتروني </b></h6>
                                            <p><?php echo $key->mail; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>: العنوان </b></h6>
                                            <p><?php echo $key->adress; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0"><b>:  نوع الحساب </b></h6>
                                            <p><?php echo 'مدير الشركة'; ?></p>
                                        </div>
                                        <div class="mt-1" style="float: right">
                                            <a href="<?php echo $key->facebook; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-facebook"></i></button></a>
                                            <a href="<?php echo $key->twitter; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-twitter"></i></button></a>
                                            <a href="<?php echo $key->insta; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-instagram"></i></button></a>
                                            <a href="<?php echo $key->youtube; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-youtube"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a  data-toggle="modal" data-target="#large"><h4 class="card-title"  style="color:#008b9c;padding-left: 120px">Collaborateurs</h4></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                          <?php      $this->db->limit(9);                    
                                                     $this->db->order_by('id','DESC');                            
                                              $grh = $this->Model->get('compte');
                                              foreach ($grh as $key1) { ?>
                                          <div class="col-md-4 col-6 user-latest-img">
                                            <!--<img src="" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder"> -->
                                           <img src="<?php echo base_url(); ?>upload/compte/<?php echo $key1->image; ?>"  style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder" title="<?php echo $key1->nom.' ' .$key1->pre; ?>">
                                         </div>
                                            <?php } ?>
                                         <div class="modal fade text-left" id="large" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                            <div class="modal-dialog  modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-primary  white">
                                                        <h4 class="modal-title" id="myModalLabel17">Collaborateurs</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                         <?php $GRH1 = $this->Model->get('compte');
                                                           foreach ($GRH1 as $key2) { ?>
                                                          <div class="col-md-2 col-6 user-latest-img">
                                                             <img src="<?php echo base_url();?>upload/compte/<?php echo $key2->image; ?>" title="<?php echo $key2->nom.' ' .$key2->pre; ?>" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                                          </div><?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
      <?php } } ?>
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
    <!-- BEGIN: Page JS
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/charts/chart-apex.js"></script>-->
    <script type="text/javascript">
        $(document).ready(function () {

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
      name: 'salam',
      data: [<?php echo $mois1; ?>, <?php echo $mois2; ?>, <?php echo $mois3; ?>, <?php echo $mois4; ?>, <?php echo $mois5; ?>, <?php echo $mois6; ?>, <?php echo $mois7; ?>, <?php echo $mois8; ?>, <?php echo $mois9; ?>, <?php echo $mois10; ?>, <?php echo $mois11; ?>, <?php echo $mois12; ?>]
    }, {
      name: 'Free Cash Flow',
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
    <script type="text/javascript">
      function change() {
        var change = '<form method="post" action="update_pass" enctype="multipart/form-data" ><div class="form-group"><div class="row gutters-xs"><div class="col-md-12"><h4 class="card-title"  style="color:#008b9c;"> Modifier le mot de passe </h4></div></div></div><div class="form-group"><div class="row gutters-xs"><div class="col-md-3"><span> User : </span></div><div class="col-md-9"><div class="position-relative has-icon-left"><input type="hidden" value="<?php echo $key->id ;?>" name="id"><input type="text" id="fname-icon" class="form-control"  name="name" value="<?php echo $key->name ;?>"> <div class="form-control-position"><i class="feather icon-unlock"></i></div> </div></div> </div></div>  <div class="form-group"><div class="row gutters-xs"><div class="col-md-3"><span>Mot de Passe </span></div><div class="col-md-9"><div class="position-relative has-icon-left"><input type="hidden" value="<?php echo $key->id ;?>" name="id"><input type="text" id="fname-icon" class="form-control"  name="pass" placeholder=" Mot de Passe "> <div class="form-control-position"><i class="feather icon-unlock"></i></div> </div></div> </div></div>  <div class="form-group"><div class="row gutters-xs"> <div class="col-md-3"><span>Confirmer Mot de Passe </span></div><div class="col-md-9"><div class="position-relative has-icon-left"> <input type="text" id="fname-icon" class="form-control" name="pass1" placeholder="Confirmer Mot de Passe "><div class="form-control-position"><i class="feather icon-unlock"></i></div></div></div></div></div><div class="form-group"><div class="row gutters-xs"> <div class="col-md-12"><div class="modal-footer"><input type="submit" value="Enregistrer" name="UPDATE" class="btn btn-primary" /></div></div></div></div></form>';
        $('#1').html(change);
       var change1 = '<button type="button" onclick="change1()" class="btn btn-icon btn-icon rounded-circle btn-primary"><i class="feather icon-settings"></i></button>';
        $('#2').html(change1);
      }
      function change1() {
        window.location.href = "<?php echo base_url().'profil' ; ?>"; 
      }
    </script>

</body>
<!-- END: Body-->

</html>