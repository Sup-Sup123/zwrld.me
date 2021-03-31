<?php $pageTitle = 'Songs | ZWrld' ?>
<article class="page page-songs">
    <h1>This is ZWrld's Official Linktree!</h1>

    <?php

$ip = $_SERVER['REMOTE_ADDR']; //get the visitor's IP

$country = file_get_contents('http://ipinfo.io/'.$ip); //fetch the country
$date = date(DATE_RFC822);
$country = json_decode($country, true)["country"]; //turn the IP string (API) into an array
$data = "<tr><td>".$date."</td><td>".$ip."</td><td>".$country."</td></tr>"; //format a log entry

file_put_contents('./log.txt', $data, FILE_APPEND | LOCK_EX); //write to the log file

?>

    <p>Linktree is basically a link that provides a list of links that the creator chooses. </p>

    <h2>ZWrld's Linktree</h2>

    <p>This link shows you all the releases ZWrld has. (Please Note: Not all albums and songs are on the Linktree yet so be patient.)</p>

    <p>
    <a href="https://linktr.ee/ZWrld">ZWrld's Official Linktree!</a>
    </p>

</article>