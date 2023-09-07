<?php
class Model{
    private $data;

    public function __construct() {
        
    }

    public function Display_ScreenV() {
        $this->data = "Video/saigon.mp4";
        echo "<video src='$this->data' autoplay muted loop></video>";
    }
    public function Get_head_content(){
        require "PHP/model/String/content.php";
        return $content;
    }

    public function Get_head_top(){
        require "PHP/model/String/content.php";
        return $htop;
    }


    public function Get_nice_place(){
        require "PHP/model/String/content.php";
        return $NiceP;
    }
}
?>
