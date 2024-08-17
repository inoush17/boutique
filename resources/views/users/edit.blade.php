@extends('layout.base')

@section('inoush')

    <h3>Page de Modification</h3>
    <div class="container">
        <form action="{{ route('user.update', $user->id) }}"" method="POST">
            @csrf
            <div>
                <label for="">Entrer le nouveau pseudo d'utilisateur</label><br>
                <input type="text" class="form-control" placeholder="Entrer le nouveau pseudo" required name="name"><br><br>
    
                <button class="button">Soumettre</button>
            </div>
        </form>
    </div>
@endsection