<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Initialize database -->
    <?php
      include('../php/init_databases.php');
    ?>
    <!-- Importing CSS files -->
    <link rel="stylesheet" href="../css/theme.css" />
    <link rel="stylesheet" href="../css/index.css" />
    <!-- Importing Bootstrap CSS and JS files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Setting document encoding and viewport meta tag -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Setting the document title and favicon -->
    <title>Home | Ether Earth&#8482</title>
    <link rel="icon" href="../images/favicon.png">
</head>

<body>
  <!-- Navigation bar -->
  <header>
    <nav class="navbar navbar-expand-sm bg-light">
      <!-- Navigation bar contents -->
      <div class="container-fluid ">
          <!-- Brand and Current page links -->
          <div class="brand col-lg-3">
            <a class="nav-link d-inline-block" href="../html/index.php">Ether Earth</a>
            <a class="nav-link d-inline-block" href="#">|</a>
            <a class="nav-link d-inline-block" href="../html/index.php">Home</a>
          </div>
        <ul class="navbar-nav col-lg-6 d-flex justify-content-center">
          <!--  Logo  -->
          <li class="nav-item">
            <img src="../images/logo.png" alt="Logo"></img>
          </li>
          <!-- Technology drop down menu -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Technology</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../html/oil_cleaning_tech.html">Oil Cleaning Technology</a></li>
              <li><a class="dropdown-item" href="../html/solar_tech.html">Solar Energy Technology</a></li>
            </ul>
          </li>
          <!--  Careers page link -->
          <li class="nav-item">
            <a class="nav-link" href="../html/catalog.html">Careers</a>
          </li>
          <!--  Quoting page link -->
          <li class="nav-item">
            <a class="nav-link" href="../html/quoting.html">Quoting</a>
          </li>
          <!-- General Information drop down menu -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">General Information</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="../html/mission_statement.html">Mission Statement</a></li>
              <li><a class="dropdown-item" href="../html/notable_figures.html">Notable Figures</a></li>
              <li><a class="dropdown-item" href="../html/locations.html">Locations</a></li>
              <li><a class="dropdown-item" href="../html/about.html">About Us</a></li>
            </ul>
          </li>
        <!-- Spacer to center navbar -->
        </ul>
        <div class="spacer col-lg-3"></div>
      </div>
    </nav>
  </header>
  
  <!--  Nature banner with quote  -->
  <div class="banner">
    <p>It's What We Do</p>
  </div>

  <!--  First row of cards  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 d-flex justify-content-center">
        <div class="card">
          <img src="../images/oil_cleanup_card.jpg" alt="Oil Cleanup">
          <div class="card-content">
            <h3>Oil Cleanup Technology</h3>
            <p>We offer a wide variety of oil cleanup solutions, everything from your local mechanic to BP</p>
            <a href="../html/oil_cleaning_tech.html"><button>Learn More</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-flex justify-content-center">
        <div class="card">
          <img src="../images/solar_panels_card.jpg" alt="Solar Panel Installation">
          <div class="card-content">
            <h3>Solar Technology</h3>
            <p>Solar panel installation as low as $15,000. Tax credits are accepted, as well as any subsidaries.</p>
            <a href="../html/solar_tech.html"><button>Learn More</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Business people banner  -->
  <div class="careers_banner">   
  </div>

  <!--  Second row of cards  -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 d-flex justify-content-center">
        <div class="card">
          <img src="../images/business_woman_card.jpg" alt="Business Woman">
          <div class="card-content">
            <h3>Careers</h3>
            <p>Climate change is important, and it requires the best and brightest. We are here to give them the opportunity to shine.</p>
            <a href="../html/catalog.html"><button>Learn More</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-flex justify-content-center">
        <div class="card">
          <img src="../images/quoting_card.jpg" alt="Man In Hardhat">
          <div class="card-content">
            <h3>Quoting</h3>
            <p>The best and brightest also provide the highest quality at the lowest prices.</p>
            <a href="../html/quoting.html"><button>Learn More</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  Sunset banner with quote  -->
  <div class="general_information_banner banner">
	  <p>A nation that destroys its soils destroys itself. Forests are the lungs of our land, purifying the air and giving fresh strength to our people. ― Franklin D. Roosevelt</p>    
	</div>

  <!-- Third row of cards -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 d-flex justify-content-center">
        <div class="card">
          <img src="../images/mission_statement_card.jpg" alt="Globe with the words bring the world together">
          <div class="card-content">
            <h3>Mission Statement</h3>
            <p>Climate change is important, and it requires the best and brightest. We are here to give them the opportunity to shine.</p>
            <a href="../html/mission_statement.html"><button>Learn More</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex justify-content-center">
        <div class="card">
          <img src="../images/notable_figures_card.jpg" alt="Jane Goodall">
          <div class="card-content">
            <h3>Notable Figures</h3>
            <p>Learn more about the history of environmental sciences and conservation efforts. Together we can preserve the world we live in.</p>
            <a href="../html/notable_figures.html"><button>Learn More</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex justify-content-center">
        <div class="card">
          <img src="../images/locations_card.jpg" alt="World map">
          <div class="card-content">
            <h3>Careers</h3>
            <p>As an international company doing our best to make a change, we have hundreds of locations around the globe.</p>
            <a href="../html/locations.html"><button>Learn More</button></a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 d-flex justify-content-center">
        <div class="card">
          <img src="../images/about_us_card.jpg" alt="About Us">
          <div class="card-content">
            <h3>Quoting</h3>
            <p>Learn more about what we do and who we are.</p>
            <a href="../html/about.html"><button>Learn More</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!--  Footer  -->
  <footer>
    <nav class="navbar navbar-expand-sm bg-light">
        <div class="container-fluid justify-content-center">
          <ul class="navbar-nav">
            <!--  About Us page -->
            <li class="nav-item">
              <a class="nav-link" href="../html/about.html">About Us</a>
            </li>
            <!--  Support page -->
            <li class="nav-item">
              <a class="nav-link" href="../html/support.html">Customer Support</a>
            </li>
            <!--  References page -->
            <li class="nav-item">
              <a class="nav-link" href="../html/references.html">References</a>
            </li>
            <!--  Privacy page -->
            <li class="nav-item">
              <a class="nav-link" href="../html/privacy.html">Privacy</a>
            </li>
          </ul>      
        </div>
    </nav>
    <nav class="navbar navbar-expand-sm bg-light">
      <div class="container-fluid justify-content-center">
        <span class="navbar-text">Copyright &copy; 2023 Ether Earth&#8482</span>  
      </div>
    </nav>
  </footer>
    
</body>
</html>
