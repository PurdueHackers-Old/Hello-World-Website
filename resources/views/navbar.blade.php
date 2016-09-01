<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">{{ env('ORG_NAME') }}</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				@if(session()->get('authenticated_member') == "true")
					<li><a href="/member/{{ session()->get('member_id') }}">Profile</a></li>
					<li><a href="/apply/1">Sign Up</a></li>
				@else
					<li><a href="/join">Sign Up</a></li>
					<li><a href="/login">Log In</a></li>
				@endif
				@if(session()->get('authenticated_admin') == "true")
					<li><a href="/members">Members</a></li>
					<li><a href="/map">Map</a></li>
					<li><a href="/events">Events</a></li>
					<li><a href="/anvil-wifi">Anvil Wifi</a></li>
				@endif
				@if(session()->get('authenticated_member') == "true")
					<li><a href="/logout">Logout</a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>