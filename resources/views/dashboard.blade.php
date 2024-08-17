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
@endsection
