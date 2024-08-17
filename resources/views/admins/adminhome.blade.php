@extends('layout.base')

@section('inoush')
    <div class="app-bar">
        <table width="100%">
            <tbody>
                <tr>
                    <td>
                        <h1>Tableau de bord</h1>
                    </td>
                    <td class="text-right">
                        <a href="{{ route('logout') }}">
                            Se déconnecter
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <h3>Bienvenue {{ Auth::user()->name }}</h3>
    </div>

    <div>   
        <div>
            <h1>Liste des Utilisateurs</h1>
        </div>

        <a href="{{ route('user.show') }}" class="button-b">Création d'utilisateur</a>
        <br><br>

        <div>
            @if ($message = Session::get('success'))
                <div class="alert alert-success" role="alert">
                    {{ $message }}
                </div>
            @endif

            <div class="body">
                <div>
                    <table width="100%">
                        <thead>
                            <tr width="100%">
                                <th>
                                    #[id]
                                </th>
                                <th>
                                    Pseaudo
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Opérations
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr width="100%">
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td class="operation">
                                        <a href= "{{ route('user.edit', $user->id) }}" class="button-operation1">Modifier</a>
                                        <a href="{{ route('user.destroy', $user->id) }}" class="button-operation2">Supprimer</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection