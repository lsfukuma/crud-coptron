@extends('layouts.app')
@section('page-title', 'Sentiero in dettagli')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <h1>{{$trail->nome}}</h1>
            <h4>Vicino a {{$trail->vicino}}</h4>
            <div>
                {{$trail->descrizione}}
            </div>
        </div>
        <div class="col-4">
            <div class="card bg-success text-white " style="width: 18rem;">
                
                <div class="card-body">
                    
                    <ul class="list-group list-group-flush ">
                        <h3>Percorso</h3>
                        <li class="list-group-item bg-success "> Partenza: {{$trail->partenza}}</li>
                        <li class="list-group-item bg-success">Arrivo: {{$trail->arrivo}}</li>
                        <li class="list-group-item bg-success">Tipologia: {{$trail->percorso}}</li>
                        <li class="list-group-item bg-success">Difficoltà: {{$trail->difficolta}}</li>
                        <li class="list-group-item bg-success">Tempo richiesto: {{$trail->durata}}</li>
                        <li class="list-group-item bg-success">Lunghezza: {{$trail->distanza}} km</li>
                        <li class="list-group-item bg-success">Adatto a:
                            @if($trail->bambini == 1)
                            <i class="fas fa-child"></i>
                            @endif
                            @if ($trail->animali == 1)
                            <i class="fas fa-dog"></i>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection