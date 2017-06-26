/////////////////////////////
// Written by: Ilan Patao //
// ilan@dangerstudio.com //
//////////////////////////

jQuery('#searchbox').on('input', function() {
// Clear the search results for a new search
$("#searchresults").empty();
// Store search term in variable
var searchterm = $('#searchbox').val();
// Define the search URI (edit new locations in the inurl= parameter)
var url = 'https://www.googleapis.com/customsearch/v1element?key=AIzaSyCVAXiUzRYsML1Pv6RwSG1gunmMikTzQqY&rsz=20&num=20&hl=en&prettyPrint=false&source=gcsc&gss=.com&sig=a33a40bc61f44fca1e08df500aeda773&cx=partner-pub-9163346843638859:4631961277&q=' + searchterm + '%20%20%22jobs%22%20-inurl%3Asearch&cse_tok=AHKYotWVmvV1wohA3g8oNFAm_6cK:1495660148313&sort=date&as_oq=inurl%3Anewyork%7Cnewjersey%7Clongisland%7Ccnj%7Cjerseyshore';
		// Request the data
		$.get(url, function(cldata) {
		// Store the data in a new variable
		var data = cldata;
		// Go through the data and return results back to the searchdata div
		$.each(data.results, function(i) {
		// Store the data in seperate variables
		var content = data.results[i].content;
		var title = data.results[i].titleNoFormatting;
		var url = data.results[i].url;
		var extra = data.results[i].richSnippet.metatags.ogDescription;
		//Append results to the list
		$("#searchresults").append('<li style="margin:10px;padding:2px;"><a href="' + url + '" target="_new"><h5><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>&nbsp; ' + title + '</a></h5>' + extra + '</li>');
		});
		// Output Json Preview
		var json = JSON.stringify(cldata);
		$("#jsonresults").val(json);
	});
});