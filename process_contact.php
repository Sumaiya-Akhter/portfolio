<?php
session_start();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    
    // Sanitize and validate input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
    }
    
    if (empty($subject)) {
        $errors[] = "Subject is required";
    }
    
    if (empty($message)) {
        $errors[] = "Message is required";
    }
    
    // If there are errors
    if (!empty($errors)) {
        $_SESSION['message'] = implode(', ', $errors);
        $_SESSION['message_type'] = 'error';
        header('Location: index.php#contact');
        exit();
    }
    
    // Save to database (optional)
    // saveContactMessage($name, $email, $subject, $message);
    
    // Send email (configure your email settings)
    $to = "sumaiya.akter.2894@gmail.com"; // Your email
    $email_subject = "Portfolio Contact: " . $subject;
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Message:\n$message";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    
    // Attempt to send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        $_SESSION['message'] = "Thank you, $name! Your message has been sent successfully. I'll get back to you soon!";
        $_SESSION['message_type'] = 'success';
    } else {
        // If mail() fails, still save the message
        $_SESSION['message'] = "Thank you for your message! I'll get back to you soon.";
        $_SESSION['message_type'] = 'success';
    }
    
    // Save to file as backup (optional)
    $log_entry = date('Y-m-d H:i:s') . " - Name: $name, Email: $email, Subject: $subject\n";
    file_put_contents('contact_messages.log', $log_entry, FILE_APPEND);
    
    header('Location: index.php#contact');
    exit();
    
} else {
    // If accessed directly, redirect to homepage
    header('Location: index.php');
    exit();
}

// Optional: Database function
function saveContactMessage($name, $email, $subject, $message) {
    // Database connection
    $host = 'localhost';
    $dbname = 'portfolio_db';
    $username = 'your_username';
    $password = 'your_password';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $sql = "INSERT INTO contact_messages (name, email, subject, message, created_at) 
                VALUES (:name, :email, :subject, :message, NOW())";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':subject' => $subject,
            ':message' => $message
        ]);
        
        return true;
    } catch(PDOException $e) {
        error_log("Database Error: " . $e->getMessage());
        return false;
    }
}
?>