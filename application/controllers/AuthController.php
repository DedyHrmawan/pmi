<?php
class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User');
    }

    public function auth()
    {
        $data = $_POST;
        $user = $this->User->get(['filter' => ['email_admin' => $data['EMAIL_USER']]]);

        if($user != null){
            if($data['PASSWORD_USER'] == $user[0]->password){                          
                redirect('profil');
            }else{
                $this->session->set_flashdata('error_login', 'Email atau password salah!');  
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('error_login', 'User belum terdaftar!'); 
            redirect('login');
        }
    }    
}
