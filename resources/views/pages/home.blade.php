@extends("app")

@section("content")

@if (session()->get('authenticated_member') != "true")
<div class="navHome">
	<a href="/join" class="button btn-lg link-btn" style="margin-right: 100px;">Sign Up</a>
	<a href="/login" class="button btn-lg link-btn">Log In</a>
</div>
@endif

<div class="welcome">
	<div class="left">
		<img src="/images/HW/rocket_fade_s.png" alt="rocket" class="rocket">
	</div>
	<div class="right">
		<h1>Hello World</h1>
		<h2>A weekend dedicated to introduce you to a world of technology
		<br>
		<br>
		October 15-16
		</h2>
		@if (session()->get('authenticated_member') == "true")
		<a href="/apply/1" class="button btn-lg link-btn">Sign Up</a>
		@else
		<a href="/join" class="button btn-lg link-btn">Sign Up</a>
		@endif
	</div>
</div>

<div class="cloud1 cloud">
	<div class="info clearfix"></div>
</div>

<div class="cloud2 cloud ">
	<div class="info clearfix">
		<div class="left">
			<img src="images/HW/logo_final_s.png" alt="hello world" class="logo">
		</div>
		<div class="right">
			<h2>What is Hello World?</h2>
			<p>Hackathons provide a great opportunity to improve your tech skills and meet like-minded peers and companies. Unfortunately many people are nervous to attend their first hackathon.<br><br>
				Hello World is a 24 hour introductory hackathon that introduces you to the format of a hackathon as well as provides a helpful atmosphere for you to create your first real life application at a hackathon.
			</p>
		</div>
	</div>
</div>


<div class="timeline">
	<h1>Pre-Event Schedule</h1>
	<div class="contain">
		<img src="images/HW/timeline.svg">
		<div class='right'>
			<a class="link-btn" href="https://www.facebook.com/events/1126824020720467/">
				<p class='subhead'>CSWN Presents</p>
				<p>Intro to Angular Web Development</p>
				<p class='subhead'>October 12 6:30 LWSN B155</p>
			</a><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1236740129698752/">
				<p class='subhead'>iOS Club Presents</p>
				iOS Development with MapKit Workshop
				<p class='subhead'>October 13 6:30 LWSN B155</p>
			</a><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1792876254259548/">
				<p class='subhead'>ACM SigApp Presents</p>
				Hello Android
				<p class='subhead'>October 14 6:00 LWSN B151</p>
			</a><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1740620579522460/">
				<p class='subhead'>WebDev Club Presents</p>
				Web Development Basics Workshop
				<p class='subhead'>October 14 7:30 LWSN B155</p>

			</a>
			<br><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1648316605480897/">

				<p class='subhead'>October 15-16th</p>
				Hello World
			</a>
		</div>
	</div>
</div>



<br><br><br><br><br>

<div class="faq clearfix">
	<h1>FAQ</h1>
	<div class="faq-left clearfix">
		<div class='faq-sec'>
			<p class="subhead">What is Hello World?</p>
			<p>
				Hello World is an opportunity for you to develop your skills in a fun and collaborative space. You will be surrounded by your peers and will have access to all of the resources you need.
				<br><br>
				Over the course of one weekend you get to learn from upperclassmen mentors, follow beginning-to-end programming tutorials, and work with your classmates on a project of your choosing!

			</p>
		</div>
		<div class='faq-sec'>
			<p class="subhead">What is a hackathon?</p>
			<p>A hackathon is a specialized event focused on building technical projects from scratch over a small period of time. Many students have found these marathon events to be a great way to learn how to code.
			</p>
		</div>
		<div class='faq-sec'>
			<p class="subhead">Who is this event intended for?</p>
			<p>Students who have never participated in a hackathon before. Hello World will prepare you with everything you need to know as you begin your collegiate hackathon career.

			</p>
		</div>

		<div class="faq-sec">
			<p class="subhead">How do I sign up?</p>
			<p>Register here. In the event we reach capacity, the hackathon will be first-come-first-serve. Arrive early for guarunteed admission!
			</p>
		</div>
	</div>

	<div class="faq-right clearfix">
		<div class="faq-sec">
			<p class="subhead">Are you providing food?</p>
			<p>Hello World will provide lunch and dinner the first day, as well as late night snacks and breakfast and lunch on the second day.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">Will there be teams? </p>
			<p>Teams are highly encouraged yet not required, collaboration is instrumental to the success of your weekend. There will be team-forming exercises at the beginning of the event for those who do not already have a team.
			</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">What are the rules?</p>
			<p>Start work on your project at the beginning of the hackathon.<br>
				Use technologies that are freely available for everyone to use.<br>
​				 Be respectful. Harassment and abuse are never tolerated.


			</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">Have another question? Feel free to contact:<br><br>
				<a href="mailto:purduehackers@gmail.com" class="button btn-sm">purduehackers@gmail.com</a>
			</p>
		</div>
	</div>
</div>

<div class="cloud3 cloud">
	<div class="info clearfix">
		<h2>Areas of Focus</h2>
		<p>
			Learning how to create an application is a great way to teach yourself how to code while allowing you to share your work across the world!
			<br><br>
			At Hello World there will be workshops in Anroid, iOS, and Web Development to help you get started. Mentors will guide you step-by-step as you create your very first application.
		</p>
	</div>
</div>

<div class="cloud4 cloud">
	<div class="info clearfix">
		<h2>Mentors</h2>
		<p>
			Receiving guidance from mentors is a crucial part of being successful at your first hackathon. At Hello World there will be mentors who specialize in a wide variety of technologies to help you when needed.
			<br><br>
			The best way to learn is to surround yourself by experts in that domain, which is why thousands of students have found hackathons to be the perfect venues for learning.
		</p>
		<br><br>
		<a class="link-btn" href="/join">Sign Up</a>
	</div>
</div>

@stop

@section("customJS")

<script>
$('#div').asdf();
</script>

@stop
