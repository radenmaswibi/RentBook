<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Rents-Books</title>
</head>

<body style="background-color :aliceblue">
    <div class="container">
        <main class="form-register">
            <form action="{{ route('store') }}" method="POST">
               @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Register</h1>

                <div class="form-floating">
                    <input type="text" name="name" class="form-control mt-2" id="name" placeholder="name">
                    <label for="name">Name</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control mt-2" id="email" placeholder="name@example.com">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control mt-2" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <div class="form-floating">
                    <input type="no_hp" name="no_hp" class="form-control mt-2" id="no_hp" placeholder="+62...">
                    <label for="no_hp">No tlpn</label>
                </div>
                <div class="form-floating">
                    <input type="addres" name="addres" class="form-control mt-2" id="addres" placeholder="addres">
                    <label for="addres">Addres</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Submit</button>
                
            </form>
            <small class="d-block text-center mt-3">Sudah punya akun?<a href="/login">Login</a></small>
        </main>
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
</body>

</html>