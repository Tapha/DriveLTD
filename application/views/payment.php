<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><head>
<title>DriveLTD - "The Driving Software Company" - Payments</title>

<link href="http://fonts.googleapis.com/css?family=Cabin:regular,bold" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="/static/css/reset.css">
<link type="text/css" rel="stylesheet" href="/static/css/main.css">

<meta property="og:site_name" content="Gumroad">
<meta property="og:title" content="Gumroad">
<meta property="og:url" content="http://gumroad.com/">
<meta property="og:type" content="website">
<meta property="og:description" content="Share and sell your digital goods with just a link.">
<!--<meta property="og:image" content="http://lts.cr.s3.amazonaws.com/media/img/crate_75-final.png" />-->
<meta property="fb:page_id" content="http://www.facebook.com/pages/Gumroad/207002865984963">

<script type="text/javascript" async="" src="https://ssl.google-analytics.com/ga.js"></script><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript" src="/static/js/jquery.tipsy.js"></script>
<link rel="stylesheet" href="/static/css/tipsy.css" type="text/css">

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-3109196-41']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<meta name="viewport" content="initial-scale = 1.0, user-scalable = no">

</head>
<body id="visiting-link">
	
<div id="wrapper">
	<div id="header-bar">
		<div id="one"></div>
		<div id="two"></div>
		<div id="three"></div>
		<div id="four"></div>
		<div id="five"></div>
	</div>
	<div id="progress"></div>
	
	<div id="header-wrapper">	
	<div id="header">
		<ul>
			
			
			<li>Thanks for using Gumroad! <a href="mailto:hi@gumroad.com">Feedback?</a></li>
			
			
		</ul>
		<a href="/" id="logo"><h1>Gumroad</h1></a>
		<h2 class="cabin">Sahil Lavingia is sharing Pencil Icon PSD with you! </h2>
	</div>
	
	<script type="text/javascript">

		$(document).ready(function(){

			var progress = 0;
			var date_month_progress = 0;
			var date_year_progress = 0;
			var progress_string = '0%';

			function monitor()
			{				
				progress = 0;
				if ($("#card_number").val().length > 7) { progress += 34; }
				if ($("#card_security_code").val().length > 2) { progress += 34; }
				progress = progress + date_year_progress + date_month_progress;
				
				animate_progress();
			}
			
			$('#date_month').change(function() {
				date_month_progress = 17; 
				animate_progress();
			});
			
			$('#date_year').change(function() {
				date_year_progress = 17; 
				animate_progress();
			});
			
			$("#card_number").keyup(monitor);
			$("#card_security_code").keyup(monitor);
			
			$("#submit_button").click(function() {
				$("#progress").animate({
					'width': '100%'
				}, 1000, function() {
					//animation complete.
				});
			});
			
			function animate_progress()
			{								
				progress = Math.min(progress, 100)	
				progress_string = progress + '%';
						
				$("#progress").animate({
					'width': progress_string
				}, 1000, function() {
					console.log('animation complete');
				});
			}
						
			$('form').submit(function() {
				process_payment();
				return false;
			});

			$('#paypal-link').click(function() {
				process_paypal();
				return false;
			});			

			function process_payment() {
								
				$('#payment-box h2').text('Processing...');
				$('#payment-box h2').removeClass('error');
				$.post("/l/hjbaod", $("#payment-form").serialize(), 
				function(data){
					if (data.success)
					{
						$('#payment-box h2').text('Success! Redirecting...');
						window.location.href = data.redirect_url;
					} else {
						$('#payment-box h2').text(data.error_message);
						$('#payment-box h2').addClass('error');
					}
				});					
			}
			
			function process_paypal() {
								
				$('#payment-box h2').text('Doing magic...');
				$('#payment-box h2').removeClass('error');
				$.post("/paypal/hjbaod", $("#payment-form").serialize(), 
				function(data){
					if (data.success)
					{
						$('#payment-box h2').text('Success! Redirecting...');
						window.location.href = data.redirect_url;
					} else {
						$('#payment-box h2').text(data.error_message);
						$('#payment-box h2').addClass('error');
					}
				});					
			}
			
		    $('#card_number').tipsy({trigger: 'focus', gravity: 'w', html: 'true'});
		    $('#card_security_code').tipsy({trigger: 'focus', gravity: 'w', html: 'true'});

		});

	</script>
	
	
	
		<div id="description-box">
			<p>I spent hours making this icon. I made it for a Mac app I never released. Here's a preview: <a href="http://drbl.in/baLn
">http://drbl.in/baLn
</a> <br> 
 <br> Support me and purchase the PSD for just a dollar!</p>
		</div>
	
	
	<div id="payment-box">
		<h2 class="cabin">Pay $1.00 to be redirected to it:</h2>
		<form id="payment-form" name="payment-form" action="" method="post">
			
			<p>
				<label for="card_number">Card Number:</label>
				<input id="card_number" name="card_number" placeholder="Card number" size="30" type="text" original-title="We do &lt;em&gt;not&lt;/em&gt; store this! We charge your card and that's it.">
			</p>		
		
			<p id="expiry_p">
				<label for="date_month">Card Expiry Date:</label>
					<select id="date_month" name="date_month">
						<option value="1">January</option>
						<option value="2">February</option>
						<option value="3">March</option>
						<option value="4">April</option>
						<option value="5">May</option>
						<option value="6">June</option>
						<option value="7">July</option>
						<option value="8">August</option>
						<option value="9">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>	
					  </select> / <select id="date_year" name="date_year">
						<option value="2011">2011</option>
						<option value="2012">2012</option>
						<option value="2013">2013</option>
						<option value="2014">2014</option>
						<option value="2015">2015</option>
						<option value="2016">2016</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
						</select>
				</p>
				
				<p>
					<label for="card_security_code">Card Security Code:</label>
					<input id="card_security_code" name="card_security_code" placeholder="Security code" size="10" type="text" original-title="We do &lt;em&gt;not&lt;/em&gt; store this either!">
				</p>
				
				<p class="last-p"><button type="submit" id="submit_button">Go!</button></p>
		</form> 		
	</div>
	
	<p id="paypal-p"><span class="arrow">↑</span> or you can <a href="#" id="paypal-link">pay using <strong>PayPal</strong>!</a></p>
</div>

	<div id="footer-wrapper">
	<div id="footer">
		<p>Copyright © 2011 <a href="http://little.bigthin.gs/">Little Big Things, LLC</a>.</p>
		<p>A project by <a href="http://sahillavingia.com/">Sahil Lavingia</a>.</p>
	</div>
	</div>

</div>


</body></html>
