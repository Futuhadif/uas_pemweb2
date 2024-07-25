@extends('main')

@section('content')
<div class="container" id="content-container">
  <div class="row">
      <div class="col-md-6">
          <img src="{{ asset('assets/image/santri.png')}}" class="img-fluid" alt="Foto">
      </div>


      <div class="col-md-6 content-right " >

          <div class="teks-content" >
            <br>
              <h1>Selamat Datang di Santri Online</h1>
              <p>Ini adalah platform yang menyediakan berbagai informasi terkait santri yang terdaftar, dari detail pribadi hingga perkembangan akademis. Kami mengundang Anda untuk melengkapi data diri Anda, sehingga kami dapat menyediakan layanan yang lebih baik dan lebih personal kepada Anda. Segera lengkapi informasi pribadi Anda agar dapat terhubung dengan komunitas kami, mengakses materi pendidikan yang disesuaikan, dan mendapatkan pengalaman belajar yang bermakna.
              </p>
              <br>
              <a href="{{route('create')}}" class="link">Daftar</a>
          </div>
      </div>
  </div>
</div>
@endsection
    



