@extends('master.master')

@section('content')

<style type="text/css">
		.cardig {
        border: 1px solid #ccc;
        width: 320px;
        height: 480px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 20px;
        border-radius: 8px;
    }

    iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    html {
      scroll-behavior: smooth;
    }

    #fasilitas::before {
        content: "";
        display: block;
        height: 50px; /* adjust this value for your needs */
        margin-top: -50px; /* this should be the negative value of the height */
        visibility: hidden;
        pointer-events: none; /* prevent interference with clicks */
    }

	</style>
<section class="wrapper bg-transparent">
  <div class="bg-branch px-3">
    @if($branch->grade === "Daycare")
      <img src="{{ asset('assets/img/branch/header-daycare.png') }}" alt="">
    @elseif($branch->grade === "KB-TK")
      <img src="{{ asset('assets/img/branch/header-kb-tk.png') }}" alt="">
    @elseif($branch->grade === "SD")
      <img src="{{ asset('assets/img/branch/header-sd.png') }}" alt="">
    @else 
      <img src="{{ asset('assets/img/branch/header-blank.png') }}" alt="">
    @endif
    <div class="text-overlay"><h4 class="widget-title title-branch" style="font-weight: normal;"><mark><b>{{ $branch->grade }}</b> - {{ $branch->city }}</mark></h4></div>
  </div>
</section>
<section class="wrapper bg-light">
	<div class="container py-2">
    <div class="card card-shadow mb-4">
      <div class="card-body p-3">
        <span class="row justify-content-between align-items-center">
          <div class="col-3 px-2 card-ttl">
            <a href="#tentang" class="text-center responsive-text">
              Tentang
            </a>
          </div>
          <div class="col-3 px-2 card-ttl">
            <a href="#fasilitas" class="text-center responsive-text">
              Fasilitas
            </a>
          </div>
          <div class="col-3 px-2 card-ttl">
            <a href="" id="ppdpbutton" class="text-center responsive-text bg-green text-white">
              Informasi PPDB
            </a>
          </div>
          <div class="col-3 px-2 card-ttl">
            <a href="#kontak" class="text-center responsive-text">
              Kontak
            </a>
          </div>
          
          {{-- <a href="#fasilitas" class="col-3 text-center responsive-text">
            Fasilitas
          </a>
          <a href="" id="ppdpbutton" class="col-3 text-center responsive-text bg-green text-white">
            Informasi PPDB
          </a>        
          <a href="#kontak" class="col-3 text-center responsive-text">
            Kontak
          </a> --}}
        </span>
      </div>
    </div>
  </div>
</section>

<section id="tentang" class="wrapper bg-homepage-2 mt-n5" style="padding-bottom: 0rem;">
  <div class="container py-5 py-md-12">
    <div class="row text-left">
      <div class="col-md-12 col-lg-6">
        <h3 class="display-7 mb-5">Lingkungan aman adalah salah satu faktor pendukung tumbuh kembang anak</h3>
        <?php 
          $find = '<p>';
          $replaceWith = '<p class="text-muted" style=" text-align: justify;">';

          $newabout = str_replace($find, $replaceWith, $branch->about);
        ?>
        {!! $newabout !!}
      </div>
      <div class="col-md-12 col-lg-6">
        <img class="img-fluid" src="{{ asset('assets/img/illustrations/3d2.png') }}" srcset="{{ asset('assets/img/illustrations/3d2@2x.png 2x') }}" alt="" style="width: 40%; display: block; margin-left: auto; margin-right: auto;"/>
      </div>
    </div>
    
    <div class="row text-left">
        <div class="row mt-2 mb-4">

          @if($branch->vision != null)
          <div class="col-md-12 mt-2">
            <div class="card px-2 py-2">
              <div class="d-flex flex-row">
                <div>
                  <img src="{{ asset('assets/img/icons/lineal/list.svg') }}" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Visi</h4>
                  <p style="text-align: justify;">{{ $branch->vision }}</p>
                </div>
              </div>
            </div>
          </div>
          @endif

          @if($branch->mission != null)
          <div class="col-md-12 mt-2">
            <div class="card px-2 py-2">
              <div class="d-flex flex-row">
                <div>
                  <img src="{{ asset('assets/img/icons/lineal/target.svg') }}" class="svg-inject icon-svg icon-svg-sm me-4" alt="" />
                </div>
                <div>
                  <h4 class="mb-1">Misi</h4>
                  <?php 
                    $find = '<ul>';
                    $replaceWith = '<ul style="padding-left: 0rem;">';

                    $newmission = str_replace($find, $replaceWith, $branch->mission);

                    $find = '<li>';
                    $replaceWith = '<li style="text-align: justify;">';

                    $newmission = str_replace($find, $replaceWith, $newmission);
                  ?>
                  {!! $newmission !!}
                </div>
              </div>
            </div>
          </div>
          @endif

        </div>
    </div>
    <div id="fasilitas">

    </div>

    <div class="row text-left mt-5">
      <div class="col-md-12 col-lg-6">
        <h3 class="display-7 mb-5">Fasilitas</h3>
        <p class="text-muted" style=" text-align: justify;">Setiap hari adalah petualangan penuh warna di mana belajar dan bermain berpadu dalam lingkungan dengan perhatian dan dukungan kami.</p>
      </div>
    </div>
    <div class="row text-left">
      @foreach($facilities as $facility)
          <ul class="custom-list px-4 col-md-12 col-lg-6 mb-0">
              <li>
                  <div class="content-wrapper d-flex align-items-start">
                      <span class="icon-wrapper"></span> <!-- This is where the icon will be -->
                      <div>
                          <b>{{ $facility->facility_name }}</b>
                          {!! $facility->description !!}
                      </div>
                  </div>
              </li>
          </ul>
      @endforeach
    </div>
  </div>
