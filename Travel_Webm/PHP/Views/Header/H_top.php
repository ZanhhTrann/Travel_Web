<?php 
require "PHP/model/String/Header/hcontent.php";
$top = $htop;
$leng = count($top);
echo '<div class="header-top">
    <i class="fas fa-bars"></i>
    <ul>';
for ($i = 0; $i < $leng; $i++) {
    echo '<li style="--x:'.$i.';"><a href="">'.$top[$i].'</a></li>';
}
echo '</ul>
</div>';
?>