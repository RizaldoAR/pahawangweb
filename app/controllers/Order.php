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


    public function detail($id)
    {
        $data['judul'] = 'Order Detail';
        $data['home'] = '';
        $data['order'] = 'active';
        $data['list'] = '';


        $data['orderList'] = $this->model('List_model')->getOrderById($id);


        $this->view('templates/header', $data);
        $this->view('orderDetail/index', $data);
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

    public function tambah()
    {
        if ($this->model('List_model')->tambahDataOrder($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/order');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/order');
            exit;
        }
    }

    public function delete($id)
    {
        if ($this->model('List_model')->deleteDataOrder($id) > 0) {
            Flasher::setFlash('berhasil', 'terhapus', 'success');
            header('Location: ' . BASEURL . '/order/list');
            exit;
        } else {
            Flasher::setFlash('gagal', 'terhapus', 'danger');
            header('Location: ' . BASEURL . '/order/list');
            exit;
        }
    }

    public function edit()
    {


        if ($this->model('List_model')->editDataOrder($_POST) > 0) {
            Flasher::setFlash('berhasil', 'teredit', 'success');
            header('Location: ' . BASEURL . '/order');
            exit;
        } else {
            Flasher::setFlash('gagal', 'teredit', 'danger');
            header('Location: ' . BASEURL . '/order');
            exit;
        }
    }
}