</section>


@if($kegiatans->count() > 0 || $galleries->count() > 0)
<section class="wrapper bg-homepage-3">

  @if($kegiatans->count() > 0)
  <div id="kegiatan">
    <div class="container py-5 py-md-12">
      <div class="row text-left">
        <div class="col-md-12 col-lg-12">
          <h3 class="display-6 mb-5 text-dark">Kegiatan / Artikel</h3>
        </div>
      </div>
      
      <div class="row g-8 g-lg-10 isotope">
        @foreach($kegiatans as $kegiatan)
          <div class="project item col-md-6 col-xl-4 workshop">
            <div class="card shadow-lg">
              <figure class="overlay overlay-1 hover-scale itooltip itooltip-leaf" title='<h5 class="mb-0">Klik Untuk Lihat Detail</h5>'>
                <a href="{{ route('kegiatan.detail', $kegiatan->title_slug) }}"> 
                  <img class="imag" src="{{ $urladmin.$kegiatan->attachment }}" alt="" />
                  <span class="badge bg-warning text-white position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>{{ $kegiatan->category }}</span></span>
                </a>
                <figcaption>
                  <h5 class="from-top mb-0">Selengkapnya..</h5>
                </figcaption>
              </figure>
              <div class="card-body judulhighlight p-5">
                <div class="post-header">
                  <div class="justify-title post-category mb-2 text-leaf">{{ $kegiatan->grade." - ".$kegiatan->city }}</div>
                  <a href="{{ route('kegiatan.detail', $kegiatan->title_slug) }}" class="h4 mb-1 justify-title-kegiatan">{{ $kegiatan->title }}</a>
                </div>
              </div>
              
              <div class="card-footer mt-n4">
                <ul class="post-meta d-flex mb-0">
                  <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($kegiatan->created_at)->format('d M Y') }}</span></li>
                </ul>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
    <form action="{{ route('kegiatan') }}" id="myForm" method="GET" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="filter" value="{{ $branch->grade . '++' . $branch->city }}">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
            <div>
              <a id="submitBtn" type="submit" class="btn btn-lg btn-success rounded mb-5">Selengkapnya..</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  @endif

  @if($galleries->count() > 0)
  <div id="koleksifoto">
    <div class="container py-5 py-md-12">
      <div class="row text-left">
        <div class="col-md-12 col-lg-12">
          <h3 class="display-6 mb-5 text-dark">Koleksi Foto </h3>
        </div>
      </div>
      <div class="custom-row">
        @foreach($galleries as $gallery)
        <div class="custom-col mx-auto px-2 py-2">
          <figure class="overlay overlay-1 rounded">
            <a href="{{ $urladmin.$gallery->attachment }}" data-glightbox="" data-gallery="shots-group"> 
              <img class="imag-fotos" src="{{ $urladmin.$gallery->attachment }}" alt="">
            </a>
            <figcaption>
              <h5 class="from-top mb-0">Lihat Ukuran Penuh</h5>
            </figcaption>
          </figure>
        </div>
        @endforeach
      </div>
    </div>
    <form action="{{ route('koleksifoto') }}" id="myForm2" method="GET" enctype="multipart/form-data">
      @csrf
      <input type="hidden" name="filter" value="{{ $branch->grade . '++' . $branch->city }}">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
            <div>
              <a id="submitBtn2" type="submit" class="btn btn-lg btn-success rounded mb-5">Selengkapnya..</a>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
  @endif

</section>
@endif

<section id="kontak" class="wrapper bg-light">
  <div class="container py-14 py-md-16">
    <div class="row">
      <div class="col-xl-12 mx-auto">
        <div class="card">
          <div class="row gx-0">
            <div class="col-lg-5 align-self-stretch">
              <div class="map map-full rounded-top rounded-lg-start">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.48743205145!2d106.89529807373991!3d-6.199241660727816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4b986aa9d99%3A0x81e1a8753bc418cc!2sYayasan%20Kharisma!5e0!3m2!1sen!2sid!4v1695469799552!5m2!1sen!2sid" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="p-6">
                <div class="d-flex flex-row">
                  <h4 class="mb-3"><b>{{ $branch->grade}}</b> - {{ $branch->city }}</h4>
                </div>
                <address>{{ $branch->addr }}, {{ $branch->sub_district }}, {{ $branch->district }}, {{ $branch->city }}, {{ $branch->province }}, {{ $branch->zip_code }}</address>
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-1">Phone</h5>
                    <p>{{ $branch->phone1 }} / {{ $branch->phone2 }}</p>
                  </div>
                </div>
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-instagram"></i> </div>
                  </div>
                  <div>
                    <?php 
                      $find = 'https://www.instagram.com/';
                      $replaceWith = '@';

                      $usernameig = str_replace($find, $replaceWith, $branch->instagram);
                    ?>
                    <h5 class="mb-1">Instagram</h5>
                    <p class="mb-0"><a href="{{ $branch->instagram }}" class="link-body">{{ $usernameig }}</a></p>
                  </div>
                </div>
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-1">E-mail</h5>
                    <p class="mb-0"><a href="mailto:{{ $branch->email }}" class="link-body">{{ $branch->email }}</a></p>
                  </div>
                </div>
                <p class="mt-4"><b>Jam Buka:</b></p>
                <ul class="mt-n4">
                  <li>{{ $branch->open_at }}</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="section1">
    </div>
  </div>
</section>

<br>
<br>

@endsection