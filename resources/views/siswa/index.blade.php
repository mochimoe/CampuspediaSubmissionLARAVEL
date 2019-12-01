<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CampusPedia - Data Siswa</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                 {{session('success')}}   
            </div>
        @endif
            
        <div class="row">
            <div class="col-6">
                    <h1>Data Siswa Campus Pedia</h1>
            </div>

            <div class="col-6 align-self-center">
                {{-- tombol daftar siswa --}}
                <button type="button" class="btn btn-info btn-sm float-right " data-toggle="modal" data-target="#exampleModalCenter">
                    Tambah Siswa
                </button>
            </div>
               {{-- TABELNYA DISINIIIIIIIIIIIII --}}
                <table class="table table-hover">
                    <thead class="thead-dark">
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
    </div>

    {{-- fungsi modal --}}
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Form Tambah Data Siswa</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                            <div class="modal-body">
                                {{-- FORM CREATE DATA DISINIIIII!!!!! --}}
                                <form action="/siswa/create" method="POST" class="needs-validation" novalidate>
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                          <label for="validationCustom01">Nama Siswa</label>
                                          <input name="nama_siswa" type="text" class="form-control" id="nama" required>
                                            <div class="invalid-feedback">
                                                Masukkan Namamu
                                            </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="validationCustom02">Email</label>
                                          <input name="email_siswa" type="email" class="form-control" id="validationCustom02" required>
                                            <div class="invalid-feedback">
                                                Masukkan Email
                                            </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="validationCustom03">Nomor HP</label>
                                                <input name="no_hp" type="number" class="form-control" id="validationCustom03" required>
                                                  <div class="invalid-feedback">
                                                      Masukkan Nomor HP
                                                  </div>
                                        </div>
                                        <div class="form-group">
                                                <label for="validationCustom04">Asal Kota</label>
                                                <input name="alamat" type="text" class="form-control" id="validationCustom04" required>
                                                  <div class="invalid-feedback">
                                                      Masukkan Asal Kota
                                                  </div>
                                        </div>
                                        <div class="form-group form-check">
                                          <input type="checkbox" class="form-check-input" id="invalidCheck" required>
                                          <label class="form-check-label" for="invalidCheck">Saya Menyetujui Segala Terms & Conditions</label>
                                            <div class="invalid-feedback">
                                                Jangan lupa ceklist
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>

                                {{-- END FORM CREATE DATA --}}
                            </div>
                </div>
            </div>
    </div>

    {{-- AKHIR FUNGSI MODALLLL --}}
    


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    {{-- SCRIPT VALIDATION FORM --}}
    <script>
            (function() {
              'use strict';
              window.addEventListener('load', function() {
                // Fetch semua form yang ingin diaplikasikan validasi
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                  form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                  }, false);
                });
              }, false);
            })();
    </script>
    {{-- END SCRIPT VALIDATION FORM --}}
</body>
</html>