<?php

class Services extends Controller
{

    public $service_model = null;

    function __construct(){


    }

    public function index()
    {
        // getting all songs and amount of songs
        //$songs = $this->model->getAllSongs();
        //$amount_of_songs = $this->model->getAmountOfSongs();

        //$service_model = $this->loadModel('Service');
        //$service_list =  $this->service->gelAllList();

        require APP . 'view/_templates/header.php';
        require APP . 'view/services/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function add()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/services/add.php';
        require APP . 'view/_templates/footer.php';

    }

    public function edit()
    {

        require APP . 'view/_templates/header.php';
        require APP . 'view/services/edit.php';
        require APP . 'view/_templates/footer.php';

    }

}
