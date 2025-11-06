<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Transform your digital strategy with targeted SEO, social media, and 
content marketing. Reach the right audience and boost ROI. ">
  <meta name="keywords" content="Digital marketing services">
    <title>Digital Marketing Services | Boost Visibility & Increase Conversions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
     
        /* Hero Section */
        .hero-section {
            position: relative;
            height: 80vh;
            background-color: #00000070;
            color: white;
            /*text-align: center;*/
            display: flex;
            align-items: center;
            /*justify-content: center;*/
            padding:20vw;
        }

        .hero-section video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
            opacity: 0.5;
        }

        .hero-content {
            z-index: 1;
        }
        .hero-content h1{
            font-size:6rem;
            font-weight: 700;
        }
        .hero-content p{
            font-size: 1.7rem;
            font-weight: 700;
        }

        /* Carousel Section */
        .carousel .carousel-item {
            text-align: center;
        }

        .carousel .carousel-item img {
           
            height: 35vw;
        }

        .service-carousel .carousel-indicators {
            position: static;
            margin-top: 10px;
        }
    @media only screen and (max-width: 900px){
          .hero-content h1{
            font-size:4rem;
           
        }
        .hero-content p{
            font-size: 1.3rem ;
            
        }
      }
      @media only screen and (max-width: 600px){
          .hero-content h1{
            font-size:3rem;
           
        }
        .hero-content p{
            font-size: 1rem;
            margin-left: 5px !important;
            
        }
         .hero-section {
             padding:10vw;
         }
      }
    </style>
</head>

<body>
    <nav class="navbar navbg" style="position: fixed; background: transparent; width:100vw; z-index: 2;">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="png_digi.png" alt="Logo" height="50" class=" d-inline-block align-text-top">
      
    </a>
    <div class="navbar-nav">
      <a class="nav-item nav-link text-light" href="/">Home</a>
    </div>
  </div>
</nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <video autoplay muted loop>
            <source src="3129671-uhd_3840_2160_30fps.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="hero-content">
            <h1>Welcome to <br/>Digi Synapse</h1>
            <p class="ms-3">Bridging the digital </p>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="container my-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="">About Digi Synapse</h2>
                <p>
                    In the digital realm, Digi Synapse is Maximilian Globus's answer to the growing need for seamless online integration. With the motto "Connect with us, and we will engage your business with the online world seamlessly through unique digital craftsmanship," Digi Synapse offers tailored solutions that enhance a business's online presence. From digital marketing to web development, Digi Synapse is dedicated to helping businesses navigate the complexities of the digital world with ease and creativity.
                </p>
            </div>
        </div>
    </section>
     <section class="container my-5">
        <h2 class="text-center">Connect With Us & We Will Engage Your Business With The Online World Seamlessly With Unique Digital Craftsmanship.</h2>
        <div id="serviceCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://img1.wsimg.com/isteam/ip/bc2da16c-a0a8-4e4d-be3a-2fb5518bb0c2/blob-ad54b33.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1160,h:744" alt="Domain & Hosting">
                    
                </div>
                <div class="carousel-item">
                    <img src="https://img1.wsimg.com/isteam/ip/bc2da16c-a0a8-4e4d-be3a-2fb5518bb0c2/blob-b1f0102.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1160,h:481" alt="Web Design">
                    
                </div>
                <div class="carousel-item">
                    <img src="https://img1.wsimg.com/isteam/ip/bc2da16c-a0a8-4e4d-be3a-2fb5518bb0c2/blob-a28a895.png/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:1160,h:618" alt="Website Maintenance">
                   
                </div>
                
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#serviceCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#serviceCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
  document.addEventListener("DOMContentLoaded", function() {
      window.addEventListener("scroll", function() {
        var scroll = window.scrollY;
        if (scroll > 1) {
          document.querySelector(".navbg").style.background = "#4682B4";
        } else {
          document.querySelector(".navbg").style.background = "transparent";
        }
      });
    });

   
  </script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
