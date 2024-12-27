<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/ab0436a36b.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
      <!-- Video Banner Section -->
      <section class="video-banner">
        <!-- Video Background -->
        <video autoplay muted loop>
          <source src="videos/travelVideo.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
    
        <!-- navbar -->
        <div class="navbar">
            <nav class="navbar navbar-expand-lg fixed-top navbar-custom">
                <div class="container-fluid d-flex justify-content-between">
                  <img class="img-logo img-fluid " style="width: 200px;" src="img/Travel_Logowhite.png">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto me-auto mb-2 mb-lg-0">
                      
                      <li class="nav-item">
                        <a class="nav-link active" href="index.php">About us</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Destinations
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">North India</a></li>
                          <li><a class="dropdown-item" href="#">South India action</a></li>
                          <li><a class="dropdown-item" href="#">west india</a></li>
                          <li><a class="dropdown-item" href="#">
                            East & Northeast India
                          </a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Adventures
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Trekking and Hiking</a></li>
                          <li><a class="dropdown-item" href="#">Wildlife Safaris</a></li>
                          <li><a class="dropdown-item" href="#">Road Trips</a></li>
                        
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="blog.php" >Blog</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Travel Tips
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Budget Travel Tips</a></li>
                          <li><a class="dropdown-item" href="#">Solo Travel</a></li>
                          <li><a class="dropdown-item" href="#">Local Cuisine</a></li>
                          <li><a class="dropdown-item" href="#">
                            Cultural Etiquette                </a></li>
                        </ul>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Resources
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Travel Gear</a></li>
                          <li><a class="dropdown-item" href="#">Local Contacts</a></li>
                          <li><a class="dropdown-item" href="#">Budget Tools</a></li>
                          
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " >Contact us</a>
                      </li>
                    </ul>

                    <div class="icons">
                      <i class="fa-brands fa-instagram"></i>
                      <i class="fa-brands fa-pinterest"></i>
                      <i class="fa-regular fa-envelope"></i>
                      <i class="fa-solid fa-magnifying-glass" id="openSearch" style="cursor: pointer;"></i>
                    </div>

                  </div>
                  
                </div>
              </nav>
              
          
        </div>
        <div id="searchOverlay" class="search-overlay">
            <button id="closeSearch" class="close-search-btn">×</button>
            <form class="search-form">
              <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>

        <div class="about-heading">
            <h2>About us</h2>
        </div>

    
      </section>
      <section class="about-us">
        <div class="container">
            <h1>WHO ARE WE?</h1>
            <p>Firstly, welcome to Explore96cr</p>
            <p>I’m Simranjeet Kaur, the founder and passionate traveler behind this blog.</p>
            <p>My love for travel has always been about more than just exploring new places — it’s about connecting with different cultures, understanding diverse landscapes, and learning valuable lessons along the way.</p>
            <p>From the bustling streets of Delhi to the tranquil backwaters of Kerala, every corner of India has a story to tell, and through Explore96cr, I aim to share those stories with you.</p>
            <div class="imgBox d-flex justify-content-evenly align-items-center ">
              <div class="img1 ">
                <img src="img/aboutimg1.png" class="img-fluid ">
              </div>
              <div class="img2">
                <img src="img/aboutimg2.png" class=" img-fluid">
              </div>
            </div>

            <h1 style="margin-top: 5%;">MET THE TEAM</h1>
            <p>While Explore96cr is my personal travel blog, I believe in collaboration and sharing knowledge. You’ll find insights from various guest writers, fellow travelers, and local experts who contribute their experiences and tips to the site. I also partner with responsible travel agencies, eco-friendly brands, and local businesses who share our commitment to sustainability.</p>
            <p>Together, we’re building a community of mindful travelers who want to explore India’s vast beauty while making a positive impact.</p>
           
        </div>

      </section>

      <section class="footer">
        <div class="footer1 d-flex justify-content-between">
          <div class="logo-footer w-25" >
            <img src="img/Travel_Logo.png " class="img-fluid">
          </div>
          <div class="items-footer d-flex justify-content-evenly w-50">
            
              <div class="places">
                <h2>Places</h2>
                <p>dummy</p>
                <p>dummy</p>
                <p>dummy</p>
                <p>dummy</p>
                <p>dummy</p>
              </div>
              <div class="places2">
                <h2>Places</h2>
                <p>dummy</p>
                <p>dummy</p>
                <p>dummy</p>
                <p>dummy</p>
                <p>dummy</p>
              </div>
            
            
            <div class="places3">
              <h2>Places</h2>
              <p>dummy</p>
              <p>dummy</p>
              <p>dummy</p>
              <p>dummy</p>
              <p>dummy</p>
            </div>
          </div>
        </div>
        <hr>
        <div class="footer2 d-flex justify-content-between align-items-center">
          <div class="copyright">
            <p>&#169;2024 EXPLORE CR64. All rights reserved</p>
          </div>
          <div class="icons">
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-pinterest"></i>
            <i class="fa-regular fa-envelope"></i>
            <i class="fa-solid fa-magnifying-glass" id="openSearch" style="cursor: pointer;"></i>
          </div>
        </div>
      </section>









      <script>
        var imgLogo = document.getElementsByClassName('img-logo')[0];
        window.addEventListener('scroll', function() {
          const navbar = document.querySelector('.navbar-custom');
          if (window.scrollY > 50) { // Adjust scroll distance as needed
            navbar.classList.add('scrolled');
            imgLogo.src = 'img/Travel_Logo.png';
          } else {
            navbar.classList.remove('scrolled');
            imgLogo.src = 'img/Travel_Logowhite.png';
          }
        });

        
      </script>
      <script>
          // Open search overlay when magnifying glass is clicked
  document.getElementById('openSearch').addEventListener('click', function() {
    document.getElementById('searchOverlay').style.display = 'flex';
  });

  // Close search overlay when cross button is clicked
  document.getElementById('closeSearch').addEventListener('click', function() {
    document.getElementById('searchOverlay').style.display = 'none';
  });
      </script>
    
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        
</body>
</html>