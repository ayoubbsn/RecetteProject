<?php

class SlideShow
{
  public static function Render($imagePath)
  {
    $imagePath = substr($imagePath, 1);
    $imagePath = "../../Controllers".$imagePath;
    echo '
          <div class="container">
    
          <div class="mySlides">
              <img src='.$imagePath.' style="height: 600px;width: 480px;">
          </div>
  
    
          <!-- Next and previous buttons -->
          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next" onclick="plusSlides(1)">&#10095;</a>
    
          <!-- Image text -->
          <div class="caption-container">
            <p id="caption">Image #1</p>
          </div>
        </div> 
        <script src="./js/slideshow.js"></script>
';
  }
}
