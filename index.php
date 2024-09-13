<?php 
date_default_timezone_set("Asia/Bangkok");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Ibnu & Intan Wedding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="icon" type="image/x-icon" href="img/icon.jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sacramento&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Concert+One&display=swap" rel="stylesheet">


    <!-- Simply Countdown -->
    <link rel="stylesheet" href="countdown/simplyCountdown.theme.default.css"/>
    <script src="countdown/simplyCountdown.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Salin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>

    <!-- Bosstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <section id="hero" 
    class="hero w-100 h-100 p-3 mx-auto text-center d-flex justify-content-center
    align-items-center text-white">
    <div data-aos="fade-up" data-aos-delay="100"
            data-aos-duration="2000">
         <main>
          <h4 id="wed">The Wedding Of</h4>
            <h3 id="nam">Ibnu & Intan </h3>
            <h4 id="dear">  Dear : <span></span></h4> 
            <i id="sen"class="bi bi-envelope-arrow-down-fill"></i>
            <span><a href="#home" class=" btn btn-lg mt-4" onClick="enableScroll()">Lihat Undangan</a></span>
           
         </main>
      </div>
    </section>
    <nav class="navbar navbar-expand-md bg-body-transparent sticky-top mynavbar">
      <div class="container">
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end offcanvas-size-sm" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"></h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
              <div class="navbar-nav ms-auto">
                <a class="nav-link" href="#home">Home</a>
                <a class="nav-link" href="#galery">Gallery</a>
                <a class="nav-link" href="#info">Info</a>
                <a class="nav-link" href="#gifts">Gifts</a>
              </div>
          </div>
        </div>
      </div>
    </nav>


    <div id="bghome">
    <section id="home" class="home">
              <div class="container" data-aos="zoom-in-up" data-aos-delay="100"
               data-aos-duration="2000" >
               <div class="simply-countdown" ></div>
              <div class="row justify-content-center">
               <div class="col-md-8 text-center">
                 
                  <h2 id="wed2"> The Wedding Of </h2>
                  <h1>Ibnu & Intan</h1>
                  <h3> Sabtu, 21 September 2024</h3><br><br><br>
                  <h2 id="bis">اَلسَّلَامُ عَلَيْكُمْ وَرَحْمَةُ اللهِ وَبَرَكَا تُهُ</h2>
                   <p id="t"> Tanpa Mengurangi Rasa Hormat, Kami Bermaksud Mengundang Bapak/Ibu/Saudara/I Untuk Menghadiri Acara Pernikahan Kami :</p>
                </div>
              </div>

              <div class="row couple ">
                <div class="col-lg-6">
                 <div class="row" data-aos="zoom-in" data-aos-delay="400"
                  data-aos-duration="2000">
                   <div class="col-8 text-end">
                      <h3 id="nama"> M. Ibnu Sina. S.P</h3><br><br><br><br><br>
                      <p id="p1"> Putra dari <br>Bapak Hasan <br> & <br> Ibu Masintan </p>
                    </div>
                    <div class="col-4">
                      <img src="img/pria.jpg" alt="Ibnu" class="img-responsive rounded-circle">
                   </div>
                 </div>
                </div>
          <div class="col-lg-6">
            <div class="row" data-aos="zoom-in" data-aos-delay="400"
            data-aos-duration="2000">
              <div class="col-4">
                <img src="img/wanita.jpg" alt="Intan" class="img-responsive rounded-circle ">
              </div>
              <div class="col-8">
                <h3 id="nama"> Intan Utari. S.M </h3><br><br><br><br><br>
                <p id="p2"> Putri dari <br> Bapak Padi (Dipo) <br> & <br> Ibu Herlina </p>
              </div>
            </div>
          </div>
          <span class="heart"><i class="bi bi-heart-fill"></i></span>
        </div>
      </div>

      <div id="galery" class="galery">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h2 id="gal" data-aos="fade-up" data-aos-delay="300"
              data-aos-duration="2000"> Gallery </h2>
            </div>
          </div>
          <div class="row">
            <div id="" class="col-md-4 col-6 mb-4" data-aos="zoom-in-left" data-aos-delay="500"
            data-aos-duration="2000" >
              <img src="img/gal2.jpg" class="img-fluid" alt="Image 1">
            </div>
            <div id="" class="col-md-4 col-6 mb-4" data-aos="zoom-in-left" data-aos-delay="500"
            data-aos-duration="2000" data-aos-offset="250">
              <img src="img/gal1.jpg" class="img-fluid" alt="Image 2">
            </div>
            <div id="" class="col-md-4 col-6 mb-4 mx-auto" data-aos="zoom-in-left" data-aos-delay="500"
            data-aos-duration="2000" >
              <img src="img/gal3.jpg" class="img-fluid" alt="Image 3">
            </div>
          </div>
        </div>
      </div>
      
      <div id="info" class="info">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300"
          data-aos-duration="2000">
            <div class="col-md-8 col-md-10 text-center">
              <h2> Save the Date </h2>
        </div>
        </div>
        <div class="row justify-content-center mt-4">
          <div class="col-md-5 col-10" data-aos="fade-right" data-aos-delay="300"
          data-aos-duration="2000">
            <div class="card text-center text-bg-light mb-5">
              <div class="card-header"> Akad Nikah </div>
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <i class="bi bi-clock d-block"></i>
                    <span> 09.00 WIB - Selesai </span>
                  </div>
                  <div class="col-md-6">
                    <i class="bi bi-calendar3 d-block"></i>
                    <span> Rabu, 18 September 2024 </span>
                  </div>
                  <div class="col-md-6"> <br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.913628643488!2d98.69677659999999!3d3.6072418999999996
                    !2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031319ba4be570f%3A0xbcc218d9a6aa8fe6!2sJl.%20Rela%20No.25%2C%20Sidorejo%2C%20Kec.
                    %20Medan%20Tembung%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020222!5e0!3m2!1sid!2sid!4v1726158444520!5m2!1sid!2sid" 
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div id="maps">
                      <i class="bi bi-geo-alt d-block"></i>
                      <span> <a id="loc" href="https://maps.app.goo.gl/i8X8Qoo7jRemn53U7" target="_blank" class="btn btn-danger btn-sm"> Lokasi Akad </a></span>
                      </div>
                  </div>
                </div>
                
              </div>
              <div class="card-footer">
                
              </div>
            </div>
          </div>
          <div class="col-md-5 col-10" data-aos="fade-left" data-aos-delay="300"
          data-aos-duration="2000">
            <div class="card text-center text-bg-light">
              <div class="card-header"> Resepsi Pernikahan </div>
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <i class="bi bi-clock d-block"></i>
                    <span> 10.00 WIB - Selesai </span>
                  </div>
                  <div class="col-md-6">
                    <i class="bi bi-calendar3 d-block"></i>
                    <span> Sabtu, 21 September 2024 </span>
                  </div>
                  <div class="col-md-6"><br>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.913628643488!2d98.69677659999999!3d3.6072418999999996
                    !2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031319ba4be570f%3A0xbcc218d9a6aa8fe6!2sJl.%20Rela%20No.25%2C%20Sidorejo%2C%20Kec.
                    %20Medan%20Tembung%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020222!5e0!3m2!1sid!2sid!4v1726158444520!5m2!1sid!2sid" 
                    width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div id="maps">
                    <i class="bi bi-geo-alt d-block"></i>
                    <span> <a id="loc" href="https://maps.app.goo.gl/i8X8Qoo7jRemn53U7" target="_blank" class="btn btn-danger btn-sm"> Lokasi Akad </a></span>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="card-footer">
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    
    
    <section id="gifts" class="gifts mb-5" data-aos="fade-up" data-aos="fade-left" data-aos-delay="300"
    data-aos-duration="2000">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-10 text-center">
        <span>Wedding Gift</span> 
        <p id="t"> Tanpa mengurangi rasa hormat kami, bagi tamu yang ingin mengirimkan hadiah kepada kedua mempelai dapat mengirimkannya melalui :
        </p>
      </div>
    </div>

    <div class="row justify-content-center text-center">
      <div class="col-md-8 col-lg-6">
        <div class="gift-card">
          <div class="gift-card-header">
            <i class="fas fa-gift gift-icon"></i>
            <h4>Bank Transfer</h4>
          </div>
          <div class="gift-card-body">
            <img src="img/bni.jpg" width="35%" alt="BNI Logo" class="bank-logo mb-3">
            <p class="account-number">1814360916</p>
            <p class="account-name">A.N. Muhammad Ibnu Sina</p>
            <button id="copyButton" class="btn btn-copy" data-clipboard-text="1814360916">
              <i class="far fa-copy"></i> Salin Nomor Rekening
            </button>
            <p id="copyMessage" class="copy-message mt-2" style="display: none;">Berhasil disalin!</p>
          </div>
        </div>
      </div>
    </div>

    <form id="commentForm" class="comment-form">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama" required>
  </div><br>
  <div class="form-group">
    <label for="ucapan">Ucapan</label>
    <textarea id="ucapan" name="ucapan" rows="5" required></textarea>
  </div><br>
  <button type="submit">Kirim Ucapan</button>
