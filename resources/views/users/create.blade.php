@extends('layout.base')

@section('inoush')
    <div class="container">
        <form action="{{ route('user.create') }}" method="POST">
            @csrf
                <div>
                    <label for="name">Entrer le pseudo d'utilisateur</label><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Entrer le pseudo d'utilisateur ..." required name="name"><br><br>
    
                    <label for="email">Entrer l'email d'utilisateur</label><br>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Entrer l'email d'utilisateur ..." required name="name"><br><br>
    
                    <button class="button">Soumettre</button>
                </div>
        </form>
    </div>
@endsection