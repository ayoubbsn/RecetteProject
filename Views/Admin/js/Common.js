var $table = $('#table')
var $button = $('#button')


function containsNumbers(str) {
  return /[0-9]/.test(str);
}

function detailFormatter(index, row) {
  var html = []
  $.each(row, function (key, value) {
    html.push('<p><b>' + key + ':</b> ' + value + '</p>')
  })
  return html.join('')
}
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

$("#addButton").click(function () {
  $("#id01").css("display", "block");
})



var i = 2;
$("#etape-button").click(function () {
  $("<input type='text' id='etape" + i + "' name='etape" + i + "' placeholder='etape " + i + " ...'></input >").insertAfter('#sup-etapes :last-child');
  i++;
});

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

let fetes = $(".fetes-obj");
$("#fetes-button").click(function () {
  $('<div class="fetes-container"> <select id="fetes'+k+'" name="fetes'+k+'"  > <option class="opt1" value="null" ></option> </select>  </div> ').insertAfter('#fetes-sup-container > div.fetes-container:last-child');
  for (let e = 0; e < fetes.length; e++) {
    data = fetes[e].cloneNode(true);
    var opt = $("#fetes"+k+" option.opt1")
    $(data).insertAfter(opt);
  }
  k++;
});






$("#closeButton").click(function () {
  $("#id01").css("display", "none");
})


$('form').on('submit', function (e) {

  e.preventDefault();
  var form = new FormData(this)
  $.ajax({
    type: 'post',
    url: '../../Controllers/AdminFormController.php',
    data: form,
    cache: false,
    contentType: false,
    processData: false,
    success: function (data) {
      console.log(data);
      $("#id01").css("display", "none");
    }
  });

});
var $refreshbtn = $('#refresh')

$(function () {
  $refreshbtn.click(function () {
    $table.bootstrapTable('refresh')
  })
})
