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
    </div>


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