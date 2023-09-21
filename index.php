
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="bootsrap.css">
<link rel="stylesheet" href="mediaqueries.css">
<title>Restaurant Website</title>
</head>
<body>
    <header class="header" style="background-color: white;width: 100%;">
        <nav class="navbar">
            <h1 class="logo">Bon Apetito</h1>
            <ul class="nav-menu">
              <li class="nav-item">
                <a href="#home" class="nav-link">Home</a>
            </li>
                <li class="nav-item">
                    <a href="menu.php" class="nav-link">Menu</a>
                </li>
                <li class="nav-item">
                    <a href="#gallery" class="nav-link">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="reservation.php"class="nav-link">Booking</a>
                </li>
                <li class="nav-item">
                    <a href="#location" class="nav-link">Location</a>
                </li>
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
</header>
<section id="home" style="padding-top: 10rem;align-items: center;min-height: 100vh;">
  <!--banner section start -->
  <div class="banner_section layout_padding">
    <div class="container">
      <div id="main_slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6 button">
                <div class="image_1"><img src="./assets/Disneyland-Paris-Bistrot-Chez-Remy-Review-4.jpg"style="padding: 5px;"> </div>
              </div>
              <div class="col-md-6">
                <h1 class="banner_taital ch">SERVED EVERY DAY </h1>
                <h1 style="color: white;">SINCE 1990</h1>
                <p class="banner_text">

                  Bon Apetito’s opened on Thanksgiving Day 1990. Chef / Owner Ratatouille began baking pies and selling them to restaurants and his neighbors out of a small kitchen at the corner of Hudson and North Moore St. in Tribeca.
                  
                </p>
                <div style="margin-top:6px ;">
                  <a href="#footer" class="btnh">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <div class="image_1"><img src="./assets/rat.webp"style="padding: 5px;"></div>
              </div>
              <div class="col-md-6">
                <h1 class="banner_taital">Worlds Best Chefs</h1>
                <h1 style="color: white;">at your service</h1>
                <p class="banner_text">"Chefs don't make mistakes; they make new dishes." They genuinely enjoy the whole process of procuring, preparing, cooking and serving food and designing the menus</p>
                <div style="margin-top:6px ;">
                  <a href="#footer" class="btnh">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <div class="image_1"><img src="./assets/restaurant-neon-sign-ideas-11.webp" style="padding: 5px;"></div>
              </div>
              <div class="col-md-6">
                <h1 class="banner_taital">Hundreds of flavors</h1>
                <h1 style="color: white;">under one roof</h1>
                <p class="banner_text">Variety is what I would recommend: As variety is the spice of life in food, so it is in exercise. Change it up. But most of all, don't overdo it.</p>
                <div style="margin-top:6px ;">
                  <a href="#footer" class="btnh">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 
</section>

<section id="menu">
<h1  class="menuh">Menu</h1>
<div class="row py-5" style="padding: 8px;">
    <div class="col-lg-4">
      <figure class="rounded p-3 bg-white shadow-sm">
        <img src="./assets/image22.jpg" alt="" class="w-100 card-img-top">
        <figcaption class="p-4 card-img-bottom">
          <h2 class="caption">Today's Special</h2>
          <p class="mb-0 text-small text-muted font-italic">Lemon Fish</p>
        </figcaption>
      </figure>
    </div>
    <div class="col-lg-4">
      <figure class="rounded p-3 bg-white shadow-sm">
        <img src="./assets/top-view-table-full-delicious-food-composition_23-2149141353.avif" alt="" class="w-100 card-img-top">
        <figcaption class="p-4 card-img-bottom">
            <h2 class="caption">Today's Special</h2>
          <p class="mb-0 text-small text-muted font-italic">Mega Chicken</p>
        </figcaption>
      </figure>
    </div>
    <div class="col-lg-4">
      <figure class="rounded p-3 bg-white shadow-sm">
        <img src="./assets/image33.jpeg" alt="" class="w-100 card-img-top">
        <figcaption class="p-4 card-img-bottom">
            <h2 class="caption">Today's Special</h2>
          <p class="mb-0 text-small text-muted font-italic">Bread Omelette</p>
        </figcaption>
      </figure>
    </div>
  </div>
  
</section>
<section id="car">
  <div class="menu-car">
    <div class='wrapper'>
      <div class='carousel2'>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🥘
          </div>
          <div class='carousel__item-body'>
            <p class='title'>Chicken Curry</p>
            <p>500$</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🍜
          </div>
          <div class='carousel__item-body'>
            <p class='title'>Noodles</p>
            <p>200$</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🍚
          </div>
          <div class='carousel__item-body'>
            <p class='title'>Fried rice</p>
            <p>150$</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🐟
          </div>
          <div class='carousel__item-body'>
            <p class='title'>fish</p>
            <p>500$</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🍤
          </div>
          <div class='carousel__item-body'>
            <p class='title'>Prawns</p>
            <p>800$</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🍔
          </div>
          <div class='carousel__item-body'>
            <p class='title'>burger</p>
            <p>50$</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🍹
          </div>
          <div class='carousel__item-body'>
            <p class='title'>booze</p>
            <p>30$</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🍮
          </div>
          <div class='carousel__item-body'>
            <p class='title'>pudding</p>
            <p>50$</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🥗
          </div>
          <div class='carousel__item-body'>
            <p class='title'>salad</p>
            <p>130$</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="gallery">
    <div>
