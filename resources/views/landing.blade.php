@extends('layouts.template')

@section('styles')
<link rel="stylesheet" href="{{url('frontend/css/dashboard.css') }}">
  <!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="{{url('frontend/images/coconut-tree.svg')}} type="image/svg" />
  
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    body {
      background-color:#EBFBFF
    }

    .card {
      background-color: #F5FFFA;
      /* Warna latar belakang card */
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(white);
      padding: 20px;
      width: 300px;
      text-align: center;
    }

    .card-item {
            background-color:#D6E7F1; /* Mengatur warna latar belakang kartu menjadi biru */
            color:#83B8D7; /* Mengatur warna teks menjadi putih agar kontras dengan latar belakang */
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

    .card-info h3 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            animation: glitter 1.5s infinite alternate;
        }

    .card-info p {
            font-size: 16px;
            text-align: center;
            animation: glitter 1.5s infinite alternate;
        }

    #header {
            margin: 0px;
        }

        #video-container {
            width: 100%;
            margin: -100px 0px 64px;
            height: 100vh;
            overflow: hidden;
        }

    video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    #content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
      z-index: 2;
    }

    #navbar a {
      color: #B0C4DE;
      text-decoration: none;
      padding: 10px;
      margin: 0 10px;
      font-size: 18px;
      font-weight: bold;
      transition: color 0.3s ease-in-out;
    }

    #content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: 	#B0C4DE;
      z-index: 2;
    }

    h1 {
      font-size: 4em;
      margin-bottom: 20px;
    }

    p {
      font-size: 1.2em;
      margin-bottom: 40px;
    }

    #myBtn {
      width: 100px;
      font-size: 18px;
      padding: 10px;
      border: none;
      border-radius: 20px;
      background: #678698;
      color: #fff;
      cursor: pointer;
    }

    #myBtn:hover {
      background: #ddd;
      color: rgb(189, 178, 178);
    }

    footer {
      background-color: wheat;
      color: white;
      text-align: center;
      padding: 20px;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    .created-by {
            color:#F5FFFA;
            text-decoration: none;
    }

    .social-icon {
      text-align: center;
      text-decoration: none;
      color: 		#778899;
    }

    .social-icon img {
      width: 40px;
      height: 40px;
    }
  </style>

@endsection

@section('content')
<section id="header">
    <div id="video-container">
      <video autoplay muted loop>
        <source src="{{ url('frontend/bali2.mp4') }}" type="video/mp4">
      </video>
      <div id="content">
        <h1>you will love every corner of it</h1>
        <a href="{{ route('index') }}" id="myBtn">
          Near Me <span><i class="fa-solid fa-map-pin"></i></i></span>
</a>
      </div>
      <script>
        
      </script>
  </section>
  <section id="cards">
    <div class="container">
      <div class="card-item">
        <div class="card-info">
          <h3>About Denpasar</h3>
          <p>Gemerlapnya kota penuh budaya di pulau Dewata, Bali, memancarkan pesona yang memukau para
            pengunjung dari seluruh dunia. </p>
        </div>
        <div class="card-item"><iframe width="500" height="300"
            src="https://www.youtube.com/embed/1kMv5Gxygt8?si=amE9Gd-dugO_a1pV" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe></div>
      </div>
    </div>
    <div class="container">
      <div class="card-item">
        <div class="card-info">
          <h3>Denpasar History</h3>
          <p>Kota Denpasar, ibu kota Provinsi Bali, Indonesia, memiliki sejarah yang kaya. Nama "Denpasar" berasal dari
            kata Sanskerta yang berarti
            "pasar utara," menggambarkan lokasinya yang strategis </p>
        </div>
        <div class="card-item"><iframe width="500" height="300"
            src="https://www.youtube.com/embed/MXQHy7nTdb8?si=g1s3tO5KHhx-5R_N" title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen></iframe>
        </div>
      </div>
  </section>
  <section id="cta-card">
    <div class="container">
      <div class="card" style="background-color:#D6E7F1;">
        <a href="https://instagram.com/anggitamrni?igshid=OGQ5ZDc2ODk2ZA==" class="social-icon" target="_blank">
          <img
            src="https://www.freepnglogos.com/uploads/logo-ig-png/logo-ig-stunning-instagram-logo-vector-download-for-new-7.png"
            alt="Instagram Logo">
          anggitamrni
        </a>
        <a href="https://github.com/anggitamrni/pgweb-responsi" class="social-icon" target="_blank">
          <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Instagram Logo">
          anggitamrni
        </a>

      </div>
    </div>
  </section>
  <section id="footer">
    <p>
    <h5>
      <center><a class="created-by">Created by Anggita Maharani</a></center>
    </h5>

    <div class="container">
      <div class="footer-info">
      </div>
    </div>
  </section>
@endsection