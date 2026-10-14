<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#f5f7f2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>{{ config('app.name', 'SGMRS') }} | Início</title>
    <style>
        :root {
            color-scheme: light;
            font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            color: #1e3329;
            background: #f5f7f2;
            font-synthesis: none;
            text-rendering: optimizeLegibility;
        }

        * { box-sizing: border-box; }
        body { min-width: 320px; min-height: 100vh; margin: 0; }
        a { color: inherit; text-decoration: none; }

        .page { width: min(1120px, calc(100% - 40px)); margin: 0 auto; }
        .topbar { display: flex; align-items: center; justify-content: space-between; gap: 24px; padding: 24px 0; border-bottom: 1px solid #dfe7dc; }
        .brand { display: flex; align-items: center; gap: 12px; font-size: 17px; font-weight: 750; letter-spacing: -.03em; }
        .brand-mark { display: grid; width: 42px; height: 42px; place-items: center; border-radius: 14px; background: #276447; color: white; font-size: 14px; letter-spacing: .04em; }
        .site-address { color: #68776d; font-size: 13px; }

        .intro { padding: 58px 0 30px; }
        .eyebrow { margin: 0 0 12px; color: #367653; font-size: 12px; font-weight: 750; letter-spacing: .13em; text-transform: uppercase; }
        h1 { max-width: 700px; margin: 0; font-size: clamp(34px, 5vw, 54px); line-height: 1.05; letter-spacing: -.055em; }
        .intro-copy { max-width: 610px; margin: 18px 0 0; color: #65746a; font-size: 16px; line-height: 1.7; }

        .section-heading { display: flex; align-items: end; justify-content: space-between; gap: 20px; margin: 34px 0 16px; }
        h2 { margin: 0; font-size: 18px; letter-spacing: -.02em; }
        .item-count { color: #718076; font-size: 13px; }
        .modules { padding-bottom: 54px; }
        .module { display: flex; min-height: 174px; flex-direction: column; align-items: flex-start; padding: 22px; border: 1px solid #e1e8df; border-radius: 18px; background: #fff; box-shadow: 0 4px 16px rgb(27 55 38 / 4%); transition: border-color .18s ease, box-shadow .18s ease, transform .18s ease; }
        .module:hover { transform: translateY(-3px); border-color: #9dbda6; box-shadow: 0 12px 28px rgb(27 55 38 / 9%); }
        .module-icon { display: grid; width: 38px; height: 38px; place-items: center; margin-bottom: 17px; border-radius: 12px; background: #edf5ed; color: #276447; font-size: 18px; }
        .module-title { margin: 0; font-size: 16px; font-weight: 700; }
        .module-description { margin: 7px 0 0; color: #718076; font-size: 13px; line-height: 1.55; }
        .module-arrow { margin-top: auto; padding-top: 15px; color: #276447; font-size: 13px; font-weight: 700; }
        footer { padding: 18px 0 28px; border-top: 1px solid #dfe7dc; color: #7c8980; font-size: 12px; }

        @media (max-width: 760px) {
            .intro { padding-top: 42px; }
        }

        @media (max-width: 520px) {
            .page { width: min(100% - 28px, 1120px); }
            .topbar { align-items: flex-start; flex-direction: column; gap: 10px; padding: 18px 0; }
            .intro { padding-top: 34px; }
            .module { min-height: 150px; }
            .section-heading { align-items: flex-start; flex-direction: column; gap: 5px; }
        }
    </style>
</head>
<body>
    <div class="page container">
        <header class="topbar">
            <a class="brand" href="{{ route('home.welcome') }}" aria-label="Página inicial {{ config('app.name', 'SGMRS') }}">
                <span class="brand-mark">SG</span>
                <span>{{ config('app.name', 'SGMRS') }}</span>
            </a>
            <span class="site-address">{{ config('app.url') }}</span>
        </header>

        <main>
            <section class="intro" aria-labelledby="page-title">
                <p class="eyebrow">Portal do refeitório</p>
                <h1 id="page-title">Tudo o que você precisa, em um só lugar.</h1>
                <p class="intro-copy">Acesse as páginas do sistema pelos atalhos abaixo. Novas áreas podem ser adicionadas conforme o projeto crescer.</p>
            </section>

            <section aria-labelledby="modules-title">
                <div class="section-heading">
                    <h2 id="modules-title">Páginas do sistema</h2>
                    <span class="item-count">11 atalhos disponíveis</span>
                </div>

                <nav class="modules row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-3" aria-label="Páginas do sistema">
                    <a class="module" href="{{ route('home') }}">
                        <span class="module-icon" aria-hidden="true">⌂</span>
                        <h3 class="module-title">Início</h3>
                        <p class="module-description">Área principal do sistema.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('refeitorio') }}">
                        <span class="module-icon" aria-hidden="true">♨</span>
                        <h3 class="module-title">Refeitório</h3>
                        <p class="module-description">Informações e serviços do refeitório.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('cardapios.index') }}">
                        <span class="module-icon" aria-hidden="true">▤</span>
                        <h3 class="module-title">Cardápios</h3>
                        <p class="module-description">Consulte os próximos cardápios cadastrados.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('contato') }}">
                        <span class="module-icon" aria-hidden="true">✉</span>
                        <h3 class="module-title">Contato</h3>
                        <p class="module-description">Canais de contato com a cozinha.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('login') }}">
                        <span class="module-icon" aria-hidden="true">↪</span>
                        <h3 class="module-title">Entrar</h3>
                        <p class="module-description">Acesse a área de login.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('cadastro') }}">
                        <span class="module-icon" aria-hidden="true">＋</span>
                        <h3 class="module-title">Cadastro de usuário</h3>
                        <p class="module-description">Página para cadastro de usuários.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('funcionario') }}">
                        <span class="module-icon" aria-hidden="true">♙</span>
                        <h3 class="module-title">Cadastro de funcionários</h3>
                        <p class="module-description">Área para implementar o cadastro da equipe.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('fale_com_a_lia') }}">
                        <span class="module-icon" aria-hidden="true">☏</span>
                        <h3 class="module-title">Fale com a Lia</h3>
                        <p class="module-description">Converse com a assistente do sistema.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('sobre') }}">
                        <span class="module-icon" aria-hidden="true">ⓘ</span>
                        <h3 class="module-title">Sobre o refeitório</h3>
                        <p class="module-description">Conheça o espaço e sua proposta.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('quiz') }}">
                        <span class="module-icon" aria-hidden="true">?</span>
                        <h3 class="module-title">Quiz do cardápio</h3>
                        <p class="module-description">Acesse a página interativa do cardápio.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                    <a class="module" href="{{ route('solicitacao_de_troca') }}">
                        <span class="module-icon" aria-hidden="true">⇄</span>
                        <h3 class="module-title">Solicitação de troca</h3>
                        <p class="module-description">Abra a página para solicitar uma troca.</p>
                        <span class="module-arrow">Abrir página →</span>
                    </a>
                </nav>
            </section>
        </main>

        <footer>{{ config('app.name', 'SGMRS') }} · Portal do refeitório</footer>
    </div>
</body>
</html>
