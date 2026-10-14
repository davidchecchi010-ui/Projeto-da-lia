<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Refeitório SESI</title>

<link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;

            background:
                linear-gradient(
                    rgba(0, 0, 0, 0.65),
                    rgba(0, 0, 0, 0.65)
                ),
                url("https://images.unsplash.com/photo-1556911220-bff31c812dba?auto=format&fit=crop&w=2000&q=80");

            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

.navbar {
            height: 66px;
            background: rgba(20, 20, 20, 0.95);
        }

        .logo {
            background: #ed1c24;
            color: white;
            font-size: 28px;
            font-weight: 900;
            font-style: italic;
            padding: 5px 22px;
            margin-left: 25px;
        }

        .navbar a {
            color: white !important;
            font-weight: bold;
            margin-left: 25px;
        }

        .navbar a:hover {
            color: #ed1c24 !important;
        }

        .lia-nav-link {
            display: inline-flex;
            width: 36px;
            height: 36px;
            align-items: center;
            justify-content: center;
            margin-left: 4px !important;
            border: 1px solid rgba(255, 255, 255, 0.45);
            border-radius: 50%;
            background: rgba(237, 28, 36, 0.88);
            color: #fff !important;
            font-size: 20px;
            line-height: 1;
        }

        .lia-nav-link:hover,
        .lia-nav-link:focus-visible {
            background: #c9141b;
            color: #fff !important;
            transform: translateY(-1px);
        }

.area {
            min-height: calc(100vh - 66px);

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 45px 20px;
        }

.card-principal {
            width: 100%;
            max-width: 1100px;

            background: rgba(255, 255, 255, 0.95);

            border-radius: 25px;

            padding: 40px;

            box-shadow:
                0 15px 50px rgba(0, 0, 0, 0.45);
        }

        .card-menor {
            width: 100%;
            max-width: 600px;

            background: rgba(255, 255, 255, 0.96);

            border-radius: 25px;

            padding: 40px;

            box-shadow:
                0 15px 50px rgba(0, 0, 0, 0.45);
        }

.avatar {
            width: 90px;
            height: 90px;

            border-radius: 50%;

            background: #ed1c24;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            margin: auto;

            font-size: 22px;

            font-weight: bold;

            border: 5px solid white;

            box-shadow:
                0 5px 20px rgba(0, 0, 0, 0.25);
        }

.titulo {
            text-align: center;

            font-weight: bold;

            color: #222;

            margin-top: 15px;
        }

        .subtitulo {
            text-align: center;

            color: #6c757d;

            margin-bottom: 30px;
        }

.form-label {
            font-weight: bold;

            color: #333;
        }

        .form-control,
        .form-select {
            padding: 12px;

            border-radius: 10px;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: #ed1c24;

            box-shadow:
                0 0 0 0.2rem rgba(237, 28, 36, 0.15);
        }

.btn-sesi {
            background: #ed1c24;

            color: white;

            border: none;

            padding: 13px;

            border-radius: 10px;

            font-weight: bold;

            font-size: 17px;
        }

        .btn-sesi:hover {
            background: #c9141b;

            color: white;
        }

.link-vermelho {
            color: #ed1c24;

            font-weight: bold;

            text-decoration: none;
        }

        .link-vermelho:hover {
            text-decoration: underline;
        }

        .rodape {
            text-align: center;

            margin-top: 20px;

            color: #777;
        }

.titulo-cardapio {
            color: #ed1c24;

            font-weight: bold;

            font-size: 34px;

            margin-bottom: 30px;
        }

        .card-refeicao {
            height: 100%;

            background: white;

            border-radius: 20px;

            padding: 30px;

            box-shadow:
                0 10px 25px rgba(0, 0, 0, 0.12);

            transition: 0.3s;
        }

        .card-refeicao:hover {
            transform: translateY(-5px);

            box-shadow:
                0 15px 30px rgba(0, 0, 0, 0.18);
        }

        .card-refeicao h3 {
            font-weight: bold;
        }

        .card-refeicao p {
            color: #6c757d;

            font-size: 17px;
        }

        .horario {
            margin-top: 25px;

            font-weight: bold;

            color: #555;
        }

        .contato-home {
            text-align: center;

            margin-top: 50px;
        }

        .contato-home h2 {
            font-weight: bold;
        }

        .contato-home p {
            color: #6c757d;

            font-size: 18px;
        }

