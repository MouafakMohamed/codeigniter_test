<?php include('menu.php'); ?>

    <!-- BEGIN: Content-->
         <div class="app-content content" style="padding-right : 260">

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
                            <ul class="nav navbar-nav bookmark-icons">
                                <!-- li.nav-item.mobile-menu.d-xl-none.mr-auto-->
                                <!--   a.nav-link.nav-menu-main.menu-toggle.hidden-xs(href='#')-->
                                <!--     i.ficon.feather.icon-menu-->
                                <?php $info = $this->Model->get('info'); 
                                foreach ($info as $key) { ?>
                                 <li class="nav-item d-none d-lg-block"><a class="nav-link" href="#" data-toggle="tooltip" data-placement="top" title="<?php echo $key->name; ?>"><h3 style="padding-left: 50px"><?php echo $key->name; ?></h3></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                        <ul class="nav navbar-nav float-right">
                            <li class="dropdown dropdown-language nav-item"><a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flag-icon flag-icon-fr"></i><span class="selected-language">Français</span></a>
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
                                            <h3 class="white"><?php echo $n; ?> Ce jour</h3><span class="notification-title">dérniére 5 Notifications</span>
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
                                            <a class="d-flex justify-content-between" href="<?php echo $key->table; ?>">
                                               <div class="media d-flex align-items-start">

                                                <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                                <div class="media-body">
                                                    
                                                    <h6 class="primary media-heading"><?php echo $key->but; ?>  <?php echo $key->date; ?></h6><small class="notification-text"> <?php echo "' ".$admin." '".$key->action."' ".$key->action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-12T18:29:20+08:00"><?php echo $date1; ?></time></small>
                                            </div></a>
                                          <?php }elseif ($key->but == 'ajouter') { ?>
                                        <a class="d-flex justify-content-between" href="<?php echo $key->table; ?>">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                                <div class="media-body">
                                                     <h6 class="success media-heading red darken-1"><?php echo $key->but; ?></h6><small class="notification-text"><?php echo "' ".$admin." '".$key->action."' ".$key->action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="2015-06-11T18:29:20+08:00"><?php echo $date1; ?></time></small>
                                            </div></a><?php }elseif ($key->but == 'suprimer') { ?>
                                        <a class="d-flex justify-content-between" href="<?php echo $key->table; ?>">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                                <div class="media-body">
                                                    <h6 class="danger media-heading yellow darken-3"><?php echo $key->but; ?></h6><small class="notification-text"><?php echo "' ".$admin." '".$key->action."' ".$key->action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="<?php echo $key->date; ?>"><?php echo $date1; ?></time></small>
                                            </div></a><?php }elseif ($key->but == 'modifier') { ?>
                                        <a class="d-flex justify-content-between" href="<?php echo $key->table; ?>">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-check-circle font-medium-5 warning"></i></div>
                                                <div class="media-body">
                                                    <h6 class="warning media-heading"><?php echo $key->but; ?></h6><small class="notification-text"><?php echo "' ".$admin." '".$key->action."' ".$key->action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="<?php echo $key->date; ?>"><?php echo $date1; ?></time></small>
                                            </div></a><?php }elseif ($key->but == 'facture') { ?>
                                        <a class="d-flex justify-content-between" href="<?php echo $key->table; ?>">
                                            <div class="media d-flex align-items-start">
                                                <div class="media-left"><i class="feather icon-file font-medium-5 info"></i></div>
                                                <div class="media-body">
                                                  <?php $clien2 = $this->Model->get_by('cliens','id',$key->action1);
                                                  if (!empty($clien2)) {
                                                   foreach ($clien2 as $key1) {
                                                    $action1 = $key1->nom.' '.$key1->pre; 
                                                  }
                                                }else{
                                                    $action1 = 'encien clien';
                                                }
                                                  ?>
                                                    <h6 class="info media-heading"><?php echo $key->but; ?></h6><small class="notification-text"><?php echo "' ".$admin." '".$key->action."' ".$action1." '"; ?></small>
                                                </div><small>
                                                    <time class="media-meta" datetime="<?php echo $date1; ?>"><?php echo $date1; ?></time></small>
                                            </div>
                                        <?php }  ?></a><?php }  }?></li>
                                    <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="notifications">Read all notifications</a></li>
                                </ul>
                            </li> <?php } } ?>
                            <?php if ($type == 'admin') {
                             foreach ($pouvoirs as $key) { ?>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $key->nom.' '.$key->pre; ?></span><span class="user-status"> </span></div><span><img class="round" src="<?php echo base_url(); ?>upload/compte/<?php echo $key->image; ?>" alt="avatar" height="40" width="40" /></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profil"><i class="feather icon-user"></i> Profil</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout"><i class="feather icon-power"></i> Déconnexion</a>
                                </div>
                            </li>
                          <?php } }else{ 
                             $get = $this->Model->get_by('login','id',$id);   
                             foreach ($get as $key5) { ?>
                            <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600"><?php echo $key5->nom.' '.$key5->pre; ?></span><span class="user-status"> </span></div><span><img class="round" src="<?php echo base_url(); ?>upload/compte/<?php echo $key5->image; ?>" alt="avatar" height="40" width="40" /></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profil"><i class="feather icon-user"></i> Profil</a>
                                  <?php if ($this->session->userdata('type') == 'Gérant') { ?>
                                    <a class="dropdown-item" href="parametre"><i class="feather icon-settings"></i> paramétre de magazin</a> 
                                    <a class="dropdown-item" href="backup"><i class="feather icon-settings"></i> backup</a>  
                                  <?php }elseif ($this->session->userdata('type') == 'admin') {
                                   foreach ($pouvoir as $key) {
                                      if ($key->magazin == 'edit') { ?>
                                              <a class="dropdown-item" href="parametre"><i class="feather icon-settings"></i> paramétre de magazin</a> 
                                    <?php  }
                                   }
                                  } ?>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" href="logout"><i class="feather icon-power"></i> Déconnexion</a>
                                </div>
                            </li>
                          <?php } } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- END: Header-->