@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div class="static">
    <h2><center>Registrazione</center></h2>
    <p><center>Utilizza questa form per registrarti al sito</center></p>

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
                <div class="label-input">
                    Seleziona sesso: <br>
                </div>
            </label>
            
             <div class="wrap-input">
                <input class="wrap-input-input" type="radio" name="genere" id="genereU1" value="U">
                     <label class="wrap-input-label" for="genereU1">
                         <div class="label-input">
                            Uomo 
                         </div>
                        </label>
              </div>
                    <div class="wrap-input">
                        <input class="wrap-input-input" type="radio" name="genere" id="genereD1" value="D">
                            <label class="wrap-input-label" for="genereD1">
                                <div class="label-input">
                              Donna
                                </div>
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
                {{ Form::label('et??', 'Et??', ['class' => 'label-input']) }}
                {{ Form::text('et??', '', ['class' => 'input', 'id' => 'et??']) }}
                @if ($errors->first('et??'))
                <ul class="errors">
                    @foreach ($errors->get('et??') as $message)
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
                <div class="label-input">
                    Registrati come:<br>
                </div>
            </label>
            
            <div class="wrap-input">
                <input class="wrap-input-input" type="radio" name="livello" id="livelloLocatore1" value="Le">
                     <label class="wrap-input-label" for="livelloLocatore1">
                         <div class="label-input">
                            Locatore 
                         </div>
                        </label>
             </div>
                    <div class="wrap-input">
                        <input class="wrap-input-input" type="radio" name="livello" id="livelloLocatario1" value="Lo">
                            <label class="wrap-input-label" for="livelloLocatario1">
                                <div class="label-input">
                             Locatario
                                </div>
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
                {{ Form::submit('Registrati', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection
