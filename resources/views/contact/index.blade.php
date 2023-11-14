@extends('master.master')

@section('content')

<section class="wrapper bg-gray">
  <div class="container pt-10 pb-md-3 pt-md-15">
    <nav class="d-inline-block" aria-label="breadcrumb">
      <div class="navplus">
        <ol class="breadcrumb mb-0 mt-n5">
          <li class="breadcrumb-item"><a href="{{ route('homepage') }}"><span class="textbread">Beranda</span><div class="iconbread"><span style="color: rgba(128, 128, 128, 0)">|</span><i class="fas fa-home"></i></div></a></li>
          <li class="breadcrumb-item active text-muted" aria-current="page"><div class="textjudulbread"><span id="textjudulbread">Kontak</span></div></li>
        </ol>
      </div>
    </nav>
  </div>
</section>

<section class="wrapper bg-soft-primary">
  <div class="container py-3">
    <div class="row">
      <div class="col-lg-11 col-xxl-10 mx-auto text-center">
        <h2 class="fs-15 text-uppercase text-muted mb-3">Kontak</h2>
        <h5 class="display-6 mb-10 px-lg-12 px-xl-10 px-xxl-15">Untuk Info Lebih Lanjut, Kami Senang Anda Dapat Menghubungi Kami</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-10 mx-auto">
        <div id="accordion-3" class="accordion-wrapper">

          @foreach($branches as $branch)
          <div class="card accordion-item shadow-lg">
            <div class="card-header" id="accordion-heading-3-1">
              <a data-bs-toggle="tooltip" data-bs-placement="top" title="Klik Untuk Lihat Detail">
                <button class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-collapse-3-1{{ $branch->id }}" aria-expanded="false" aria-controls="accordion-collapse-3-1"><b>{{ $branch->grade }}</b> - {{ $branch->city }}</button>
              </a>
            </div>
            <div id="accordion-collapse-3-1{{ $branch->id }}" class="collapse" aria-labelledby="accordion-heading-3-1" data-bs-target="#accordion-3">
              <div class="card-body">
                <div class="row">
                  <div class="col-xl-12 mx-auto">
                    <div class="card">
                      <div class="row gx-0">
                        <div class="col-lg-5 align-self-stretch">
                          <div class="map map-full rounded-top rounded-lg-start">
                            @php
                                $widthReplaced = preg_replace('/width="\d+"/', 'width="100%"', $branch->gmaps_link);
                                $bothReplaced = preg_replace('/height="\d+"/', 'height="100%"', $widthReplaced);
                            @endphp

                            {!! $bothReplaced !!}
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.48743205145!2d106.89529807373991!3d-6.199241660727816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4b986aa9d99%3A0x81e1a8753bc418cc!2sYayasan%20Kharisma!5e0!3m2!1sen!2sid!4v1695469799552!5m2!1sen!2sid" style="width:100%; height: 100%; border:0" allowfullscreen></iframe> --}}
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
                                <h5 class="mb-n1">Phone</h5>
                                <p class="m-0">
                                  @if($branch->phone1 != null && $branch->phone2 != null)
                                    {{ $branch->phone1 }} / {{ $branch->phone2 }}
                                  @elseif($branch->phone1 != null)
                                    {{ $branch->phone1 }}
                                  @elseif($branch->phone2 != null)
                                    {{ $branch->phone2 }}
                                  @endif
                                </p>
                                
                                @if($branch->whatsapp != null)
                                  <p class="m-0">{{ $branch->whatsapp }}(whatsapp)</p>
                                @endif
                              </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                              <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-instagram"></i> </div>
                              </div>
                              <div>
                                <?php 
                                  $find = 'https://www.instagram.com/';
                                  $replaceWith = '@';
            
                                  $usernameig = str_replace($find, $replaceWith, $branch->instagram);
                                ?>
                                <h5 class="mb-n1">Instagram</h5>
                                @if($branch->instagram != null)
                                  <p class="m-0"><a href="{{ $branch->instagram }}" class="link-body">{{ $usernameig }}</a></p>
                                @else
                                  <p class="m-0"> - </p>
                                @endif
                              </div>
                            </div>
                            <div class="d-flex flex-row mt-2">
                              <div>
                                <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                              </div>
                              <div>
                                <h5 class="mb-n1">E-mail</h5>
                                @if($branch->email != null)
                                  <p class="m-0"><a href="mailto:{{ $branch->email }}" class="link-body">{{ $branch->email }}</a></p>
                                @else
                                  <p class="m-0"> - </p>
                                @endif
                              </div>
                            </div>
                            <p class="mt-4"><b>Jam Buka:</b></p>
                            <ul class="mt-n4">
                              <li>{{ $branch->open_at }} @if($branch->closed_at != null) - {{ $branch->closed_at }}@endif</li>
                            </ul>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>
      </div>
    </div>
  </div>
</section>

<section class="wrapper bg-light">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-11 col-xxl-10 mx-auto text-center">
        <h5 class="display-6 mb-10 px-lg-12 px-xl-10 px-xxl-15">Kontak Yayasan Kharisma</h5>
      </div>
    </div>
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
                <address>{{ $institution->addr }}, {{ $institution->sub_district }}, {{ $institution->district }}, {{ $institution->city }}, {{ $institution->province }}, {{ $institution->zip_code }}</address>
                <div class="d-flex flex-row">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-n1">Phone</h5>
                    <p class="m-0">
                      @if($institution->phone1 != null && $institution->phone2 != null)
                        {{ $institution->phone1 }} / {{ $institution->phone2 }}
                      @elseif($institution->phone1 != null)
                        {{ $institution->phone1 }}
                      @elseif($institution->phone2 != null)
                        {{ $institution->phone2 }}
                      @endif
                    </p>
                    
                    @if($institution->whatsapp != null)
                      <p class="m-0">{{ $institution->whatsapp }}(whatsapp)</p>
                    @endif
                  </div>
                </div>
                <div class="d-flex flex-row mt-2">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-instagram"></i> </div>
                  </div>
                  <div>
                    <?php 
                      $find = 'https://www.instagram.com/';
                      $replaceWith = '@';

                      $usernameig = str_replace($find, $replaceWith, $institution->instagram);
                    ?>
                    <h5 class="mb-n1">Instagram</h5>
                    @if($institution->instagram != null)
                      <p class="m-0"><a href="{{ $institution->instagram }}" class="link-body">{{ $usernameig }}</a></p>
                    @else
                      <p class="m-0"> - </p>
                    @endif
                  </div>
                </div>
                <div class="d-flex flex-row mt-2">
                  <div>
                    <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                  </div>
                  <div>
                    <h5 class="mb-n1">E-mail</h5>
                    @if($institution->email != null)
                      <p class="m-0"><a href="mailto:{{ $institution->email }}" class="link-body">{{ $institution->email }}</a></p>
                    @else
                      <p class="m-0"> - </p>
                    @endif
                  </div>
                </div>
                <p class="mt-4"><b>Jam Buka:</b></p>
                <ul class="mt-n4">
                  <li>{{ $institution->open_at }} @if($institution->closed_at != null) - {{ $institution->closed_at }}@endif</li>
                </ul>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection