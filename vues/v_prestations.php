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
                <li><a href="index.php?uc=">Produits</a></li>
                <li><a href="index.php?uc=contact">Contact</a></li>
                <li><a href="index.php?uc=login" class="btn">Se connecter</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
 
        body {
            margin: 2%;
            justify-content: center;
            overflow: hidden;
        }
 
        .box-wrapper {
            height: 95vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
 
        #box1 {
            padding: 10px;
            border: solid 1px green
        }
 
        #box2 {
            padding: 8px;
            border: solid 1px blue
        }
 
        #box3 {
            padding: 10px;
            flex-grow: 1;
            display: flex;
            flex-direction: row;
            border: solid 1px green
        }
 
        #box4 {
            flex-grow: 2;
            border: solid 1px orange
        }
 
        .middle-column {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
 
        .middle-column div {
            flex-grow: 1;
            margin: 0 8px;
            border: solid 1px red;
        }
 
        .middle-column div+div {
            margin-top: 8px
        }
 
        #box8 {
            flex-grow: 1;
            border: solid 1px black
        }
    </style>
        <div class="box_menu">
           <div class="txt-prestations">
              <h3>Nos Prestations</h3>
           </div>
              <div class="box-wrapper">
                    <div id="box1">
                        Box 1
                    </div>
            
                    <div id="box2">
                        Box 2
                    </div>
            
                    <div id="box3">
                        <div id="box4">
                            Box 4
                        </div>
                        <div class="middle-column">
                            <div id="box5">
                                Box 5
                            </div>
                            <div id="box6">
                                Box 6
                            </div>
                            <div id="box7">
                                Box 7
                            </div>
                        </div>
                        <div id="box8">
                            Box 8
                        </div>
                    </div>
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
