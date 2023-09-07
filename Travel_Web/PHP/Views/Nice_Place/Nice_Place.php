<?php 
echo '<section class="nice-place">
<div class="container">
    <h1>Địa điểm nổi bật</h1>
    <div class="nice-place-content row">';
    for($i=0;$i<count(array_column($NiceP, 0));$i++){
        echo'
            <div class="nice-place-item">
                <div class="nice-place-img">
                    <img src="'.$NiceP[$i][0].'">
                </div>
                <div class="nice-place-text">
                    <h2>'.$NiceP[$i][1].'</h2>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <p>'.$NiceP[$i][2].'</p>
                    <button class="btn">Mua tour</button>
                </div>
            </div>';
            
    }
        echo'
        </div>
    </div>
</section>';
          
?>