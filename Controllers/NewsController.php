<?php

require_once __DIR__ . "/../Models/NewsModel.php";
class NewsController {

    public static function renderTable(){
        $data = NewsModel::GetAllNews();
        foreach ($data as $key => $val) {
            echo "   
            <tr>
                <th scope='row'>".$val['id']."</th>
                <td>".$val['titre']."</td>
                <td>".substr($val['paragraphe'],0,25)." . . .</td>
                <td>    
                    <form action='./../../Controllers/DeleteNewsController.php' method='post' >
                        <input type='text' id='idnews' name='idnews' value=".$val['id'].">
                        <input type='submit' class='btn btn-danger' value='delete'>
                    </form>
                </td> 
            </tr>
            ";
        }
    }
}