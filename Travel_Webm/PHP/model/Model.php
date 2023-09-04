<?php
class Model{
    private $vidScr;

    public function __construct() {
    }

    public function Display_ScreenV() {
        $this->vidScr = "Video/saigon.mp4";
        echo "<video src='$this->vidScr' autoplay muted loop></video>";
    }
}
?>
