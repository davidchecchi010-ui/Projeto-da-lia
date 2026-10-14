<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SESI - Login</title>

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
                    rgba(20, 20, 20, 0.58)
                ),

                url("https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2000&q=90")

                center / cover fixed no-repeat;

        }

.navbar-sesi {

            height: 90px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 6%;

            background: rgba(20, 20, 20, 0.35);

            backdrop-filter: blur(6px);

            border-bottom:
                1px solid
                rgba(255, 255, 255, 0.15);

        }

.logo-sesi {

            display: flex;

            align-items: center;

            text-decoration: none;

        }

.logo-quadrado {

            width: 150px;

            height: 48px;

            background: #e30613;

            display: flex;

            align-items: center;

            justify-content: center;

            color: white;

            font-size: 30px;

            font-weight: 900;

            font-style: italic;

            letter-spacing: -2px;

            transform: skew(-4deg);

            box-shadow:
                0 5px 15px
                rgba(0,0,0,0.25);

        }

.logo-quadrado span {

            transform: skew(4deg);

        }

.menu {

            display: flex;

            align-items: center;

            gap: 45px;

        }

.menu a {

            color: #ffffff;

            text-decoration: none;

            font-size: 14px;

            font-weight: bold;

            text-transform: uppercase;

            transition: 0.3s;

        }

.menu a:hover {

            color: #e30613;

        }

.menu .ativo {

            color: #e30613;

        }

.btn-menu-login {

            padding: 10px 22px;

            border-radius: 6px;

            border: 1px solid #e30613;

            color: white !important;

            background: #e30613;

        }

.btn-menu-login:hover {

            background: #b9000b;

            color: white !important;

        }

.login-container {

            min-height: calc(100vh - 90px);

            display: flex;

            align-items: center;

            justify-content: center;

            padding: 40px 20px;

        }

.login-card {

            width: 100%;

            max-width: 590px;

            padding: 35px;

            border-radius: 18px;

            background:
                rgba(255, 255, 255, 0.55);

            backdrop-filter: blur(18px);

            -webkit-backdrop-filter: blur(18px);

            border:
                1px solid
                rgba(255, 255, 255, 0.45);

            box-shadow:

                0 25px 60px
                rgba(0,0,0,0.35);

            animation:
                aparecer 0.8s ease;

        }

@keyframes aparecer {

            from {

                opacity: 0;

                transform:
                    translateY(30px);

            }

            to {

                opacity: 1;

                transform:
                    translateY(0);

            }

        }

.icone-login {

            width: 55px;

            height: 55px;

            margin:
                0 auto 12px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #e30613;

            border-radius: 10px;

            color: white;

            font-size: 25px;

            box-shadow:
                0 8px 18px
                rgba(227,6,19,0.35);

        }

.titulo {

            text-align: center;

            color: white;

            font-size: 25px;

            font-weight: 700;

            margin-bottom: 5px;

            text-shadow:
                0 2px 5px
                rgba(0,0,0,0.4);

        }

.subtitulo {

            text-align: center;

            color: #eeeeee;

            font-size: 12px;

            margin-bottom: 22px;

        }

.linha {

            width: 70%;

            height: 1px;

            margin:
                0 auto 22px;

            background:
                rgba(255,255,255,0.35);

        }

.form-label {

            color: white;

            font-size: 12px;

            font-weight: 600;

            margin-bottom: 6px;

            text-shadow:
                0 1px 3px
                rgba(0,0,0,0.5);

        }

.campo {

            position: relative;

            margin-bottom: 18px;

        }

.campo input {

            width: 100%;

            height: 45px;

            border-radius: 8px;

            border:
                1px solid
                rgba(255,255,255,0.4);

            background:
                rgba(255,255,255,0.25);

            color: white;

            padding:
                10px 15px;

            outline: none;

            transition: 0.3s;

        }

.campo input::placeholder {

            color:
                rgba(255,255,255,0.70);

        }

.campo input:focus {

            background:
                rgba(255,255,255,0.35);

            border-color:
                #e30613;

            box-shadow:
                0 0 0 3px
                rgba(227,6,19,0.15);

        }

.opcoes {

            display: flex;

            align-items: center;

            justify-content: space-between;

            margin-bottom: 18px;

            font-size: 11px;

        }

