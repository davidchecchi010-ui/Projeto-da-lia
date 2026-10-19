<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#263b31">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Fale com a Lia | SESI Refeitório</title>
    <style>
        :root {
            font-family: Arial, Helvetica, sans-serif;
            color: #202923;
            background: #eef1ed;
            font-synthesis: none;
            text-rendering: optimizeLegibility;
        }

        * { box-sizing: border-box; }
        body { min-width: 320px; min-height: 100vh; margin: 0; }
        a { color: inherit; text-decoration: none; }

        .site-header {
            position: relative;
            z-index: 1;
            border-bottom: 1px solid rgb(255 255 255 / 16%);
            background: rgb(16 30 23 / 76%);
            color: #fff;
            backdrop-filter: blur(12px);
        }

        .header-inner {
            display: flex;
            width: min(1160px, calc(100% - 40px));
            min-height: 76px;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            margin: 0 auto;
        }

        .brand { display: inline-flex; align-items: center; gap: 12px; font-size: 14px; font-weight: 700; }
        .brand-mark { padding: 5px 11px; transform: skew(-7deg); background: #e30613; color: #fff; font-size: 27px; font-style: italic; font-weight: 900; letter-spacing: -2px; }
        .brand-name { display: grid; gap: 3px; }
        .brand-name small { color: rgb(255 255 255 / 68%); font-size: 11px; font-weight: 400; }
        .main-nav { display: flex; flex-wrap: wrap; align-items: center; justify-content: flex-end; gap: 22px; }
        .main-nav a { color: rgb(255 255 255 / 87%); font-size: 13px; font-weight: 700; }
        .main-nav a:hover, .main-nav a:focus-visible { color: #fff; text-decoration: underline; text-underline-offset: 5px; }

        .hero {
            display: flex;
            min-height: calc(100vh - 76px);
            flex-direction: column;
            background-color: #24372d;
            background-image: linear-gradient(115deg, rgb(14 31 22 / 82%), rgb(15 28 22 / 66%)), url('https://images.unsplash.com/photo-1556910103-1c02745aae4d?auto=format&fit=crop&w=2000&q=90');
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }

        .content {
            display: grid;
            width: min(1160px, calc(100% - 40px));
            flex: 1;
            grid-template-columns: minmax(0, .9fr) minmax(340px, 1.1fr);
            align-items: center;
            gap: clamp(30px, 7vw, 90px);
            margin: 0 auto;
            padding: 56px 0;
        }

        .intro { max-width: 490px; color: #fff; }
        .eyebrow { display: inline-flex; align-items: center; gap: 9px; margin: 0 0 18px; color: #d6eadb; font-size: 12px; font-weight: 700; letter-spacing: .14em; text-transform: uppercase; }
        .status-dot { display: inline-block; width: 9px; height: 9px; flex: 0 0 9px; border-radius: 50%; background: #8bd69a; box-shadow: 0 0 0 4px rgb(139 214 154 / 16%); }
        h1 { margin: 0; font-size: clamp(42px, 6vw, 68px); line-height: .99; letter-spacing: -.055em; }
        .intro-copy { max-width: 430px; margin: 22px 0 0; color: rgb(255 255 255 / 82%); font-size: 16px; line-height: 1.75; }
        .intro-note { margin: 26px 0 0; color: rgb(255 255 255 / 67%); font-size: 13px; }

        .chat-card { display: flex; min-height: 570px; flex-direction: column; overflow: hidden; border: 1px solid rgb(255 255 255 / 55%); border-radius: 22px; background: #fbfcfa; box-shadow: 0 24px 80px rgb(0 0 0 / 28%); }
        .chat-header { display: flex; align-items: center; gap: 13px; padding: 18px 21px; border-bottom: 1px solid #e7ebe7; background: #fff; }
        .lia-avatar { display: grid; width: 42px; height: 42px; flex: 0 0 42px; place-items: center; border-radius: 50%; background: #e7f1e8; color: #276447; font-size: 16px; font-weight: 800; }
        .chat-heading { min-width: 0; }
        .chat-heading strong { display: block; font-size: 15px; }
        .chat-heading span { display: block; margin-top: 4px; color: #738077; font-size: 12px; }
        .online-label { margin-left: auto; color: #35734a; font-size: 11px; font-weight: 700; white-space: nowrap; }

        .messages { display: flex; min-height: 290px; flex: 1; flex-direction: column; gap: 13px; overflow-y: auto; padding: 21px; scroll-behavior: smooth; }
        .message { max-width: min(88%, 370px); padding: 12px 14px; border-radius: 15px; font-size: 14px; line-height: 1.55; overflow-wrap: anywhere; }
        .message-assistant { align-self: flex-start; border: 1px solid #e4e9e4; border-bottom-left-radius: 5px; background: #fff; color: #344239; }
        .message-user { align-self: flex-end; border-bottom-right-radius: 5px; background: #286447; color: #fff; }
        .message-time { display: block; margin-top: 5px; color: #879189; font-size: 10px; }
        .message-user .message-time { color: rgb(255 255 255 / 74%); }

        .chat-tools { padding: 0 18px 14px; }
        .suggestions-label { margin: 0 0 9px; color: #718076; font-size: 11px; font-weight: 700; }
        .suggestions { display: flex; flex-wrap: wrap; gap: 8px; }
        .suggestion { min-height: 34px; padding: 7px 11px; border: 1px solid #d8e3d9; border-radius: 999px; background: #fff; color: #2b6040; cursor: pointer; font: inherit; font-size: 11px; font-weight: 700; transition: background .15s ease, border-color .15s ease; }
        .suggestion:hover, .suggestion:focus-visible { border-color: #43805a; background: #edf5ed; }

        .chat-form { display: flex; align-items: center; gap: 9px; padding: 14px 17px 17px; border-top: 1px solid #e7ebe7; background: #fff; }
        .visually-hidden { position: absolute; width: 1px; height: 1px; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; clip-path: inset(50%); }
        .chat-input { width: 100%; min-width: 0; min-height: 46px; padding: 0 14px; border: 1px solid #dce4dc; border-radius: 12px; outline: none; color: #24352a; font: inherit; font-size: 14px; }
        .chat-input:focus { border-color: #43805a; box-shadow: 0 0 0 3px rgb(67 128 90 / 14%); }
        .send-button { display: grid; width: 46px; height: 46px; flex: 0 0 46px; place-items: center; border: 0; border-radius: 12px; background: #286447; color: #fff; cursor: pointer; font-size: 20px; transition: background .15s ease, transform .15s ease; }
        .send-button:hover { transform: translateY(-1px); background: #1f5138; }
        .send-button:focus-visible, .suggestion:focus-visible, .main-nav a:focus-visible { outline: 3px solid #f3c64f; outline-offset: 3px; }

        .site-footer { width: min(1160px, calc(100% - 40px)); margin: 0 auto; padding: 0 0 20px; color: rgb(255 255 255 / 67%); font-size: 11px; }

        @media (max-width: 820px) {
            .content { grid-template-columns: 1fr; gap: 30px; padding: 42px 0; }
            .intro { max-width: 650px; }
            .intro-copy { margin-top: 15px; }
            .chat-card { min-height: 520px; }
            .hero { background-attachment: scroll; }
        }

        @media (max-width: 560px) {
            .header-inner { width: calc(100% - 28px); align-items: flex-start; flex-direction: column; gap: 15px; padding: 15px 0; }
            .main-nav { justify-content: flex-start; gap: 10px 16px; }
            .main-nav a { font-size: 12px; }
            .content, .site-footer { width: calc(100% - 28px); }
            .content { padding: 34px 0; }
            h1 { font-size: 45px; }
            .chat-card { min-height: 500px; border-radius: 17px; }
            .messages { padding: 16px; }
            .chat-tools { padding-right: 14px; padding-left: 14px; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="header-inner">
            <a class="brand" href="{{ route('home.welcome') }}" aria-label="Página inicial do SESI Refeitório">
                <span class="brand-mark">SESI</span>
                <span class="brand-name">Refeitório<small>Alimentação e bem-estar</small></span>
            </a>
            <nav class="main-nav" aria-label="Navegação principal">
                <a href="{{ route('home.welcome') }}">Início</a>
                <a href="{{ route('cardapios.index') }}">Cardápios</a>
                <a href="{{ route('troca_almoco') }}">Troca do almoço</a>
                <a href="{{ route('quiz') }}">Quiz</a>
                <a href="{{ route('solicitacao_de_troca') }}">Solicitação</a>
                <a href="{{ route('refeitorio') }}">Refeitório</a>
                <a href="{{ route('sobre') }}">Sobre</a>
                <a href="{{ route('contato') }}">Contato</a>
            </nav>
        </div>
    </header>

    <main class="hero">
        <div class="content">
            <section class="intro" aria-labelledby="page-title">
                <p class="eyebrow"><span class="status-dot" aria-hidden="true"></span> Assistente do refeitório</p>
                <h1 id="page-title">Oi, eu sou a Lia.</h1>
                <p class="intro-copy">Posso ajudar você a encontrar o cardápio, falar com a cozinha ou acessar uma solicitação de troca.</p>
                <p class="intro-note">Escolha um atalho ou escreva sua dúvida na conversa. Se preferir, fale diretamente com as cozinheiras.</p>
            </section>

            <section class="chat-card" aria-label="Conversa com a Lia">
                <header class="chat-header">
                    <span class="lia-avatar" aria-hidden="true">L</span>
                    <div class="chat-heading">
                        <strong>Lia</strong>
                        <span>Assistente do Refeitório SESI</span>
                    </div>
                    <span class="online-label"><span class="status-dot" aria-hidden="true"></span> Disponível</span>
                </header>

                <div class="messages" id="chat-messages" role="log" aria-live="polite" aria-relevant="additions">
                    <div class="message message-assistant">
                        Olá! Como posso ajudar? Você pode perguntar sobre o cardápio, troca de refeição ou contato com a cozinha.
                        <time class="message-time">Agora</time>
                    </div>
                </div>

                <div class="chat-tools">
                    <p class="suggestions-label">Atalhos rápidos</p>
                    <div class="suggestions">
                        <a class="suggestion" href="{{ route('cardapios.index') }}">Ver cardápios</a>
                        <a class="suggestion" href="{{ route('contato.cozinha') }}">Quero trocar um alimento com as cozinheiras</a>
                        <a class="suggestion" href="{{ route('contato.cozinha') }}">Não consegui falar com a Lia</a>
                    </div>
                </div>

                <form class="chat-form" id="chat-form">
                    <label class="visually-hidden" for="chat-input">Digite sua mensagem para a Lia</label>
                    <input class="chat-input" id="chat-input" name="message" type="text" maxlength="300" placeholder="Escreva sua mensagem..." autocomplete="off" required>
                    <button class="send-button" type="submit" aria-label="Enviar mensagem">➤</button>
                </form>
            </section>
        </div>

        <footer class="site-footer">SESI · Refeitório · <a href="{{ route('solicitacao_de_troca') }}">Solicitação de troca</a></footer>
    </main>

    <script>
        const chatForm = document.querySelector('#chat-form');
        const chatInput = document.querySelector('#chat-input');
        const chatMessages = document.querySelector('#chat-messages');

        const createMessage = (text, sender) => {
            const message = document.createElement('div');
            const content = document.createElement('span');
            const time = document.createElement('time');

            message.className = `message message-${sender}`;
            content.textContent = text;
            time.className = 'message-time';
            time.dateTime = new Date().toISOString();
            time.textContent = new Intl.DateTimeFormat('pt-BR', {
                hour: '2-digit',
                minute: '2-digit',
            }).format(new Date());

            message.append(content, time);
            chatMessages.append(message);
            message.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        };

        const getReply = (message) => {
            const normalizedMessage = message
                .normalize('NFD')
                .replace(/[\u0300-\u036f]/g, '')
                .toLowerCase();

            if (normalizedMessage.includes('cardapio') || normalizedMessage.includes('menu')) {
                return 'Você pode consultar as refeições na página Cardápios. Acesse pelo menu no topo ou pelo atalho nesta conversa.';
            }

            if (normalizedMessage.includes('troca') || normalizedMessage.includes('substitu')) {
                return 'Para pedir a troca de um alimento, use o atalho “Quero trocar um alimento com as cozinheiras” nesta conversa.';
            }

            if (normalizedMessage.includes('contato') || normalizedMessage.includes('cozinha') || normalizedMessage.includes('falar')) {
                return 'Use o atalho “Não consegui falar com a Lia” nesta conversa para enviar sua mensagem às cozinheiras.';
            }

            if (normalizedMessage.includes('obrigad')) {
                return 'Por nada! Se precisar, posso ajudar com cardápio, troca de refeição ou contato.';
            }

            return 'Ainda estou aprendendo. Posso ajudar com o cardápio, uma troca de refeição ou o contato da cozinha.';
        };

        const sendMessage = (text) => {
            const message = text.trim();

            if (!message) {
                return;
            }

            createMessage(message, 'user');
            createMessage(getReply(message), 'assistant');
        };

        chatForm.addEventListener('submit', (event) => {
            event.preventDefault();
            sendMessage(chatInput.value);
            chatInput.value = '';
            chatInput.focus();
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
