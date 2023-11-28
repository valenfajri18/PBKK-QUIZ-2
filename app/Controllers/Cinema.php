<?php 
namespace App\Controllers;
use App\Models\ListFilmModel;
use CodeIgniter\Controller;

class Cinema extends Controller
{
    public function index(){
        $ListFilmModel = new ListFilmModel();
        $data['ListFilm'] = $ListFilmModel->orderBy('idfilm', 'DESC')->findAll();
        return view('homepage', $data);
    }

    public function singleUser($id = null){
        $ListFilmModel = new ListFilmModel();
        $data['selectedfilm'] = $ListFilmModel->where('idfilm', $id)->first();
        return view('moviepage', $data);
    }

    public function order(){
        return view('orderpage');
    }

    public function create(){
        $data = [
            'title' => 'Upload Film'
        ];

        return view('create', $data);
    }

    public function add()
    {
        $ListFilmModel = new ListFilmModel();
        $data = array(
            'namafilm' => $this->request->getPost('namafilm'),
            'poster' => $this->request->getPost('poster'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'genre' => $this->request->getPost('genre'),
            'durasi' => $this->request->getPost('durasi')
        );
        $ListFilmModel->saveFilm($data);

        // $filePoster = $this->request->getFile('poster');
        // dd($filePoster);

        echo '<script>
                alert("Sukses Tambah Film");
                window.location="'.base_url('/').'"
            </script>';

    }

    // public function save(){
        
       
    //     $ListFilmModel->insert([
    //         'namafilm' => $this->request->getPost('namafilm'),
    //         'poster' => $this->request->getPost('poster'),
    //         'deskripsi' => $this->request->getPost('deskripsi'),
    //         'genre' => $this->request->getPost('genre'),
    //         'durasi' => $this->request->getPost('durasi')
    //     ]);
    //     return redirect('/');
       
        
    // }
}