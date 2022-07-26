<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Thowm Website Home</title>
      <link rel="stylesheet" href="style.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <link rel="icon" href="./images/icon.png"  type="image/x-icon">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
   </head>
   <body>
      <div class="btn">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
            Menu
         </div>
         <ul>
            <li class="active"><a href="#">Home</a></li>
            <li>
               <a href="#" class="feat-btn">Liên Hệ
               <span class="fas fa-caret-down first"></span>
               </a>
               <ul class="feat-show">
                  <li><a href="https://www.facebook.com/Thowmm03112005/"><img src="https://media.discordapp.net/attachments/943856055564251177/944673341946613850/fb.png"class="icon">facebook</a></li>
                  <li><a href="https://discord.gg/8BghZtHM5X"><img src="https://media.discordapp.net/attachments/943856055564251177/944673341694951464/discord.png" class="iconn"> Discord</a></li>
                  <li><a href="https://github.com/Thomnguyen03112005/"><img src="https://media.discordapp.net/attachments/943856055564251177/944673808411918366/github.png" class="iconnn"> Github</a></li>
               </ul>
            </li>
            <li>
               <a href="#" class="serv-btn">Tài liệu
               <span class="fas fa-caret-down second"></span>
               </a>
               <ul class="serv-show">
                  <li><a href="https://www.w3schools.com/"><img src="https://cdn.discordapp.com/attachments/943856055564251177/944659982148833310/th-removebg-preview.png" class="icok"> Tài liệu #1</a></li>
                  <li><a href="https://fullstack.edu.vn/"><img src="https://cdn.discordapp.com/attachments/943856055564251177/944660390279778345/image-removebg-preview_2.png" class="icokk"> Tài liệu #2</a></li>
                  <li><a href="https://stackoverflow.com/"><img src="https://cdn.discordapp.com/attachments/943856055564251177/944660626511396915/image-removebg-preview_4.png" class="icokkk"> Tài liệu #3</a></li>
               </ul>
            </li>
            <li>
                <a href="#" class="shift-btn">Server
                    <span class="fas fa-caret-down third"></span>
                </a>
                <ul class="shift-show">
                   <li><a href="../404/index.php"><img src="https://media.discordapp.net/attachments/943856055564251177/944673808651010148/server.png" class="sv"> Server 1</a></li>
                   <li><a href="../music/index.php"><img src="https://media.discordapp.net/attachments/943856055564251177/944673808651010148/server.png" class="sv"> Server 2</a></li>
                   <li><a href="#"><img src="https://media.discordapp.net/attachments/943856055564251177/944674321144635442/updatee.png" class="up"> Đang cập nhật</a></li>
                </ul>
             </li>
             <li>
                <a href="#" class="sourth-btn">About
                    <span class="fas fa-caret-down Fourth"></span>
                </a>
                <ul class="sour-show">
                   <li><a href="#"><img src="https://media.discordapp.net/attachments/943856055564251177/944674321144635442/updatee.png" class="up">Đang cập nhật</a></li>
                   <li><a href="#"><img src="https://media.discordapp.net/attachments/943856055564251177/944674321144635442/updatee.png" class="up">Đang cập nhật</a></li>
                   <li><a href="#"><img src="https://media.discordapp.net/attachments/943856055564251177/944674321144635442/updatee.png" class="up">Đang cập nhật</a></li>
                </ul>
             </li>
            <li><a href="./Feedback/index.php">Phản hồi</a></li>
         </ul>
      </nav>
      <div class="content">
         <div class="header">
      </div>
    </div>
      <script>
         $('.btn').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
           $('.feat-btn').click(function(){
             $('nav ul .feat-show').toggleClass("show");
             $('nav ul .first').toggleClass("rotate");
           });
           $('.serv-btn').click(function(){
             $('nav ul .serv-show').toggleClass("show1");
             $('nav ul .second').toggleClass("rotate");
           });
           $('.shift-btn').click(function(){
               $('nav ul .shift-show').toggleClass("show2");
               $('nav ul .third').toggleClass("rotate");
           });
           $('.sourth-btn').click(function(){
               $('nav ul .sour-show').toggleClass("show3");
               $('nav ul .Fourth').toggleClass("rotate");
           });
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
      $(window).on('load',function(){
      $(".ac").fadeOut(6000);
      $(".dots").fadeIn(5000);
      });
      </script>
            <div class="back">
               <div class="ac">
               <div class="dots"></span>
                  <span style="--i:1"></span>
                  <span style="--i:2"></span>
                  <span style="--i:3"></span>
                  <span style="--i:4"></span>
                  <span style="--i:5"></span>
                  <span style="--i:6"></span>
                  <span style="--i:7"></span>
                  <span style="--i:8"></span>
                  <span style="--i:9"></span>
                  <span style="--i:10"></span>
                  <span style="--i:11"></span>
                  <span style="--i:12"></span>
                  <span style="--i:13"></span>
                  <span style="--i:14"></span>
                  <span style="--i:15"></span>
                </div>
               </div>
                <video autoplay muted loop>
                    <source src="./images/back.mp4" type="video/mp4">
                </video>
            </div>
   </body>
</html>
