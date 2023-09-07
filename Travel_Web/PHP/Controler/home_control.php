<?php
require 'PHP/Model/Model.php';
class HomeControler {
    private $model;
    public function __construct() {
        $this->model = new Model();
    }

    public function displayHomeView() {
        $top = $this->model->Get_head_top();
        include 'PHP/Views/Header/H_top.php';
        $this->model->Display_ScreenV();
         // Gọi phương thức từ đối tượng MV_Screen
        $cont=$this->model->Get_head_content();
        //echo $cont[0];
        include 'PHP/Views/Header/H_content.php';
        $NiceP=$this->model->Get_nice_place();
        include 'PHP/Views/Nice_Place/Nice_Place.php';
        include 'PHP/Views/About/About.php';
    }
}
?>
