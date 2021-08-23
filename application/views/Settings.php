<?php /*<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <!-- - var description  = ""-->
		 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="مؤسسة مبادرات | نحو عالم من التحول الرقمي الذكي لتحسين كفاءة المؤسسات والخدمات المقدمة">
        <meta name="author" content="MarocApps">

		<link rel="icon" href="<?php echo base_url();?>adm/config.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url();?>adm/config.png" />

		<!-- Title -->
		<title>SMART SERVICES TEAM </title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/app-assets/css/pages/users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>adm/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   menu-collapsed" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
      <?php require('header.php');?>	
        <!-- END: Header-->

        <div class="content-wrapper">

            <div class="content-body">
                <div id="user-profile">
                    
                    <section id="profile-info">
                        <div class="row">
						
						
                            <div class="col-lg-3 col-12">
                                <div class="card">
								
									<div class="profile-header mb-2">
										<div class="relative">
											<div class="cover-container">
												<img class="img-fluid bg-cover rounded-0 w-100" src="<?php echo base_url();?>adm/app-assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
											</div>
											<div class="profile-img-container d-flex align-items-center justify-content-between">
												<img src="<?php echo base_url();?>upload/config/<?php echo $get_admin->photo ;?>" class="rounded-circle img-border box-shadow-1">
												<div class="float-right">
													
													<a href="<?php echo base_url();?>Manager/Profil" ><button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
														<i class="feather icon-user"></i>
													</button></a>
												</div>
											</div>
										</div>
										
									</div>
									
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-1">
                                            <h6 class="mb-0">Nom & Prenom :</h6>
                                            <p><?php echo $get_admin->situation . '  ' .$get_admin->nom . ' ' . $get_admin->prenom ;?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">phone:</h6>
                                            <p><?php echo $get_admin->phone ;?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Email:</h6>
                                            <p><?php echo $get_admin->email ;?></p>
                                        </div>
										<div class="mt-1">
                                            <h6 class="mb-0">Code postal :</h6>
                                            <p><?php echo $get_admin->code_postal ;?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Adresse:</h6>
                                            <p><?php echo $get_admin->adresse ;?></p>
                                        </div>
                                        <div class="mt-1">
                                            <a href="<?php echo $get_admin->face ;?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-facebook"></i></button></a>
                                            <a href="<?php echo $get_admin->twitre ;?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-twitter"></i></button></a>
                                            <a href="<?php echo $get_admin->insta ;?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-instagram"></i></button></a>
                                        </div>
                                    </div>
                                </div>
								 <div class="card">
                                    <div class="card-header">
                                        <a  data-toggle="modal" data-target="#large"><h4 class="card-title"  style="color:#008b9c;">Collaborateurs</h4></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
										<?php    
                                                    $this->db->limit(9);										
                                                    $this->db->order_by('id','DESC');	
                                                    $this->db->where('role',"");														
													 $grh = $this->acteur->admin();
													 foreach($grh as $getgrh){
														
															 echo '<div class="col-md-4 col-6 user-latest-img">';
															 if($getgrh->photo==""){
																 echo '<img src="'.base_url().'upload/config/vide.jpg" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">'; 
															 }else{
																echo '<img src="'.base_url().'upload/config/'.$getgrh->photo.'" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">'; 
															 }
																
															echo '</div>';
															 
															 
														  
													 }
										?>
                                            
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
																			<?php    
																					$this->db->order_by('id','DESC');	
																					$this->db->where('role',"");														
																					 $bgrh = $this->acteur->admin();
																					 foreach($bgrh as $getbgrh){
																						
																							 echo '<div class="col-md-2 col-6 user-latest-img">';
																							 if($getbgrh->photo==""){
																								 echo '<img src="'.base_url().'upload/config/vide.jpg" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">'; 
																							 }else{
																								echo '<img src="'.base_url().'upload/config/'.$getbgrh->photo.'" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">'; 
																							 }
																								
																							echo '</div>';
																							 
																							 
																						  
																					 }
																		?>
																			
																			
																		</div>
																						
																

                                                                 
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                        </div> 
                                        </div>
                                    </div>
                                </div>
						   </div>
                            <div class="col-lg-9 col-12">
                                <div class="card">
                                    <div class="card-body">
									<form method="post" action="" enctype="multipart/form-data" >
	                                     
										
										<div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-12">
													<h4 class="card-title"  style="color:#008b9c;"> Modifier le mot de passe </h4>
												</div>
											
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-3">
													<span>Mot de Passe </span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control"  name="passe" placeholder=" Mot de Passe ">
														<div class="form-control-position">
															<i class="feather icon-unlock"></i>
														</div>
													</div>
												</div> 
												
 											   
											</div>
										</div>	
										<div class="form-group">
											<div class="row gutters-xs">
											   
												<div class="col-md-3">
													<span>Confirmer Mot de Passe </span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" name="rep_passe" placeholder="Confirmer Mot de Passe ">
														<div class="form-control-position">
															<i class="feather icon-unlock"></i>
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



					  </div>

                    </section>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
	<?php require('footer.php');?>	
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url();?>adm/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url();?>adm/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url();?>adm/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url();?>adm/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url();?>adm/app-assets/js/scripts/pages/user-profile.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
*/ ?>
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
  <?php /*
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/vendors/css/charts/apexcharts.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/pages/dashboard-ecommerce.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/pages/card-analytics.css">
    <!-- END: Page CSS-->*/  ?>
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/app-assets/css/pages/users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/assets/css/style.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

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
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="profile-header mb-2">
                                      <div class="relative">
                                        <div class="cover-container" >
                                          <img class="img-fluid bg-cover rounded-0 w-100" src="<?php echo base_url(); ?>../assets/app-assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
                                        </div>
                                        <div class="profile-img-container d-flex align-items-center justify-content-between" style="padding-left: 20px;">
                                         <img src="<?php echo base_url();?>upload/compte/<?php echo $key->image; ?>" class="rounded-circle img-border box-shadow-1" style="width: 50px; height: 50px;">
                                          <div class="float-right">
                                           <!-- <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                               <i class="feather icon-edit-2"></i>
                                            </button>-->
                                            <a href="profil" ><button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                              <i class="feather icon-settings"></i>
                                            </button></a>
                                          </div>
                                        </div>
                                      </div>
                    
                                    </div>
                  
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-1">
                                            <h6 class="mb-0">Nom & Prénom : </h6>
                                            <p><?php echo $key->nom.' '.$key->pre; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Téléphone portable :</h6>
                                            <p><?php echo $key->tele; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Email:</h6>
                                            <p><?php echo $key->mail; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Adresse:</h6>
                                            <p><?php echo $key->adress; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Type de contrat:</h6>
                                            <p><?php echo $key->type; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Type de compte:</h6>
                                            <p><?php echo 'admin'; ?></p>
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
                            <div class="col-lg-9 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" action="update_pass1" enctype="multipart/form-data" >
	                                    <div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-12">
													<h4 class="card-title"  style="color:#008b9c;"> Modifier le mot de passe </h4>
													<p style="color: red;padding-left: 500px"><?php echo $error; ?></p>
												</div>
											
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-3">
													<span>Mot de Passe </span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="hidden" value="<?php echo $key->id ;?>" name="id">
														<input type="text" id="fname-icon" class="form-control"  name="pass1" placeholder=" Mot de Passe ">
														<div class="form-control-position">
															<i class="feather icon-unlock"></i>
														</div>
													</div>
												</div> 
											</div>
										</div>	
										<div class="form-group">
											<div class="row gutters-xs">
												<div class="col-md-3">
													<span>Confirmer Mot de Passe </span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" name="pass" placeholder="Confirmer Mot de Passe ">
														<div class="form-control-position">
															<i class="feather icon-unlock"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
												<div class="col-md-12">
													<div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Valider</button>
                                                    </div>
												</div>
											</div>
										</div>
									</form>
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
                            <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="profile-header mb-2">
                                      <div class="relative">
                                        <div class="cover-container" >
                                          <img class="img-fluid bg-cover rounded-0 w-100" src="<?php echo base_url(); ?>../assets/app-assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
                                        </div>
                                        <div class="profile-img-container d-flex align-items-center justify-content-between" style="padding-left: 20px;">
                                         <img src="<?php echo base_url();?>upload/compte/<?php echo $key->image; ?>" class="rounded-circle img-border box-shadow-1" style="width: 50px; height: 50px;">
                                          <div class="float-right">
                                           <!-- <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                               <i class="feather icon-edit-2"></i>
                                            </button>-->
                                            <div id="2">
                                                <button type="button" onclick="change()" class="btn btn-icon btn-icon rounded-circle btn-primary">
                                                  <i class="feather icon-settings"></i>
                                                </button>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                    
                                    </div>
                  
                                    <div class="card-header">
                                    </div>
                                    <div class="card-body">
                                        <div class="mt-1">
                                            <h6 class="mb-0">Nom & Prénom : </h6>
                                            <p><?php echo $key->nom.' '.$key->pre; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Téléphone portable :</h6>
                                            <p><?php echo $key->tele; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Email:</h6>
                                            <p><?php echo $key->mail; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Adresse:</h6>
                                            <p><?php echo $key->adress; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Type de contrat:</h6>
                                            <p><?php echo $key->type; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Type de compte:</h6>
                                            <p><?php echo 'admin'; ?></p>
                                        </div>
                                        <div class="mt-1">
                                            <a href="<?php echo $key->facebook; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-facebook"></i></button></a>
                                            <a href="<?php echo $key->twitter; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary mr-25 p-25"><i class="feather icon-twitter"></i></button></a>
                                            <a href="<?php echo $key->insta; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-instagram"></i></button></a>
                                            <a href="<?php echo $key->youtube; ?>" target="_blank"><button type="button" class="btn btn-sm btn-icon btn-primary p-25"><i class="feather icon-youtube"></i></button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <a  data-toggle="modal" data-target="#large"><h4 class="card-title"  style="color:#008b9c;">Collaborateurs</h4></a>
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
                            <div class="col-lg-9 col-12">
                                <div class="card">
                                    <div class="card-body">
                                      <form method="post" action="update_pass" enctype="multipart/form-data" >
	                                    <div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-12">
													<h4 class="card-title"  style="color:#008b9c;"> Modifier le mot de passe </h4>
													<p style="color: red;padding-left: 500px"><?php echo $error; ?></p>
												</div>
											
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-3">
													<span> Nom d'utilisateur</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="hidden" value="<?php echo $key->id ;?>" name="id">
														<input type="text" id="fname-icon" class="form-control"  name="name" value="<?php echo $key->name ;?>">
														<div class="form-control-position">
															<i class="feather icon-unlock"></i>
														</div>
													</div>
												</div> 
											</div>
										</div>	
										<div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-3">
													<span>Mot de Passe </span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">

														<input type="password" id="fname-icon" class="form-control"  name="pass" placeholder=" Mot de Passe ">
														<div class="form-control-position">
															<i class="feather icon-unlock"></i>
														</div>
													</div>
												</div> 
											</div>
										</div>	
										<div class="form-group">
											<div class="row gutters-xs">
												<div class="col-md-3">
													<span>Confirmer Mot de Passe </span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="password" id="fname-icon" class="form-control" name="pass1" placeholder="Confirmer Mot de Passe ">
														<div class="form-control-position">
															<i class="feather icon-unlock"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
												<div class="col-md-12">
													<div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Valider</button>
                                                    </div>
												</div>
											</div>
										</div>
									</form>
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
    <?php include('footer.php'); ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>../assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>../assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>../assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>../assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>../assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>../assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->
    <!-- BEGIN: Page JS
    <script src="<?php echo base_url(); ?>../assets/app-assets/js/scripts/charts/chart-apex.js"></script>-->
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