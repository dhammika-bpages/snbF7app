<!-- Page, data-page contains page name-->
<div data-page="chosen-wishes" class="page">
	<div class="page-content">
		<div class="navbar">
		  <div class="navbar-inner">
		    <div class="left"><a href="#" class="back link"> <i class="icon icon-back"></i><span>Back</span></a></div>
		    <div class="center sliding">Chosen Wishes</div>
		    <div class="right">
		      <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel"> <i class="icon icon-bars"></i></a>
		    </div>
		  </div>
		</div>          

	<?php
		$service_url = "http://www.apic.technolide.com/whishlist";
		$curl = curl_init($service_url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$curl_response = curl_exec($curl);
		if ($curl_response === false) {
		    $info = curl_getinfo($curl);
		    curl_close($curl);
		    die('error occured during curl exec. Additioanl info: ' . var_export($info));
		}
		curl_close($curl);

		print $curl_response; 
	?>
	</div>
</div>