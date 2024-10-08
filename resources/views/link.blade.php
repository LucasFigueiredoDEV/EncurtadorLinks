<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/link.css') }}">

    <title>Encurtador de Links</title>
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <header>
        <h1>Encurtador de Links</h1>
    </header>

    <main>
        <div class="mainContent">
            <form action="{{ route('link') }}" class="form-control" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                <div class="row">
                    <center>
                        <label for=""><b>URL: </b>
                            <input type="url" style="min-width: 300px; width: 540px;" class="form-control input d-inline" name="link" id="link" placeholder="https://www.google.com/" required>
                        </label>
                    </center>
                </div>
                <div class="row" style="margin-top: 30px;">
                    <center>
                        <label for=""><b>http://localhost/encurtadorLinks/public/</b>
                            <input type="text" class="form-control d-inline" style="width: 300px" name="customize" placeholder="myWord" required>
                        </label>
                    </center>
                </div>
                <input type="hidden" name="short_link" value="">
                <div class="row" style="margin-top: 40px;">
                    <center><input type="submit" class="btn btn-success" value="Criar Link"></center>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <h6><a href="https://github.com/LucasFigueiredoDEV">©CodeByLucasFigueiredo</a></h6>
        <h6><a href="https://github.com/LucasFigueiredoDEV/EncurtadorLinks">Repositório</a></h6>
    </footer>
</body>
</html>