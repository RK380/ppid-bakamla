<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
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
              <div class="row gy-4">

                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="service-item item-red position-relative">
                    <i class="bi bi-info-circle icon"></i>
                      <h2>0</h2>
                      <h3>INFORMASI</h3>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="service-item item-red position-relative">
                    <i class="bi bi-upload icon"></i>
                      <h2>0</h2>
                      <h3>PERMOHONAN</h3>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item item-red position-relative">
                    <i class="bi bi-exclamation-triangle icon"></i>
                      <h2>0</h2>
                      <h3>KEBERATAN</h3>
                  </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item item-red position-relative">
                    <i class="bi bi-check-square icon"></i>
                      <h2>0</h2>
                      <h3>SELESAI</h3>
                  </div>
                </div>

              </div>
            </div>
          </section>

          <div class="row mt-3">
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="700">
                <div class="card shadow-lg bg-grad-secondary">
                    <div class="card-body">
                        <h5 class="text-dark mb-0 mt-5">Informasi Publik</h5>
                        <canvas id="myChart" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="700">
                <div class="card shadow-lg bg-grad-secondary">
                    <div class="card-body">
                        <h5 class="text-dark mb-0 mt-5">Permohonan Informasi</h5>
                        <canvas id="myChart2" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="800">
                <div class="card shadow-lg bg-grad-secondary">
                    <div class="card-body">
                        <h5 class="text-dark mb-0 mt-5">Jumlah Permohonan</h5>
                        <p class="text-muted small mb-0">Berdasarkan user pada bulan sekarang (<?php echo e(\Carbon\Carbon::now()->isoFormat('MMMM')); ?>)</p>
                        <canvas id="myChart3" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6" data-aos="fade-up" data-aos-delay="800">
                <div class="card shadow-lg bg-grad-secondary">
                    <div class="card-body">
                        <h5 class="text-dark mb-0 mt-5">Jumlah Keberatan</h5>
                        <p class="text-muted small mb-0">Berdasarkan user pada bulan sekarang (<?php echo e(\Carbon\Carbon::now()->isoFormat('MMMM')); ?>)</p>
                        <canvas id="myChart4" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
          </div>
                
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