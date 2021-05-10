<?php

namespace App\Http\Controllers;

use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{

    public function __construct()
    {

        $this->MahasiswaModel = new MahasiswaModel();

    }

    public function index()
    {

        $data = [
            'mahasiswa' => $this->MahasiswaModel->get_all('mahasiswa'),
            'mahasiswa_details' => $this->MahasiswaModel->get_where('mahasiswa', ['id' => '2']),
        ];

        // var_dump($data['mahasiswa_details']);die();

        // dd($data['mahasiswa_details']);

        return view('v_home', $data);

    }

    public function delete($id)
    {

        $this->MahasiswaModel->delete_where('mahasiswa', ['id' => $id]);

        return redirect()->route('home')->with('pesan', 'Berhasil dihapus!');

    }
}