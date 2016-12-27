@extends('layouts.master')

@section('title')
	WELCOME! 
@endsection

@section('content')
	<div class = "row">
	<h3>Sign Up</h3>
		<div class="col-6">
			<form action="#" method="post">
				<div class ="form-group">
					<label form="email">Your E-mail</label>
					<input class = "form-control" type="text" name="email" id="email">
				</div>
				
				<div class ="form-group">
					<label form="first_name">Your E-mail</label>
					<input class = "form-control" type="text" name="first_name" id="first_name">
				</div>
				
				<div class ="form-group">
					<label form="password">Your Password</label>
					<input class = "form-control" type="password" name="password" id="password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
	</div>
	
	<div class="col-6">
	<h3>Sign In</h3>
			<form action="#" method="post">
				<div class ="form-group">
					<label form="email">Your E-mail</label>
					<input class = "form-control" type="text" name="email" id="email">
				</div>
			
				<div class ="form-group">
					<label form="password">Your Password</label>
					<input class = "form-control" type="password" name="password" id="password">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				</form>
	</div>
</div>
	
@endsection