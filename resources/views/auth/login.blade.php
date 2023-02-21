<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Halaman Login</title>
</head>

<body style="background-color :aliceblue">
    <div class="container">
        <main class="form-register">
            <form action="/login" method="post">
               @csrf
                <h1 class="h3 mb-3 fw-normal text-center">login</h1>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control mt-2" id="email" placeholder="name@example.com">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div><br>
                <center>
                <button type="submit" class="btn btn-primary">Login</button>
                <small class="">belum punya akun?<a href="/register" class="text-decoration-none">Register</a></small>
            </center>
        </form>
</body>
</html>
                                    