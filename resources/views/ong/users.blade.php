@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Email</th>
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
                    <td></td>
                </tr>

                @endforeach

            </tbody>
        </table>

    </div>
</div>
@endsection
