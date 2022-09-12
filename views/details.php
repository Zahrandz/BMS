<!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Portfolio Details</h2>
          <!-- <ol>
            <li><a href="index.html">Home</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li>Portfolio Details</li>
          </ol> -->
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <?php
                    $foto = $porto["foto"];
                    if (empty($foto)) {$foto="default.png";}
                  ?>
                  <img src="assets/img/portfolio/<?= $foto ?>" alt="">
                </div>

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3><?= $porto["nama"] ?></h3>
              <ul>
                <!-- <li><strong>Category</strong>: Web design</li>
                <li><strong>Client</strong>: ASU Company</li> -->
                <?php
                	$tanggal      = $porto["tanggal"];
                  $tanggal2     = date_create("$tanggal");
                ?>
                <li><strong>Project date</strong>: <?= date_format($tanggal2,"d F Y") ?></li>
                <li><strong>Project Location</strong>: <a href='<?= $porto["lokasi"] ?>' target="_blank"><?= $porto["lokasi"] ?></a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>This is an example of portfolio detail</h2>
              <p>
                <?= $porto["deskripsi"] ?>
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section