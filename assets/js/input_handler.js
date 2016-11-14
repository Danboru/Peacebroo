$(document).ready(function(){
     $('#btn_tweet').click(function(){
          var tweet_txt = $('#tweet').val();
          //trim() is used to remover spaces
          if($.trim(tweet_txt) != '')
          {
               $.ajax({
                    url:"http://danboru.dev/Peacebroo/arahan/tambah",
                    method:"POST",
                    data:{tweet:tweet_txt},
                    dataType:"text",
                    success:function(data)
                    {
                         $('#tweet').val("");
                    }
               });
          }
          else {

           alert("Isi data terlebih dulu");

          }

     });

     setInterval(function(){
          $('#container_statusnya').load("http://danboru.dev/Peacebroo/fetch").fadeIn("slow");
     }, 10000);
});
