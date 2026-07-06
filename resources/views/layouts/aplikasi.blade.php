<!DOCTYPE html>
<html lang="id">

<head>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VBDN3GPGFK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-VBDN3GPGFK');
  </script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Website Pejabat Pengelola Informasi Publik (PPID) Badan Keamanan Laut Republik Indonesia mewujudkan pelayanan informasi publik yang informatif dan memberikan keterbukaan informasi yang optimal kepada lembaga maupun perorangan">
  <meta name="keywords" content="PPID, Badan Keamanan Laut, informasi publik secara berkala, informasi publik serta merta, informasi publik setiap saat, informasi publik dikecualikan" >
  <meta property="og:title" content="Website Utama PPID Badan Keamanan Laut">
  <meta property="og:description" content="Website Utama PPID Badan Keamanan Laut Republik Indonesia">
  
  <title>PPID | Badan Keamanan Laut RI</title>
  <!-- Favicons -->
  <link rel="icon" href={{ asset('assets/img/logobkl.png') }}>
  <link rel="apple-touch-icon" href={{ asset('assets/img/logobkl.png')}}>
  <!-- jQuery Core -->
  <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
  <!-- DataTables -->
  <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap5.min.js') }}"></script>
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}>
  <link rel="stylesheet" href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}>
  <link rel="stylesheet" href={{ asset('assets/vendor/aos/aos.css')}}>
  <link rel="stylesheet" href={{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}>
  <link rel="stylesheet" href={{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}>
  <!-- Main CSS File -->
  <link rel="stylesheet" href={{ asset('assets/css/main.css')}}>
  <link rel="stylesheet" href={{ asset('assets/css/custom.css')}}>
  <!-- leflet -->
  {{-- <link rel="stylesheet" href="{{ asset('be/src/assets/leaflet/leaflet.css') }}"> --}}
  <link rel="stylesheet" href="{{ asset('be/src/assets/leaflet/leaflet.css') }}">
  
  
  @yield('style')

</head>

<body class="index-page">
    
    @include('halaman.partials.header')
    
    <main id="main">
        @yield('konten')
    </main>

    @include('halaman.partials.footer')

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('assets/vendor/php-email-form/validate.js') }}></script>
  <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
  <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
  <script src={{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}></script>
  <script src={{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}></script>
  <script src={{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}></script>
  <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
  <!-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script> -->

  <!-- Main JS File -->
  <script src={{ asset('assets/js/main.js') }}></script>

  <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script> 
  
  <script src="{{ asset('../be/src/assets/leaflet/leaflet.js')}}"></script>
  <script>
    const lokasi = @json($lokasi);

    // Inisialisasi map (default Indonesia)
    const map = L.map('map').setView([-2.5, 118], 5);

    // Tile layer (OpenStreetMap)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap'
    }).addTo(map);

    // 🔥 CUSTOM ICON
    const bakamlaIcon = L.icon({
        iconUrl: '{{ asset('assets/img/logobkl.png')}}', // lokasi file icon
        iconSize: [40, 40],
        iconAnchor: [20, 40],
        popupAnchor: [0, -40]
    });

   // loop marker
    lokasi.forEach(item => {

    const marker = L.marker([item.lat, item.lng], {
        icon: bakamlaIcon
    }).addTo(map);

    marker.bindPopup(`
        <b>${item.nama}</b><br>
        ${item.alamat}
    `);

    // 🔥 klik marker = zoom otomatis
    marker.on('click', function () {

        map.flyTo([item.lat, item.lng], 15, {
            duration: 2
        });

        marker.openPopup();

    });

  });
  </script>
  <script>
         $(document).ready(function() {
            var navbar = $('.sticky-navbar');

            // Add sticky class on scroll
            $(window).scroll(function() {
               if ($(this).scrollTop() > 50) { // Adjust this value as needed
                  navbar.addClass('scrolled');
               } else {
                  navbar.removeClass('scrolled');
               }
            });
         });

         var elem = document.querySelector('.main-carousel');
         var flkty = new Flickity( elem, {
            // options
            cellAlign: 'left',
            contain: true,
            prevNextButtons: false,
            autoPlay: 5000
         });

        // Homepage Hero Background roller (Multi-layer, Zero-snap system)
         const backgrounds = [];
         const listBackground = [{"id":17,"file":"images\/background\/background_675991da95b81.jpg","status":1},{"id":18,"file":"images\/background\/background_675992bf32023.jpg","status":1},{"id":20,"file":"images\/background\/background_676e89f01647e.jpeg","status":1},{"id":21,"file":"images\/background\/background_676e8a70b358c.jpeg","status":1},{"id":22,"file":"images\/background\/background_676e8ad0436c5.jpeg","status":1},{"id":23,"file":"images\/background\/background_69b7641c84506.png","status":1},{"id":24,"file":"images\/background\/background_6a152de8a5f38.jpeg","status":1},{"id":25,"file":"images\/background\/background_6a15373343af6.jpeg","status":1}];
         if (listBackground !== null && listBackground.length > 0) {
            listBackground.forEach(item => {
                backgrounds.push(`url('/storage/${item.file}')`);
            });
         } else {
            backgrounds.push("url('images/backgrounds/background-kapal.png')");
            backgrounds.push("url('images/backgrounds/bg.jpg')");
         }

         let currentIndex = 0;
         const layer1 = document.getElementById('bgLayer1');
         const layer2 = document.getElementById('bgLayer2');

         // 8 Cinematic transition effects inventory
         const effects = [
             'kb-zoom-in',
             'kb-zoom-out',
             'kb-pan-left',
             'kb-pan-right',
             'kb-pan-up',
             'kb-pan-down',
             'kb-diag-br',
             'kb-diag-tl'
         ];

         let activeLayer = layer1;
         let incomingLayer = layer2;

         // Initial background setup
         if (backgrounds.length > 0) {
             activeLayer.style.backgroundImage = backgrounds[currentIndex];
             activeLayer.style.opacity = '1';
             activeLayer.style.zIndex = '-2';
             // Apply initial random zoom-in to look immediately alive
             activeLayer.classList.add('kb-zoom-in');
         }

         function changeBackground() {
             if (backgrounds.length <= 1) return;

             // 1. Calculate the next background index
             currentIndex = (currentIndex + 1) % backgrounds.length;

             // 2. Preload image onto the incoming background layer (currently hidden at opacity 0)
             incomingLayer.style.backgroundImage = backgrounds[currentIndex];

             // 3. Clean up animation classes ONLY on the incoming layer
             // (This avoids snapping the outgoing layer which is still visible during its 2.5s fade out)
             effects.forEach(eff => {
                 incomingLayer.classList.remove(eff);
             });
             incomingLayer.classList.remove('active-init');

             // 4. Select a random cinematic effect for the incoming layer
             const randomEffect = effects[Math.floor(Math.random() * effects.length)];
             incomingLayer.classList.add(randomEffect);

             // 5. Stack the incoming layer directly above the active layer (using z-index)
             incomingLayer.style.zIndex = '-2';
             activeLayer.style.zIndex = '-3';

             // 6. Perform the hardware-accelerated cross-fade transition
             incomingLayer.style.opacity = '1';
             activeLayer.style.opacity = '0';

             // 7. Swap active and incoming layer references
             const temp = activeLayer;
             activeLayer = incomingLayer;
             incomingLayer = temp;
         }

         // Auto-play backgrounds every 7 seconds (majestic, slow cinematic experience)
         if (backgrounds.length > 1) {
             setInterval(changeBackground, 7000);
         }

       </script>

  @yield('scripts')
  <!-- Widget -->
  {{-- <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>
  <script src="https://web.animemusic.us/widget_disabilitas.js"></script> --}}
  <script src="https://code.responsivevoice.org/responsivevoice.js?key=x7dIx3sY"></script>
  <script src="{{ asset('assets/vendor/js/widget_disabilitas.js') }}"></script>
  
</body>

</html>
