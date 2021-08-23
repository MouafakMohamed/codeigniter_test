<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <!-- - var description  = ""-->
		 <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="مؤسسة مبادرات | نحو عالم من التحول الرقمي الذكي لتحسين كفاءة المؤسسات والخدمات المقدمة">
        <meta name="author" content="MarocApps">

		<link rel="icon" href="<?php echo base_url(); ?>assets/config.png" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/config.png" />

		<!-- Title -->
		<title>SMART SERVICES TEAM </title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/themes/semi-dark-layout.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/app-assets/css/pages/users.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
      <?php include('header.php');?>	
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
												<img class="img-fluid bg-cover rounded-0 w-100" src="<?php echo base_url(); ?>assets/app-assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
											</div>
											<div class="profile-img-container d-flex align-items-center justify-content-between">
												<img src="<?php echo base_url();?>upload/config/<?php echo $get_admin->photo ;?>" class="rounded-circle img-border box-shadow-1">
												<div class="float-right">
													<!--<button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
														<i class="feather icon-edit-2"></i>
													</button>-->
													<a href="<?php echo base_url();?>Manager/Settings" ><button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
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
                                            <h6 class="mb-0">Nom & Prénom :</h6>
                                            <p><?php echo $get_admin->situation . '  ' .$get_admin->nom . ' ' . $get_admin->prenom ;?></p>
                                        </div>
                                        <div class="mt-1">
                                            <h6 class="mb-0">Téléphone portable :</h6>
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
											   
 											    <div class="col-3">
													<label class="form-label">Photo de profil</label>	
												</div>
												<div class="col-9">
														<div class="custom-file">
															<input type="file" class="custom-file-input" name="image">
														<label class="custom-file-label"> Choisissez une photo </label>
														</div>
													</div>
											</div>
										</div>	
										<div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-3">
													<span>Nom</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" value="<?php echo $get_admin->nom ;?>" name="nom" placeholder="Nom">
														<div class="form-control-position">
															<i class="feather icon-user"></i>
														</div>
													</div>
												</div> 
												
 											   
											</div>
										</div>	
										<div class="form-group">
											<div class="row gutters-xs">
											   
												<div class="col-md-3">
													<span>Prénom</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" value="<?php echo $get_admin->prenom ;?>" name="prenom" placeholder="Prenom">
														<div class="form-control-position">
															<i class="feather icon-user"></i>
														</div>
													</div>
												</div>
 											   
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-3">
													<span>Téléphone portable</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" value="<?php echo $get_admin->phone ;?>" name="phone" placeholder="Phone">
														<div class="form-control-position">
															<i class="feather icon-phone"></i>
														</div>
													</div>
												</div> 
												
 											   
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
											   
												<div class="col-md-3">
													<span>Téléphone fixe</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" value="<?php echo $get_admin->phone_fixe ;?>" name="phone_fixe" placeholder="Fixe">
														<div class="form-control-position">
															<i class="fa fa-phone-square"></i>
														</div>
													</div>
												</div>
 											   
											</div>
										</div>
										
										<div class="form-group">
											<div class="row gutters-xs">
											    <div class="col-md-3">
													<span>Email</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" name="email" value="<?php echo $get_admin->email ;?>" placeholder="Email">
														<div class="form-control-position">
															<i class="fa fa-at"></i>
														</div>
													</div>
												</div>
 											    
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
											   
												<div class="col-md-3">
													<span>Adresse</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" value="<?php echo $get_admin->adresse ;?>" name="adresse" placeholder="adresse">
														<div class="form-control-position">
															<i class="fa fa-map-marker"></i>
														</div>
													</div>
												</div>
 											   
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
											   
												<div class="col-md-3">
													<span>Facebook</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" value="<?php echo $get_admin->face ;?>" name="face" placeholder="Facebook">
														<div class="form-control-position">
															<i class="fa fa-facebook-square"></i>
														</div>
													</div>
												</div>
 											   
											</div>
										</div><div class="form-group">
											<div class="row gutters-xs">
											   
												<div class="col-md-3">
													<span>Instagram</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" value="<?php echo $get_admin->insta ;?>" name="insta" placeholder="Instagram">
														<div class="form-control-position">
															<i class="fa fa-instagram"></i>
														</div>
													</div>
												</div>
 											   
											</div>
										</div><div class="form-group">
											<div class="row gutters-xs">
											   
												<div class="col-md-3">
													<span>Twitter</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<input type="text" id="fname-icon" class="form-control" value="<?php echo $get_admin->twitre ;?>" name="twitre" placeholder="Twitter">
														<div class="form-control-position">
															<i class="fa fa-twitter-square"></i>
														</div>
													</div>
												</div>
 											   
											</div>
										</div>
										<div class="form-group">
											<div class="row gutters-xs">
											   
												<div class="col-md-3">
													<span>Informations complémentaires</span>
												</div>
												<div class="col-md-9">
													<div class="position-relative has-icon-left">
														<textarea type="text" id="fname-icon" rows="6" class="form-control"  name="description" placeholder="Ajouter des commentaires"><?php echo $get_admin->description ;?></textarea>
														<div class="form-control-position">
															<i class="feather icon-user"></i>
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
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/user-profile.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>