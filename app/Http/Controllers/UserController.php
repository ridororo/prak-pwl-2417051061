<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use App\Models\Kelas;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public $userModel;
    public $kelasModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // Method untuk menampilkan daftar user
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    // Method untuk menampilkan form tambah user
    public function create()
    {
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    // Method untuk memproses simpan data user
    public function store(Request $request)
    {
        $this->userModel->create([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }
}