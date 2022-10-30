<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Penulis_model extends Model
{
    protected $table = 'penulis';
     
    public function getPenulis($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_penulis' => $id]);
        }   
    }

    public function savePenulis($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editPenulis($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_penulis', $id);
        return $builder->update($data);
    }


    public function hapusPenulis($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_penulis' => $id]);
    }
 
}