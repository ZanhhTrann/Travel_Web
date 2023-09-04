<?php
require 'PHP/model/video/MV_Screen.php';
class HomeControler {
    private $model;
    public function __construct() {
        $this->model = new MV_Screen();
    }

    public function displayHomeView() {
        include 'PHP/View/Header/H_top.php';
        $this->model->Display_ScreenV(); // Gọi phương thức từ đối tượng MV_Screen
        include 'PHP/View/Header/H_content.php';
        include 'PHP/View/Nice_Place/Nice_Place.php';
        include 'PHP/View/About/About.php';
    }
}
?>
