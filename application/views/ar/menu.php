<?php if ($type == 'Gérant') { ?>
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand">
                        <div class="brand-logo"><img src="<?php echo base_url(); ?>upload/panda2.png" style="width: 160px;height: 50px" ></div>
                        <!--<h2 class="brand-text mb-0" style="padding-left: 0px"><img src="<?php echo base_url(); ?>upload/panda1.png" style="width: 100px;height: 24px"></h2>-->
                    </a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               <li class=" nav-item"><a href="accueil"><i class="feather icon-bar-chart"></i><span class="menu-title" data-i18n="Email"> لوحة المراقبة</span></a>
                </li>
				    <li class=" nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce"> ادارة الزبناء</span></a>
                    <ul class="menu-content">
                       
                        <li><a href="ajouter_clien"><i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Wish List">  اضافة زبون</span></a>
                        </li>
                        <li><a href="table_credit"><i class="feather icon-circle"style="margin-left:5px"></i> <span class="menu-item" data-i18n="Checkout">تتبع الزبناء</span></a>
                        </li>
                    </ul>
                </li>
				      <li class=" nav-item"><a href="fournisseur"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce"> الموردين</span></a>
                </li>
               
                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">إدارة المخزون </span></a>
                    <ul class="menu-content">
                        <li><a href="Categories"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-title" data-i18n="Todo">التصنيفات</span></a>
                </li>
                <li><a href="Marque"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-title" data-i18n="Calender">العلامات التجارية</span></a>
                </li>
                        <li><a href="ajouter_produit"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Wish List">إضافة المنتج</span></a>
                        </li>
                        <li><a href="produit"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Checkout">البضاعة</span></a>
                        </li>
                    </ul>
                </li>
             <li class=" nav-item"><a href="compte"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Calender">حساب المستخدم</span></a>
                </li>
					<li class=" nav-item"><a href="caisse"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Calender">صندوق</span></a>
                </li>
              
            
                   <li class=" nav-item"><a href="#"><i class="feather icon-shuffle"></i><span class="menu-title" data-i18n="Ecommerce">التتبع</span></a>
                    <ul class="menu-content">
                       
                        <li><a href="Entrer"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Wish List">الحركة اليومية</span></a>
                        </li>
                        <li><a href="Sortir"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Checkout">حركة الفواتير</span></a>
                        </li>
							<li><a href="tracabilite_client"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Checkout">زبون</span></a>
                        </li>
						<li><a href="tracabilite_produit"><i class="feather icon-circle"style="margin-left:5px"></i> <span class="menu-item" data-i18n="Checkout">المنتجات </span></a>
                        </li>
                    </ul>
                </li>
				 
				<li class=" nav-item"><a href="comptabilite"><i class="feather icon-bar-chart-2"></i><span class="menu-title" data-i18n="Calender">المحاسبة</span></a>
                     <ul class="menu-content">
                        <li><a href="comptabilite2"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">المصاريف</span></a> </li>
                        <li><a href="Salaires"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">الأجور</span></a> </li>
                        <li><a href="Cheques"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">إدارة الشيكات البنكية</span></a> </li>
                        <li><a href="comptabilite"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List"> تدقيق الحسابات </span></a> </li>
                    </ul>
                </li>
             	<li class=" nav-item"><a href="SAV"><i class="feather icon-alert-triangle"></i><span class="menu-title" data-i18n="Calender">خدمة ما بعد البيع</span></a>
                </li>
			 	<li class=" nav-item"><a href="commande"><i class="feather icon-circle icon-clipboard"></i><span class="menu-title" data-i18n="Calender">السلعة المطلوبة</span></a>
                </li>
			 
            </ul>
        </div>
    </div> 
    <!-- END: Main Menu-->
    <?php }else{ 
        foreach ($pouvoirs as $key) { ?>
<!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
              <li class="nav-item mr-auto"><a class="navbar-brand">
                        <div class="brand-logo"><img src="<?php echo base_url(); ?>upload/panda2.png" style="width: 160px;height: 50px;padding-left: 30px" ></div>
                        <!--<h2 class="brand-text mb-0" style="padding-left: 0px"><img src="<?php echo base_url(); ?>upload/panda1.png" style="width: 100px;height: 24px"></h2>-->
                    </a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <?php if (($key->dashboard == 'voir') or ($key->dashboard == 'edit')) { ?>
               <li class=" nav-item"><a href="accueil"><i class="feather icon-bar-chart"></i><span class="menu-title" data-i18n="Email"> لوحة المراقبة</span></a>
                </li>
                <?php } if (($key->CRM == 'voir') or ($key->CRM == 'edit')) { ?>
                    <li class=" nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce"> ادارة الزبناء</span></a>
                    <ul class="menu-content">
                       <?php if (($key->CRM == 'edit')) { ?>
                        <li><a href="ajouter_clien"><i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Wish List">  اضافة زبون</span></a>
                        </li>
                         <?php } if (($key->CRM == 'voir') or ($key->CRM == 'edit')) { ?>
                        <li><a href="table_credit"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Checkout">تتبع الزبناء</span></a>
                        </li>
                         <?php } ?>
                    </ul>
                </li>
                <?php } if (($key->four == 'voir') or ($key->four == 'edit')) {?>
                      <li class=" nav-item"><a href="fournisseur"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce"> الموردين</span></a>
                    <!--<ul class="menu-content">
                       
                        <li><a href="<?php echo base_url(); ?>assets/fournisseur.html"> <span class="menu-item" data-i18n="Wish List">اضافة مورد </span><i class="feather icon-circle"style="margin-left:5px"></i></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>assets/gestion_fournisseur.html"> <span class="menu-item" data-i18n="Checkout">تتبع المورد</span><i class="feather icon-circle"style="margin-left:5px"></i></a>
                        </li>
                    </ul>-->
                </li>
               <?php } if (($key->cat == 'voir') or ($key->cat == 'edit') or ($key->marque == 'voir') or ($key->marque == 'edit') or ($key->produit == 'voir') or ($key->produit == 'edit')) {?>
                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">إدارة المخزون </span></a>
                    <ul class="menu-content">
                         <?php if (($key->cat == 'voir') or ($key->cat == 'edit')) {?>
                        <li><a href="Categories"><i class="feather icon-circle"style="margin-left:5px"></i> <span class="menu-title" data-i18n="Todo">التصنيفات</span></a></li>
                        <?php } if (($key->marque == 'voir') or ($key->marque == 'edit')) {?>
                           <li><a href="Marque"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-title" data-i18n="Calender">العلامات التجارية</span></a></li>
                        <?php } if ($key->produit == 'edit') {?>
                        <li><a href="ajouter_produit"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Wish List">إضافة المنتج</span></a></li>
                        <?php } if (($key->produit == 'voir') or ($key->produit == 'edit')) {?>
                        <li><a href="produit"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Checkout">البضاعة</span></a> </li>
                        <?php } ?>
                    </ul>
                </li>
                <?php }if (($key->compte == 'voir') or ($key->compte == 'edit')) { ?>
             <li class=" nav-item"><a href="compte"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Calender">حساب المستخدم</span></a></li>
             <?php }if (($key->caisse == 'voir') or ($key->caisse == 'edit')) { ?>
                    <li class=" nav-item"><a href="caisse"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Calender">صندوق</span></a>
                </li>
              <?php }if (($key->trac == 'edit')) { ?>
                   <li class=" nav-item"><a href="#"><i class="feather icon-shuffle"></i><span class="menu-title" data-i18n="Ecommerce">التتبع</span></a>
                    <ul class="menu-content">
                        <li><a href="Entrer"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Wish List">الحركة اليومية</span></a>
                        </li>
                        <li><a href="Sortir"><i class="feather icon-circle"style="margin-left:5px"></i> <span class="menu-item" data-i18n="Checkout">حركة الفواتير</span></a>
                        </li>
                            <li><a href="tracabilite_client"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Checkout">زبون</span></a>
                        </li>
                        <li><a href="tracabilite_produit"> <i class="feather icon-circle"style="margin-left:5px"></i><span class="menu-item" data-i18n="Checkout">المنتجات </span></a>
                        </li>
                    </ul>
                </li>
                 <?php }if (($key->comptabilité == 'voir') or ($key->comptabilité == 'edit')) { ?>
                <li class=" nav-item"><a href="comptabilite"><i class="feather icon-bar-chart-2"></i><span class="menu-title" data-i18n="Calender">المحاسبة</span></a>
                </li>
                 <?php }if (($key->SAV == 'voir') or ($key->SAV == 'edit')) { ?>
                <li class=" nav-item"><a href="SAV"><i class="feather icon-alert-triangle"></i><span class="menu-title" data-i18n="Calender">خدمة ما بعد البيع</span></a>
                </li>
                <?php }if (($key->command == 'voir') or ($key->command == 'edit')) { ?>
                <li class=" nav-item"><a href="commande"><i class="feather icon-circle icon-clipboard"></i><span class="menu-title" data-i18n="Calender">السلعة المطلوبة</span></a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div> 
    <!-- END: Main Menu-->
             <?php } } ?>




             