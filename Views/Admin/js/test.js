
$('form').on('submit', function (e) {

    e.preventDefault();
    var form = new FormData(this)
    $.ajax({
      type: 'post',
      url: './Uploads/post.php',
      data:form,
      cache:false,
      contentType: false,
      processData: false,
      success: function () {
        console.log('form was submitted');
        $("#id01").css("display","none");
      }
    });
  
  });
  