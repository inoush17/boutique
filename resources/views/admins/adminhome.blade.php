@extends('layout.base')

@section('inoush')
    <div>
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
        <a href="">Cliquez ici ...</a>
    </div>
@endsection