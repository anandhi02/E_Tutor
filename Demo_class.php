<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $grade = $_POST['grade'];
  $subject = $_POST['subject'];
  
  // Set recipient email address
  $to = "prasanna29venkatesh@gmail.com";
  
  // Set email subject
  $subject = "New Demo Class Submission";
  
  // Set email headers
  $headers = "From: " . $name . " <" . $email . ">\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "Content-type: text/html\r\n";
  
  // Set email body
  $body = "<p><strong>Name:</strong> " . $name . "</p>";
  $body .= "<p><strong>Email:</strong> " . $email . "</p>";
  $body .= "<p><strong>Phone:</strong> " . $phone . "</p>";
  $body .= "<p><strong>Grade:</strong> " . $grade . "</p>";
  $body .= "<p><strong>Subject:</strong> " . $subject . "</p>";
  // Send email
  if (mail($to, $subject, $body, $headers)) {
    // Set auto-response email headers
    $auto_headers = "From: Your Name <prasanna29venkatesh@gmail.com>\r\n";
    $auto_headers .= "Reply-To: Your Name <prasanna29venkatesh@gmail.com>\r\n";
    $auto_headers .= "Content-type: text/html\r\n";
    
    // Set auto-response email subject
    $auto_subject = "Your Free Demo Class Registered Successfully!.";
    
    // Set auto-response email body
    $auto_body = "<p>Dear " . $name . ",</p>";
    $auto_body .= "<p>Your Free Demo Class Registered Successfully, We will get back to you as soon as possible. Google meet link will be shared to you shortly</p>";
    $auto_body .= "<p>Best regards,<br>e-Tutor</p>";
    
    // Send auto-response email
    mail($email, $auto_subject, $auto_body, $auto_headers);

    header("Location: v.html");
    exit;
   } else {
    // Redirect to error page
    header("Location: error.html");
    exit;
  } 
}
?> 
