<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Buku_model;

class Berkas extends BaseController
{
	public function index()
	{
		//
	}

	public function create()
	{
		return view('upload_view');
	}

	public function save()
	{
		$berkas = new Buku_model();
		$dataBerkas = $this->request->getFile('berkas');
		$fileName = $dataBerkas->getRandomName();
		$berkas->insert([
			'cover' => $fileName,
			'file' => $fileName,
		]);
		$dataBerkas->move('uploads/berkas/', $fileName);
		session()->setFlashdata('success', 'Berkas Berhasil diupload');
		return redirect()->to(base_url('buku'));
	}

}