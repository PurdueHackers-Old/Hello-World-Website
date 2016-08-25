@extends("app")

@section("content")

<div class="section"><div class='section-container'>
	<h3>Login</h3>
	
	<div class="panel panel-default">
		<form method="post" action="/login" class="panel-body">
			{!! csrf_field() !!}
			<label for="email">Email</label>
			<input type="text" name="email" id="email" placeholder="Email" class="form-control">
			<br>
			<label for="password">Password</label>
			<input type="password" name="password" id="password" placeholder="Password" class="form-control">
			<br><br>
			<input type="submit" value="Sign In" class="btn btn-primary">
		</form>
	</div>
</div></div>

@stop