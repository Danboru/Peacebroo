$(document).ready(function(){
     $('#btn_tweet').click(function(){
          var tweet_txt = $('#tweet').val();
          //trim() is used to remover spaces
          if($.trim(tweet_txt) != '')
          {
               $.ajax({
                    url:"insert.php",
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

           alert("Isi status terlebih dulu");

          }

     });

     setInterval(function(){
          $('#load_tweets').load("fetch.php").fadeIn("slow");
     }, 1000);
});
