<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="rtl">
<!-- BEGIN: Head-->

<head>
    <!-- - var description  = ""-->
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

    
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors-rtl.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/users.css">
    <!-- END: Page CSS-->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/card-analytics.css">
    <!-- BEGIN: Custom CSS-->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/dashboard-ecommerce.css">

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
                            <h2 class="content-header-title float-right mb-0">ملف المورد</h2>
                         
                        </div>
                    </div>
                </div>
                
            </div>
            <?php foreach ($clien as $key) { ?>
            <div class="content-body" dir="rtl">
                <div id="user-profile">
                    <div class="row">
                        <div class="col-12">
                            <div class="profile-header mb-2">
							  <section id="profile-info">
                        <div class="row">
               
              <div class="col-xl-4 col-md-4 col-sm-12 profile-card-1">
                            <div class="card"> 
                              <div class="mt-1" style="text-align:right;margin-right:10px">
                                             <button type="button" class="btn btn-sm btn-icon btn-primary mr-25" data-toggle="modal" data-target="#inlineForm"><i class="feather icon-edit"></i></button>
                                        </div> 
                                <div class="card-header mx-auto">
                                    <div class="avatar avatar-xl">
                                        <img class="img-fluid" src="<?php echo base_url(); ?>upload/fournisseur/<?php echo $key->image; ?>" alt="img placeholder" style="width:162px;height:162px">
                                    </div>
                                </div>
                             
                                <div class="card-content">
                                    <div class="card-body text-center">
                                        <h4><?php echo $key->nom . ' ' . $key->pre; ?></h4><br>
                                        
                                       <div class="card-content">
                                    <div class="card-body">
                                        <?php if (!empty($key->facebook) and $key->facebook != '-') { ?>
                                        <div class="avatar bg-primary">
                                            <div class="avatar-content position-relative">
                                                <a href="<?php echo $key->facebook; ?>"><i class="avatar-icon feather icon-facebook" style="color: #fff"></i></a>
                                            </div>
                                        </div>
                                        <?php }else{ ?>

                                            <div class="avatar bg-light">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-facebook" style="color: #fff"></i>
                                            </div>
                                        </div>
                                        <?php } if (!empty($key->twitter) and $key->twitter != '-') {  ?>
                                        <div class="avatar bg-info">
                                            <div class="avatar-content position-relative">
                                                <a href="<?php echo $key->twitter; ?>"><i class="avatar-icon feather icon-twitter" style="color: #fff"></i></a>
                                                
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                        <div class="avatar bg-light">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-twitter" style="color: #fff"></i>
                                                
                                            </div>
                                        </div>
                                        <?php } if (!empty($key->insta) and $key->insta != '-') {  ?>
                                        <div class="avatar bg-success">
                                            <div class="avatar-content position-relative">
                                                <a href="<?php echo $key->insta; ?>"><i class="avatar-icon feather icon-instagram" style="color: #fff"></i></a>
                                                
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="avatar bg-light">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-instagram" style="color: #fff"></i>
                                                
                                            </div>
                                        </div>
                                        <?php } if (!empty($key->youtube) and $key->youtube != '-') {  ?>
                                         <div class="avatar bg-danger">
                                            <div class="avatar-content position-relative">
                                                <a href="<?php echo $key->youtube; ?>"><i class="avatar-icon feather icon-youtube" style="color: #fff"></i></a>
                                                
                                            </div>
                                        </div>
                                        <?php }else{ ?>
                                            <div class="avatar bg-light">
                                            <div class="avatar-content position-relative">
                                                <i class="avatar-icon feather icon-youtube" style="color: #fff"></i>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                       <br><br>     <br><br>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
						          <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="card">
                                  <div class="mt-1" style="text-align:right;margin-right:10px">
                                             <button type="button" class="btn btn-sm btn-icon btn-primary mr-25" data-toggle="modal" data-target="#inlineForm1"><i class="feather icon-edit"></i></button>
                                        </div> 
                                    <div class="card-body">
                                             <div class="card">
                              
                                
                                          <div class="table-responsive" style="margin-bottom:-50px">
                                       <table class="table table-bordered table-striped">
                               
                                     <tr>
                                        <th>اسم الشركة </th>
                                        <th><?php echo $key->nom_e; ?></th>
                                    </tr>
                              
                                
                                    <tr>
                                        <td> عنوان </td>
                                        <th><?php echo $key->adress; ?></th>
                                       
                                    </tr>
                                    <tr>
                                        <td>هاتف</td>
                                        <th><?php echo $key->tele; ?></th>
                                       
                                    </tr>
                                    <tr>
                                        <td>البريد الإلكتروني</td>
                                        <th><?php echo $key->mail; ?></th>
                                       
                                    </tr>
                                    <tr>
                                        <td>شكل قانوني </td>
                                        <td><?php echo $key->type; ?></td>
                                        
                                    </tr>  
                                    <tr>
                                        <td>رقم التسجيل التجاري</td>
                                        <td><?php echo $key->num_rc; ?></td>
                                        
                                    </tr>
                              <tr>
                                        <td>رقم التعريف المشترك للشركة </td>
                                       <td><?php echo $key->num_ice; ?></td>
                                        
                                    </tr>
                               <tr>
                                        <td>ررقم التعريف المالي</td>
                                        <td><?php echo $key->num_if; ?></td>
                                        
                                    </tr>
                              
                            </table>    
                                   
                                </div>
                                </div>
                                </div>
                                </div>
                                </div> 
                          
       

            </div>
        </section>
         <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
 
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>رقم </th>
                                                        <th>الصورة</th>
                                                        
                                                        <th>اسم المنتج </th>
                                                        <th>الشارة </th>
                                                        <th>الفئة </th>
                                                        <th>التاريخ </th>
                                                        <th>العدد </th>
                                                        <th>ثمن الشراء </th>
                                                        <th>المجموع </th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php foreach ($bon as $key1) { ?>
                                                    <tr>
                                                       <td><?php echo $key1->id; ?></td>
                                                       <td><div class="avatar mr-1 ">
                                            <img src="<?php echo base_url(); ?>upload/produits/<?php echo $key1->image ; ?>" alt="avtar img holder" height="32" width="32">
                                        </div></td>
                                                       <td><?php echo $key1->name; ?></td>
                                                       <td><?php echo $key1->réf; ?></td>
                                                       <td><?php $cat = $this->Model->get_by('catégorie','id',$key1->cat);
                                                       foreach ($cat as $key2) {
                                                            echo $key2->name;
                                                        } ?></td>
                                                       <td><b><?php echo $key1->date; ?></b></td>
                                                       <td><?php echo $key1->quantité; ?></td>
                                                       <td><?php echo $key1->prix_e; ?> DH</td>
                                                       <td><?php echo $key1->prix_e*$key1->quantité; ?> DH</td>
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
                </section>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
     <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33" style="padding-left: 150px"> تعديل معلومات المورد </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="update_image1" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                 <fieldset class="form-group">
                                                                    <label for="basicInputFile" style="float: right">الصورة : </label>
                                                                    <div class="custom-file">
                                                                        <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                        <label class="custom-file-label" for="inputGroupFile01">اختر صورة </label>
                                                                    </div>
                                                                </fieldset>
                                                                 <label  style="float: right">الاسم العائلي : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="nom" value="<?php echo $key->nom; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label  style="float: right">الاسم الشخصي : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="pre" value="<?php echo $key->pre; ?>" class="form-control">
                                                                </div>
                                                                 <label  style="float: right">الفيسبوك : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->facebook; ?>" name="facebook" class="form-control">
                                                                </div>
                                                                 <label  style="float: right"> تغريد : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->twitter; ?>" name="twitter" class="form-control">
                                                                </div>
                                                                 <label  style="float: right">انستغرام : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->insta; ?>" name="insta" class="form-control">
                                                                </div>

                                                                <label  style="float: right">يوتيوب : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->youtube; ?>" name="youtube" class="form-control">
                                                                </div><button type="submit" class="btn btn-primary">تعديل</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
                     <div class="modal fade text-left" id="inlineForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="myModalLabel33" style="padding-left: 300px "> تعديل معلومات المورد </h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <form action="update_four" method="post" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                                 <div class="row">
                                                           
                                                                    <div class="col-sm-6 col-12">
                                                                        <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 250px">
                                                                           ااسم الشركة 
                                                                        </div>
                                                                        <fieldset class="form-group position-relative input-divider-right">
                                                                            <input type="text" name="nom_e" value="<?php echo $key->nom_e; ?>" class="form-control">
                                                                            <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-user"></i>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                    <div class="col-sm-6 col-12">
                                                                        <div class="text-bold-600 font-medium-2 mb-1" style="padding-left: 250px">
                                                                           العنوان  
                                                                        </div>
                                                                        <fieldset class="form-group position-relative input-divider-right">
                                                                            <input type="text" name="adress" value="<?php echo $key->adress; ?>" class="form-control">
                                                                            <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
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
                                                                            <input type="text" name="tele" value="<?php echo $key->tele; ?>" class="form-control">
                                                                            <div class="form-control-position">
                                                                                <i class="feather icon-phone"></i>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                     <div class="col-sm-6 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 200px">
                                                                                البريد الإلكتروني 
                                                                         </div>
                                                                         <fieldset class="form-group position-relative input-divider-right">
                                                                            <input type="text" value="<?php echo $key->mail; ?>" name="mail" class="form-control">
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
                                                                            <select name='type' class='form-control' id='basicSelect' required>
                                                                                 <option><?php echo $key->type; ?></option>
                                                                                 <option> شركة مجهولة الاسم (S.A) </option>
                                                                                 <option>شركة مجهولة الاسم مبسطة (SAS)</option>
                                                                                 <option>شركة ذات مسؤولية محدودة  (SARL) </option>
                                                                                 <option>شركة باسم مشترك (SNC)</option>
                                                                                 <option>شراكة محدودة (SCS)</option>
                                                                                 <option>شراكة محدودة من الأسهم (SCA)</option>
                                                                                 <option>شركة الاشخاص</option>
                                                                             </select>
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-file-text"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                     </div>
                                                                     <div class="col-sm-6 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 180px">
                                                                               رقم التسجيل التجاري 
                                                                         </div>
                                                                          <fieldset class="form-group position-relative input-divider-right">
                                                                            <input type="text" value="<?php echo $key->num_rc; ?>" name="num_rc" class="form-control">
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-file-text"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                     </div>
                                                                      <div class="col-sm-6 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 100px">
                                                                               رقم التعريف المشترك للشركة  
                                                                         </div>
                                                                          <fieldset class="form-group position-relative input-divider-right">
                                                                            <input type="text" value="<?php echo $key->num_ice; ?>" name="num_ice" class="form-control">
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-file-text"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                     </div>
                                                                     <div class="col-sm-6 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 200px">
                                                                               رقم التعريف المالي  
                                                                         </div>
                                                                          <fieldset class="form-group position-relative input-divider-right">
                                                                            <input type="text" value="<?php echo $key->num_if; ?>" name="num_if" class="form-control">
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-file-text"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                     </div>
                                                                     <div class="col-sm-6 col-12">
                                                                         <div class="text-bold-600 font-medium-2 mb-1"  style="padding-left: 200px">
                                                                               الحد الاقصى للاتمان  
                                                                         </div>
                                                                          <fieldset class="form-group position-relative input-divider-right">
                                                                           <input type="text" value="<?php echo $key->credit; ?>" name="credit" class="form-control">
                                                                             <div class="form-control-position">
                                                                                 <i class="feather icon-file-text"></i>
                                                                             </div>
                                                                         </fieldset>
                                                                     </div>
                                                                </div>
                                                                <!--  <label style="float: right">اسم الشركة : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="nom_e" value="<?php echo $key->nom_e; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label style="float: right">العنوان : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="adress" value="<?php echo $key->adress; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label style="float: right">الهاتف : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="tele" value="<?php echo $key->tele; ?>" class="form-control">
                                                                </div>
                                                                 <label style="float: right">البريد الإلكتروني : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->mail; ?>" name="mail" class="form-control">
                                                                </div>
                                                                 <label style="float: right">الشكل القانوني : </label>
                                                                <div class="form-group">
                                                                    <select name='type' class='form-control' id='basicSelect' required>
                                                                        <option><?php echo $key->type; ?></option>
                                                                        <option> شركة مجهولة الاسم (S.A) </option>
                                                                        <option>شركة مجهولة الاسم مبسطة (SAS)</option>
                                                                        <option>شركة ذات مسؤولية محدودة  (SARL) </option>
                                                                        <option>شركة باسم مشترك (SNC)</option>
                                                                        <option>شراكة محدودة (SCS)</option>
                                                                        <option>شراكة محدودة من الأسهم (SCA)</option>
                                                                        <option>شركة الاشخاص</option>
                                                                    </select>
                                                                </div>
                                                                 <label style="float: right">رقم التسجيل التجاري : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_rc; ?>" name="num_rc" class="form-control">
                                                                </div>

                                                                <label style="float: right">رقم التعريف المشترك للشركة : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_ice; ?>" name="num_ice" class="form-control">
                                                                </div>
                                                                <label  style="float: right">رقم التعريف المالي : </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_if; ?>" name="num_if" class="form-control">
                                                                </div>
                                                                <label  style="float: right">الحد الاقصى للاتمان: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->credit; ?>" name="credit" class="form-control">
                                                                </div>
                                                            </div>-->
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">تعديل </button>
                                                            </div><!--
                                                            <div class="modal-body">
                                                                  <label>Nom de l'Entreprise : </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="nom_e" value="<?php echo $key->nom_e; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label>Adresse: </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="adress" value="<?php echo $key->adress; ?>" class="form-control">
                                                                    <input type="hidden" value="<?php echo $key->id; ?>" name="id" >
                                                                </div>
                                                                 <label>Tél: </label>
                                                                <div class="form-group">
                                                                    <input type="text" name="tele" value="<?php echo $key->tele; ?>" class="form-control">
                                                                </div>
                                                                 <label>Email: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->mail; ?>" name="mail" class="form-control">
                                                                </div>
                                                                 <label>Forme juridique: </label>
                                                                <div class="form-group">
                                                                    <select name='type' class='form-control' id='basicSelect' required>
                                                                        <option><?php echo $key->type; ?></option>
                                                                        <option>Société Anonyme (S.A) </option>
                                                                        <option>Société Anonyme Simplifiée (SAS)</option>
                                                                        <option>Société à Responsabilité Limitée (SARL) </option>
                                                                        <option>Société en nom collectif (SNC)</option>
                                                                        <option>Société en Commandite Simple (SCS)</option>
                                                                        <option>Société en Commandite par Actions (SCA)</option>
                                                                        <option>Société en Participation</option>
                                                                    </select>
                                                                </div>
                                                                 <label>N° de RC: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_rc; ?>" name="num_rc" class="form-control">
                                                                </div>

                                                                <label>N° de ICE: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_ice; ?>" name="num_ice" class="form-control">
                                                                </div>
                                                                <label>N° de IF: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->num_if; ?>" name="num_if" class="form-control">
                                                                </div>
                                                                <label>Plafonds de Crédit: </label>
                                                                <div class="form-group">
                                                                    <input type="text" value="<?php echo $key->credit; ?>" name="credit" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Modifier</button>
                                                            </div>-->
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> 
    <!-- END: Content-->
<?php } ?>
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
    <!-- END: Page Vendor JS-->
        <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/vfs_fonts.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables-rtl.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js"></script>
    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->
<script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/datatables/datatable.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/user-profile.js"></script>
    <!-- END: Page JS-->
   <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
</body>
<!-- END: Body-->

</html>