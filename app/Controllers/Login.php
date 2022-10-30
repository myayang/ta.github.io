<?php 

namespace App\Controllers;

use App\Models\Login_model;

class Login extends BaseController
{
	public function index()
	{
		return view('index');
   }
   
   public function login_action() 
   {
      $muser = new Login_model();

      $username = $this->request->getPost('username');
      $password = $this->request->getPost('password');

      $cek = $muser->get_data($username, $password);

      if (($cek['username'] == $username) && ($cek['password'] == $password))
      {
         session()->set('email', $cek['email']);
         session()->set('username', $cek['username']);
         session()->set('id_username', $cek['id_username']);
         return redirect()->to(base_url('buku'));
      } else {
         session()->setFlashdata('gagal', 'Username / Password salah');
         return redirect()->to(base_url('login'));
      }
   }

   public function logout() 
   {
      session()->destroy();
      return redirect()->to(base_url('login'));
   }

   public function register()
   {
        return view('register');
   }

   public function add()
   {
       $model = new Login_model;
       $data = array(
           'username' => $this->request->getPost('username'),
           'email'  => $this->request->getPost('email'),
           'password'         => $this->request->getPost('password'),

       );
       $model->saveUser($data);
       return view('index');
    }
	//--------------------------------------------------------------------

}