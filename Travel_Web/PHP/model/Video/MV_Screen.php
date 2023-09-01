<?php
class MV_Screen {
    private $vidScr;

    public function __construct() {
        $this->vidScr = "video/saigon.mp4";
    }

    public function Display_ScreenV() {
        echo "<video src='$this->vidScr' autoplay muted loop></video>";
    }
}
?>
