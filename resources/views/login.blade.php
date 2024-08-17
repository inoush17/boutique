@extends('layout.base')

@section('inoush')
<h1>Connexion</h1>

    <div class="container">
        <form action="{{ route('login.auth')}}" method="POST">
            @csrf
            
    
            @if ($errors->any())
                <ul class="alert alert-danger signal">
                    {!! implode('', $errors->all('<li>:message</li>')) !!}
                </ul>
            @endif
    
            @if ($message = Session::get('error'))
                <div>{{ $message }}</div><br>
            @endif
    
            <label for="email">Email</label><br>
            <input type="text" name="email" id="email"  placeholder="Saisir l'e-mail ici ..."><br><br>
    
            <label for="password">Mot de passe</label><br>
            <input type="password" name="password" id="password"  placeholder="Saisir le mot de passe ici ..."><br><br>
    
            <button class="button" type="submit">Soumettre</button>
        </form>
    </div>
    
@endsection
