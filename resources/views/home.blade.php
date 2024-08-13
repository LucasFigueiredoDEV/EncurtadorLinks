<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <title>Encurtador de Links</title>
</head>
<body>
    <header>
        <h1 class="text-center">Encurtador de Links</h1>
    </header>

    <main>
        @if($sucesso == 'ok')
            @if ($errors->any())
                <div class="alert alert-success">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @else
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        @endif
        <div id="mainContent">
            <div class="row m-auto">
                <div class="col" id="divGif">
                    <img src="" alt="Gif com animação de como funciona">
                </div>
                <div class="col" id="divImg">
                    <img src="" alt="Imagem do link com antes e depois">
                </div>
            </div>
            <div class="d-flex" id="divButtons">
                <div class="m-auto">
                    <a class="btn btn-secondary" style="margin-right: 10px; margin-bottom: 10px;" href=""  data-bs-toggle="modal" data-bs-target="#comoFunciona"><b>Como funciona?</b></a>
                    <a class="btn btn-info" style="margin-left: 10px; margin-bottom: 10px;" href="{{ route('viewLink') }}"><b style="color: white;">Criar meu link</b></a>
                    @if($shortLink != NULL)
                        <div class="row">
                            <h3>Seu Link Encurtado: <a href="<?php echo $shortLink; ?>">{{ $shortLink }}</a></h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="comoFunciona" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: black;">Como Funciona?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="color: black;">
            <p>O Encurtador de Links, tem a função de tornar seu link menor.</p>
            <p>Utilizando Nossa <b>URL</b> para Redirecionar para a Página Desejada.</p>
            <div style="background-color: gray; border-radius: 10px;">
                <p><b>Exemplo: </b></p>
                <p><i><a href="">www.meulinkoriginal.com</a></i> ➡ <i><a href="">www.bitly.com/l</a></i></p>
                <p>(Nesse caso a palavra escolhida na personalização foi a "l".)</p>
            </div>
        </div>
        </div>
    </div>
    </div>

    <footer>
        <h6><a href="https://github.com/LucasFigueiredoDEV">©CodeByLucasFigueiredo</a></h6>
        <h6><a href="">Repositório</a></h6>
    </footer>
</body>
</html>