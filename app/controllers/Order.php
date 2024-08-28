<?php

class Order extends Controller
{
    public function index($nama = "", $pekerjaan = "")
    {
        $data['judul'] = 'Order Package';
        $this->view('templates/header', $data);
        $this->view('orderForm/index');
        $this->view('templates/footer');
    }
    public function list()
    {
        $data['judul'] = 'Order List';
        $this->view('templates/header', $data);
        $this->view('orderList/index');
        $this->view('templates/footer');
    }
}
