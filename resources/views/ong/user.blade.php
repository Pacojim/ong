@extends('layouts.app')

@section('content')

<div class="container">
    <div class="justify-content-center">
        <form action="{{$uriPost}}">
            <div class="form-group">
                <label for="name"> Nombre de usuario </label>
                <input type="text" name="name" class="form-control" id="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="name"> Nombre </label>
                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="first_name">
            </div>
            </div>
            <div class="form-group">
                <label for="name"> Apellidos </label>
                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="last_name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

id	int(10) unsigned	NO	PRI		auto_increment
	varchar(255)	NO			
	varchar(255)	NO			
	varchar(255)	NO			
address	varchar(255)	NO			
age	int(11)	NO			
demand	tinyint(1)	YES			
user_is_active	tinyint(1)	NO		1	
email	varchar(255)	NO	UNI		
email_verified_at	timestamp	YES			
password	varchar(255)	NO			
remember_token	varchar(100)	YES			
created_at	timestamp	YES			
updated_at	timestamp	YES			

@endsection
