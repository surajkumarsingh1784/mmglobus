<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fav-icon.png" type="image/x-icon">
  <title>Contact Us</title>
  <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <style>
    /* Basic Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      background-color: #f4f4f4;
      padding: 50px;
    }

    /* Header and Contact Section */
    #contact-us {
      max-width: 1200px;
      margin: 0 auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .contact-container {
      text-align: center;
    }

    h1 {
      font-size: 2.5em;
      margin-bottom: 10px;
    }

    p {
      font-size: 1.1em;
      margin-bottom: 30px;
    }

    .form-group {
      margin-bottom: 20px;
      text-align: left;
    }

   #contact-us  label {
      font-weight: bold;
      display: block;
      margin-bottom: 8px;
    }

    #contact-us input, textarea, button {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      margin-top: 5px;
    }

    #contact-us button {
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    #contact-us button:hover {
      background-color: #45a049;
    }

    /* Responsive Styling */
    @media (min-width: 768px) {
      .contact-container {
        width: 70%;
        margin: 0 auto;
      }
    }

    @media (min-width: 1024px) {
      .contact-container {
        width: 50%;
      }
    }

    /* Contact Details */
    .contact-details {
      margin-top: 30px;
      font-size: 1.1em;
    }

    .contact-details p {
      margin: 5px 0;
    }
    .navbar-brand img {
    max-width: 100%; /* Ensures the image scales down while maintaining aspect ratio */
    height: auto; /* Maintains aspect ratio */
    width: 180px; /* Default logo width */
}

/* Tablet Screens (768px and below) */
@media (max-width: 768px) {
    .navbar-brand img {
        width: 150px; /* Logo size on tablets */
    }
}

/* Mobile Screens (600px and below) */
@media (max-width: 600px) {
    .navbar-brand img {
        width: 130px; /* Logo size on smaller mobiles */
    }
}

/* Very Small Mobile Screens (480px and below) */
@media (max-width: 480px) {
    .navbar-brand img {
        width: 120px; /* Logo size on very small screens */
    }
}
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbg" style="transition: background 0.3s ease; background-color: #4682b4;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Logo" height="50" class="d-inline-block align-text-top">
        </a>
        <!--<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--    <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->
        <!--<div class="collapse navbar-collapse" id="navbarNav">-->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light mx-2" href="index.php">Home</a>
                </li>
                <!--<li class="nav-item">-->
                <!--    <a class="nav-link text-light mx-2" href="contact.php">Contact Us</a>-->
                <!--</li>-->
                </ul>
                </div>
                </div>
                </nav>

  <section id="contact-us">
    <div class="contact-container">
      <h1>Contact Us</h1>
      <p>We’d love to hear from you! Whether you have a question, need support, or want to discuss a project, feel free to reach out to us using the form below.</p>

      <form action="send_email.php" method="POST" id="contact-form">
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" placeholder="Enter your full name" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address</label>
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
        </div>

        <div class="form-group">
          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Enter subject" required>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="4" placeholder="Your message..." required></textarea>
        </div>

        <div class="form-group">
          <button type="submit" id="submit-btn">Send Message</button>
        </div>
      </form>

      <div class="contact-details">
        <p><strong>Email:</strong> business@mmglobus.com</p>
      </div>
    </div>
  </section>

</body>
</html>
