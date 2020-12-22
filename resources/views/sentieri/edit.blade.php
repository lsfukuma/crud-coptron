@extends('layouts.app')
@section('page-title', 'Modifica del sentiero')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Modifica informazioni</h3>
            <form action="{{route('sentieri.update', ['sentieri' => $trail->id])}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group pb-2">
                    <label>Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $trail->nome) }}">
                </div>
                <div class="form-group">
                    <label>Partenza</label>
                    <input type="text" class="form-control" id="partenza" name="partenza" placeholder="Partenza" value="{{ old('partenza', $trail->partenza) }}">
                </div>
                <div class="form-group">
                    <label>Arrivo</label>
                    <input type="text" class="form-control" id="arrivo" name="arrivo" placeholder="Arrivo" value="{{old('arrivo', $trail->arrivo)}}">
                </div>
                <div class="form-group">
                    <label>Vicino a </label>
                    <input type="text" class="form-control" id="vicino" name="vicino" placeholder="Vicino a (comune - provincia)" value="{{ old('vicino', $trail->vicino) }}">
                </div>
                <div class="form-group">
                    <label>Distanza</label>
                    <input type="number" class="form-control" id="distanza" name="distanza" placeholder="Distanza in km" value="{{ old('distanza' , $trail->distanza) }}">
                </div>
                <div class="form-group">
                    <label>Durata</label>
                    <input type="text" class="form-control" id="durata" name="durata" placeholder="Durata" value="{{ old('durata' , $trail->durata) }}">
                </div>
                <div class="form-group">
                    Percorso:
                    <input type="radio" id="circolare" name="percorso" value="circolare" @if(old('percorso',$trail->percorso)=="circolare") checked @endif > Circolare
                    <input type="radio" id="lineare" name="percorso" value="lineare " @if(old('percorso',$trail->percorso)=="lineare") checked @endif>Lineare
                </div>
                <div class="form-group">
                    <label for="difficolta">Difficoltà</label>
                    <select name="difficolta" id="difficolta" class="form-control">
                        <option value="facile" @if( old('difficolta',$trail->difficolta)=="facile") selected @endif>
                            Facile
                        </option>
                        <option value="media" @if( old('difficolta',$trail->difficolta)=="media") selected @endif>
                            Media
                        </option>
                        <option value="alta" @if(old('difficolta',$trail->difficolta)=="alta") selected @endif>
                            Alta
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    Adatto a bambini
                    <input type="radio" id="bambinisi" name="bambini" value="1" @if(old('bambini',$trail->bambini)=="1") checked @endif >Sì
                    <input type="radio" id="bambinino" name="bambini" value="0" @if(old('bambini',$trail->bambini)=="0") checked @endif>No

                </div>
                <div class="form-group">
                    Adatto a quattro zampe
                    <input type="radio" id="zampesi" name="animali" value="1" @if(old('animali',$trail->animali)=="1") checked @endif>Sì
                    <input type="radio" id="zampeno" name="animali" value="0" @if(old('animali',$trail->animali)=="0") checked @endif>No

                </div>
                <div class="form-group">
                    <label>Descrizione</label>
                    <textarea name="descrizione" id="descrizione" cols="15" rows="10" class="form-control">{{ old('descrizione' , $trail->descrizione)}}</textarea>
                </div>
                <button type="submit" class="btn btn-info ">Aggiorna</button>
            </form>
            <form class="d-inline-block" action="{{route('sentieri.destroy', $trail['id'])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" name="button">Cancella</button>
            </form>
        </div>
    </div>
</div>
@endsection