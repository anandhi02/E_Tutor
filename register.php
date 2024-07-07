<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $grade=$_POST['grade'];
    $subject=$_POST['subject'];
    $date=$_POST['date'];
    $slot=$_POST['slot'];
     $teacherEmail = $_POST["teacherEmail"];

// Send email to Admin
  $to = "prasanna29venkatesh@gmail.com";
  $subjectAdmin = "Class Registration";
  $messageAdmin = "Hello,\n\nA new student has registered class\n\nName: $name\nPhone Number: $phone\nEmail: $email\nGrade: $grade\nSubject: $subject\nDate: $date\nTime Slot: $slot\nTutor: $teacherEmail";
  $headersAdmin = "From: $email";
  mail($to, $subjectAdmin, $messageAdmin, $headersAdmin, $teacherEmail);
  

  // Send email to teacher
  $toTeacher = $teacherEmail;
  $subjectTeacher = "New Student Class Registration";
  $messageTeacher = "Hello,\n\nA new student has registered for your class:\n\nName: $name\nGrade: $grade\nSubject: $subject\nDate: $date\nTime Slot: $slot";
  $headersTeacher = "From: prasanna29venkatesh@gmail.com";
  mail($toTeacher, $subjectTeacher, $messageTeacher, $headersTeacher);

  // Send confirmation email to student
  $toStudent = $email;
  $subjectStudent = "Registration Confirmation";
  $messageStudent = "Hello $name,\n\nThank you for registering for the class. We will contact you shortly.\n\nBest regards,\ne-Tutor";
  $headersStudent = "From: prasanna29venkatesh@gmail.com";
  mail($toStudent, $subjectStudent, $messageStudent, $headersStudent);

        // Redirect to thank you page
    header("Location: Confirmation_page_index.html");
    exit;
  }
?>
