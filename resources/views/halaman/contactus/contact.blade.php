<!-- Contact Section -->
      <section id="contact" class="contact section">

        <!-- Section Title -->
        <div class="container section-title">
          <h2>Kontak</h2>
          <p>Kontak Kami</p>
        </div><!-- End Section Title -->

        <div class="container">

          <div class="row gy-4">

            <div class="col-lg-6">

              <div class="row gy-4">
                <div class="col-md-6">
                  <div class="info-item" >
                    <i class="bi bi-geo-alt"></i>
                    <h3>Alamat</h3>
                    <p>Jl. Proklamasi No.56, RT.10/RW.2, Pegangsaan, Kec. Menteng, Kota Jakarta Pusat</p>
                    <p>DKI Jakarta, ID 10320</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item">
                    <i class="bi bi-telephone"></i>
                    <h3>Telepon Kami</h3>
                    <p>+62 8212 5189 898</p>
                    <p>+181</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item">
                    <i class="bi bi-envelope"></i>
                    <h3>Email Kami</h3>
                    <p>infoppid@bakamla.go.id</p>
                    <p>contactcenter@bakamla.go.id</p>
                  </div>
                </div><!-- End Info Item -->

                <div class="col-md-6">
                  <div class="info-item">
                    <i class="bi bi-clock"></i>
                    <h3>Jam Kerja</h3>
                    <p>Senin - Jumat</p>
                    <p>08:00 - 16:00</p>
                  </div>
                </div><!-- End Info Item -->

              </div>

            </div>

            <div class="col-lg-6" style="background-color:#F0F8FF;border-radius:5px;">
              @if(session('success'))
              <div class="toast-container position-fixed top-0 end-0 p-3">
                <div id="liveToast" class="toast show align-items-center text-bg-success border-0">
                  <div class="d-flex">
                    <div class="toast-body">
                      {{ session('success') }}
                    </div>
                    <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
                  </div>
                </div>
              </div>
              @endif
              <form action="{{ route('pesan.store') }}" method="POST">
                @csrf

                <div class="row gy-4">

                <div class="col-md-6" style="padding-top:15px;">
                <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                <p style="color:red; font-size:12px;">* Nama Wajib Di Isi</p>
                </div>

                <div class="col-md-6" style="padding-top:15px;">
                <input type="email" class="form-control" name="email" placeholder="Email Anda" required>
                <p style="color:red; font-size:12px;">* Email Wajib Di Isi</p>
                </div>

                <div class="col-12">
                <textarea class="form-control" name="pesan" rows="6" placeholder="Pesan Anda" required></textarea>
                <p style="color:red; font-size:12px;">* Pesan Wajib Di Isi</p>
                </div>

                <div class="col-12 text-center">
                  <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                </div>

                </div>
              </form>
            </div><!-- End Contact Form -->

          </div>

        </div>

      </section><!-- /Contact Section -->