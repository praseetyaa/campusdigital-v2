@extends('template.main')

@section('title', 'Investasi Pendidikan | ')

@section('content')

<section class="page-top-section page-profile">
  <div class="container">
    <div class="header-one">
      <div class="section_header">
        <div class="row align-items-center mb-5">
          <div class="col-lg-6 order-2 order-lg-1 text-center text-lg-start">
            <h1>Investasi Pendidikan</h1>
            <h4 class="fw-normal">Investasi Pendidikan Di Campus Digital</h4>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 mb-3 mb-lg-0 text-center">
            <img class="h-auto mb-3 mb-lg-0 img-header" src="{{ asset('assets/images/illustration/min/7747.png') }}" alt="">
          </div>
        </div>
      </div>
      <div class="bg-light p-4 rounded-1">
        <div class="section-invest">
          <p>Di bawah ini adalah rincian biaya pendidikan yang harus dibayarkan agar dapat bergabung dengan Lembaga Pendidikan Profesi Campus Digital diantaranya sebagai berikut :</p>
          <table class="table table-striped" id="reguler">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Program Reguler</th>
                <th scope="col">Besaran Biaya</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Digital Marketing</td>
                <td>Rp. 1.500.000</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Graphic Design</td>
                <td>Rp. 1.950.000</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Komputer Perkantoran</td>
                <td>Rp. 1.350.000</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Web Designer</td>
                <td>Rp. 1.500.000</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Web Developer</td>
                <td>Rp. 1.800.000</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Video Editor</td>
                <td>Rp. 1.350.000</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Fotografi</td>
                <td>Rp. 900.000</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Multimedia</td>
                <td>Rp. 1.200.000</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>Game Developer</td>
                <td>Rp. 5.000.000</td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>Social Media Specialist</td>
                <td>Rp. 1.500.00</td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>Mobile Programmer</td>
                <td>Rp. 5.000.000</td>
              </tr>
            </tbody>
          </table>
          <table class="table table-striped" id="corporate">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Program Corporate</th>
                <th scope="col">Besaran Biaya</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Digital Marketing</td>
                <td>Negotiable</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Graphic Design</td>
                <td>Negotiable</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Komputer Perkantoran</td>
                <td>Negotiable</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>Web Designer</td>
                <td>Negotiable</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>Web Developer</td>
                <td>Negotiable</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>Video Editor</td>
                <td>Sesuai Skema Kompetensi Teknis yang di Ujikan</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>Fotografi</td>
                <td>Sesuai Skema Kompetensi Teknis yang di Ujikan</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>Multimedia</td>
                <td>Sesuai Skema Kompetensi Teknis yang di Ujikan</td>
              </tr>
            </tbody>
          </table>
        </div>  
      </div>
    </div>
  </div>
</section>

@endsection