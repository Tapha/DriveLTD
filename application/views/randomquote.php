<?php
// Select how many to show, and add you quotes
$count = 3;
$quotes[] = '<div class="quote"><p>Lorem ipsum 1 dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><span class="bottom"><strong>Mr Lorem Ipsum, Company Name</strong></span></div>';
$quotes[] = '<div class="quote"><p>Lorem ipsum 2 dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><span class="bottom"><strong>Mr Lorem Ipsum, Company Name</strong></span></div>';
$quotes[] = '<div class="quote"><p>Lorem ipsum 3 dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><span class="bottom"><strong>Mr Lorem Ipsum, Company Name</strong></span></div>';

// Do not edit if you dont know what you are doing.
shuffle($quotes); $i = 0;
foreach($quotes as $quote) {
	if($i != $count) {
		echo $quote;
	} else { break; }
	$i++;
}
?>