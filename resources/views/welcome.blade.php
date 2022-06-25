@extends('layout')
@section('page')
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Username</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>
                    <button>
                        <a href="{{ route('profile', ['id' => $user->id]) }}">Ver Datos Usuario</a>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
