@extends('layouts.master')

@section('content')
@if(session('success'))
            <div class="alert alert-success" role="alert">
                 {{session('success')}}   
            </div>
        @endif
            
        <div class="row">
            <div class="col-12">
                    <h1 class="pb-3">Data Siswa Campus Pedia</h1>
            </div>

            <div class="col-12 align-self-center pb-3">
                {{-- tombol daftar siswa --}}
                <button type="button" class="btn btn-dark btn-m float-right " data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah Siswa
                </button>
            </div>
               {{-- TABELNYA DISINIIIIIIIIIIIII --}}
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Nomor HP</th>
                            <th>Asal Kota</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    
                    @foreach ($data_siswa as $siswa) 
                    <tr>
                        <td>{{$siswa->nama_siswa}}</td>
                        <td>{{$siswa->email_siswa}}</td>
                        <td>{{$siswa->no_hp}}</td>
                        <td>{{$siswa->alamat}}</td>
                    <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                            <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</a>
                        </td>
                    </tr>
                        
                    @endforeach
            
            
                </table>
                {{-- AKHIR TABEEELLLLLL --}}
        </div>
    
@endsection
        