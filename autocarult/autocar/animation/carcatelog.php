<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <script src="jquery-2.1.4.js"></script>
    <link rel="stylesheet" type="text/css" href="anstyle.css" />
  </head>
  <body>
    <div class="content">
      <img src="../img/logo.jpg" />
    </div>

    <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

    <script>
        $(window).on("load",function(){
          $(".loader-wrapper").fadeOut("slow");
        });
    </script>
    <script>
         setTimeout(function(){
            window.location.href = '../carcatelog.php';
         }, 1500);
      </script>
  </body>
</html>