@extends('layouts.app')

@section('content')

@if (Auth::check())

<div class="container">
    <div class="justify-content-center">
        <form action="{{$uriPost}}" method="POST">
            @csrf

            @if(isset($user) && isset($user->id))
            <div class="form-group">
                <label for="id"> ID </label>
                <input type="text" name="id" class="form-control" id="id" placeholder="id" value="{{ $user->id }}" readonly="true" />
            </div>
            @endif

            <div class="form-group">
                <label for="name"> Nombre </label>
                @if(isset($user) && isset($user->name))
                <input required type="text" name="name" class="form-control" id="name" placeholder="name" value="{{ $user->name }}" />
                @else
                <input required type="text" name="name" class="form-control" id="name" placeholder="name" />
                @endif
            </div>
            <div class="form-group">
                <label for="first_name"> Apellido 1 </label>
                @if(isset($user) && isset($user->first_name))
                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="first_name" value="{{ $user->first_name }}" />
                @else
                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="first_name" />
                @endif
            </div>
            <div class="form-group">
                <label for="last_name"> Apellido 2 </label>
                @if(isset($user) && isset($user->last_name))
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="last_name" value="{{ $user->last_name }}" />
                @else
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="last_name" />
                @endif
            </div>
            <div class="form-group">
                <label for="address"> Dirección </label>
                @if(isset($user) && isset($user->address))
                <input type="text" name="address" class="form-control" id="address" placeholder="address" value="{{ $user->address }}" />
                @else
                <input type="text" name="address" class="form-control" id="address" placeholder="address" />
                @endif
            </div>
            <div class="form-group">
                <label for="age"> Edad </label>
                @if(isset($user) && isset($user->age))
                <input type="text" name="age" class="form-control" id="age" placeholder="age" value="{{ $user->age }}" />
                @else
                <input type="text" name="age" class="form-control" id="age" placeholder="age" />
                @endif
            </div>


            @if(isset($user) && isset($user->demand))

            <div class="form-group">
                <label for="demand"> Demandante </label>
                <select class="form-control" name="demand" id="demand" placeholder="demand" value="{{ $user->demand }}">
                    <option value="1">Demandante</option>
                    <option value="0">Voluntario</option>
                </select>
            </div>

            @else

            <div class="form-group">
                <label for="demand"> Demandante </label>
                <select class="form-control" name="demand" id="demand" placeholder="demand" >
                    <option value="1">Demandante</option>
                    <option value="0">Voluntario</option>
                </select>
            </div>

            @endif

            @if(isset($user) && isset($user->user_is_active))
            <div class="form-group">
                <label for="user_is_active"> Usuario activo </label>
                <input type="text" name="user_is_active" class="form-control" id="user_is_active" placeholder="user_is_active" readonly="true" value="{{ $user->user_is_active }}" />
            </div>
            @endif

            <div class="form-group">
                <label for="email">Email</label>
                @if(isset($user) && isset($user->email))
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email" value="{{ $user->email }}" />
                @else
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email"  />
                @endif
            </div>

            @if(isset($user) && isset($user->email_verified_at))
            <div class="form-group">
                <label for="email_verified_at">Momento de verificación del email</label>
                <input type="email_verified_at" readonly class="form-control" name="email_verified_at" id="email_verified_at" placeholder="email_verified_at" value="{{ $user->email_verified_at }}" />
            </div>
            @endif

            <!--
            @if(isset($user) && isset($user->created_at))
            <div class="form-group">
                <label for="created_at"> created_at </label>
                <input type="text" name="created_at" class="form-control" id="created_at" placeholder="created_at" readonly="true" value="{{ $user->created_at }}" />
            </div>
            @endif

            @if(isset($user) && isset($user->updated_at))
            <div class="form-group">
                <label for="updated_at"> updated_at </label>
                <input type="text" name="updated_at" class="form-control" id="updated_at" placeholder="updated_at" readonly="true" value="{{ $user->updated_at }}" />
            </div>
            @endif
            -->

            <button type="submit" class="btn btn-primary">
                Guardar
            </button>
        </form>
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