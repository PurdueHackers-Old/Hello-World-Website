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

<div class="cloud2 cloud">
	<div class="info clearfix">
		<div class="left">
			<img src="images/HW/logo_final_s.png" alt="hello world" class="logo">
		</div>
		<div class="right">
			<h2>What is Hello World?</h2>
			<p>Hello World is an opportunity for you to develop your skills in a fun and collaborative space. You will be surrounded by your peers and will have access to all of the resources you need.</p>
			<p>Over the course of 24 hours you will learn from upperclassmen mentors, follow beginning-to-end programming tutorials, and work with your classmates to build a project of your choice!</p>
		</div>
	</div>
</div>

<br><div id="schedule"></div><br><br><br><br>

<div class="timeline">
	<h1>Workshop Schedule</h1>

	<div class="contain">
		<p class="al-l">Leading up to Hello World will be a week of workshops giving you a heads up on the different technologies you can learn and apply during the hackathon.</p>
		<br>
		<p class='subhead'>Click each event to RSVP on Facebook</p>
		<br><br>
		<img id="timeline-img" src="images/HW/timeline.svg">
		<div class='right'>
			<a class="link-btn" href="https://www.facebook.com/events/1126824020720467/" target="_blank">
				<p class='subhead'>CSWN Presents</p>
				<p>Intro to Angular Web Development</p>
				<p class='subhead'>October 12 6:30 LWSN B155</p>
			</a><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1236740129698752/" target="_blank">
				<p class='subhead'>iOS Club Presents</p>
				iOS Development with MapKit Workshop
				<p class='subhead'>October 13 6:30 LWSN B155</p>
			</a><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1792876254259548/" target="_blank">
				<p class='subhead'>ACM SigApp Presents</p>
				Hello Android
				<p class='subhead'>October 14 6:00 LWSN B151</p>
			</a><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1142848959104032/" target="_blank">
				<p class='subhead'>ACM SigApp Presents</p>
				Hello Server
				<p class='subhead'>October 14 6:45
					 LWSN B151</p>
			</a><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1740620579522460/" target="_blank">
				<p class='subhead'>WebDev Club Presents</p>
				Web Development Basics Workshop
				<p class='subhead'>October 14 7:30 LWSN B155</p>

			</a>
			<br><br><br>
			<a class="link-btn" href="https://www.facebook.com/events/1648316605480897/" target="_blank">
				<p class='subhead'>Purdue Hackers Presents</p>
				Hello World
				<p class='subhead'>October 15-16th</p>
				Check-In
				<p class='subhead'>Oct 15 9:30am CL50 224</p>
			</a>
		</div>
	</div>
</div>
	<br><br>
	<div class="day-of">
  <div class="day-of-window">
    <h2>Saturday Schedule</h2>

    <div class="box clearfix">
      <p>Check In</p>
      <p class="subtext">CL50 224, 9:30am</p>
    </div>
    <div class="box clearfix">
      <p>Opening Ceremonies</p>
      <p class="subtext">CL50 224, 10:30am</p>
    </div>
    <div class="box clearfix">
      <p>Hacking Starts</p>
      <p class="subtext">LWSN, 11:00am</p>
    </div>
    <div class="box clearfix">
      <p>Team Building</p>
      <p class="subtext">LWSN Commons, 11:00am</p>
    </div>
    <div class="box clearfix">
      <p>Lunch</p>
      <p class="subtext">LWSN Commons, 12:30pm</p>
    </div>
    <div class="box clearfix">
      <p>Talk: Making Art with Code</p>
      <p class="subtext">LWSN 1106, 1:00pm</p>
    </div>
    <div class="box clearfix">
      <p>Talk: Web scraping and APIs</p>
      <p class="subtext">LWSN 1106, 3:00pm</p>
    </div>
    <div class="box clearfix">
      <p>Dinner</p>
      <p class="subtext">LWSN Commons, 6:00pm</p>
    </div>
    <div class="box clearfix">
      <p>Talk: Xtern Internships</p>
      <p class="subtext">LWSN 1106, 6:00pm</p>
    </div>
    <div class="box clearfix">
      <p>CSWN Puzzle Challenge</p>
      <p class="subtext">LWSN 1106, 8:00pm</p>
    </div>
    <div class="box clearfix">
      <p>Talk: Intro to APIs</p>
      <p class="subtext">LWSN 1106, 9:00pm</p>
    </div>
    <div class="box clearfix">
      <p>Late Night Snack</p>
      <p class="subtext">LWSN Commons, 11:00pm</p>
    </div>

    <h2>Sunday Schedule</h2>

    <div class="box clearfix">
      <p>Brunch</p>
      <p class="subtext">LWSN Commons, 10:00am</p>
    </div>
    <div class="box clearfix">
      <p>Hacking Ends</p>
      <p class="subtext">11:00am</p>
    </div>
    <div class="box clearfix">
      <p>Project Expo</p>
      <p class="subtext">LWSN Commons, 11:30am</p>
    </div>
    <div class="box clearfix">
      <p>Closing Ceremonies</p>
      <p class="subtext">CL50 224, 12:45pm</p>
    </div>
