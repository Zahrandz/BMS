<section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <h3>Check our <span>Testimonials</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <?php
              $no=1;
              foreach($testimoni->tampil() as $row) {
                $id_testimoni    = $row['id_testimoni'];
                $nama            = $row['nama'];
                $deskripsi       = $row['deskripsi'];
                $id_jabatan      = $row['id_jabatan'];
                $foto            = $row['foto'];
                if (empty($foto)) {$foto="default.png";}
                $nj              = $jabatan->tampil_id($id_jabatan)["jabatan"]
            ?>
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <?= $deskripsi ?>
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimoni/<?= $foto ?>" class="testimonial-img" alt="">
                <h3><?= $nama ?></h3>
                <h4><?= $nj ?></h4>
              </div>
            </div>
            <?php $no++; } ?>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>