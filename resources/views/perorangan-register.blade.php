<section id="contact" class="contact section">

    <!-- Section Title -->
    <div class="container section-title" style="margin-top: 60px;" data-aos="fade-up">
      <h2>PPID Bakamla RI</h2>
      <p>Permohonan Informasi Publik</p>
    </div><!-- End Section Title -->
    
    <div class="container" data-aos="fade-up" data-aos-delay="100">
    <h5 data-aos="fade-up">Form Registrasi Perorangan</h5>

      <div class="row gy-4">

        <div class="col-lg">
          <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6">
                <label for="nik" class="form-group">NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="NIK Anda" required="">
              </div>

              <div class="col-md-6">
                <label for="alamat" class="form-group">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Alamat Anda" required=""></textarea>
              </div>

              <div class="col-md-6">
                <label for="nama2" class="form-group">Nama Lengkap</label>
                <input type="text" name="nama2" class="form-control" placeholder="Nama Anda" required="">
              </div>

              <div class="col-md-6 ">
                <label for="email" class="form-group">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
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
                <label for="pekerjaan" class="form-group">Upload KTP Pribadi</label>
                <input type="file" name="file_path" class="form-control-file @error('file_path') is-invalid @enderror">
                <p class="font-italic text-muted small">*File yang boleh diupload jpg, jpeg, png dan maksimal 2MB.</p>
              </div>
            </div>

            <div class="row gy-4">
              <div class="col-md-6 ">
                <label for="password" class="form-group">Password</label>
                <input type="password" class="form-control" name="password" required="">
              </div>

              <div class="col-md-6 ">
                <label for="konfirmasi_password" class="form-group">Konfirmasi Password</label>
                <input type="password" class="form-control" name="konfirmasi_password" required="">
              </div>

              <div class="col-12 text-center">
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