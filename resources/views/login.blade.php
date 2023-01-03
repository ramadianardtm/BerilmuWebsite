<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <div class="text-center">
        <img src="img/togaberilmu.png" alt="Logo Berilmu" style="width: 25%; padding-top: 3%;">
    </div>
    <title>Login</title>
</head>
<style>
    body {
        background-color: #E8F2FD;
        background-size: cover;
        display: block;
        margin: 5%;
    }
</style>

<body>

    <div class="row justify-content-center" style="margin-top: 8%">
        @if (Session::has('status'))
        <div class="alert w-100 btn btn-lg mt-3" style="background-color: rgb(136, 212, 255)" role="alert">
            {{ Session::get('message') }}
        </div>
        @endif
        <div class="col-lg-6">
            
                <form action="" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control " name="email" id="email" required placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating" style="margin-top: 2%">
                        <input type="password" class="form-control rounded-bottom" name="password" id="password" required placeholder="Password">
                        <label for="password">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg mt-3" style="background-color: rgb(136, 212, 255)" type="submit">Login</button>
                </form>

                <small class="d-block mt-3">Belum punya akun? <a class="text" style="color: rgba(70,184,249,255)" href="/register">
                        Daftar
                        sekarang!</a></small>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

</html>