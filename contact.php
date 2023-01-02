<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A summary of Joe Doe's professional skills, education, and work experience">
    <meta name="theme-color" content="#000000">
  <title>Doe Resume</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <style>
      footer {
  background-color: #333;
  color: white;
  padding: 20px;
  text-align: center;
}

footer a {
  color: white;
  text-decoration: none;
}

footer a:hover {
  text-decoration: underline;
}

      .container {
        max-width: 600px;
      }
      h1, h2 {
        text-align: center;
      }
      p, ul {
        font-size: 16px;
      }
  </style>
</head>
<body>
  <div class="container mt-5">
    <h4 class="text-center mb-5">Send me a message</h4>
    <?php
      // Check if the form has been submitted
      if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the form data
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Validate the form data
        if (empty($name) || empty($email) || empty($message)) {
          // Set an error message
          $error = 'All fields are required';
        } else {
          // Set the recipient email address
          $to = 'example@gmail.com';
          // Set the subject
                   $subject = 'MESSAGE FROM TL ' . $name;
          // Build the email message
          $message = "Name: $name\nEmail: $email\n\n$message";

          // Set the headers
          $headers = "From: $name <$email>";

          // Send the email
          if (mail($to, $subject, $message, $headers)) {
            // Set a success message
            $success = 'Your message was sent successfully';
          } else {
            // Set an error message
            $error = 'There was an error sending your message';
          }
        }
      }
    ?>
    <!-- Display the error message if it exists -->
    <?php if (isset($error)) : ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <!-- Display the success message if it exists -->
    <?php if (isset($success)) : ?>
      <div class="alert alert-success"><?php echo $success; ?></div>
    <?php endif; ?>

    <!-- HTML form -->
    <div>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" id="name" name="name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" pattern=".+@globex\.com" size="30" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
        <label for="message">Message:</label>
        <textarea class="form-control" id="message" name="message"></textarea>
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </form>
  </div>
  
  </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.16.0/dist/umd/popper.min.js" integrity="sha384-K/P6o5U6/LgI/Xj49aEGbEiN1Qz3vjG2xF8akF5Q5C5yBwR1iR/U6xgQ6LN/ZPO" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
 
 <footer>
  <p>Contact: <a href="mailto:example@gmail.com">example@gmail.com</a> | <a href="tel:+254710203466">+254710203466</a></p>
</footer>

</html>