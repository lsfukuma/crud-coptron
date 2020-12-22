@extends('../layouts.app')
@section('page-title', 'Lista dei sentieri' )
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mt-3 mb-3">Lista sentieri</h1>
                <a href="{{route('sentieri.create')}}" class="btn btn-info">Aggiungi sentiero</a>
            </div>


            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Vicino a </th>
                        <th scope="col">Distanza</th>
                        <th scope="col">Durata</th>
                        <th scope="col">Percorso</th>
                        <th scope="col">Difficoltà</th>
                        <th scope="col">Adatto </th>
                        <th scope="col">Opzioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trails as $trail)
                    <tr>
                        <td>{{$trail->nome}}</td>
                        <td>{{$trail->vicino}}</td>
                        <td>{{$trail->distanza}} km</td>
                        <td>{{$trail->durata}}</td>
                        <td>{{$trail->percorso}}</td>
                        <td>{{$trail->difficolta}}</td>
                        <td>@if($trail->bambini == 1)
                            <i class="fas fa-child"></i>
                            @endif
                            @if ($trail->animali == 1)
                            <i class="fas fa-dog"></i>
                            @endif
                        </td>

                        <td>
                            <a href="{{route('sentieri.show', $trail['id'])}}" class="btn btn-outline-success btn-sm">Dettagli</a>
                            <a href="{{route('sentieri.edit', $trail['id'])}}" class="btn btn-outline-warning btn-sm">Modifica</a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection