@extends('layouts.sesi')

@section('title', 'Quiz do cardápio | SESI')

@push('styles')
<style>
  .quiz-card { border: 0; border-radius: 1.25rem; box-shadow: 0 1rem 3rem rgb(0 0 0 / 16%); }
  .swap-panel { border: 1px solid #e2ece4; border-radius: 1rem; background: linear-gradient(135deg, #f7fbf7, #fff); }
  .swap-choice { position: relative; display: block; height: 100%; cursor: pointer; }
  .swap-choice input { position: absolute; opacity: 0; }
  .swap-choice span { display: flex; min-height: 64px; align-items: center; gap: .65rem; padding: .85rem 1rem; border: 1px solid #dce5dd; border-radius: .8rem; background: white; font-weight: 600; transition: border-color .15s, background-color .15s, transform .15s; }
  .swap-choice input:checked + span { border-color: #286447; background: #edf7ef; color: #205337; box-shadow: 0 0 0 2px rgb(40 100 71 / 12%); }
  .swap-choice input:focus-visible + span { outline: 3px solid #ffb1b6; outline-offset: 3px; }
  .swap-choice span::before { content: ''; width: 1.25rem; height: 1.25rem; flex: 0 0 1.25rem; border: 2px solid #aab9ad; border-radius: 50%; background: white; }
  .swap-choice input:checked + span::before { border: 6px solid #286447; }
  .vote-panel { overflow: hidden; border: 0; border-radius: 1rem; background: #f6f9f6; }
  .vote-row { padding: .85rem 0; border-bottom: 1px solid #e3eae4; }
  .vote-row:last-child { border-bottom: 0; }
  .vote-bar { height: .65rem; border-radius: 999px; background: #e4ebe5; }
  .vote-bar .progress-bar { border-radius: inherit; background: linear-gradient(90deg, #286447, #77aa75); }
</style>
@endpush

@section('content')
<div class="row justify-content-center">
  <div class="col-xl-9">
    <section class="card quiz-card">
      <div class="card-body p-4 p-md-5">
        <span class="badge text-bg-success mb-3">Aprenda brincando</span>
        <h1 class="display-6 fw-bold">Quiz do cardápio</h1>
        <p class="text-secondary">Responda às perguntas sobre o refeitório e descubra sua pontuação.</p>
        <div class="progress mb-4" role="progressbar" aria-label="Progresso do quiz" aria-valuemin="0" aria-valuemax="100"><div id="quiz-progress" class="progress-bar bg-success" style="width:0%"></div></div>
        <div id="quiz-area" aria-live="polite"></div>
        <div id="quiz-result" class="d-none text-center py-3" aria-live="polite"></div>

        <section class="swap-panel p-4 p-md-5 mt-5" aria-labelledby="swap-title">
          <div class="d-flex flex-wrap align-items-start justify-content-between gap-3 mb-4">
            <div>
              <span class="badge rounded-pill text-bg-light border mb-2">Sua preferência</span>
              <h2 id="swap-title" class="h3 fw-bold mb-2">Quer trocar algo que não gostou?</h2>
              <p class="text-secondary mb-0">Escolha um item do almoço, do café ou da sobremesa que gostaria de pedir no lugar.</p>
            </div>
            <span class="fs-1" aria-hidden="true">🍽️</span>
          </div>

          <fieldset class="border-0 p-0 m-0">
            <legend class="h6 fw-bold mb-3">O que você quer trocar?</legend>
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="swap-choice"><input type="radio" name="troca-tipo" value="mistura"><span>🍗 Uma mistura</span></label>
              </div>
              <div class="col-sm-6">
                <label class="swap-choice"><input type="radio" name="troca-tipo" value="sobremesa"><span>🍮 Uma sobremesa</span></label>
              </div>
              <div class="col-sm-6">
                <label class="swap-choice"><input type="radio" name="troca-tipo" value="cafe"><span>☕ Café / lanche</span></label>
              </div>
            </div>
          </fieldset>

          <div id="mistura-options" class="mt-4 d-none" aria-labelledby="mistura-title">
            <h3 id="mistura-title" class="h6 fw-bold mb-3">Escolha a mistura</h3>
            <div class="row g-2">
              @foreach (['Frango grelhado', 'Hambúrguer PTS', 'Carne moída', 'Lasanha', 'Macarrão', 'Feijoada'] as $opcao)
                <div class="col-6 col-md-4"><label class="swap-choice"><input type="radio" name="troca-opcao" value="{{ $opcao }}"><span>{{ $opcao }}</span></label></div>
              @endforeach
            </div>
          </div>

          <div id="sobremesa-options" class="mt-4 d-none" aria-labelledby="sobremesa-title">
            <h3 id="sobremesa-title" class="h6 fw-bold mb-3">Escolha a sobremesa</h3>
            <div class="row g-2">
              @foreach (['Doce de limão', 'Doce de maracujá', 'Doce de morango', 'Gelatina'] as $opcao)
                <div class="col-6 col-md-3"><label class="swap-choice"><input type="radio" name="troca-opcao" value="{{ $opcao }}"><span>{{ $opcao }}</span></label></div>
              @endforeach
            </div>
          </div>

          <div id="cafe-options" class="mt-4 d-none" aria-labelledby="cafe-title">
            <h3 id="cafe-title" class="h6 fw-bold mb-3">Escolha uma opção de café</h3>
            <p class="small text-secondary fw-semibold mb-2">Comidas</p>
            <div class="row g-2 mb-4">
              @foreach (['Pão de queijo', 'Pão com manteiga aquecida', 'Esfiha', 'Hambúrguer', 'Pão com ovo', 'Pão com salame'] as $opcao)
                <div class="col-6 col-md-4"><label class="swap-choice"><input type="radio" name="troca-opcao" value="{{ $opcao }}"><span>{{ $opcao }}</span></label></div>
              @endforeach
            </div>
            <p class="small text-secondary fw-semibold mb-2">Bebidas</p>
            <div class="row g-2">
              @foreach (['Café com leite', 'Leite com Toddy', 'Suco de laranja', 'Suco de abacaxi'] as $opcao)
                <div class="col-6 col-md-3"><label class="swap-choice"><input type="radio" name="troca-opcao" value="{{ $opcao }}"><span>{{ $opcao }}</span></label></div>
              @endforeach
            </div>
          </div>

          <div class="d-flex flex-wrap align-items-center gap-3 mt-4">
            <a id="swap-submit" class="btn btn-sesi disabled" href="{{ route('solicitacao_de_troca') }}" aria-disabled="true">Continuar com a troca</a>
            <span id="swap-help" class="small text-secondary">Selecione o tipo e a opção desejada.</span>
          </div>
        </section>

        <section class="vote-panel p-4 p-md-5 mt-4" aria-labelledby="votacao-title">
          <div class="d-flex flex-wrap align-items-start justify-content-between gap-3 mb-3">
            <div>
              <span class="badge rounded-pill text-bg-success mb-2">500 alunos</span>
              <h2 id="votacao-title" class="h3 fw-bold mb-2">O que a turma prefere?</h2>
              <p class="text-secondary mb-0">Exemplo de votação: veja como os votos se dividem entre as opções.</p>
            </div>
            <span class="fs-1" aria-hidden="true">📊</span>
          </div>
          @php
            $votos = [
              ['nome' => 'Frango grelhado', 'quantidade' => 40, 'percentual' => 8],
              ['nome' => 'Hambúrguer PTS', 'quantidade' => 30, 'percentual' => 6],
              ['nome' => 'Carne moída', 'quantidade' => 30, 'percentual' => 6],
              ['nome' => 'Lasanha', 'quantidade' => 25, 'percentual' => 5],
              ['nome' => 'Macarrão', 'quantidade' => 25, 'percentual' => 5],
              ['nome' => 'Feijoada', 'quantidade' => 35, 'percentual' => 7],
              ['nome' => 'Doce de limão', 'quantidade' => 25, 'percentual' => 5],
              ['nome' => 'Doce de maracujá', 'quantidade' => 25, 'percentual' => 5],
              ['nome' => 'Doce de morango', 'quantidade' => 20, 'percentual' => 4],
              ['nome' => 'Gelatina', 'quantidade' => 30, 'percentual' => 6],
              ['nome' => 'Pão de queijo', 'quantidade' => 25, 'percentual' => 5],
              ['nome' => 'Pão com manteiga aquecida', 'quantidade' => 20, 'percentual' => 4],
              ['nome' => 'Esfiha', 'quantidade' => 20, 'percentual' => 4],
              ['nome' => 'Hambúrguer', 'quantidade' => 20, 'percentual' => 4],
              ['nome' => 'Pão com ovo', 'quantidade' => 15, 'percentual' => 3],
              ['nome' => 'Pão com salame', 'quantidade' => 15, 'percentual' => 3],
              ['nome' => 'Café com leite', 'quantidade' => 30, 'percentual' => 6],
              ['nome' => 'Leite com Toddy', 'quantidade' => 25, 'percentual' => 5],
              ['nome' => 'Suco de laranja', 'quantidade' => 20, 'percentual' => 4],
              ['nome' => 'Suco de abacaxi', 'quantidade' => 25, 'percentual' => 5],
            ];
          @endphp
          <div class="row g-0">
            @foreach ($votos as $voto)
              <div class="col-md-6 px-md-3 {{ $loop->iteration % 2 === 1 ? 'ps-md-0' : 'pe-md-0' }}">
                <div class="vote-row">
                  <div class="d-flex align-items-center justify-content-between gap-2 mb-2">
                    <span class="fw-semibold">{{ $voto['nome'] }}</span>
                    <span class="badge rounded-pill text-bg-light border">{{ $voto['percentual'] }}% · {{ $voto['quantidade'] }} votos</span>
                  </div>
                  <div class="progress vote-bar" role="progressbar" aria-label="{{ $voto['nome'] }}: {{ $voto['percentual'] }} por cento, {{ $voto['quantidade'] }} votos" aria-valuenow="{{ $voto['percentual'] }}" aria-valuemin="0" aria-valuemax="100"><div class="progress-bar" style="width: {{ $voto['percentual'] }}%"></div></div>
                </div>
              </div>
            @endforeach
          </div>
          <p class="small text-secondary mt-3 mb-0">Total: 500 votos · 100% <span class="ms-1">(valores de exemplo)</span></p>
        </section>

        <div class="d-flex flex-wrap justify-content-between gap-2 mt-4">
          <a class="btn btn-outline-secondary" href="{{ route('cardapios.index') }}">Voltar ao cardápio</a>
          <button id="quiz-restart" class="btn btn-outline-success d-none" type="button">Jogar novamente</button>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection

@push('scripts')
<script>
(() => {
  const questions = [
    { text: 'Ao consultar o cardápio, o que é útil conferir?', answers: ['A data e os itens da refeição', 'Somente a cor da página', 'Apenas o nome do site'], correct: 0, note: 'A data ajuda você a encontrar a refeição correta.' },
    { text: 'O que fazer se precisar solicitar uma troca?', answers: ['Enviar o pedido pelo formulário do site', 'Alterar o cardápio publicado', 'Não avisar a equipe'], correct: 0, note: 'Use a página de solicitação para que a equipe receba seu pedido.' }
  ];
  const area = document.getElementById('quiz-area');
  const progress = document.getElementById('quiz-progress');
  const result = document.getElementById('quiz-result');
  const restart = document.getElementById('quiz-restart');
  const swapSubmit = document.getElementById('swap-submit');
  const swapHelp = document.getElementById('swap-help');
  const misturaOptions = document.getElementById('mistura-options');
  const sobremesaOptions = document.getElementById('sobremesa-options');
  const cafeOptions = document.getElementById('cafe-options');
  let position = 0;
  let score = 0;

  function render() {
    result.classList.add('d-none');
    area.classList.remove('d-none');
    restart.classList.add('d-none');
    progress.style.width = `${Math.round(position / questions.length * 100)}%`;

    if (position >= questions.length) {
      area.classList.add('d-none');
      result.classList.remove('d-none');
      progress.style.width = '100%';
      result.innerHTML = `<h2 class="h3 fw-bold">Quiz concluído!</h2><p class="lead">Você acertou <strong>${score} de ${questions.length}</strong> perguntas.</p><p class="text-secondary">${score === questions.length ? 'Muito bem! Você acertou todas.' : 'Continue explorando o site e tente novamente.'}</p>`;
      restart.classList.remove('d-none');
      return;
    }

    const question = questions[position];
    area.innerHTML = `<p class="small text-secondary">Pergunta ${position + 1} de ${questions.length}</p><h2 class="h4 fw-bold mb-3">${question.text}</h2><div class="d-grid gap-2">${question.answers.map((answer, index) => `<button type="button" class="btn btn-outline-success text-start p-3" data-answer="${index}">${answer}</button>`).join('')}</div><div id="quiz-feedback" class="mt-3" aria-live="polite"></div>`;
    area.querySelectorAll('[data-answer]').forEach((button) => button.addEventListener('click', () => {
      if (area.dataset.locked === 'true') {
        return;
      }

      area.dataset.locked = 'true';
      const isCorrect = Number(button.dataset.answer) === question.correct;
      if (isCorrect) {
        score++;
      }

      area.querySelectorAll('[data-answer]').forEach((option) => {
        option.disabled = true;
        if (Number(option.dataset.answer) === question.correct) {
          option.classList.replace('btn-outline-success', 'btn-success');
        }
      });

      document.getElementById('quiz-feedback').innerHTML = `<div class="alert ${isCorrect ? 'alert-success' : 'alert-info'}">${isCorrect ? 'Resposta certa!' : 'Vamos aprender:'} ${question.note}</div><button id="quiz-next" class="btn btn-sesi" type="button">${position + 1 === questions.length ? 'Ver resultado' : 'Próxima pergunta'}</button>`;
      document.getElementById('quiz-next').addEventListener('click', () => {
        position++;
        area.dataset.locked = 'false';
        render();
      });
    }));
  }

  function updateSwapLink() {
    const selectedType = document.querySelector('input[name="troca-tipo"]:checked');
    const selectedOption = document.querySelector('input[name="troca-opcao"]:checked');
    const canContinue = selectedType && selectedOption;

    swapSubmit.classList.toggle('disabled', !canContinue);
    swapSubmit.setAttribute('aria-disabled', String(!canContinue));
    swapHelp.textContent = canContinue ? `Opção escolhida: ${selectedOption.value}. Continue para preencher a solicitação.` : 'Selecione o tipo e a opção desejada.';

    if (canContinue) {
      const requestUrl = new URL(swapSubmit.href);
      requestUrl.searchParams.set('opcao', selectedOption.value);
      swapSubmit.href = requestUrl.toString();
    }
  }

  document.querySelectorAll('input[name="troca-tipo"]').forEach((input) => input.addEventListener('change', () => {
    misturaOptions.classList.toggle('d-none', input.value !== 'mistura');
    sobremesaOptions.classList.toggle('d-none', input.value !== 'sobremesa');
    cafeOptions.classList.toggle('d-none', input.value !== 'cafe');
    document.querySelectorAll('input[name="troca-opcao"]').forEach((option) => {
      const visibleOptions = input.value === 'mistura' ? misturaOptions : input.value === 'sobremesa' ? sobremesaOptions : cafeOptions;
      if (!visibleOptions.contains(option)) {
        option.checked = false;
      }
    });
    updateSwapLink();
  }));
  document.querySelectorAll('input[name="troca-opcao"]').forEach((input) => input.addEventListener('change', updateSwapLink));
  swapSubmit.addEventListener('click', (event) => {
    if (swapSubmit.getAttribute('aria-disabled') === 'true') {
      event.preventDefault();
    }
  });
  restart.addEventListener('click', () => {
    position = 0;
    score = 0;
    render();
  });
  render();
})();
</script>
@endpush
