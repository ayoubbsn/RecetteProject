<?php

require_once __DIR__ . "/../Models/IngredientsModel.php";
class IngredientsController {

    public static function renderTable(){
        $data = IngredientsModel::getAllIngredients();
        foreach ($data as $key => $val) {
            echo "   
            <tr>
                <th scope='row'>".$val['id']."</th>
                <td>".$val['nom']."</td>
                <td>".substr($val['inf_nutri'],0,25)." . . .</td>
                <td>".$val['healthy']."</td>
                <td>".$val['liquid']."</td>
                <td>    
                    <form action='./../../Controllers/DeleteIngredientsController.php' method='post' >
                        <input type='text' id='iding' name='iding' value=".$val['id'].">
                        <input type='submit' class='btn btn-danger' value='delete'>
                    </form>
                </td> 
            </tr>
            ";
        }
    }
}