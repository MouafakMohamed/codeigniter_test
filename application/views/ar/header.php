 <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                            <ul class="nav navbar-nav">
                                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                            </ul>
                        </div>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-ma"></i><span class="selected-language">العربية</span></a>
                            </li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                            <!--<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>-->
                                <div class="search-input">
                                    <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="input" type="text" placeholder="Explore Vuesax..." tabindex="-1" data-search="template-list" />
                                    <div class="search-input-close"><i class="feather icon-x"></i></div>
                                    <ul class="search-list"></ul>
                                </div>
                            </li>
                            <?php    
                            if ($type == 'Gérant') {
                                  $sortir = $this->Model->get('bons');
                                  $entrer = $this->Model->get('entrer');
                                  $SAV = $this->Model->get('sav');
                                  $cliens = $this->Model->get('cliens');
                                  $four = $this->Model->get('fournisseur');
                                  $salam = '';
                                  $n = 0;
                                  $k = 0;
                                  $notification = $this->Model->get('notification');
                                  foreach ($notification as $key) {
                                    $date = explode(' ', $key->date);
                                      $date11 = $date[0];
                                      $date00 = $date[1];
                                      $date1 = explode('-', $date11);
                                      $date2 = explode(':', $date00);
                                      $date3 = $date1[0].$date1[1].$date1[2];
                                      $date4 = $date2[0].$date2[1].$date2[2];
                                      $data = date('Y-m-d');
                                      $now = explode('-', $data);
                                      $now1 = $now[0].$now[1].$now[2];
                                      if ($now1 == $date3) {
                                          $n = $n+1;
                                      }
                                  }
                                  if (!empty($notification)) {
                                    rsort($notification);
                                  }else{
                                    $notification = 0;
                                  }
                                     // $arrlength = count($notification);
                                  ?>
                            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up"> <?php echo $n; ?> </span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <div class="dropdown-header m-0 p-2">
                                            <h3 class="white"> الاشعارات اليوم : <?php echo $n; ?> </h3><span class="notification-title">الاشعارا الاخيرة </span>
                                        </div>
                                    </li>
                                     
                                    <li class="scrollable-container media-list">
                                            <?php if (!empty($notification)) {
                                             foreach ($notification as $key) {
                                               $date = explode(' ', $key->date);
                                      $date11 = $date[0];
                                      $date00 = $date[1];
                                      $date1 = explode('-', $date11);
                                      $date2 = explode(':', $date00);
                                      $date3 = $date1[0].$date1[1].$date1[2];
                                      $date4 = $date2[0].$date2[1].$date2[2];
                                      $data = date('Y-m-d');
                                      $now = explode('-', $data);
                                      $now1 = $now[0].$now[1].$now[2];
                                      if ($now1 == $date3) {
                               if ($k == 5) {
                                   break;
                               }$k = $k+1;
                               $date = explode(' ', $key->date);
                               $date1 = $date[1];
                               if ($key->admin == 'Gérant') {
                                 $admin = $key->admin;
                               }else{
                                $result1 = $this->Model->get_by('compte','id',$key->admin);
                                foreach ($result1 as $key1) {
                                 $admin = $key1->nom.' '.$key1->pre;
                                }
                               }
                                        if ($key->but == 'ok') { ?>
                                            <a class="d-flex justify-content-between" href="table_credit">
                                               <div class="media d-flex align-items-start">

                                                <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                                <div class="media-body">
                                                    
                                                    <h6 class="primary media-heading"><?php echo $key->but; ?>  <?php echo $key->date; ?></h6><small class="notification-text"> <?php echo "' ".$admin." '".$key->action."' ".$key->action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-12T18:29:20+08:00"><?php echo $date1; ?></time></small>
                                            </div></a>
                                          <?php }elseif ($key->but == 'ajouter') { ?>
                                        <a class="d-flex justify-content-between" href="Sortir">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                                <div class="media-body">
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
                                                     <h6 class="success media-heading red darken-1">اضافة </h6><small class="notification-text"><?php echo "' ".$admin." '".$action."' ".$key->action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00"><?php echo $date1; ?></time></small>
                                            </div></a><?php }elseif ($key->but == 'suprimer') { ?>
                                        <a class="d-flex justify-content-between" href="SAV">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                                <div class="media-body">
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
                                                    <h6 class="danger media-heading yellow darken-3">حذف </h6><small class="notification-text"><?php echo "' ".$admin." '".$action."' ".$key->action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="<?php echo $key->date; ?>"><?php echo $date1; ?></time></small>
                                            </div></a><?php }elseif ($key->but == 'modifier') { ?>
                                        <a class="d-flex justify-content-between" href="Entrer">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-check-circle font-medium-5 warning"></i></div>
                                                <div class="media-body">
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
                                                }elseif($key->action == ''){
                                                      $action = '';
                                                }else{
                                                    $action = $key->action;
                                                } ?>
                                                    <h6 class="warning media-heading">تعديل </h6><small class="notification-text"><?php echo "' ".$admin." '".$action."' ".$key->action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="<?php echo $key->date; ?>"><?php echo $date1; ?></time></small>
                                            </div></a><?php }elseif ($key->but == 'facture') { ?>
                                        <a class="d-flex justify-content-between" href="<?php echo $key->table; ?>">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-file font-medium-5 info"></i></div>
                                                <div class="media-body">
                                                  <?php 

                                                    if ($key->action == ' Ajouter un nouveau facture pour ') {
                                                       $action = ' قام باضافة فاتورة جديدة لصالح ';
                                                    }else{
                                                        $action = $key->action;
                                                    }
                                                    $clien2 = $this->Model->get_by('cliens','id',$key->action1);
                                                  if (!empty($clien2)) {
                                                   foreach ($clien2 as $key1) {
                                                    $action1 = $key1->nom.' '.$key1->pre; 
                                                  }
                                                }else{
                                                    $action1 = 'encien clien';
                                                }
                                                  ?>

                                                    <h6 class="info media-heading">فاتورة</h6><small class="notification-text"><?php echo "' ".$admin." '".$action."' ".$action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="<?php echo $date1; ?>"><?php echo $date1; ?></time></small>
                                            </div>
                                        <?php }  ?></a><?php }  }?></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="notifications"> قراءة جميع الاشعارات </a></li>
                                </ul>
                            </li> <?php } } ?>
                             <?php if ($type == 'admin') {
                             foreach ($pouvoirs as $key) { ?>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $key->nom.' '.$key->pre; ?></span><span class="user-status"> </span></div><span><img class="round" src="<?php echo base_url(); ?>upload/compte/<?php echo $key->image; ?>" alt="avatar" height="40" width="40" /></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profil"><i class="feather icon-user"></i> البيانات الشخصية</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout"><i class="feather icon-power"></i> الخروج</a>
                                </div>
                            </li>
                          <?php } }else{ 
                             $get = $this->Model->get_by('login','id',$id);   
                             foreach ($get as $key5) { ?>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $key5->nom.' '.$key5->pre; ?></span><span class="user-status"> </span></div><span><img class="round" src="<?php echo base_url(); ?>upload/compte/<?php echo $key5->image; ?>" alt="avatar" height="40" width="40" /></span>
                                </a>
                                 <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profil"><i class="feather icon-user"></i> البيانات الشخصية</a>
                                  <a class="dropdown-item" href="parametre"><i class="feather icon-settings"></i> معلوكات المخزن </a>  
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout"><i class="feather icon-power"></i> الخروج</a>
                                </div>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    
    <!-- END: Header-->


 <?php include('menu.php');  ?>
 <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
<?php /*
    <!-- BEGIN: Content-->
         <div class="app-content content">

        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-light navbar-shadow">
            <div class="navbar-wrapper">
                <div class="navbar-container content">
                    <div class="navbar-collapse" id="navbar-mobile">
                        <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                            <ul class="nav navbar-nav">
                                <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                            </ul>
                           <!-- <ul class="nav navbar-nav bookmark-icons">
                                 li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                                <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                                <!--     i.ficon.feather.icon-menu-->
                                <!--<li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-todo.html" data-toggle="tooltip" data-placement="top" title="Todo"><i class="ficon feather icon-check-square"></i></a></li>
                                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-chat.html" data-toggle="tooltip" data-placement="top" title="Chat"><i class="ficon feather icon-message-square"></i></a></li>
                                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-email.html" data-toggle="tooltip" data-placement="top" title="Email"><i class="ficon feather icon-mail"></i></a></li>
                                <li class="nav-item d-none d-lg-block"><a class="nav-link" href="app-calender.html" data-toggle="tooltip" data-placement="top" title="Calendar"><i class="ficon feather icon-calendar"></i></a></li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star"><i class="ficon feather icon-star warning"></i></a>
                                    <div class="bookmark-input search-input">
                                        <div class="bookmark-input-icon"><i class="feather icon-search primary"></i></div>
                                        <input class="form-control input" type="text" placeholder="Explore Vuesax..." tabindex="0" data-search="template-list" />
                                        <ul class="search-list"></ul>
                                    </div>-->
                                    <!-- select.bookmark-select-->
                                    <!--   option Chat-->
                                    <!--   option email-->
                                    <!--   option todo-->
                                    <!--   option Calendar
                                </li>
                            </ul>-->
                        </div>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-ma"></i><span class="selected-language">العربية</span></a>
                            </li>
                            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                            <!--<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon feather icon-search"></i></a>-->
                                <div class="search-input">
                                    <div class="search-input-icon"><i class="feather icon-search primary"></i></div>
                                    <input class="input" type="text" placeholder="Explore Vuesax..." tabindex="-1" data-search="template-list" />
                                    <div class="search-input-close"><i class="feather icon-x"></i></div>
                                    <ul class="search-list"></ul>
                                </div>
                            </li>
                            <?php                               $sortir = $this->Model->get('bons');
                                  $entrer = $this->Model->get('entrer');
                                  $SAV = $this->Model->get('sav');
                                  $cliens = $this->Model->get('cliens');
                                  $four = $this->Model->get('fournisseur');
                                  $salam = '';
                                  $n = 0;
                                  $k = 0;
                                  foreach ($four as $salam) {
                                    $kham = $salam->date;
                                      $date = explode(' ', $salam->date);
                                      $date11 = $date[0];
                                      $date00 = $date[1];
                                      $date1 = explode('-', $date11);
                                      $date2 = explode(':', $date00);
                                      $date3 = $date1[0].$date1[1].$date1[2];
                                      $date4 = $date2[0].$date2[1].$date2[2];
                                      $data = date('Y-m-d');
                                      $now = explode('-', $data);
                                      $now1 = $now[0].$now[1].$now[2];
                                      if ($now1 == $date3) {
                                          $notification [$n] = $kham.'A' ;
                                          $n = $n+1;
                                      }
                                  }
                                  foreach ($cliens as $salam) {
                                      $kham = $salam->date;
                                      $date = explode(' ', $salam->date);
                                      $date11 = $date[0];
                                      $date00 = $date[1];
                                      $date1 = explode('-', $date11);
                                      $date2 = explode(':', $date00);
                                      $date3 = $date1[0].$date1[1].$date1[2];
                                      $date4 = $date2[0].$date2[1].$date2[2];
                                      $data = date('Y-m-d');
                                      $now = explode('-', $data);
                                      $now1 = $now[0].$now[1].$now[2];
                                      if ($now1 == $date3) {
                                          $notification [$n] = $kham.'B' ;
                                          $n = $n+1;
                                      }
                                  }
                                  foreach ($sortir as $salam) {
                                      $kham = $salam->date;
                                      $date = explode(' ', $salam->date);
                                      $date11 = $date[0];
                                      $date00 = $date[1];
                                      $date1 = explode('-', $date11);
                                      $date2 = explode(':', $date00);
                                      $date3 = $date1[0].$date1[1].$date1[2];
                                      $date4 = $date2[0].$date2[1].$date2[2];
                                      $data = date('Y-m-d');
                                      $now = explode('-', $data);
                                      $now1 = $now[0].$now[1].$now[2];
                                      if ($now1 == $date3) {
                                          $notification [$n] = $kham.'C' ;
                                          $n = $n+1;
                                      }
                                  }
                                  foreach ($entrer as $salam) {
                                      $kham = $salam->date;
                                      $date = explode(' ', $salam->date);
                                      $date11 = $date[0];
                                      //$date00 = $date[1];
                                      $date1 = explode('-', $date11);
                                      //$date2 = explode(':', $date00);
                                      $date3 = $date1[0].$date1[1].$date1[2];
                                      //$date4 = $date2[0].$date2[1].$date2[2];
                                      $data = date('Y-m-d');
                                      $now = explode('-', $data);
                                      $now1 = $now[0].$now[1].$now[2];
                                      if ($now1 == $date3) {
                                          $notification [$n] = $kham.'D' ;
                                          $n = $n+1;
                                      }
                                  }
                                  foreach ($SAV as $salam) {
                                      $kham = $salam->date;
                                      $date = explode(' ', $salam->date);
                                      $date11 = $date[0];
                                     // $date00 = $date[1];
                                      $date1 = explode('-', $date11);
                                      $date2 = explode(':', $date00);
                                      $date3 = $date1[0].$date1[1].$date1[2];
                                      //$date4 = $date2[0].$date2[1].$date2[2];
                                      $data = date('Y-m-d');
                                      $now = explode('-', $data);
                                      $now1 = $now[0].$now[1].$now[2];
                                      if ($now1 == $date3) {
                                          $n = $n+1;
                                          $notification [$n] = $kham.'E' ;
                                          
                                      }
                                  }
                                  if (!empty($notification)) {
                                    rsort($notification);
                                  }else{
                                    $notification = 0;
                                  }
                                     // $arrlength = count($notification);
                                  ?>
                            <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-primary badge-up"> <?php echo $n; ?> </span></a>
                                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                    <li class="dropdown-menu-header">
                                        <div class="dropdown-header m-0 p-2">
                                            <h3 class="white"><?php echo $n; ?> Ce jour</h3><span class="notification-title">dérniére 5 Notifications</span>
                                        </div>
                                    </li>
                                     
                                    <li class="scrollable-container media-list">
                                            <?php if (!empty($notification)) {
                                             foreach ($notification as $key) {
                               $alpha = substr($key,19);
                               $alpha1 = substr_replace($key,"",19);
                               
                               if ($k == 5) {
                                   break;
                               }$k = $k+1;
                                        if ($alpha == 'B') { ?>
                                            <a class="d-flex justify-content-between" href="table_credit">
                                                <?php $four1 = $this->Model->get_by('cliens','date',$alpha1);
                                                    foreach ($four1 as $key1) { ?><div class="media d-flex align-items-start">

                                                <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                                <div class="media-body">
                                                    
                                                    <h6 class="primary media-heading">You have new order!  <?php echo $alpha; ?></h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-12T18:29:20+08:00">9 hours ago</time></small>
                                            </div><?php }  ?></a><?php }elseif ($alpha == 'C') { ?>
                                        <a class="d-flex justify-content-between" href="Sortir">
                                            <?php $sortir1 = $this->Model->get_by('bons','date',$alpha1);
                                                    foreach ($sortir1 as $key1) { ?>
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                                <div class="media-body">
                                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hour ago</time></small>
                                            </div><?php }  ?></a><?php }elseif ($alpha == 'E') { ?>
                                        <a class="d-flex justify-content-between" href="SAV">
                                            <?php $SAV1 = $this->Model->get_by('sav','date',$alpha1);
                                                    foreach ($SAV1 as $key1) { ?>
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                                <div class="media-body">
                                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div><?php }  ?></a><?php }elseif ($alpha == 'D') { ?>
                                        <a class="d-flex justify-content-between" href="Entrer">
                                            <?php $entrer1 = $this->Model->get_by('entrer','date',$alpha1);
                                                    foreach ($entrer1 as $key1) { ?>
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                                <div class="media-body">
                                                    <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div><?php }  ?></a><?php }elseif ($alpha == 'A') { ?>
                                        <a class="d-flex justify-content-between" href="fournisseur">
                                            <?php $four1 = $this->Model->get_by('fournisseur','date',$alpha1);
                                                    foreach ($four1 as $key1) { ?>
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                                <div class="media-body">
                                                    <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        <?php }  ?></a><?php } } }?></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="notifications">Read all notifications</a></li>
                                </ul>
                            </li>
                             <?php if ($type == 'admin') {
                             foreach ($pouvoirs as $key) { ?>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $key->nom.' '.$key->pre; ?></span><span class="user-status"> </span></div><span><img class="round" src="<?php echo base_url(); ?>upload/compte/<?php echo $key->image; ?>" alt="avatar" height="40" width="40" /></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profil"><i class="feather icon-user"></i> البيانات الشخصية</a><a class="dropdown-item" href="Changer_mot_passe.html"><i class="feather icon-settings"></i> تعديل</a> 
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout"><i class="feather icon-power"></i> الخروج</a>
                                </div>
                            </li>
                          <?php } }else{ 
                             $get = $this->Model->get_by('login','id',$id);   
                             foreach ($get as $key5) { ?>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $key5->nom.' '.$key5->pre; ?></span><span class="user-status"> </span></div><span><img class="round" src="<?php echo base_url(); ?>upload/compte/<?php echo $key5->image; ?>" alt="avatar" height="40" width="40" /></span>
                                </a>
                                 <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profil"><i class="feather icon-user"></i> البيانات الشخصية</a><a class="dropdown-item" href="Changer_mot_passe.html"><i class="feather icon-settings"></i> تعديل</a> 
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout"><i class="feather icon-power"></i> الخروج</a>
                                </div>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header--> */ ?>
