<?php

class MapConfig extends Controller
{

    public function index()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/mapconfig/index.php';
        require APP . 'view/_templates/footer.php';
    }


}
