@extends('master.master')

@section('content')

<section class="wrapper bg-homepage-1">
  <div class="container pt-14 pt-md-14">
    <div class="row gx-2 gy-10 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <p class="lead fs-20 text-dark mb-1">Tumbuh dan berkembang bersama</p>
        <h1 class="display-3">Sekolah Islam Kharisma<br></h1>
        <span class="typer text-green text-nowrap" data-delay="100" data-words="Cerdas. Kreatif. Unggul.,Cerdas.,Kreatif.,Unggul.,"></span><span class="cursor text-primary" data-owner="typer"></span>
      </div>
      <div class="col-lg-4 ms-auto position-relative">
        <div class="row g-4">
          <div class="col-6" data-cues="fadeIn" data-group="col-middle">
            <div><img class="w-100 img-fluid rounded shadow-lg" src="{{ asset('assets/img/homepage/hp1.png') }}" alt=""></div>
            <div><img class="w-100 img-fluid rounded shadow-lg mt-4" src="{{ asset('assets/img/homepage/hp2.png') }}" alt=""></div>
          </div>
          <div class="col-6 d-flex flex-column" data-cues="fadeIn" data-group="col-end" data-delay="900">
            <div class="mt-8"><img class="img-fluid rounded shadow-lg" src="{{ asset('assets/img/homepage/hp3.png') }}" alt=""></div>
          </div>
        </div>
        <div class="position-relative mt-n20 mb-20" data-cue="fadeIn" data-delay="1800">
          <div class="btn btn-circle btn-fuchsia pe-none ripple position-absolute counter-wrapper flex-column d-none d-xxl-flex" style="bottom: 0; right: -8%; width: 120px; height: 120px;">
            <h3 class="fs-26 text-white mt-n1 mb-0">NO</h3>
            <p>jQuery</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="wrapper bg-transparent mt-n13" id="demos">
  <div class="container py-5">
    <div class="row gx-lg-8 gx-xl-12 gy-5 align-items-center mb-10 mb-md-13">
      <div class="col-lg-6 position-relative">
        <div class="row gx-md-5 gy-5 align-items-center">
          <div class="col-md-12">
            <figure class="rounded"><img src="{{ asset('assets/img/homepage/yayasan.png') }}" alt=""></figure>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <h2 class="fs-20 text-muted mb-3">Siapa Kami?</h2>
        <p class="mb-7">Sekolah Islam Kharisma didirikan pada 30 Mei 2015 berawal dengan didirikannya DayCare dan KB-TK Islam Kharisma. Sekolah Islam Kharisma terus berkembang hingga pada tahun 2020 didirikan SD Islam Kharisma.</p>
        <p class="mb-7">Sekolah Islam Kharisma berdiri di dua lokasi yakni di Sidoarjo terdapat DayCare dan KB – TK Islam Kharisma yang berada di Perum Gading Kirana H1 RW 2, sedangkan di Malang terdapat DayCare, KB-TK dan SD Islam Kharisma.</p>
      </div>
    </div>
  </div>
</section>

