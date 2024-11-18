<?php

class ProgramStudiController{
    public function index(){
        require_once "Model/ProgramStudi.php";
        $model = new ProgramStudiModel();
        $data = $model->getAllProgramStudi();
        require_once "View/ProgramStudi_view.php";
    }
}
?>