<!DOCTYPE html>
<html>
<head>
      <title>Es Teh Tubruk Indonesia</title>
  <meta content="kelezatan yang tiada duanya" name="description">
  <meta content="Es teh tubruk" name="keywords">

  <!-- Favicons -->
  <link href="icon.jpg" rel="icon">
  <link href="icon.jpg" rel="apple-touch-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
        body {
            background-color: green;
            color: white;
            text-align: center;
            /* position: relative; Diperlukan untuk posisi absolut partikel */
        }
        .navbar {
            background-color: orange;
        }
        .slider {
            width: 100%;
            max-width: 100%;
            height: auto;
            object-fit: cover;
            position: relative;
        }
        .slider .carousel-item {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
            height: 400px;
        }
        .slider .carousel-item.active {
            transform: scale(1.1);
            z-index: 1;
            opacity: 1;
            transition: transform 0.3s, opacity 1s;
        }
        .slider .carousel-item:not(.active) {
            opacity: 0.5;
        }
        .slider .carousel-caption {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            transition: background 0.3s;
        }
        .slider .carousel-inner {
            border: 5px solid white;
        }
        .slider .carousel-inner:hover {
            border: 5px solid white;
        }
        .image-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .image-card {
            margin: 10px;
            text-align: center;
        }
        .image-card img {
            max-width: 100%;
            height: auto;
        }
        .slide-description {
            background: white;
            padding: 10px;
        }
        /* Efek Partikel Daun Teh */
        #particles-js {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url('path/to/your-background.jpg'); /* Ganti dengan gambar latar belakang Anda */
            background-size: cover;
        }
        .image-card {
            background-color: white;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); /* Shadow dengan tingkat kejelasan 30% */
            margin: 10px;
            text-align: center;
        }
        .image-card img {
            max-width: 100%;
            height: auto;
        }
        .card {
            background-color: white;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); /* Shadow dengan tingkat kejelasan 30% */
            border: none;
        }
        .card-body {
            font-size: 18px;
            line-height: 1.6;
        }
        /*h1,p {
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.3); Shadow dengan tingkat kejelasan 30% */
        }
        /* Stil CSS untuk footer */
        .footer {
            background-color: #333;
            color: orange;
            padding: 5px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
        .contact-icons {
            font-size: 15px;
            margin: 5px;
            color: orange; /* Warna ikon */
        }
        .contact-icons:hover {
            color: #00CC00; /* Warna ikon saat dihover */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#">Es Teh Tubruk</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontak</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h1>Selamat Datang <br></h1>
         <h3><strong style="color: yellow">Es Teh Tubruk Indonesia</strong></h3></h1>
        <p>Kami menyajikan Es Teh Tubruk segar dengan cita rasa yang unik.</p>
    </div>
    </div>
    <div id="particles-js"></div>
    <div class="container mt-5">
       
    <div id="image-slider" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            $imagePath = "esteh/gambar/";
            $images = glob($imagePath . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);
            $firstImage = true;
            foreach ($images as $image) {
                echo '<div class="carousel-item' . ($firstImage ? ' active' : '') . '">';
                echo '<img class="slider w-100" src="' . $image . '" alt="Es Teh Tubruk" />';
                echo '</div>';
                $firstImage = false;
            }
            ?>
        </div>
    </div><br><br>
    <div class="container">
        <div class="card">
            <img src="/esteh/log/esteh.jpg" class="card-img-top" alt="Es Teh Tubruk Indonesia">
            <div class="card-body">
                <h2 class="card-title">Es Teh Tubruk Indonesia</h2>
                <p class="card-text" style="color:black">Es Teh Tubruk adalah minuman khas Indonesia yang terkenal dengan kelezatan dan kekuatannya. Minuman ini telah menjadi bagian tak terpisahkan dari budaya Indonesia dan memiliki daya tarik yang unik.</p>
                <p class="card-text"style="color:black">Dibuat dengan cara mencampurkan teh bubuk dengan gula merah atau gula putih dan air panas, Es Teh Tubruk memiliki cita rasa yang khas dan manis. Teh yang digunakan biasanya adalah teh hitam pilihan, sehingga memberikan rasa yang kuat dan nikmat.</p>
                <p class="card-text"style="color:black">Salah satu daya tarik utama Es Teh Tubruk adalah kesederhanaannya. Rasanya yang kuat dan manis membuatnya cocok dinikmati dengan makanan ringan atau makanan berat.</p>
                <p class="card-text"style="color:black">Selain itu, Es Teh Tubruk juga dikenal sebagai minuman penyegar. Terutama saat cuaca panas, segelas Es Teh Tubruk dingin sangat menyegarkan dan memulihkan energi Anda. Ini juga menjadi minuman favorit di berbagai acara dan perayaan di Indonesia.</p>
                <p class="card-text"style="color:black">Jadi, jika Anda belum mencoba Es Teh Tubruk, jangan lewatkan kesempatan untuk merasakan kelezatan minuman khas Indonesia ini. Rasakan kekuatan rasa dan daya tariknya yang unik. Selamat menikmati!</p>
            </div>
        </div>
    </div>
    <br><br>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<!-- Footer -->
    <footer class="card footer">
        <h3 style="color: black">Contact Us</h3>
        <a href="https://api.whatsapp.com/send?phone=6285814480623" target="_blank" class="contact-icons"><i class="fab fa-whatsapp"></i> WhatsApp</a>
        <a href="https://www.instagram.com/newbie_1337" target="_blank" class="contact-icons"><i class="fab fa-instagram"></i> Instagram</a>
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">© 2023 <a>Es Teh Tubruk Indonesia.</a></span>
          </div>
    </footer>
    
    
    
    
