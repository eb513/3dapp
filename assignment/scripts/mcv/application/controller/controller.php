<?php
include './debug/ChromePhp.php';
ChromePhp::log('controller.php: Hello World');
ChromePhp::log($_SERVER);

class Controller{

    public $load;
    public $model;

    function __construct($pageURI = null)
    {
        $this->load = new Load();
        $this->model = new Model();

        $method = explode("-",$pageURI);
        if (count($method) == 1) {
            $this->$pageURI();
        }else {
            $this->$method[0]($method[1]);
        }
    }

    function apiCreateTable(){
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }

    function apiInsertData(){
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }

    function apiGetData($toLoad){
        $data = $this->model->dbGetData($toLoad);
        $this->load->view('view3DModel', $data);
    }
    function apiGetDescription($toLoad){
        $data = $this->model->dbGetData($toLoad);
        $this->load->view('view3DDescription', $data);
    }
}

?>