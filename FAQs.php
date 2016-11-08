<DOCTYPE! html>
		
<head>
<title> FAQs </title>
<link rel = "stylesheet" type="text/css" href="index.css"/>
<link rel="shortcut icon" type="image/x-icon" href="img src= 'CHEATit.png'" />
<style type="text/css">
	body{ 
		color: rgb(201, 12, 12); font-family: Helvetica;
	}
	h1.underline{
		text-align: left; font-weight: bold; font-family: Helvetica; margin-left: 5%;
	}
	h3.subHeadMain{
		font-weight: bold; font-family: segoe ui light; text-align: left; font-size: 24px; margin-left: 5%; color: rgb(201,12,12);
	}
	p.subHeadsubMain{
		text-align: left;
		color: rgb(201,12,12);
	}
	.question-box {position: relative; margin: 0.5%; margin-left: 5%; background-color: white; padding: 1%; width: 85%; border-radius: 5px;}
	.question {font-family: calibri; font-size: 20px; color: black; font-weight: bold;}
	.answer {font-family: calibri; font-size: 18px; color: black;} 
	.link {font-family: calibri; font-size: 16px; color: grey; text-decoration: underline;}
	.link a:hover {color: rgb(201,12,12);}

</style>
<?php include_once 'load.php'; ?>
</head>
<body">
	<header id = "header">
		<ul>
			<li style="text-align: right; width: 8%;"><a href="index.php"> CHEATiT </a></li>
			<li style="text-align: right; width: 75%;"><a href = "Submit.php">Submit</a></li>
			<li style="text-align: right; width: 10%"><a href="profile.php"><?php echo $_SESSION['display_name'] ?></a></li>
		</ul>
	</header>	
	<br /><br /><br />
	<h1 class="underline" id = "about">Frequently Asked Questions: </h1>
	<br /><center><hr width="90%"/></center>
		<h3 class="subHeadMain"> Basics </h3>
		<article class="question-box">
			<p class="question">What are cheat sheets?</p>
			<p class="answer">
A <b>cheat sheet</b> (also cheatsheet) or <b>crib sheet</b> is a concise set of notes used for quick reference.<br/>
Cheat sheets are so named because they may be used by students without the instructor's knowledge to cheat on a test. However, at higher levels of education where rote memorization is not as important as in basic education, students may be permitted to consult their own notes during the exam (which is not considered cheating). The act of preparing a cheat sheet is also an educational exercise, thus students are sometimes only allowed to use cheat sheets they have written themselves. In such usage, a cheat sheet is a physical piece of paper, often filled with equations and/or facts in compressed writing. Modern students often print cheat sheets in extremely small font, fitting an entire page of notes in the palm of their hands during the exam.
			</p>
			<p class="link"><a href="https://en.wikipedia.org/wiki/Cheat_sheet">More on Wikipedia</a></p>
		</article>

		<article class="question-box">
			<p class="question">What is cheatit?</p>
			<p class="answer">
<b>Cheatit</b> is a blog or forum for cheat sheets.<br/>
Here we allow user to upload and download Cheat Sheets on a variety of topics and allow people to interact with each other. People can build accounts and upvote and downvote the Cheat Sheets created by other users. The forum is open source and is still under development.
			</p>
		</article>
		<article class="question-box">
			<p class="question">Can anyone submit a random link?</p>
			<p class="answer">
Yes — all you need is <a href="profile.php">an account</a>. However, there is a cap on the posting rate to prevent spamming. This restriction is the same for both CHEATiT gold members and non-gold members.
			</p>
		</article>
		<article class="question-box">
			<p class="question">How is a submission score determined? What is its use?</p>
			<p class="answer">
A submission's score is simply the number of upvotes minus the number of downvotes. If five users like the submission and three users don't it will have a score of 2. <br/> In the future cheatit would like to reward its top contributors by paying in bitcoin. 
			</p>
			<p class = "link"><a href="http://freebitco.in/?r=1759748">Try some free bitcoin</a></p>
		</article>
		<article class="question-box">
			<p class="question">Is posting personal information okay?</p>
			<p class="answer">
