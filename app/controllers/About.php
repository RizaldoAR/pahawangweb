<?php

class About
{
    public function index($nama = "", $pekerjaan = "")
    {
        echo $nama . ' ' . $pekerjaan;
    }
    public function page()
    {
        echo 'controller/about/page';
    }
}
