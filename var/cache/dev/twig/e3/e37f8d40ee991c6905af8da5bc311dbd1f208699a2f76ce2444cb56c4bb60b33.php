<?php

/* youtube/query.html.twig */
class __TwigTemplate_a8c532416f6ef887c022cc16b45d31523938bea4e061b1b1ae465a42ec7884b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_800c7d702bac63e53759e80b872660c74568b7741a8d1c21d679cbc42fec669d = $this->env->getExtension("native_profiler");
        $__internal_800c7d702bac63e53759e80b872660c74568b7741a8d1c21d679cbc42fec669d->enter($__internal_800c7d702bac63e53759e80b872660c74568b7741a8d1c21d679cbc42fec669d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "youtube/query.html.twig"));

        // line 1
        echo "<html>
<head>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
<script type=\"text/javascript\">

var apiKey = 'AIzaSyBoXxrMGeFvaoxr8FO_XLApUOW-6mFUQRw';

// Load youtube API when client is loaded
function handleClientLoad() {
\tgapi.client.setApiKey(apiKey);
\tgapi.client.load('youtube', 'v3').then(handleAPIloaded);
}

// Allow query button
function handleAPIloaded() {
\t\$('#query-button').attr('disabled', false);
}

// Return HTML from an item retrieved from the youtube.playlistItems.list API
function renderYoutubeVideo(item) {
\t//console.log(item);
\treturn '<div style=\"margin-bottom:10px;min-height:90px\"><div><a href=\"https://www.youtube.com/watch?v=' + item.snippet.resourceId.videoId + '\" target=\"_blank\"><img style=\"float:left\" src=\"' + item.snippet.thumbnails.default.url + '\"></a></div><span><strong>' + item.snippet.title + '</strong></span>, ' + item.snippet.publishedAt  + '<p>' + item.snippet.description  + '</p></div>';\t
}

