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

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static   " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Main Menu-->
      <!-- BEGIN: Main Menu-->

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
                           <?php /* <div class="col-lg-3 col-12">
                                <div class="card">
                                    <div class="profile-header mb-2">
                                      <div class="relative">
                                        <div class="cover-container" >
                                          <img class="img-fluid bg-cover rounded-0 w-100" src="<?php echo base_url(); ?>assets/app-assets/images/profile/user-uploads/cover.jpg" alt="User Profile Image">
                                        </div>
                                        <div class="profile-img-container d-flex align-items-center justify-content-between" style="padding-left: 20px;">
                                         <img src="<?php echo base_url();?>upload/compte/<?php echo $key->image; ?>" class="rounded-circle img-border box-shadow-1" style="width: 50px; height: 50px;">
                                          <div class="float-right">
                                           <!-- <button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary mr-1">
                                               <i class="feather icon-edit-2"></i>
                                            </button>-->
                                            <a href="Settings" ><button type="button" class="btn btn-icon btn-icon rounded-circle btn-primary">
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
                                    </div>
                                </div>
                 <!--<div class="card">
                                    <div class="card-header">
                                        <a  data-toggle="modal" data-target="#large"><h4 class="card-title"  style="color:#008b9c;">Collaborateurs</h4></a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                          <div class="col-md-4 col-6 user-latest-img">
                                            <img src="" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder"> 
                                           <img src="'.base_url().'upload/config/'.$getgrh->photo.'" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                         </div>
                                            
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
                                     <div class="col-md-2 col-6 user-latest-img">
                                                <img src="<?php echo base_url();?>upload/compte/<?php echo $key->image; ?>" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder">
                                                <img src="<?php echo base_url();?>upload/compte/<?php echo $key->image; ?>" style="width:94px;height:96px;" class="img-fluid mb-1 rounded-sm" alt="avtar img holder"> 
                                               </div>
                                            </div>
                                            
                                

                                                                 
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                        </div> 
                                        </div>
                                    </div>
                                </div>-->
               </div> */ ?>
                            <div class="col-lg-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                  <form method="post" action="update_compte" enctype="multipart/form-data" >
                                       
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
                            <input type="hidden" value="<?php echo $key->id ;?>" name="id">
                            <input type="hidden" value="profil" name="page">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->nom ;?>" name="nom" placeholder="Nom">
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
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->pre ;?>" name="pre" placeholder="Prenom">
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
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->tele ;?>" name="tele" placeholder="Phone">
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
                          <span>Email</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" name="mail" value="<?php echo $key->mail ;?>" placeholder="Email">
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
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->adress ;?>" name="adress" placeholder="adresse">
                            <div class="form-control-position">
                              <i class="fa fa-map-marker"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <!--<div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3">
                          <span>Type de contrat</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <select class="form-control" name="type">
                              <option><?php echo $key->type ;?></option>
                              <option value="CDI – Contrat à durée indéterminée">CDI – Contrat à durée indéterminée </option>
                              <option value="CDD – Contrat à durée déterminée">CDD – Contrat à durée déterminée.</option>
                              <option value="CTT – Contrat de travail temporaire">CTT – Contrat de travail temporaire</option>
                              <option value="Contrat d'apprentissage">Contrat d'apprentissage</option>
                              <option value="Contrat de professionnalisation">Contrat de professionnalisation</option>
                              <option value="CUI – Contrat unique d'insertion">CUI – Contrat unique d'insertion.</option>
                            </select>
                            <div class="form-control-position">
                              <i class="fa fa-map-marker"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>-->
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3">
                          <span>Facebook</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->facebook ;?>" name="facebook" placeholder="Facebook">
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
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->insta ;?>" name="insta" placeholder="Instagram">
                            <div class="form-control-position">
                              <i class="fa fa-instagram"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-3">
                          <span>Twitter</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->twitter ;?>" name="twitter" placeholder="Twitter">
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
                          <span>Youtube</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->youtube ;?>" name="youtube" placeholder="Twitter">
                            <div class="form-control-position">
                              <i class="fa fa-youtube-square"></i>
                            </div>
                          </div>
                        </div>
                         
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row gutters-xs">
                         
                        <div class="col-md-12">
                          <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                    </div>
                        </div>
                        
                         
                      </div>
                    </div>
                  
                  
                  
                  
                  </form>
                                    </div>
                                </div>


               </div>
               <div class="col-lg-12 col-12">
                  <div class="card">
                     <div class="card-body">
                      <form method="post" action="update_pass1" enctype="multipart/form-data" >
                      <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-12">
                          <h4 class="card-title"  style="color:#1d2946 ;"> Sécurité et connexion </h4>
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
                            <input type="text" id="fname-icon" class="form-control"  name="name" value="<?php echo $key->tele ;?>">
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
                                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
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
                            <div class="col-lg-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                      <div id="1">
                  <form method="post" action="update_login" enctype="multipart/form-data" >
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
                            <input type="hidden" value="<?php echo $key->id ;?>" name="id">
                            <input type="hidden" value="profil" name="page">
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->nom ;?>" name="nom" placeholder="Nom">
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
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->pre ;?>" name="pre" placeholder="Prenom">
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
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->tele ;?>" name="tele" placeholder="Phone">
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
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->fix ;?>" name="fix" placeholder="Phone">
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
                          <span>Email</span>
                        </div>
                        <div class="col-md-9">
                          <div class="position-relative has-icon-left">
                            <input type="text" id="fname-icon" class="form-control" name="mail" value="<?php echo $key->mail ;?>" placeholder="Email">
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
                            <input type="text" id="fname-icon" class="form-control" value="<?php echo $key->adress ;?>" name="adress" placeholder="adresse">
                            <div class="form-control-position">
                              <i class="fa fa-map-marker"></i>
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
                  
                  
                  
                  
                  </form></div>
                                    </div>
                                </div>


               </div>
               <div class="col-lg-12 col-12">
                  <div class="card">
                     <div class="card-body">
                      <form method="post" action="update_pass" enctype="multipart/form-data" >
                      <div class="form-group">
                      <div class="row gutters-xs">
                          <div class="col-md-12">
                          <h4 class="card-title"  style="color:#1d2946 ;"> Sécurité et connexion </h4>
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
                                                        <button type="submit" class="btn btn-primary">Enregistrer</button>
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
    <?php require('footer.php');?>  
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/components.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/dashboard-ecommerce.js"></script>
    <!-- END: Page JS-->
    <!-- BEGIN: Page JS
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/charts/chart-apex.js"></script>-->
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