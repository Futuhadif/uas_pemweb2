@extends('main')

@section('title', 'create')

@section('content')
    <div class="container mb-5" id="content-container">
        <div class="row">
            <div class="col-md-6 form-register">
                <div class="">
                <form action="{{ route('update',$dtSantriUpdate->id) }}" id="myForm" method="post">
                    <h2 class="text-center">Ubah Data Santri Kamu</h2>
                    <hr> 
                    <!-- Form untuk data santri -->
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="{{$dtSantriUpdate->nama}}">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir:</label>
                        <input type="date" name="tgllhr" class="form-control" id="tanggal_lahir" required min="1000-01-01" max="9999-12-31" value="{{$dtSantriUpdate->tgllhr}}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat:</label>
                        <textarea name="alamat" class="form-control" id="alamat" rows="3" required>{{ $dtSantriUpdate->alamat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama_ayah">Nama Ayah:</label>
                        <input type="text" name="nama_ayah" class="form-control" id="nama_ayah" value="{{$dtSantriUpdate->nama_ayah}}" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu">Nama Ibu:</label>
                        <input type="text" name="nama_ibu" class="form-control" id="nama_ibu" value="{{$dtSantriUpdate->nama_ibu}}" required>
                    </div>
                    <div class="form-group">
                        <label for="nomor_hp">Nomor HP:</label>
                        <input type="text" name="no_hp" class="form-control" id="nomor_hp" value="{{$dtSantriUpdate->no_hp}}" required>
                    </div>
                    <div class="form-group">
                        <label for="jenis_santri">Jenis Santri:</label>
                        <select name="jenis_santri" class="form-control" id="jenis_santri" value="{{$dtSantriUpdate->jenis_santri}}" required>
                            <option value="Reguler">Reguler</option>
                            <option value="Anak Sekolah">Anak Sekolah</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button> 
                </form>
                </div>
            </div>

            <div class="col-md-6 content-right" >
                <br>
                <br>
                <br>
                <br>
                <img src="{{ asset('assets/image/santri2.jpg')}}" class="img-fluid santri2" alt="Foto">
            </div>
        </div>

        
    </div>
    
@endsection
    



