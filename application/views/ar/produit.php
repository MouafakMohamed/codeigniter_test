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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/ui/prism.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/forms/select/select2.min.css">
    <!-- END: Vendor CSS-->
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/themes/semi-dark-layout.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/plugins/extensions/noui-slider.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/app-ecommerce-shop.css">
    <!-- END: Page CSS-->
   <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/extensions/sweetalert2.min.css">
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/custom-rtl.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style-rtl.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern content-detached-left-sidebar ecommerce-application navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="content-detached-left-sidebar">

 <?php include('header.php'); ?>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-12 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-right mb-0">المنتجات</h2>
                           
                        </div>
                    </div>
                </div>
               
            </div>
			   <div class="content-detached content-right" dir="rtl">
                <div class="content-body">
                    <!-- Ecommerce Content Section Starts -->

                    <section id="ecommerce-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="ecommerce-header-items">
                                    <div class="result-toggler">
                                        <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                                            <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                                        </button>
                                        <div class="search-results">
                                           بحث
                                        </div>
                                    </div>
                                    <div class="view-options">
                                        
                                        <div class="view-btn-option">
                                            <button class="btn btn-white view-btn grid-view-btn active">
                                                <i class="feather icon-grid"></i>
                                            </button>
                                            <button class="btn btn-white list-view-btn view-btn">
                                                <i class="feather icon-list"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Content Section Starts -->
                    <!-- background Overlay when sidebar is shown  starts-->
                    <div class="shop-content-overlay"></div>
                    <!-- background Overlay when sidebar is shown  ends-->

                    <!-- Ecommerce Search Bar Starts -->
                   <section id="ecommerce-searchbar">
                        <div class="row mt-1">
                            <div class="col-sm-12">
                                <!--<fieldset class="form-group position-relative">
                                    <input type="text" class="form-control search-product" id="iconLeft5" placeholder=" ">
                                    <div class="form-control-position">
                                        <i class="feather icon-search"></i>
                                    </div>
 multiple="multiple"
                                </fieldset>-->
                                                <div class="form-group">
                                                    <select class="select2-customize-result form-control search-product" onchange="searsh()" id="select2-customize-result">
                                                        <option>جميع المنتجات </option>
                                                        <?php foreach ($res as $key) { 
                                                            if ($key->archive != 'oui') { ?>
                                                        <option value="<?php echo $key->id; ?>"><?php echo $key->name; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Ecommerce Search Bar Ends -->

                    <!-- Ecommerce Products Starts -->
                   <section id="ecommerce-products" class="grid-view">
                        <?php $per_page = 9;
                        foreach ($query1 as $key) {  
                            if ($key->archive != 'oui') { ?>
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="<?php echo base_url(); ?>upload/produits/<?php echo $key->image; ?>" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            <?php echo $key->quantité; ?>
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        <?php echo $key->prix_1; ?> DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      <?php echo $key->name; ?>
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        <?php echo $key->desc; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger<?php echo $key->id; ?>">
                                    <i class="feather icon-x align-middle"></i> حذف  
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large<?php echo $key->id; ?>">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } }?>
                    </section>
                    <!-- Ecommerce Products Ends -->

                    <!-- Ecommerce Pagination Starts -->
                    <section id="ecommerce-pagination">
                        <div class="row">
                            <div class="col-sm-12">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center mt-2">
                <?php
                    $n_pages = $n1/$per_page;
                    $n_pages = ceil($n_pages);
                    if ($num > ($n1/9)) {
                       $pre = $num - 1 ;
                       $add = $num ;
                    }elseif($num == 1){
                        $pre = $num ;
                        $add = $num+1 ;
                    }else{
                        $pre = $num-1 ;
                        $add = $num+1 ;
                    }
                        echo '<li class="page-item prev-item"><a class="page-link" href="produit?page='.$pre.'">
                                            </a></li>';

                    for ($page=1; $page <= $n_pages; $page++) {
                        if ($page == $num) {
                            echo ' <li class="page-item active"><a class="page-link" href="produit?page='.$page.'">' . $page . '</a></li>';
                        }else{
                            echo '<li class="page-item"><a class="page-link" href="produit?page='.$page.'" >' . $page . '</a></li>';
                        }
                    } 
                    echo '<li class="page-item next-item"><a class="page-link" href="produit?page='.$add.'"></a></li>';
                        ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="sidebar-detached sidebar-left" >
                <div class="sidebar">
                    <!-- Ecommerce Sidebar Starts -->
                    <div class="sidebar-shop" id="ecommerce-sidebar-toggler">

                        <div class="row">
                            <div class="col-sm-12">
                                <h6 class="filter-heading d-none d-lg-block">مرشحات </h6>
                            </div>
                        </div>
                        <span class="sidebar-close-icon d-block d-md-none">
                            <i class="feather icon-x"></i>
                        </span>
                        <div class="card">
                            <div class="card-body">
                                <!-- Categories Starts -->
                                <div id="product-categories">
                                    <div class="product-category-title">
                                        <h6 class="filter-title mb-1">الصنف </h6>
                                    </div>
                                    <ul class="list-unstyled categories-list">
                                        <?php foreach ($cat as $key1) { 
                                            if ($key1->archive != 'oui') { ?>
                                        <li>
                                            <span class="vs-radio-con vs-radio-primary py-25">
                                                <input type="radio" name="category-filter" value="<?php echo $key1->id; ?>" id="cat<?php echo $key1->id; ?>"  onclick="salam1()">
                                                <span class="vs-radio">
                                                    <span class="vs-radio--border"></span>
                                                    <span class="vs-radio--circle"></span>
                                                </span>
                                                <span class="ml-50"><?php echo $key1->name; ?></span>
                                            </span>
                                        </li>
                                        <?php } } ?>
                                    </ul>
                                </div>
                                <!-- Categories Ends -->
                                <hr>
                                <!-- Brands -->
                                <div class="brands">
                                    <div class="brand-title mt-1 pb-1">
                                        <h6 class="filter-title mb-0"> العلامة التجارية</h6>
                                    </div>
                                    <div class="brand-list" id="brands">
                                          <ul class="list-unstyled">
                                        <?php foreach ($marque as $key2) {
                                        if ($key2->archive != 'oui') {  ?>
                                        <li class="d-flex justify-content-between align-items-center py-25">
                                                <span class="vs-checkbox-con vs-checkbox-primary">
                                                    <input type="checkbox" value="<?php echo $key2->id; ?>" id="salam<?php echo $key2->id; ?>" onclick="salam()">
                                                    <span class="vs-checkbox">
                                                        <span class="vs-checkbox--check">
                                                            <i class="vs-icon feather icon-check"></i>
                                                        </span>
                                                    </span>
                                                    <span class="">
                                                        <?php echo $key2->name; ?>
                                                    </span>
                                                </span>
                                                <?php $marque1 = $this->Model->get_by('produit','marque',$key2->id);
                                            $n = 0;
                                            foreach ($marque1 as $key1) {
                                                if ($key1->archive != 'oui') { 
                                                  $n = $n+1;

                                              } } ?>
                                            <span><?php echo $n; ?></span>
                                        </li>
                                        <?php } } ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /Brand -->
                                <!-- Rating section Ends -->
                            </div>
                        </div>
                    </div>
                    <!-- Ecommerce Sidebar Ends -->

		 
           
          
                    <!-- Ecommerce Sidebar Ends -->

                </div>
            </div>
        </div>
    </div>       
    <?php foreach ($query1 as $key) {  ?> 
     <div class="modal fade text-right" id="danger<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel120" aria-hidden="true">
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
															    <center> <h1 style="font-size:30px">  هل انت متأكد?</center> 
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <a href="delete_pro?id=<?php echo $key->id; ?>"><button type="button" class="btn btn-danger" style="margin-left:10px">حذف</button></a>
																	<button type="button" class="btn btn-outline-danger" data-dismiss="modal">إلغاء</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    <div class="modal fade text-left" id="large<?php echo $key->id; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" id="myModalLabel17">تعديل المعلومات </h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form action="update_pro" method="post" enctype="multipart/form-data">
                                                                <div class="modal-body">
                                                                   <div class="row">

                                            <div class="col-sm-6 col-12">
                                                        <div class="text-bold-600 font-medium-2 mb-1">  Image  </div>
                                                            <fieldset class="form-group">
                                                                 <div class="custom-file">
                                                                     <input type="file" name="image" class="custom-file-input" id="inputGroupFile01">
                                                                     <label class="custom-file-label" for="inputGroupFile01">  </label>
                                                                 </div>
                                                             </fieldset>
                                                </div>
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Nom
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="hidden" name="id" value="<?php echo $key->id; ?>" >
                                                    <input type="text" name="name" class="form-control" id="iconLeft4" value="<?php echo $key->name ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                         <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Référence
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="ref" class="form-control" id="iconLeft4" value="<?php echo $key->ref ; ?>" required="" >
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                           
                                             
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                Catégorie
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                   <select class="form-control" name="cat" id="basicSelect" required="">
                                                        <option><?php if ($key->cat != "") {
                                                           $cat1 = $this->Model->get_by('catégorie','id',$key->cat);
                                                            foreach ($cat1 as $cata) {
                                                                 echo $cata->name;
                                                             }
                                                        } ; ?></option>
                                                       <?php foreach ($cat as $key1) { 
                                                        if ($key->archive != 'oui') { ?>
                                                           <option value="<?php echo $key1->id; ?>"><?php echo $key1->name; ?></option>
                                                        <?php } } ?>
                                                        
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                    
                                                    
                                                </fieldset>
                                            </div>
                                           
                                                  <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                              Marque
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                   <select class="form-control" name="marque" id="basicSelect" required="">
                                                        <option><?php if (!empty($key->marque)) {
                                                          $marque1 = $this->Model->get_by('marques','id',$key->marque);
                                                            foreach ($marque1 as $cat5) {
                                                                
                                                                 echo $cat5->name;
                                                                
                                                             }
                                                         } ; ?>  
                                                        </option>
                                                             <?php foreach ($marque as $key3) {
                                                                if ($cat5->archive != 'oui') {  ?>
                                                           <option value="<?php echo $key3->id; ?>"><?php echo $key3->name; ?></option>
                                                        <?php } } ?>
                                                       
                                                        
                                                    </select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-file-text"></i>
                                                    </div>
                                                
                                                    
                                                </fieldset>
                                            </div>
                                           
                                               <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                             Quantité
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="mail" class="form-control" id="iconLeft4" disabled="" value="<?php echo $key->quantité ; ?>" required="">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-mail"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                             <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">   date d'expiration  </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="date_e" disabled="" class="form-control" id="iconLeft4" value="<?php echo $key->date_e ; ?>">
                                                    <div class="form-control-position">
                                                    <i class="feather icon-facebook"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Prix d'entrer
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="prix_e" disabled="" class="form-control" id="iconLeft4" value="<?php echo $key->prix_e ; ?>">
                                                    <div class="form-control-position">
                                                        <i class="feather  icon-twitter"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                             <div class="text-bold-600 font-medium-2 mb-1">
                                               Prix De Détail
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="prix_1" class="form-control" id="iconLeft4" value="<?php echo $key->prix_1 ; ?>">
                                                    <div class="form-control-position">
                                                        <i class="feather icon-instagram"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                              <div class="col-sm-6 col-12">
                                         <div class="text-bold-600 font-medium-2 mb-1">
                                               Prix De Mini-Gros
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="prix_2" class="form-control" id="iconLeft4" value="<?php echo $key->prix_2 ; ?>">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-youtube"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                         <div class="text-bold-600 font-medium-2 mb-1">
                                               Prix De Gros
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="prix_3" class="form-control" id="iconLeft4" value="<?php echo $key->prix_3 ; ?>">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-youtube"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-6 col-12">
                                         <div class="text-bold-600 font-medium-2 mb-1">
                                               Minimum de stock
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="min_stock" class="form-control" id="iconLeft4" value="<?php echo $key->min_stock ; ?>">
                                                    <div class="form-control-position">
                                                        <i class="fa fa-youtube"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-12 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                               Description
                                                </div>
                                                <fieldset class="form-group">
                                                    <textarea class="form-control" name="desc" id="basicTextarea" rows="3" placeholder="Textarea"><?php echo $key->desc ; ?></textarea>
                                                </fieldset>
                                            </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit" name="sub" class="btn btn-primary">Valider</button>
                                                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Annuler</button>
                                                                </div>
                                                            </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/ui/prism.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/wNumb.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/extensions/nouislider.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->
<script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/modal/components-modal.js"></script>
    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/app-ecommerce-shop.js"></script>
    <!-- END: Page JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/select/form-select2.js"></script>



<script type="text/javascript">
     function searsh(){
                           var searsh = $('#select2-customize-result').val();
                           if (searsh != '') {
                            $.ajax({
                              url:"ajax_search_produit10",
                              method:"POST",
                              data:{searsh:searsh},
                              success:function(data){
                                 if (data == 'tous') {
                                   window.location.href = "<?php echo base_url().'produit' ; ?>" ; 
                                } 
                                if (data != 'tous') {
                                  $('#ecommerce-products').html(data);  
                                }
                                                    }
                            }) 
                           }
                      }
    function salam() {
         var ok1 = '';
         var sal = '';
         <?php 
         foreach ($marque as $key2): ?>
            var put = '';
           var cal = document.getElementById("salam<?php echo $key2->id; ?>").checked;
           if (cal) {
            sal = 'salam';
            
             var ok = "<?php echo $key2->id; ?>";
             <?php  $put = '';
             foreach ($cat as $key1): ?>
             var cat = document.getElementById("cat<?php echo $key1->id; ?>").checked;
             if (cat) {
                var ok1 = "<?php echo $key1->id; ?>";
                            $.ajax({
                              url:"ajax_search_marque10",
                              method:"POST",
                              data:{ok:ok,ok1:ok1},
                              success:function(data){
                                 put += data ;
                                 $('#ecommerce-products').html(put);
                                                    }
                            }) 
             }
             <?php endforeach ?>
             if (ok1 != '') {
              }else{
                   $.ajax({
                              url:"ajax_search_marque11",
                              method:"POST",
                              data:{ok:ok},
                              success:function(data){
                                 put += data ;
                                 $('#ecommerce-products').html(put);
                                                    }
                            }) 
               }
         }
        <?php endforeach ?>
        if (sal == '') {
                            $.ajax({
                              url:"ajax_get1",
                              method:"POST",
                              data:{ok1:ok1},
                              success:function(data){
                                 put += data ;
                                 $('#ecommerce-products').html(put);
                                                    }
                            }) 
        }
    }
    function salam1() {
          var ok = '';
         var sal = '';
         <?php 
         foreach ($cat as $key2): ?>
            var put = '';
           var cal = document.getElementById("cat<?php echo $key2->id; ?>").checked;
           if (cal) {
            
            sal = 'salam';
            
             var ok1 = "<?php echo $key2->id; ?>";
            <?php  $put = '';
             foreach ($marque as $key1): ?>
             var cat = document.getElementById("salam<?php echo $key1->id; ?>").checked;
             
              if (cat) {

                var ok = "<?php echo $key1->id; ?>";
                            $.ajax({
                              url:"ajax_search_marque10",
                              method:"POST",
                              data:{ok:ok,ok1:ok1},
                              success:function(data){
                                 put += data ;
                                 $('#ecommerce-products').html(put);
                                                    }
                            }) 
             }
             <?php endforeach ?>
             if (ok != '') {
              }else{
                  $.ajax({
                              url:"ajax_search_cat10",
                              method:"POST",
                              data:{ok1:ok1},
                              success:function(data){
                                 put += data ;
                                 $('#ecommerce-products').html(put);
                                                    }
                            })  
               }
         }
        <?php endforeach ?>
        
    }

</script>
</body>
<!-- END: Body-->

</html>