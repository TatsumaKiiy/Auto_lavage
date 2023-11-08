
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Landing Page With Light/Dark Mode</title>
    <link rel="stylesheet" href="style/new.css" />
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        <img src="./img/shape.png" alt="" class="shape" />

        <header>
          <div class="container">
            <div class="logo">
              <img src="./images/RD.png" alt="Logo" />
              <h3>Royal Detailing</h3>
            </div>

            <div class="links">
              <ul>
                <li><a href="index.php?uc=prestations">Prestations</a></li>
                <li><a href="index.php?uc=produits">Produits</a></li>
                <li><a href="index.php?uc=contact">Contact</a></li>
                <li><a href="index.php?uc=devis">Devis</a></li>
                <li><a href="index.php?uc=login" class="btn">Se connecter</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Ce n'est pas juste un lavage.</h1>
                <h1>C'est <span>du Detailing</span></h1>
              </div>
              <p class="text">
                    Ravivez la beauté de votre voiture avec Royal Detailling
                 pour une brillance exceptionnelle.
              </p>
              <div class="cta">
                <a href="#" class="btn">Découvrir</a>
              </div>
            </div>

            <div class="right">
              <img src="images/img/carwash.png" alt="Product Image" class="product" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="util/app.js"></script>
  </body>
</html>
