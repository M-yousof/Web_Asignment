@extends('Master')
@section("content")
<div class="container custome-login">
<form action="login" method="POST">
	<div class="form-group row">
        @csrf
		<label for="Email" Name="Email" id="Email" class=" col-md-2 label-control col-md-offset-3 text-primary" >Email</label>
		<div class="col-md-5" ><input name="email" type="email" class="form-control text-center" maxlenght="5" placeholder="Type Your Email" required></div>
	</div><br>
	<div class="form-group row">
		<label for="passowrd" name="Password" class="col-md-2 label-contorl col-md-offset-3 text-primary" >Password</label>
		<div class="col-md-5"><input type="password" Name="password" id="password" class="form-control text-center" placeholder="Type Your Password"></div>
	</div><br>
		
	<div class="col-md-5 col-md-offset-7">
	    <button class="btn btn-primary">Login&nbsp;<span class="glyphicon glyphicon-log-in"></span></button>
	</div>
</form>
</div>
@endsection