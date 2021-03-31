<?php $pageTitle = 'Home | ZWrld' ?>
<article class="page page-home">
    <h1>Welcome to ZWrld's Official Website!</h1>

<?php

$ip = $_SERVER['REMOTE_ADDR']; //get the visitor's IP

$country = file_get_contents('http://ipinfo.io/'.$ip); //fetch the country
$date = date(DATE_RFC822);
$country = json_decode($country, true)["country"]; //turn the IP string (API) into an array
$data = "<tr><td>".$date."</td><td>".$ip."</td><td>".$country."</td></tr>"; //format a log entry

file_put_contents('./log.txt', $data, FILE_APPEND | LOCK_EX); //write to the log file

?>

    <p>ZWrld is a Musical Artist and has a discord server which you can join now!!</p>

    <h2>ZWrld's Discord</h2>

    <p>Just incase you don't know how to join using the widget below... Heres the discord invite for the people that don't know how to use the widget (I am not calling you dumb...).</p>

    <p>
    <a href=\\"https://discord.gg/8a5eVBzZmY">ZWrld's Official Discord Server</a>
    </p>
    <iframe src="https://discord.com/widget?id=783127889334894632&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>

</article>