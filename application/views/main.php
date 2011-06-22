<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Slate Admin</title>	
	
	<link rel="stylesheet" href="<?php echo $base_url.'css/screen.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?php echo $base_url.'css/plugin.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />	
	<link rel="stylesheet" href="<?php echo $base_url.'css/custom.css'?>" type="text/css" media="screen" title="no title" charset="utf-8" />		
	
	<style type="text/css" media="screen">
		
	</style>

</head>

<body>
	
<div id="wrapper" class="clearfix">
	
	<div id="top">
		<div id="header">
			<h1><a href="index2.html">Slate Admin</a></h1>
			
			<div id="info">
				<h4>Welcome James</h4>
				
				<p>
					Logged in as User
					<br />
					We have found <a href="javascript:;">5</a> earlier dates
					<br>
					<a id='logout' href="/">Log Out</a>
					<br>
				</p>
		
				<img src="<?php echo $base_url.'img/avatar.jpg';?>" alt="avatar" />
			</div> <!-- #info -->
					
		</div> <!-- #header -->	
		
		
		<div id="nav">	
	
			<ul class="mega-container mega-grey">
	
				<li class="mega mega-current">
					<a href="index2.html" class="mega-link">Dashboard</a>	
				</li>
		
				<li class="mega">				
					<a href="javascript:;" class="mega-tab">
						Sample Pages
					</a>
					
					<div class="mega-content mega-menu ">
						<ul>
							<li><a href="sample_gallery.html">Image Gallery</a></li>
							<li><a href="sample_reports.html">Reports</a></li>			
							<li><a href="sample_faq.html">FAQ</a></li>				
							<li><a href="sample_invoice.html">Invoice</a></li>	
							<li><a href="sample_calendar.html">Calendar</a></li>		
							<li><a href="sample_people.html">People Listing</a></li>	
							<li><a href="sample_details.html">Support Request</a></li>	
						</ul>
					</div>						
				</li>
		
				<li class="mega">				
					<a href="javascript:;" class="mega-tab hasSub">Page Elements</a>	
					
					<div class="mega-content mega-menu ">						
								
						<ul>
							<li><a href="text.html">Buttons &amp; Text</a></li>	
							<li><a href="grid.html">Grid Layout</a></li>	
							<li><a href="tables.html">Tables</a></li>	
							<li><a href="forms.html">Forms</a></li>	
							<li><a href="charts.html">Charts</a></li>						
						</ul>
					</div>				
				</li>
				
				<li class="mega">				
					<a href="widgets.html" class="mega-link">Widgets</a>			
				</li>							
				
				<li class="mega">
					<a href="javascript:;" class="mega-tab hasSub">Multi-level menu</a>
					<div class="mega-content mega-menu ">
						
								
						<ul>
							<li><a href="javascript:;">Demonstration</a></li>
							<li><a href="javascript:;">Purposes</a></li>
							<li>
								<a href="javascript:;" class="hasSub">Only</a>
								
								<ul>
									<li><a href="javascript:;">Fake Item #1</a></li>
									<li><a href="javascript:;">Fake Item #2</a></li>
									<li><a href="javascript:;">Fake Item #3</a></li>
								</ul>
							</li>
						
						</ul>
					</div>						
				</li>
			</ul>
		</div> <!-- #nav -->
	</div> <!-- #top -->
	
	<div id="content" class="xfluid">
		
		<div class="portlet x3" style="min-height: 300px;">
			
			<div class="portlet-header">
				<h4>Current Test Info</h4>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				<table cellspacing="0" class="info_table">
					<tbody>
						<tr>
							<td class="value">Date of Test</td>
							<td class="full">Monday, April 5, 2011</td>
						</tr>
						<tr>
							<td class="value">Test Center</td>
							<td class="full">Uxbridge</td>
						</tr>
						<tr>
							<td class="value">Fee paid</td>
							<td class="full">&pound;62</td>
						</tr>
						<tr>
							<td class="value">Category</td>
							<td class="full">B - Car</td>
						</tr>
						<tr>
							<td class="value">Days left to cancel</td>
							<td class="full">5</td>
						</tr>
						<tr>
							<td class="value">Change Test Details</td>
							<td class="full">DSA Website</td>
						</tr>
					</tbody>
				</table>
			</div> <!-- .portlet-content -->			
		</div> <!-- .portlet -->
		
		
		
		<div class="xbreak"></div> <!-- .xbreak -->
		
		<div class="portlet x6">			
			<div class="portlet-header">
				<h4>Support Requests</h4>
				
				<ul class="portlet-tab-nav">
					<li class="portlet-tab-nav-active"><a href="#allreq" rel="tooltip" title="All support requests.">All</a></li>						
					<li class=""><a href="#openreq" rel="tooltip" title="Recently opened to request.">Open</a></li>
					<li class=""><a href="#respreq" rel="tooltip" title="Recently responded to request.">Responded</a></li>
				</ul>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				
				<div id="openreq" class="portlet-tab-content">
					<table class="support_table" cellspacing="0">
						<tbody>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Lorem ipsum dolor sit amet</a></td>
							<td class="who">Posted by Peter</td>
						</tr>
	
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Consectetur adipiscing</a></td>
							
							<td class="who">Posted by Carla</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Sed in porta lectus maecenas</a></td>
							<td class="who">Posted by Bruce</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
	
							<td class="full"><a href="#">Dignissim enim</a></td>
							<td class="who">Posted by Jane</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
							
	
							<td class="who">Posted by Asterix</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Maecenas id velit et elit</a></td>
	
							
							<td class="who">Posted by Killer</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
							
	
							<td class="who">Posted by Asterix</td>
						</tr>
						</tbody>
					</table>
				</div> <!-- .portlet-tab-content -->
				
				<div id="allreq" class="portlet-tab-content">
					<table class="support_table" cellspacing="0">
						<tbody>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Lorem ipsum dolor sit amet</a></td>
							
							<td class="who">Posted by Peter</td>
						</tr>
	
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Consectetur adipiscing</a></td>
							<td class="who">Posted by Carla</td>
						</tr>
						<tr>
							<td><span class="ticket open">Open</span></td>
							<td class="full"><a href="#">Sed in porta lectus maecenas</a></td>
							
							<td class="who">Posted by Bruce</td>
						</tr>
						<tr>
							<td><span class="ticket closed">Closed</span></td>
	
							<td class="full"><a href="#">Dignissim enim</a></td>
							
							<td class="who">Posted by Jane</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>

	
							<td class="who">Posted by Asterix</td>
						</tr>
						<tr>
							<td><span class="ticket closed">Closed</span></td>
							<td class="full"><a href="#">Maecenas id velit et elit</a></td>
	
							
							<td class="who">Posted by Killer</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>

	
							<td class="who">Posted by Asterix</td>
						</tr>
						</tbody>
					</table>
				</div> <!-- .portlet-tab-content -->
				
				<div id="respreq" class="portlet-tab-content">
					<table class="support_table" cellspacing="0">
						<tbody>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Lorem ipsum dolor sit amet</a></td>
							
							<td class="who">Posted by Peter</td>
						</tr>
	
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Consectetur adipiscing</a></td>

							<td class="who">Posted by Carla</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Sed in porta lectus maecenas</a></td>
							
							<td class="who">Posted by Bruce</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
	
							<td class="full"><a href="#">Dignissim enim</a></td>
							
							<td class="who">Posted by Jane</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
							
	
							<td class="who">Posted by Asterix</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Maecenas id velit et elit</a></td>
	
							
							<td class="who">Posted by Killer</td>
						</tr>
						<tr>
							<td><span class="ticket responded">Responded</span></td>
							<td class="full"><a href="#">Duis nec rutrum lorem</a></td>
							
	
							<td class="who">Posted by Asterix</td>
						</tr>
						</tbody>
					</table>
				</div> <!-- .portlet-tab-content -->

			</div> <!-- .portlet-content -->			
		</div>  <!-- .portlet -->
		
		
		<div class="portlet x6">
			
			<div class="portlet-header">
				<h4>Inbox</h4>
			</div> <!-- .portlet-header -->
			
			<div class="portlet-content">
				<table cellspacing="0" class="inbox_table">
					<tbody>
						<tr>
							<td class="avatar"><img src="<?php echo $base_url.'img/avatar.jpg';?>" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><a href="#">Lorem ipsum dolor sit amet</a><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna al</td>
							<td class="who">Sent by Peter</td>
						</tr>
	
						<tr>
							<td class="avatar"><img src="<?php echo $base_url.'img/avatar.jpg';?>" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><a href="#">Consectetur adipiscing</a><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exerc.</td>
							<td class="who">Sent by Carla</td>
						</tr>
						<tr>
							<td class="avatar"><img src="<?php echo $base_url.'img/avatar.jpg';?>" width="55" alt="avatar" class="avatar_img" /></td>
							<td class="full"><a href="#">Sed in porta lectus maecenas</a><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</td>
							<td class="who">Sent by Bruce</td>
						</tr>
						<tr>
							<td class="avatar"><img src="<?php echo $base_url.'img/avatar.jpg';?>" width="55" alt="avatar" class="avatar_img" /></td>
	
							<td class="full"><a href="#">Dignissim enim</a><br />Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</td>
							<td class="who">Sent by Jane</td>
						</tr>					
					</tbody>
				</table>
			</div> <!-- .portlet-content -->			
		</div> <!-- .portlet -->
		
	</div> <!-- #content -->
	
	<div id="footer">
		
		<p>Copyright &copy; 2010 <a href="javascript:;">MadeByAmp</a>, all rights reserved.</p>
		
	</div> <!-- #footer -->
	
</div> <!-- #wrapper -->

<script  type="text/javascript" src="js/jquery/jquery.1.4.2.min.js"></script>
<script  type="text/javascript" src="js/slate/slate.js"></script>
<script  type="text/javascript" src="js/slate/slate.portlet.js"></script>
<script  type="text/javascript" src="js/plugin.js"></script>


<script type="text/javascript" charset="utf-8">
$(function () 
{
	slate.init ();
	slate.portlet.init ();	
});
</script>
	
</body>

</html>