</form>

<!-- Tambahkan div untuk menampilkan komentar -->
<div id="commentList"></div>
</section>


<footer class="mt-5">
  <div class="container">
    <div class="row">
      <div id="copy" class="col text-center"> 
        <small class="block">&copy; Zecko_Dev. Ibnu & Intan Wedding 2024. Happy Wedding.</small>
      </div>
    </div>
  </div>
</footer>

    <div id="audio-container">
      <audio id="song" autoplay loop>
        <source src="audio/videoplayback (mp3cut.net).mp3" type="audio/mp3">
      </audio>

      <div class="audio-icon-wrapper" style="display: none;"">
        <i class="bi bi-disc"></i>
      </div>
    </div>
    
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

     <script>
        simplyCountdown('.simply-countdown', {
            year: 2024, // required
            month: 9, // required
            day: 21, // required
            words: { //words displayed into the countdown
                days: { singular: 'Hari', plural: 'Hari' },
                hours: { singular: 'Jam', plural: 'Jam' },
                minutes: { singular: 'Menit', plural: 'Menit' },
                seconds: { singular: 'Detik', plural: 'Detik' }
            },
        });
     </script>

     <script>
      const hamburger = document.querySelector('.navbar-toggler')
      const stickyTop = document.querySelector('.sticky-top');
      const offcanvas = document.querySelector('.offcanvas');


      offcanvas.addEventListener('show.bs.offcanvas', function(){
        stickyTop.style.overflow = 'visible';

      });

      offcanvas.addEventListener('hidden.bs.offcanvas', function(){
        stickyTop.style.overflow = 'hidden';
      });



     </script>

     <script>
      const audioInconWrapper = document.querySelector('.audio-icon-wrapper');
      const audioIncon = document.querySelector('.audio-icon-wrapper i');
      const song = document.querySelector('#song');
      let isPlaying = false;
      


      function disableScroll(){
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const scrollLeft = window.pageYOffset || document.documentElement.scrollLeft;

        window.onscroll = function(){
          window.scrollTo(scrollTop, scrollLeft);
        }

        const rootElement = document.querySelector(":root");
        rootElement.style.scrollBehavior='auto';

      }

      function enableScroll(){
        window.onscroll = function (){ }
        const rootElement = document.querySelector(":root");
        rootElement.style.scrollBehavior='smooth';
        // localStorage.setItem('opened','true');

        playAudio();
      }

      function playAudio(){
        song.volume=0.3;
        audioInconWrapper.style.display = 'flex';
        song.play();
        isPlaying = true;
      }


      audioInconWrapper.onclick = function(){
        if(isPlaying){
          song.pause();
          audioIncon.classList.remove('bi-disc');
          audioIncon.classList.add('bi-pause-circle');
        }else{
          song.play();
          audioIncon.classList.add('bi-disc');
          audioIncon.classList.remove('bi-pause-circle');
        }

        isPlaying = !isPlaying;
      }

      // if(!localStorage.getItem('opened')){
      //   disableScroll();

      // }
      disableScroll();
     </script>

     <script>
      const urlParams = new URLSearchParams(window.location.search);
      const to = urlParams.get('to') || '';

      const namaContainer = document.querySelector('.hero h4 span');

      namaContainer.innerText = `${to}`;

     </script>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var clipboard = new ClipboardJS('#copyButton');
    var copyMessage = document.getElementById('copyMessage');
    var copyButton = document.getElementById('copyButton');

    clipboard.on('success', function(e) {
      // Mengubah teks tombol
      copyButton.innerHTML = '<i class="fas fa-check"></i> Tersalin!';
      
      // Menampilkan pesan
      copyMessage.style.display = 'block';
      copyMessage.classList.add('show');

      // Mengembalikan tombol ke keadaan semula dan menyembunyikan pesan setelah 3 detik
      setTimeout(function() {
        copyButton.innerHTML = '<i class="far fa-copy"></i> Salin Nomor Rekening';
        copyMessage.classList.remove('show');
        setTimeout(function() {
          copyMessage.style.display = 'none';
        }, 300); // Menunggu animasi fade out selesai
      }, 3000);

      e.clearSelection();
    });

    clipboard.on('error', function(e) {
      console.error('Gagal menyalin teks: ', e.action);
    });
  });
</script>

<script>
document.getElementById('commentForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    var formData = new FormData(this);

    fetch('connect.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Tambahkan komentar baru ke dalam list
            var commentList = document.getElementById('commentList');
            var newComment = document.createElement('div');
            newComment.className = 'comment';
            newComment.innerHTML = '<strong>' + data.nama + '</strong>: ' + data.ucapan;
            commentList.insertBefore(newComment, commentList.firstChild);

            // Reset form
            document.getElementById('commentForm').reset();
        } else {
            alert('Error: ' + data.error);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

// Fungsi untuk memuat komentar yang sudah ada
function loadComments() {
    fetch('get_comments.php')
    .then(response => response.json())
    .then(data => {
        var commentList = document.getElementById('commentList');
        commentList.innerHTML = '';
        data.forEach(comment => {
            var commentDiv = document.createElement('div');
            commentDiv.className = 'comment';
            commentDiv.innerHTML = '<strong>' + comment.nama + '</strong>: ' + comment.ucapan;
            commentList.appendChild(commentDiv);
        });
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

// Panggil fungsi loadComments saat halaman dimuat
document.addEventListener('DOMContentLoaded', loadComments);
</script>


  
  </body>

</html>