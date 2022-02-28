<?php

define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'signup');


define('GOOGLE_CLIENT_ID', '186348130455-nfu62ik7emaeh232mq3qp5c0b18fbq0t.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar');
define('REDIRECT_URI', 'http://localhost/signup/google_calender_event_sync.php');

$googleOauthURL='https://accounts.google.com/o/oauth2/auth?scope=' .urlencode(GOOGLE_OAUTH_SCOPE).'&redirect_uri='.REDIRECT_URI.'&response_type=code&client_id='.GOOGLE_CLIENT_ID.'&access_type=online';


// if(session_id()) session_start();