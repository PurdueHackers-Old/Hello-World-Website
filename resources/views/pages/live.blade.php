@extends("app")

@section("content")

<div class="section"><div class='section-container'>
	<div class="resources">
		<h1>Hello World<h1>
		<p>Presented by Purdue Hackers</p>

		<div id="video-container" class="live-container">
			<iframe width="640" height="360" id="video-frame" src="https://www.youtube.com/embed/ZqLXluCNKL4" frameborder="0" scrolling="no" allowfullscreen></iframe>
		</div>
		<div id="timer-container" class="timer-container">
			<h1>12h 10m</h1>
			<p>Until Hacking ends</p>
		</div>
		<div id="schedule-container" class="live-container">
			<h2>Schedule</h2>
			<h4>Saturday</h4>

			<table id="schedule-saturday">
			    <tr class="schedule-item">
			    	<td>Check In</td>
					<td class="schedule-time">9:30am</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Opening Ceremonies</td>
					<td class="schedule-time">10:30am</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Hacking Starts</td>
					<td class="schedule-time">11:00am</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Team Building</td>
					<td class="schedule-time">11:00am</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Lunch</td>
					<td class="schedule-time">12:30pm</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Talk: Making Art with Code</td>
					<td class="schedule-time">1:00pm</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Talk: Web scraping and APIs</td>
					<td class="schedule-time">3:00pm</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Dinner</td>
					<td class="schedule-time">6:00pm</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Talk: Xtern Internships</td>
					<td class="schedule-time">6:00pm</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>CSWN Puzzle Challenge</td>
					<td class="schedule-time">8:00pm</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Talk: Intro to APIs</td>
					<td class="schedule-time">9:00pm</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Late Night Snack</td>
					<td class="schedule-time">11:00pm</td>
			    </tr>
			</table>

			<hr class="schedule-break">

			<h4>Sunday</h4>

			<table id="schedule-sunday">
				<tr class="schedule-item">
			    	<td>Brunch</td>
					<td class="schedule-time">LWSN Commons, 10:00am</td>
				</tr>
				<tr class="schedule-item">
			    	<td>Hacking Ends</td>
					<td class="schedule-time">11:00am</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Project Expo</td>
					<td class="schedule-time">LWSN Commons, 11:30am</td>
			    </tr>
			    <tr class="schedule-item">
			    	<td>Closing Ceremonies</td>
					<td class="schedule-time">CL50 224, 12:45pm</td>
			    </tr>
			</table>
		</div>>

		<div id="msg-container" class="live-container">
			<div class="timer">
				<h3>24h 0m</h3>
				<p>Until Hacking ends</p>
			</div>
			<div id="msg-title">Quick Links</div>

			<div class="msg-item">Need Help? <a href="http://help.purduehackers.com/">Request a mentor.</a></div>
			<div class="msg-item">Looking for tutorials? <a href="/resources">Check out our resources.</a></div>
			<div class="msg-item">Please register your <a href="/projects">teams here.</a></div>
			<div class="msg-item">When ready, submit your projects to <a href="http://hello-world.devpost.com">DevPost.</a></div>
		</div>

		<div id="padding-container"></div>

	</div>
</div></div>

@stop
