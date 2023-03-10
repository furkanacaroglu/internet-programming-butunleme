<?php require_once("header.php"); ?>

<!-- ==================== Breadcumb Start Here ==================== -->
<section class="breadcumb section-bg py-120">
    <div class="work-shape d-flex justify-content-center">
        <ul class="work-shape__list">
            <li class="work-shape__item"><img src="assets/images/home-01/shape-circle.png" alt=""></li>
            <li class="work-shape__item"><img src="assets/images/home-01/shape-square.png" alt=""></li>
            <li class="work-shape__item"><img src="assets/images/home-01/shape-triangle.png" alt=""></li>

            <li class="work-shape__item"><img src="assets/images/home-01/shape-circle.png" alt=""></li>
            <li class="work-shape__item"><img src="assets/images/home-01/shape-square.png" alt=""></li>
            <li class="work-shape__item"><img src="assets/images/home-01/shape-triangle.png" alt=""></li>
        </ul>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="breadcumb__wrapper">
                    <h3 class="breadcumb__title"> Haberler </h3>
                  
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ==================== Breadcumb End Here ==================== -->

<!-- ==================== Blog Start Here ==================== -->
<section class="blog py-120">
    <div class="container">
       <div class="row gy-4">
        <div class="col-lg-12">
          <div class="row blog-wrapper gy-4 justify-content-center">



          <?php 
            
            $haberler=$database->prepare("SELECT * FROM `haberler`");
            $haberler->execute();
            $haber_listesi=$haberler->fetchAll();
           
            foreach($haber_listesi as $haber)
            {
            ?>
              <div class="col-lg-4 col-md-6">
                  <div class="blog-item">
                      <div class="blog-item__thumb">
                          <a href="haberler.php"><img src="<?php echo $haber["haberler_resim"]; ?>" alt=""></a>
                          
                      </div>
                    <div class="blog-item__content">
                         
                          <h3 class="blog-item__title"><a href="haberler.php"><?php echo $haber["haberler_baslik"]; ?></a></h3>
                    </div>
                    <div class="blog-item__content">
                         
                          <h7 class="blog-item__title"><a href="haberler.php"><?php echo $haber["haberler_bilgi"]; ?></a></h7>
                    </div>
                  </div>
              </div> 
            <?php } ?>

       </div>
    </div>
</section>
<!-- ==================== Blog End Here ==================== -->
<?php require_once("footer.php"); ?>
<footer class="footer-area section-bg-two">
    <ul class="work-shape__list">
        <li class="work-shape__item"><img src="assets/images/home-01/shape-circle.png" alt=""></li>
        <li class="work-shape__item"><img src="assets/images/home-01/shape-square.png" alt=""></li>
        <li class="work-shape__item"><img src="assets/images/home-01/shape-triangle.png" alt=""></li>
    </ul>
  <div class="container footer-top py-120">
      <div class="row justify-content-center gy-5">
          <div class="col-xl-3 col-sm-6">
              <div class="footer-item">
                  <div class="footer-item__logo">
                      <a href="index.html"> <img src="assets/images/logo/logo-footer.png" alt=""></a>
                  </div>
                  <p class="footer-item__desc">Bizi tercih etmek ayr??cal??kt??r...</p>
              </div>
          </div>
          <div class="col-xl-3 col-sm-6">
              <div class="footer-item">
                  <h5 class="footer-item__title bg-img bg-img__contain" style="background-image: url(assets/images/home-01/footer-title-bg.png);">Sayfalar</h5>
                  <ul class="footer-menu">
                      <li class="footer-menu__item"><a href="anasayfa.php" class="footer-menu__link">Anasayfa</a></li>
                      <li class="footer-menu__item"><a href="hakkimizda.php" class="footer-menu__link">Hakk??m??zda</a></li>
                      <li class="footer-menu__item"><a href="hizmetler.php" class="footer-menu__link">Hizmetler</a></li>
                      <li class="footer-menu__item"><a href="haberler.php" class="footer-menu__link">Haberler</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-xl-3 col-sm-6">
              <div class="footer-item">
                  <h5 class="footer-item__title bg-img bg-img__contain" style="background-image: url(assets/images/home-01/footer-title-bg.png);">Bize ula????n</h5>
                  <ul class="footer-menu">
                      <li class="footer-menu__item">+9050205202020</li>
                  </ul>
              </div>
          </div>
          <div class="col-xl-3 col-sm-6">
              <div class="footer-item">
                  <h5 class="footer-item__title bg-img bg-img__contain" style="background-image: url(assets/images/home-01/footer-title-bg.png);">Adresimiz</h5>
                  <p class="footer-item__desc">K??tahya Dumlup??nar Mah. MYO sok.</p>
              </div>
          </div>
      </div>
  </div>
  <!-- bottom Footer -->
  <div class="bottom-footer section-bg-two py-3">
    <div class="container">
        <div class="row gy-3">
            <div class="col-md-12 text-center">
                <p class="bottom-footer-text"> Furkan Acaro??lu taraf??ndan geli??tirildi.</p>
            </div>
        </div>
    </div>
  </div>
</footer>