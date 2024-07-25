@extends('main')

@section('title', 'Beranda')
    

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 teks-home">
                <h1>Selamat Datang di Santri Online</h1>
                <p>Ini adalah platform yang menyediakan berbagai informasi terkait santri yang terdaftar, dari detail pribadi hingga perkembangan akademis. Kami mengundang Anda untuk melengkapi data diri Anda, sehingga kami dapat menyediakan layanan yang lebih baik dan lebih personal kepada Anda. Segera lengkapi informasi pribadi Anda agar dapat terhubung dengan komunitas kami, mengakses materi pendidikan yang disesuaikan, dan mendapatkan pengalaman belajar yang bermakna.
                </p>
            </div>

            <div class="col-md-6 image-center">
                <img src="{{asset('assets/image/santri4.jpg')}}" class="img-fluid santri4" alt="Foto">
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 ">
                
            </div>

            <div class="col-md-8 teks-home">
                <h1>Perdalam Ilmu Agama mu di sini</h1>
                <p>Dengan masuk sebagai santri online maka kamu akan mendapatkan beberapa pelajaran mengenai tafsir Al-Quran, dalil-dalil Hadits, dan kisah-kisah tauladan. Dan suport dari komunitas yang membantu kamu menjadi seorang yang faham beragam serta tauladan akhlak yang mulia.</p>
            </div>
        </div>
    </div>

    <div class="container mt-5 home-container mb-5" id="content-container">
        <div class="container">
            <div class="">
                    <iframe class="materi1" src="https://drive.google.com/file/d/16Fi3redFYRDadEPySSXmCDMuNf7zYCtb/preview" style="width:100%; height:600px;" frameborder="0"></iframe>
            </div>
		</div>
    </div>

@endsection
