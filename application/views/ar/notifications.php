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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css-rtl/pages/app-todo.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->
<style type="text/css">
    .display{

    display: none;

  }
</style>
<!-- BEGIN: Body-->


<body class="vertical-layout vertical-menu-modern content-left-sidebar todo-application navbar-floating footer-static   " data-open="click" data-menu="vertical-menu-modern" data-col="content-left-sidebar">

  <?php include('header.php'); ?>

        <div class="content-area-wrapper">
            <div class="sidebar-left">
                <div class="sidebar">
                    <div class="sidebar-content todo-sidebar d-flex">
                        <span class="sidebar-close-icon">
                            <i class="feather icon-x"></i>
                        </span>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                            <div class="modal-content">
                                <section class="todo-form">
                                    <form id="form-add-todo" class="todo-input">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="todo-item-action ml-auto">
                                                <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                                <div class="dropdown todo-item-label">
                                                    <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoLabel" data-toggle="dropdown">
                                                    </i>
                                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoLabel">
                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" data-color="primary" data-value="Frontend">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>Frontend</span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" data-color="warning" data-value="Backend">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>Backend</span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" data-color="success" data-value="Doc">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>Doc</span>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-item">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox" data-color="danger" data-value="Bug">
                                                                <span class="vs-checkbox">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check mr-0"></i>
                                                                    </span>
                                                                </span>
                                                                <span>Bug</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <fieldset class="form-group">
                                                <input type="text" class="new-todo-item-title form-control" placeholder="Title">
                                            </fieldset>
                                            <fieldset class="form-group">
                                                <textarea class="new-todo-item-desc form-control" rows="3" placeholder="Add description"></textarea>
                                            </fieldset>
                                        </div>
                                        <div class="modal-footer">
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="button" class="btn btn-primary add-todo-item" data-dismiss="modal"><i class="feather icon-check d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">Add Task</span></button>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left mb-0">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                                    <span class="d-none d-lg-block">Cancel</span></button>
                                            </fieldset>
                                        </div>
                                    </form>
                                </section>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="content-right">
                <div class="content-wrapper">
                    <div class="content-header row">
                    </div>
                    <div class="content-body">
                        <div class="app-content-overlay"></div>
                        <div class="todo-app-area">
                            <div class="todo-app-list-wrapper">
                                <div class="todo-app-list">
                                    <div class="app-fixed-search">
                                        <div class="sidebar-toggle d-block d-lg-none"><i class="feather icon-menu"></i></div>
                                        <fieldset class="form-group position-relative has-icon-left m-0">
                                            <input type="text" class="form-control" id="todo-search" placeholder="Search..">
                                            <div class="form-control-position">
                                                <i class="feather icon-search"></i>
                                            </div>
                                        </fieldset>
                                    </div>
                                    <div class="todo-task-list list-group">
                                        <ul class="todo-task-list-wrapper media-list">
                                            <?php rsort($salal);
                                            foreach ($salal as $key) { 
                                                $salam = $key->but;
                                                if ($key->admin == 'Gérant') {
                                                  $admin = $key->admin;
                                                }else{
                                                 $result1 = $this->Model->get_by('compte','id',$key->admin);
                                                 foreach ($result1 as $key1) {
                                                  $admin = $key1->nom.' '.$key1->pre;
                                                 }
                                                }
                                                  if ($salam == 'ajouter') { ?>
                                               <div id="1"><li class="todo-item">
                                                <a href="<?php echo $key->table; ?>"><div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                     <div class="todo-title-area d-flex align-items-center">
                                                       <div class="title-wrapper d-flex">
                                                        <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            
                                                     <h6 class="todo-title mt-50 mx-50"> اضافة  </h6>
                                                        </div>
                                                        <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Doc"><span class="bullet bullet-success bullet-xs"></span> <?php echo $key->date; ?></span>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <?php if ($key->action == ' Ajouter un nouveau produit ') {
                                                    $action = ' اضاف منتج جديد ';
                                                }elseif($key->action == ' Ajouter un nouveau espèce '){
                                                      $action = ' اضاف مبلغ نقدي ';
                                                }elseif($key->action == ' Ajouter un nouveau compte '){
                                                      $action = ' اضاف مستخدم جديد ';
                                                }elseif($key->action == ' Ajouter un nouveau catégorie '){
                                                      $action = ' اضاف فئة جديدة ';
                                                }elseif($key->action == ' Ajouter un nouveau charge '){
                                                      $action = ' اضاف صنف جديد ';
                                                }elseif($key->action == ' Ajouter un nouveau marque '){
                                                      $action = ' اضاف علامة تجارية جديدة ';
                                                }elseif($key->action == ' Ajouter un nouveau réclamation '){
                                                      $action = ' اضاف شكوة جديدة ';
                                                }elseif($key->action == ' Ajouter un nouveau clien '){
                                                      $action = ' اضاف زبون جديد ';
                                                }elseif($key->action == ' Ajouter un nouveau Fournisseur '){
                                                      $action = ' اضاف مورد جديد ';
                                                }else{
                                                    $action = $key->action;
                                                } ?>
                                                </div></a>
                                                <p class="todo-desc truncate mb-0"><?php echo "' ".$admin." '".$action."' ".$key->action1." '"; ?></p>
                                            </li></div>
                                        <?php }elseif ($salam == 'modifier') { ?>
                                            <div id="2"><li class="todo-item">
                                                <a href="<?php echo $key->table; ?>"><div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">تعديل </h6>
                                                        </div>
                                                        <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Backend"><span class="bullet bullet-warning bullet-xs"></span> <?php echo $key->date; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></a>
                                                <?php if ($key->action == ' Modifier les informations de ') {
                                                    $action = ' قد قام بالتعديل  على معلومات ';
                                                }elseif ($key->action == ' Modifier la quantité de le produit ') {
                                                    $action = ' قد قام بالتعدي';
                                                }elseif($key->action == ' Modifier les informations de un charge '){
                                                      $action = ' قد غير معلومات ال الصاريف ';
                                                }elseif($key->action == ' Modifier les informations de un catégorie '){
                                                      $action = ' قد غير معلومات الصنف ';
                                                }elseif($key->action == " Modifier le mot de pass d'un compte "){
                                                      $action = ' قد غير كلمة السر  الحساب ';
                                                }elseif($key->action == ' Modifier le mot de pass '){
                                                      $action = ' قد غير كلمة السر ل ';
                                                }elseif($key->action == " Modifier les informations d'une marque "){
                                                      $action = ' قد غير معلومات علامة تجارية ';
                                                }elseif($key->action == ' Modifier les information de produit '){
                                                      $action = ' قد غير معلومات المنتج ';
                                                }elseif($key->action == ' valider un chéque '){
                                                      $action = ' قد قام بتاكيد شيك ';
                                                }elseif($key->action == " Modifier les informations de blocage d'un compte "){
                                                      $action = ' قد قام بتغيير معلومات الحظر ';
                                                }elseif($key->action == ' valider le salaire de '){
                                                      $action = ' اكد الراتب  ';
                                                }else{
                                                    $action = $key->action;
                                                } ?>
                                                <p class="todo-desc truncate mb-0"><?php echo "' ".$admin." '".$action."' ".$key->action1." '"; ?></p>
                                            </li></div>
                                        <?php }elseif ($salam == 'suprimer') {  ?>
                                            <div id="3"><li class="todo-item">
                                               <a href="<?php echo $key->table; ?>"> <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">حدف</h6>
                                                        </div>
                                                         <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Bug"><span class="bullet bullet-danger bullet-xs"></span> <?php echo $key->date; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></a>
                                                <?php if ($key->action == ' suprimer un catégorie ') {
                                                    $action = ' قام بحذف الفئة ';
                                                }elseif($key->action == ' suprimer un compte '){
                                                    $action = ' قام بحذف الحساب ';
                                                }elseif($key->action == ' suprimer une marque '){
                                                    $action = ' قام بحذف علامة تجارية';
                                                }elseif($key->action == ' suprimer un charge '){
                                                    $action = ' قام بحدف احد المصاريف ';
                                                }elseif($key->action == ' suprimer un produit '){
                                                    $action = ' قام بحذف منتج ';
                                                }elseif($key->action == ' suprimer les informations de '){
                                                    $action = ' قام بحذف معلومات ';
                                                }elseif($key->action == ' suprimer une facture N° '){
                                                      $action = ' قام بحذف الفاتورة رقم ';
                                                }else{
                                                    $action = $key->action;
                                                } ?>
                                                <p class="todo-desc truncate mb-0"><?php echo "' ".$admin." '".$action."' ".$key->action1." '"; ?></p>
                                            </li></div>
                                             <?php }elseif ($salam == 'facture') {  ?>
                                            <div id="4"><li class="todo-item">
                                               <a href="<?php echo $key->table; ?>"> <div class="todo-title-wrapper d-flex justify-content-between mb-50">
                                                    <div class="todo-title-area d-flex align-items-center">
                                                        <div class="title-wrapper d-flex">
                                                            <div class="vs-checkbox-con">
                                                                <input type="checkbox">
                                                                <span class="vs-checkbox vs-checkbox-sm">
                                                                    <span class="vs-checkbox--check">
                                                                        <i class="vs-icon feather icon-check"></i>
                                                                    </span>
                                                                </span>
                                                            </div>
                                                            <h6 class="todo-title mt-50 mx-50">فاتورة </h6>
                                                        </div>
                                                         <div class="chip-wrapper">
                                                            <div class="chip mb-0">
                                                                <div class="chip-body">
                                                                    <span class="chip-text" data-value="Bug"><span class="bullet bullet-info bullet-xs"></span> <?php echo $key->date; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div></a>
                                                <?php 
                                                    if ($key->action == ' Ajouter un nouveau facture pour ') {
                                                       $action = ' قام باضافة فاتورة جديدة لصالح ';
                                                    }else{
                                                        $action = $key->action;
                                                    }
                                                $clien = $this->Model->get_by('cliens','id',$key->action1);
                                                if (!empty($clien)) {
                                                   foreach ($clien as $key1) {
                                                    $action1 = $key1->nom.' '.$key1->pre;
                                                  }
                                                }else{
                                                    $action1 = 'encien clien';
                                                }
                                                  
                                                  ?>
                                                <p class="todo-desc truncate mb-0"><?php echo "' ".$admin." '".$action."' ".$action1." '"; ?></p>
                                            </li></div>
                                        <?php } } ?>
                                        </ul>
                                        <div class="no-results">
                                            <h5>No Items Found</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="editTaskModal" tabindex="-1" role="dialog" aria-labelledby="editTodoTask" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                                <div class="modal-content">
                                    <section class="todo-form">
                                        <form id="form-edit-todo" class="todo-input">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editTodoTask">Edit Task</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="todo-item-action ml-auto">
                                                    <a class='todo-item-info'><i class="feather icon-info"></i></a>
                                                    <a class='todo-item-favorite'><i class="feather icon-star"></i></a>
                                                    <div class="dropdown todo-item-label">
                                                        <i class="dropdown-toggle mr-0 mb-1 feather icon-tag" id="todoEditLabel" data-toggle="dropdown">
                                                        </i>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="todoEditLabel">
                                                            <div class="dropdown-item">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" data-color="primary" data-value="Frontend">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check mr-0"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>Frontend</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" data-color="warning" data-value="Backend">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check mr-0"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>Backend</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" data-color="success" data-value="Doc">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check mr-0"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>Doc</span>
                                                                </div>
                                                            </div>
                                                            <div class="dropdown-item">
                                                                <div class="vs-checkbox-con">
                                                                    <input type="checkbox" data-color="danger" data-value="Bug">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check mr-0"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span>Bug</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <fieldset class="form-group">
                                                    <input type="text" class="new-todo-item-title form-control" placeholder="Title">
                                                </fieldset>
                                                <fieldset class="form-group">
                                                    <textarea class="new-todo-item-desc form-control" rows="3" placeholder="Add description"></textarea>
                                                </fieldset>
                                            </div>
                                            <div class="modal-footer">
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <button type="button" class="btn btn-primary add-todo-item" data-dismiss="modal"><i class="feather icon-edit d-block d-lg-none"></i>
                                                        <span class="d-none d-lg-block">Update</span></button>
                                                </fieldset>
                                                <fieldset class="form-group position-relative has-icon-left mb-0">
                                                    <button type="button" class="btn" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                                        <span class="d-none d-lg-block">Cancel</span></button>
                                                </fieldset>
                                            </div>
                                        </form>
                                    </section>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <?php include('footer.php'); ?>
    <!-- END: Footer--><!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/app-todo.js"></script>
    <!-- END: Page JS-->
    <script type="text/javascript">

function change() {

        document.getElementById("1").className = "salam";

        document.getElementById("2").className = "display";

        document.getElementById("3").className = "display";
}
function change1() {

        document.getElementById("1").className = "display";

        document.getElementById("2").className = "salam";

        document.getElementById("3").className = "display";
}
function change2() {

        document.getElementById("1").className = "display";

        document.getElementById("2").className = "display";

        document.getElementById("3").className = "salam";
}
</script>
<?php /*


    <!-- BEGIN: Vendor JS-->
    <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="../../../app-assets/js/core/app-menu.js"></script>
    <script src="../../../app-assets/js/core/app.js"></script>
    <script src="../../../app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="../../../app-assets/js/scripts/pages/app-todo.js"></script>
    <!-- END: Page JS--> */?>

</body>
<!-- END: Body-->

</html>