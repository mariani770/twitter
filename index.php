<?php
require_once 'mariani770/twitter.php';

define ('CONSUMER_KEY','uKlT1Jt2G8ycGYOHxtsw');
define ('CONSUMER_SECRET','vVIlja07X7ckzmjhJwHEwBOYE6p2LMQ1r2zMyaDw');
define ('OAUTH_CALLBACK','https://github.com/mariani770/twitter/callback.php');

$twitter = new twitter(CONSUMER_KEY,CONSUMER_SECRET);
$twitter_temp = $twitter-> getRequestToken(OAUTH_CALLBACK);

$twitter_url = $twitter-> getAutorizeURL ($twitter_temp["cauth_token"]);

echo $twitter_url