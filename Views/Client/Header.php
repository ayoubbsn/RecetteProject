<?php 
class Header{
    public static function Show()
    {
        echo "<html>
        <!DOCTYPE html>
        
        <head>
            <meta charset='UTF-8'>
            <link rel='stylesheet' href='./css/Common.css'>
        </head>
        
        <div class='navbar'>
        <a class='active' href='./Accueil.php'>Home</a>
        <a href='./News.php'> News</a>
        <a href='./ideeDeRecette.php'> Idées de recettes</a>
        <a href='./Healthy.php'> Healthy</a>
        <a href='./Saisons.php'> Saisons</a>
        <a href='./fetes.php'> Fetes</a>
        <a href='./Nutrition.php'> Nutrition</a>
        <div class='end-align'>
            <a href='./Contact.php'> Contact</a>
            <div id='notLogged'>
                <a href='./login.php'> Login</a>
                <a href='./register.php'> Register</a>
            </div>
        </div>
    </div>
        
        </html>" ;
    }
}
