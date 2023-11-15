<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- external css bootstrap  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
    <!-- <link href="./css/style.css" rel="text/stylesheet"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
</head>
<body>

  <!-- header with connection and sql code -->
  <?php require_once './include/header.php' ?>


      <!-- Carosoul part start -->
      <section id="top" class="top">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="Bank.jpg" class="d-block w-100 img-fluid"  alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>The Spark Foundation Bank</h5>
              <p>A Safe and easier place for all your banking needs.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="def.webp" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>One of the trusted Banking System</h5>
              <p>Managing money made easy with us.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="abc.webp" class="d-block w-100 img-fluid" alt="...">
            <div class="carousel-caption d-none d-md-block external-img">
              <h5>Experience the best banking with us.</h5>
              <p>Do visit our new website with more facilities involved in banking.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
      <!-- CArosoul part end -->

        <!-- middle container start-->
        <section id="services" class="services">
        <div class="container my-5">
            <h1 class="text-dark text-center my-5">Our Banking Services</h1>
            <div class="container">
            <div class="row row-cols-2">       
              <div class="col ">
              <h3>Keep everything organized in one spot.</h3>   
                <div class="container col my-5">
                   <p class="lead"> View the complete list of clients here...</p>
                   <a href="customer.php"><button class="btn btn-primary" type="button" >Explore to view</button></a>
                </div>
                <div class="container col my-5">
                   <p class="lead"> View all Transactions here...</p>
                   <a href="transaction.php"><button class="btn btn-primary" type="button" >Explore to view</button></a>
                </div>
               
              </div>

              <div class="col">
              <img src="lend.jpg" class="rounded img-fluid float-right" alt="...">
              </div>
            </div>
            </section>

            <section id="about" class="about">
      <div class="container">

        <div class="section-title " >
          <h1 class="text-center my-5">A Little About Us</h1>
        </div>

        <div class="row content">
          <div class="col-lg-6 " >
            <img class="rounded img-fluid float-left" src="Fin.jpg" />
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 " >
            <p>
            A banking system is a comprehensive network of institutions, services, and technologies that facilitate the management and exchange of financial assets.
             It plays a crucial role in the economic infrastructure of a country by providing financial services to individuals, businesses, and governments.
             The Sparks Foundation Bank Basic Banking System is a web-based application designed to provide a simple yet effective platform for managing basic banking transactions. 
             The system focuses on essential functionalities such as customer account management, fund transfers, and transaction history.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      </div>
    </section>
             
            </div>
          </div>
        <!-- middle container end -->

         <!-- footer  -->
        <?php require_once './include/footer.php' ?>  
</body>

      <!-- bootstrap js script -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</html>