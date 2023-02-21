<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rents Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://img.freepik.com/free-vector/realistic-vector-illustration-poster-with-glass-wine-bottl-glass-with-red-wine_1441-638.jpg?size=626&ext=jpg"width="30" height="24"
                    class="d-inline-block align-text-top">
                Official_Bie
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Horor</a></li>
                            <li><a class="dropdown-item" href="#">Comedy</a></li>
                            <li><a class="dropdown-item" href="#">Novel</a></li><hr>
                            <li><a class="dropdown-item" href="/index">Dashboard</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">@auth
                        <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="nav-link active btn btn-outline-danger">Log out</button>
                        </form>
                    @else
                    <a class="nav-link btn" href="/login">Login</a>
                    @endauth
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->

    {{-- carousels --}}
    <div id="carouselExampleInterval" class="carousel slide " style="max-height: 400px; max-width:100%"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="1000">
                <img src="https://img.freepik.com/free-vector/tiki-bar-cartoon-ad-posters-with-tribal-masks-bamboo-frames-palm-leaves-promo-posters-beach-hut-bar-food-drink-signboards-with-glowing-fonts-amusement-establishment-banners_107791-6832.jpg?size=626&ext=jpg&ga=GA1.2.197156762.1665232263&semt=sph"
                    class="d-block w-100" alt="..." style="max-height: 400px">
            </div>

            <div class="carousel-item" data-bs-interval="1000">
                <img src="https://img.freepik.com/free-vector/closed-blank-flask-wineglass-with-alcohol-vine-drink-burgundy-liquid-splashes-droplets_33099-1671.jpg?size=626&ext=jpg&ga=GA1.2.197156762.1665232263&semt=sph"
                    class="d-block w-100" alt="..." style="max-height: 400px">
            </div>

            <div class="carousel-item" data-bs-interval="1000">
                <img src="https://img.freepik.com/free-vector/realistic-vector-illustration-poster-with-glass-wine-bottl-glass-with-red-wine_1441-638.jpg?size=626&ext=jpg"
                    class="d-block w-100" alt="..." style="max-height: 400px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- end carousels --}}

    {{-- jumbotron --}}
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h2>Official_Bie</h2>
                <a href="{{ route('register') }}" class="btn btn-outline-danger">let's register now!</a>
            </div>
            <div class="col-8">
                <h6>Rent-Books is a place to borrow books for reading fans. 
                    Rent-Books is very useful because there are many books
                     such as fiction, novels, history, horror and others. 
                     If you are interested, let's register now
                </h6>
            </div>
        </div>
    </div>
    </div>
    {{-- end jummbotron --}}

    {{-- card popular book --}}
    <section style="background-color: #E0144C">
        <div class="container mt-5">
            <div class="row text-center text-white">
                <h2 class="mt-2 mb-2">TOP 3</h2>
                <hr class="solid">
            </div>
            <div class="row mb-3">
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://img.freepik.com/free-vector/hand-drawn-flat-new-year-party-flyer-template_23-2149194094.jpg?size=338&ext=jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">radenmaswibi</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of
                                the card's content.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://img.freepik.com/free-vector/flat-prom-invitation-template_23-2149356011.jpg?w=740&t=st=1675150609~exp=1675151209~hmac=ab8a0bc3a8ce37b0b6a920837dd6e798ba77a5bd70bb548f6ed8c2c71321f852"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">School horor</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://img.freepik.com/free-vector/hand-drawn-flat-new-year-greeting-card-template_23-2149194090.jpg?size=338&ext=jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">The invansion</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of
                                the card's content.</p>
                            <a href="#" class="btn btn-outline-primary w-100">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    </div>
    {{-- akhir card --}}

    {{-- message --}}
    
    <div class="container">
        <div class="row text-center">
            <h2>Message</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-7">
                <form action="{{ route('storeMessage') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap :</label>
                            <input type="text" class="form-control" name="name" placeholder="input your name">
                        </div>
                        <label for="message" class="form-label">Message :</label>
                        <textarea name="message" class="form-control" placeholder="Input Message..">
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-danger">Send</button>
                    <br>
                </form>
            </div>
        </div>
    </div>
    <br>
    {{-- end message --}}

    {{-- footer --}}
    <footer class="bg-secondary text-center" style="height: 40px;">
        <p> &copy; 2023 by <a href="https://www.instagram.com/radenmaswibi_/"
                style="text-decoration: none; color: white;" target="_blank">
                 Official_Bie
            </a>
        </p>
    </footer>
    {{-- end footer --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>