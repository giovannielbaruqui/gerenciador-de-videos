@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="mb-4">
                <h2 class="">{{ __('Tela Inicial') }}</h2>
                @if (session('status'))
                    <div class="alert alert-success mt-3" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <!-- Card de Vídeos Recentes -->
            <div class="card mb-4">
                <div class="card-header border-0 bg-transparent">
                    Vídeos Recentes
                </div>
                <div class="card-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="Imagem do Vídeo 1">
                                <div class="card-body">
                                    <h5 class="card-title h6 mb-0">Título do Vídeo 1</h5>
                                    <p class="card-text small text-muted">Duração: 10 minutos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="Imagem do Vídeo 2">
                                <div class="card-body">
                                    <h5 class="card-title h6 mb-0">Título do Vídeo 2</h5>
                                    <p class="card-text small text-muted">Duração: 15 minutos</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100">
                                <img src="..." class="card-img-top" alt="Imagem do Vídeo 3">
                                <div class="card-body">
                                    <h5 class="card-title h6 mb-0">Título do Vídeo 3</h5>
                                    <p class="card-text small text-muted">Duração: 8 minutos</p>
                                </div>
                            </div>
                        </div>
                        <!-- Adicionar mais cards de vídeo conforme necessário -->
                    </div>
                </div>
                <div class="card-footer border-0 bg-transparent d-flex justify-content-end">
                    <a href="#" class="btn btn-primary">Ver Todos</a>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