// Document ready
\$(function() {
\t// When form is submited
\t\$( \"#youtubequery\" ).submit(function( event ) {
\t\tevent.preventDefault();
\t\t\$('#search-container').html('');\t\t
\t\t
\t\t// Looking for the username
\t\tgapi.client.youtube.channels.list({
\t\t\tforUsername: \$(\"#youtubequery input[id=username]\").val(),
\t\t\tmaxResults: 1,
    \t\t\tpart: 'contentDetails'
 \t\t}).execute(function(responseChannels) {
\t\t\t//console.log(responseChannels);

\t\t\t// If username not found display an error message
\t\t\tif(responseChannels.items.length == 0) {
\t\t\t\t\$('#search-container').append(\"<p>Sorry, youtube user can't be found.</p>\");
\t\t\t} else {
\t\t\t\t// Looking for the 10 last reccord in the user \"upload playlist\"
\t\t\t\tgapi.client.youtube.playlistItems.list({
\t\t\t\t\tplaylistId: responseChannels.items[0].contentDetails.relatedPlaylists.uploads,
\t\t\t\t\tmaxResults: 10,
\t\t\t\t\tpart: 'snippet'\t
\t\t\t\t}).execute(function(responsePlaylistItems) {
\t\t\t\t\t// console.log(responsePlaylistItems);
\t\t\t
\t\t\t\t\t// for each item (video), render HTML and append in result div
\t\t\t\t\t\$(responsePlaylistItems.items).each(function( index ) {
\t\t\t\t\t\thtml = renderYoutubeVideo(this);\t
\t\t\t\t\t\t\$('#search-container').append(html);
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t});
\t\t

\t});
});
</script>
<script src=\"https://apis.google.com/js/client.js?onload=handleClientLoad\"></script>

</head>
<body>
\t<h1>Youtube querying app</h1>
\t<p>Display the 10 last published videos of a youtube user.</p>
\t<form id=\"youtubequery\" method=\"POST\" action=\"\">
\t\t<label for=\"username\">Please input a <strong>youtube username</strong> (JamesNintendoNerd, screenjunkies...) :</label>
\t\t<input id=\"username\" name=\"username\" type=\"text\" style=\"width: 400px\">
\t\t<button id=\"query-button\" disabled=\"disabled\">Query</button>
\t</form>

\t<div id=\"search-container\">
\t\t
\t</div>
</body>
</html>
";
        
        $__internal_800c7d702bac63e53759e80b872660c74568b7741a8d1c21d679cbc42fec669d->leave($__internal_800c7d702bac63e53759e80b872660c74568b7741a8d1c21d679cbc42fec669d_prof);

    }

    public function getTemplateName()
    {
        return "youtube/query.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>*/
/* <script type="text/javascript">*/
/* */
/* var apiKey = 'AIzaSyBoXxrMGeFvaoxr8FO_XLApUOW-6mFUQRw';*/
/* */
/* // Load youtube API when client is loaded*/
/* function handleClientLoad() {*/
/* 	gapi.client.setApiKey(apiKey);*/
/* 	gapi.client.load('youtube', 'v3').then(handleAPIloaded);*/
/* }*/
/* */
/* // Allow query button*/
/* function handleAPIloaded() {*/
/* 	$('#query-button').attr('disabled', false);*/
/* }*/
/* */
/* // Return HTML from an item retrieved from the youtube.playlistItems.list API*/
/* function renderYoutubeVideo(item) {*/
/* 	//console.log(item);*/
/* 	return '<div style="margin-bottom:10px;min-height:90px"><div><a href="https://www.youtube.com/watch?v=' + item.snippet.resourceId.videoId + '" target="_blank"><img style="float:left" src="' + item.snippet.thumbnails.default.url + '"></a></div><span><strong>' + item.snippet.title + '</strong></span>, ' + item.snippet.publishedAt  + '<p>' + item.snippet.description  + '</p></div>';	*/
/* }*/
/* */
/* // Document ready*/
/* $(function() {*/
/* 	// When form is submited*/
/* 	$( "#youtubequery" ).submit(function( event ) {*/
/* 		event.preventDefault();*/
/* 		$('#search-container').html('');		*/
/* 		*/
/* 		// Looking for the username*/
/* 		gapi.client.youtube.channels.list({*/
/* 			forUsername: $("#youtubequery input[id=username]").val(),*/
/* 			maxResults: 1,*/
/*     			part: 'contentDetails'*/
/*  		}).execute(function(responseChannels) {*/
/* 			//console.log(responseChannels);*/
/* */
/* 			// If username not found display an error message*/
/* 			if(responseChannels.items.length == 0) {*/
/* 				$('#search-container').append("<p>Sorry, youtube user can't be found.</p>");*/
/* 			} else {*/
/* 				// Looking for the 10 last reccord in the user "upload playlist"*/
/* 				gapi.client.youtube.playlistItems.list({*/
/* 					playlistId: responseChannels.items[0].contentDetails.relatedPlaylists.uploads,*/
/* 					maxResults: 10,*/
/* 					part: 'snippet'	*/
/* 				}).execute(function(responsePlaylistItems) {*/
/* 					// console.log(responsePlaylistItems);*/
/* 			*/
/* 					// for each item (video), render HTML and append in result div*/
/* 					$(responsePlaylistItems.items).each(function( index ) {*/
/* 						html = renderYoutubeVideo(this);	*/
/* 						$('#search-container').append(html);*/
/* 					});*/
/* 				});*/
/* 			}*/
/* 		});*/
/* 		*/
/* */
/* 	});*/
/* });*/
/* </script>*/
/* <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>*/
/* */
/* </head>*/
/* <body>*/
/* 	<h1>Youtube querying app</h1>*/
/* 	<p>Display the 10 last published videos of a youtube user.</p>*/
/* 	<form id="youtubequery" method="POST" action="">*/
/* 		<label for="username">Please input a <strong>youtube username</strong> (JamesNintendoNerd, screenjunkies...) :</label>*/
/* 		<input id="username" name="username" type="text" style="width: 400px">*/
/* 		<button id="query-button" disabled="disabled">Query</button>*/
/* 	</form>*/
/* */
/* 	<div id="search-container">*/
/* 		*/
/* 	</div>*/
/* </body>*/
/* </html>*/
/* */
