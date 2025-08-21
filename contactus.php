<!--IT23163454
A.M.H.Navodya-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us Page</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-image: url(images/bg1.png);
  }
  .banner {
    text-align: center;
    
    padding: 20px;
  }
  .banner img {
    max-width: 200px;
    height: auto;
  }
  .contact-form {
    margin: 20px auto;
    max-width: 600px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
  }
  .contact-form h2 {
    margin-bottom: 10px;
    text-align: center;
  }
  .contact-form label {
    display: block;
    margin-bottom: 5px;
  }
  .contact-form input,
  .contact-form textarea {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  .submit-button {
    width: 100%;
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
  }
  .submit-button:hover {
    background-color: #0056b3;
  }
  .contact-info {
    text-align: center;
    margin-top: 20px;
  }
  .contact-info address {
    font-style: normal;
  }
</style>
</head>
<body>

<section class="banner">
  <h1 style="font-size: 41px; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color: antiquewhite;">CONTACT US...</h1>
  <h1>Please Contact Us</h1>
  <p>We are available to address any inquiries you might have.</p>
</section>

<div class="form-container">
  <section class="contact-form">
    <h2>Details of Your Information</h2>


    <form action="insert.php" method="POST">
      <h3> Please use 'hansi@gmail.com' as email to temporory access.</h3>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
      
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
      
      <label for="phone">Phone number:</label>
      <input type="tel" id="phone" name="phone">
      
      <label for="message">The message is:</label>
      <textarea id="message" name="message" rows="4" required></textarea>
      
      <button class="submit-button" type="submit">Please submit</button>
    </form>
  </section>
</div>

<section class="contact-info">
  <h2>Contact Details</h2>
  <address>
    The hotel elegance is located at 58 Old Malabe Road.<br>
    Call: 123-456-7890 (<a href="tel:1234567890">123-456-7890</a>)<br>
    Contact email at <a href="mailto:info@hotelelegance.com">info@hotelelegance.com</a>
  </address>
</section>

<script>
  document.querySelector('form').addEventListener('submit', function(event) {
     
      var name = document.getElementById('name').value;
      var email = document.getElementById('email').value;
      var message = document.getElementById('message').value;
  
      if (name === '' || email === '' || message === '') {
          alert('Please fill in all required fields.');
          event.preventDefault(); 
      }
  });
  </script>

</body>
</html>