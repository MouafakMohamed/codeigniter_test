<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

   public function __construct()
   {
   	parent::__construct();
   	        
   } 
	
	public function index()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			
			redirect(base_url().'dashboard','refresh');		
		}else{
			$this->load->model('Model');
		    $profil = $this->Model->profil();
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
	/*public function registre()
	{ 
		$error = '';
		if (!empty($_GET['id'])) {
			if ($_GET['id'] == '1') {
						$error = 'il est déja existe un profil';
					}		}
					$data['error'] = $error;
		$this->load->view('registre.php',$data);
	}*/
	public function login()
    {
    	if (isset($_POST['sub'])) {
    		$name = $_POST['name'];
    		$pass = $_POST['pass'];
    		$this->load->model('Model');
		    $result = $this->Model->login($name);
		    if (!empty($result)) {
		    	foreach ($result as $row) {
		    		if ($pass == $row->pass) {
		    			$type = $row->type ;
		    			$session_data = array('name' => $name);
		    			$session_data = array('type' => $type);
		    			$this->session->set_userdata($session_data);
		    			if ($this->session->userdata('type') == 'Gérant') {
		    				redirect(base_url().'dashboard','refresh');
		    			}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}	
		    			
		    		}else{
		    			
		    			redirect(base_url().'index?id=1','refresh');
		    		}
		    	}
		    }else{
		    			redirect(base_url().'index?id=2','refresh');
    	    }
    	}else{
    		redirect(base_url().'index','refresh');
    	}
    } 
    public function dashboard()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			/*$cat = 0;
			$clien = 0;
			$pro = 0;
			$res = $this->Model->catégorie();
			foreach ($res as $row) {
				$cat = $cat + 1 ;
			}
			$res1 = $this->Model->cliens();
			foreach ($res1 as $row1) {
				$clien = $clien + 1 ;
			}
			$res2 = $this->Model->get_all_products();
			foreach ($res2 as $row2) {
				$pro = $pro + 1 ;
			}
			$data['cat'] = $cat;
			$data['clien'] = $clien;
			$data['pro'] = $pro;*/
             $num10 = 0;
    	    $data['query1'] = $this->Model->get_by_number('5','pruduct') ;
    	    $data['cat'] = $this->Model->get('pruduct');
    	    $data['four'] = $this->Model->get('fournisseur');
    	    $data['four1'] = $this->Model->four1();
    	    $data['marque'] = $this->Model->get('marques');
    	    $data['clien'] = $this->Model->get('cliens');
    	    $data['clien1'] = $this->Model->cliens1();
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
		$this->load->view('dashboard.php',$data);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
	}
	public function clien()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
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
		    $data['res1'] = $this->Model->cliens();
		      $this->load->view('clien.php', $data);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		}else{
			redirect(base_url() . 'index','refresh');
		}
	}












































	public function products()
	{
		if ($this->session->userdata('type') == 'Gérant' OR $this->session->userdata('type') == 'Administrateur') {
			$this->load->model('Model');
			 $num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		$res = $this->Model->get_all_products();
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
		$data['n'] = $salam ;
		$id = $num-1 ;
		$id = $id * 24 ;
		$data['num'] = $num ;
		$data['query1'] = $this->Model->get_by_limit($id,'24','pruduct')
;
		$data['res'] = $res;
		$this->load->view('product.php', $data);
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function profil()
	{ 
		if ($this->session->userdata('type') == 'Gérant') {
		$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			$cat = $this->Model->get_all_products();
    	    $four = $this->Model->four();
    	    $clien = $this->Model->cliens();
    	    $np = 0;
    	    $nc = 0;
    	    $nf = 0;
    	    foreach ($cat as $key) {
    	    	$np = $np+1;
    	    }
    	    foreach ($clien as $key) {
    	    	$nc = $nc+1;
    	    }
    	    foreach ($four as $key) {
    	    	$nf = $nf+1;
    	    }
             $data['np'] = $np;
             $data['nc'] = $nc;
             $data['nf'] = $nf;
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		$res = $this->Model->profil();
		$data['res'] = $res;
		$this->load->view('profil.php',$data);
	}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
	}
	public function upload_prof()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$error = '';
			$error1 = '';
			$image = '';
			$image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
			if (isset($_POST['sub'])) {
                if (!empty($_FILES['image']['tmp_name'])) {
                	/*$_FILES['image']['name'] = str_replace(" ","_",$_FILES['image']['name']);
                	$image1 = $_FILES['image']['name'];*/
			for ($i=0; $i < 1000000000; $i++) { 
				$this->load->model('Model');
				$mouafak = $this->Model->get_profil_by_image($image1);
				if (!empty($mouafak)) {
					$image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
					$i = $i + 1 ;
				}else{
					$i = 1000000000 ;
				}
			}
			$_FILES['image']['name'] = $image1;
					$image = addslashes($_FILES['image']['tmp_name']) ;
			        $image = file_get_contents($image);
			        $image = base64_encode($image);

		         if (!empty($image)) {
		    	
            $config['upload_path'] = 'upload/images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
            $this->load->library('upload', $config);
            
                if ( !$this->upload->do_upload('image')){
            	  $error = array('error' => $this->upload->display_errors());
            	          
		        }else{
		        	$name1 = $_FILES['image']['name'];
                   $name = 'image';
			       $id = $_GET['id'];
			       
			        $this->load->model('Model');
		        $query = $this->Model->upload_prof($id,$name,$name1);
                      }
                  }
		    }
				if (!empty($_POST['name'])) {
				   $name = 'name';
			       $id = $_GET['id'];
			       $name1 = $_POST['name'];
			       $this->load->model('Model');
			       	$this->load->model('Model');
		            $query = $this->Model->upload_prof($id,$name,$name1);
			    
				}
				if (!empty($_POST['email'])) {
				   $name = 'email';
			       $id = $_GET['id'];
			       $name1 = $_POST['email'];
			       $this->load->model('Model');
			       	$this->load->model('Model');
		            $query = $this->Model->upload_prof($id,$name,$name1);
			    
				}
				if (!empty($_POST['num'])) {
				   $name = 'num';
			       $id = $_GET['id'];
			       $name1 = $_POST['num'];
			       $this->load->model('Model');
			       	$this->load->model('Model');
		            $query = $this->Model->upload_prof($id,$name,$name1);
			    
				}
				
			
		if ($query = TRUE) {
			redirect(base_url().'profil' ,'refresh');
		}
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function New_product()
	{
		if ($this->session->userdata('type') == 'Gérant' OR $this->session->userdata('type') == 'Administrateur') {
		 $num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
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
		$data['query'] = $this->Model->catégorie();
		$data['query1'] = $this->Model->marques();
		$data['query2'] = $this->Model->four();
		$this->load->view('New_product.php',$data);
		}else{
			redirect(base_url() . 'index','refresh');
		}
	
	}
	public function Encien_product()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
        $error = '';
        $data['error1'] = $error;
		$data['query'] = $this->Model->catégorie();
		$data['query1'] = $this->Model->four();
		$data['res'] = $this->Model->get_all_products();
		$this->load->view('Encien_product.php',$data);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
	
	}
	public function product_add()
	{
		if ($this->session->userdata('type') == 'Gérant' OR $this->session->userdata('type') == 'Administrateur' ) {
			$this->load->model('Model');
		$image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
			if (isset($_POST['sub'])) {
                if (!empty($_FILES['image']['tmp_name'])) {
                	/*$_FILES['image']['name'] = str_replace(" ","_",$_FILES['image']['name']);
                	$image1 = $_FILES['image']['name'];*/
			for ($i=0; $i < 1000000000; $i++) { 
				$mouafak = $this->Model->get_pro_by_image($image1);
				if (!empty($mouafak)) {
					$image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
					$i = $i + 1 ;
				}else{
					$i = 1000000000 ;
				}
			}
			$_FILES['image']['name'] = $image1;
            $image = addslashes($_FILES['image']['tmp_name']) ;
			$image = file_get_contents($image);
			$image = base64_encode($image);
            }
		    if (!empty($image)) {
		    	
            $config['upload_path'] = 'upload/images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
            $this->load->library('upload', $config);
            
                if ( !$this->upload->do_upload('image')){
            	  $error = array('error' => $this->upload->display_errors());
            	           $image = 'images.jpg';
		         }
		          if (!empty($_FILES['image'])) {
                              	$image = $_FILES['image']['name'];
                              }
		     }else{
		     	$image = 'images.jpg';
		     }
		         if (!empty($_POST['name'])) {
		     	     $name = $_POST['name'];
		     	     $query1 = $this->Model->check_name($name);
		     	    }else{
		            	$name = '*****';
		            }
                              
                              $ref = $_POST['ref'];
                              $query2 = $this->Model->check_réf($ref);
                              
                              if (!empty($query1)) {
                              	redirect(base_url().'New_product?id=1','refresh');
                              }elseif(!empty($query2)){
                                redirect(base_url().'New_product?id=2','refresh');
                              }
                              $cat = $_POST['cat'];
                              $prixe = $_POST['prixe'];
                              $prixs = $_POST['prixs'];
                              $marque = $_POST['marque'];
                              $quantité = $_POST['quantité'];
                              $date = date('Y-m-d');
                             
                              
                              
                             $query = $this->Model->insert_product($image,$marque,$name,$ref,$cat,$prixe,$prixs,$quantité);
                             	$query1 = $this->Model->insert_enter($quantité,$ref,$cat,$date,$name,$image);
                             if ($query = TRUE) {
                             	redirect(base_url().'products','refresh');
                             };
		}
		if (isset($_POST['sub1'])) {
			$quantité = $_POST['quantité'];
			$quantité1 = 0;
			$name = $_POST['réf'];
			$date = date('Y-m-d');
			$this->load->model('Model');
		    $res = $this->Model->get_pro_by_name($name);
		    foreach ($res as $row) {
		    	$quantité1 = $row->quantité;
                $réf = $row->réf;
                $cat = $row->cat;
                $image = $row->image;
		    }
		    $quantité2 = $quantité + $quantité1 ;
		     $this->Model->edite_quantité($quantité2,$réf);
		     $qualili = $this->Model->insert_enter($quantité,$réf,$cat,$date,$name,$image);
		     if ($qualili = TRUE) {
		     	redirect(base_url().'Encien_product','refresh');
		     }else{
		     	echo 'something wrong';
		     }

		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function Categorie()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
			$data['error'] = '';
			if (!empty($_GET['id'])) {
				$data['error'] = 'le nom est déja utulise';
			}
		$data['res'] = $this->Model->catégorie();
	    $this->load->view('cat.php',$data);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function marques()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		$data['res'] = $this->Model->marques();
	    $this->load->view('marques.php',$data);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	
	public function clien1()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		$error = '';
		if (!empty($_GET['id'])) {
				if ($_GET['id'] == 1) {
					$error = 'Ce telephone est déja existe';
				}
			}
			if (!empty($_GET['id1'])) {
				$data['id1'] = $_GET['id1'] ;
					$data['error'] = $error;
		$data['res1'] = $this->Model->cliens();
		$this->load->view('edit_clien.php', $data);
			}
		
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	} 
	public function fournisseur()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
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
		$data['res1'] = $this->Model->four();
		$this->load->view('fournisseur.php', $data);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function fournisseur1()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($_GET['id1'])) {
				$data['id1'] = $_GET['id1'];
				$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			$res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
			$error = '';
		$data['error'] = $error;
		$data['res1'] = $this->Model->four();
		$this->load->view('edit_four.php', $data);
			}
			
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function profits()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
			$error = '';
        $data['error1'] = $error;
		$this->load->model('Model');
		$data['query'] = $this->Model->catégorie();
		$data['query1'] = $this->Model->four();
		$data['res'] = $this->Model->get_all_products();
		    $this->load->view('profits.php', $data, FALSE);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		
	}
		
	}
	public function add_cat()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$this->load->model('Model');
		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$check = $this->Model->check_name_cat($name);
			if (!empty($check)) {
				redirect(base_url() . 'Categorie?id=1','refresh');
			}else{
			$query = $this->Model->add_cat($name);
				redirect(base_url().'Categorie','refresh');
		}}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function add_registre()
	{
			$this->load->model('Model');
		$image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
			if (isset($_POST['sub'])) {
                if (!empty($_FILES['image']['tmp_name'])) {
                	/*$_FILES['image']['name'] = str_replace(" ","_",$_FILES['image']['name']);
                	$image1 = $_FILES['image']['name'];*/
			for ($i=0; $i < 1000000000; $i++) { 
				$mouafak = $this->Model->get_pro_by_image($image1);
				if (!empty($mouafak)) {
					$id_bons = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
					$image1 = $id_bons;
					$i = $i + 1 ;
				}else{
					$i = 1000000000 ;
				}
			}
			$_FILES['image']['name'] = $image1;
			$image = addslashes($_FILES['image']['tmp_name']) ;
			$image = file_get_contents($image);
			$image = base64_encode($image);

		    if (!empty($image)) {
		    	
            $config['upload_path'] = 'upload/images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
            $this->load->library('upload', $config);
            
                if ( !$this->upload->do_upload('image')){
            	  $error = array('error' => $this->upload->display_errors());
            	           echo $error;
		              }else{
                              $name = $_POST['name'];
                              $email = $_POST['email'];
                              $num = $_POST['num'];
                              $image = $_FILES['image']['name'];
                              
                             $query = $this->Model->insert_profil($name,$email,$num,$image);
                             	
                             if ($query = TRUE) {
                             	redirect(base_url().'index','refresh');
                             }
		              }
		          }
			}else{
				redirect(base_url().'registre?id=1','refresh');
			}
           
		}
		
	}
	public function add_marque()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$this->load->model('Model');
		if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$query = $this->Model->add_marque($name);
				redirect(base_url().'marques','refresh');
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function add_clien()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (isset($_POST['radio'])) {
			    $name = $_POST['name'];
			    $adress = $_POST['adress'];
			    $num = $_POST['num'];
			    $this->load->model('Model');
			    $query = $this->Model->add_clien($name,$adress,$num);
				    redirect(base_url().'clien','refresh');
			
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function edit_clien()
	{
		if ($this->session->userdata('type') == 'Gérant') {
				if (!empty($_POST['id'])) {
					$id = $_POST['id'];
				
				$this->load->model('Model');
		    $result = $this->Model->get_clien_by_id($id);
		    foreach ($result as $row) {
		    if (!empty($_POST['name'])) {
		    	$name = $_POST['name'];
		    }else{
                $name = $row->name;
		    }
		    if (!empty($_POST['adress'])) {
		    	$adress = $_POST['adress'];
		    }else{
                $adress = $row->email;
		    }
		    if (!empty($_POST['num'])) {
		    	$num = $_POST['num'];
		    }else{
                $num = $row->num; 
		    } 
			 $query = $this->Model->edit_clien($name,$adress,$num,$id);
				redirect(base_url().'clien','refresh');
		  }
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function add_four()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (isset($_POST['name'])) {
				$this->load->model('Model');
			$name = $_POST['name'];
			$email = $_POST['adress'];
			$num = $_POST['num'];
			$check = $this->Model->check_four($num);
			if (!empty($check)) {
				redirect(base_url().'fournisseur?id=1','refresh');
			}else{
				$this->load->model('Model');
			$query = $this->Model->add_four($name,$email,$num);
				redirect(base_url().'fournisseur','refresh');
			}
			
			
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function edit_four()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($_POST['id'])) {
				  $id = $_POST['id'];
				  $this->load->model('Model');
			      $result = $this->Model->get_four_by_id($id);
		        foreach ($result as $row) {
		          if (!empty($_POST['name'])) {
		          	$name = $_POST['name'];
		          }else{
                      $name = $row->name;
		          }
		          if (!empty($_POST['adress'])) {
		          	$email = $_POST['adress'];
		          }else{
                      $email = $row->email;
		          }
		          if (!empty($_POST['num'])) {
		          	$num = $_POST['num'];
		          }else{
                      $num = $row->num; 
		          } 
		        }
				$this->load->model('Model');
			     $query = $this->Model->edit_four($name,$email,$num,$id);
				redirect(base_url().'fournisseur','refresh');
			}else{
				redirect(base_url() . 'fournisseur','refresh');
			}
		}else{
			redirect(base_url() . 'index','refresh');
		}	
	}
	public function delete_clien()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($_GET['id'])) {
			$id = $_GET['id'];
			$this->load->model('Model');
			$query = $this->Model->delete_clien($id);
			if ($query = TRUE) {
				redirect(base_url().'clien','refresh');
			}
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function delete_entrer()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($_GET['id'])) {
			$id = $_GET['id'];
			$this->load->model('Model');
			$query = $this->Model->delete_entrer($id);
			if ($query = TRUE) {
				redirect(base_url().'entrer','refresh');
			}
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function delete_four()
	{
		if ($this->session->userdata('type') == 'Gérant') {
				if (!empty($_GET['id'])) {
			$id = $_GET['id'];
			$this->load->model('Model');
			$query = $this->Model->delete_four($id);
			if ($query = TRUE) {
				redirect(base_url().'fournisseur','refresh');
			}
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
	
	}
	
	public function delete_cat()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($_GET['id'])) {
			$id = $_GET['id'];
			$this->load->model('Model');
			$query = $this->Model->delete_cat($id);
			if ($query = TRUE) {
				redirect(base_url().'Categorie','refresh');
			}else{
				echo 'salam';
			}
		}else{
			echo 'salamat';
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function delete_marque()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($_GET['id'])) {
			$id = $_GET['id'];
			$this->load->model('Model');
			$query = $this->Model->delete_marque($id);
			if ($query = TRUE) {
				redirect(base_url().'marques','refresh');
			}
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function searsh1()
	{
		if (!empty($this->input->post('searsh'))) {
			$réf = $this->input->post('searsh') ;
			$this->load->model('Model');
		   $res2 = $this->Model->cat($réf);
		   $res1 = $this->Model->ref($réf);
		   $res = $res1+$res2;
		    if (!empty($res)) {
		    	$put = '<select id="réf" name="réf" class="form-control" required="">';
		    	foreach ($res as $row) {
		    	$put .= '<option value="'.$row->name.'">'.$row->name.'</option>' ;
                   }
                  $put .= '</select>';
		    }
		    echo $put ;
		}
		
	}
	public function searsh2()
	{
		if (!empty($this->input->post('searsh'))) {
			$réf = $this->input->post('searsh') ;
			$this->load->model('Model');
		   $res2 = $this->Model->cat($réf);
		   $res1 = $this->Model->ref($réf);
		   $res3 = $this->Model->cat1($réf);
		   $res4 = $this->Model->marque($réf);
		   $res = $res1+$res2+$res3+$res4;
		    if (!empty($res)) {
		    	$put = '<div class="row">';
		    	foreach ($res as $row) {
		    	$put .= '<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<article class="col-item">
										<div class="photo">
											<div class="options" >';
				$put .= '<a href="detail?id='. $row->id .'" class="font-18 txt-black mr-10 pull-left"><i class="zmdi zmdi-edit"></i></a><a href="#" onclick="mydelete('. $row->id .')" class="font-18 txt-black pull-left sa-warning"><i class="zmdi zmdi-close"></i></a>
											</div><a href="javascript:void(0);">';
				$put .= '<img  src="'.base_url().'upload/images/'.$row->image .'" height="200" alt="Product Image" /> </a></div><div class="info">';
				$put .= '<h6>'.$row->name .'</h6><div class="product-rating inline-block">
												<a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a><a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star-outline mr-0"></a>
											</div>
											<span class="head-font block text-warning font-16">$'. $row->prixs.'</span>' .$row->quantité. ' Pcs 
										</div>
									</article>
								</div>
							</div>	
						</div>	
					</div>	' ;
                   }
                   $put .= '</div>';
                    echo $put ;
		    }
		   
		}
	}
	public function detail()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
			if (isset($_GET['id'])) {
				$error = '';
				$error1 = '';
			$id = $_GET['id'];
            if (!empty($_GET['error'])) {
            	if ($_GET['error'] = '1') {
            		$error = 'this name is already existe';
            	}
            	if ($_GET['error'] = '2') {
            		$error1 = 'this reférence is already existe';
            	}
            }
            $data['error'] = $error;
            $data['error1'] = $error1;
			$this->load->model('Model');
			$data['res'] = $this->Model->get_pro_by_id($id);
			$data['query'] = $this->Model->catégorie();
		    $data['query1'] = $this->Model->marques();
		    $data['four'] = $this->Model->four();
			$this->load->view('product_detail.php', $data);
        }
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function delete_product()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($this->input->post('id'))) {
			$id = $this->input->post('id') ;
			$this->load->model('Model');
			$query = $this->Model->delete_product($id);
			
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function upload_pro()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$this->load->model('Model');
			$error = '';
			$error1 = '';
			$image = '';
			$image1 = rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
			if (isset($_POST['sub'])) {
                if (!empty($_FILES['image']['tmp_name'])) {
                	/*$_FILES['image']['name'] = str_replace(" ","_",$_FILES['image']['name']);
                	$image1 = $_FILES['image']['name'];*/
			for ($i=0; $i < 1000000000; $i++) { 
				$mouafak = $this->Model->get_pro_by_image($image1);
				if (!empty($mouafak)) {
					$image1 =rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
					$i = $i + 1 ;
				}else{
					$i = 1000000000 ;
				}
			}
			$_FILES['image']['name'] = $image1;
					$image = addslashes($_FILES['image']['tmp_name']) ;
			        $image = file_get_contents($image);
			        $image = base64_encode($image);

		         if (!empty($image)) {
		    	
            $config['upload_path'] = 'upload/images';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
           
            $this->load->library('upload', $config);
            
                if ( !$this->upload->do_upload('image')){
            	  $error = array('error' => $this->upload->display_errors());
            	          
		        }else{
                   $name = 'image';
			       $id = $_GET['id'];
			       $name1 = $_FILES['image']['name'];
			        $this->load->model('Model');
		        $query = $this->Model->upload_pro($id,$name,$name1);
                      }
                  }
		    }
				if (!empty($_POST['name'])) {
				   $name = 'name';
			       $id = $_GET['id'];
			       $name1 = $_POST['name'];
			       $this->load->model('Model');
			       $query1 = $this->Model->check_name($name1);
			       if (!empty($query1)) {
			       	redirect(base_url().'detail?error=1&id='.$id ,'refresh');
			       }else{
			       	$this->load->model('Model');
		            $query = $this->Model->upload_pro($id,$name,$name1);
			       }
			    
				}
				/*if (!empty($_POST['quantité'])) {
				   $name = 'quantité';
			       $id = $_GET['id'];
			       $name1 = $_POST['quantité'];
			       $this->load->model('Model');
			       $query1 = $this->Model->check_name($name1);
			       if (!empty($query1)) {
			       	redirect(base_url().'detail?error=1&id='.$id ,'refresh');
			       }else{
			       	$this->load->model('Model');
		            $query = $this->Model->upload_pro($id,$name,$name1);
			       }
				}*/
              if (!empty($_POST['quantité'])) {
				   $name = 'quantité';
			       $id = $_GET['id'];
			       $name1 = $_POST['quantité'];
			       $this->load->model('Model');
			       $query1 = $this->Model->check_name($name1);
			       if (!empty($query1)) {
			       	redirect(base_url().'detail?error=1&id='.$id ,'refresh');
			       }else{
			       	$this->load->model('Model');
                     $get = $this->Model->get_pro_by_id($id);
                       foreach ($get as $key) {
					        $name1 = $key->quantité + $_POST['quantité'];
				       }
		            $query = $this->Model->upload_pro($id,$name,$name1);
			       }
				}
				if (!empty($_POST['réf'])) {
				   $name = 'réf';
			       $id = $_GET['id'];
			       $name1 = $_POST['réf'];
			       $this->load->model('Model');
                   $query2 = $this->Model->check_réf($name1);
                   if (!empty($query2)) {
			       	redirect(base_url().'detail?error=2&id='.$id  ,'refresh');
			       }else{
			       	$this->load->model('Model');
		        $query = $this->Model->upload_pro($id,$name,$name1);
			       }
			    
				}
				if (!empty($_POST['cat'])) {
				   $name = 'cat';
			       $id = $_GET['id'];
			       $name1 = $_POST['cat'];
			    $this->load->model('Model');
		        $query = $this->Model->upload_pro($id,$name,$name1);
				}
				if (!empty($_POST['marque'])) {
				   $name = 'marque';
			       $id = $_GET['id'];
			       $name1 = $_POST['marque'];
			    $this->load->model('Model');
		        $query = $this->Model->upload_pro($id,$name,$name1);
				}
				if (!empty($_POST['prixe'])) {
				   $name = 'prixe';
			       $id = $_GET['id'];
			       $name1 = $_POST['prixe'];
			    $this->load->model('Model');
		        $query = $this->Model->upload_pro($id,$name,$name1);
				}
				if (!empty($_POST['prixs'])) {
				   $name = 'prixs';
			       $id = $_GET['id'];
			       $name1 = $_POST['prixs'];
			    $this->load->model('Model');
		        $query = $this->Model->upload_pro($id,$name,$name1);
				}
			
		if ($query = TRUE) {
			redirect(base_url().'detail?id='.$id ,'refresh');
		}
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	 public function out()
    {
    	if ($this->session->userdata('type') == 'Gérant' OR $this->session->userdata('type') == 'Administrateur') {
    		$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
			$error = '';
    	$error1 = '';
    	if (!empty($_GET['id'])) {
    		if ($_GET['id'] == '1') {
    		$error = 'produit untrouvable';
    	    }
    	}
    	/*if (!empty($_GET['id'])) {
    		if ($_GET['id'] == '3') {
    		$error = 'this reférence is already used';
    	    }
    	}*/
    	if (!empty($_GET['id'])) {
    		if ($_GET['id'] == '4') {
    		$error1 = "la quantité ne peut pas être 0";
    	    }
    		if ($_GET['id'] == '2') {
    		$error1 = 'dépasser le limite du stock';
    	    }
    	}
    	$data['error'] = $error;
    	$data['error1'] = $error1;
    	$this->load->model('Model');
    	$data['query'] = $this->Model->catégorie();
		$data['res'] = $this->Model->cliens();
		$data['res1'] = $this->Model->bon();
    	$this->load->view('out.php', $data);
		}else{
			redirect(base_url() . 'index','refresh');
		}
    	
    }
    public function salam()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($this->input->post('place'))) {
			$cat = $this->input->post('place') ;
			$this->load->model('Model');
			echo 'salam';
		    $res = $this->Model->get_pro_by_cat($cat);
		    if (!empty($res)) {
		    	$put = '<select id="réf" name="réf" onchange="salam()" class="form-control" data-placeholder="Choose a Category" tabindex="1"><option></option>';
                    foreach ($res as $row) {
                        $put .= '<option value="'.$row->name .'">'.$row->name.'</option>' ;
                             } 
                       $put .= '</select>';
                       echo $put ;
		    }
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
  public function salam1()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (!empty($this->input->post('place'))) {
			$cat = $this->input->post('place') ;
			$this->load->model('Model');
		    $res = $this->Model->get_pro_by_name($cat);
		    if (!empty($res)) {
		    	$put = '<label class="control-label"> Prix </label>';
                    foreach ($res as $row) {
                        $put .= '<input type="number" class="form-control" value="'. $row->prixs .'" disabled="">' ;
                             } 
                       echo $put ;
		    }
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function add_bon()
	{
		if ($this->session->userdata('type') == 'Gérant' OR $this->session->userdata('type') == 'Administrateur') {
			if (isset($_POST['sub'])) {
				$TVA = 0;
				$remise = 0;
				if ($_POST['quantité'] > 0) {
					
				$name = $_POST['réf'];
			$quantité = $_POST['quantité'];
			$this->load->model('Model');
			$query = $this->Model->get_pro_by_name($name);
			if (!empty($query)) {
				foreach ($query as $row) {
					if ($quantité > $row->quantité) {
						redirect(base_url().'out?id=2','refresh');
					}else{
					$prixs = $row->prixs ;
					$prixe = $row->prixe ;
					$name = $row->name ;
					$cat = $row->cat ;
					$marque = $row->marque ;
					$réf = $row->réf ;
					$image = $row->image;
				}
                  if (!empty($_POST['nprix'])) {
						$prixs = $_POST['nprix'];
					}
					$query = $this->Model->get_bon_by_name($name);
					if (!empty($query)) {
						redirect(base_url().'out?id=3','refresh');
					}
				          }
				}
				$query1 = $this->Model->insert_bon($prixs,$prixe,$réf,$marque,$quantité,$name,$cat,$image,$TVA,$remise);
				if ($query1 = TRUE) {
				redirect(base_url().'out','refresh');
				   }
			}else{
				redirect(base_url().'out?id=1','refresh');
			}	
				}else{
				redirect(base_url().'out?id=4','refresh');
			}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function delete_bon()
	{
		if ($this->session->userdata('type') == 'Gérant' OR $this->session->userdata('type') == 'Administrateur') {
			if (!empty($_GET['id'])) {
			$id = $_GET['id'];
			$this->load->model('Model');
			$query = $this->Model->delete_bon($id);
			if ($query = TRUE) {
				redirect(base_url().'out','refresh');
			}
		}
		}else{
			redirect(base_url() . 'out','refresh');
		}
		
	}
	public function Add_bons()
	{
		if ($this->session->userdata('type') == 'Gérant' OR $this->session->userdata('type') == 'Administrateur') {
			$clien = '-';
			$clien1 = '-';
			$this->load->model('Model');
			$res = $this->Model->get_bon();

			if (empty($res)) {
				redirect(base_url() . 'out','refresh');
			}
			if (!empty($_POST['clien'])) {
				$clien = $_POST['clien'];
			}
			if (!empty($_POST['clien1'])) {
				$clien1 = $_POST['clien1'];
			}
			$clien = $_POST['clien'];
			$total = $_POST['total'];
			$type = $_POST['type'];
			$id_bons = 1 ;
			$date = date('Y-m-d H:m:s');
			$montan = $_POST["mpay"];
            $dtsortie = $_POST["chekdt"];
            $nombank = $_POST["nbank"];
            $rip = $_POST["rip"];
            
            
            $query = $this->Model->bons();
			for ($i=0; $i < 1000000000; $i++) { 
				$mouafak = $this->Model->check_bons_by_id($id_bons);
				if (!empty($mouafak)) {
					$id_bons = $id_bons + 1 ;
					$i = $i + 1 ;
				}else{
					$i = 1000000000 ;
				}
			}
			     foreach ($res as $row) {
                 	$prixs = $row->prixs;
                 	$prixe = $row->prixe;
                 	$ref = $row->réf;
                 	$quantité = $row->quantité;
                 	$name = $row->name;
                 	$marque = $row->marque;
                 	$image = $row->image;
                 	$TVA = $row->TVA ;
                 	$remise = $row->remise ;
                 	$query1 = $this->Model->insert_bonat($prixs,$prixe,$ref,$quantité,$name,$id_bons,$clien,$marque,$image,$TVA,$remise);
                 } 

			$query = $this->Model->insert_bons($clien,$total,$date,$id_bons,$clien1,$type,$montan,$dtsortie,$nombank,$rip);
			if ($query1 = TRUE) {
				redirect(base_url().'imprime?id='.$id_bons,'refresh');
				}else{
					
				}
		
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function imprime()
	{
		if ($this->session->userdata('type') == 'Gérant' OR $this->session->userdata('type') == 'Administrateur') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		$res = $this->Model->get_bon();
		$res1 = $this->Model->get_all_products();
		$id = $_GET['id'];
		foreach ($res as $row) {
             $réf = $row->réf ;
             $quantité = $row->quantité ;
			foreach ($res1 as $row1) {
				$réf1 = $row1->réf ;
                $quantité1 = $row1->quantité ;
				if ($réf == $réf1) {
					$quantité2 = $quantité1 - $quantité;
					$query = $this->Model->edite_quantité($quantité2,$réf);
				}
			}
		}
		$query5 = $this->Model->get_bons_by_id($id);
		foreach ($query5 as $key5) {
			//$date = explode("-",$key5->date);
			$date = $key5->date;
			$clien = $key5->clien;
			$clien1 = $key5->clien1;
			$type = $key5->type; 
            $mtn =$key5->montant_paye;
		}
        $data['clien'] = $this->Model->get_clien_by_name($clien);
        $data['clien1'] = $clien1;
        $data['type'] = $type;
		$data['id'] = $id;
        $data['date'] = $date ;
		$data['res'] = $res ;
		$data['query5'] = $query5 ;
		$data['mtn'] = $mtn ;
		$this->load->view('imprime.php',$data);
		$query = $this->Model->delete();
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
				   
	}
	public function imprime1()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		if (!empty($_GET['id'])) {
		$id = $_GET['id'];
		$res = $this->Model->get_bonat_by_id($id);
		foreach ($res as $key) {
			$cat = $key->ref;
		}
		$data['cat'] = $this->Model->get_pro_by_réf($cat);
		$query5 = $this->Model->get_bons_by_id($id);
		foreach ($query5 as $key5) {
			//$date = explode("-",$key5->date);
			$date = $key5->date;
			$clien = $key5->clien;
			$clien1 = $key5->clien1;
			$type = $key5->type; 
		}
			$data['clien'] = $this->Model->get_clien_by_name($clien);
             $data['clien1'] = $clien1;
             $data['type'] = $type;
		$data['id'] = $id;
		$data['clien'] = $this->Model->get_clien_by_name($clien);
		$data['query5'] = $query5;
		$data['date'] = $date[0];
		$data['res'] = $res ;
		$this->load->view('imprime1.php',$data);
		}
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
				   
	}
	public function entrer()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		$data['res'] = $this->Model->entrer();
		$this->load->view('entrer.php', $data);

		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
		
	}
	public function sortir()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		$data['res'] = $this->Model->bons();
		$this->load->view('sortir.php', $data);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function facture()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		if (!empty($_GET['id'])) {
			$id_bons = $_GET['id'];
			$data['id'] = $id_bons;
			$data['res'] = $this->Model->get_bonat_by_id($id_bons);
			$this->load->view('facture.php', $data);
		}
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function users()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			$num10 = 0;
    	    $this->load->model('Model');
			$bons = $this->Model->bons();
			$date = date('Y-m-d');
			foreach ($bons as $key) {
				$date1 = explode(" ",$key->date);
				if ($date1[0] == $date) {
					$num10 = $num10+1;
				}
			}
			
		    $res10 = $this->Model->profil();
		    $data['res10'] = $res10;
			$data['bons'] = $bons;
          $data['num10'] = $num10;
		$data['res1'] = $this->Model->users();
		$this->load->view('users.php', $data);
		}elseif ($this->session->userdata('type') == 'Administrateur') {
		    			        redirect(base_url().'out','refresh');
		    			}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function add_user()
	{
		if ($this->session->userdata('type') == 'Gérant') {
			if (isset($_POST['name'])) {
			$name = $_POST['name'];
			$pass = $_POST['pass'];
			$type = $_POST['type'];
			$this->load->model('Model');
			$query = $this->Model->add_user($name,$pass,$type);
				redirect(base_url().'users','refresh');
			
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
		
	}
	public function delete_user()
	{
		if ($this->session->userdata('type') == 'Gérant') {
				if (!empty($_GET['id'])) {
			$id = $_GET['id'];
			$this->load->model('Model');
			$query = $this->Model->delete_user($id);
			if ($query = TRUE) {
				redirect(base_url().'users','refresh');
			}
		}
		}else{
			redirect(base_url() . 'index','refresh');
		}
	
	}
	public function date()
	{
		if (!empty($this->input->post('date1'))) {
			$date1 = $this->input->post('date1') ;
			$date2 = $this->input->post('date2') ;
			$this->load->model('Model');
			$rba7 = 0;
			$total1 = 0;
			$date1 = explode('-', $date1);
			$date1 = $date1[0].$date1[1].$date1[2];
			$date2 = explode('-', $date2);
			$date2 = $date2[0].$date2[1].$date2[2];
			$query = $this->Model->bons();
			$put = '<table class="table display responsive product-overview mb-30" id="myTable">
												<thead>
													<tr>
														<th>Clien</th>
														<th>Name</th>
														<th>Image</th>
														<th>Reference</th>
														<th>Quantité</th>
														<th>Prix</th>
														<th>Marque</th>
													</tr>
												</thead>
												<tbody>';
			if ($date1>$date2) {
				
				foreach ($query as $val) {
					
					$date = $val->date;
					$date = explode('-', $date);
			        $date = $date[0].$date[1].$date[2];
			        if ($date1>$date) {
			        	if ($date>$date2) {
			        		$id = $val->id_bons;
			        		$vol = $this->Model->get_bonat_by_id($id);
			        		foreach ($vol as $val1) {
			        			$put .= '<tr><td class="txt-dark">'.$val1->clien. '</td>
									<td class="txt-dark">' .$val1->name. '</td>
									<td><img src="data:image;base64,'.$val1->image.'" alt="iMac" width="80"></td>
									<td>'.$val1->ref.'</td>
									<td>'.$val1->quantité.'</td>
									<td>'.$val1->prixs.'</td>
									<td>'.$val1->marque.'</td>
													</tr>';
			        		}
						}
			        }
                       
					}
			}else{
				foreach ($query as $val) {
					
					$date = $val->date;
					$date = explode('-', $date);
			        $date = $date[0].$date[1].$date[2];
			        if ($date2>=$date) {
			        	if ($date>=$date1) {
			        			$id = $val->id_bons;
			        		$vol = $this->Model->get_bonat_by_id($id);
			        		foreach ($vol as $val1) {
			        			$put .= '<tr><td class="txt-dark">'.$val1->clien. '</td>
									<td class="txt-dark">' .$val1->name. '</td>
									<td><img src="data:image;base64,'.$val1->image.'" alt="iMac" width="80"></td>
									<td>'.$val1->ref.'</td>
									<td>'.$val1->quantité.'</td>
									<td>'.$val1->prixs.'</td>
									<td>'.$val1->marque.'</td>
													</tr>';
			        		}
							
			        	}
			        }
			      
					} 
			}
			
			echo $put ;
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
			        if ($date1>=$date) {
			        	
			        	if ($date>=$date2) {
			        		$re = $re+1;
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
			}else{
				foreach ($query as $val) {
					$date = $val->date;
					$date = explode('-', $date);
			        $date = $date[0].$date[1].$date[2];
			        if ($date2>=$date) {
			        	if ($date>=$date1) {
			        		$re = $re+1;
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
			echo $put ;
		}
	}
	public function date3()
	{
		if (!empty($this->input->post('date1'))) {
			$date1 = $this->input->post('date1') ;
			$date2 = $this->input->post('date2') ;
			$this->load->model('Model');
			$rba7 = 0;
			$total1 = 0;
			$date1 = explode('-', $date1);
			$date1 = $date1[0].$date1[1].$date1[2];
			$date2 = explode('-', $date2);
			$date2 = $date2[0].$date2[1].$date2[2];
			$query = $this->Model->bons();
			 $put = '';
			if ($date1>$date2) {
				
				foreach ($query as $val) {
					
					$date = $val->date;
					$date = explode(' ', $date);
					$date = explode('-', $date[0]);
			        $date = $date[0].$date[1].$date[2];
			       
			        if ($date1>=$date) {
			        	if ($date>=$date2) {
			        		$total1 = $total1+$val->total;
							$put .= '<tr><td class="txt-dark">'.$val->clien. '</td>
									<td class="txt-dark">' .$val->date. '</td>
									<td>'.$val->total.'</td>
									<td>'.$val->remise.'%</td>
									<td><a href="facture?id='.$val->id_bons.'">FACTURE</a></td>
													</tr>';
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
			}else{
				foreach ($query as $val) {
					
					$date = $val->date;
					$date = explode(' ', $date);
					$date = explode('-', $date[0]);
			        $date = $date[0].$date[1].$date[2];
			        if ($date2>=$date) {
			        	if ($date>=$date1) {
			        		$total1 = $total1+$val->total;
			        		$put .= '<tr><td class="txt-dark">'.$val->clien. '</td>
									<td class="txt-dark">' .$val->date. '</td>
									<td>'.$val->total.'$</td>
									<td>'.$val->remise.'%</td>
									<td><a href="facture?id='.$val->id_bons.'">FACTURE</a></td>
													</tr>';
													$id = $val->id_bons;
													$bonat = $this->Model->get_bonat_by_id($id);
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
			/*$put .= '<tr><td class="txt-dark" colspan="3"><center><h4>le total :</h4></center</td>
									<td><h4>'.$total1.'$</h4></td><td></td></tr>
									<tr><td class="txt-dark" colspan="3"><center><h3>les profits :</h3></center</td>
									<td><h2 style="color:red;">'.$rba7.'$</h2></td><td></td>
													</tr>';*/
													 
			echo $put ;
			
			
			/*
		   $res = $res1+$res2;
		    if (!empty($res)) {
		    	$put = '<select id="réf" name="réf" class="form-control" required="">';
		    	foreach ($res as $row) {
		    	$put .= '<option value="'.$row->name.'">'.$row->name.'</option>' ;
                   }
                  $put .= '</select>';
		    }
		    echo $put ;*/
		}
		
	}
	/*public function kaki()
	{
		if (!empty($_POST['name'])) {
			$number = $_POST['name'];
		}
			$this->load->library('Numbertowords');
		    $number1 = $this->Numbertowords->convert_number($number);
		    echo $number1 ;
		
	}
	public function kaki1()
	{
		$this->load->view('welcome_view.php');
		
	}*/
		public function kaki()
	{
		if (!empty($this->input->post('kaki'))) {
			$kaki = $this->input->post('kaki') ;
			$total = 0;
			$this->load->model('Model');
			 $pros = $this->Model->get_all_products();
			if ($kaki == 'tous') {
				foreach ($pros as $row) {
					$tot = $row->quantité*$row->prixe;
					$total = $total+$tot ;	
			}
			}else{
				foreach ($pros as $row) {
					if ($row->cat == $kaki) {
						$tot = $row->quantité*$row->prixe;
					$total = $total+$tot ;
					}
				}
			}

			echo $total.' DH' ;
			
			/*
		   $res = $res1+$res2;
		    if (!empty($res)) {
		    	$put = '<select id="réf" name="réf" class="form-control" required="">';
		    	foreach ($res as $row) {
		    	$put .= '<option value="'.$row->name.'">'.$row->name.'</option>' ;
                   }
                  $put .= '</select>';
		    }
		    echo $put ;*/
		}
		
	}
	public function logout()
		{
			$query = $this->session->unset_userdata('type');
			if ($query = TRUE) {
				redirect(base_url().'index','refresh');
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
	public function backup()
			{
				
				  $date = date('Y-m-d');
			      $this->load->dbutil();
				  $backup = $this->dbutil->backup();
				  $this->load->helper('file');
				  write_file('content/backup/my_db'. $date .'.sql.zip',$backup);
				  redirect(base_url('').'dashboard','refresh');
			}
	public function slm()
			{
				$salam =rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'_'.rand(11111111 , 99999999).'.jpg';
				echo $salam ;
			}
		
}
