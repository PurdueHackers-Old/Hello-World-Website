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
				@if (request()->path() == "/")
					<li><a href="#schedule">Schedule</a></li>
					<li><a href="#faq">FAQ</a></li>
				@endif
				<li><a href="/resources">Resources</a></li>
				@if(session()->get('authenticated_member') == "true")
					<li><a href="/member/{{ session()->get('member_id') }}">Profile</a></li>
					<li><a href="/projects">Projects</a></li>
					<li><a href="/logout">Logout</a></li>
				@endif
			</ul>
		</div>
	</div>
</nav>