<section class="wrapper bg-light mt-n10">
  <div class="container py-5 py-md-10">
    <div class="row text-center">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <h2 class="fs-20 text-muted mb-2">Mengapa memilih kami?</h2>
        <h3 class="display-5 mb-10">Kami mempunyai tujuan yang berbeda</h3>
      </div>
    </div>
    <div class="row gx-lg-8 gx-xl-12 gy-8 mx-auto justify-content-center">
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img class="img-container" src="{{ asset('assets/img/homepage/icons/icon1.png') }}" alt="" />
          </div>
          <div>
            <p class="mb-0">Mengembangkan berbagai kegiatan dalam proses belajar di kelas berbasis pendidikan karakter bangsa</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img class="img-container" src="{{ asset('assets/img/homepage/icons/icon2.png') }}" alt="" />
          </div>
          <div>
            <p class="mb-0">Melakukan pembelajaran aktif mengoptimalkan penggunaan bahasa Inggris dan Indonesia sebagai bahasa pengantar pembelajaran</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img class="img-container" src="{{ asset('assets/img/homepage/icons/icon3.png') }}" alt="" />
          </div>
          <div>
            <p class="mb-0">Mengembangkan berbagai kegiatan dalam proses belajar di kelas berbasis pendidikan karakter</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img class="img-container" src="{{ asset('assets/img/homepage/icons/icon4.png') }}" alt="" />
          </div>
          <div>
            <p class="mb-0">Menyelenggarakan berbagai kegiatan sosial yang menjadi bagian dari pendidikan karakter bangsa</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="d-flex flex-row">
          <div>
            <img class="img-container" src="{{ asset('assets/img/homepage/icons/icon5.png') }}" alt="" />
          </div>
          <div>
            <p class="mb-0">Menjalin kerja sama dengan lembaga lain dalam merealisasikan program sekolah menuju sekolah Nasional plus</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="wrapper bg-homepage-2 mt-n10">
  <div class="container py-5 py-md-12">
    <div class="row text-left">
      <div class="col-md-12 col-lg-12">
        <h2 class="fs-20 text-muted mb-2">Mengapa memilih kami?</h2>
        <h3 class="display-5 mb-10">Kami memberikan kualitas terbaik</h3>
      </div>
    </div>

    <div class="position-relative">
      <div class="swiper-container dots-closer mb-6" data-margin="0" data-dots="true" data-items-xxl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
        <div class="swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <figure class="card-img-top">
                    <img class="img-fluid imgnews" src="{{ asset('assets/img/homepage/news/news1.png') }}" alt="" />
                  </figure>
                  <div class="card-body px-6 py-5">
                    <a href="" class="h4 mb-1 justify-title">Sekolah Unggul Berbasis Islam</a>
                    <p class="mb-0 justify-5">Mengedepankan pembelajaran agama dengan melaksanakan berbagai pembiasaan ibadah (murojaah, sholat dhuha, dhuhur dan ashar berjamaah, mengaji, menghafalkan surat) yang akan membuat Ananda menjadi siswa yang berakhlakul karimah.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <figure class="card-img-top">
                    <img class="img-fluid imgnews" src="{{ asset('assets/img/homepage/news/news2.png') }}" alt="" />
                  </figure>
                  <div class="card-body px-6 py-5">
                    <a href="" class="h4 mb-1 justify-title">Pembelajaran Islam</a>
                    <p class="mb-0 justify-5">Sekolah Islam Kharisma memberikan 60% muatan pelajaran umum dengan pendekatan parsitipatif, 40% pelajaran keIslaman (Qur’an Hadist, Fiqih, Bahasa Arab dan Pendidikan Agama Islam).</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <figure class="card-img-top">
                    <img class="img-fluid imgnews" src="{{ asset('assets/img/homepage/news/news3.png') }}" alt="" />
                  </figure>
                  <div class="card-body px-6 py-5">
                    <a href="" class="h4 mb-1 justify-title">Penggunaan Bahasa Inggris</a>
                    <p class="mb-0 justify-5">Dalam pembelajarannya Sekolah Islam Kharisma menggunakan bahasa Inggris sebagai bahasa kedua, sehingga Ananda terampil dalam berbahasa Inggris</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="item-inner">
                <div class="card">
                  <figure class="card-img-top">
                    <img class="img-fluid imgnews" src="{{ asset('assets/img/homepage/news/news1.png') }}" alt="" />
                  </figure>
                  <div class="card-body px-6 py-5">
                    <a href="" class="h4 mb-1 justify-title">Sekolah Unggul Berbasis Islam</a>
                    <p class="mb-0 justify-5">Mengedepankan pembelajaran agama dengan melaksanakan berbagai pembiasaan ibadah (murojaah, sholat dhuha, dhuhur dan ashar berjamaah, mengaji, menghafalkan surat) yang akan membuat Ananda menjadi siswa yang berakhlakul karimah.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</section>

