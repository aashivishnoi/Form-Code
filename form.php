<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
  </head>
  <body>
    <main>
      <p>Send Email </p>
      <form class = "contact-form" action= "contactform.php" method = "post">
        <input type ="text" name="name" placeholder="Full name">
        <input type ="text" name="mail" placeholder="Your email">
        <input type ="text" name="subject" placeholder="Subject">
        <textarea name = "message" placeholder= "Message"></textarea>
        <button type="submit" name="submit">Send Mail </button>
      </form>
    </main>
</html>
