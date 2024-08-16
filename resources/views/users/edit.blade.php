@extends('layout.base')

@section('inoush')

    <h3>Modification</h3>
    <form action="{{ route('user.update', $user->id) }}"" method="POST">
        @csrf
        <div>
            <label for="">Entrer le pseudo d'utilisateur</label><br>
            <input type="text" class="form-control" placeholder="Entrer le nouveau pseudo d'utilisateur" required name="name"><br><br>

            <button class="{{ route('') }}">Soumettre</button>
        </div>
    </form>
@endsection