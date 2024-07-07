<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="Final_contact_information.css">

</head>
<body>

<div class="container">

    <form method="post" action="register.php">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <label for="name">Name</label>
  <input type="text" id="name" name="name" placeholder="Your name" required>
                </div>
                <div class="inputBox">
                  <label for="email">Email:</label>
    <input type="email" id="email" name="email" placeholder="Enter Email ID" required>
                </div>
                <div class="inputBox">
                  <label for="phone">Phone Number:</label>
    <input type="phone" id="phone" name="phone" placeholder="Enter Phone Number" required>
                </div>

                <div class="inputBox">
                    <label for="grade">Grade</label>
  <select id="grade" name="grade">
    <option value="Grade 3">Grade 3</option>
    <option value="Grade 4">Grade 4</option>
    <option value="Grade 5">Grade 5</option>
    <option value="Grade 6">Grade 6</option>
    <option value="Grade 7">Grade 7</option>
    <option value="Grade 8">Grade 8</option>
    <option value="Grade 9">Grade 9</option>
    <option value="Grade 10">Grade 10</option>
    <option value="Grade 11">Grade 11</option>
    <option value="Grade 12">Grade 12</option>
    <id="grade" name="grade" required>
  </select>


  <label for="subject">Subject</label>
  <select id="subject" name="subject">
    <option value="Maths">Maths</option>
    <option value="Science">Science</option>
     <option value="History">History</option>
    <option value="English">English</option>
    <option value="Geography">Geography</option>
  </select>
                    <div class="inputBox">
                        <label for="slot">time slot</label>
  <select id="slot" name="slot">
    <option value="4:00am - 6:00am">4:00am - 6:00am</option>
    <option value="4:00pm - 6:00pm">4:00pm - 6:00pm</option>
    <option value="7:00pm - 9:00pm">7:00pm - 9:00pm</option>
  </select>
                    </div>
                </div>
                    <div class="inputBox">
                       <label for="date">Date</label>
  <input type="date" id="date" name="date" required> 
                    </div>

                   

            </div>

            <div class="col">

                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="img/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo">
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="text" placeholder="1111-2222-3333-4444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="TEXT" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234">
                    </div>
                </div>

            </div>
    
        </div>


    <input type="hidden" name="teacherEmail" value="<?php echo $_GET['teacherEmail']; ?>">


        <input type="submit" value="REGISTER  NOW" class="submit-btn">

    </form>

</div>    
    
</body>
</html>