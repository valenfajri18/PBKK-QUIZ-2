<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cinemax - Order</title>
    <!-- STYLING -->
    <link rel="stylesheet" href="/css/styles.css" />
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Poppins:ital,wght@0,400;1,500&family=Roboto+Condensed&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="navbar">
        <div class="nav-item">
        <a class="nav-logo" href="/"><h1>Cinemax</h1></a>
          
        </div>
        <div class="nav-item">
          <a class="nav-menu" href="/">Home</a>
          <a class="nav-menu" href="/orderpage">Book Ticket</a>
        </div>
    </div>
    <div class="orderpage">
      <img src="/images/Seat.png" alt="" />
      <div>
        <h2>Booking Details</h2>
        
        <form class="formorder">
          <div class="form-group">
            <label for="movieName">Movie Name:</label>
            <select id="MovieName" name="MovieName" required>
              <option value="Annabelle(2019)">Annabelle(2019)</option>
              <option value="The Equalizer 3 (2023)">The Equalizer 3 (2023)</option>
              <option value="Titanic (1998)">Titanic (1998)</option>
              <option value="Zootopia (2016)">Zootopia (2016)</option>
              <option value="Avengers: Endgame (2019)">Avengers: Endgame (2019)</option>
            </select>
            <!-- Add more options as needed -->
          </div>

          <div class="form-group">
            <label for="seating">Seat:</label>
            <input type="text" id="seating" name="seating" required />
          </div>

          <div class="form-group">
            <label for="studio">Studio:</label>
            <input type="text" id="studio" name="studio" required value="4" disabled/>
          </div>

          <div class="form-group">
            <label for="showtimes">Showtimes:</label>
            <select id="showtimes" name="showtimes" required >
            <option value="" disabled selected>Pilih Jam Tayang</option>
              <option value="10:00 AM">12:30</option>
              <option value="15:00 PM">13:30</option>
              <option value="18:00 PM">14:15</option>
              <option value="18:00 PM">15:30</option>
              <option value="18:00 PM">16:45</option>
              <option value="18:00 PM">18:60</option>
              <!-- Add more options as needed -->
            </select>
          </div>

          <div class="form-group">
            <label for="price">Price:</label>
            <input
              type="number"
              id="price"
              name="price"
              value="45.000"
              required
              disabled
            />
          </div>

          <button type="submit" onclick="submitForm()">Buy Ticket Now</button>
        </form>
      </div>
    </div>
    <div class="footer">
        <div>
          <h1 style="margin: 0">Cinemax</h1>
        </div>
        <div>
          <h3 style="margin: 0">Hanafi Satriyo Utomo Setiawan</h3>
          <p style="margin: 0">5025211195</p>
        </div>
        <div>
          <h3 style="margin: 0">Rafi Aliefian Putra Ramadhani</h3>
          <p style="margin: 0">5025211234</p>
        </div>
        <div >          
          <h3 style="margin: 0">Beauty Valen Fajri</h3>
          <p style="margin: 0">5025211227</p></div>
    </div>
    <script>
      function submitForm() {
        // You can perform additional actions here before showing the notification

        alert(
          "Reservation submitted successfully, Please make your payment at the Cinema!"
        ); // Display a simple notification
        // window.location.href = "<?php echo base_url('/homepage.php'); ?>";
      }
    </script>
  </body>
</html>
