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

    <h2 id="welcomeMessage">Write me a message!</h2>
    <h2 id="completionMessage">Thanks! I'll get back to you as soon as possible!</h2>

    <form action="" method="POST" onsubmit="return validate(this);" id="form">
      <fieldset id="messageForm">
        <div class="text">
          <label for="name">Name: </label>
          <input type="text" name="name" />
        </div>
        <div class="text">
          <label for="email">Email: </label>
          <input type="text" name="email" />
        </div>
        <div class="textarea">
          <textarea id="message" cols="40" rows="20"></textarea>
        </div>
      </fieldset>
      <input type="submit" id="submit" value="Send">
    </form>

    <?php include "footer.php"; ?>

    <script src="./js/contact.js"></script>
    <noscript>Please enable JavaScript to use this form.</noscript>
  </body>
</html>
