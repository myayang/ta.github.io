<?php namespace App\Models;
use CodeIgniter\Model;

class Login_model extends Model
{
	public function get_data($username, $password)
	{
      return $this->db->table('user')
      ->where(array('username' => $username, 'password' => $password))
      ->get()->getRowArray();
	}

    public function saveUser($data)
    {
        $builder = $this->db->table('user');
        return $builder->insert($data);
    }

	//--------------------------------------------------------------------

}