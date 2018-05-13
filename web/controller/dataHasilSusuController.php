<?php

class dataHasilSusuController
{
    function __construct()
    {
    }

    public function addData()
    {
        $tanggal = $_POST['tanggal'];
        $idSapi = $_POST['idSapi'];
        $jumlah = $_POST['jumlah'];
        $hasil = ModelHasilSusu::insertData($tanggal, $idSapi, $jumlah);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=hasilSusuHarian');
    }

    public function editData()
    {
        $id = $_POST['id'];
        $tanggal = $_POST['tanggal'];
        $jumlahTerjual = $_POST['jumlahTerjual'];
        $hasil = ModelPenjualan::updateData($id, $tanggal, $jumlahTerjual);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=hasilSusuHarian');
    }

    public function deleteData(){
        $id = $_GET['id'];
        $hasil = ModelHasilSusu::deleteData($id);
        header('Location: http://localhost/KEPINGAN/?c=halaman&f=hasilSusuHarian');

    }
}
