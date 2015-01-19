<?php

class Services extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadModel('Service');
    }


    public function index()
    {
        $service_list =  $this->Service->getAllList();

        require APP . 'view/_templates/header.php';
        require APP . 'view/services/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addService()
    {
        if (isset($_POST["ggm_service_submit"])) {
            $this->Service->addService($_POST["ggm_service_name"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'services/index');
    }


    public function add()
    {
        require APP . 'view/_templates/header.php';
        require APP . 'view/services/add.php';
        require APP . 'view/_templates/footer.php';

    }


    public function edit($id)
    {

        if(isset($id)){
            $service = $this->Service-> getService($id);

            require APP . 'view/_templates/header.php';
            require APP . 'view/services/edit.php';
            require APP . 'view/_templates/footer.php';

        }else{
            header('location: ' . URL . 'services/index');

        }

    }

}
