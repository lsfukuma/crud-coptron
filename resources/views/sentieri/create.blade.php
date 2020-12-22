@extends('layouts.app')
@section('page-title', 'Aggiungere nuovo sentiero')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Nuovo sentiero</h3>
            <form action="{{route('sentieri.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome del sentiero" value="{{ old('nome') }}">
                    @error('nome')
                    <small class="text-danger"> {{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="partenza">Partenza</label>
                    <input type="text" class="form-control" id="partenza" name="partenza" placeholder="Partenza" value="{{ old('partenza') }}">
                    @error('partenza')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="arrivo">Arrivo</label>
                    <input type="text" class="form-control" id="arrivo" name="arrivo" placeholder="Arrivo" value="{{ old('arrivo') }}">
                    @error('arrivo')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="vicino">Vicino a </label>
                    <input type="text" class="form-control" id="vicino" name="vicino" placeholder="Vicino" value="{{ old('vicino') }}">
                    @error('arrivo')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="distanza">Distanza</label>
                    <input type="number" class="form-control" id="distanza" name="distanza" placeholder="Distanza" value="{{ old('distanza') }}">
                    @error('distanza')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="durata">Durata</label>
                    <input type="text" class="form-control" id="durata" name="durata" placeholder="Durata" value="{{ old('durata') }}">
                    @error('durata')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <div class="form-group">
                    Percorso:
                    <input type="radio" id="circolare" name="percorso" value="circolare"> Circolare
                    <input type="radio" id="lineare" name="percorso" value="lineare">Lineare
                </div>
                <div class="form-group">
                    <label for="difficolta">Difficoltà</label>
                    <select name="difficolta" id="difficolta" class="form-control">
                        <option value="facile">Facile</option>
                        <option value="media">Media</option>
                        <option value="alta">Alta</option>
                    </select>
                </div>
                <div class="form-group">
                    Adatto a bambini
                    <input type="radio" id="bambinisi" name="bambini" value="1">Sì
                    <input type="radio" id="bambinino" name="bambini" value="0">No

                </div>
                <div class="form-group">
                    Adatto a quattro zampe
                    <input type="radio" id="zampesi" name="animali" value="1">Sì
                    <input type="radio" id="zampeno" name="animali" value="0">No

                </div>
                <div class="form-group">
                    <label for="descrizione">Descrizione</label>
                    <textarea name="descrizione" id="descrizione" cols="15" rows="10" class="form-control">{{ old('descrizione') }}</textarea>
                    @error('descrizione')
                    <small class="text-danger"> {{ $message }} </small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-info mb-3 ">Invia</button>
            </form>
        </div>
    </div>
</div>
@endsection