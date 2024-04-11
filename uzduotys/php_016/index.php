<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <title>PHP ir MYSQL 1</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">Projektas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Pradžia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="knygos.html">Knygos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="apie.html">Apie</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Atnaujinti knygą: pavadinimas</h1>
                        <p class="lead">Atnaujinkite pasirinktos knygos informaciją</p>
                    </div>
                </div>
            </div>
        </header>
        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Knygos pavadinimas</label>
                                <input type="text" class="form-control" id="nameInput" value="Pavadinimas">
                            </div>
                            <div class="mb-3">
                                <label for="authorInput" class="form-label">Autorius</label>
                                <input type="text" class="form-control" id="authorInput" value="Autorius toks ir toks">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="genreInput" class="form-label">Žanras</label>
                                <input type="text" class="form-control" id="genreInput" value="Fantastika">
                            </div> -->
                            <div class="mb-3">
                                <label for="pagesInput" class="form-label">Puslapių sk.</label>
                                <input type="number" class="form-control" id="pagesInput" value="250">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Kaina, €</label>
                                <input type="text" class="form-control" id="priceInput" value="20">
                            </div>
                            <button type="submit" class="btn btn-success">Atnaujinti knygą</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-light text-dark pt-3 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="mt-0 mb-0">Visos teisės saugomos</p>
                    </div>
                    <div class="col">
                        <p class="mt-0 mb-0 text-end">Dar kas nors</p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>