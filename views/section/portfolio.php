<section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php
              $no=1;
              foreach($portfolio->tampil() as $row) {
                  $id_portfolio = $row['id_portfolio'];
                  $nama         = $row['nama'];
                  $deskripsi    = $row['deskripsi'];
                  $tanggal      = $row['tanggal'];
                  $tanggal2     = date_create("$tanggal");
                  $foto         = $row['foto'];
                  if (empty($foto)) {$foto="default.png";}
          ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/<?= $foto ?>" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><?= $nama ?></h4>
              <p><?= date_format($tanggal2,"d F Y") ?></p>
              <a href="assets/img/portfolio/<?= $foto ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="details-<?= $id_portfolio ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
          <?php $no++; } ?>

        </div>

      </div>
    </section>