</div>



<br><div id="faq"></div><br><br><br><br>

<div class="faq clearfix">
	<h1>FAQ</h1>
	<div class="faq-left clearfix">
		<div class='faq-sec'>
			<p class="subhead">What is Hello World?</p>
			<p>Hello World is an opportunity for you to develop your skills in a fun and collaborative space. You will be surrounded by your peers and will have access to all of the resources you need.</p>
			<p>Over the course of 24 hours you will learn from upperclassmen mentors, follow beginning-to-end programming tutorials, and work with your classmates to build a project of your choice!</p>
		</div>
		<div class='faq-sec'>
			<p class="subhead">What is a hackathon?</p>
			<p>A hackathon is a specialized event focused on building technical projects from scratch over a small period of time. Many students have found these marathon events to be a great way to learn how to code.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">Will there be teams? </p>
			<p>Collaboration is just one of the exciting elements of Hello World. As such, teams of 2-4 are highly encouraged There will be team-forming exercises at the beginning of the event for those who do not already have a team.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">How do I sign up?</p>
			<p>Register here. Check-In at the event will be first-come first-serve, until we reach capacity. Arrive early for guaranteed admission!</p>
		</div>
	</div>

	<div class="faq-right clearfix">
		<div class='faq-sec'>
			<p class="subhead">What should I bring to the event?</p>
			<p>Bring your laptop, charger, and any equipment you need for your project! Please do not bring drugs, alcohol, or weapons of any kind.</p>
		</div>
		<div class='faq-sec'>
			<p class="subhead">Where do I show up?</p>
			<p>Check-In starts at 9:30am on Saturday in CL50 224. Please bring all your stuff to check-in, as we will move into Lawson immediately following opening ceremonies.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">Are you providing food?</p>
			<p>Hello World will provide lunch and dinner the first day, as well as late night snacks and brunch on the second day.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">Can I work at night?</p>
			<p>Yes. Hello World will remain open all night, and we will always have volunteers around! You are welcome to work as late as you want, we only ask that you return to your dorms if you want to sleep.</p>
		</div>
		<div class="faq-sec">
			<p class="subhead">What are the rules?</p>
			<p>You must be a first-year Purdue or Computer Science student.<br>
				Start work on your project at the beginning of the hackathon.<br>
​				Be respectful. Harassment and abuse are never tolerated. <a href="https://static.mlh.io/docs/mlh-code-of-conduct.pdf" target="_blank">Code of Conduct</a>
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
		<p class='al-l'>
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
$(function() {
  if($(window).width() < 500) {
    $('#timeline-img').each(function() {
      $(this).attr("src", $(this).attr("src").replace("timeline.svg", "timeline-m.svg"));
    });
  }
});
$(window).resize(function() {
  if($(window).width() < 500) {
    $('#timeline-img').each(function() {
      $(this).attr("src", $(this).attr("src").replace("timeline.svg", "timeline-m.svg"));
    });
  }
});
$(window).resize(function() {
  if($(window).width() >= 500) {
    $('#timeline-img').each(function() {
      $(this).attr("src", $(this).attr("src").replace("timeline-m.svg", "timeline.svg"));
    });
  }
});

</script>

@stop