NO. CHEATiT is a pretty open and free speech place, but it is not ok to post someone's personal information, or post links to personal information. This includes links to public Facebook pages and screenshots of Facebook pages with the names still legible. We all get outraged by the ignorant things people say and do online, but witch hunts and vigilantism hurt innocent people and certain individual information, including personal info found online is often false. Posting personal information will get you banned. Posting professional links to contact a congressman or the CEO of some company is probably fine, but don't post anything inviting harassment, don't harass, and don't cheer on or vote up obvious vigilantism.
			</p>
		</article>
	<h3 class="subHeadMain" id = "developers">Developers</h3>
		<article class="question-box">
			<p class="question">How do I view Cheatit's source code?</p>
			<p class="answer">Cheatit fully supports open source. Just like any other open source project, you can view, modify and contribute to cheatit on github</p>
			<p class="link"><a href="https://www.github.com/varunvora/cheatit">View cheatit on github</a></p>
		</article>
		<article class="question-box">
			<p class="question">How do I contact the developers?</p>
			<p class="answer">We are open to all kinds of feedbacks, complaints and help. We will get back to you ASAP</p>
			<form onsubmit = "alert('Thank you for contacting us, we will get back to you shortly');" method="post">
				<input type="text" name="message" placeholder = "Your query here" style="border-radius: 3px; width: 92%; font: inherit; padding: 5px;" />
				<input type="submit" name="btn" value = "SEND" style="background-color: rgb(201,12,12); margin: 2px; padding: 10px; width: 6%; border: solid 1px white; color: white; border-radius: 5px;">
			</form>
		</article>
		<article class="question-box">
			<p class="question">How do I advertise on cheatit?</p>
			<p class="answer">Cheatit is not open to advertising. Our revenue model relies on bitcoin donation, payments by gold users, and submitting cheat sheets ourselves.</p>
		</article>
		<article class="question-box">
			<p class="question">How can I donate to cheatit?</p>
			<p class = "answer">Cheatit relies on the generous contribution of its users via bitcoin payments. You too can donate with the following bitcoin address</p>
			<p class="link">1QEkxqq2YitVERamsFyQDarCDTdtUSFhB2</p>
		</article>
		<article class="question-box">
			<p class="question">Where can I see cheatit's project presentation</p>
			<p class="answer">Cheatit was started as a project for the Web Technologies post at PES University. This is what they had presented</p>
			<p class="link"><a href="https://docs.google.com/presentation/d/1TDPkKxubxh2yYh0M0Cpw9jagFRLzMBSGycBuIoWnb-M/edit?usp=sharing">View presentation</a></p>
		</article>
		<article class="question-box">
			<p class="question">What are cheatit's future plans?</p>
			<p class="answer">Cheatit hopes to be the single place where people come to look for cheat sheets for all kinds of topics. With the growing amount of information, it is practically impossible to memorise everything you need. Cheatit will always be the source for quick-reference material</p>
		</article>
	<h3 class="subHeadMain" id = "blog"> Blog </h3>
		<article class="question-box">
			<p class="question">Acknowledgement</p>
			<p class="answer">This project would have not been possible without the contribution of Vinay sir who helped us whenever we asked for it. We would also thank PESU wifi's exceptional speed that allowed us to access reference material easily and work on the project in teams</p>
		</article>
	<h3 class="subHeadMain" id = "site_rules"> Site Rules </h3>
		<article class="question-box">
			<p class="question"> Is it okay to create multiple accounts? </p>
			<p class="answer"> Yes, you can create multiple/throwaway accounts as long as you do not do so to ghost vote your own submissions.</p>
		</article>
		<article class="question-box">
			<p class="question"> What constitutes vote cheating and vote manipulation? </p>
			<p class="answer"> Besides spam, the other big no-no is to try to manipulate voting by any means: manual, mechanical, or otherwise. We're not going to post an exhaustive list of forbidden tactics (lest we give people ideas), but some major ones are:
			<br/>Don't use shill or multiple accounts, voting services, or any other software to increase votes for submissions
			<br/>Don't ask other users to vote on certain posts, either on CHEATiT itself or anywhere else (through Twitter, Facebook, IM programs, IRC, etc.)
			<br/> Don't be part of a "voting clique" or "vote ring"
			<br/>A voting clique is a group of people who send links to their submissions around via message, IM, or any other means, with the expectation of "you guys vote for my stuff and I'll vote for yours." A "vote ring" is a group of people who agree to vote on certain things together, either a specific submission, a user, a domain, or anything like that. Upvote each submission or content for the value of the information in it, a variety of things that you think are interesting and will benefit the community. <br />
		Cheating or attempting to manipulate voting will result in your account being banned. Don't do it.</p>
		</article>
		<article class="question-box">
			<p class="question"> What constitutes spam? </p>
			<p class="answer"> It's a gray area, but some rules of thumb:
			<br/> It's not strictly forbidden to submit a link to a site that you own or otherwise benefit from in some way, but you should sort of consider yourself on thin ice. So please pay careful attention to the rest of these bullet points.
			<br/> If your contribution to CHEATiT consists mostly of submitting links to a site(s) that you own or otherwise benefit from in some way, and additionally if you do not participate in discussion, or reply to peoples questions, regardless of how many upvotes your submissions get, you are a spammer. If over 10% of your submissions and conversation are your own site/content/affiliate links, you're almost certainly a spammer.
			<br/> If people historically downvote your links or ones similar to yours, and you feel the need to keep submitting them anyway, they're probably spam.
			<br/> If people historically upvote your links or ones like them -- and we're talking about real people here, not sockpuppets or people you asked to go vote for you -- congratulations! It may not be spam! However, you still need to follow the <a href="Self-Promotion.html"><span>guidelines for self promotion</a>
			<br/> If nobody's submitted a link like yours before, give it a shot. But don't flood the new queue; submit one or two times and see what happens.</li>
		To play it safe, write to the moderators of the community you'd like to submit to. They'll probably appreciate the advance notice. They might also set community-specific rules that supersede the ones above. And that's okay -- that's the whole point of letting people create their own CHEATiT communities and define what's on topic and what's spam. <br /></p>
		</article>
		<br/>
	<div style="position: relative; top:50px;">
		<footer id = "footer">
			<center>
			<table style="margin: 1%; font-size: 14px; width: 40%; color: silver">
				<tr style="color: white;">
					<td>About</td>
					<td>Help</td>
					<td>Project</td>
					<td>Done By</td>
				</th>
				<tr><td></td><td></td><td></td><td></td></tr>
				<tr><td></td><td></td><td></td><td></td></tr>
				<tr><td></td><td></td><td></td><td></td></tr>
				<tr>
					<td><a href = "FAQs.php#about">about</a></td>
					<td><a href = "FAQs.php#site_rules">site rules</a></td>
					<td><a href = "FAQs.php#developers">presentation</a></td>
					<td>Mukund Sood</td>
				</tr>
				<tr>
					<td><a href = "FAQs.php#developers">source code</a></td>
					<td><a href = "FAQs.php">FAQ</a></td>
					<td><a href = "FAQs.php#developers">future</a></td>
					<td>Varun Y Vora</td>
				</tr>
				<tr>
					<td><a href = "FAQs.php#developers">advertise</a></td>
					<td><a href = "FAQs.php#developers">contact us</a></td>
					<td></td>
					<td>Vishal Krishna Kumar P.</td>
				</tr>
				<tr>
					<td><a href = "FAQs.php#blog">blog</td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</table>
			</center>
		</footer>
	</div>

</body>
</html>
