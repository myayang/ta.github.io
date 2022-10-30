<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class Buku_model extends Model
{
    protected $table = 'buku';
     
    public function getBuku($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['id_buku' => $id]);
        }   
    }

    public function saveBuku($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editBuku($data,$id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('id_buku', $id);
        return $builder->update($data);
    }


    public function hapusBuku($id)
    {
        $builder = $this->db->table($this->table);
        return $builder->delete(['id_buku' => $id]);
    }
 
}