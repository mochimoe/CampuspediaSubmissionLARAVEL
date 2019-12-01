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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                  <a class="navbar-brand" href="/">CampusPedia</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
              </nav>


    <div class="container pb-2">
        <div class="pt-5">
                @yield('content')
        </div>
        
    </div>


        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    



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