.tela {
            display: none;
        }

        #cadastro {
            display: flex;
        }

      

        @media (max-width: 768px) {

            .card-principal,
            .card-menor {
                padding: 25px 20px;
            }

            .navbar {
                height: auto;

                padding: 10px;
            }

            .logo {
                margin-left: 5px;
            }

        }

    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg">

    <div class="container-fluid">

        <div class="logo">
            SESI
        </div>

<button
            class="navbar-toggler bg-light"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menu"
        >

            <span class="navbar-toggler-icon"></span>

        </button>

<div
            class="collapse navbar-collapse justify-content-end"
            id="menu"
        >

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sobre') }}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cardapios.index') }}">Card&aacute;pio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contato') }}">CONTATO</a>
                </li>

                <li class="nav-item">
                    <a class="lia-nav-link" href="{{ route('fale_com_a_lia') }}" aria-label="Conversar com a Lia" title="Conversar com a Lia">&#129489;&#8205;&#127859;</a>
                </li>
            </ul>

        </div>

    </div>

</nav>

<section
    id="cadastro"
    class="tela area"
>

<div class="card-principal">

<div class="avatar">
            SENAI
        </div>

<h1 class="titulo">
            Cadastro do Aluno
        </h1>

<p class="subtitulo">

            Cadastre seus dados para acessar o
            sistema do Refeitório SESI.

        </p>

<form
            onsubmit="event.preventDefault(); mostrarTela('login')"
        >

<div class="row">

                <div class="col-md-7 mb-3">

                    <label class="form-label">
                        Nome completo
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="Digite seu nome completo"
                        required
                    >

                </div>

<div class="col-md-5 mb-3">

                    <label class="form-label">
                        CPF
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        placeholder="000.000.000-00"
                        required
                    >

                </div>

            </div>

<!-- DATA / EMAIL -->

            <div class="row">

                <div class="col-md-5 mb-3">

                    <label class="form-label">
                        Data de nascimento
                    </label>

                    <input
                        type="date"
                        class="form-control"
                        required
                    >

                </div>

<div class="col-md-7 mb-3">

                    <label class="form-label">
                        E-mail
                    </label>

                    <input
                        type="email"
                        class="form-control"
                        placeholder="seuemail@email.com"
                        required
                    >

                </div>

            </div>

<div class="mb-3">

                <label class="form-label">
                    Senha
                </label>

                <input
                    type="password"
                    class="form-control"
                    placeholder="Crie uma senha"
                    required
                >

            </div>

<div class="row">

                <div class="col-md-4 mb-3">

                    <label class="form-label">
                        Ano
                    </label>

                    <select class="form-select" required>

                        <option value="">
                            Selecione
                        </option>

                        <option>
                            1º Ano
                        </option>

                        <option>
                            2º Ano
                        </option>

                        <option>
                            3º Ano
                        </option>

                    </select>

                </div>

<div class="col-md-8 mb-3">

                    <label class="form-label">
                        Curso SENAI
                    </label>

                    <select class="form-select" required>

                        <option value="">
                            Selecione seu curso
                        </option>

                        <option>
                            Desenvolvimento de Sistemas
                        </option>

                        <option>
                           Multimídia
                        </option>

                    </select>

                </div>

            </div>

<div class="d-grid mt-3">

                <button
                    type="submit"
                    class="btn btn-sesi"
                >

                    CRIAR CONTA

                </button>

            </div>

</form>

<div class="rodape">

            Já possui uma conta?

            <a
                href="#"
                class="link-vermelho"
                onclick="mostrarTela('login')"
            >
                Entrar
            </a>

        </div>

</div>

</section>

<section
    id="login"
    class="tela area"
