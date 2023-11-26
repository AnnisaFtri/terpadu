@extends('layouts.app')
@section('title', 'login')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    
</body>
</html>
    <section class="vh-80">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img height="500" src="{{asset('register.png')}}"
                         class="img-fluid" alt="Phone image">
                </div>
                <div style="background-color: white; height: 840px;" class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 border">
              <form action="/register" method="POST">
                @csrf
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0" style="font-size: 200%;">Register</p>
                </div>
                        <!-- NIK input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="no_kk">Nomor KK</label>
                            <input type="number" id="no_kk" class="form-control form-control-lg" name="no_kk" 
                                   required autocomplete="NIK"/>
                        </div>

                        <!-- Nama input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="username">Username</label>
                            <input type="Nama" id="Naqma" class="form-control form-control-lg" name="username"
                                   required/>
                        </div>

                         <!-- Tanggal Lahir input -->
                         <div class="form-outline mb-4">
                            <label class="form-label" for="nama_ayah">Nama Ayah</label>
                            <input type="nama_ayah" id="nama_ayah" class="form-control form-control-lg" name="nama_ayah"
                                   required/>
                        </div>

                         <!-- Alamat input -->
                         <div class="form-outline mb-4">
                            <label class="form-label" for="alamat_ayah">Alamat Ayah</label>
                            <input type="alamat_ayah" id="alamat_ayah" class="form-control form-control-lg" name="alamat_ayah"
                                   required/>
                        </div>

                         <!-- No BPJS input -->
                         <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"
                                   required/>
                        </div>

                         <!-- Nama input -->
                         <div class="form-outline mb-4">
                            <label class="form-label" for="foto">Foto</label>
                            <input type="foto" id="foto" class="form-control form-control-lg" name="foto"
                                   required/>
                        </div>

                        <div class="text-danger errors">
                            <p class="err-message"></p>
                        </div>
                        @csrf

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        <br></br> <a href="{{url('/login')}}">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <script type="module">
        $('form').submit(async function (e) {
            e.preventDefault();
            let username = $('#username').val();
            let password = $('#password').val();

            await axios({
                method: 'post',
                url: 'http://localhost:8000/login',
                data: {
                    username,
                    password
                }
            }).then(async () => {
                await swal.fire({
                    title: 'Login berhasil!',
                    text: 'Redirecting to dashboard...',
                    icon: 'success',
                    timer: 1000,
                    showConfirmButton: false
                })
                window.location = '/dashboard'
                console.log('success')
            }).catch(({response}) => {
                if (!$('.err-message').text()) {
                    $('.err-message').append(document.createTextNode(response.data.errors.message))
                }
            })

        })
    </script>
@endsection
