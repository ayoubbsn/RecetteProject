<?php 
class header{
    public static function Show(string $title, string $path)
    {
        echo "<html>
        <!DOCTYPE html>
        
        <head>
            <meta charset='UTF-8'>
            <link rel='stylesheet' href='./g-admin.css'>
        </head>
        
        <body>
            <div class='title-container'>
                    <p>$title</p>
                    <img src='$path' alt='' height='40px' width='40px'>
        
            </div>
        
        </body>
        
        </html>" ;
    }
}
?>