.lembrar {

            color: white;

        }

.lembrar input {

            accent-color: #e30613;

        }

.esqueci {

            color: #ffdddd;

            text-decoration: none;

        }

.esqueci:hover {

            color: white;

        }

.btn-entrar {

            width: 100%;

            height: 48px;

            border: none;

            border-radius: 8px;

            background: #e30613;

            color: white;

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 1px;

            cursor: pointer;

            transition: 0.3s;

            box-shadow:
                0 8px 20px
                rgba(227,6,19,0.30);

        }

.btn-entrar:hover {

            background: #c9000b;

            transform:
                translateY(-2px);

            box-shadow:
                0 12px 25px
                rgba(227,6,19,0.40);

        }

.ou {

            display: flex;

            align-items: center;

            gap: 12px;

            margin:
                18px 0;

            color: white;

            font-size: 11px;

        }

.ou::before,
        .ou::after {

            content: "";

            flex: 1;

            height: 1px;

            background:
                rgba(255,255,255,0.35);

        }

.btn-cadastro {

            width: 100%;

            height: 45px;

            border-radius: 8px;

            border:
                1px solid
                rgba(255,255,255,0.45);

            background:
                rgba(255,255,255,0.15);

            color: white;

            text-decoration: none;

            display: flex;

            align-items: center;

            justify-content: center;

            font-size: 12px;

            transition: 0.3s;

        }

.btn-cadastro:hover {

            background:
                rgba(255,255,255,0.28);

            color: white;

        }

.rodape {

            text-align: center;

            margin-top: 25px;

            color:
                rgba(255,255,255,0.75);

            font-size: 10px;

        }

.rodape a {

            color: #ffb0b0;

            text-decoration: none;

        }

@media (max-width: 800px) {

            .navbar-sesi {

                padding:
                    0 20px;

            }

            .menu {

                gap: 15px;

            }

            .menu a {

                font-size: 10px;

            }

            .logo-quadrado {

                width: 110px;

                height: 40px;

                font-size: 23px;

            }

        }

@media (max-width: 600px) {

            .menu a:not(.btn-menu-login) {

                display: none;

            }

            .login-card {

                padding:
                    25px 20px;

            }

        }

    </style>

</head>

<body>

<header class="navbar-sesi">

<a href="#" class="logo-sesi">

            <div class="logo-quadrado">

                <span>SESI</span>

            </div>

        </a>

<nav class="menu">

            <a href="#">
                Home
            </a>

            <a href="#">
                Contato
            </a>

            <a href="#">
                Sobre
            </a>

            <a href="#">
                Cardápio
            </a>

            <a
                href="#"
                class="btn-menu-login">

                Login

            </a>

        </nav>

</header>

<main class="login-container">

<div class="login-card">

<div class="icone-login">

                ✉

            </div>

<h1 class="titulo">

                Bem-vindo

            </h1>

<p class="subtitulo">

                Faça login para acessar o sistema
                do refeitório SESI

            </p>

<div class="linha"></div>

<form
                action="#"
                method="POST">

                @csrf

<div class="campo">

                    <label
                        for="email"
                        class="form-label">

                        E-mail

                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="seu@email.com"
                        required>

                </div>

<div class="campo">

                    <label
                        for="senha"
                        class="form-label">

                        Senha

                    </label>

                    <input
                        type="password"
                        id="senha"
                        name="senha"
                        placeholder="••••••••"
                        required>

                </div>

<div class="opcoes">

                    <label class="lembrar">

                        <input
                            type="checkbox"
                            name="lembrar">

                        Lembrar de mim

                    </label>

<a
                        href="#"
                        class="esqueci">

                        Esqueceu a senha?

                    </a>

                </div>

<button
                    type="submit"
                    class="btn-entrar">

                    ENTRAR

                </button>

</form>

<div class="ou">

                OU

            </div>

<a
                href="#"
                class="btn-cadastro">

                Criar conta gratuita

            </a>

<div class="rodape">

                Ao entrar, você concorda com nossos

                <a href="#">
                    Termos de Uso
                </a>

                e

                <a href="#">
                    Política de Privacidade
                </a>

            </div>

</div>

    </main>

</body>

</html>

```

