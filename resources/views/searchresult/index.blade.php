@extends('master.master')
@section('content')

<section class="wrapper bg-gray">
  <div class="container pt-10 pb-md-3 pt-md-15">
    <nav class="d-inline-block" aria-label="breadcrumb">
      <div class="navplus">
        <ol class="breadcrumb mb-0 mt-n5">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
          <li class="breadcrumb-item active text-muted" aria-current="page"><div class="textjudulbread"><span id="textjudulbread">Pencarian</span></div></li>
        </ol>
      </div>
    </nav>
  </div>
</section>

<div class="margin-broad">
  
  <div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="search-result-box card-box">
                    <div class="row">
                      <form action="{{ route('search') }}" method="get" enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-8 offset-md-2">
                            <div class="pt-3 pb-4">
                                <div class="input-group">
                                    <input type="text" id="" name="query" class="form-control" value="{{ $query }}">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn bg-green text-white btn-custom"><i class="fa fa-search"></i>&nbsp;Cari</button>
                                    </div>
                                </div>
                                <div class="mt-4 text-center">
                                  <h4>Hasil pencarian untuk "{{ $query }}"</h4>
                                </div>
                            </div>
                        </div>
                        
                      </form>
                    </div>
                    @if($listsearch->isEmpty())
                      <div class="card mb-10">
                        <div class="text-center mt-10 mb-10">
                          <span class="h3"><b><i class="fa fa-folder-open-o" aria-hidden="true"></i> Tidak ditemukan</b></span>
                          <br>
                          <span>Maaf, kami tidak dapat menemukan hasil apa pun untuk pencarian Anda.</span>
                        </div>
                      </div>
                    @else
                      <div class="card mb-10 px-5">
                        <div class="tab-content">
                            <div class="tab-pane active" id="home">
                                <div class="row">
                                    <div class="col-md-12">

                                      @foreach($listsearch as $search)
                                        <div class="search-item">
                                            <h4 class="mb-1"><a href="{{ url('info/kegiatan/detail/').'/'.$search->title_slug }}">{{ $search->title }}</a></h4>
                                            <p class="mb-0 text-muted textsrch">{{ strip_tags($search->content) }}</p>
                                        </div>
                                      @endforeach

                                      <div class="my-centered-pagination">
                                        {{ $listsearch->appends(['query' => $query])->links('vendor.pagination.bootstrap-4') }}
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>

                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>

</div>  

@endsection