@extends('master.master')

@section('content')

{{-- {{ dd(session('scrollToSection')) }} --}}


<section class="wrapper bg-gradient-top">
  <div class="container pt-10 pb-15 pt-md-14 pb-md-20">
    <div class="row gx-lg-8 gx-xl-12 gy-10 mb-5 align-items-center mt-0">
      <div class="col-md-10 offset-md-1 offset-lg-0 col-lg-6 text-center text-lg-start order-2 order-lg-0 mb-n15" data-cues="slideInDown" data-group="page-title" data-delay="600">
        <h1 class="display-1 mb-5 mx-md-n5 mx-lg-0">Kegiatan</h1>
        <p class="lead fs-lg">Kegiatan Siswa-Siswi & Artikel / Berita Tentang  Sekolah Islam Kharisma</p>
      </div>
      <div class="col-lg-6" data-cue="slideInDown">
        <figure>
          <img class="img-fluid" src="{{ asset('assets/img/illustrations/i19.png') }}" srcset="{{ asset('assets/img/illustrations/i19@2x.png 2x') }}" alt="" />
        </figure>
      </div>
    </div>
  </div>
  <div class="overflow-hidden">
    <div class="divider text-light mx-n2">
      <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1440 92.26">
        <path fill="currentColor" d="M1206,21.2c-60-5-119-36.92-291-5C772,51.11,768,48.42,708,43.13c-60-5.68-108-29.92-168-30.22-60,.3-147,27.93-207,28.23-60-.3-122-25.94-182-36.91S30,5.93,0,16.2V92.26H1440v-87l-30,5.29C1348.94,22.29,1266,26.19,1206,21.2Z"></path>
      </svg>
    </div>
  </div>
</section>

<section class="wrapper mt-md-n20 mt-lg-n20" id="mySection">
  <div class="container pt-12 pt-md-0 pb-16 pb-md-18">
    
    <form action="{{ route('kegiatan') }}" id="myForm" method="GET" enctype="multipart/form-data">
      @csrf
      <div class="row align-items-center mb-10 position-relative zindex-1">
        <div class="col-md-8 col-lg- col-xl-8 col-xxl-7 pe-xl-20">
          <h2 class="display-6">Kegiatan / Artikel</h2>
          <nav class="d-inline-block" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Beranda</a></li>
              <li class="breadcrumb-item active text-muted" aria-current="page">Kegiatan</li>
            </ol>
          </nav>
        </div>
        <div class="col-md-4 col-lg-3 ms-md-auto text-md-end mt-5 mt-md-0">
          <div class="form-select-wrapper">
            <select name="filter" class="form-select">
              <option value="" selected>Semua</option>
              @foreach($mstbranches as $branch)
                <option @if($filter === $branch->grade . '++' . $branch->city) selected="selected" @endif value="{{ $branch->grade . '++' . $branch->city }}">{{ $branch->grade." - ".$branch->city }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-2 col-lg-1 ms-md-auto text-md-end mt-5 mt-md-0">
          <div class="mx-auto text-center w300">
            <a id="submitBtn" type="submit" class="btnsrch srch"><i class="uil uil-search"></i></a>
          </div>
        </div>
      </div>
    </form>

    <div class="grid grid-view projects-masonry shop mb-0">
      <div class="row g-8 g-lg-10 isotope">

        @if($kegiatans->count() > 0)
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
        @else
          <p class="text-center">Maaf, Kegiatan Pada Branch Ini Kosong.</p>
        @endif

      </div>
      <div class="my-centered-pagination">
        {{ $kegiatans->links('vendor.pagination.bootstrap-4') }}
      </div>
    </div>
  </div>
</section>

@if($filter != null)
<script>
  $(document).ready(function(){
      $('html, body').animate({
          scrollTop: $("#mySection").offset().top
      }, 500);
  });
</script>
@endif


<br>
<br>

@endsection