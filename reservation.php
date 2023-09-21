<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="bootsrap.css">
    <title>Reservation</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
</head>
<body>
    <header class="header" style="background-color: white;width: 100%;position: fixed;">
        <nav class="navbar">
            <h1 class="logo">Bon Apetito</h1>
            <ul class="nav-menu">
                <li class="nav-item">
                  <a href="index.php" class="nav-link">Home</a>
              </li>
                  <li class="nav-item">
                      <a href="menu.php" class="nav-link">Menu</a>
                  </li>
                  <li class="nav-item">
                      <a href="index.php#gallery" class="nav-link">Gallery</a>
                  </li>
                  <li class="nav-item">
                      <a href="reservation.php"class="nav-link">Booking</a>
                  </li>
                  <li class="nav-item">
                      <a href="index.php#location" class="nav-link">Location</a>
                  </li>
              </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header> 
<section id="Reservation" style="padding-top: 7rem;min-height: 100vh;">
    <h1 class="galh">Reservation</h1>
    <div class="container1">
        
        <form action="connect.php" method="POST" id="reservation-form">
            <div class="form1">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
    
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
    
            <label for="phone">Phone:</label>
            <input type="number" id="phone" name="phone" required>
    
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
        </div>
         <div class="form2">
            <label for="time">Time:</label>
            <input type="time" id="time" name="time" required>
    
            <label for="guests">Number of Guests:</label>
            <input type="number" id="guests" name="guests" required>
    
            <label for="special-requests">Special Requests:</label>
            <textarea id="special-requests" name="special-requests" rows="4"></textarea>
    
            <button type="submit" name="submit" class="btn">Submit Reservation</button>
        </div>
        </form>
      </div>
    </section>
  <script>const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".nav-menu");
    
    hamburger.addEventListener("click", mobileMenu);
    
    function mobileMenu() {
        hamburger.classList.toggle("active");
        navMenu.classList.toggle("active");
    }
    
    const navLink = document.querySelectorAll(".nav-link");
    
    navLink.forEach(n => n.addEventListener("click", closeMenu));
    
    function closeMenu() {
        hamburger.classList.remove("active");
        navMenu.classList.remove("active");
    }
    </script>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyBZGM5hSQ85K0ugG6Jn7CkFGgmkS-Mh02s",
          authDomain: "restaurant-ad252.firebaseapp.com",
          databaseURL: "https://restaurant-ad252-default-rtdb.firebaseio.com",
          projectId: "restaurant-ad252",
          storageBucket: "restaurant-ad252.appspot.com",
          messagingSenderId: "528282660138",
          appId: "1:528282660138:web:4a7d96feea14dd67670253",
          measurementId: "G-GN3BS6WQZV"
        };
      
        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const analytics = getAnalytics(app);
      </script>
      <script src="form.js"></script>
  
</body>
</html>