<section class="wrapper bg-light mt-n10">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6 text-lg-start">
        <p style="text-align: justify;" class="mt-5">
          Sekolah Islam Kharisma mengembangkan dan melaksanakan semua kegiatan baik akademik maupun non akademik yang berorientasi pada terwujudnya budaya Sekolah Islam Kharisma
        </p>
      </div>
      <div class="col-lg-6 text-center text-lg-end">
        <h2 class="fs-20 text-muted mb-2">Mengapa memilih kami?</h2>
        <h3 class="display-5 mb-10">Kami mengerti yang terbaik untuk buah hati Anda</h3>
      </div>
    </div>
  </div>
  <div class="container py-5">

    <div class="row">
      <div class="col-lg-5">
        <p class="text-dark mb-1"><b>Pembiasaan Ibadah</b></p>
        <ul>
          <li><span>Sholat Dhuha, Dhuhur dan Ashar berjamaah</span></li>
          <li><span>Muroja’ah sebelum pembelajaran</span></li>
          <li><span>Mengaji</span></li>
          <li><span>Menghafalkan surat-surat pendek</span></li>
        </ul>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <p class="text-dark mb-1"><b>Pembiasaan Ibadah</b></p>
        <ul>
          <li><span>Mengasah ketrampilan komunikasi</span></li>
          <li><span><i>Be an active young learner</i></span></li>
          <li><span>Menginspirasi</span></li>
          <li><span>Berusaha mencari solusi</span></li>
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-5">
        <p class="text-dark mb-1"><b>Pembiasaan Ibadah</b></p>
        <ul>
          <li><span>Sholat Dhuha, Dhuhur dan Ashar berjamaah</span></li>
          <li><span>Muroja’ah sebelum pembelajaran</span></li>
          <li><span>Mengaji</span></li>
          <li><span>Menghafalkan surat-surat pendek</span></li>
        </ul>
      </div>
      <div class="col-lg-1"></div>
      <div class="col-lg-5">
        <p class="text-dark mb-1"><b>Pembiasaan Ibadah</b></p>
        <ul>
          <li><span>Mengasah ketrampilan komunikasi</span></li>
          <li><span><i>Be an active young learner</i></span></li>
          <li><span>Menginspirasi</span></li>
          <li><span>Berusaha mencari solusi</span></li>
        </ul>
      </div>
    </div>
  </div>

  
</section>

<section class="wrapper bg-homepage-3 mt-n10">
  <div class="container py-5 py-md-12">
    <div class="row text-left">
      <div class="col-md-12 col-lg-12">
        <h3 class="display-6 mb-10">Galeri</h3>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-3" data-cues="fadeIn" data-group="col-middle">
        <div><img class="w-100 img-fluid rounded shadow-lg" src="{{ asset('assets/img/homepage/galeri/galeri1.png') }}" alt=""></div>
        <div><img class="w-100 img-fluid rounded shadow-lg mt-4" src="{{ asset('assets/img/homepage/hp2.png') }}" alt=""></div>
      </div>
      <div class="col-3 d-flex flex-column" data-cues="fadeIn" data-group="col-end" data-delay="900">
        <div class="mt-8"><img class="img-fluid rounded shadow-lg" src="{{ asset('assets/img/homepage/hp3.png') }}" alt=""></div>
      </div>
      <div class="col-3" data-cues="fadeIn" data-group="col-middle">
        <div><img class="w-100 img-fluid rounded shadow-lg" src="{{ asset('assets/img/homepage/hp1.png') }}" alt=""></div>
        <div><img class="w-100 img-fluid rounded shadow-lg mt-4" src="{{ asset('assets/img/homepage/hp2.png') }}" alt=""></div>
      </div>
      <div class="col-3 d-flex flex-column" data-cues="fadeIn" data-group="col-end" data-delay="900">
        <div class="mt-8"><img class="img-fluid rounded shadow-lg" src="{{ asset('assets/img/homepage/hp3.png') }}" alt=""></div>
      </div>
    </div>
  </div>
</section>

@endsection