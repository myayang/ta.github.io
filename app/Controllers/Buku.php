<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Buku_model;

class Buku extends Controller
{
    public function index()
    {
        $model = new Buku_model;
        $data['title']     = 'Data Buku';
        $data['getBuku'] = $model->getBuku();
        echo view('header_view', $data);
        echo view('Buku_view', $data);
        echo view('footer_view', $data);
    }

    public function tambah()
    {
        $data['title']     = 'Tambah Data Buku';
        echo view('header_view', $data);
        echo view('tambah_view', $data);
        echo view('footer_view', $data);
    }

    public function add()
    {
        $model = new Buku_model;
        $data = array(
            'judul_buku' => $this->request->getPost('judul_buku'),
            'jenis_buku'         => $this->request->getPost('jenis_buku'),
            'penerbit'  => $this->request->getPost('penerbit'),
            'penulis'  => $this->request->getPost('penulis'),
        );
        $model->saveBuku($data);
        echo '<script>
                alert("Sukses Tambah Data Buku");
                window.location="'.base_url('Buku').'"
            </script>';

    }

    public function edit($id)
    {
        $model = new Buku_model;
        $getBuku = $model->getBuku($id)->getRow();
        if(isset($getBuku))
        {
            $data['Buku'] = $getBuku;
            $data['title']  = 'Edit '.$getBuku->judul_buku;

            echo view('header_view', $data);
            echo view('edit_view', $data);
            echo view('footer_view', $data);

        }else{

            echo '<script>
                    alert("ID Buku '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Buku').'"
                </script>';
        }
    }

    public function update()
    {
        $model = new Buku_model;
        $id = $this->request->getPost('id_buku');
        $data = array(
            'judul_buku' => $this->request->getPost('judul_buku'),
            'jenis_buku'         => $this->request->getPost('jenis_buku'),
            'penerbit'  => $this->request->getPost('penerbit'),
            'penulis'  => $this->request->getPost('penulis'),
        );
        $model->editBuku($data,$id);
        echo '<script>
                alert("Sukses Edit Data Buku");
                window.location="'.base_url('Buku').'"
            </script>';
    }

    public function hapus($id)
    {
        $model = new Buku_model;
        $getBuku = $model->getBuku($id)->getRow();
        if(isset($getBuku))
        {
            $model->hapusBuku($id);
            echo '<script>
                    alert("Hapus Data Buku Sukses");
                    window.location="'.base_url('buku').'"
                </script>';

        }else{

            echo '<script>
                    alert("Hapus Gagal !, ID Buku '.$id.' Tidak ditemukan");
                    window.location="'.base_url('Buku').'"
                </script>';
        }
    }

    public function upload()
    {
        $data['title']     = 'Upload Data Buku';
        echo view('header_view', $data);
        echo view('upload_view', $data);
        echo view('footer_view', $data);
    }


}