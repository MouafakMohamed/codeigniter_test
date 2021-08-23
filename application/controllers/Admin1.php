<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin1 extends CI_Controller
{
	
  public function __construct(){
   	parent::__construct();
       
   	   //$this->load->model('Model1');
    }
    public function dashboard_admin()
    {
      if (!empty($this->session->userdata('type'))) {
            $time = $this->session->userdata('time');
               if(time() - $time > 900) {  
                redirect(base_url().'logout','refresh');
               }
               $session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
        }
    if ($this->session->userdata('type') == 'Gérant') {
      $data['type'] = $this->session->userdata('type');
      $data['id'] = $this->session->userdata('id');
             $num10 = 0;
          $data['pro'] = $this->Model->get('produit');
          $data['SAV'] = $this->Model->get('sav');
          $data['four'] = $this->Model->get('fournisseur');
          $data['clien'] = $this->Model->get('cliens');
          $data['sortir'] = $this->Model->get('bons');
          $data['SAV1'] = $this->Model1->get('sav');
          $data['pro1'] = $this->Model1->get('produit');
          $data['four1'] = $this->Model1->get('fournisseur');
          $data['clien1'] = $this->Model1->get('cliens');
          $data['sortir1'] = $this->Model1->get('bons');
          $bons = $this->Model->get('bons');
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
          $this->load->view('dashboard_admin',$data);
      }elseif ($this->session->userdata('langue') == 'arabic') {
            $this->load->view('dashboard_admin',$data);
       }elseif ($this->session->userdata('langue') == 'english') {
            $this->load->view('dashboard.php',$data);
       }
    }
    }
   public function dipot()
    { 		
            $data['type'] = $this->session->userdata('type');
		     	  $data['id'] = $this->session->userdata('id');
    	      $time = $this->session->userdata('time');
               if(time() - $time > 900) {  
                redirect(base_url().'logout','refresh');
               }
               $session_data = array('time' => time() );
               $this->session->set_userdata($session_data);
               $data['sortir1'] = $this->Model1->get('bons');
               $data['sortir2'] = $this->Model->get('bons');
    	       $this->load->view('admin',$data);
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
	
}

?>