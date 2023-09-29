@extends('master.master')

@section('content')

<section class="wrapper bg-gray">
  <div class="container pt-10 pb-md-3 pt-md-15">
    <nav class="d-inline-block" aria-label="breadcrumb">
      <div class="navplus">
        <ol class="breadcrumb mb-0 mt-n5">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
          <li class="breadcrumb-item active text-muted" aria-current="page"><div class="textjudulbread"><span id="textjudulbread">Koleksi Foto</span></div></li>
        </ol>
      </div>
    </nav>
  </div>
</section>

{{-- <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-400 text-white" data-image-src="{{ asset('assets/img/koleksifoto/header.jpg') }}">
  <div class="container pt-15 pb-10 pt-md-17 pb-md-15 text-center">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <h1 class="display-1 mb-3 text-yellow bordered-text">Koleksi Foto</h1>
      </div>
    </div>
  </div>
</section> --}}

<section class="wrapper bg-homepage-3" style="padding-bottom: 0">
  <div class="container py-5 py-md-12">

    <form action="{{ route('koleksifoto') }}" id="myForm" method="GET" enctype="multipart/form-data">
      @csrf
      <div class="row text-left mb-4">
        <div class="col-md-4 col-lg-4 mb-2">
          <select name="filter" class="form-select">
            <option value="">Semua</option>
              @foreach($mstbranches as $branch)
                <option @if($filter === $branch->grade . '++' . $branch->city) selected="selected" @endif value="{{ $branch->grade . '++' . $branch->city }}">{{ $branch->grade." - ".$branch->city }}</option>
              @endforeach
          </select>
        </div>
        <div class="col-md-4 col-lg-2 mb-2">
          <div class="text-center w300">
            <a id="submitBtn" type="submit" class="btnsrch srch"><i class="uil uil-search"></i></a>
          </div>
        </div>
      </div>
    </form>

    <div class="custom-row">
      @if($fotos->count() > 0)
        @foreach($fotos as $foto)
        <div class="custom-col mx-auto px-2 py-2">
          <figure class="overlay overlay-1 rounded"><a href="{{ $urladmin.$foto->attachment }}" data-glightbox="" data-gallery="shots-group"> <img class="imag-fotos" src="{{ $urladmin.$foto->attachment }}" alt=""></a>
            <figcaption>
              <h5 class="from-top mb-0">Lihat Ukuran Penuh</h5>
            </figcaption>
          </figure>
        </div>
        @endforeach
      @else
      <div class="col-lg-6 mx-auto px-2 py-2">
        <p class="text-center">Maaf, Foto Pada Branch Ini Kosong.</p>
      </div>
      @endif
    </div>
    <div class="my-centered-pagination">
      {{ $fotos->links('vendor.pagination.bootstrap-4') }}
    </div>
  </div>
</section>

@endsection