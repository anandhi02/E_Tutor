<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Get form data
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  
  // Set recipient email address
  $to = "prasanna29venkatesh@gmail.com";
  
  // Set email subject
  $subject = "New Contact Form Submission";
  
  // Set email headers
  $headers = "From: " . $name . " <" . $email . ">\r\n";
  $headers .= "Reply-To: " . $email . "\r\n";
  $headers .= "Content-type: text/html\r\n";
  
  // Set email body
  $body = "<p><strong>Name:</strong> " . $name . "</p>";
  $body .= "<p><strong>Email:</strong> " . $email . "</p>";
  $body .= "<p><strong>Message:</strong> " . $message . "</p>";
  
  // Send email
  if (mail($to, $subject, $body, $headers)) {
    // Set auto-response email headers
    $auto_headers = "From: Your Name <prasanna29venkatesh@gmail.com>\r\n";
    $auto_headers .= "Reply-To: Your Name <prasanna29venkatesh@gmail.com>\r\n";
    $auto_headers .= "Content-type: text/html\r\n";
    
    // Set auto-response email subject
    $auto_subject = "Thank you for contacting us!";
    
    // Set auto-response email body
    $auto_body = "<p>Dear " . $name . ",</p>";
    $auto_body .= "<p>Thank you for contacting us. We will get back to you as soon as possible.</p>";
    $auto_body .= "<p>Best regards,<br>e-Tutor</p>";
    
    // Send auto-response email
    mail($email, $auto_subject, $auto_body, $auto_headers);
    
    // Redirect to thank you page
    header("Location: Index.html");
    exit;
  } else {
    // Redirect to error page
    header("Location: error.html");
    exit;
  }
}
?> 
