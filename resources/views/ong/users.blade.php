@extends('layouts.app')

@section('content')

@if (Auth::check())

<div class="container">
    <div class="row justify-content-center" style="padding: 25px;">

        <button type="button" class="btn btn-primary" onclick="document.location.href = '/users-nuevo'">
            Nuevo usuario
        </button>

    </div>
    <div class="row justify-content-center">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
                    <th scope="col">#</th>
                    <th scope="col">#</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)

                <tr >
                    <th scope="row">
                        {{ $user->id }}
                    </th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="document.location.href='/users/{{ $user->id }}/borrar'">Borrar</button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" onclick="document.location.href='/users/{{ $user->id }}'">Ver</button>
                    </td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>
</div>

@else

<div class="container">
    <div class="row justify-content-center">
        <p>Acceso no permitido, requiere autenticacion</p>
    </div>
</div>

@endif

@endsection
