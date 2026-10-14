<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SESI - Refeitório</title>

<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;

            font-family: Arial, Helvetica, sans-serif;

            background:
                linear-gradient(
                    rgba(20, 20, 20, 0.48),
                    rgba(20, 20, 20, 0.62)
                ),

                url("https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2000&q=90")
                center / cover fixed no-repeat;
        }

.navbar-sesi {
            background: rgba(20, 20, 20, 0.55);

            backdrop-filter: blur(10px);

            border-bottom:
                1px solid
                rgba(255,255,255,.15);

            padding: 12px 0;
        }

        .logo-sesi {
            background: #e30613;

            color: white;

            font-size: 30px;

            font-weight: 900;

            font-style: italic;

            padding: 3px 15px;

            transform: skew(-5deg);
        }

        .logo-sesi span {
            display: inline-block;
            transform: skew(5deg);
        }

        .menu-link {
            color: white !important;

            text-decoration: none;

            font-weight: bold;

            font-size: 13px;

            margin-left: 28px;

            transition: .3s;
        }

        .menu-link:hover {
            color: #e30613 !important;
        }

.pagina {
            min-height: calc(100vh - 75px);

            padding: 45px 20px;

            display: flex;

            justify-content: center;

            align-items: center;
        }

        .conteudo {
            width: 100%;

            max-width: 1000px;

            background:
                rgba(255,255,255,.88);

            backdrop-filter: blur(15px);

            border:
                1px solid
                rgba(255,255,255,.45);

            border-radius: 25px;

            padding: 40px;

            box-shadow:
                0 25px 60px
                rgba(0,0,0,.45);
        }

.titulo {
            font-weight: 700;

            color: #222;
        }

        .vermelho {
            color: #e30613;
        }

.refeicao {
            background: white;

            border-radius: 18px;

            padding: 25px;

            height: 100%;

            border:
                1px solid #eeeeee;

            box-shadow:
                0 8px 25px
                rgba(0,0,0,.10);

            transition: .3s;
        }

        .refeicao:hover {
            transform: translateY(-5px);

            box-shadow:
                0 15px 30px
                rgba(0,0,0,.16);
        }

        .icone-refeicao {
            font-size: 38px;

            margin-bottom: 10px;
        }

        .refeicao h5 {
            font-weight: bold;
        }

.btn-cozinha {
            display: inline-block;
            background: #e30613;

            color: white;

            border: none;

            border-radius: 10px;

            padding: 14px 30px;

            font-weight: bold;
            text-decoration: none;

            transition: .3s;
        }

        .btn-cozinha:hover {
            background: #bd000b;

            color: white;

            transform: translateY(-2px);
        }

#contato {
            display: none;

            margin-top: 40px;

            padding-top: 35px;

            border-top:
                1px solid #ddd;
        }

        .contato-box {
            background: rgba(255,255,255,.95);

            border-radius: 18px;

            padding: 30px;

            box-shadow:
                0 8px 25px
                rgba(0,0,0,.10);
        }

        .icone-contato {
            width: 60px;

            height: 60px;

            margin: 0 auto 15px;

            border-radius: 50%;

            background: #e30613;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 28px;
        }

        .titulo-contato {
            text-align: center;

            font-weight: bold;
        }

        .subtitulo-contato {
            text-align: center;

            color: #777;

            margin-bottom: 30px;
        }

.opcao {
            display: block;

            border: 2px solid #eeeeee;

            border-radius: 12px;

            padding: 17px;

            height: 100%;

            cursor: pointer;

            transition: .3s;
        }

        .opcao:hover {
            border-color: #e30613;

            background: #fff5f5;
        }

        .opcao input {
            accent-color: #e30613;

            margin-right: 7px;
        }

