@extends('template.main')

@section('title', 'Investasi Pendidikan | ')

@section('content')

<section class="page-top-section page-profile" id="price-list">
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
          <table class="table table-striped" id="reguler" v-for="program in programs" :key="program.idProgram">
            <thead>
              <tr>
                <th class="bg-primary-s text-primary" style="border-radius: .5rem 0 0 0;" scope="col">No.</th>
                <th class="bg-primary-s text-primary">@{{ program.titleName }}</th>
                <th class="bg-primary-s text-primary" style="border-radius: 0 .5rem 0 0;">@{{ program.titlePrice }}</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="content in program.contents" :key="program.idContent">
                <th v-if="content.idContent < 100" scope="row">@{{ content.idContent }}</th>
                <td v-if="content.idContent > 100" class="fw-bold bg-primary-s text-primary" colspan="3">@{{ content.contentName }}</td>
                <td v-if="content.idContent < 100" >@{{ content.contentName }}</td>
                <td v-if="content.idContent < 100" width="500">Rp. @{{ content.contentPrice }}</td>
              </tr>
            </tbody>
          </table>
        </div>  
      </div>
    </div>
  </div>
</section>

@endsection

@section('js-extra')
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script type="text/javascript" src="{{asset('assets/js/investasi-pendidikan.js')}}"></script>
@endsection