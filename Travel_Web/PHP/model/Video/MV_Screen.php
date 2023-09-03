<?php
class MV_Screen {
    private $vidScr;

    public function __construct() {
        $this->vidScr = "Video/saigon.mp4";
    }

    public function Display_ScreenV() {
        echo "<video src='$this->vidScr' autoplay muted loop></video>";
    }
}
?>
