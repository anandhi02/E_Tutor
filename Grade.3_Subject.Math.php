<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="login_system_style.css">
   <link rel="stylesheet" href="user_page_style.css">
      <link rel="stylesheet" href="style_profile_cards.css">
</head>
<body>
   
<div class="container">

   <div class="content">
     
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>Grade 3 - Subject Math</p>
       <h1>Select Your Tutor</h1>
 
<div class="container">
      <div class="box">
      <div class="image">
          <img src="img/Tutorimg.jpg">
        </div>
        <div class="name_job">Anandhi</div>
        <p> Subject: Math <br>Grade: 3rd - 12th <br> Experience: 5+ Years<br>Qualification: B.E, M.E <br> Price: 499/- per class</p>
        <div class="btns">
           <button class="book-now-btn" onclick="location.href='contact.php?teacherEmail=prasanna29venkatesh@gmail.com'">Book Now</button>
  
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="img/Tutorimg2.jpg" alt="">
        </div>
        <div class="name_job">Sindhuja</div>
        <p> Subject: Math <br>Grade: 3rd - 12th <br> Experience: 4+ Years<br>Qualification: B.E <br> Price: 399/- per class</p>
        <div class="btns">
           <button class="book-now-btn" onclick="location.href='contact.php?teacherEmail=prasanna29venkatesh@gmail.com'">Book Now</button>
          
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="img/Tutorimg3.jpg" alt="">
        </div>
        <div class="name_job">Nithyasree</div>
      <p> Subject: Math <br>Grade: 3rd - 12th <br> Experience: 7+ Years<br>Qualification: B.E, M.E <br> Price: 699/- per class</p>
        <div class="btns">
           <button class="book-now-btn" onclick="location.href='contact.php?teacherEmail=prasanna29venkatesh@gmail.com'">Book Now</button>

        </div>
      </div>
    </div>



      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>