<h1 class="galh">Gallery</h1>
</div>
<!-- Gallery -->
<div class="row">
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
      <img
        src="./assets/wp6205320.jpg"
        class="w-100 shadow-1-strong rounded mb-4 border1"
        alt="Boat on Calm Water"
      />
  
      <img
        src="./assets/811c425cb62c8a75272aa30d353e5f57.jpg"
        class="w-100 shadow-1-strong rounded mb-4 border1"
        alt="Wintry Mountain Landscape"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="./assets/instagrammable-dinner-most.jpg"
        class="w-100 shadow-1-strong rounded mb-4 border1"
        alt="Mountains in the Clouds"
      />
  
      <img
        src="./assets/14117d60bef9c5163828aab70fbf7e41.avif"
        class="w-100 shadow-1-strong rounded mb-4 border1"
        alt="Boat on Calm Water"
      />
    </div>
  
    <div class="col-lg-4 mb-4 mb-lg-0">
      <img
        src="./assets/wp6205320.jpg"
        class="w-100 shadow-1-strong rounded mb-4 border1"
        alt="Waves at Sea"
      />
  
      <img
        src="./assets/Masquespacio-Design-Kessalao-Restaurant-1.jpg"
        class="w-100 shadow-1-strong rounded mb-4 border1"
        alt="Yosemite National Park"
      />
    </div>
  </div>
  <!-- Gallery -->
</section>

<section id="location">
    <h1 class="galh">Location</h1>
    <div class="loc-map">
        <!-- Location section content goes here -->
          <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.6900314148893!2d74.49602457489003!3d15.820290046054668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbf65ce55555555%3A0x9b70f622a9a0fb44!2sKLE%20Technological%20University&#39;
          s%2C%20Dr.%20M.S.%20Sheshgiri%20College%20of%20Engineering%20and%20Technology!5e0!3m2!1sen!2sin!4v1694342857371!5m2!1sen!2sin"
           width="600" 
           height="450"
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
      </div>
</section>

<!-- Footer -->
<footer id="footer">
  <div class="footer">
     <div class="container">
        <div class="row">
           <div class="col-md-7">
              <div class="row">
                 <div class="col-lg-6 col-md-12">
                    <div class="hedingh3 text_align_left">
                       <h3>VISIT US:</h3>
                       <p>  WJP7+39W, 115, 3rd Floor, Koramangala 80 Feet Rd, above Starbucks, 7th Block, Koramangala, Bengaluru, Karnataka 560030</p>
                    </div>
                 </div>
              </div>
           </div>
           <div class="col-md-5">
              <div class="row">
                 <div class="col-lg-6 col-md-12">
                    <div class="hedingh3 text_align_left">
                       <h3>Menu</h3>
                       <ul class="menu_footer">
                          <li><a href="#slider_section">Home</a></li>
                          <li><a href="#menu">Menu</a></li>
                          <li><a href="#gallery">Gallery</a></li>
                          <li><a href="#reservation">Reservation</a></li>
                          <li><a href="#location">Location</a></li>
                       </ul>
                    </div>
                 </div>
                 <div class="col-lg-6 col-md-12">
                    <div class="hedingh3  text_align_left">
                      <div class="hedingh3 text_align_left">
                        <h3>Newsletter</h3>
                        <form id="newsletter-form" class="form_subscri" name="submit-to-google-sheet">
                            <input id="email-input" class="newsl" placeholder="Email" type="text" name="Email1">
                            <button id="subscribe-button" class="subsci_btn" type="submit">Subscribe</button>
                        </form>
                        <p id="subscription-message" style="display: none;font-size: 1.5rem;">Thank you for subscribing!</p>
                    </div>
                    
                       <ul class="top_infomation">
                          <li><i class="fa fa-phone" aria-hidden="true"></i>
                             9844172496
                          </li>
                          <li><i class="fa fa-envelope" aria-hidden="true"></i>
                             <a href="Javascript:void(0)">smak3598@gmail.com</a>
                          </li>
                       </ul>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div class="copyright">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
              </div>
              <div class="col-md-12">
                 <p>© 2020 All Rights Reserved Bon Apetito</p>
              </div>
           </div>
        </div>
     </div>
  </div>
</footer>
  <!-- Footer -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="script.js"></script>
<script>
  const scriptURL = 'https://script.google.com/macros/s/AKfycbxRepF06OkJpjO8GA6SBn0Z963Vlfr6tC0uDqCa4T0rFJknC9zzLm41pvNelDiq7VVhDw/exec'
  const form = document.forms['submit-to-google-sheet']

  form.addEventListener('submit', e => {
    e.preventDefault()
    fetch(scriptURL, { method: 'POST', body: new FormData(form)})
      .then(response => console.log('Success!', response))
      .catch(error => console.error('Error!', error.message))
  })
</script>

</body>
</html>