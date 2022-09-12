<section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <?php
            foreach($karyawan->tampil() as $row) {
              if($page=="home"&&$no>4){break;}
              $nama        = $row['nama'];
              $id_jabatan  = $row['id_jabatan'];
              $foto        = $row['foto'];
              if (empty($foto)) {$foto="default.png";}
              $nj          = $jabatan->tampil_id($id_jabatan)["jabatan"]
          ?>
          <div class="col-lg-3 col-md-6 align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/karyawan/<?= $foto ?>" class="img-fluid" alt="" style="height: 300px; width: 100%; object-fit: cover;">
                <div class="social">
                  <a href="#"><i class="bi bi-twitter"></i></a>
                  <a href="#"><i class="bi bi-facebook"></i></a>
                  <a href="#"><i class="bi bi-instagram"></i></a>
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?= $nama ?></h4>
                <span><?= $nj ?></span>
              </div>
            </div>
          </div>
          <?php } ?>

        </div>

      </div>
    </section>