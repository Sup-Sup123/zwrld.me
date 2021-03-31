<?php $pageTitle = 'Tour | ZWrld' ?>
<article class="page page-tour">
    <h1>Tour | ZWrld</h1>

  <?php

$ip = $_SERVER['REMOTE_ADDR']; //get the visitor's IP

$country = file_get_contents('http://ipinfo.io/'.$ip); //fetch the country
$date = date(DATE_RFC822);
$country = json_decode($country, true)["country"]; //turn the IP string (API) into an array
$data = "<tr><td>".$date."</td><td>".$ip."</td><td>".$country."</td></tr>"; //format a log entry

file_put_contents('./log.txt', $data, FILE_APPEND | LOCK_EX); //write to the log file

?>

    <p>This is where the upcoming events/tour dates for ZWrld are listed
    <h2>ZWrld's Upcoming Events/Tours</h2>
              <div>
           <p>
           Date: TBD 
           City: TBD 
           Time: TBD

             <div>
            <p> 
            Date: TBD 
            City: TBD 
            Time: TBD
        </div>
        
          <div>
           <p>
           Date: TBD 
           City: TBD 
           Time: TBD
        </div>

          <div>
           Date: TBD
           City: TBD
           Time: TBD
        </div>

          <div>
            <p>
            Date: TBD 
            City: TBD
            Time: TBD</p>
        </div>
        </div>
</article>