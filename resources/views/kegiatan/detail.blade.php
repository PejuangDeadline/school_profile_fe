@extends('master.master')

@section('content')

<section class="wrapper bg-gray">
  <div class="container pt-10 pb-md-3 pt-md-15">
    <nav class="d-inline-block" aria-label="breadcrumb">
      <div class="navplus">
        <ol class="breadcrumb mb-0 mt-n5">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
          <li class="breadcrumb-item"><a href="{{ route('kegiatan') }}"><span class="textbread">Kegiatan</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-list"></i></div></a></li>
          <li class="breadcrumb-item active text-muted" aria-current="page"><div class="textjudulbread"><span id="textjudulbread">{{ $kegiatan->title }}</span></div></li>
        </ol>
      </div>
    </nav>
  </div>
</section>

<section class="wrapper bg-white px-5 py-5 px-md-10">
  <div class="card">

    <div class="px-3 py-3">
      {{-- <div class="swiper-container swiper-thumbs-container dots-over" data-margin="10" data-dots="false" data-nav="true" data-thumbs="true"> --}}
      <div class="swiper-container" data-margin="10" data-dots="false" data-nav="false" data-thumbs="false">
        <div class="swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <figure class="rounded">
                <img src="{{ $urladmin.$kegiatan->attachment }}" alt=""/>
                  <a class="item-link" href="{{ $urladmin.$kegiatan->attachment }}" data-glightbox data-gallery="product-group">
                    <i class="uil uil-focus-add"></i>
                  </a>
                <span class="badge bg-warning text-white position-absolute text-uppercase fs-13" style="top: 1rem; left: 1rem;"><span>{{ $kegiatan->category }}</span></span>
              </figure>
            </div>

          </div>
        </div>

        {{-- Untuk Lebih dari satu gambar nanti --}}
        {{-- <div class="swiper swiper-thumbs">
          <div class="swiper-wrapper">
  
            <div class="swiper-slide"><img src="{{ $urladmin.$kegiatan->attachment }}" class="imag rounded" alt="" /></div>
  
          </div>
        </div> --}}
      </div>
    </div>
    <hr class="mt-0 mb-0">
    <div class="card-body">
      <div class="post-header">
        <div class="post-category">
          <a class="hover" rel="category">{{ $kegiatan->grade." - ".$kegiatan->city }}</a>
        </div>
        <h2 class="post-title mt-1 mb-0"><a>{{ $kegiatan->title }}</a></h2>
      </div>
      <div class="post-content mt-2">
        <?php 
          $find = '<p>';
          $replaceWith = '<p style="text-align: justify;">';
          $newString = str_replace($find, $replaceWith, $kegiatan->content);
        ?>
        {!! $newString !!}
      </div>
    </div>
    <div class="card-footer">
      <ul class="post-meta d-flex mb-0">
        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>{{ \Carbon\Carbon::parse($kegiatan->created_at)->format('d M Y') }}</span></li>
      </ul>
    </div>
  </div>

</section>


<br>
<br>

@endsection