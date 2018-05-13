<?php

class dataPenjualanController
{
    function __construct()
    {
    }

    public function addData()
    {
        $tanggal = $_POST['tanggal'];
        $jumlahTerjual = $_POST['jumlahTerjual'];
        $hasil = ModelPenjualan::insertData($tanggal,$jumlahTerjual);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=dataPenjualan');
    }

    public function editData()
    {
        $id = $_POST['id'];
        $tanggal = $_POST['tanggal'];
        $jumlahTerjual = $_POST['jumlahTerjual'];
        $hasil = ModelPenjualan::updateData($id, $tanggal, $jumlahTerjual);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=dataPenjualan');
    }

    public function deleteData(){
        $id = $_GET['id'];
        $hasil = ModelPenjualan::deleteData($id);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=dataPenjualan');

    }
}