textarea {
            min-height: 140px;

            resize: none;

            border-radius: 12px !important;
        }

        textarea:focus {
            border-color: #e30613 !important;

            box-shadow:
                0 0 0 3px
                rgba(227,6,19,.10) !important;
      
        @media (max-width: 768px) {

            .menu-link {
                margin-left: 10px;

                font-size: 11px;
            }

            .conteudo {
                padding: 25px;
            }

            .logo-sesi {
                font-size: 24px;
            }
        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-sesi">

    <div class="container-fluid px-4 px-md-5">

<a
            href="#inicio"
            class="navbar-brand">

            <div class="logo-sesi">

                <span>SESI</span>

            </div>

        </a>

<div class="ms-auto">

            <a
                href="#inicio"
                class="menu-link">

                HOME

            </a>

<a
                href="#cardapio"
                class="menu-link">

                CARDÁPIO

            </a>

<a
                href="{{ route('contato.cozinha') }}"
                class="menu-link"
                >

                CONTATO

            </a>

        </div>

    </div>

</nav>

<div
    class="pagina"
    id="inicio">

<div class="conteudo">

<section>

<h1 class="titulo">

                Olá! 

            </h1>

<p class="text-secondary">

                Bem-vindo ao sistema do
                <strong>Refeitório SESI</strong>.

                Aqui você pode consultar o cardápio
                e conversar com nossa equipe da cozinha.

            </p>

</section>

<hr class="my-4">

<section id="cardapio">

<h3 class="vermelho fw-bold mb-4">

                 Cardápio de hoje

            </h3>

<div class="row g-4">

<div class="col-md-4">

                    <div class="refeicao">

<div class="icone-refeicao">

</div>

<h5>

                            Café da manhã

                        </h5>

<p class="text-secondary">

                            Pão de queijo,
                            abacaxi, leite com café.

                        </p>

<small class="text-muted">

                            07:00 às 09:00

                        </small>

</div>

                </div>

<div class="col-md-4">

                    <div class="refeicao">

<div class="icone-refeicao">

</div>

<h5>

                            Almoço

                        </h5>

<p class="text-secondary">

                            Arroz, feijão carioca,
                            salada e frango grelhado.

</p>

<small class="text-muted">

                            11:00 às 13:30

                        </small>

</div>

                </div>

<div class="col-md-4">

                    <div class="refeicao">

<div class="icone-refeicao">

</div>

<h5>

                            Café da tarde

                        </h5>

<p class="text-secondary">

                            Pão com mateiga aquecida, maça,
                            suco de limão.

                        </p>

<small class="text-muted">

                            15:00 às 16:30

                        </small>

</div>

                </div>

</div>

</section>

<section class="text-center mt-5">

<h4 class="fw-bold">

                Não encontrou o que gostaria
                de comer?

            </h4>

<p class="text-secondary">

                Você pode enviar uma mensagem
                diretamente para as cozinheiras.

            </p>

<a
                href="{{ route('contato.cozinha') }}"
                class="btn-cozinha"
                >

                Falar com as cozinheiras

            </a>

</section>

<section id="contato">

<div class="contato-box">

<div class="icone-contato">

</div>

<h2 class="titulo-contato">

                    Fale com as cozinheiras

                </h2>

<p class="subtitulo-contato">

                    Gostaria de outra opção para comer?
                    Conte para nossa equipe.

                </p>

<form
                    action="{{ route('contato.enviar') }}"
                    method="POST">

                    @csrf

<label class="fw-bold mb-3">

                        O que você gostaria?

                    </label>

<div class="row g-3 mb-4">

<div class="col-md-6">

                            <label class="opcao">

                                <input
                                    type="radio"
                                    name="tipo"
                                    value="Outra opção para o café"
                                    required>

                                 Outra opção para o café

                            </label>

                        </div>

<div class="col-md-6">

                            <label class="opcao">

                                <input
                                    type="radio"
                                    name="tipo"
                                    value="Trocar alimento">

                                 Trocar um alimento

                            </label>

                        </div>

<div class="col-md-6">

                            <label class="opcao">

                                <input
                                    type="radio"
                                    name="tipo"
                                    value="Sugestão">

                                 Fazer uma sugestão

                            </label>

                        </div>

<div class="col-md-6">

                            <label class="opcao">

                                <input
                                    type="radio"
                                    name="tipo"
                                    value="Outro pedido">

                                 Outro pedido

                            </label>

                        </div>

</div>

<label
                        for="mensagem"
                        class="fw-bold mb-2">

                        Escreva sua mensagem:

                    </label>

<textarea
                        id="mensagem"
                        name="mensagem"
                        class="form-control"
                        placeholder="Exemplo: Gostaria de outra opção para o café da manhã. Teria como trocar o pão por pão de queijo?"
                        required></textarea>

<button
                        type="submit"
                        class="btn btn-danger w-100 mt-3 py-3 fw-bold">

                         ENVIAR PARA A COZINHA

                    </button>

</form>

</div>

</section>

</div>

</div>

<script>

    function mostrarContato() {

        const contato =
            document.getElementById("contato");

        contato.style.display = "block";

        contato.scrollIntoView({
            behavior: "smooth"
        });

    }

</script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>
</html>
