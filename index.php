<!-- title of the page -->

<title>E-Pharmacy</title>

<!-- header include -->
<?php include './layouts/front/header.php'; ?>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./assets/images/banner/banner-1.jpg" alt="First slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/images/banner/banner-2.jpg" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./assets/images/banner/banner-3.jpg" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <h2 class="text-center mt-5">E-Parmacy Vision</h2>

  <!-- cards starts -->

    <div class="container my-5">
      <div class="row">
        <div class="col-md-6">
          <h2 class="border-bottom">Your Patient Advocates</h2>
          <p>
            We are an advocacy group that provides the proper applications and paper work for the patient assistance program of your choice. We gather your information via an initial consultation and pre-fill your application. Patient assistance programs are put in place to allow those who qualify to receive brand-name medication based on FPL income guidelines.
          </p>
          <p>
            You can have your prescription delivered right to your door with no hassle and at a cost that you can afford. Our team of advocates is here to relieve your stress and help you continue your lifestyle without any added burden
          </p>
        </div>
        <div class="col-md-6">
          <img src="./assets/images/cards/card-5.png" alt="">
        </div>
      </div>
    </div>
 
  <!-- cards ends -->

<!-- footer include -->
<?php include './layouts/front/footer.php'; ?>

