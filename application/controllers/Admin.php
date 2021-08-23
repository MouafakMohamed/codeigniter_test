<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
   	parent::__construct();
       
   	   //$this->load->model('Model');
    }
    public function index()
  {
    if ($this->session->userdata('type') == 'Gérant') {
      redirect(base_url().'accueil','refresh');   
    }else{
      $this->load->model('Model');
        $profil = $this->Model->get('login');
      if (empty($profil)) {
        redirect(base_url().'registre','refresh');
      }
      $error = '';
        if (!empty($_GET['id'])) {
        $error = 'le nom ou le mot de passe est incorrect';
                }
      $data['error'] = $error;
      $this->load->view('login.php',$data);
    }
  }
  public function registre()
  {
    $login = $this->Model->get('login');
    if (empty($login)) {
      $data['error'] = ' ';
      if (isset($_GET['id'])) {
          if ($_GET['id'] == 'pass') {
        $data['error'] = "le mot de pass n'est pas confirmer";
          }
      }
      $this->load->view('registre.php',$data);
    }else{
      redirect(base_url().'accueil','refresh');
    }
  }
  public function add_registre()
  {
      if (!empty($_POST['nom'])) {
            $image = '123.jpg';
            $logo = '123.jpg';
          $nom = $_POST['nom'];
          $pre = $_POST['pre'];
          $adress = $_POST['adress'];
          $tele = $_POST['tele'];
          $fix = $_POST['fix'];
          $mail = $_POST['mail'];
          $type = 'Gérant';
          $name = $_POST['name'];
          if ($_POST['pass'] == $_POST['pass1']) {
            $pass = $_POST['pass'];
          }else{
              redirect(base_url().'registre?id=pass','refresh'); 
          }
          if ($_FILES['image']['name'] != '') {
                     $test = explode(".", $_FILES['image']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image']['name'] = $image1;
                       $image = addslashes($_FILES['image']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/compte';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image']['name'];
                             }
                        }
                    }
                    if ($_FILES['logo']['name'] != '') {
                     $test = explode(".", $_FILES['logo']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['logo']['name'] = $image1;
                       $logo = addslashes($_FILES['logo']['tmp_name']) ;
                       $logo = file_get_contents($logo);
                       $logo = base64_encode($logo);
                        if (!empty($logo)) {
                
                          $config['upload_path'] = 'upload/compte';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('logo')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $logo = $_FILES['logo']['name'];
                             }
                        }
                    }
          $data = array(
                       'nom' => $nom,
                       'pre' => $pre,
                       'adress' => $adress,
                       'tele' => $tele,
                       'mail' => $mail,
                       'type' => $type,
                       'fix' => $fix,
                       'image' => $image,
                       'logo' => $logo,
                       'name' => $name,
                       'pass' => $pass,
                               );
                        $query = $this->Model->add('login',$data);
                                if ($query = TRUE) {
                                  $result = $this->Model->get('login');
                                  foreach ($result as $key) {
                                        $session_data = array('name' => $key->nom.' '.$key->pre,
                                                         'type' => 'Gérant',
                                                         'id' => $key->id,
                                                         'langue' => 'francais',
                                                         'pass' => $pass,
                                                         'num' => '1',
                                                         'time' =>time(),);
                                        $this->session->set_userdata($session_data);  
                                       redirect(base_url().'accueil','refresh');  
                                  }
                                   
                                     
                                }else{
                                  redirect(base_url().'accueil','refresh');
                                }
        }else{
          redirect(base_url() . 'index','refresh');
        }
  }
  public function login1()
    {
      if (isset($_POST['sub'])) {
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $langue = $_POST['langue'];
        $result = $this->Model->get_by('login','name',$name);
        if (!empty($result)) {
          foreach ($result as $row) {
            if ($pass == $row->pass) {
              $type = $row->type ;
              $session_data = array('name' => $name,
                                  'type' => 'Gérant',
                                  'id' => $row->id,
                                  'langue' => $langue,
                                  'pass' => $pass,
                                  'num' => '1',
                                   'time' =>time(),);
              $this->session->set_userdata($session_data);
              if ($this->session->userdata('type') == 'Gérant') {
                redirect(base_url().'accueil','refresh');
              }elseif ($this->session->userdata('type') == '') {
                      redirect(base_url().'out','refresh');
              } 
            }else{
              redirect(base_url().'index?id=1','refresh');
            }
          }
        }else{
          $result1 = $this->Model->get_by('compte','tele',$name);
          if (!empty($result1)) {
            foreach ($result1 as $row) {
                  if ($pass == $row->pass) {
                    $type = $row->type ;
                    $session_data = array('name' => $name,
                                  'id' => $row->id,
                                    'type' => 'admin',
                                    'pass' => $pass,
                                    'num' => '2',
                                    'langue' => $langue,
                                    'time' =>time());
                              $this->session->set_userdata($session_data);
                               redirect(base_url().'accueil','refresh');
                  }else{
                      redirect(base_url().'index?id=1','refresh');
                  }
            } 
          }else{
                  redirect(base_url().'index?id=1','refresh');
          }
        }
      }else{
        redirect(base_url().'index','refresh');
      }
    } 
	public function lock_screen()
	{
		if (!empty($this->session->userdata('id'))) {
			$data['error'] = '';
			if (isset($_POST['sub'])) {
				if ($_POST['pass'] == $this->session->userdata('pass')) {
					if ($this->session->userdata('num') == '1') {
						$data['type'] = 'Gérant';
					}elseif ($this->session->userdata('num') == '2') {
						$data['type'] = 'admin';
					}
          $session_data = array('time' => time() );
          $this->session->set_userdata($session_data);
					$this->session->set_userdata($data);
				redirect(base_url().'accueil','refresh');
          echo $this->session->userdata('type');
				}else{
					$data['error'] = 'le mot de passe est incorrect';
				}
			}
           $data['id'] = $this->session->userdata('id');
           $data['type'] = $this->session->userdata('type');
           $session_data = array('time' => time() );
           $this->session->set_userdata($session_data);
        
           $this->load->view('lock_screen.php',$data);
           $this->session->unset_userdata('type');

		}else{

			 redirect(base_url() . 'logout','refresh');
		}
	}
    public function accueil()
	{
        if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');
               if(time() - $time > 900) {
                redirect(base_url().'lock_screen','refresh');
               }
          }
               $session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
    if ($this->session->userdata('type') == 'Gérant') {
      $data['type'] = $this->session->userdata('type');
      $data['id'] = $this->session->userdata('id');
             $num10 = 0;
          $data['cat'] = $this->Model->get('catégorie');
          $data['charge'] = $this->Model->get('charge');
          $data['pro'] = $this->Model->get('produit');
          $data['SAV'] = $this->Model->get('sav');
          $data['four'] = $this->Model->get('fournisseur');
          $data['four1'] = $this->Model->get_by_number('5','fournisseur');
          $data['marque'] = $this->Model->get('marques');
          $data['clien'] = $this->Model->get('cliens');
          $data['sortir'] = $this->Model->get('bons');
          $data['clien1'] = $this->Model->get_by_number('5','cliens');
      $bons = $this->Model->get('bons');
      $date = date('Y-m-d');
      foreach ($bons as $key) {
        $date1 = explode(" ",$key->date);
        if ($date1[0] == $date) {
          $num10 = $num10+1;
        }
      }
        $res10 = $this->Model->get('profil');
        $data['res10'] = $res10;
      $data['bons'] = $bons;
          $data['num10'] = $num10;
          if ($this->session->userdata('langue') == 'francais') {
          $this->load->view('accueil.php',$data);
      }elseif ($this->session->userdata('langue') == 'arabic') {
            $this->load->view('ar/accueil.php',$data);
       }elseif ($this->session->userdata('langue') == 'english') {
            $this->load->view('accueil.php',$data);
       }
    }elseif ($this->session->userdata('type') == 'admin') {
      $data['type'] = $this->session->userdata('type');
      $id = $this->session->userdata('id');
      $pouvoir = $this->Model->get_by('compte','id',$id);
      $data['pouvoirs'] = $pouvoir;
      foreach ($pouvoir as $key) {
        if ($key->active == 'oui') {
          if ($key->dashboard == 'edit') {
                $num10 = 0;
                   $data['query1'] = $this->Model->get_by_number('5','produit') ;
                   $data['cat'] = $this->Model->get('catégorie');
                   $data['pro'] = $this->Model->get('produit');
                   $data['SAV'] = $this->Model->get('sav');
                   $data['four'] = $this->Model->get('fournisseur');
                   $data['four1'] = $this->Model->get_by_number('5','fournisseur');
                   $data['marque'] = $this->Model->get('marques');
                   $data['clien'] = $this->Model->get('cliens');
                   $data['sortir'] = $this->Model->get('bons');
                   $data['clien1'] = $this->Model->get_by_number('5','cliens');
               $bons = $this->Model->get('bons');
               $date = date('Y-m-d');
               foreach ($bons as $key) {
                 $date1 = explode(" ",$key->date);
                 if ($date1[0] == $date) {
                   $num10 = $num10+1;
                 }
               }
                 $res10 = $this->Model->get('profil');
                 $data['res10'] = $res10;
               $data['bons'] = $bons;
                     $data['num10'] = $num10;
                if ($this->session->userdata('langue') == 'francais') {
                      $this->load->view('accueil.php',$data);
                }elseif ($this->session->userdata('langue') == 'arabic') {
                      $this->load->view('ar/accueil.php',$data);
                 }elseif ($this->session->userdata('langue') == 'english') {
                      $this->load->view('accueil.php',$data);
                 }
                 }else{
                $data['type'] = $this->session->userdata('type');
               $id = $this->session->userdata('id');
               $data['pouvoirs'] = $this->Model->get_by('compte','id',$id);
                  if ($this->session->userdata('langue') == 'francais') {
                        $this->load->view('dashboard_voir.php',$data);
                    }elseif ($this->session->userdata('langue') == 'arabic') {
                          $this->load->view('ar/dashboard_voir.php',$data);
                    }elseif ($this->session->userdata('langue') == 'english') {
                          $this->load->view('accueil_voir.php',$data);
                    }
                }
        }else{
        redirect(base_url() . 'block','refresh');
          }
        
      }
    }else{
      redirect(base_url() . 'logout','refresh');
    }
	}
	public function block()
	{
		$this->load->view('block.php');
	}
	public function ajouter_clien()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
        }
               $session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			$num10 = 0;
			$bons = $this->Model->get('bons');
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
		    $res10 = $this->Model->get('profil');
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		   $error = '';
		    if (!empty($_GET['id'])) {
				if ($_GET['id'] == 1) {
					$error = 'Ce telephone est déja existe';
				}
			}
		    $data['error'] = $error;
		    $data['res1'] = $this->Model->get('cliens');
		      if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('ajouter_clien.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/ajouter_clien.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('ajouter_clien.php',$data);
		   }
		}elseif ($this->session->userdata('type') == 'admin') {

			$data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;			
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->CRM == 'edit') {
			        $num10 = 0;
			        $bons = $this->Model->get('bons');
			        $date = date('Y-m-d');
			        foreach ($bons as $key) {
				        $date1 = explode(" ",$key->date);
				        if ($date1[0] == $date) {
					        $num10 = $num10+1;
				        }
			        }
		            $res10 = $this->Model->get('profil');
		            $data['res10'] = $res10;
			        $data['bons'] = $bons;
                  $data['num10'] = $num10;
		           $error = '';
		            if (!empty($_GET['id'])) {
				        if ($_GET['id'] == 1) {
					        $error = 'Ce telephone est déja existe';
				        }
			        }
		            $data['error'] = $error;
		            $data['res1'] = $this->Model->get('cliens');
		             if ($this->session->userdata('langue') == 'francais') {
		                   $this->load->view('ajouter_clien.php',$data);
		               }elseif ($this->session->userdata('langue') == 'arabic') {
		      	             $this->load->view('ar/ajouter_clien.php',$data);
		                }elseif ($this->session->userdata('langue') == 'english') {
		                     $this->load->view('ajouter_clien.php',$data);
		                }
		        }elseif ($key->CRM == 'voir') {
		    	        redirect(base_url().'table_credit','refresh');
		    	}else{
			         redirect(base_url() . 'accueil','refresh');
		         }
		         }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
		     redirect(base_url() . 'accueil','refresh');
		}
	}
	
	public function table_credit()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
                             $this->db->order_by('nom', 'ASC');
            $data['clien'] = $this->Model->get('cliens');
             if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('table_credit.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/table_credit.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('table_credit.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->CRM == 'edit') {
			      $data['clien'] = $this->Model->get('cliens');
                 if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('table_credit.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/table_credit.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('table_credit.php',$data);
		             }
	            }elseif ($key->CRM == 'voir') {
			          $data['clien'] = $this->Model->get('cliens');
                      if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('table_credit_voir.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/table_credit_voir.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('table_credit_voir.php',$data);
		             }
                }else{
			          redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
            }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function Entrer()
  {
    if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time'); 

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
    if ($this->session->userdata('type') == 'Gérant') {
      $data['type'] = $this->session->userdata('type');
      $data['id'] = $this->session->userdata('id');
             $data['entrer'] = $this->Model->get('entrer'); 
              if ($this->session->userdata('langue') == 'francais') {
                    $this->load->view('entrer.php',$data);
                }elseif ($this->session->userdata('langue') == 'arabic') {
                      $this->load->view('ar/entrer.php',$data);
                 }elseif ($this->session->userdata('langue') == 'english') {
                      $this->load->view('entrer.php',$data);
                 }
    }elseif($this->session->userdata('type') == 'admin'){
      $data['type'] = $this->session->userdata('type');
      $id = $this->session->userdata('id');
      $pouvoir = $this->Model->get_by('compte','id',$id);
      $data['pouvoirs'] = $pouvoir;
      foreach ($pouvoir as $key) {
        if ($key->active == 'oui') {
        if ($key->trac == 'edit') {
               $data['entrer'] = $this->Model->get('entrer'); 
                     if ($this->session->userdata('langue') == 'francais') {
                    $this->load->view('entrer.php',$data);
                }elseif ($this->session->userdata('langue') == 'arabic') {
                      $this->load->view('ar/entrer.php',$data);
                 }elseif ($this->session->userdata('langue') == 'english') {
                      $this->load->view('entrer.php',$data);
                 }
                 }else{
                 redirect(base_url() . 'accueil','refresh');
             }
             }else{
        redirect(base_url() . 'block','refresh');
          }
            }
    }else{
      redirect(base_url() . 'accueil','refresh');
    }
  }
  public function Archive()
  {
    if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time'); 

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
    if ($this->session->userdata('type') == 'Gérant') {
      $data['type'] = $this->session->userdata('type');
      $data['result'] = '';
      $data['id'] = $this->session->userdata('id');
      if (isset($_GET['page'])) {
        if (!empty($_GET['page'])) {
          $page = $_GET['page'];
            $data['result'] = $this->Model->get($page); 
        }
      }
        
              if ($this->session->userdata('langue') == 'francais') {
                    $this->load->view('archive.php',$data);
                }elseif ($this->session->userdata('langue') == 'arabic') {
                      $this->load->view('ar/archive.php',$data);
                 }elseif ($this->session->userdata('langue') == 'english') {
                      $this->load->view('archive.php',$data);
                 }
    }else{
      redirect(base_url() . 'accueil','refresh');
    }
  }
	public function profil()
  {
    if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time'); 

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
         if (!empty($_GET['id'])) {
            $data['error'] = "Le mot de pass n'est pas confirmer";
          }else{
            $data['error'] = ' ';
          }
    if ($this->session->userdata('type') != '') {
      $data['type'] = $this->session->userdata('type');
          if ($data['type'] == 'admin') {
            $data['id'] = $this->session->userdata('id');
            $id = $this->session->userdata('id');
              $pouvoir = $this->Model->get_by('compte','id',$id);
              foreach ($pouvoir as $key) {
                if ($key->active == 'non') {
                        redirect(base_url() . 'block','refresh');
                    }
              }
              $data['pouvoirs'] = $pouvoir;
          }else{
            $data['id'] = $this->session->userdata('id');
          }
                    if ($this->session->userdata('langue') == 'francais') {
                    $this->load->view('profile.php',$data);
                }elseif ($this->session->userdata('langue') == 'arabic') {
                      $this->load->view('ar/profil.php',$data);
                 }elseif ($this->session->userdata('langue') == 'english') {
                      $this->load->view('profile.php',$data);
                 }
    }else{
      redirect(base_url() . 'accueil','refresh');
    }
  }
  public function parametre()
  {
    if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time'); 
               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
    } 
               $session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
    if ($this->session->userdata('type') != '') {
      $data['type'] = $this->session->userdata('type');
          if ($data['type'] == 'admin') {
            $data['id'] = $this->session->userdata('id');
            $id = $this->session->userdata('id');
              $pouvoir = $this->Model->get_by('compte','id',$id);
              foreach ($pouvoir as $key) {
                if ($key->active == 'non') {
                        redirect(base_url() . 'block','refresh');
                    }
                if ($key->active == 'non') {
                      if ($this->session->userdata('langue') == 'francais') {
                           $this->load->view('parametre.php',$data);
                       }elseif ($this->session->userdata('langue') == 'arabic') {
                             $this->load->view('ar/parametre.php',$data);
                       }elseif ($this->session->userdata('langue') == 'english') {
                             $this->load->view('parametre.php',$data);
                       } 
                }
            }
              $data['pouvoirs'] = $pouvoir;

          }else{
            $data['id'] = $this->session->userdata('id');
          }
                     if ($this->session->userdata('langue') == 'francais') {
                    $this->load->view('parametre.php',$data);
                }elseif ($this->session->userdata('langue') == 'arabic') {
                      $this->load->view('ar/parametre.php',$data);
                }elseif ($this->session->userdata('langue') == 'english') {
                      $this->load->view('parametre.php',$data);
                } 
                
    }else{
      redirect(base_url() . 'accueil','refresh');
    }
  }
	
	public function notifications()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			$id = $this->session->userdata('id');
             $data['salal'] = $this->Model->get('notification');
             if ($this->session->userdata('langue') == 'francais') {
                    $this->load->view('notifications.php',$data);
                }elseif ($this->session->userdata('langue') == 'arabic') {
                      $this->load->view('ar/notifications.php',$data);
                }elseif ($this->session->userdata('langue') == 'english') {
                      $this->load->view('notifications.php',$data);
                } 
		}/*elseif($this->session->userdata('type') == 'admin'){
			$data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->entrer == 'edit') {
			         $data['not'] = $this->Model->get('notification'); 
                     $this->load->view('notifications.php',$data);
                 }else{
			           redirect(base_url() . 'accueil','refresh');
		         }
		         }else{
				redirect(base_url() . 'block','refresh');
			    }
            }
		}*/else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function tracabilite_produit()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			if (isset($_GET['id'])) {
				if (!empty($_GET['id'])) {
					$pro = $_GET['id']; 
				}else{
					$pro = ''; 
				}
			}else{
					$pro = ''; 
				}
				$data['pro'] = $pro;
             $data['produit'] = $this->Model->get('produit'); 
             $data['clien'] = $this->Model->get('cliens'); 
                   if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('tracabilite_produit.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/tracabilite_produit.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('tracabilite_produit.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			$data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->trac == 'edit') {
			        if (isset($_GET['id'])) {
				if (!empty($_GET['id'])) {
					$pro = $_GET['id']; 
				}else{
					$pro = ''; 
				}
			}else{
					$pro = ''; 
				}
				$data['pro'] = $pro;
             $data['produit'] = $this->Model->get('produit'); 
             $data['clien'] = $this->Model->get('cliens'); 
             if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('tracabilite_produit.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/tracabilite_produit.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('tracabilite_produit.php',$data);
		             }
                 }else{
			           redirect(base_url() . 'accueil','refresh');
		         }
		         }else{
				redirect(base_url() . 'block','refresh');
			    }
            }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function tracabilite_client()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			if (isset($_GET['id'])) {
				if (!empty($_GET['id'])) {
					$pro = $_GET['id']; 
				}else{
					$pro = ''; 
				}
			}else{
					$pro = ''; 
				}
				$data['pro1'] = $pro;
             $data['produit'] = $this->Model->get('produit'); 
             $data['clien'] = $this->Model->get('cliens'); 
             if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('tracabilite_client.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/tracabilite_client.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('tracabilite_client.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			$data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->trac == 'edit') {
			        if (isset($_GET['id'])) {
				if (!empty($_GET['id'])) {
					$pro = $_GET['id']; 
				}else{
					$pro = ''; 
				}
			}else{
					$pro = ''; 
				}
				$data['pro1'] = $pro;
             $data['produit'] = $this->Model->get('produit'); 
             $data['clien'] = $this->Model->get('cliens'); 
                   if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('tracabilite_client.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/tracabilite_client.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('tracabilite_client.php',$data);
		             }
                 }else{
			           redirect(base_url() . 'accueil','refresh');
		         }
		         }else{
				redirect(base_url() . 'block','refresh');
			    }
            }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function comptabilite()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
             $data['query'] = $this->Model->get('catégorie'); 
             if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('comptabilite.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/comptabilite.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('comptabilite.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->comptabilité == 'edit') {
			        $data['query'] = $this->Model->get('catégorie'); 
                   if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('comptabilite.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/comptabilite.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('comptabilite.php',$data);
		             }
                }else{
			            redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
            }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function comptabilite2()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
             $data['query'] = $this->Model->get('charge'); 
             if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('conta1.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/conta1.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('comptabilite.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->comptabilité == 'edit') {
			        $data['query'] = $this->Model->get('charge'); 
                   if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('conta1.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/comptabilite.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('comptabilite.php',$data);
		             }
                }else{
			            redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
            }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function Sortir()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
       $this->db->order_by("id", "asc");
             $data['bons'] = $this->Model->get('bons'); 
              if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('Sortir.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/Sortir.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('Sortir.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->trac == 'edit') {
           $this->db->order_by("id", "asc");
			       $data['bons'] = $this->Model->get('bons'); 
                    if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('Sortir.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/Sortir.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('Sortir.php',$data);
		             }
               }else{
			           redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function Salaires()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
             $data['compte'] = $this->Model->get('compte');
             $data['salaire'] = $this->Model->get('salaire'); 
              if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('Salaires.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/Salaires.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('Salaires.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->comptabilité == 'edit') {
			       $data['compte'] = $this->Model->get('compte');
                   $data['salaire'] = $this->Model->get('salaire'); 
                    if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('Salaires.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/Salaires.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('Salaires.php',$data);
		             }
               }else{
			           redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function Cheques()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
             $data['check'] = $this->Model->get('check'); 
              if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('Cheques.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/Cheques.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('Cheques.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
				if ($key->trac == 'comptabilité') {
			       $data['check'] = $this->Model->get('check'); 
                    if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('Cheques.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/Cheques.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('Cheques.php',$data);
		             }
               }else{
			           redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function SAV()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
             $data['SAV'] = $this->Model->get('sav'); 
             $query = '';
             if (isset($_GET['facture'])) {
              $query = $this->Model->get_by('bonat','id_bons',$_GET['facture']);
             }
             $data['query'] = $query;
             if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('SAV1.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/SAV1.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('SAV.php',$data);
		             }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->SAV == 'edit') {
                 $data['SAV'] = $this->Model->get('sav'); 
                 if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('SAV.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/SAV.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('SAV.php',$data);
		             }
		        }elseif ($key->SAV == 'voir') {
			      $data['SAV'] = $this->Model->get('sav'); 
                  if ($this->session->userdata('langue') == 'francais') {
		                $this->load->view('SAV_voir.php',$data);
		            }elseif ($this->session->userdata('langue') == 'arabic') {
		      	          $this->load->view('ar/SAV_voir.php',$data);
		             }elseif ($this->session->userdata('langue') == 'english') {
		                  $this->load->view('SAV_voir.php',$data);
		             }
		        }else{
			           redirect(base_url() . 'accueil','refresh');
		         }
		         }else{
				redirect(base_url() . 'block','refresh');
			    }
		     }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function POUVOIRS()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			if (!empty($_GET['id'])) {
		        $id = $_GET['id'];
		        $data['compte'] = $this->Model->get_by('compte','id',$id);
                if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('POUVOIRS.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/POUVOIRS.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('POUVOIRS.php',$data);
		   }
            }else{
			redirect(base_url() . 'compte','refresh');
		    }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->POUVOIRS == 'edit') {
			        if (!empty($_GET['id'])) {
		                $id = $_GET['id'];
		                $data['compte'] = $this->Model->get_by('compte','id',$id);
                         if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('POUVOIRS.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/POUVOIRS.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('POUVOIRS.php',$data);
		   }
                    }else{
			        redirect(base_url() . 'compte','refresh');
		            }
		         }else{
                    redirect(base_url() . 'compte','refresh');
		         }
		         }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			redirect(base_url() . 'compte','refresh');
		}
	}
	public function commande()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
             $data['produit'] = $this->Model->get('produit'); 
                    if ($this->session->userdata('langue') == 'francais') {
		                 $this->load->view('commande.php',$data);
		             }elseif ($this->session->userdata('langue') == 'arabic') {
		      	           $this->load->view('ar/commande.php',$data);
		              }elseif ($this->session->userdata('langue') == 'english') {
		                   $this->load->view('commande.php',$data);
		              }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->command == 'edit') {
                   $data['produit'] = $this->Model->get('produit'); 
                   if ($this->session->userdata('langue') == 'francais') {
		                 $this->load->view('commande.php',$data);
		             }elseif ($this->session->userdata('langue') == 'arabic') {
		      	           $this->load->view('ar/commande.php',$data);
		              }elseif ($this->session->userdata('langue') == 'english') {
		                   $this->load->view('commande.php',$data);
		              }
                }else{
                	redirect(base_url() . 'accueil','refresh');
                }
                }else{
				redirect(base_url() . 'block','refresh');
			    }
            }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function caisse()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
         $data['check'] = 'salam';
        if (!empty($_GET['id'])) {
          $data['check'] = $_GET['id'];
        }else{
          $data['check'] = 'salam';
        }
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			$error = '';
    	    $error1 = '';
    	      if (!empty($_GET['id'])) {
    		      if ($_GET['id'] == '1') {
    		      $error1 = 'produit untrouvable';
    	          }
    		      if ($_GET['id'] == '4') {
    		      $error1 = "la quantité ne peut pas être 0";
    	          }
    		      if ($_GET['id'] == '2') {
              $error1 = 'Dépasse la limite autorisée';
                }
                if ($_GET['id'] == '3') {
              $error1 = 'Ce produit est déja dans votre liste';
                }
    	      }
    	      $data['error'] = $error1;
    	                     $this->db->order_by("id", "desc");
             $data['bon'] = $this->Model->get_by('bon','ok','Gérant'); 
             $data['query'] = $this->Model->get('catégorie'); 
             $data['clien10'] = $this->Model->get('cliens'); 
              if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('caisse.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/caisse.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('caisse.php',$data);
		   }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->caisse == 'edit') {
                    $error = '';
    	            $error1 = '';
    	             if (!empty($_GET['id'])) {
              if ($_GET['id'] == '1') {
              $error1 = 'produit untrouvable';
                }
              if ($_GET['id'] == '4') {
              $error1 = "la quantité ne peut pas être 0";
                }
              if ($_GET['id'] == '2') {
              $error1 = 'Dépasse la limite autorisée';
                }
                if ($_GET['id'] == '3') {
              $error1 = 'Ce produit est déja dans votre liste';
                }
            }
    	              $data['error'] = $error1;
                     $data['bon'] = $this->Model->get_by('bon','ok',$id); 
                     $data['query'] = $this->Model->get('catégorie'); 
                     $data['cliens'] = $this->Model->get('cliens'); 
                      if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('caisse.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/caisse.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('caisse.php',$data);
		   }
                }else{
			        redirect(base_url() . 'accueil','refresh');
		        } 
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			redirect(base_url() . 'accueil','refresh');
		}
	}
	public function invoice()
  {
    if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time'); 

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
    if ($this->session->userdata('type') == 'Gérant') {
      $data['type'] = $this->session->userdata('type');
      $data['id'] = $this->session->userdata('id');
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $res = $this->Model->get_by('bonat','id_bons',$id);
            $query5 = $this->Model->get_by('bons','id_bons',$id);
            $data['query5'] = $query5;
            $data['res'] = $res ;
            $this->load->view('invoice.php',$data);
        }
    }elseif($this->session->userdata('type') == 'admin'){
       $data['type'] = $this->session->userdata('type');
      $id = $this->session->userdata('id');
      $pouvoir = $this->Model->get_by('compte','id',$id);
      $data['pouvoirs'] = $pouvoir;
      foreach ($pouvoir as $key) {
        if ($key->active == 'oui') {
                if ($key->caisse == 'edit' or $key->trac == 'edit') {
                     if (!empty($_GET['id'])) {
                     $id = $_GET['id'];
                     $res = $this->Model->get_by('bonat','id_bons',$id);
                    $query5 = $this->Model->get_by('bons','id_bons',$id);
                     $data['query5'] = $query5;
                     $data['res'] = $res ;
                     $this->load->view('invoice.php',$data);
                 }else{
                            redirect(base_url() . 'accueil','refresh');
                 }
            }else{
              redirect(base_url() . 'accueil','refresh');
            }
            }else{
        redirect(base_url() . 'block','refresh');
          }
        }
    }else{
      redirect(base_url() . 'logout','refresh');
    }      
  }
  public function Ticket()
  {
    if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time'); 
               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
    if ($this->session->userdata('type') == 'Gérant') {
      $data['type'] = $this->session->userdata('type');
      $data['id'] = $this->session->userdata('id');
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $res = $this->Model->get_by('bonat','id_bons',$id);
            $query5 = $this->Model->get_by('bons','id_bons',$id);
            $data['query5'] = $query5;
            $data['res'] = $res ;
            $this->load->view('Ticket.php',$data);
        }
    }elseif($this->session->userdata('type') == 'admin'){
       $data['type'] = $this->session->userdata('type');
      $id = $this->session->userdata('id');
      $pouvoir = $this->Model->get_by('compte','id',$id);
      $data['pouvoirs'] = $pouvoir;
      foreach ($pouvoir as $key) {
        if ($key->active == 'oui') {
                if ($key->caisse == 'edit' or $key->trac == 'edit') {
                     if (!empty($_GET['id'])) {
                     $id = $_GET['id'];
                     $res = $this->Model->get_by('bonat','id_bons',$id);
                    $query5 = $this->Model->get_by('bons','id_bons',$id);
                     $data['query5'] = $query5;
                     $data['res'] = $res ;
                     $this->load->view('Ticket.php',$data);
                 }else{
                            redirect(base_url() . 'accueil','refresh');
                 }
            }else{
              redirect(base_url() . 'accueil','refresh');
            }
            }else{
        redirect(base_url() . 'block','refresh');
          }
        }
    }else{
      redirect(base_url() . 'logout','refresh');
    }      
  }
	public function Categories()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
                             $this->db->order_by('name', 'ASC');
             $data['cat'] = $this->Model->get('catégorie');
             if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('Categories.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/Categories.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('Categories.php',$data);
		   }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->cat == 'edit') {
			        $data['cat'] = $this->Model->get('catégorie');
                     if ($this->session->userdata('langue') == 'francais') {
		                 $this->load->view('Categories.php',$data);
		             }elseif ($this->session->userdata('langue') == 'arabic') {
		      	           $this->load->view('ar/Categories.php',$data);
		              }elseif ($this->session->userdata('langue') == 'english') {
		                   $this->load->view('Categories.php',$data);
		              }
		        }elseif ($key->cat == 'voir') {
			        $data['cat'] = $this->Model->get('catégorie');
                     if ($this->session->userdata('langue') == 'francais') {
		                 $this->load->view('Categories_voir.php',$data);
		             }elseif ($this->session->userdata('langue') == 'arabic') {
		      	           $this->load->view('ar/Categories_voir.php',$data);
		              }elseif ($this->session->userdata('langue') == 'english') {
		                   $this->load->view('Categories_voir.php',$data);
		              }
                }else{
			        redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			redirect(base_url() . 'logout','refresh');
		}
	}
	public function Marque()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
             $data['marque'] = $this->Model->get('marques');
             if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('Marque.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/Marque.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('Marque.php',$data);
		   }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->marque == 'edit') {
			        $data['marque'] = $this->Model->get('marques');
                     if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('Marque.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/Marque.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('Marque.php',$data);
		   }
		        }elseif ($key->marque == 'voir') {
			    $data['marque'] = $this->Model->get('marques');
                 if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('Marque_voir.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/Marque_voir.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('Marque_voir.php',$data);
		   }
                 }else{

			        redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{

			redirect(base_url() . 'logout','refresh');
		}
	}
	public function compte()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
             $data['compte'] = $this->Model->get('compte');
             if (!empty($_GET['error'])) {
             	$error = 'Ce numéro du téléphone est déja existe';
             }else{
             	$error = '';
             }
             $data['error'] = $error; 
             if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('compte.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/compte.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('compte.php',$data);
		   }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->compte == 'edit') {
                   if (!empty($_GET['error'])) {
              $error = 'Ce numéro du téléphone est déja existe';
             }else{
              $error = '';
             }
             $data['error'] = $error;
			        $data['compte'] = $this->Model->get('compte');
			         if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('compte.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/compte.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('compte.php',$data);
		   }
		        }elseif ($key->compte == 'voir') {
               if (!empty($_GET['error'])) {
              $error = 'Ce numéro du téléphone est déja existe';
             }else{
              $error = '';
             }
             $data['error'] = $error;
		        	$data['compte'] = $this->Model->get('compte');
			         if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('compte_voir.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/compte_voir.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('compte_voir.php',$data);
		   }
			    }else{

			        redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			redirect(base_url() . 'logout','refresh');
		}
	}
	public function fournisseur()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			$num10 = 0;
		    $res10 = $this->Model->get('profil');
		    $data['res10'] = $res10;
            $data['num10'] = $num10;
			$error = '';
			if (!empty($_GET['id'])) {
				if ($_GET['id'] == 1) {
					$error = 'Ce telephone est déja existe';
				}
			}
		$data['error'] = $error;
		$data['res1'] = $this->Model->get('fournisseur');
		if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('fournisseur.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/fournisseur.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('fournisseur.php',$data);
		   }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->four == 'edit') {
			        $num10 = 0;
		            $res10 = $this->Model->get('profil');
		            $data['res10'] = $res10;
                    $data['num10'] = $num10;
			        $error = '';
			        if (!empty($_GET['id'])) {
				        if ($_GET['id'] == 1) {
					        $error = 'Ce telephone est déja existe';
				        }
			        }
		            $data['error'] = $error;
		            $data['res1'] = $this->Model->get('fournisseur');
		            if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('fournisseur.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/fournisseur.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('fournisseur.php',$data);
		   }		        }elseif ($key->four == 'voir') {
			        $num10 = 0;
		            $res10 = $this->Model->get('profil');
		            $data['res10'] = $res10;
                    $data['num10'] = $num10;
			        $error = '';
			        if (!empty($_GET['id'])) {
				        if ($_GET['id'] == 1) {
					        $error = 'Ce telephone est déja existe';
				        }
			        }
		            $data['error'] = $error;
		            $data['res1'] = $this->Model->get('fournisseur');
		            if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('fournisseur_voir.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/fournisseur_voir.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('fournisseur_voir.php',$data);
		   }
		        }else{
		        	redirect(base_url().'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		    
		}else{
			redirect(base_url().'accueil','refresh');
		}
		
	}
	public function ajouter_produit()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
		    $num10 = 0;
		$error1 = '';
		$error2 = '';
		if (isset($_GET['id'])) {
			if ($_GET['id'] == 1) {
				$error1 = 'Ce nom est déja existe';
			}elseif ($_GET['id'] == 2) {
				$error2 = 'Ce reference est déja existe';
			}
		}
		$data['error1'] = $error1 ;
		$data['error2'] = $error2 ;
		$data['query'] = $this->Model->get('catégorie');
		$data['pro'] = $this->Model->get('produit');
		$data['query1'] = $this->Model->get('marques');
		$data['query2'] = $this->Model->get('fournisseur');
		if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('ajouter_produit.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/ajouter_produit.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('ajouter_produit.php',$data);
		   }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->produit == 'edit') {
                    $num10 = 0;
		            $error1 = '';
		            $error2 = '';
		            if (isset($_GET['id'])) {
			            if ($_GET['id'] == 1) {
				            $error1 = 'Ce nom est déja existe';
			            }elseif ($_GET['id'] == 2) {
				            $error2 = 'Ce reference est déja existe';
			            }
		            }
		            $this->load->model('Model');
		            $data['error1'] = $error1 ;
		            $data['error2'] = $error2 ;
		            $data['query'] = $this->Model->get('catégorie');
		            $data['pro'] = $this->Model->get('produit');
		            $data['query1'] = $this->Model->get('marques');
		            $data['query2'] = $this->Model->get('fournisseur');
		            if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('ajouter_produit.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/ajouter_produit.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('ajouter_produit.php',$data);
		   }
		        }elseif ($key->produit == 'voir') {
			            redirect(base_url() . 'produit','refresh');
		        }else{
			            redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			redirect(base_url() . 'logout','refresh');
		}
	
	}
	public function GCC()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			if (isset($_GET['id'])) {
				if (!empty($_GET['id'])) {
					$id = $_GET['id'];
					$data['clien'] = $this->Model->get_by('cliens','id',$id);
					if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('GCC.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/GCC.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('GCC.php',$data);
		   }
				}
			}
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->CRM == 'edit') {
			        if (isset($_GET['id'])) {
				        if (!empty($_GET['id'])) {
					        $id = $_GET['id'];
					        $data['clien'] = $this->Model->get_by('cliens','id',$id);
					        if ($this->session->userdata('langue') == 'francais') {
		                        $this->load->view('GCC.php',$data);
		                     }elseif ($this->session->userdata('langue') == 'arabic') {
		      	                  $this->load->view('ar/GCC.php',$data);
		                     }elseif ($this->session->userdata('langue') == 'english') {
		                          $this->load->view('GCC.php',$data);
		                     }
				        }
			        }else{
			            redirect(base_url() . 'table_credit','refresh');
		            }
		        }elseif ($key->CRM == 'voir') {
			        if (isset($_GET['id'])) {
				        if (!empty($_GET['id'])) {
					        $id = $_GET['id'];
					        $data['clien'] = $this->Model->get_by('cliens','id',$id);
					        if ($this->session->userdata('langue') == 'francais') {
		                        $this->load->view('GCC_voir.php',$data);
		                    }elseif ($this->session->userdata('langue') == 'arabic') {
		      	                  $this->load->view('ar/GCC_voir.php',$data);
		                     }elseif ($this->session->userdata('langue') == 'english') {
		                          $this->load->view('GCC_voir.php',$data);
		                     }
				        }
			        }else{
			            redirect(base_url() . 'table_credit','refresh');
		            }
		        }else{
			        redirect(base_url() . 'table_credit','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }
		}else{
			     redirect(base_url() . 'logout','refresh');
		}
	}        
	public function produit()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
		    $data['type'] = $this->session->userdata('type');
		    $data['id'] = $this->session->userdata('id');
			 $num10 = 0;
		$res = $this->Model->get('produit');
		$cat = $this->Model->get('catégorie');
		$marque = $this->Model->get('marques');
		$n = 0;
		$num = 1 ;
		foreach ($res as $row) {
             $n = $n+1 ;
           }
		if (isset($_GET['page'])) {
			if ($_GET['page'] == 0 ) {
				$num = 1 ;
			}else{
				$num = $_GET['page'];
			}
		}else{
			$num = 1 ;
		}
		$data['n1'] = $n;
		$id = $num-1 ;
		$id = $id * 15 ;
		$data['num'] = $num ;
		$data['query1'] = $this->Model->get_by_limit($id,'15','produit');
		$data['res'] = $res;
		$data['cat'] = $cat;
		$data['marque'] = $marque;
		
		if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('produit.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/produit.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('produit.php',$data);
		   }
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->produit == 'edit') {
			         $num10 = 0;
		            $res = $this->Model->get('produit');
		            $cat = $this->Model->get('catégorie');
		            $marque = $this->Model->get('marques');
		            $n = 0;
		            $num = 1 ;
		            foreach ($res as $row) {
                         $n = $n+1 ;
                       }
		            if (isset($_GET['page'])) {
			            if ($_GET['page'] == 0 ) {
				            $num = 1 ;
			            }else{
				            $num = $_GET['page'];
			            }
			
		            }else{
			            $num = 1 ;
		            }
		            $salam = $n;
		            $data['n1'] = $salam ;
		            $id = $num-1 ;
		            $id = $id * 9 ;
		            $data['num'] = $num ;
		            $data['query1'] = $this->Model->get_by_limit($id,'9','produit');
		            $data['res'] = $res;
		            $data['cat'] = $cat;
		            $data['marque'] = $marque;
		
		            if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('produit.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/produit.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('produit.php',$data);
		   }

		        }elseif ($key->produit == 'voir') {
		             $data['type'] = $this->session->userdata('type');
			        $id = $this->session->userdata('id');
			        $data['pouvoirs'] = $this->Model->get_by('compte','id',$id);
			        $num10 = 0;
		            $res = $this->Model->get('produit');
		            $cat = $this->Model->get('catégorie');
		            $marque = $this->Model->get('marques');
		            $n = 0;
		            $num = 1 ;
		            foreach ($res as $row) {
                         $n = $n+1 ;
                       }
		            if (isset($_GET['page'])) {
			            if ($_GET['page'] == 0 ) {
				            $num = 1 ;
			            }else{
				            $num = $_GET['page'];
			            }
			
		            }else{
			            $num = 1 ;
		            }
		            $salam = $n;
		            $data['n1'] = $salam ;
		            $id = $num-1 ;
		            $id = $id * 9 ;
		            $data['num'] = $num ;
		            $data['query1'] = $this->Model->get_by_limit($id,'9','produit');
		            $data['res'] = $res;
		            $data['cat'] = $cat;
		            $data['marque'] = $marque;

		            if ($this->session->userdata('langue') == 'francais') {
		                 $this->load->view('produit_voir.php',$data);
		             }elseif ($this->session->userdata('langue') == 'arabic') {
		      	           $this->load->view('ar/produit_voir.php',$data);
		              }elseif ($this->session->userdata('langue') == 'english') {
		                   $this->load->view('produit_voir.php',$data);
		              }
		        }else{
		        	redirect(base_url() . 'accueil','refresh');
		        }
		        }else{
				redirect(base_url() . 'block','refresh');
			    }
		    }

		}else{
			redirect(base_url() . 'logout','refresh');
		}
	}
	public function fournisseur_detail()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
             $data['type'] = $this->session->userdata('type');
			if (isset($_GET['id'])) {
				if (!empty($_GET['id'])) {
					$id = $_GET['id'];
					$data['clien'] = $this->Model->get_by('fournisseur','id',$id);
					$data['bon'] = $this->Model->get_by('entrer','four',$id);
					$data['id'] = $this->session->userdata('id');
					if ($this->session->userdata('langue') == 'francais') {
		                  $this->load->view('fournisseur_detail.php',$data);
		             }elseif ($this->session->userdata('langue') == 'arabic') {
		      	           $this->load->view('ar/fournisseur_detail.php',$data);
		              }elseif ($this->session->userdata('langue') == 'english') {
		                   $this->load->view('fournisseur_detail.php',$data);
		              }
				}
			}
		}elseif($this->session->userdata('type') == 'admin'){
			 $data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);

			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->four == 'edit') {
			        if (isset($_GET['id'])) {
				        if (!empty($_GET['id'])) {
					        $id = $_GET['id'];
					        $data['bon'] = $this->Model->get_by('entrer','four',$id);
					        $data['clien'] = $this->Model->get_by('fournisseur','id',$id);
					        $data['id'] = $this->session->userdata('id');
					       if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('fournisseur_detail.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/fournisseur_detail.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('fournisseur_detail.php',$data);
		   }
				        }
			        }else{
			        	redirect(base_url() . 'fournisseur','refresh');
			        }
		        }elseif ($key->four == 'voir') {
			        if (isset($_GET['id'])) {
				        if (!empty($_GET['id'])) {
					        $id = $_GET['id'];
					        $data['clien'] = $this->Model->get_by('fournisseur','id',$id);
					        $data['bon'] = $this->Model->get_by('entrer','four',$id);
					        $data['id'] = $this->session->userdata('id');
					        if ($this->session->userdata('langue') == 'francais') {
		      $this->load->view('fournisseur_detail_voir.php',$data);
		  }elseif ($this->session->userdata('langue') == 'arabic') {
		      	$this->load->view('ar/fournisseur_detail_voir.php',$data);
		   }elseif ($this->session->userdata('langue') == 'english') {
		        $this->load->view('fournisseur_detail_voir.php',$data);
		   }
				        }
			        }else{
			        	redirect(base_url() . 'fournisseur','refresh');
			        }
			    }else{
			    	redirect(base_url() . 'fournisseur','refresh');
			    }
			    }else{
				redirect(base_url() . 'block','refresh');
			    }
			}
		}else{
			redirect(base_url() . 'logout','refresh');
		}
	}
	public function ajouter_fournisseur()
	{
		if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');	

               if(time() - $time > 900)
               {  
                redirect(base_url().'lock_screen','refresh');
               }
                 }$session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
      
		if ($this->session->userdata('type') == 'Gérant') {
			$data['type'] = $this->session->userdata('type');
			$data['id'] = $this->session->userdata('id');
			$num10 = 0;
			$bons = $this->Model->get('bons');
			$date = date('Y-m-d');
		    $res10 = $this->Model->get('profil');
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
            $data['num10'] = $num10;
		    $error = '';
		    if (!empty($_GET['id'])) {
				if ($_GET['id'] == 1) {
					$error = 'Ce telephone est déja existe';
				}
			}
		    $data['error'] = $error;
		    $data['res1'] = $this->Model->get('fournisseur');
		      if ($this->session->userdata('langue') == 'francais') {
		                  $this->load->view('ajouter_fournisseur.php',$data);
		             }elseif ($this->session->userdata('langue') == 'arabic') {
		      	           $this->load->view('ar/ajouter_fournisseur.php',$data);
		              }elseif ($this->session->userdata('langue') == 'english') {
		                   $this->load->view('ajouter_fournisseur.php',$data);
		              }
		}elseif($this->session->userdata('type') == 'admin'){
			$data['type'] = $this->session->userdata('type');
			$id = $this->session->userdata('id');
			$pouvoir = $this->Model->get_by('compte','id',$id);
			$data['pouvoirs'] = $pouvoir;
			foreach ($pouvoir as $key) {
				if ($key->active == 'oui') {
                if ($key->four == 'edit') {
                	$num10 = 0;
			        $bons = $this->Model->get('bons');
			        $date = date('Y-m-d');
		            $res10 = $this->Model->get('profil');
		            $data['res10'] = $res10;
			        $data['bons'] = $bons;
                    $data['num10'] = $num10;
		            $error = '';
		            if (!empty($_GET['id'])) {
				        if ($_GET['id'] == 1) {
					        $error = 'Ce telephone est déja existe';
				        }
			        }
		            $data['error'] = $error;
		            $data['res1'] = $this->Model->get('fournisseur');
		             if ($this->session->userdata('langue') == 'francais') {
		                  $this->load->view('ajouter_fournisseur.php',$data);
		             }elseif ($this->session->userdata('langue') == 'arabic') {
		      	           $this->load->view('ar/ajouter_fournisseur.php',$data);
		              }elseif ($this->session->userdata('langue') == 'english') {
		                   $this->load->view('ajouter_fournisseur.php',$data);
		              }
                 }elseif ($key->four == 'voir') {
                 	redirect(base_url() . 'fournisseur','refresh');
                 }
                 }else{
				redirect(base_url() . 'block','refresh');
			    }
          }
		}else{
			redirect(base_url() . 'index','refresh');
		}
	}
	public function add_cat()
	{
		if (!empty($_POST['name'])) {
			
			$data = array('name' => $_POST['name'], );
			$query = $this->Model->add('catégorie',$data);
			if ($this->session->userdata('type') == 'Gérant') {
				$type = 'Gérant';
			}elseif($this->session->userdata('type') == 'admin'){
                $type = $this->session->userdata('id');
			}
			$data1 = array('action' =>' Ajouter un nouveau catégorie ',
			               'action1' => $_POST['name'],
			               'table' => 'Categories',
			               'but' => 'ajouter',
			               'admin' => $type,
			               'date' => date('Y-m-d h:i:sa'), );
			$query = $this->Model->add('notification',$data1);
			if ($query = TRUE) {
				redirect(base_url().'Categories','refresh');
			}
		}else{
			redirect(base_url().'Categories','refresh');
		}
	}
	public function add_charge()
	{
		if (!empty($_POST['name'])) {
			
			$data = array('name' => $_POST['name'], 
			              'montant' => $_POST['montant'],
			              'date' => $_POST['date'],);
			$query = $this->Model->add('charge',$data);
			if ($this->session->userdata('type') == 'Gérant') {
				$type = 'Gérant';
			}elseif($this->session->userdata('type') == 'admin'){
                $type = $this->session->userdata('id');
			}
			$data1 = array('action' =>' Ajouter un nouveau charge ',
			               'action1' => $_POST['name'],
			               'table' => 'comptabilite2',
			               'but' => 'ajouter',
			               'admin' => $type,
			               'date' => date('Y-m-d h:i:sa'), );
			$query = $this->Model->add('notification',$data1);
			if ($query = TRUE) {
				redirect(base_url().'comptabilite2','refresh');
			}
		}else{
			redirect(base_url().'comptabilite2','refresh');
		}
	}
	public function modifier_charge()
	{
		if (!empty($_POST['name'])) {
			$id = $_POST['id'];
			$data = array('name' => $_POST['name'], 
			              'montant' => $_POST['montant'],
			              'date' => $_POST['date'],);
			$query = $this->Model->update('id',$id,'charge',$data);
			if ($this->session->userdata('type') == 'Gérant') {
				$type = 'Gérant';
			}elseif($this->session->userdata('type') == 'admin'){
                $type = $this->session->userdata('id');
			}
			$data1 = array('action' =>' Modifier les informations de un charge ',
			               'action1' => $_POST['name'],
			               'table' => 'comptabilite2',
			               'but' => 'modifier',
			               'admin' => $type,
			               'date' => date('Y-m-d h:i:sa'), );
			$query = $this->Model->add('notification',$data1);
			if ($query = TRUE) {
				redirect(base_url().'comptabilite2','refresh');
			}
		}else{
			redirect(base_url().'comptabilite2','refresh');
		}
	}
	public function add_credit()
	{
		if (!empty($_POST['id'])) {
			
			$data = array('clien' => $_POST['id'], 
			              'date' => $_POST['date'],
			              'debit' => $_POST['debit'],
			              'credit' => '0',
			              'type' => 'espéce');
			$query = $this->Model->add('credit',$data);
			if ($this->session->userdata('type') == 'Gérant') {
				$type = 'Gérant';
			}elseif($this->session->userdata('type') == 'admin'){
                $type = $this->session->userdata('id');
			}
			$data1 = array('action' =>' Ajouter un nouveau espèce ',
			               'action1' => $_POST['id'],
			               'table' => 'GCC?id='.$_POST['id'],
			               'but' => 'ajouter',
			               'admin' => $type,
			               'date' => date('Y-m-d h:i:sa'), );
			$query = $this->Model->add('notification',$data1);
			if ($query = TRUE) {
				redirect(base_url().'GCC?id='.$_POST['id'],'refresh');
			}
		}else{
			redirect(base_url().'Categories','refresh');
		}
	}
	public function update_cat()
	{
		if (!empty($_POST['name'])) {
			$data = array('name' => $_POST['name'], );
			$id = $_POST['id'];
			$query = $this->Model->update('id',$id,'catégorie',$data);
			if ($this->session->userdata('type') == 'Gérant') {
				$type = 'Gérant';
			}elseif($this->session->userdata('type') == 'admin'){
                $type = $this->session->userdata('id');
			}
			$data1 = array('action' =>' Modifier les informations de un catégorie ',
			               'action1' => $_POST['name'],
			               'table' => 'Categories',
			               'but' => 'modifier',
			               'admin' => $type,
			               'date' => date('Y-m-d h:i:sa'), );
			$query = $this->Model->add('notification',$data1);
			if ($query = TRUE) {
				redirect(base_url().'Categories','refresh');
			}
		}else{
			redirect(base_url().'Categories','refresh');
		}
	}
  public function modifier_pass()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('compte','id',$id);
      foreach ($res as $key) {
        $pass = $key->tele;
        $nom = $key->nom;
        $pre = $key->pre;
      }
      $data = array('pass' => $pass, );
      $query = $this->Model->update('id',$id,'compte',$data);
                  if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>" Modifier le mot de pass d'un compte ",
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'compte',
                                 'but' => 'modifier',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'compte','refresh'); 
            } 
    }else{
      redirect(base_url().'compte','refresh'); 
    }
  }
	public function update_pass()
	{
		if (!empty($_POST['id'])) {
			$id = $_POST['id'];
			$name = $_POST['name'];
			if (!empty($_POST['pass']) and !empty($_POST['pass1'])) {
				$pass = $_POST['pass'];
			    $pass1 = $_POST['pass1'];
			    if ($pass == $pass1) {
			    	$data = array('name' => $name,
			    	              'pass' => $pass );
            if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' Modifier le mot de pass ',
                                 'action1' => 'Gérant',
                                 'table' => 'compte',
                                 'but' => 'modifier',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
			    }else{
			    	redirect(base_url().'profil?id=1','refresh');
			    }
			}else{
                    $data = array('name' => $name, );
			}
			$query = $this->Model->update('id',$id,'login',$data);
			if ($query = TRUE) {
				redirect(base_url().'profil','refresh');
			}
		}else{
			redirect(base_url().'profil','refresh');
		}
	}
	public function update_pass1()
	{
		if (!empty($_POST['id'])) {
			$id = $_POST['id'];
			if (!empty($_POST['pass']) and !empty($_POST['pass1'])) {
				$pass = $_POST['pass'];
			    $pass1 = $_POST['pass1'];
			    if ($pass == $pass1) {
			    	$data = array('pass' => $pass );
			    	$query = $this->Model->update('id',$id,'compte',$data);
			    }else{
			    	redirect(base_url().'profil?id=1','refresh');
			    }
			}else{
                    redirect(base_url().'profil?id=1','refresh');
			}
			if ($query = TRUE) {
				redirect(base_url().'profil','refresh');
			}
		}else{
			redirect(base_url().'profil','refresh');
		}
	}
	public function add_marque()
	{
		if (!empty($_POST['name'])) {
			$data = array('name' => $_POST['name'], );
			$query = $this->Model->add('marques',$data);
			if ($this->session->userdata('type') == 'Gérant') {
				$type = 'Gérant';
			}elseif($this->session->userdata('type') == 'admin'){
                $type = $this->session->userdata('id');
			}
			$data1 = array('action' =>' Ajouter un nouveau marque ',
			               'action1' => $_POST['name'],
			               'table' => 'Marque',
			               'but' => 'ajouter',
			               'admin' => $type,
			               'date' => date('Y-m-d h:i:sa'), );
			$query = $this->Model->add('notification',$data1);
			if ($query = TRUE) {
				redirect(base_url().'Marque','refresh');
			}
		}else{
			redirect(base_url().'Marque','refresh');
		}
	}
	public function update_marque()
	{
		if (!empty($_POST['name'])) {
			$data = array('name' => $_POST['name'], );
			$id = $_POST['id'];
			$query = $this->Model->update('id',$id,'marques',$data);
			if ($this->session->userdata('type') == 'Gérant') {
				$type = 'Gérant';
			}elseif($this->session->userdata('type') == 'admin'){
                $type = $this->session->userdata('id');
			}
			$data1 = array('action' =>" Modifier les informations d'une marque ",
			               'action1' => $_POST['name'],
			               'table' => 'Marque',
			               'but' => 'modifier',
			               'admin' => $type,
			               'date' => date('Y-m-d h:i:sa'), );
			$query = $this->Model->add('notification',$data1);
			if ($query = TRUE) {
				redirect(base_url().'Marque','refresh');
			}
		}else{
			redirect(base_url().'Marque','refresh');
		}
	}
	public function add_product()
	{
			if (isset($_POST['sub'])) {
				    $image = '222.jpg';
					$name = $_POST['name'];
					$ref = $_POST['ref'];
					$cat = $_POST['cat'];
					$marque = $_POST['marque'];
					$quantité = $_POST['quantité'];
					$min_stock = $_POST['min_stock'];
					if (!empty($_POST['four'])) {
						$four = $_POST['four'];
					}else{
                        $four = '-';
					}
					if (!empty($_POST['date'])) {
						$date = $_POST['date'];
					}else{
                        $date = '-';
					}
					if (!empty($_POST['desc'])) {
						$desc = $_POST['desc'];
					}else{
                        $desc = '-';
					}

					if ($_FILES['image']['name'] != '') {
                     $test = explode(".", $_FILES['image']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image']['name'] = $image1;
                       $image = addslashes($_FILES['image']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/produits';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image']['name'];
                             }
                        }
                    }
				    if ($_POST['radio'] == '1') {
						$prix_e = $_POST['prix_e'];
						$prix_1 = $_POST['prix_1'];
						$prix_2 = $_POST['prix_1'];
						$prix_3 = $_POST['prix_1'];
					}elseif($_POST['radio'] == '2'){
                        $prix_e = $_POST['prix_e'];
						$prix_1 = $_POST['prix_1'];
						$prix_2 = $_POST['prix_2'];
						$prix_3 = $_POST['prix_3'];
					}
					
			    $data = array(
			    	           'name' => $name,
			    	           'ref' => $ref,
			    	           'cat' => $cat,
			    	           'marque' => $marque,
			    	           'four' => $four,
			    	           'date' => date('Y-m-d h:i:sa'),
			    	           'date_e' => $date,
			    	           'image' => $image,
			    	           'quantité' => $quantité,
			    	           'min_stock' => $min_stock,
			    	           'prix_e' => $prix_e,
			    	           'prix_1' => $prix_1,
			    	           'prix_2' => $prix_2,
			    	           'prix_3' => $prix_3,
			    	           'desc' => $desc,
			    	                   );
          if ($this->session->userdata('type') == 'Gérant') {
                                    $type = 'Gérant';
                                  }elseif($this->session->userdata('type') == 'admin'){
                                            $type = $this->session->userdata('id');
                                  }
                        $query = $this->Model->add('produit',$data);
                        $data1 = array(
                        	   'four' => $four,
                        	   'cat' => $cat,
			    	           'réf' => $ref,
			    	           'quantité' => $quantité,
			    	           'date' => date('Y-m-d h:i:sa'),
			    	           'name' => $name,
			    	           'image' => $image,
			    	           'prix_e' => $prix_e,
                       'admin' => $type,
			    	                   );
                        $query1 = $this->Model->add('entrer',$data1);
                                        
			                            $data2 = array('action' =>' Ajouter un nouveau produit ',
			                                           'action1' => $_POST['name'],
			                                           'table' => 'Entrer',
			                                           'but' => 'ajouter',
			                                           'admin' => $type,
			                                           'date' => date('Y-m-d h:i:sa'), );
			                            $query = $this->Model->add('notification',$data2);
                                if ($query = TRUE) {
	                                   redirect(base_url().'produit','refresh');
                                }else{
                                	redirect(base_url().'produit','refresh');
                                }
				      
			
		    }elseif (isset($_POST['sub1'])) {
		    	if (!empty($_POST['id'])) {
		    		$id = $_POST['id'];
		    		$quantité = $_POST['quantité'];
		    		$four = $_POST['four'];
		    		$prix_e = $_POST['prix_e'];
		    		$query = $this->Model->get_by('produit','id',$id);
		    		foreach ($query as $key) {
		    			$name = $key->name;
		    			$cat = $key->cat;
		    			$ref = $key->ref;
		    			$quantité1 = $key->quantité;
		    			$image = $key->image;
		    		}
              if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
		    		$data = array(
                        	   'four' => $four,
                        	   'cat' => $cat,
			    	           'réf' => $ref,
			    	           'quantité' => $quantité,
			    	           'date' => date('Y-m-d h:i:sa'),
			    	           'name' => $name,
			    	           'image' => $image,
			    	           'prix_e' => $prix_e,
                       'admin' =>$type,
			    	                   );
                        $query1 = $this->Model->add('entrer',$data);
                        $quantité2 = $quantité1+$quantité;
                        $data1 = array(
                        	'quantité' => $quantité2,
                        	'prix_e' => $prix_e,
                        	 );
                        $query2 = $this->Model->update('id',$id,'produit',$data1);
                      
			            $data1 = array('action' =>' Modifier la quantité de le produit ',
			                           'action1' => $name,
			                           'table' => 'produit',
			                           'but' => 'modifier',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
                         if ($query2 = TRUE) {
	                                   redirect(base_url().'produit','refresh');
                                }else{
                                	redirect(base_url().'produit','refresh');
                                }
		    	}
		    }else{
		    	redirect(base_url() . 'index','refresh');
		    }
	}
	public function add_compte()
	{
			if (isset($_POST['sub'])) {
				    $image = '123.jpg';
					$nom = $_POST['nom'];
					$pre = $_POST['pre'];
					$adress = $_POST['adress'];
          $salaire = $_POST['salaire'];
					$tele = $_POST['tele'];
					$mail = $_POST['mail'];
					$post = $_POST['post'];
					$type = $_POST['type'];
					if (!empty($_POST['facebook'])) {
						$facebook = $_POST['facebook'];
					}else{
                        $facebook = '-';
					}
					if (!empty($_POST['twitter'])) {
						$twitter = $_POST['twitter'];
					}else{
                        $twitter = '-';
					}
					if (!empty($_POST['insta'])) {
						$insta = $_POST['insta'];
					}else{
                        $insta = '-';
					}
					if (!empty($_POST['youtube'])) {
						$youtube = $_POST['youtube'];
					}else{
                        $youtube = '-';
					}
					if ($_FILES['image']['name'] != '') {
                     $test = explode(".", $_FILES['image']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image']['name'] = $image1;
                       $image = addslashes($_FILES['image']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/compte';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image']['name'];
                             }
                        }
                    }
			    $data = array(
			    	           'nom' => $nom,
			    	           'pre' => $pre,
			    	           'adress' => $adress,
			    	           'tele' => $tele,
			    	           'mail' => $mail,
			    	           'post' => $post,
			    	           'type' => $type,
                       'salaire' => $salaire,
			    	           'tele' => $tele,
			    	           'pass' => $tele,
			    	           'image' => $image,
			    	           'active' => 'oui',
			    	           'facebook' => $facebook,
			    	           'twitter' => $twitter,
			    	           'insta' => $insta,
			    	           'youtube' => $youtube
			    	                   );
                        $query = $this->Model->add('compte',$data);
                        if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Ajouter un nouveau compte ',
			                           'action1' => $nom.' '.$pre,
			                           'table' => 'compte',
			                           'but' => 'ajouter',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
                                if ($query = TRUE) {
	                                   redirect(base_url().'compte','refresh');
                                }else{
                                	redirect(base_url().'compte','refresh');
                                }
				      
			
		    }else{
		    	redirect(base_url() . 'index','refresh');
		    }
	}
	
	public function add_SAV()
	{
			if (isset($_POST['sub'])) {
				    $image = '123.jpg';
					$pro = $_POST['pro'];
					$date = date('Y-m-d h:i:sa');
					$note = $_POST['note'];
					if ($_FILES['image']['name'] != '') {
                     $test = explode(".", $_FILES['image']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image']['name'] = $image1;
                       $image = addslashes($_FILES['image']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/produits';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image']['name'];
                             }
                        }
                    }
			    $data = array(
			    	           'image' => $image,
			    	           'pro' => $pro,
			    	           'date' => $date,
			    	           'note' => $note,
			    	                   );
                        $query = $this->Model->add('sav',$data);
                        if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Ajouter un nouveau réclamation ',
			                           'action1' => $pro,
			                           'table' => 'SAV',
			                           'but' => 'ajouter',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
                                if ($query = TRUE) {
	                                   redirect(base_url().'SAV','refresh');
                                }else{
                                	redirect(base_url().'SAV','refresh');
                                }
				      
			
		    }else{
		    	redirect(base_url() . 'index','refresh');
		    }
	}
	public function add_clien()
	{
			if (isset($_POST['radio'])) {
				$image = '123.jpg';
				if ($_POST['radio'] == '1') {
					$nom = $_POST['nom'];
					$pre = $_POST['pre'];
					if (!empty($_POST['adress'])) {
						$adress = $_POST['adress'];
					}else{
                        $adress = '-';
					}
					$tele = $_POST['tele'];
					$credit = $_POST['credit'];
					$nom_e = '-';
					$type = '-';
					$num_rc = '-';
					$num_ice = '-';
					$num_if = '-';
					 if ($_FILES['image']['name'] != '') {
                     $test = explode(".", $_FILES['image']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image']['name'] = $image1;
                       $image = addslashes($_FILES['image']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/clien';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image']['name'];
                             }
                        }
                    }
			    }elseif ($_POST['radio'] == '2') {
					$nom = $_POST['nom1'];
					$pre = $_POST['pre1'];
					if (!empty($_POST['adress1'])) {
						$adress = $_POST['adress1'];
					}else{
                        $adress = '-';
					}
					$tele = $_POST['tele1'];
					$credit = $_POST['credit1'];
					$nom_e = $_POST['nom_e'];
					$type = $_POST['type'];
					$num_rc = $_POST['num_rc']; 
					$num_ice = $_POST['num_ice'];
					if (!empty($_POST['num_if'])) {
						$num_if = $_POST['num_if'];
					}else{
                        $num_if = '-';
					}

					 if ($_FILES['image1']['name'] != '') {
                     $test = explode(".", $_FILES['image1']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image1']['name'] = $image1;
                       $image = addslashes($_FILES['image1']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/clien';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image1')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image1']['name'];
                             }
                        }
                    }
			    }elseif ($_POST['radio'] == '3') {
					$nom = $_POST['nom2'];
					$pre = $_POST['pre2'];
					if (!empty($_POST['adress2'])) {
						$adress = $_POST['adress2']; 
					}else{
                        $adress = '-';
					}
					$tele = $_POST['tele2'];
					$credit = $_POST['credit2'];
					$nom_e = $_POST['nom_e1'];
					$type = '-';
					$num_rc = $_POST['num_rc1'];
					$num_ice =  '-';
					$num_if = '-';
                    

					 if ($_FILES['image2']['name'] != '') {
                     $test = explode(".", $_FILES['image2']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image2']['name'] = $image1;
                       $image = addslashes($_FILES['image2']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/clien';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image2')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image2']['name'];
                             }
                        }
                    }
				}
				    if (!empty($_POST['mail'])) {
						$mail = $_POST['mail'];
					}else{
                        $mail = '-';
					}
					if (!empty($_POST['facebook'])) {
						$facebook = $_POST['facebook'];
					}else{
                        $facebook = '-';
					}
					if (!empty($_POST['twitter'])) {
						$twitter = $_POST['twitter'];
					}else{
                        $twitter = '-';
					}
					if (!empty($_POST['insta'])) {
						$insta = $_POST['insta'];
					}else{
                        $insta = '-';
					}
					if (!empty($_POST['youtube'])) {
						$youtube = $_POST['youtube'];
					}else{
                        $youtube = '-';
					}
			    $data = array(
			    	           'nom' => $nom,
			    	           'pre' => $pre,
			    	           'tele' => $tele,
			    	           'credit' => $credit,
			    	           'type' => $type,
			    	           'adress' => $adress,
			    	           'nom_e' => $nom_e,
			    	           'num_rc' => $num_rc,
			    	           'num_ice' => $num_ice,
			    	           'num_if' => $num_if,
			    	           'image' => $image,
			    	           'mail' => $mail,
			    	           'facebook' => $facebook,
			    	           'twitter' => $twitter,
			    	           'insta' => $insta,
			    	           'youtube' => $youtube,
			    	           'date' => date('Y-m-d h:i:sa'),
			    	                   );
                        $query = $this->Model->add('cliens',$data);
                        if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Ajouter un nouveau clien ',
			                           'action1' => $nom.' '.$pre,
			                           'table' => 'table_credit',
			                           'but' => 'ajouter',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
                                if ($query = TRUE) {
	                                   redirect(base_url().'table_credit','refresh');
                                }else{
                                	redirect(base_url().'ajouter_clien','refresh');
                                }
				      
			
		    }else{
		    	redirect(base_url() . 'index','refresh');
		    }
	}
	public function add_bon()
	{
			
			if (isset($_POST['sub'])) {
				$id1 = $this->session->userdata('id');
				$type = $this->session->userdata('type');
        if ($type == 'Gérant') {
          $ok = $type;
        }else{
          $ok = $this->session->userdata('id');
        }
				$TVA = 0;
				$remise = 0;
					$remise = $_POST['remise'];
				    $name = $_POST['pro'];
			        $query = $this->Model->get_by('produit','id',$name);
			        if (!empty($query)) {
				        foreach ($query as $row) {
				        	if ($row->quantité != 0) {
				        		      $prix_e = $row->prix_e ;
					             $name = $row->name ; 
					             $cat = $row->cat ;
					             $marque = $row->marque ;
					             $ref = $row->ref ;
					             $image = $row->image;
					             $id = $row->id;
					             if ($type == 'Gérant') {
					        	     $id2 = 'Gérant';
					             }elseif($type == 'admin'){
                                     $id2 = $this->session->userdata('id');
					             }
				            if (isset($_POST['check'])) {
				            	if ($_POST['check'] == 'detail') {
						            $prix_s = $row->prix_1 ;
					            }elseif ($_POST['check'] == 'mini-gros') {
					        	    $prix_s = $row->prix_2 ;
					            }elseif ($_POST['check'] == 'gros') {
					        	    $prix_s = $row->prix_3 ;
					            }
					           $query = $this->Model->get_by2('bon','ref',$ref, 'ok', $ok);
					            if (!empty($query)) {
						           redirect(base_url().'caisse?id=3','refresh');
					            }
				            }
				                 $re = 1 - $remise/100;
					             $total = $prix_s * $re;
				        }else{
				              redirect(base_url().'caisse?id=2','refresh');
			            }
				    }
				    $data = array(
				    	'marque' => $marque, 
				    	'ref' => $ref, 
				    	'quantité' => '1', 
				    	'prix_s' => $prix_s, 
				    	'prix_e' => $prix_e,
				    	'name' => $name, 
				    	'cat' => $cat, 
				    	'remise' => $remise, 
				    	'image' => $image, 
				    	'pro' => $id,
				    	'total' => $total,
				    	'ok' => $id2, 
				    );
				$query1 = $this->Model->add('bon',$data);
				if ($query1 = TRUE) {
				redirect(base_url().'caisse?id='.$_POST['check'],'refresh');
				   }
				        	}
					       
			}else{
				    redirect(base_url().'caisse?id=1','refresh');
			}
		
	}
	public function add_four()
	{
			if (isset($_POST['radio'])) {
				$image = '123.jpg';
				if ($_POST['radio'] == '1') {
					$nom = $_POST['nom'];
					$pre = $_POST['pre'];
					if (!empty($_POST['adress'])) {
						$adress = $_POST['adress'];
					}else{
                        $adress = '-';
					}
					$tele = $_POST['tele'];
					$nom_e = '-';
					$type = '-';
					$num_rc = '-';
					$num_ice = '-';
					$num_if = '-';

					 if ($_FILES['image']['name'] != '') {
                     $test = explode(".", $_FILES['image']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image']['name'] = $image1;
                       $image = addslashes($_FILES['image']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/fournisseur';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image']['name'];
                             }
                        }
                    }
			    }elseif ($_POST['radio'] == '2') {
					$nom = $_POST['nom1'];
					$pre = $_POST['pre1'];
					if (!empty($_POST['adress1'])) {
						$adress = $_POST['adress1'];
					}else{
                        $adress = '-';
					}
					$tele = $_POST['tele1'];
					$nom_e = $_POST['nom_e'];
					$type = $_POST['type'];
					$num_rc = $_POST['num_rc']; 
					$num_ice = $_POST['num_ice'];
					if (!empty($_POST['num_if'])) {
						$num_if = $_POST['num_if'];
					}else{
                        $num_if = '-';
					}

					 if ($_FILES['image1']['name'] != '') {
                     $test = explode(".", $_FILES['image1']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image1']['name'] = $image1;
                       $image = addslashes($_FILES['image1']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/fournisseur';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image1')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image1']['name'];
                             }
                        }
                    }
			    }elseif ($_POST['radio'] == '3') {
					$nom = $_POST['nom2'];
					$pre = $_POST['pre2'];
					if (!empty($_POST['adress2'])) {
						$adress = $_POST['adress2'];
					}else{
                        $adress = '-';
					}
					$tele = $_POST['tele2'];
					$nom_e = $_POST['nom_e1'];
					$type = '-';
					$num_rc = $_POST['num_rc1'];
					$num_ice =  '-';
					$num_if = '-';
                    

					 if ($_FILES['image2']['name'] != '') {
                     $test = explode(".", $_FILES['image2']['name']);
                     $ext = end($test);
                     $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;
                       
                       $_FILES['image2']['name'] = $image1;
                       $image = addslashes($_FILES['image2']['tmp_name']) ;
                       $image = file_get_contents($image);
                       $image = base64_encode($image);
                        if (!empty($image)) {
                
                          $config['upload_path'] = 'upload/fournisseur';
                          $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                          $this->load->library('upload', $config);
            
                             if ( !$this->upload->do_upload('image2')){

                                $error = array('error' => $this->upload->display_errors());
                          
                             }else{
                              $image = $_FILES['image2']['name'];
                             }
                        }
                    }
				}
				    if (!empty($_POST['mail'])) {
						$mail = $_POST['mail'];
					}else{
                        $mail = '-';
					}
					if (!empty($_POST['facebook'])) {
						$facebook = $_POST['facebook'];
					}else{
                        $facebook = '-';
					}
					if (!empty($_POST['twitter'])) {
						$twitter = $_POST['twitter'];
					}else{
                        $twitter = '-';
					}
					if (!empty($_POST['insta'])) {
						$insta = $_POST['insta'];
					}else{
                        $insta = '-';
					}
					if (!empty($_POST['youtube'])) {
						$youtube = $_POST['youtube'];
					}else{
                        $youtube = '-';
					}
			    $data = array(
			    	           'nom' => $nom,
			    	           'pre' => $pre,
			    	           'tele' => $tele,
			    	           'type' => $type,
			    	           'adress' => $adress,
			    	           'nom_e' => $nom_e,
			    	           'num_rc' => $num_rc,
			    	           'num_ice' => $num_ice,
			    	           'num_if' => $num_if,
			    	           'image' => $image,
			    	           'mail' => $mail,
			    	           'facebook' => $facebook,
			    	           'twitter' => $twitter,
			    	           'insta' => $insta,
			    	           'youtube' => $youtube,
			    	           'date' => date('Y-m-d h:i:sa'),
			    	                   );
                        $query = $this->Model->add('fournisseur',$data);
                        if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Ajouter un nouveau Fournisseur ',
			                           'action1' => $nom.' '.$pre,
			                           'table' => 'fournisseur',
			                           'but' => 'ajouter',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
                                if ($query = TRUE) {
	                                   redirect(base_url().'fournisseur','refresh');
                                }else{
                                	redirect(base_url().'fournisseur','refresh');
                                }
				      
			
		    }else{
		    	redirect(base_url() . 'index','refresh');
		    }
	}
	public function Add_bons()
	{
		if ($this->session->userdata('type') != '') {
			$type = $this->session->userdata('type');
			if ($type == 'Gérant') {
				$admin = 'Gérant';
			}elseif ($type == 'admin') {
				$admin = $this->session->userdata('id');
			}
			$type = $this->session->userdata('type');
			$clien = '-';
			$total1 = 0;
			$total2 = 0;
			$espece = 0;
            $credit = 0;
            $check = 0;
			$res = $this->Model->get_by('bon','ok',$admin);
            
			if (empty($res)) {
				redirect(base_url() . 'caisse','refresh');
			}
			$TVA = 0;
			if (!empty($_POST['TVA'])) {
					$TVA = $_POST['TVA']; 
			}
			if (!empty($_POST['clien'])) {
				$clien = $_POST['clien'];
			}
			$id_bons = 1 ;
			$date = date('Y-m-d h:i:sa');
            
            $query = $this->Model->get('bons');
			for ($i=0; $i < 10; $i++) { 
				$mouafak = $this->Model->get_by('bons','id_bons',$id_bons);
				if (!empty($mouafak)) {
					$id_bons = $id_bons + 1 ;
					$i = 1 ;
				}else{
					$i = 10 ;
				}
			}
      $id_bons = '00'.$id_bons;
			     foreach ($res as $row) {
			     	$data = array(  'pro' => $row->pro,
			     		            'marque' => $row->marque,
			     		            'ref' => $row->ref,
			     		            'quantité' => $row->quantité,
			     		            'prix_s' => $row->prix_s,
			     		            'prix_e' => $row->prix_e,
			     		            'name' => $row->name,
			     		            'cat' => $row->cat,
			     		            'image' => $row->image,
			     		            'remise' => $row->remise,
			     		            'total' => $row->total,
			     		            'id_bons' => $id_bons,
			     		                       );
                 	$query1 = $this->Model->add('bonat',$data);
                 	$total1 = $total1+$row->total;
                 	$total2 = $total2+$row->total;
                 } 

                 $total1 = $total1*(1+($TVA/100));
                 if ($_POST['radio1'] == '1') {
            	$espece = $total1;
            	$credit = '0';
            	$check = '0';
            	$type = 'espece';
            }elseif ($_POST['radio1'] == '2') {
            	$espece = $_POST['credit'];
            	$credit = ($total1-$_POST['credit']);
            	$check = '0';
            	$type = 'credit';
            }elseif ($_POST['radio1'] == '3') {
            	$espece = '0';
            	$credit = ($total1-$_POST['check']);
            	$check = $_POST['check'];
            	$rib = $_POST['rib'];
            	$banque = $_POST['banque'];
            	$date1 = $_POST['date1'];
            	$type = 'check';
            	$data2 = array(
            		'montant' => $check, 
            	    'RIB' => $rib,
            	    'banque' => $banque,
            	    'date' => $date1,
            	    'clien' => $clien,
                  'id_bons' => $id_bons,);
            	$query3 = $this->Model->add('check',$data2);
            }
                    $data = array(  'clien' => $clien,
			     		            'date' => $date,
			     		            'total' => $total1,
			     		            'total1' => $total2,
			     		            'id_bons' => $id_bons,
			     		            'TVA' => $TVA,
			     		            'type' => $type,
			     		            'admin' => $admin,
			     		            'espece' => $espece,
			     		            'credit' => $credit,
			     		            'check' => $check, );
                 	$query2 = $this->Model->add('bons',$data);
                 	$mouafak = $credit+$check;
                 	 $data = array(  'clien' => $clien,
			     		            'date' => $date,
			     		            'id_bons' => $id_bons,
			     		            'type' => $type,
			     		            'debit' => 0,
			     		            'credit' => $mouafak, );
                 	$query2 = $this->Model->add('credit',$data);
                 	foreach ($res as $row) {
                 		$pro = $this->Model->get_by('produit','id',$row->pro);
                 		foreach ($pro as $key5) {
                 		$quantité3 = $key5->quantité-$row->quantité; 	
                 		}
                 	   $data3 = array('quantité' => $quantité3, );
                 	$query5 = $this->Model->update('id',$row->pro,'produit',$data3);
                    }
                 	$query4 = $this->Model->delete('bon','ok',$admin);
                 	 if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data22 = array('action' =>' Ajouter un nouveau facture pour ',
			                           'action1' => $clien,
			                           'table' => 'invoice?id='.$id_bons,
			                           'but' => 'facture',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sA'), );
			            $query = $this->Model->add('notification',$data22);
			if ($query2 = TRUE) {
       /* if ($_POST['fact'] == 'Ticket') {
          redirect(base_url().'Ticket?id='.$id_bons,'refresh');
        }else{*/
          redirect(base_url().'invoice?id='.$id_bons,'refresh');
       // }
				
				}else{
				redirect(base_url().'caisse?id='.$id_bons,'refresh');	
				}
		
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function update_image()
	{
		 if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $pre = $_POST['pre'];
            $facebook = $_POST['facebook'];
            $twitter = $_POST['twitter'];
            $insta = $_POST['insta'];
            $youtube = $_POST['youtube'];
             $pro = $this->Model->get_by('cliens','id',$id);
            
              foreach ($pro as $key) {
            
            if (!empty($_FILES['image']['name']) ) {

                $test = explode(".", $_FILES['image']['name']);
                $ext = end($test);
                $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;

                    $_FILES['image']['name'] = $image1;
                    $image = addslashes($_FILES['image']['tmp_name']) ;
                   $image = file_get_contents($image);
                    $image = base64_encode($image);
                if (!empty($image)) {
                  $config['upload_path'] = 'upload/clien';
                   $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                     $this->load->library('upload', $config);
            
                   if ( !$this->upload->do_upload('image')){
                       $error = array('error' => $this->upload->display_errors());
                    }else{
                       $image = $_FILES['image']['name'];

                    }
                }
            }else{
                    $image = $key->image ;
            }     
            $data = array(
              'image' => $image, 
              'nom' => $nom, 
              'pre' => $pre, 
              'facebook' => $facebook, 
              'twitter' => $twitter, 
              'insta' => $insta, 
              'youtube' => $youtube
            );
           $query = $this->Model->update('id',$id,'cliens',$data);
           if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Modifier les informations de ',
			                           'action1' => $nom.' '.$pre,
			                           'table' => 'table_credit?id='.$id,
			                           'but' => 'modifier',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                      redirect(base_url().'GCC?id='.$id.'','refresh'); 
            } 
          }
        }
	}
	public function update_clien()
	{
		 if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $nom_e = $_POST['nom_e'];
            $adress = $_POST['adress'];
            $tele = $_POST['tele'];
            $mail = $_POST['mail'];
            $type = $_POST['type'];
            $credit = $_POST['credit'];
            $num_rc = $_POST['num_rc'];
            $num_ice = $_POST['num_ice'];
            $num_if = $_POST['num_if'];
             $pro = $this->Model->get_by('cliens','id',$id);
             foreach ($pro as $key) {
             	$nom = $key->nom;
             	$pre = $key->pre;
             }
            
            $data = array(
              'nom_e' => $nom_e, 
              'adress' => $adress, 
              'tele' => $tele, 
              'type' => $type, 
              'mail' => $mail, 
              'credit' => $credit, 
              'num_rc' => $num_rc,
              'num_ice' => $num_ice,
              'num_if' => $num_if,
            );
           $query = $this->Model->update('id',$id,'cliens',$data);
                        if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Modifier les informations de ',
			                           'action1' => $nom.' '.$pre,
			                           'table' => 'table_credit?id='.$id,
			                           'but' => 'modifier',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                      redirect(base_url().'GCC?id='.$id.'','refresh'); 
            } 
        }
	}
  public function update_info()
  {
     if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
            $tele = $_POST['tele'];
            $tele1 = $_POST['tele1'];
            $adress = $_POST['adress'];
            $mail = $_POST['mail'];  
            $data = array( 
              'name' => $name, 
              'tele' => $tele, 
              'tele1' => $tele1, 
              'adress' => $adress, 
              'mail' => $mail
            );
           $query = $this->Model->update('id',$id,'info',$data);
           if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' Modifier les informations de ',
                                 'action1' => 'parametre',
                                 'table' => 'parametre',
                                 'but' => 'modifier',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                      redirect(base_url().'parametre','refresh'); 
            } 
          }
  }
	public function update_image1()
	{
		 if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
            $pre = $_POST['pre'];
            $facebook = $_POST['facebook'];
            $twitter = $_POST['twitter'];
            $insta = $_POST['insta'];
            $youtube = $_POST['youtube'];
             $pro = $this->Model->get_by('fournisseur','id',$id);
            
              foreach ($pro as $key) {
            
            if (!empty($_FILES['image']['name']) ) {

                $test = explode(".", $_FILES['image']['name']);
                $ext = end($test);
                $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;

                    $_FILES['image']['name'] = $image1;
                    $image = addslashes($_FILES['image']['tmp_name']) ;
                   $image = file_get_contents($image);
                    $image = base64_encode($image);
                if (!empty($image)) {
                  $config['upload_path'] = 'upload/fournisseur';
                   $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                     $this->load->library('upload', $config);
            
                   if ( !$this->upload->do_upload('image')){
                       $error = array('error' => $this->upload->display_errors());
                    }else{
                       $image = $_FILES['image']['name'];

                    }
                }
            }else{
                    $image = $key->image ;
            }     
            $data = array(
              'image' => $image, 
              'nom' => $nom, 
              'pre' => $pre, 
              'facebook' => $facebook, 
              'twitter' => $twitter, 
              'insta' => $insta, 
              'youtube' => $youtube
            );
           $query = $this->Model->update('id',$id,'fournisseur',$data);
           if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Modifier les informations de ',
			                           'action1' => $nom.' '.$pre,
			                           'table' => 'fournisseur_detail?id='.$id,
			                           'but' => 'modifier',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                      redirect(base_url().'fournisseur_detail?id='.$id.'','refresh'); 
            } 
          }
        }
	}
	public function update_pro()
	{
		 if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $name = $_POST['name'];
			$ref = $_POST['ref'];
			$cat = $_POST['cat'];
			$marque = $_POST['marque'];
			$min_stock = $_POST['min_stock'];
			$desc = $_POST['desc'];
			$prix_1 = $_POST['prix_1'];
			$prix_2 = $_POST['prix_2'];
			$prix_3 = $_POST['prix_3'];
             $pro = $this->Model->get_by('produit','id',$id);
            
              foreach ($pro as $key) {
            
            if (!empty($_FILES['image']['name']) ) {

                $test = explode(".", $_FILES['image']['name']);
                $ext = end($test);
                $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;

                    $_FILES['image']['name'] = $image1;
                    $image = addslashes($_FILES['image']['tmp_name']) ;
                   $image = file_get_contents($image);
                    $image = base64_encode($image);
                if (!empty($image)) {
                  $config['upload_path'] = 'upload/produits';
                   $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                     $this->load->library('upload', $config);
            
                   if ( !$this->upload->do_upload('image')){
                       $error = array('error' => $this->upload->display_errors());
                    }else{
                       $image = $_FILES['image']['name'];

                    }
                }
            }else{
                    $image = $key->image ;
            }     
            $data = array(
                               'name' => $name,
			    	           'ref' => $ref,
			    	           'cat' => $cat,
			    	           'marque' => $marque,
			    	           'image' => $image,
			    	           'min_stock' => $min_stock,
			    	           'prix_1' => $prix_1,
			    	           'prix_2' => $prix_2,
			    	           'prix_3' => $prix_3,
			    	           'desc' => $desc,
            );
           $query = $this->Model->update('id',$id,'produit',$data);
            if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Modifier les information de produit ',
			                           'action1' => $name,
			                           'table' => 'produit',
			                           'but' => 'modifier',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);

            if ($query1 = TRUE) {
                      redirect(base_url().'produit','refresh'); 
            } 
          }
        }
	}
	public function update_compte()
	{
		 if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
			$pre = $_POST['pre'];
			$adress = $_POST['adress'];
			$tele = $_POST['tele'];
			$mail = $_POST['mail'];
            $facebook = $_POST['facebook'];
            $twitter = $_POST['twitter'];
            $insta = $_POST['insta'];
            $youtube = $_POST['youtube'];
            $page = '';
            if (!empty($_POST['page'])) {
            	$page = $_POST['page'];
            }
            
             $pro = $this->Model->get_by('compte','id',$id);
            
              foreach ($pro as $key) {
                if (isset($_POST['post'])) {
                       $post = $_POST['post'];
                }else{
                       $post = $key->post;
                }
                if (isset($_POST['type'])) {
                       $type = $_POST['type'];
                }else{
                       $type = $key->type;
                }
                 if (isset($_POST['salaire'])) {
                       $salaire = $_POST['salaire'];
                }else{
                       $salaire = $key->salaire;
                }
            
            if (!empty($_FILES['image']['name']) ) {

                $test = explode(".", $_FILES['image']['name']);
                $ext = end($test);
                $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;

                    $_FILES['image']['name'] = $image1;
                    $image = addslashes($_FILES['image']['tmp_name']) ;
                   $image = file_get_contents($image);
                    $image = base64_encode($image);
                if (!empty($image)) {
                  $config['upload_path'] = 'upload/compte';
                   $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                     $this->load->library('upload', $config);
            
                   if ( !$this->upload->do_upload('image')){
                       $error = array('error' => $this->upload->display_errors());
                    }else{
                       $image = $_FILES['image']['name'];

                    }
                }
            }else{
                    $image = $key->image ;
            }     
            $data = array(
                               'nom' => $nom,
			    	           'pre' => $pre,
			    	           'adress' => $adress,
			    	           'tele' => $tele,
			    	           'mail' => $mail,
			    	           'post' => $post,
			    	           'type' => $type,
			    	           'tele' => $tele,
			    	           'image' => $image,
                       'salaire' => $salaire,
			    	           'facebook' => $facebook,
			    	           'twitter' => $twitter,
			    	           'insta' => $insta,
			    	           'youtube' => $youtube
            );
           $query = $this->Model->update('id',$id,'compte',$data);
                        if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Modifier les informations de ',
			                           'action1' => $nom.' '.$pre,
			                           'table' => 'compte',
			                           'but' => 'modifier',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
            	if ($page == 'profil') {
            		 redirect(base_url().'profil','refresh'); 
            	}else{
            		redirect(base_url().'compte','refresh'); 
            	}
                      
            } 
          }
        }
	}
	public function update_login()
	{
		 if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $nom = $_POST['nom'];
			$pre = $_POST['pre'];
			$adress = $_POST['adress'];
			$tele = $_POST['tele'];
			$fix = $_POST['fix'];
			$mail = $_POST['mail'];
             $pro = $this->Model->get_by('login','id',$id);
              foreach ($pro as $key) {
            
            if (!empty($_FILES['image']['name']) ) {

                $test = explode(".", $_FILES['image']['name']);
                $ext = end($test);
                $image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.'.$ext;

                    $_FILES['image']['name'] = $image1;
                    $image = addslashes($_FILES['image']['tmp_name']) ;
                   $image = file_get_contents($image);
                    $image = base64_encode($image);
                if (!empty($image)) {
                  $config['upload_path'] = 'upload/compte';
                   $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
                     $this->load->library('upload', $config);
            
                   if ( !$this->upload->do_upload('image')){
                       $error = array('error' => $this->upload->display_errors());
                    }else{
                       $image = $_FILES['image']['name'];

                    }
                }
            }else{
                    $image = $key->image ;
            }     
            $data = array(
                               'nom' => $nom,
			    	           'pre' => $pre,
			    	           'adress' => $adress,
			    	           'tele' => $tele,
			    	           'fix' => $fix,
			    	           'mail' => $mail,
			    	           'tele' => $tele,
			    	           'image' => $image,
            );
           $query = $this->Model->update('id',$id,'login',$data);
           if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' Modifier les informations de ',
                                 'action1' => 'Gérant',
                                 'table' => 'profil',
                                 'but' => 'modifier',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
            		redirect(base_url().'profil','refresh'); 
                      
            } 
          }
        }
	}
	public function update_four()
	{
		 if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $nom_e = $_POST['nom_e'];
            $adress = $_POST['adress'];
            $tele = $_POST['tele'];
            $mail = $_POST['mail'];
            $type = $_POST['type'];
            $credit = $_POST['credit'];
            $num_rc = $_POST['num_rc'];
            $num_ice = $_POST['num_ice'];
            $num_if = $_POST['num_if'];
             $pro = $this->Model->get_by('fournisseur','id',$id);
            foreach ($pro as $key) {
            	$nom = $key->nom;
            	$pre = $key->pre;
            }
            $data = array(
              'nom_e' => $nom_e, 
              'adress' => $adress, 
              'tele' => $tele, 
              'type' => $type, 
              'mail' => $mail, 
              'credit' => $credit, 
              'num_rc' => $num_rc,
              'num_ice' => $num_ice,
              'num_if' => $num_if,
            );
           $query = $this->Model->update('id',$id,'fournisseur',$data);
           if ($this->session->userdata('type') == 'Gérant') {
				            $type = 'Gérant';
			            }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
			            }
			            $data1 = array('action' =>' Modifier les informations de ',
			                           'action1' => $nom.' '.$pre,
			                           'table' => 'fournisseur_detail?id='.$id,
			                           'but' => 'modifier',
			                           'admin' => $type,
			                           'date' => date('Y-m-d h:i:sa'), );
			            $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                      redirect(base_url().'fournisseur_detail?id='.$id.'','refresh'); 
            } 
        }
	}
	public function ajax_search_produit()
	{
		if (!empty($this->input->post('searsh'))) {
			$réf = $this->input->post('searsh') ;
			if ($this->input->post('searsh') == 'tous') {
				 echo $réf;
			}else{
		   $res2 = $this->Model->get_by('produit','id',$réf);
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.' <i class="feather icon-star ml-25"></i>
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                       '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i>Suprimer
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">Modifier</span>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
                }
		    }
		   
		}
	}
	public function ajax_charge()
	{
		if (!empty($this->input->post('id'))) {
			$id = $this->input->post('id') ;
			$id1 =  '0'.$id;
		   $res2 = $this->Model->get('charge');
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
		    		$date1 = explode('-', date('Y-m-d'));
                    $date1 = $date1[1]; 
                    $date2 = explode('-', $key->date);
                    $date2 = $date2[1]; 
                    if ($id1 == $date2) {
                    	$put .= ' <tr>
                                                                                        <td>'.$key->id.'</td>
                                                                                        <td>'.$key->name.'</td>
                                                                                        <td>'.$key->montant.' DH</td>
                                                                                        <td>'.$key->date.'</td>
                                                                                        <td> <h3><a href="#"> <i class="feather icon-edit" data-toggle="modal" data-target="#large'.$key->id.'"></i></a></h3></td>
                                                                                        <td> <h3 style="color: red"><i class="feather icon-x" data-toggle="modal" data-target="#danger'.$key->id.'"></i></h3></td>
                                                                                    </tr>';
                    }
                }
                echo $put ;
		    }
		}
	}
	public function ajax_search_produit_voir()
	{
		if (!empty($this->input->post('searsh'))) {
			$réf = $this->input->post('searsh') ;
			$this->load->model('Model');
		   $res2 = $this->Model->get_by('produit','id',$réf);
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.' <i class="feather icon-star ml-25"></i>
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                       '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_produit10()
	{
		if (!empty($this->input->post('searsh'))) {
			$réf = $this->input->post('searsh') ;
			$this->load->model('Model');
		   $res2 = $this->Model->get_by('produit','id',$réf);
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i> حذف  
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل </span>
                                </div>
                            </div>
                            <!-- <div class="item-options text-center">
                                <div class="wishlist remove-wishlist" data-toggle="modal" data-target="#danger'.$key->id.'" style="width:150px">
                                    <i class="feather icon-x align-middle"></i> حذف 
                                </div>
                                  <a class="cart" data-toggle="modal" data-target="#large'.$key->id.'">  <div class="cart move-cart" style="width: 150px">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل</span>
                                </div></a>
                            </div>-->
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_produit10_voir()
	{
		if (!empty($this->input->post('searsh'))) {
			$réf = $this->input->post('searsh') ;
			$this->load->model('Model');
		   $res2 = $this->Model->get_by('produit','id',$réf);
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                    echo $put ;
		    }
      }
    }
  }
	public function ajax_search_produit1()
  {
    if (!empty($this->input->post('searsh'))) {
      $réf = $this->input->post('searsh') ;
      $query = $this->Model->get('fournisseur');
       $res2 = $this->Model->get_by('produit','id',$réf);
        if (!empty($res2)) {
          $put = ' ';
          foreach ($res2 as $key) {
          $put .= '<div class="col-sm-4 col-12">
                                                 <div class="text-bold-600 font-medium-2 mb-1">
                                                   Nom de Produit
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="name" value="'. $key->name.'" disabled="" class="form-control" id="iconLeft4" placeholder="Nom" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Référence/Code barre
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                <input type="hidden" value="'.$key->id.'" name="id" >
                                                    <input type="text" name="name"  disabled="" value="'. $key->ref.'"" class="form-control" id="iconLeft4" placeholder="Nom" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                          <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Fournisseur
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="form-control" name="four" id="basicSelect" required>';
                                                              $ok = $this->Model->get_by('fournisseur','id',$key->four);
                                                              foreach ($ok as $value) {
                                                                  $put .= '<option value="'.$value->id.'">'.$value->nom.' '.$value->pre.'</option>';
                                                              }
                                                       
                                                         foreach ($query as $key2) { 
                                                           $put .= '<option value="'. $key2->id.'">'. $key2->nom.'</option>';
                                                         } 
                                                    $put .= '</select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user-check"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
                                            <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Quantité
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="number" name="quantité"  class="form-control" id="iconLeft4" placeholder="'. $key->quantité.'" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   Prix de Produit
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="number" name="prix_e"  class="form-control" id="iconLeft4" placeholder="'. $key->prix_e.'" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-12 col-12"> <div class="text-bold-600 font-medium-2 mb-1"> <br> </div> <center>  <button type="submit" name="sub1" class="btn btn-primary">  <i class="feather icon-file" style="margin-right:10px"></i>   Enregistrer</button></center> </div></div>';
                   }
                    echo $put ;
        }
       
    }
  }
  public function ajax_search_produit1111()
  {
    if (!empty($this->input->post('searsh'))) {
      $réf = $this->input->post('searsh') ;
      $query = $this->Model->get('fournisseur');
       $res2 = $this->Model->get_by('produit','id',$réf);
        if (!empty($res2)) {
          $put = ' ';
          foreach ($res2 as $key) {
          $put .= '<div class="col-sm-4 col-12">
                                                 <div class="text-bold-600 font-medium-2 mb-1">
                                                   اسم المنتج
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="text" name="name" value="'. $key->name.'" disabled="" class="form-control" id="iconLeft4" placeholder="Nom" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   المرجع / الباركود
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                <input type="hidden" value="'.$key->id.'" name="id" >
                                                    <input type="text" name="name"  disabled="" value="'. $key->ref.'"" class="form-control" id="iconLeft4" placeholder="Nom" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                          <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   المورد
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                     <select class="form-control" name="four" id="basicSelect" required>';
                                                              $ok = $this->Model->get_by('fournisseur','id',$key->four);
                                                              foreach ($ok as $value) {
                                                                  $put .= '<option value="'.$value->id.'">'.$value->nom.' '.$value->pre.'</option>';
                                                              }
                                                       
                                                         foreach ($query as $key2) { 
                                                           $put .= '<option value="'. $key2->id.'">'. $key2->nom.'</option>';
                                                         } 
                                                    $put .= '</select>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-user-check"></i>
                                                    </div>
                                                </fieldset>
                                            </div> 
                                            <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   الكمية
                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="number" name="quantité"  class="form-control" id="iconLeft4" placeholder="'. $key->quantité.'" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-4 col-12">
                                                <div class="text-bold-600 font-medium-2 mb-1">
                                                   سعر المنتج

                                                </div>
                                                <fieldset class="form-group position-relative input-divider-right">
                                                    <input type="number" name="prix_e"  class="form-control" id="iconLeft4" placeholder="'. $key->prix_e.'" required>
                                                    <div class="form-control-position">
                                                        <i class="feather icon-shopping-cart"></i>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-sm-12 col-12"> <div class="text-bold-600 font-medium-2 mb-1"> <br> </div> <center>  <button type="submit" name="sub1" class="btn btn-primary">  <i class="feather icon-file" style="margin-right:10px"></i>  تسجيل  </button></center> </div></div>';
                   }
                    echo $put ;
        }
       
    }
  }
	public function date1()
	{
		if (!empty($this->input->post('date1'))) {
			$date1 = $this->input->post('date1') ;
			$date2 = $this->input->post('date2') ;
			$this->load->model('Model');
			$rba7 = 0;
			$total1 = 0;
			$re = 0;
			$total2 = 0;
			$date1 = explode('-', $date1);
			$date1 = $date1[0].$date1[1].$date1[2];
			$date2 = explode('-', $date2);
			$date2 = $date2[0].$date2[1].$date2[2];
			$query = $this->Model->get('bons');
			if ($date1>$date2) {
				foreach ($query as $val) {
					$date = $val->date;
					$date = explode(' ', $date);
					$date = $date[0];
					$date = explode('-', $date);
			        $date = $date[0].$date[1].$date[2];
			        if ($date1>=$date) {
			        	if ($date>=$date2) {
			        		$re = $re+1;
			        		$total1 = $total1+$val->total;
							$id = $val->id_bons;
							$bonat = $this->Model->get_by('bonat','id_bons',$id);
							foreach ($bonat as $row) {
								$rba71 = $row->total;
								$rba72 = $row->quantité*$row->prix_e;
								$rba73 = $rba71-$rba72;
								$rba7 = $rba7+$rba73;
								$total1 = $total1+$row->total;
							}
			        	}
			        }
                       
				}
			}else{
				foreach ($query as $val) {
					$date = $val->date;
					$date = explode(' ', $date);
					$date = $date[0];
					$date = explode('-', $date);
			        $date = $date[0].$date[1].$date[2];
			        if ($date2>=$date) {
			        	if ($date>=$date1) {
			        		$re = $re+1;
			        		$total2 = $total2+$val->total;
							$id = $val->id_bons;
							$bonat = $this->Model->get_by('bonat','id_bons',$id);
							foreach ($bonat as $row) {
								$rba71 = $row->total;
								$rba72 = $row->quantité*$row->prix_e;
								$rba73 = $rba71-$rba72;
								$rba7 = $rba7+$rba73;
								$total1 = $total1+$row->total;
							}
							
			        	}
			        }
				} 
			}
			$toto = $total1-$rba7;
			$put = ' <div class="col-lg-3 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >'.$total2.' DH</h2>
                                        <p class="mb-0" >CHIFFER D AFFAIRE</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-sm-6 col-12">
                              <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >'.$toto.' DH</h2>
                                        <p class="mb-0" >CAPITAL</p>
                                    </div>
                                    <div class="avatar bg-rgba-success p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-money text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                              <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >'.$rba7.' DH</h2>
                                        <p class="mb-0" >BÉNÉFICE</p>
                                    </div>
                                    <div class="avatar bg-rgba-warning p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-tachometer text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >'.$re.'</h2>
                                        <p class="mb-0" >FACTURES</p>
                                    </div>
                                    <div class="avatar bg-rgba-info p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-files-o text-info font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>';
			echo $put ;

		}
	}
	public function date101()
	{
		if (!empty($this->input->post('date1'))) {
			$date1 = $this->input->post('date1') ;
			$date2 = $this->input->post('date2') ;
			$this->load->model('Model');
			$rba7 = 0;
			$total1 = 0;
			$total2 = 0;
			$re = 0;
			$date1 = explode('-', $date1);
			$date1 = $date1[0].$date1[1].$date1[2];
			$date2 = explode('-', $date2);
			$date2 = $date2[0].$date2[1].$date2[2];
			$query = $this->Model->get('bons');
			if ($date1>$date2) {
				
				foreach ($query as $val) {
					$date = $val->date;
					$date = explode(' ', $date);
					$date = $date[0];
					$date = explode('-', $date);
			        $date = $date[0].$date[1].$date[2];
			        if ($date1>=$date) {
			        	if ($date>=$date2) {
			        		$re = $re+1;
			        		$total2 = $total2+$val->total;
							$id = $val->id_bons;
							$bonat = $this->Model->get_by('bonat','id_bons',$id);
							foreach ($bonat as $row) {
								$rba71 = $row->total;
								$rba72 = $row->quantité*$row->prix_e;
								$rba73 = $rba71-$rba72;
								$rba7 = $rba7+$rba73;
								$total1 = $total1+$row->total;
							}
			        	}
			        }
                       
				}
			}else{
				foreach ($query as $val) {
					$date = $val->date;
					$date = explode(' ', $date);
					$date = $date[0];
					$date = explode('-', $date);
			        $date = $date[0].$date[1].$date[2];
			        if ($date2>=$date) {
			        	if ($date>=$date1) {
			        		$re = $re+1;
			        		$total2 = $total2+$val->total;
							$id = $val->id_bons;
							$bonat = $this->Model->get_by('bonat','id_bons',$id);
							foreach ($bonat as $row) {
								$rba71 = $row->total;
								$rba72 = $row->quantité*$row->prix_e;
								$rba73 = $rba71-$rba72;
								$rba7 = $rba7+$rba73;
								$total1 = $total1+$row->total;
							}
							
			        	}
			        }
				} 
			}
			$toto = $total1-$rba7;
			$put = ' <div class="col-lg-3 col-sm-6 col-12">
                             
                            <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >'.$total2.' DH</h2>
                                        <p class="mb-0" >حجم المعاملات</p>
                                    </div>
                                    <div class="avatar bg-rgba-primary p-50">
                                        <div class="avatar-content">
                                            <i class="feather icon-users text-primary font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                       
                        <div class="col-lg-3 col-sm-6 col-12">
                              <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >'.$toto.' DH</h2>
                                        <p class="mb-0" > رأس مال</p>
                                    </div>
                                    <div class="avatar bg-rgba-success p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-money text-success font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                              <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >'.$rba7.' DH</h2>
                                        <p class="mb-0" >أرباح</p>
                                    </div>
                                    <div class="avatar bg-rgba-warning p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-tachometer text-warning font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-12">
                             <div class="card" style="height:150px">
                                <div class="card-header d-flex align-items-start pb-0" style="margin-top:30px">
                                    <div>
                                        <h2 class="text-bold-700" >'.$re.'</h2>
                                        <p class="mb-0" >الفواتير</p>
                                    </div>
                                    <div class="avatar bg-rgba-info p-50">
                                        <div class="avatar-content">
                                            <i class="fa fa-files-o text-info font-medium-5"></i>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>';
			echo $put ;

		}
	}
	public function date3()
	{
		if (!empty($this->input->post('date1'))) {
			$date1 = $this->input->post('date1') ;
			$date2 = $this->input->post('date2') ;
			$rba7 = 0;
			$total1 = 0;
			$date1 = explode('-', $date1);
			$date1 = $date1[0].$date1[1].$date1[2];
			$date2 = explode('-', $date2);
			$date2 = $date2[0].$date2[1].$date2[2];
			$query = $this->Model->get('bons');
			 $put = '';
			 $clien1 = 'particulier';
			if ($date1>$date2) {
				
				foreach ($query as $val) {
					
					$date = $val->date;
					$date = explode(' ', $date);
					$date = explode('-', $date[0]);
			        $date = $date[0].$date[1].$date[2];
			       
			        if ($date1>=$date) {
			        	if ($date>=$date2) {
			        		$total1 = $total1+$val->total;
			        		$clien = $this->Model->get_by('cliens','id',$val->clien);
			        		foreach ($clien as $key) {
			        			$clien1 = $key->nom.' '.$key->pre;
			        		}
							$put .= '<tr><td class="txt-dark">'.$clien1. '</td>
									<td class="txt-dark">' .$val->date. '</td>
									<td>'.$val->total.'</td>
									<td>'.$val->TVA.'%</td>
									<td><a href="invoice?id='.$val->id_bons.'"><button type="button" class="btn btn-outline-primary mb-2"  >  <i class="fa fa-print"></i></button></a></td>
													</tr>';
													$id = $val->id_bons;
													$bonat = $this->Model->get_by('bonat','id',$id);
							foreach ($bonat as $row) {
								$rba71 = $row->quantité*$row->prixs;
								$rba72 = $row->quantité*$row->prixe;
								$rba73 = $rba71-$rba72;
								$rba7 = $rba7-($val->remise*$rba71/100)+$rba73;
							}
							
			        	}
			        }
                       
					}
			}else{
				foreach ($query as $val) {
					
					$date = $val->date;
					$date = explode(' ', $date);
					$date = explode('-', $date[0]);
			        $date = $date[0].$date[1].$date[2];
			        if ($date2>=$date) {
			        	if ($date>=$date1) {
			        		$total1 = $total1+$val->total;
			        		$clien = $this->Model->get_by('cliens','id',$val->clien);
			        		foreach ($clien as $key) {
			        			$clien1 = $key->nom.' '.$key->pre;
			        		}
			        		$put .= '<tr><td class="txt-dark">'.$clien1. '</td>
									<td class="txt-dark">' .$val->date. '</td>
									<td>'.$val->total.' DH</td>
									<td>'.$val->TVA.' %</td>
									<td><a href="invoice?id='.$val->id_bons.'"><button type="button" class="btn btn-outline-primary mb-2"  >  <i class="fa fa-print"></i></button></a></td>
													</tr>';
													$id = $val->id_bons;
													$bonat = $this->Model->get_by('bonat','id',$id);
							foreach ($bonat as $row) {
								$rba71 = $row->quantité*$row->prixs;
								$rba72 = $row->quantité*$row->prixe;
								$rba73 = $rba71-$rba72;
								$rba7 = $rba7 + $rba73 ;
							}
							
			        	}
			        }
			      
					} 
			}
			
			echo $put;
		}
		
	}
	public function ajax_check()
    {
         
        if (!empty($this->input->post('id'))) {
                $id = $this->input->post('id') ;
                $menu = $this->input->post('menu') ;
                $value = $this->input->post('value') ;
              $data = array($menu => $value);
                   $query = $this->Model->update('id',$id,'compte',$data);
                if ($query) {
                     echo 'done';
                   }else{
                    echo 'non';
                   }
        }
    } 
    public function ajax_salaire()
    {
        if (!empty($this->input->post('id'))) {
                $id = $this->input->post('id') ;
                $date = $this->input->post('date') ;
                    $compte = $this->Model->get_by('compte','id',$id);
                    foreach ($compte as $key1) { 
                      $nom = $key1->nom;
                        $pre = $key1->pre;
                    	 $data = array('compte' => $key1->id, 
                       
			              'date' => $date,
			              'salaire' => $key1->salaire);
			            $query = $this->Model->add('salaire',$data);
                  if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' valider le salaire de ',
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'compte',
                                 'but' => 'modifier',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
                     if ($query = TRUE) {
                         echo 'oui';
                      }else{
                          echo 'non';
                      }
                    }
               
        }
    } 
    public function ajax_cheque()
    {
         
        if (!empty($this->input->post('id'))) {
                $id = $this->input->post('id') ;
                $data = array('payer' => 'oui');
                    $query = $this->Model->update('id',$id,'check',$data);
                    $query1 = $this->Model->get_by('check','id',$id);
                    foreach ($query1 as $key1) {
                      $clien = $key1->clien;
                    	 $data = array('clien' => $key1->clien, 
			              'date' => date('Y-m-d'),
			              'debit' => $key1->montant,
			              'credit' => '0',
			              'type' => 'chéque');
                       $query2 = $this->Model->get_by('cliens','id',$clien);
                       foreach ($query2 as $key3) {
                         $nom = $key3->nom;
                         $pre = $key3->pre;
                       }
			        $query = $this->Model->add('credit',$data);
              if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
              $data1 = array('action' =>' valider un chéque ',
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'Cheques',
                                 'but' => 'modifier',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
                     if ($query) {
                     echo 'oui';
                   }else{
                    echo 'non';
                   }
                    }
               
        }
    } 
    public function ajax_block()
    {
        if (!empty($this->input->post('id'))) {
                $id = $this->input->post('id') ;
                 $compte = $this->Model->get_by('compte','id',$id);
                 foreach ($compte as $key) {
                 	if ($key->active == 'non') {
                 		$val = 'oui';
                 	}else{
                 		$val = 'non';
                 	}
                 }
              $data = array('active' => $val);
                   $query = $this->Model->update('id',$id,'compte',$data);
                   if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
              $data1 = array('action' =>" Modifier les informations de blocage d'un compte ",
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'compte',
                                 'but' => 'modifier',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
                if ($query) {
                     echo 'done';
                   }else{
                    echo 'non';
                   }
        }
    } 
    public function ajax_credit()
    {
         
        if (!empty($this->input->post('id'))) {
                $id = $this->input->post('id') ;
                
                if ($id == "rien") {
                  $id = 0;
                }
                $tva = $this->input->post('tva') ;
                $clien = $this->input->post('clien') ;
                $type = $this->session->userdata('type');
                $pro = 0;
			     if ($type == 'Gérant') {
				     $admin = 'Gérant';
			     }elseif ($type == 'admin') {
				     $admin = $this->session->userdata('id');
			     }
                $bonat = $this->Model->get_by('bon','ok',$admin);
                if (!empty($bonat)) {
                	foreach ($bonat as $key) {
                		$pro = $pro+$key->total;
                	}
                }
                $credit = ($pro*(1+$tva/100))-$id;

                                                    $total5 = 0;
                                                    $this->db->order_by("id", "asc");
                                                    $get = $this->Model->get_by('credit','clien',$clien,"desc");
                                                    foreach ($get as $key3) { 
                                                         $total5 = $key3->credit+$total5-$key3->debit;
                                                     } 
                                                     $get1 = $this->Model->get_by('cliens','id',$clien);
                                                     foreach ($get1 as $key1) {
                                                     	$credit1 = $key1->credit;
                                                     }
                $total = $credit+$total5;
                if ($total > $credit1) {
                  echo 'done';
                }else{
                	echo 'non';
                }

        }
    } 
	public function date11()
	{
		if (!empty($this->input->post('date1'))) {
			$date1 = $this->input->post('date1') ;
			$date2 = $this->input->post('date2') ;
			$this->load->model('Model');
			$rba7 = 0;
			$total1 = 0;
			$re = 0;
			$date15 = ' ';
			$date1 = explode('-', $date1);
			$date1 = $date1[0].$date1[1].$date1[2];
			$date2 = explode('-', $date2);
			$date2 = $date2[0].$date2[1].$date2[2];
			$query = $this->Model->bons();
			if ($date1>$date2) {
				foreach ($query as $val) {
					
					$date = $val->date;
					$date = explode('-', $date);
			        $date = $date[0].$date[1].$date[2];
			        $date15 = $date;
			        if ($date1>=$date) {
			        	$re = $re+1;
			        	if ($date>=$date2) {
			        		$total1 = $total1+$val->total;
							$id = $val->id_bons;
													$bonat = $this->Model->get_bonat_by_id($id);
							foreach ($bonat as $row) {
								$rba71 = $row->quantité*$row->prixs;
								$rba72 = $row->quantité*$row->prixe;
								$rba73 = $rba71-$rba72;
								$rba7 = $rba7-($val->remise*$rba71/100)+$rba73;

							}
			        	}
			        }
                       
				}
			}
			$toto = $total1-$rba7;
			$put = '<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-red">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">'.$total1.' </span></span>
													<span class="weight-500 uppercase-font txt-light block font-13">chiffre d affaire</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="zmdi zmdi-male-female txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-yellow">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">'.$toto.' </span></span>
													<span class="weight-500 uppercase-font txt-light block">Capital</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="zmdi zmdi-redo txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-green">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">'.$rba7.'</span></span>
													<span class="weight-500 uppercase-font txt-light block">Bénéfice</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 data-wrap-right">
													<i class="zmdi zmdi-file txt-light data-right-rep-icon"></i>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<div class="sm-data-box bg-blue">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-6 text-center pl-0 pr-0 data-wrap-left">
													<span class="txt-light block counter"><span class="counter-anim">'.$re.'</span></span>
													<span class="weight-500 uppercase-font txt-light block">Factures</span>
												</div>
												<div class="col-xs-6 text-center  pl-0 pr-0 pt-25  data-wrap-right">
													<div id="sparkline_4" style="width: 100px; overflow: hidden; margin: 0px auto;"></div>
												</div>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>';
			/* echo $put ;*/
			echo $re;
		}
	}
	public function ajax_search_marque()
	{
		if (!empty($this->input->post('ok'))) {
			$marque = $this->input->post('ok') ;
			$cat = $this->input->post('ok1') ;
		   $res2 = $this->Model->get_by2('produit','marque',$marque,'cat',$cat) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder"  style="width: 205.86px;height: 256.41px">
                            </div>
                           <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i>Suprimer
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">Modifier</span>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_marque_voir()
	{
		if (!empty($this->input->post('ok'))) {
			$marque = $this->input->post('ok') ;
			$cat = $this->input->post('ok1') ;
		   $res2 = $this->Model->get_by2('produit','marque',$marque,'cat',$cat) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder"  style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_marque10()
	{
		if (!empty($this->input->post('ok'))) {
			$marque = $this->input->post('ok') ;
			$cat = $this->input->post('ok1') ;
		   $res2 = $this->Model->get_by2('produit','marque',$marque,'cat',$cat) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i> حذف  
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل </span>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_marque10_voir()
	{
		if (!empty($this->input->post('ok'))) {
			$marque = $this->input->post('ok') ;
			$cat = $this->input->post('ok1') ;
		   $res2 = $this->Model->get_by2('produit','marque',$marque,'cat',$cat) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_marque1()
	{
		if (!empty($this->input->post('ok'))) {
			$marque = $this->input->post('ok') ;
			$this->load->model('Model');
		   $res2 = $this->Model->get_by('produit','marque',$marque) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder"  style="width: 205.86px;height: 256.41px">
                            </div>
                           <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i> Suprimer
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">Modifier</span>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_marque1_voir()
	{
		if (!empty($this->input->post('ok'))) {
			$marque = $this->input->post('ok') ;
			$this->load->model('Model');
		   $res2 = $this->Model->get_by('produit','marque',$marque) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder"  style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_marque11()
	{
		if (!empty($this->input->post('ok'))) {
			$marque = $this->input->post('ok') ;
			$this->load->model('Model');
		   $res2 = $this->Model->get_by('produit','marque',$marque) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i> حذف  
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل </span>
                                </div>
                            </div>
                             <!--<div class="item-options text-center">
                                <div class="wishlist remove-wishlist" data-toggle="modal" data-target="#danger'.$key->id.'" style="width:150px">
                                    <i class="feather icon-x align-middle"></i> حذف 
                                </div>
                                  <a class="cart" data-toggle="modal" data-target="#large'.$key->id.'">  <div class="cart move-cart" style="width: 150px">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل</span>
                                </div></a>
                            </div>-->
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_marque11_voir()
	{
		if (!empty($this->input->post('ok'))) {
			$marque = $this->input->post('ok') ;
			$this->load->model('Model');
		   $res2 = $this->Model->get_by('produit','marque',$marque) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
  public function ajax_session()
  {
     if (!empty($this->session->userdata('type'))) {
               $time = $this->session->userdata('time');
               $time1 = time() - $time;
               if($time1 > 900) {
                echo 'non';
              }else{
                $session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
               echo $time1;
              }
      }
            
  }
	public function ajax_search_cat1()
	{
		if (!empty($this->input->post('ok1'))) {
			$marque = $this->input->post('ok1') ;
		   $res2 = $this->Model->get_by('produit','cat',$marque) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder"  style="width: 205.86px;height: 256.41px">
                            </div>
                           <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i>Suprimer
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">Modifier </span>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_cat1_voir()
	{
		if (!empty($this->input->post('ok1'))) {
			$marque = $this->input->post('ok1') ;
		   $res2 = $this->Model->get_by('produit','cat',$marque) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder"  style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_cat10()
	{
		if (!empty($this->input->post('ok1'))) {
			$marque = $this->input->post('ok1') ;
		   $res2 = $this->Model->get_by('produit','cat',$marque) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i> حذف  
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل </span>
                                </div>
                            </div>
                             <!--<div class="item-options text-center">
                                <div class="wishlist remove-wishlist" data-toggle="modal" data-target="#danger'.$key->id.'" style="width:150px">
                                    <i class="feather icon-x align-middle"></i> حذف 
                                </div>
                                  <a class="cart" data-toggle="modal" data-target="#large'.$key->id.'">  <div class="cart move-cart" style="width: 150px">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل</span>
                                </div></a>
                            </div>-->
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_search_cat10_voir()
	{
		if (!empty($this->input->post('ok1'))) {
			$marque = $this->input->post('ok1') ;
		   $res2 = $this->Model->get_by('produit','cat',$marque) ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
		   
		}
	}
	public function ajax_get()
	{
		   $res2 = $this->Model->get('produit') ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i> Suprimer
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">Modifier </span>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
	}
	public function ajax_get_voir()
	{
		   $res2 = $this->Model->get('produit') ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                           <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
	}
	public function ajax_get1()
	{
		   $res2 = $this->Model->get('produit') ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
            if ($key->archive != 'oui') { 
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist" data-toggle="modal" data-target="#danger'.$key->id.'">
                                    <i class="feather icon-x align-middle"></i> حذف  
                                </div>
                                  <div class="cart" data-toggle="modal" data-target="#large'.$key->id.'">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل </span>
                                </div>
                            </div>
                             <!--<div class="item-options text-center">
                                <div class="wishlist remove-wishlist" data-toggle="modal" data-target="#danger'.$key->id.'" style="width:150px">
                                    <i class="feather icon-x align-middle"></i> حذف 
                                </div>
                                  <a class="cart" data-toggle="modal" data-target="#large'.$key->id.'">  <div class="cart move-cart" style="width: 150px">
                                <i class="feather icon-edit"></i> <span class="add-to-cart">تعديل</span>
                                </div></a>
                            </div>-->
                        </div>
                    </div>' ;
                   }
                 }
                    echo $put ;
		    }
	}
	public function ajax_get1_voir()
	{
		   $res2 = $this->Model->get('produit') ;;
		    if (!empty($res2)) {
		    	$put = ' ';
		    	foreach ($res2 as $key) {
		    	$put .= '<div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <img src="'. base_url().'upload/produits/'. $key->image.'" class="img-fluid" alt="img-placeholder" style="width: 205.86px;height: 256.41px">
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        
                                            <div class="badge badge-primary badge-md">
                                            '. $key->quantité.'
                                        </div>
                                       
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                        '.$key->prix_1.' DH
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <span>
                                      '.$key->name.'
                                    </span>
                                </div>
                                <div>
                                    <p class="item-description">
                                        '.$key->desc.'
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>' ;
                   }
                    echo $put ;
		    }
	}
		public function ajax_kaki()
	{
		if (!empty($this->input->post('kaki'))) {
			$kaki = $this->input->post('kaki') ;
			$total = 0;
			 $pros = $this->Model->get('produit');
			if ($kaki == 'tous') {
				foreach ($pros as $row) {
           if ($row->archive != 'oui') {
					$tot = $row->quantité*$row->prix_e;
					$total = $total+$tot ;	
			    }
        }
			}else{
				foreach ($pros as $row) {
          if ($row->archive != 'oui') {
					if ($row->cat == $kaki) {
						$tot = $row->quantité*$row->prix_e;
					$total = $total+$tot ;
					}
          }
				}
			}

			echo $total.' DH' ;
		}
		
	}
	public function ajax_searsh1()
	{
		if (!empty($this->input->post('searsh'))) {
			$id = $this->input->post('searsh') ;
			$this->load->model('Model');
		   $res1 = $this->Model->like2('produit','name','ref',$id);
		    if (!empty($res1)) {
		    	$put = ' ';
		    	foreach ($res1 as $row) {
             if ($key->archive != 'oui') {
		    	$put .= '<option value="'.$row->id.'">'.$row->name.'</option>' ;
                   }
                 }
		    }
		    echo $put ;
		}
		
	}
	public function ajax_searsh2()
	{
		if (!empty($this->input->post('place'))) {
			$id = $this->input->post('place') ;
			$this->load->model('Model');
		   $res1 = $this->Model->get_by('produit','cat',$id);
		    if (!empty($res1)) {
		    	$put = ' ';
		    	foreach ($res1 as $row) {
             if ($key->archive != 'oui') {
		    	$put .= '<option value="'.$row->id.'">'.$row->name.'</option>' ;
                   }
                 }
		    }
		    echo $put ;
		}
		
	}
	public function ajax_bon()
	{
		if (!empty($this->input->post('pal'))) {
			$quantité = $this->input->post('pal') ;
			$id = $this->input->post('id') ;
		    $res = $this->Model->get_by('bon','id',$id);
		    foreach ($res as $key ) {
		    	$res1 = $this->Model->get_by('produit','id',$key->pro);
		    	foreach ($res1 as $key1) {
		    		if ($key1->quantité >= $quantité) {
		    			$re =  1-($key->remise / 100);
		    			$total = ($key->prix_s * $quantité) * $re;
		    			$data = array('quantité' => $quantité,
		    		                  'total' => $total
		    		              );
		    			$res = $this->Model->update('id',$id,'bon',$data);
		    		}else{
		    			$quantité = $key1->quantité;
		    			$re =  1-($key->remise / 100);
		    			$total = $key->prix_s * $quantité * $re;
		    			$data = array('quantité' => $quantité,
		    		                  'total' => $total
		    		              );
		    			$res = $this->Model->update('id',$id,'bon',$data);
		    		}
		    	}
		    }
		    echo $quantité ;
		}
		
	}
	public function ajax_total()
	{
		if (!empty($this->input->post('id'))) {
			$id = $this->input->post('id') ;
		    $res = $this->Model->get_by('bon','id',$id);
		    $total = 0;
		    foreach ($res as $key ) {
		    	$total = $key->total;
		    }
		    echo $total ;
		}
	}
	public function ajax_total1()
	{
		if (!empty($this->input->post('id'))) {
			$id = $this->input->post('id') ;
			$type = $this->session->userdata('type');
			if ($type == 'Gérant') {
				$admin = 'Gérant';
			}elseif ($type == 'admin') {
				$admin = $this->session->userdata('id');
			}
		    $res = $this->Model->get_by('bon','ok',$admin);
		    $total = 0;
		    foreach ($res as $key ) {
		    	$total = $total + $key->total;
		    }
		    echo $total ;
		}
		
	}
	public function ajax_clien()
	{
		if (!empty($this->input->post('id'))) {
			$id = $this->input->post('id') ;
		    $res = $this->Model->get_by('cliens','id',$id);
		    $put = ' ';
		    foreach ($res as $key ) {
		    	$put = '<h4 class="card-title">'.$key->nom.' '.$key->nom.'</h4><p class="mb-0">'.$key->nom_e.'</p>
                                            <br>
                                            <p>'.$key->adress.'</p>
                                            <p>'.$key->tele.'</p>
                                            <hr>';
		    }
		    echo $put ;
		}
		
	}
	public function delete_bon()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $query = $this->Model->delete('bon','id',$id);
            if ($query1 = TRUE) {
                 redirect(base_url().'caisse','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
  public function delete_bonat()
  {
    if (isset($_GET['id'])) {
      $n=0;
      $id = $_GET['id'];
      $res = $this->Model->get_by('bonat','id_bons',$id);
        foreach ($res as $key) {
            $produit = $key->pro;
            $pro = $this->Model->get_by('produit','id',$produit);
          foreach ($pro as $key2) {
            $quantité = $key2->quantité+$key->quantité;
            $data = array('quantité' => $quantité );
            $query = $this->Model->update('id',$produit,'produit',$data);
            
          }  
            
        }
           $query1 = $this->Model->delete('bonat','id_bons',$id);
            $query2 = $this->Model->delete('bons','id_bons',$id);
            $query3 = $this->Model->delete('credit','id_bons',$id);
            $query4 = $this->Model->delete('check','id_bons',$id);
            if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer une facture N° ',
                                 'action1' => $id,
                                 'table' => 'sortir',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query2 = TRUE) {
                 redirect(base_url().'SAV','refresh'); 
            }
    }else{
      redirect(base_url().'SAV','refresh'); 
    }
  }
	public function delete_clien()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('cliens','id',$id);
      foreach ($res as $key) {
        $nom = $key->nom;
        $pre = $key->pre;
      }
      $data = array('archive' => 'oui');
      $query = $this->Model->update('id',$id,'cliens',$data);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer les informations de ',
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'table_credit',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'table_credit','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
  public function delete_clien1()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('cliens','id',$id);
      foreach ($res as $key) {
        $nom = $key->nom;
        $pre = $key->pre;
      }
      $query = $this->Model->delete('cliens','id',$id);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer les informations de ',
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'table_credit',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Archive?page=cliens','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
  public function delete_four()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('fournisseur','id',$id);
    
      foreach ($res as $key) {
        $nom = $key->nom;
        $pre = $key->pre;
      }
      $data = array('archive' => 'oui');
      $query = $this->Model->update('id',$id,'fournisseur',$data);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer les informations de ',
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'fournisseur',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Archive?page=fournisseur','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
    public function delete_four1()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('fournisseur','id',$id);
    
      foreach ($res as $key) {
        $nom = $key->nom;
        $pre = $key->pre;
      }
      $query = $this->Model->delete('fournisseur','id',$id);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer les informations de ',
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'fournisseur',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'fournisseur','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
  public function delete_cat()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('catégorie','id',$id);
      foreach ($res as $key) {
        $name = $key->name;
      }
      $data = array('archive' => 'oui');
      $query = $this->Model->update('id',$id,'catégorie',$data);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer un catégorie ',
                                 'action1' => $name,
                                 'table' => 'Categories',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );

                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Categories','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
    public function delete_cat1()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('catégorie','id',$id);
      foreach ($res as $key) {
        $name = $key->name;
      }

      $query = $this->Model->delete('catégorie','id',$id);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer un catégorie ',
                                 'action1' => $name,
                                 'table' => 'Categories',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Categories','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
	public function delete_compte()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('compte','id',$id);
      foreach ($res as $key) {
        $nom = $key->nom;
        $pre = $key->pre;
      }
      $data = array('archive' => 'oui');
      $query = $this->Model->update('id',$id,'compte',$data);
                  if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer un compte ',
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'compte',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Archive?page=compte','refresh'); 
            } 
    }else{
      redirect(base_url().'compte','refresh'); 
    }
  }
  public function delete_compte1()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('compte','id',$id);
      foreach ($res as $key) {
        $nom = $key->nom;
        $pre = $key->pre;
      }
      $query = $this->Model->delete('compte','id',$id);
                  if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer un compte ',
                                 'action1' => $nom.' '.$pre,
                                 'table' => 'compte',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'compte','refresh'); 
            } 
    }else{
      redirect(base_url().'compte','refresh'); 
    }
  }
  public function Restaurer()
  {
     if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $page = $_GET['page'];
      $data = array('archive' => 'non');
      $query = $this->Model->update('id',$id,$page,$data);
                  
            if ($query = TRUE) { 
                 redirect(base_url().'Archive','refresh'); 
            } 
    }else{
      redirect(base_url().'Archive','refresh'); 
    }
  }
	public function delete_charge()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res1 = $this->Model->get_by('charge','id',$id);
      foreach ($res1 as $key) {
        $name = $key->name;
      }
      $data = array('archive' => 'oui');
      $query = $this->Model->update('id',$id,'charge',$data);
                  if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer un charge ',
                                 'action1' => $name,
                                 'table' => 'comptabilite2',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Archive?page=charge','refresh'); 
            } 
    }else{
      redirect(base_url().'comptabilite2','refresh'); 
    }
  }
  public function delete_charge1()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res1 = $this->Model->get_by('charge','id',$id);
      foreach ($res1 as $key) {
        $name = $key->name;
      }

      $query = $this->Model->delete('charge','id',$id);
                  if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer un charge ',
                                 'action1' => $name,
                                 'table' => 'comptabilite2',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'comptabilite2','refresh'); 
            } 
    }else{
      redirect(base_url().'comptabilite2','refresh'); 
    }
  }
	public function delete_pro()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('produit','id',$id);
      foreach ($res as $key) {
        $name = $key->name;
      }
      $data = array('archive' => 'oui');
      $query = $this->Model->update('id',$id,'produit',$data);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer un produit ',
                                 'action1' => $name,
                                 'table' => 'produit',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Archive?page=produit','refresh'); 
            } 
    }else{
      redirect(base_url().'produit','refresh'); 
    }
  }
  public function delete_pro1()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('produit','id',$id);
      foreach ($res as $key) {
        $name = $key->name;
      }
      $query = $this->Model->delete('produit','id',$id);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer un produit ',
                                 'action1' => $name,
                                 'table' => 'produit',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'produit','refresh'); 
            } 
    }else{
      redirect(base_url().'produit','refresh'); 
    }
  }
	public function delete_marque()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('marques','id',$id);
      foreach ($res as $key) {
        $name = $key->name;
      }
      $data = array('archive' => 'oui');
      $query = $this->Model->update('id',$id,'marques',$data);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer une marque ',
                                 'action1' => $name,
                                 'table' => 'Marque',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Archive?page=marques','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
  public function delete_marque1()
  {
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      $res = $this->Model->get_by('marques','id',$id);
      foreach ($res as $key) {
        $name = $key->name;
      }
      $query = $this->Model->delete('marques','id',$id);
      if ($this->session->userdata('type') == 'Gérant') {
                    $type = 'Gérant';
                  }elseif($this->session->userdata('type') == 'admin'){
                            $type = $this->session->userdata('id');
                  }
                  $data1 = array('action' =>' suprimer une marque ',
                                 'action1' => $name,
                                 'table' => 'Marque',
                                 'but' => 'suprimer',
                                 'admin' => $type,
                                 'date' => date('Y-m-d h:i:sa'), );
                  $query = $this->Model->add('notification',$data1);
            if ($query1 = TRUE) {
                 redirect(base_url().'Marque','refresh'); 
            } 
    }else{
      redirect(base_url().'accueil','refresh'); 
    }
  }
	public function logout()
		{
			$query = $this->session->sess_destroy();
			if ($query = TRUE) {
				redirect(base_url().'index','refresh');
			}
			
		}
	public function backup()
			{
				
				  $date = date('Y-m-d');
			    $this->load->dbutil();
				  $backup = $this->dbutil->backup();
				  $this->load->helper('file');
				  //write_file('upload/my_db'. $date .'.sql.zip',$backup);
          write_file('upload/my_db.sql',$backup);

          $this->load->library('zip');
          $this->zip->read_dir(FCPATH.'upload',FALSE);
          $this->zip->archive('back_up/file/project_'. $date .'.zip');
          $this->zip->download('project_'.$date);

				  redirect(base_url('').'accueil','refresh');
			}

}