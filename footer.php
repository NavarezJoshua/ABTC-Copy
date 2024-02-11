<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="./user-css/footer.css">
<?php include 'email.php' ?>
<footer id="footer">
      <div class="main-content">
        <div class="about box">
          <h2>About us</h2>
          <div class="content">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque rerum excepturi totam voluptate doloribus quibusdam optio itaque, possimus consequuntur aut ex ipsum magnam saepe! Similique.</p>
            <div class="social">
              <a href="https://www.facebook.com/profile.php?id=100084709159245"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="#"><span class="fab fa-instagram"></span></a>
              <a href="#"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>
        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Liwasan ng Bayani, Brgy Alabang, Muntinlupa City</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+63-9554764782</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">abc_alabang@gmail.com</span>
            </div>
          </div>
        </div>
        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="" method="post">

              <div class="name">
                <div class="text">Name <span id="important">*</span></div>
                <input type="text" name="name" required>
              </div>

              <div class="email">
                <div class="text">Email <span id="important">*</span></div>
                <input type="email" name="email" required>
              </div>

              <div class="msg">
                <div class="text">Message <span id="important">*</span></div>
                <textarea rows="2" cols="25" name="message" required></textarea>
              </div>

              <div class="btn">
                <button type="submit" name="send">Send</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </footer>