<?php

require_once __DIR__ . "/../Models/CarouselModel.php";
class CarouselController {

    public static function renderTable(){
        $data = CarouselModel::GetAllCarousel();
        foreach ($data as $key => $val) {
            echo "   
            <tr>
                <th scope='row'>".$val['id']."</th>
                <td>".substr($val['lien'],0,25)."</td>
                <td>".$val['url']."</td>
                <td>    
                    <form action='./../../Controllers/DeleteCarouselController.php' method='post' >
                        <input type='text' id='idcar' name='idcar' value=".$val['id'].">
                        <input type='submit' class='btn btn-danger' value='delete'>
                    </form>
                </td> 
            </tr>
            ";
        }
    }
}