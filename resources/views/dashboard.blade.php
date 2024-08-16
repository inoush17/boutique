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
        <h3>Bienvenue sur notre page web {{ Auth::user()->name }}</h3>
    </div>

    <div>
        <div class="col-12 mt-5">
            <h1>Liste des Utilisateurs</h1>
        </div>
    </div>

    <a href="{{ route('user.show') }}" class="button-b">Création d'utilisateur</a>
    <br><br>

    <div class="body">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            {{$message}}
        </div>
        @endif


        @if(Auth::user()->is_admin)

            <div>
                @foreach ($users as $user)
                    <div>
                        <table>
                            <thead>
                                <tr>
                                    <th>#[id]</th>
                                    <th>Pseaudo</th>
                                    <th>Email</th>
                                    <th>Opérations</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>{{ $user->id }}</th>
                                    <th>{{ $user->name }}</th>
                                    <th>{{ $user->email }}</th>
                                    <th>
                                        <a href= "{{ route('user.edit', $user->id) }}" class="button-operation1">Modifier</a>
                                        <a href="{{ route('user.destroy', $user->id) }}" class="button-operation2">Supprimer</a>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
            
        @else

        <h3>
            Bienvenu utilisateur lambda.
        </h3>
            

        @endif

    </div>
@endsection