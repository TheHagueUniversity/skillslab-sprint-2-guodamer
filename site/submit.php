<?php

$information = "no message";
if($_POST["information"] && stripslashes($_POST["information"]) != " Your information, order and comments ... " ) {
    $to      = 'guoda.merkyte@gmail.com';
    $subject = 'Submitted from UxGuru.lt, '.date("Y-m-d H:i:s");
    $message = stripslashes($_POST["information"]);
    $headers = 'From: uxrult@uxguru.lt' . "\r\n" .
    'Reply-To: uxrult@uxguru.lt' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
}

echo '<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="1;url=http://uxguru.lt/">
    <script type="text/javascript">
        window.location.href = "http://uxguru.lt/"
    </script>
    <title>www.uxguru.lt</title>
</head>
<body> <a href="http://uxguru.lt/">http://uxguru.lt/</a> </body>
</html>';

?>