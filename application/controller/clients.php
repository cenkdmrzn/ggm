<?php

class Clients extends Controller
{

    public function index()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/clients/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function add()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/clients/add.php';
        require APP . 'view/_templates/footer.php';

    }

    public function edit()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/clients/edit.php';
        require APP . 'view/_templates/footer.php';

    }

}
