<?php if ($type == 'Gérant') { ?> 
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow hide" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand">
                        <img src="<?php echo base_url(); ?>upload/panda2.png" style="width: 160px;height: 50px" >
                        <!--<h2 class="brand-text mb-0" style="padding-left: 0px"><img src="<?php echo base_url(); ?>upload/panda1.png" style="width: 100px;height: 24px"></h2>-->
                    </a></li>
               <!-- <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>-->
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
               <li class=" nav-item"><a href="accueil"><i class="feather icon-bar-chart"></i><span class="menu-title" data-i18n="Email">Tableau de Bord</span></a>
                </li>
				    <li class=" nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce"> CRM</span></a>
                    <ul class="menu-content">
                       
                        <li><a href="ajouter_clien"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Nouveau client</span></a>
                        </li>
                        <li><a href="table_credit"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Suivi de Client</span></a>
                        </li>
                    </ul>
                </li>
				      <li class=" nav-item"><a href="fournisseur"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce"> Fournisseurs</span></a>
                   <!-- <ul class="menu-content">
                       
                        <li><a href="fournisseur"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Ajouter de Fournisseur</span></a>
                        </li>
                        <li><a href="gestion_fournisseur"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Suivi de Fournisseur</span></a>
                        </li>
                    </ul>-->
                </li>
               
                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">G-Stock </span></a>
                    <ul class="menu-content">
                        <li><a href="Categories"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Todo">Catégories</span></a>
                </li>
                <li><a href="Marque"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Calender">Marques</span></a>
                </li>
                        <li><a href="ajouter_produit"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Ajouter de Produit</span></a>
                        </li>
                        <li><a href="produit"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Produits</span></a>
                        </li>
                    </ul>
                </li>
             <li class=" nav-item"><a href="compte"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Calender">Comptes</span></a>
                </li>
					<li class=" nav-item"><a href="caisse"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Calender">Caisse</span></a>
                </li>
              
            
                <li class=" nav-item"><a href="#"><i class="feather icon-shuffle"></i><span class="menu-title" data-i18n="Ecommerce">Traçabilité</span></a>
                    <ul class="menu-content">
                       
                        <li><a href="Entrer"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Entrer</span></a>
                        </li>
                        <li><a href="Sortir"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Sortir</span></a>
                        </li>
							<li><a href="tracabilite_client"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Client</span></a>
                        </li>
						<li><a href="tracabilite_produit"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Produit</span></a>
                        </li>
                    </ul>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-bar-chart-2"></i><span class="menu-title" data-i18n="Ecommerce">Comptabilité</span></a>
                    <ul class="menu-content">
                        <li><a href="comptabilite2"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Les charges</span></a> </li>
                        <li><a href="Salaires"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Les Salaires</span></a> </li>
                        <li><a href="Cheques"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Gestion des chéques</span></a> </li>
                        <li><a href="comptabilite"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Comptabilité analytique</span></a> </li>
                    </ul>
                </li>
				<!--<li class=" nav-item"><a href="comptabilite"><i class="feather icon-bar-chart-2"></i><span class="menu-title" data-i18n="Calender">Comptabilité</span></a>
                </li>-->
             	<li class=" nav-item"><a href="SAV"><i class="feather icon-alert-triangle"></i><span class="menu-title" data-i18n="Calender">SAV</span></a>
                </li>
                <li class=" nav-item"><a href="commande"><i class="feather icon-circle icon-clipboard"></i><span class="menu-title" data-i18n="Calender">Commande</span></a> </li>
                <li class=" nav-item"><a href="Archive"><i class="feather icon-trash icon-clipboard"></i><span class="menu-title" data-i18n="Calender">Archive</span></a> </li>
			 
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
    <?php }else{ 
        foreach ($pouvoirs as $key) { ?>
  <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow hide" data-scroll-to-active="true">
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
               <li class=" nav-item"><a href="accueil"><i class="feather icon-bar-chart"></i><span class="menu-title" data-i18n="Email">Tableau de Bord</span></a></li>
                <?php } if (($key->CRM == 'voir') or ($key->CRM == 'edit')) { ?>
                <li class=" nav-item"><a href="#"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce"> CRM</span></a>
                    <ul class="menu-content">
                       <?php if (($key->CRM == 'edit')) { ?>
                        <li><a href="ajouter_clien"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Ajouter de Client</span></a>
                        </li>
                        <?php } if (($key->CRM == 'voir') or ($key->CRM == 'edit')) { ?>
                        <li><a href="table_credit"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Suivi de Client</span></a>
                        </li>
                    <?php } ?>
                    </ul>
                </li>
            <?php } if (($key->four == 'voir') or ($key->four == 'edit')) {?>
                      <li class=" nav-item"><a href="fournisseur"><i class="feather icon-users"></i><span class="menu-title" data-i18n="Ecommerce"> Fournisseurs</span></a>
                   <!-- <ul class="menu-content">
                       
                        <li><a href="fournisseur"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Ajouter de Fournisseur</span></a>
                        </li>
                        <li><a href="gestion_fournisseur"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Suivi de Fournisseur</span></a>
                        </li>
                    </ul>-->
                </li>
               <?php } if (($key->cat == 'voir') or ($key->cat == 'edit') or ($key->marque == 'voir') or ($key->marque == 'edit') or ($key->produit == 'voir') or ($key->produit == 'edit')) {?>
                <li class=" nav-item"><a href="#"><i class="feather icon-shopping-cart"></i><span class="menu-title" data-i18n="Ecommerce">G-Stock </span></a>
                    <ul class="menu-content">
                        <?php if (($key->cat == 'voir') or ($key->cat == 'edit')) {?>
                        <li><a href="Categories"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Todo">Catégories</span></a>
                        </li>
                        <?php } if (($key->marque == 'voir') or ($key->marque == 'edit')) {?>
                        <li><a href="Marque"><i class="feather icon-circle"></i><span class="menu-title" data-i18n="Calender">Marques</span></a>
                        </li>
                        <?php } if ($key->produit == 'edit') {?>
                        <li><a href="ajouter_produit"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Ajouter de Produit</span></a>
                        </li>
                        <?php } if (($key->produit == 'voir') or ($key->produit == 'edit')) {?>
                        <li><a href="produit"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Produits</span></a>
                        </li>
                        <?php } ?>
                    </ul>
                   </li>
               <?php }if (($key->compte == 'voir') or ($key->compte == 'edit')) { ?>
                <li class=" nav-item"><a href="compte"><i class="feather icon-layout"></i><span class="menu-title" data-i18n="Calender">Comptes</span></a>
                   </li>
               <?php }if (($key->caisse == 'voir') or ($key->caisse == 'edit')) { ?>
                       <li class=" nav-item"><a href="caisse"><i class="feather icon-server"></i><span class="menu-title" data-i18n="Calender">Caisse</span></a>
                   </li>
              <?php }if (($key->trac == 'edit')) { ?>
                   <li class=" nav-item"><a href="#"><i class="feather icon-shuffle"></i><span class="menu-title" data-i18n="Ecommerce">Traçabilité</span></a>
                    <ul class="menu-content">
                        <li><a href="Entrer"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Entrer</span></a>
                        </li>
                        <li><a href="Sortir"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Sortir</span></a>
                        </li>
                            <li><a href="<?php echo base_url(); ?>assets/tracabilite_client.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Client</span></a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>assets/tracabilite_produit.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Checkout">Produit</span></a>
                        </li>
                    </ul>
                </li>
                 <?php }if (($key->comptabilité == 'voir') or ($key->comptabilité == 'edit')) { ?>
                <li class=" nav-item"><a href="#"><i class="feather icon-bar-chart-2"></i><span class="menu-title" data-i18n="Ecommerce">Comptabilité</span></a>
                    <ul class="menu-content">
                        <li><a href="comptabilite2"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Les charges</span></a> </li>
                        <li><a href="Salaires"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Les Salaires</span></a> </li>
                        <li><a href="Cheques"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Gestion des chéques</span></a> </li>
                        <li><a href="comptabilite"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Wish List">Comptabilité analytique</span></a></li>
                    </ul>
                </li>
                <?php }if (($key->SAV == 'voir') or ($key->SAV == 'edit')) { ?>
                <li class=" nav-item"><a href="SAV"><i class="feather icon-alert-triangle"></i><span class="menu-title" data-i18n="Calender">SAV</span></a>
                </li>
                <?php }if (($key->command == 'voir') or ($key->command == 'edit')) { ?>
                <li class=" nav-item"><a href="commande"><i class="feather icon-circle icon-clipboard"></i><span class="menu-title" data-i18n="Calender">Commande</span></a> </li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
        <?php } } ?>
