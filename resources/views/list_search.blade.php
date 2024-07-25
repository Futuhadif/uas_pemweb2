@extends('main')

@section('title', 'list santri')

@section('content')
    <div class="content mt-3 container-fluid">
        <div class="card card-info card-outline">
            <div class="card-header">
                <div>
                    <h3>Hasil pencarian santri '{{$query}}'</h3>
                </div>
                @if (session('is_admin'))
                    <div class="card-tools d-flex justify-content-end">
                        <a href="{{route('create')}}" type="button" class="btn btn-info  mr-3" >
                             Baru
                        </a>
                        <a href="{{route('santri.pdf')}}" type="button" class="btn btn-success mr-3" >
                            Print
                        </a>
                        <a href="{{route('logout')}}" class="btn btn-danger" >
                            Keluar
                        </a>
                    </div>
                @else
                <div class="card-tools d-flex justify-content-end">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCente">
                        Masuk sebagai admin
                    </button>
                </div>
                @endif
                
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Nama</th>
                        <th>Nama Ibu</th>
                        <th>Nama Ayah</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>No Hp</th>
                        <th>Jenis Santri</th>
                        @if (session('is_admin'))
                            <th>Aksi</th>
                        @endif
                    </tr>
                    @foreach ($Dtsantri as $santri)
                    <tr>
                        <td>{{ $santri->nama }}</td>
                        <td>{{ $santri->nama_ibu }}</td>
                        <td>{{ $santri->nama_ayah }}</td>
                        <td>{{ $santri->alamat }}</td>
                        <td>{{ $santri->tgllhr }}</td>
                        <td>{{ $santri->no_hp }}</td>
                        <td>{{ $santri->jenis_santri }}</td>
                        @if (session('is_admin'))
                            <td>
                                <a href="{{route('edit', $santri->id)}}">update</a> | <a href="{{route('delete-santri', $santri->id)}}">hapus</a>
                            </td>                           
                        @endif
                    </tr>
                    @endforeach
                </table>
            </div>
            <div class="card-footer">
            </div>
        </div>
        
    </div>

    <!-- Modal -->
        <div class="modal fade" id="exampleModalCente" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <h5 class="text-center" >Masuk Sebagai Admin</h5>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email">E-mail </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email Admin" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password </label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Masukan password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Masuk</button>
                    </form>                    
                </div>
                <div class="modal-footer">
                </div>
            </div>
            </div>
        </div>
    {{-- @include('sweetalert::alert') --}}


@endsection