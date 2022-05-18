@extends('layouts.public')

@section('title', 'Catalogo Alloggi')

<!-- inizio sezione prodotti -->
@section('content')
<div id="content">
  @isset($houses)
    @foreach ($houses as $house)
    <div class="prod">
        <div class="prod-bgtop">
            <div class="prod-bgbtm">
                <div class="oneitem">
                    <div class="image">
                        @include('helpers/productImg', ['attrs' => 'imagefrm', 'imgFile' => $house->immagine])
                    </div>
                    <div class="info">
                        <h1 class="title">Alloggio: {{ $house->titolo }}</h1>
                        <p class="meta">Inserito il: {{ $house->data_inserimento }}</p>
                        <p class="meta">Indirizzo: {{ $house->città }}, {{ $house->cap }}, {{ $house->provincia }}, {{ $house->indirizzo}}</p>
                        <p class="meta">Superficie: {{ $house->superficie }}</p>
                        <p class="meta">Numero camere: {{ $house->n_camere }}</p>
                    </div>
                    <div class="pricebox">
                        <p> Prezzo:  {{ $house->prezzo }} €</p>
                    </div>
                </div>
                <div class="entry">
                    <p>Descrizione Estesa: {!! $house->descrizione !!}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach


  @endisset()
</div>

@endsection


