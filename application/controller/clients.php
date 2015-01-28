<?php

class Clients extends Controller
{

    function __construct(){
        parent::__construct();
        $this->loadModel('Client');
    }


    public function index()
    {
        $client_list = $this->Client->getAllList();

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


    public function editClient($id)
    {

        if(isset($id)){
            $client = $this->Client->getClient($id);

            require APP . 'view/_templates/header.php';
            require APP . 'view/clients/edit.php';
            require APP . 'view/_templates/footer.php';

        }else{
            header('location: ' . URL . 'client/index');

        }

    }


    public function addClient()
    {
        if(isset($_POST["ggm_submit_client"])){
            $this->Client->addClient($_POST['ggm_client_name'], $_POST['ggm_client_password'], $_POST['ggm_client_email'],$_POST['ggm_client_website'], $_POST['ggm_client_type']);

        }

        header('location: ' . URL . 'clients/index');

    }


    public function updateClient()
    {
        if(isset($_POST['ggm_submit_client'])){
            $this->Client->updateClient($_POST['id'], $_POST['ggm_client_name'], $_POST['ggm_client_password'], $_POST['ggm_client_email'],$_POST['ggm_client_website'], $_POST['ggm_client_type']);
        }

        header('location: ' . URL . 'clients/index');
    }

}
