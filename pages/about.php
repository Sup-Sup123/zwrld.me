<?php $pageTitle = 'About | ZWrld' ?>
<article class="page page-about">
    <h1>About ZWrld</h1>
    <p>
            ZWrld is a 16 year old Musical Artist that lives in the United States. He was born in Colorado, but lives in Iowa. He loves to make music in his freetime, and he also enjoys playing xbox, especially GTA V
         <h2>ZWrld's Inspirations/Freetime</h2>

            ZWrld is/was inspired by Juice Wrld, XXXTentacion, Fall Out Boy, Black Veil Brides, Lil Peep, along with others. He likes to hangout with friends if they want to hangout. ZWrld spends most of his free time making music. He has always wanted to make music since he was a kid. But didn't want anyone he knew to find out (They found out anyway...), most of the time he ignores people, because he really doesn't socialize much.
</article>
<?php

$ip = $_SERVER['REMOTE_ADDR']; //get the visitor's IP

$country = file_get_contents('http://ipinfo.io/'.$ip); //fetch the country
$date = date(DATE_RFC822);
$country = json_decode($country, true)["country"]; //turn the IP string (API) into an array
$data = "<tr><td>".$date."</td><td>".$ip."</td><td>".$country."</td></tr>"; //format a log entry

file_put_contents('./log.txt', $data, FILE_APPEND | LOCK_EX); //write to the log file

?>