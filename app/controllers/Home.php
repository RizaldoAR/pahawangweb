<?php


// Controller Home

class Home extends Controller
{
    public function index()
    {
        // Data yang diteruskan ke header dan navbar
        $data['judul'] = 'Home';
        $data['home'] = 'active';
        $data['order'] = '';
        $data['list'] = '';


        // Menampilkan view secara template

        $data['package_list'] = $this->model('Home_model')->getPackage();

        $this->view('templates/header', $data);
        $this->view('home/home', $data);
        $this->view('templates/footer');
    }
}
