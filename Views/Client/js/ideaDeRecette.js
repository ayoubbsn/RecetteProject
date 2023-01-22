let k = 2;
let ingredients = $(".ing-obj");
$("#ingredients-button").click(function () {
  $('<div class="ingredients-container"> <select id="ingredients'+k+'" name="ingredients'+k+'"  > <option class="opt0" ></option> </select>  <label for="quantity"> Quantité  (mg / ml) : </label>   <input type="number" id="quantity'+k+'" name="quantity'+k+'"  min="0" max="1000"> </div> ').insertAfter('#ing-sup-container > div.ingredients-container:last-child');
  for (let e = 0; e < ingredients.length; e++) {
    data = ingredients[e].cloneNode(true);
    var opt = $("#ingredients"+k+" option.opt0")
    $(data).insertAfter(opt);
  }
  k++;
});