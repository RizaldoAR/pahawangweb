<?php


// Controller Order

class Order extends Controller
{
    public function index($nama = "", $pekerjaan = "")
    {
        // Data untuk Header dan Navbar
        $data['judul'] = 'Order Package';
        $data['home'] = '';
        $data['order'] = 'active';
        $data['list'] = '';
        // Menampilkan view secara template
        $this->view('templates/header', $data);
        $this->view('orderForm/index');
        $this->view('templates/footer');
    }
    public function list()
    {
        // Data untuk Header dan Navbar
        $data['judul'] = 'Order List';
        $data['home'] = '';
        $data['order'] = '';
        $data['list'] = 'active';


        // Data dari Model
        $data['orderList'] = $this->model('List_model')->getList();


        // Menampilkan view secara template
        $this->view('templates/header', $data);
        $this->view('orderList/index', $data);
        $this->view('templates/footer');
    }
}
