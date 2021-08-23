<?php include('menu_admin.php'); ?>

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
                            <?php /*for($x = 0; $x < $arrlength; $x++) {
    echo $notification[$x];
    echo "<br>";
}*/                               $sortir = $this->Model->get('bons');
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
                                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profil"><i class="feather icon-user"></i> Profil</a><a class="dropdown-item" href="Changer_mot_passe.html"><i class="feather icon-settings"></i> Réglage</a> 
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
                                  <!--<a class="dropdown-item" href="Changer_mot_passe.html"><i class="feather icon-settings"></i> Réglage</a> -->
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