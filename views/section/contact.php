<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p><?= $contact->tampil_id(1)["alamat"] ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p><?= $contact->tampil_id(1)["email"] ?></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><?= $contact->tampil_id(1)["phone"] ?></p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1729049274286!2d106.86082449999999!3d-6.2409292999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3a139c977eb%3A0x5eda169af7690329!2sJl.%20KP.Dalam%20IV%20No.16%2C%20RT.6%2FRW.14%2C%20Kb.%20Baru%2C%20Kec.%20Tebet%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012830!5e0!3m2!1sen!2sid!4v1663000300739!5m2!1sen!2sid" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="home" method="post" role="form" class="email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="pesan" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="text-center"><button type="submit" name="submit-tambah">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>