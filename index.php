<!--/////////////////////////////
// Written by: Ilan Patao //
// ilan@dangerstudio.com //
//////////////////////////-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Craiglist.org Job Search AutoComplete</title>
<!--Bootstrap CSS-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!--FontAwesome CSS-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row" style="margin-top:100px;">
		<div class="col-lg-12">
		<h2><i class="fa fa-globe" aria-hidden="true"></i>&nbsp; Craiglist.org Job Search AutoComplete Example</h2>
		</div>
		
		<div class="col-md-6">
		<input type="text" id="searchbox" class="form-control" placeholder="Start typing.." />
		<div id="searchdata" style="max-height:350px; overflow-y:scroll;"><ul id="searchresults" style="list-style:none;text-transform:capitalize;"></ul></div>
		</div>
		
		<div class="col-md-6">
		<p>This is a demo of an AutoComplete script for pulling data from Craigslist.org's Job Search and displaying the results in an auto-complete style result box.</p>
		<p>Begin typing your search term in the input box and you will be able to see and get real-time data from Restaurant.com for:</p>
		
			<ul>
				<li>Latest and most recent posted jobs, sorted by most recently posted.</li>
				<li>This search string is hardcoded for <b>New york</b> based results, to modify the state simply change it in the URI of the JS snippet.</li>
			</ul>
			
		<p>The data returned for searches contains:</p>
		
			<ul>
				<li>Job post title</li>
				<li>Job post description</li>
				<li>Job post url</li>
			</ul>
		<p>Json Output:<br />
		<textarea id="jsonresults" class="form-control" rows="5" style="width:100%;box-sizing:border-box;"></textarea></p>
		Script written by: <a href="mailto:ilan@dangerstudio.com">Ilan Patao - ilan@dangerstudio.com</a>	
		</div>
	</div>
</div>

<!-- Jquery JS -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
crossorigin="anonymous"></script>

<!-- Autocomplete JS -->
<script src="autocomplete.js"></script>
</body>
</html>
