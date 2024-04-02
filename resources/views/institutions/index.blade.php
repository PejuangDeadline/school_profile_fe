@extends('master.master')

@section('content')

<section class="wrapper bg-homepage-1">
  <div class="container pt-14 pt-md-14">
    <div class="row gx-2 gy-10 align-items-center">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 text-center text-lg-start order-2 order-lg-0" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <p class="lead fs-20 text-dark mb-1">Tumbuh dan berkembang bersama</p>
        <h1 class="display-3">Sekolah Islam Kharisma<br></h1>
        <span class="typer fw-semibold text-green text-nowrap" data-delay="100" data-words="Cerdas. Kreatif. Unggul.,Cerdas.,Kreatif.,Unggul.,"></span><span class="cursor text-primary" data-owner="typer"></span>
      </div>
      <div class="col-lg-4 ms-auto position-relative">
        <div class="row g-4">
          <div class="col-6" data-cues="fadeIn" data-group="col-middle">
            <div><img class="w-100 img-fluid rounded shadow-lg" src="{{ asset('assets/img/homepage/2024/April/hp1.png') }}" alt=""></div>
            <div><img class="w-100 img-fluid rounded shadow-lg mt-4" src="{{ asset('assets/img/homepage/2024/April/hp2.png') }}" alt=""></div>
          </div>
          <div class="col-6 d-flex flex-column" data-cues="fadeIn" data-group="col-end" data-delay="900">
            <div class="mt-8"><img class="img-fluid rounded shadow-lg" src="{{ asset('assets/img/homepage/2024/April/hp3.png') }}" alt=""></div>
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
        <p class="fs-20 text-muted mb-3 w500">Siapa kami?</p>
        {!! $institutions->about !!}
      </div>
    </div>
  </div>
</section>

<section class="wrapper bg-light mt-n10">
  <div class="container py-5 py-md-10">
    <div class="row text-center">
      <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
        <p class="fs-20 text-muted mb-2 w500">Mengapa memilih kami?</p>
        <h3 class="display-5 mb-10">Kami mempunyai tujuan yang berbeda</h3>
      </div>
    </div>
    <div class="row gx-lg-8 gx-xl-12 gy-8 mx-auto justify-content-center">

      @foreach($visions as $vision)
        <div class="col-md-6 col-lg-4">
          <div class="d-flex flex-row">
            <div>
              <img class="img-container" src="{{ $urladmin.$vision->img }}" alt="" />
            </div>
            <div>
              {!! $vision->description !!}
              {{-- <p class="mb-0">Mengembangkan berbagai kegiatan dalam proses belajar di kelas berbasis pendidikan karakter bangsa</p> --}}
            </div>
          </div>
        </div>
      @endforeach
      {{-- <div class="col-md-6 col-lg-4">
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
      </div> --}}
    </div>
  </div>
</section>

<section class="wrapper bg-homepage-2 mt-n10">
  <div class="container py-5 py-md-12">
    <div class="row text-left">
      <div class="col-md-12 col-lg-12">
        <p class="fs-20 text-muted mb-2 w500">Mengapa memilih kami?</p>
        <h3 class="display-5 mb-5">Kami memberikan kualitas terbaik</h3>
      </div>
    </div>
    
    <div class="overflow-hidden">
      <div class="swiper-container grid-view nav-bottom nav-color mb-14" data-margin="0" data-dots="false" data-nav="true" data-items-xxl="4" data-items-lg="3" data-items-md="2" data-items-xs="1">
        <div class="swiper overflow-visible">
          <div class="swiper-wrapper">
            @foreach($cultures as $culture)
              <div class="swiper-slide">
                <div class="item-inner">
                  <div class="card">

                    <figure class="overlay overlay-1 hover-scale">
                      <a href="#" data-bs-toggle="modal" data-bs-target="#modal-{{ $culture->id }}"> 
                        <img class="imag-homepage" src="{{ $urladmin.$culture->img }}" alt="" />
                      </a>
                      <figcaption>
                        <h5 class="from-top mb-0">Selengkapnya..</h5>
                      </figcaption>
                    </figure>                 
                    
                    <div class="card-body px-6 py-5">
                      <a href="" data-bs-toggle="modal" data-bs-target="#modal-{{ $culture->id }}" class="h4 mb-1 justify-title">{{ $culture->title }}</a>
                      <?php 
                        $find = '<p>';
                        $replaceWith = '<p class="mb-0 justify-5">';
                        $newdescription = str_replace($find, $replaceWith, $culture->description);
                      ?>
                      {!! $newdescription !!}
                      {{-- <p class="mb-0 justify-5">Mengedepankan pembelajaran agama dengan melaksanakan berbagai pembiasaan ibadah (murojaah, sholat dhuha, dhuhur dan ashar berjamaah, mengaji, menghafalkan surat) yang akan membuat Ananda menjadi siswa yang berakhlakul karimah.</p> --}}
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Modal --}}
@foreach($cultures as $culture)
<div class="modal fade" id="modal-{{ $culture->id }}" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content text-center">
      <div class="modal-header px-4 py-4" style="background-color: #1BAB82">
        <h5 class="modal-title text-white font-weight-bold mr-4" id="exampleModalLabel">Detail</h5>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="max-height: 65vh; overflow-y: auto;">
        <h3>{{ $culture->title }}</h3>
        <?php 
          $find = '<p>';
          $replaceWith = '<p class="mb-0 justify-5">';
          $newdescription = str_replace($find, $replaceWith, $culture->description);
        ?>
        {!! $newdescription !!}
        
      </div>
    </div>
  </div>
</div>
@endforeach
{{-- End Modal --}}

<section class="wrapper bg-light mt-n20">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-6 text-lg-start">
        <p style="text-align: justify;" class="mt-5">
          Sekolah Islam Kharisma mengembangkan dan melaksanakan semua kegiatan baik akademik maupun non akademik yang berorientasi pada terwujudnya budaya Sekolah Islam Kharisma
        </p>
      </div>
      <div class="col-lg-6 text-center text-lg-end">
        <p class="fs-20 text-muted mb-2 w500">Mengapa memilih kami?</p>
        <h3 class="display-5">Kami mengerti yang terbaik untuk buah hati Anda</h3>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      @foreach($advantages as $advantage)
        <div class="col-lg-5">
          <p class="text-dark mb-1"><b>{{ $advantage->title }}</b></p>
          {!! $advantage->description !!}
        </div>
        <div class="col-lg-1"></div>
      @endforeach
    </div>
  </div>
</section>

<section class="wrapper bg-homepage-3" style="padding-bottom: 0">
  <div class="container py-5 py-md-12">
    <div class="row text-left">
      <div class="col-md-12 col-lg-12">
        <h3 class="display-6 mb-5 text-dark">Koleksi Foto</h3>
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

    <div class="container text-center mt-4">
      <div class="row">
        <div class="col-lg-8 col-xl-7 col-xxl-6 mx-auto" data-cues="slideInDown" data-group="page-title">
          <div>
            <a href="{{ route('koleksifoto') }}" class="btn btn-lg btn-success rounded mb-5">Selengkapnya..</a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection