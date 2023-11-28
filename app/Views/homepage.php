<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinemax</title>
    <!-- STYLING -->
    <link rel="stylesheet" href="/css/styles.css" />
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Poppins:ital,wght@0,400;1,500&family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Poppins:ital,wght@0,400;1,500&family=Roboto+Condensed&display=swap" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <div class="moviedetailpage">
      <div class="navbar">
          <div class="nav-item">
          <a class="nav-logo" href="/"><h1>Cinemax</h1></a>
            
          </div>
          <div class="nav-item">
            <a class="nav-menu" href="/">Home</a>
            <a class="nav-menu" href="/orderpage">Book Ticket</a>
            <a class="nav-menu" href="/create">Admin Only</a>
          </div>
      </div>

      <div class="headline">
        <h1 class="tagline">
          Avatar 5 : Petualangan si Rafi menghadapi berbagai musuh di hutan Keputih.
        </h1>
      </div>

      <div class=" now-showing">
        <h1 style="padding-bottom: 16px">Now Showing</h1>
        <div class="carrousel">
          <?php if($ListFilm): ?>
          <?php foreach($ListFilm as $Film): ?>
          <div class="card">
            <?php $imagePath = '/images/poster/' . $Film['poster']; // Adjust the path accordingly?>
           
            <a class="moreinfo" href="<?php echo base_url('/moviedetail/' . $Film['idfilm']); ?>"> 
              <img style="border-radius: 10px" src="<?php echo $imagePath; ?>" alt="poster" />
              <h5 class="title"><?php echo $Film['namafilm']; ?></h5>
            </a>

            
          </div>
          <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      

      <!-- <div class="section cta">
        <h1>ORDER TICKET NOW</h1>
        <button>BUY TICKET</button>
      </div> -->

      <div class="footer">
        <div>
          <h1>Cinemax</h1>
        </div>
        <div>
          <h3>Hanafi Satriyo Utomo Setiawan</h3>
          <p>5025211195</p>
        </div>
        <div>
          <h3>Rafi Aliefian Putra Ramadhani</h3>
          <p>5025211234</p>
        </div>
        <div>          
          <h3>Beauty Valen Fajri</h3>
          <p>5025211227</p></div>
      </div>
    </div>
  </body>
</html>
