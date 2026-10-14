@extends('layouts.sesi')

@section('title', 'Cadastro de funcion&aacute;rios | SESI')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8 col-xl-7">
        <section class="card page-card">
            <div class="card-body p-4 p-md-5">
                <span class="badge text-bg-success mb-3">&Aacute;rea da equipe</span>
                <h1 class="display-6 fw-bold">Cadastro de funcion&aacute;rios</h1>
                <p class="lead text-secondary mb-4">Esta &aacute;rea &eacute; destinada ao cadastro e &agrave; gest&atilde;o da equipe do refeit&oacute;rio. As informa&ccedil;&otilde;es de acesso s&atilde;o definidas pela administra&ccedil;&atilde;o.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-sesi" href="{{ route('home') }}">Voltar ao in&iacute;cio</a>
                    <a class="btn btn-outline-success" href="{{ route('contato') }}">Falar com a equipe</a>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection