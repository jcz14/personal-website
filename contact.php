<?php
  // Check to make sure that the required fields aren't blank
  if ($_POST["name"] != "" && $_POST["email"] != "" && $_POST["message"] != "") {
    // Connect to MySQL database
    $server = "localhost";
    $user = "root";
    $password = "password";
    $db = "personal_website";
    $mysql_connection = new mysqli($server, $user, $password, $db);

    // Display error if the connection fails
    if ($mysql_connection->connect_error) {
      die("<br><br>There was a problem connecting to the database.");
    }

    // Store form responses in variables
    $form_name = $_POST["name"];
    $form_email = $_POST["email"];
    $form_message = $_POST["message"];

    // Subject is optional, so if the user didn't put one in we set it to "(no subject)"
    if ($_POST["subject"] == "") {
      $form_subject = "(no subject)";
    } else {
      $form_subject = $_POST["subject"];
    }

    // Escape single quotes by replacing them with two single quotes
    $form_name = str_replace("'", "''", $form_name);
    $form_email = str_replace("'", "''", $form_email);
    $form_subject = str_replace("'", "''", $form_subject);
    $form_message = str_replace("'", "''", $form_message);

    // Insert new row into table
    $mysql_insert = "INSERT INTO messages (name,email,subject,content) VALUES ('". $form_name . "','". $form_email . "','". $form_subject . "','". $form_message . "')";

    // Display message on insertion success or failure
    if ($mysql_connection->query($mysql_insert) === TRUE) {
      echo "<br><br>Thanks! Your message has been submitted, and I will get back to you as soon as I can.";
    } else {
      echo "MySQL error: " . $mysql_insert . "<br>" . $mysql_connection->error;
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Personal Website</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/contact.css">
  </head>

  <body>
    <?php include "header.php"; ?>

    <h1 id="welcomeMessage">Write me a message!</h1>

    <p>Got any questions or comments? Fill out the form below and I'll get back to you as soon as I can.</p>

    <form action="" method="POST" onsubmit="return validate(this);" id="form">
      <div class="text">
        <input type="text" id="name" name="name" placeholder="Name"/>
      </div>
      <div class="text">
        <input type="email" id="email" name="email" placeholder="E-Mail"/>
      </div>
      <div class="text">
        <input type="text" id="text" name="subject" placeholder="Subject (optional)"/>
      </div>
      <div class="textarea">
        <textarea id="message" name="message" cols="40" rows="10" placeholder="Message"></textarea>
      </div>
      <input type="submit" id="submit" value="Send">
    </form>

    <p><img src="./img/facebook.png" alt="Facebook icon"> You can also message me on <a href="https://www.facebook.com/jimzheng95" target="_blank">Facebook</a>.</img></p>

    <?php include "footer.php"; ?>

    <script src="./js/contact.js"></script>
    <noscript>Please enable JavaScript to use this form.</noscript>
  </body>
</html>
