<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" style="margin-top: 60px;" data-aos="fade-up">
      <h2>PPID Bakamla RI</h2>
      <p>Permohonan Informasi Publik</p>
    </div><!-- End Section Title -->
    
    <div class="container" data-aos="fade-up" data-aos-delay="100">
    <h5 data-aos="fade-up">Form Registrasi Lembaga/Instansi</h5>

      <div class="row gy-4">

        <div class="col-lg">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="nip" class="form-group">NIP</label>
                <input type="text" name="nip" class="form-control" placeholder="NIP Anda" required="">
              </div>

              <div class="col-md-6">
                <label for="nama1" class="form-group">Lembaga/Instansi</label>
                <input type="text" name="nama1" class="form-control" placeholder="Nama Lembaga/Instansi Anda" required="">
              </div>

              <div class="col-md-6">
                <label for="no_telp" class="form-group">Nomor Telepon</label>
                <input type="text" name="no_telp" class="form-control" placeholder="08xx-xxxx-xxxx" required="">
              </div>

              <div class="col-md-6">
                <label for="pekerjaan" class="form-group">Pekerjaan</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan Anda" required="">
              </div>

              <div class="col-md-6">
                <label for="alamat" class="form-group">Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat Anda" required="">
              </div>

              <div class="col-md-6 ">
                <label for="email" class="form-group">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
              </div>
              
              <div class="col-md-6 ">
                <label for="password" class="form-group">Password</label>
                <input type="password" class="form-control" name="password" required="">
              </div>

              <div class="col-md-6 ">
                <label for="konfirmasi_password" class="form-group">Konfirmasi Password</label>
                <input type="password" class="form-control" name="konfirmasi_password" required="">
              </div>

              {{-- <div class="col-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
              </div> --}}

              {{-- <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Pesan" required=""></textarea>
              </div> --}}

              <div class="col-12 text-center">
                {{-- <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div> --}}

                <button type="reset" class="btn btn-secondary">Batal</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>

            </div>
          </form>
        </div><!-- End Contact Form -->

      </div>

    </div>

  </section><!-- /Contact Section -->

  <main id="main">

  </main><!-- End #main -->
  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}
  @include('layouts/aplikasi')