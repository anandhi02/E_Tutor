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
</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p>this is an user page</p>
       <h1>Select Your Subject and Grade</h1>
  <form>
    <label for="grade">Grade:</label>
    <select id="grade">
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
    </select>
    <label for="subject">Subject:</label>
    <select id="subject">
      <option value="math">Math</option>
      <option value="science">Science</option>
      <option value="history">History</option>
      <option value="english">English</option>
      <option value="geography">Geography</option>
    </select>
    <input type="button" value="Submit" onclick="checkSelection()">
  </form>

  <script src="user_page_script.js"></script>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>