@extends('Master')
@section("content")
<div class="container custome-login">
<form action="register" method="POST">
	<div class="form-group row">
        @csrf
		<label for="Username" Name="name" id="Username" class=" col-md-2 label-control col-md-offset-3 text-primary" >Username</label>
		<div class="col-md-5" ><input name="name" type="text" class="form-control text-center" maxlenght="5" placeholder=" Your Username" required></div>
    </div><br>
    <div class="form-group row">
		<label for="Email" Name="Email" id="Email" class=" col-md-2 label-control col-md-offset-3 text-primary" >Email</label>
		<div class="col-md-5" ><input name="email" type="email" class="form-control text-center" maxlenght="5" placeholder=" Your Email" required></div>
    </div><br>

	<div class="form-group row">
		<label for="passowrd" name="Password" class="col-md-2 label-contorl col-md-offset-3 text-primary" >Password</label>
		<div class="col-md-5"><input type="password" Name="password" id="password" class="form-control text-center" placeholder="Your Password"></div>
	</div><br>
		
	<div class="col-md-5 col-md-offset-7">
	    <button class="btn btn-primary">Register&nbsp;<span class="glyphicon glyphicon-log-in"></span></button>
	</div>
</form>
</div>
@endsection