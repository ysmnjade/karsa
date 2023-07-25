<!DOCTYPE html>
<html>
<head>
    <title>Job Application Form</title>
    <link rel="stylesheet" type="text/css" href="job.css">
</head>
<body>
    <?php include ('karsa-job.php'); ?>
    <header>
    <div class="logo-container">
      <a href="Karsa-homepage.html" class="logo-link"> 
        <img src="LOGOS/KARSA Logo.png" alt="Logo" class="logo-img">
      </a>
    </div>
    <a href="#" class="toggle-button" id="menu-toggle">&#9776;</a>
    <nav id="main-nav">
      <div class="left-nav">
        <ul>
          <li><a href="KARSA-Homepage.html" class="subpage-link">HOME</a></li>
          <li><a href="menukarsa.html" class="subpage-link">MENU</a></li>
          <li><a href="job.php" class="subpage-link">JOBS</a></li>
        </ul>
      </div>
      <div class="right-nav">
        <ul>
          <li><a href="https://food.grab.com/ph/en/" target="_blank" class="subpage-link">ORDER ON GRABFOOD</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <h1> Start your journey at Karsa now! </h1>
    <div class="container">
        <form action="karsa-job.php" method="POST" enctype="multipart/form-data">
            <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="position">Position:</label>
            <input type="text" id="position" name="position" required>

            <label for="experience">Relevant Experience:</label>
            <input type="text" id="experience" name="experience" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{11}" required>
            
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
        </form>
    </div>

    
    <footer>
  <div class="footer-container">
    <div class="ogol-container">
      <img src="LOGOS/karsa1.png" alt="Logo" class="logo-img">
    </div>
    <div class="info-container">
      <div class="website">
        <a href="KARSA Hompage.html">karsa.ph</a>
      </div>
      <div class="email">
        hello@karsa.ph
      </div>
    </div>
    <div class="follow-us">
      Follow us on:
      <a href="https://www.facebook.com/karsaph" target="_blank"><img src="LOGOS/fb.png" alt="Facebook" class="social-media-img"></a>
      <a href="https://www.tiktok.com/@karsaph?_t=8dte3dTtKe9&_r=1" target="_blank"><img src="LOGOS/tiktok.png" alt="TikTok" class="social-media-img"></a>
      <a href="https://www.instagram.com/karsaph/" target="_blank"><img src="LOGOS/ig.png" alt="Instagram" class="social-media-img"></a>
    </div>
    <div class="address">
      4 Elegant Homes, JB Tan Street, BF Resort Village, Talon Dos, Las Piñas City
    </div>
  </div>
</footer>

</body>




</html>