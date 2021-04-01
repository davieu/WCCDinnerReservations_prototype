<?php
// temp variable for PROTO. For the dashboard. Everything else is live from database
$availableSeats = $record['seats'];
$availabilityCount = $record['seats'] - $record['total_seats_reserved'];
$waitlist = $record['seats'] - $record['total_seats_reserved'];
;
$inlineStyleAvailabiltyColor;
$totalReserved = $record['total_seats_reserved'];
$test = $record['seats'];
$waitlisted = false;


if ($availabilityCount > 0) {
  $waitlisted = false;
  $inlineStyleAvailabiltyColor = 'style="background-color: rgb(148, 226, 148)"';

}
elseif ($availabilityCount == 0) {
  $waitlisted = true;
  $availabilityCount = 'Waitlist:<br/ > ' . $availabilityCount;
  $inlineStyleAvailabiltyColor = 'style="background-color: rgb(255, 244, 146)"';
}
// if availability these will produce the computed css or html outputs
else {
  $waitlisted = true;
  $availabilityCount = 'Waitlist:<br/ > ' . substr(strval($availabilityCount), 1);
  $inlineStyleAvailabiltyColor = 'style="background-color: rgb(255, 244, 146)"';
}

$event_dateArray = explode('-', $record[2]);
$event_dateYear = $event_dateArray[0];
$event_dateMonth = $event_dateArray[1];
$event_dateDay = $event_dateArray[2];
$event_dateFormatted = $event_dateMonth . "-" . $event_dateDay . "-" . $event_dateYear;

// formats the SQL data start/end time into hh:mm AM/PM
$startTime = date_format(date_create($record[3]), "h:i A");
$endTime = date_format(date_create($record[4]), "h:i A");
?>