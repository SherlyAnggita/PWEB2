<?php
require_once "Controller/MahasiswaController.php";
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? $_GET['id'] : null;

$app = new MahasiswaController();
if($action == 'show' && $id)
{
    $app->show($id);
}else{
    $app->index();
}
?>



