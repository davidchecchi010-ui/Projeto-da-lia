@extends('layouts.sesi')

@section('title', 'Escolha do almoço | SESI')

@section('content')
<div class="row justify-content-center"><div class="col-lg-8"><section class="card page-card"><div class="card-body p-4 p-md-5">
  <div class="d-flex flex-wrap gap-2 mb-4"><span class="badge rounded-pill text-bg-success">1. Lia</span><span class="badge rounded-pill text-bg-success">2. Sua troca</span><span class="badge rounded-pill text-bg-light">3. Cardápio semanal</span></div>
  <span class="badge text-bg-success mb-3">Almoço</span><h1 class="display-6 fw-bold">O que você gostaria de trocar?</h1>
  <p class="lead text-secondary">Confira primeiro o cardápio da semana para identificar a refeição e a mistura que deseja trocar. Depois, você poderá enviar o pedido para a equipe.</p>
  <div class="alert alert-info" role="note">As opções dependem do cardápio publicado. Não há refeições cadastradas ainda, então nenhuma opção foi presumida nesta etapa.</div>
  <div class="d-flex flex-wrap gap-2"><a class="btn btn-sesi" href="{{ route('cardapios.index') }}">Continuar para o cardápio da semana</a><a class="btn btn-outline-secondary" href="{{ route('fale_com_a_lia') }}">Voltar para a Lia</a></div>
</div></section></div></div>
@endsection
