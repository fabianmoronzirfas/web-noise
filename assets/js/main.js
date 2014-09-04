$(document).ready(function(){

    $('.save').click(function(e){

      var current_time = 123;
      var tasktitle = $("input#tasktitle").val();
      var dataString = 'current_time='+ current_time + '&tasktitle=' + tasktitle;

      $.ajax({
            type: "POST",
            url: "save.php",
            data: dataString,

              success: function() {
                $('.title').html("");
                $('#message').html("✓ Logged!")
                .hide()

                  .fadeIn(1500, function() {
                  $('#message').append("");
                  });
                }
      });
      return false;

      });
  });