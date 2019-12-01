@extends('layouts.master')

@section('content')

@if(session('success'))
            <div class="alert alert-success" role="alert">
                 {{session('success')}}   
            </div>
        @endif
            
        <div class="row">
            <div class="col-lg-12">
                    <h1>Edit Data Siswa Campus Pedia</h1>
                {{-- FORM CREATE DATA DISINIIIII!!!!! --}}
               <form action="/siswa/{{$siswa->id}}/update" method="POST" class="needs-validation" novalidate>
                {{ csrf_field() }}
                    <div class="form-group">
                      <label for="validationCustom01">Nama Siswa</label>
                    <input name="nama_siswa" type="text" class="form-control" id="nama" value="{{$siswa->nama_siswa}}" required>
                        <div class="invalid-feedback">
                            Masukkan Namamu
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="validationCustom02">Email</label>
                      <input name="email_siswa" type="email" class="form-control" id="validationCustom02"value="{{$siswa->email_siswa}}" required>
                        <div class="invalid-feedback">
                            Masukkan Email
                        </div>
                    </div>
                    <div class="form-group">
                            <label for="validationCustom03">Nomor HP</label>
                            <input name="no_hp" type="number" class="form-control" id="validationCustom03" value="{{$siswa->no_hp}}" required>
                              <div class="invalid-feedback">
                                  Masukkan Nomor HP
                              </div>
                    </div>
                    <div class="form-group">
                            <label for="validationCustom04">Asal Kota</label>
                            <input name="alamat" type="text" class="form-control" id="validationCustom04" value="{{$siswa->alamat}}" required>
                              <div class="invalid-feedback">
                                  Masukkan Asal Kota
                              </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Data</button>
                </form>

            {{-- END FORM CREATE DATA --}}
            </div>
        </div>
    
    
@endsection