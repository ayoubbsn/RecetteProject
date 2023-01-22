data1 = [];
(function update() {
  $table.bootstrapTable('refresh')
  $.ajax({
    type: 'POST',
    url: "../../Controllers/ApprouverRefresher.php",
    data: data1,
    dataType: "text",
    success: function (resultData, status) { console.log("refershing"); }                  // pass existing options
  }).then(function() {           // on completion, restart
     setTimeout(update, 5000);  // function refers to itself
  });
})();   

var $approuver = $("#approuve")
$(function () {
  $approuver.click(function () {
    var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
      return row.id
    })
    console.log(ids);
    var data1 = Object.assign({}, ids)
    var saveData = $.ajax({
      type: 'POST',
      url: "../../Controllers/ApprouverController.php",
      data: data1,
      dataType: "text",
      success: function (resultData, status) { console.log("Data: " + resultData + "\nStatus: " + status); }
    });
  })
})

$(function () {
  $button.click(function () {
    ids = $.map($table.bootstrapTable('getSelections'), function (row) {
      return row.id
    })
    console.log(ids);
    $table.bootstrapTable('remove', {
      field: 'id',
      values: ids
    })
    console.log(ids);
    var data1 = Object.assign({}, ids)
    var saveData = $.ajax({
      type: 'POST',
      url: "../../Controllers/DeleteUserController.php",
      data: data1,
      dataType: "text",
      success: function (resultData, status) { console.log("Data: " + resultData + "\nStatus: " + status); }
    });
  })
})