>

    <div class="card-menor">

        <div class="avatar">
            SENAI
        </div>

        <h1 class="titulo">
            Bem-vindo!
        </h1>

        <p class="subtitulo">
            Entre para acessar o
            Refeit&oacute;rio SESI.
        </p>

        <form
            onsubmit="event.preventDefault(); window.location.href='{{ route('sobre') }}'"
        >
            <div class="mb-3">
                <label class="form-label">E-mail</label>
                <input type="email" class="form-control" placeholder="Digite seu e-mail" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" placeholder="Digite sua senha" required>
            </div>

            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-sesi">ENTRAR</button>
            </div>
        </form>

        <div class="rodape">
            Ainda n&atilde;o possui uma conta?
            <a href="#" class="link-vermelho" onclick="mostrarTela('cadastro')">Criar conta</a>
        </div>
    </div>
</section>

<section
    id="home"
    class="tela area"
>

<div class="card-principal">

<h1>
            Olá!
        </h1>

<p class="subtitulo text-start">

            Bem-vindo ao sistema do
            <strong>Refeitório SESI</strong>.

            Aqui voc&ecirc; pode consultar o card&aacute;pio
            e conversar com nossa equipe da cozinha.

        </p>

<hr>

<h2 class="titulo-cardapio">
            Card&aacute;pio de hoje
        </h2>

<div class="row g-4">

<div class="col-md-4">

                <div class="card-refeicao">

                    <h3>
                        Café da manhã
                    </h3>

                    <p>

                        Pão de queijo,
                        frutas, leite e café.

                    </p>

                    <div class="horario">

                        07:00 às 09:00

                    </div>

                </div>

            </div>

<div class="col-md-4">

                <div class="card-refeicao">

                    <h3>
                        Almoço
                    </h3>

                    <p>

                        Arroz, feijão,
                        salada e acompanhamento.

                    </p>

                    <div class="horario">

                        11:00 às 13:30

                    </div>

                </div>

            </div>

<div class="col-md-4">

                <div class="card-refeicao">

                    <h3>
                        Café da tarde
                    </h3>

                    <p>

                        Pães, frutas,
                        suco e outras opções.

                    </p>

                    <div class="horario">

                        15:00 às 16:30

                    </div>

                </div>

            </div>

</div>

<div class="contato-home">

<h2>
                Não encontrou o que gostaria de comer?
            </h2>

<p>

                Você pode enviar uma mensagem
                diretamente para as cozinheiras.

            </p>

<button
                class="btn btn-sesi px-5"
                onclick="mostrarTela('contato')"
            >

                 Falar com as cozinheiras

            </button>

</div>

</div>

</section>

<section
    id="contato"
    class="tela area"
>

<div class="card-menor">

<h1 class="titulo">
            Fale com as cozinheiras
        </h1>

<p class="subtitulo">

            Não encontrou o que gostaria de comer?

            Envie uma mensagem para nossa
            equipe da cozinha.

        </p>

<form
            onsubmit="enviarMensagem(event)"
        >

<div class="mb-3">

                <label class="form-label">
                    Seu nome
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Digite seu nome"
                    required
                >

            </div>

<div class="mb-3">

                <label class="form-label">
                    O que você gostaria de comer?
                </label>

                <input
                    type="text"
                    class="form-control"
                    placeholder="Ex: Gostaria de uma opção sem carne..."
                    required
                >

            </div>

<div class="mb-3">

                <label class="form-label">
                    Mensagem
                </label>

                <textarea
                    class="form-control"
                    rows="5"
                    placeholder="Escreva sua mensagem..."
                    required
                ></textarea>

            </div>

<div class="d-grid">

                <button
                    type="submit"
                    class="btn btn-sesi"
                >

                    ENVIAR MENSAGEM

                </button>

            </div>

</form>

<div class="rodape">

            <a
                href="#"
                class="link-vermelho"
                onclick="mostrarTela('home')"
            >

                ← Voltar para o cardapio

            </a>

        </div>

</div>

</section>

<script>

    function mostrarTela(nomeTela) {

const telas = document.querySelectorAll('.tela');

        telas.forEach(function(tela) {

            tela.style.display = 'none';

        });

const telaSelecionada =
            document.getElementById(nomeTela);

if (telaSelecionada) {

            telaSelecionada.style.display = 'flex';

        }

window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });

    }

function enviarMensagem(event) {

        event.preventDefault();

alert(
            "Mensagem enviada para as cozinheiras!"
        );

event.target.reset();

mostrarTela('login');

    }

</script>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js">
</script>

</body>

</html>
