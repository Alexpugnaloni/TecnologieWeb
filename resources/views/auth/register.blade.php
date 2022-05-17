@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div class="static">
    <h3>Registrazione</h3>
    <p>Utilizza questa form per registrarti al sito</p>

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'register', 'class' => 'contact-form')) }}

            <div  class="wrap-input">
                {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('nome', '', ['class' => 'input', 'id' => 'nome']) }}
                @if ($errors->first('nome'))
                <ul class="errors">
                    @foreach ($errors->get('nome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('cognome', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('cognome', '', ['class' => 'input', 'id' => 'cognome']) }}
                @if ($errors->first('cognome'))
                <ul class="errors">
                    @foreach ($errors->get('cognome') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input','id' => 'email']) }}
                @if ($errors->first('email'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('conferma password', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('conferma password', ['class' => 'input', 'id' => 'conferma password']) }}
            </div>
            
            <label for="gender">
                Seleziona sesso:
            </label>
            
             <div class="wrap-input">
                <input class="wrap-input-input" type="radio" name="genere" id="genereU1" value="U">
                     <label class="wrap-input-label" for="genereU1">
                            Uomo 
                        </label>
              </div>
                    <div class="wrap-input">
                        <input class="wrap-input-input" type="radio" name="genere" id="genereD1" value="D">
                            <label class="wrap-input-label" for="genereD1">
                                Donna
                            </label>
                @if ($errors->first('genere'))
                <ul class="errors">
                    @foreach ($errors->get('genere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                
             </div>
            
             <div class="wrap-input">
                {{ Form::label('età', 'Età', ['class' => 'label-input']) }}
                {{ Form::text('età', '', ['class' => 'input', 'id' => 'età']) }}
                @if ($errors->first('età'))
                <ul class="errors">
                    @foreach ($errors->get('età') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                
            </div>
            
                         <div class="wrap-input">
                {{ Form::label('cellulare', 'Cellulare', ['class' => 'label-input']) }}
                {{ Form::text('cellulare', '', ['class' => 'input', 'id' => 'cellulare']) }}
                @if ($errors->first('cellulare'))
                <ul class="errors">
                    @foreach ($errors->get('cellulare') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                
            </div>
            
            <label for="livello">
                Registrati come:
            </label>
            
            <div class="wrap-input">
                <input class="wrap-input-input" type="radio" name="livello" id="livelloLocatore1" value="Le">
                     <label class="wrap-input-label" for="livelloLocatore1">
                            Locatore 
                        </label>
              </div>
                    <div class="wrap-input">
                        <input class="wrap-input-input" type="radio" name="livello" id="livelloLocatario1" value="Lo">
                            <label class="wrap-input-label" for="livelloLocatario1">
                                Locatario
                            </label>
                @if ($errors->first('genere'))
                <ul class="errors">
                    @foreach ($errors->get('genere') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                
             </div>
            
            
            <div class="container-form-btn">                
                {{ Form::submit('Registra', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection
