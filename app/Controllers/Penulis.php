<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Penulis_model;

class Penulis extends Controller
{
    public function index()
    {
        $model = new Penulis_model;
        $data['title']     = 'Data Penulis';
        $data['getPenulis'] = $model->getPenulis();
        echo view('Penulis/Penulis_view', $data);
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Data Penulis';
        echo view('Penulis/tambah_view', $data);
    }

    public function add()
    {
        $model = new Penulis_model;
        $data = array(
            'nama_penulis' => $this->request->getPost('nama_penulis'),
            'alamat'         => $this->request->getPost('alamat'),
            'instagram'  => $this->request->getPost('instagram'),
            'facebook'  => $this->request->getPost('facebook'),
            'email'  => $this->request->getPost('email'),
        );
        $model->savePenulis($data);
    }

    public function edit($id)
    {
        $model = new Penulis_model;
        $getPenulis = $model->getPenulis($id)->getRow();
        if(isset($getPenulis))
        {
            $data['Penulis'] = $getPenulis;
            $data['title']  = 'Edit '.$getPenulis->judul_Penulis;

            echo view('header_view', $data);
            echo view('Penulis/edit_view', $data);
            echo view('footer_view', $data);
        }
    }

    public function update()
    {
        $model = new Penulis_model;
        $id = $this->request->getPost('id_Penulis');
        $data = array(
            'judul_Penulis' => $this->request->getPost('judul_Penulis'),
            'jenis_Penulis'         => $this->request->getPost('jenis_Penulis'),
            'penerbit'  => $this->request->getPost('penerbit'),
            'penulis'  => $this->request->getPost('penulis'),
        );
        $model->editPenulis($data,$id);
        echo '<script>
                alert("Sukses Edit Data Penulis");
                window.location="'.base_url('Penulis').'"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Penulis_model;
        $getPenulis = $model->getPenulis($id)->getRow();
        if(isset($getPenulis))
        {
            $model->hapusPenulis($id);
        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Penulis '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Penulis').'"
                </script>';
        }
    }
}