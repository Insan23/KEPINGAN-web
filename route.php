<?php
function call($controller, $action)
{
    require_once('web/controller/' . $controller . '.php');

    switch ($controller) {
        case 'halaman':
            require_once 'web/model/Peternakan.php';
            require_once 'web/model/ModelDataSapi.php';
            require_once 'web/model/ModelHasilSusu.php';
            require_once 'web/model/ModelPenjualan.php';
            $controller = new halaman();
            break;
        case 'penjualan':
            require_once 'web/model/Peternakan.php';
            $controller = new penjualan();
            break;
        case 'dataSapiController':
            require_once 'web/model/ModelDataSapi.php';
            $controller = new dataSapiController();
            break;
        case 'dataPenjualanController':
//            require_once 'web/model/ModelHasilSusu.php';
            require_once 'web/model/ModelPenjualan.php';
            $controller = new dataPenjualanController();
            break;
        case 'dataHasilSusuController':
            require_once 'web/model/ModelHasilSusu.php';
            $controller = new dataHasilSusuController();
            break;
        case 'peramalanController':
            require_once 'web/model/Peternakan.php';
            require_once 'web/model/ModelDataSapi.php';
            require_once 'web/model/ModelHasilSusu.php';
            require_once 'web/model/ModelPenjualan.php';
            $controller = new peramalanController();
            break;
        default:
            //TODO: buat aksi bila jalur yang dituju tidak tersedia
            break;
    }
    $controller->{$action}();
}

call($controller, $action);

?>
