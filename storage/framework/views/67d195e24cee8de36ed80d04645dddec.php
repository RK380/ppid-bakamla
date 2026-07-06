<!-- ======= Hero Section ======= -->
<section id="values" class="values section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" style="margin-top:60px;">Statistik Layanan Informasi Publik</h1>
          <h2 data-aos="fade-up" data-aos-delay="200">Badan Keamanan Laut Republik Indonesia (Bakamla RI)</h2>
          <style>       
            .bg-grad {
                background-image: linear-gradient(to right, #f06161 0%, #d82137  51%, #f06161  100%);
                text-align: center;
                text-transform: none;
                transition: 0.5s;
                background-size: 200% auto;
                color: white;            
                box-shadow: 0 0 20px #eee;
                border-radius: 10px;
                display: block;
                margin-bottom: 30px;
            }   

            .bg-grad:hover {
                background-position: right center; /* change the direction of the change here */
                color: #fff;
                text-decoration: none;
            }
             
            .bg-grad-secondary {
                background-image: linear-gradient(to right, #f0f0f0 0%, #FFFFFF  51%, #f0f0f0  100%);
                text-align: center;
                text-transform: none;
                transition: 0.5s;
                background-size: 200% auto;
                color: white;            
                box-shadow: 0 0 20px #eee;
                border-radius: 10px;
                display: block;
                margin-bottom: 30px;
            }
        
            .bg-grad-secondary:hover {
                background-position: right center; /* change the direction of the change here */
                color: #fff;
                text-decoration: none;
            } 
          </style>

          <section id="services" class="services section">
            <div class="container">
                    <div class="row1" id="stats">
                      <div style="padding-top: 30px;width: 90%; margin: 0 auto;" class="max-auto">
                          <div class="row">
                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-peraturan" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-info"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Informasi</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"><?php echo e($jumlahKlasifikasi['Informasi Publik Secara Berkala'] ?? 0); ?></p>
                                      </div>
                                  </a>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="400" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-artikel" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-upload icon"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Permohonan</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"> <?php echo e($jumlahKlasifikasi['Informasi Publik Serta Merta'] ?? 0); ?></p>
                                      </div>
                                  </a>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="500" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-putusan" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-exclamation-triangle icon"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Keberatan</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"><?php echo e($jumlahKlasifikasi['Informasi Publik Setiap Saat'] ?? 0); ?></p>
                                      </div>
                                  </a>
                            </div>

                            <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="500" >
                                  <a href="https://ppid.bakamla.go.id/daftar-informasi-publik/" class="card-stat stat-monografi" data-asw-org-font-size="16" style="font-size: 16px;">
                                      <div class="stat-icon-box">
                                        <i class="bi bi-check-square icon"></i>
                                      </div>
                                      <div class="stat-content">
                                        <h3 class="stat-title" data-asw-org-font-size="15" style="font-size: 15px;">Selesai</h3>
                                        <p class="stat-number" data-asw-org-font-size="30" style="font-size: 30px;"><?php echo e($jumlahKlasifikasi['Informasi Publik Setiap Saat'] ?? 0); ?></p>
                                      </div>
                                  </a>
                            </div>
                          </div>
                      </div>
                    </div>
            </div>
          </section>

          
                
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
  <main id="main">

  </main><!-- End #main -->
  
  <?php $__env->startSection('scripts'); ?>
    <script>
      const ctx = document.getElementById('myChart').getContext('2d');
      const myChart = new Chart(ctx, {
          type: 'doughnut',
          data: {
              labels: [
                  'Informasi Setiap Saat',
                  'Informasi Secara Berkala',
                  'Informasi Serta Merta',
                  'Informasi Dikecualikan',
                  'Layanan Informasi'
              ],
              datasets: [{
                  label: '# of Votes',
                  data: [
                      0,0,0,0,0
                  ],
                  backgroundColor: [
                      '#00F2C3',
                      '#ffc107',
                      '#f06161',
                      '#007bff',
                      '#FD5D93',
                      '#17a2b8',
                  ],
                  hoverOffset: 5,
                  borderWidth: 0
              }]
          },
          options: {
              layout: {
                  padding: 40
              },
              plugins: {
                  responsive:true,
                  legend: {
                      position: 'bottom',
                      labels: {
                          padding: 10,
                          color: '#000',
                      },
                      title: {
                          display: true,
                      }
                  },
              },
          }
      });
    </script>

    <script>
        const ctx2 = document.getElementById('myChart2').getContext('2d');
        const myChart2 = new Chart(ctx2, {
            type: 'pie',
            data: {
                labels: ['Belum Diproses', 'Diproses', 'Diterima', 'Ditolak'],
                datasets: [{
                    label: '# of Votes',
                    data: [
                        // 0,0,0,0
                    ],
                    backgroundColor: [
                        '#6c757d',
                        '#ffc107',
                        '#00F2C3',
                        '#f06161',
                    ],
                    hoverOffset: 5,
                    borderWidth: 0
                }]
            },
            options: {
                layout: {
                    padding: 40
                },
                plugins: {
                    responsive:true,
                    legend: {
                        position: 'bottom',
                        labels: {
                            padding: 10,
                            color: '#000',
                        },
                        title: {
                            display: true,
                        }
                    },
                },
            }
        });
    </script>

    <script>
        const ctx3 = document.getElementById('myChart3').getContext('2d');
        const myChart3 = new Chart(ctx3, {
            type: 'bar',
            data: {
                labels: [
                    
                ],
                datasets: [{
                    data: [
                      
                    ],
                    backgroundColor: [
                        '#f06161',
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                layout: {
                    padding: 40
                },
                plugins: {
                    responsive:true,
                    legend: {
                        display: false,
                    },
                },
            }
        });
    </script>

    <script>
        const ctx4 = document.getElementById('myChart4').getContext('2d');
        const myChart4 = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: [

                ],
                datasets: [{
                    data: [
                        
                    ],
                    backgroundColor: [
                        '#ffc107',
                    ],
                    borderWidth: 0
                }]
            },
            options: {
                layout: {
                    padding: 40
                },
                plugins: {
                    responsive:true,
                    legend: {
                        display: false,
                    },
                },
            }
        });
    </script>
  <?php $__env->stopSection(); ?>
  <?php echo $__env->make('layouts/aplikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/ppid/resources/views/halaman/statistik/index.blade.php ENDPATH**/ ?>