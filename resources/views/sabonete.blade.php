<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Exemplo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <style>

        .product-card {
            background-color: #e0e0e0;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 50px; /* Espaçamento entre as linhas */
            max-width: 335px; /* Largura máxima dos cards */
        }
        .product-card img {
            width: 100%;
            height: 250px; /* Ajuste a altura da imagem */
            object-fit: cover; /* Ajusta a imagem para cobrir o card */
        }
        .product-price {
            color: red;
            font-size: 24px;
            margin: 10px 0;
        }
        .product-name, .market-name {
            font-size: 16px;
            color: #333;
        }
        .product-card p {
        margin-bottom: 0 !important;
        padding-bottom: 0 !important;
        }
        .product-review-label {
        margin-left: 5px;
        }


    </style>
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand me-auto" href="{{ route('inicio') }}">
            <img src="images/logo_tcc.png" alt="Logo" class="logo-image">
        </a>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('mercados') }}">Mercados</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" aria-current="page" href="{{ route('produtos') }}">
                        Produtos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('cadastro_produto') }}">Cadastrar Produto</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Conta -->
        <a href="{{ route('cadastro') }}" class="navbar-brand ms-auto">
    <img src="{{ asset('images/conta_tcc.png') }}" alt="Conta" class="conta-image">
</a>

    </div>
</nav>

<!-- Seção de Produtos em Destaque -->
<div class="container mt-5">
    <h2 class="text-start mb-4">Produtos em destaque</h2>
    <br>

    <!-- Produtos -->
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="product-card">
                <img src="images/pr_sabonete.png" alt="Imagem do Produto 1">
                <div class="product-info">
                    <br>
                    <p class="product-name">Sabonete em Barra Dove Original 90g</p>
                    <p class="product-price">R$ 30,00</p>
                    <p class="market-name">Mercado Noemia</p>
                    <br>
                    <br>
                    <p class="product-review-label">Avalie o produto:</p>
                    <input type="text" class="form-control product-input" placeholder="Deixe sua avaliação">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
            <img src="images/pr_sabonete.png" alt="Imagem do Produto 2">
                <div class="product-info">
                    <br>
                    <p class="product-name">Sabonete em Barra Dove Original 90g</p>
                    <p class="product-price">R$ 35,00</p>
                    <p class="market-name">Mercado Tietê</p>
                    <br>
                    <br>
                    <p class="product-review-label">Avalie o produto:</p>
                    <input type="text" class="form-control product-input" placeholder="Deixe sua avaliação">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
            <img src="images/pr_sabonete.png" alt="Imagem do Produto 3">
                <div class="product-info">
                    <br>
                    <p class="product-name">Sabonete em Barra Dove Original 90g</p>
                    <p class="product-price">R$ 40,00</p>
                    <p class="market-name">Mercado Economix</p>
                    <br>
                    <br>
                    <p class="product-review-label">Avalie o produto:</p>
                    <input type="text" class="form-control product-input" placeholder="Deixe sua avaliação">
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
            <img src="images/pr_sabonete.png" alt="Imagem do Produto 4">
                <div class="product-info">
                    <br>
                    <p class="product-name">Sabonete em Barra Dove Original 90g</p>
                    <p class="product-price">R$ 45,00</p>
                    <p class="market-name">Mercado Atacadinho</p>
                    <br>
                    <br>
                    <p class="product-review-label">Avalie o produto:</p>
                    <input type="text" class="form-control product-input" placeholder="Deixe sua avaliação">
                </div>
            </div>
        </div>
         <!-- Produto 5 -->
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <div id="carouselProduct5" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/pr_sabonete2lux1.png" alt="Imagem 1 do Produto 5">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux2.png" alt="Imagem 2 do Produto 5">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux3.png" alt="Imagem 3 do Produto 5">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux4.png" alt="Imagem 4 do Produto 5">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux5.png" alt="Imagem 5 do Produto 5">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux6.png" alt="Imagem 6 do Produto 5">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct5" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct5" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
                <div class="product-info">
                    <br>
                    <p class="product-name">Sabonete Lux Botanicals 85g</p>
                    <p class="product-price">R$ 50,00</p>
                    <p class="market-name">Mercado Noemia</p>
                    <br>
                    <br>
                    <p class="product-review-label">Avalie o produto:</p>
                    <input type="text" class="form-control product-input" placeholder="Deixe sua avaliação">
                </div>
            </div>
        </div>

        <!-- Produto 6 -->
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <div id="carouselProduct6" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/pr_sabonete2lux1.png" alt="Imagem 1 do Produto 6">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux2.png" alt="Imagem 2 do Produto 6">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux3.png" alt="Imagem 3 do Produto 6">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux4.png" alt="Imagem 4 do Produto 6">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux5.png" alt="Imagem 5 do Produto 6">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux6.png" alt="Imagem 6 do Produto 6">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct6" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct6" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
                <div class="product-info">
                    <br>
                    <p class="product-name">Sabonete Lux Botanicals 85g</p>
                    <p class="product-price">R$ 55,00</p>
                    <p class="market-name">Mercado Tietê</p>
                    <br>
                    <br>
                    <p class="product-review-label">Avalie o produto:</p>
                    <input type="text" class="form-control product-input" placeholder="Deixe sua avaliação">
                </div>
            </div>
        </div>

        <!-- Produto 7 -->
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <div id="carouselProduct7" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/pr_sabonete2lux1.png" alt="Imagem 1 do Produto 7">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux2.png" alt="Imagem 2 do Produto 7">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux3.png" alt="Imagem 3 do Produto 7">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux4.png" alt="Imagem 4 do Produto 7">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux5.png" alt="Imagem 5 do Produto 7">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux6.png" alt="Imagem 6 do Produto 7">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct7" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct7" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
                <div class="product-info">
                    <br>
                    <p class="product-name">Sabonete Lux Botanicals 85g</p>
                    <p class="product-price">R$ 52,00</p>
                    <p class="market-name">Mercado Boa Compra</p>
                    <br>
                    <br>
                    <p class="product-review-label">Avalie o produto:</p>
                    <input type="text" class="form-control product-input" placeholder="Deixe sua avaliação">
                </div>
            </div>
        </div>

        <!-- Produto 8 -->
        <div class="col-lg-4 col-md-6">
            <div class="product-card">
                <div id="carouselProduct8" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/pr_sabonete2lux1.png" alt="Imagem 1 do Produto 8">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux2.png" alt="Imagem 2 do Produto 8">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux3.png" alt="Imagem 3 do Produto 8">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux4.png" alt="Imagem 4 do Produto 8">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux5.png" alt="Imagem 5 do Produto 8">
                        </div>
                        <div class="carousel-item">
                            <img src="images/pr_sabonete2lux6.png" alt="Imagem 6 do Produto 8">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselProduct8" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselProduct8" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Próximo</span>
                    </button>
                </div>
                <div class="product-info">
                    <br>
                    <p class="product-name">Sabonete Lux Botanicals 85g</p>
                    <p class="product-price">R$ 53,00</p>
                    <p class="market-name">Mercado Santo Antônio</p>
                    <br>
                    <br>
                    <p class="product-review-label">Avalie o produto:</p>
                    <input type="text" class="form-control product-input" placeholder="Deixe sua avaliação">
                </div>
            </div>
        </div>

    </div> <!-- Fim da linha de produtos -->
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</body>
</html>
