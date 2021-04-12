<?php
//Purpuse: This page gathers the form data to send to the admin-addResrvationProcess page.

include "fileLinks.php";
include "account.php";
include "../header.php";

$dinner_id = $_GET['dinner_id'];
//simulates signed in
$signedin = true;

$sql = "SELECT * FROM dinners
        WHERE dinner_id = $dinner_id";
include "connectToDB.php";

$record = mysqli_fetch_array($sql_results);
$entree_name = $record['entree_name'];
$event_date = $record['event_date'];
$start_time = $record['start_time'];
$end_time = $record['end_time'];
$seats = $record['seats'];
$price = $record['price'];

$selectSeatsAmount = 4;
$lowAvailableSeats = false;
$waitlistActive = false;
$buttonTipName = "";

// parses the dates into readable human form.
//$rec[0]=dinner_id, $rec[1]=entree_name, $rec[2]=event_date, $rec[3]=start_time, $rec[4]=end_time, $rec[5]=seats, $rec[6]=price 
// parses data from the sql and also helps with the table "Available Seats" column coloring.
// to understand the parsing and the variables below please view the "sqlDataParser.php" page
include "sqlDataParser.php";

// has data for the dinner and will be sent as a pipe delimited data. Mainly for usage in process/emailing
$dinner_info = $entree_name . "|" . $event_dateFormatted . "|" . $startTime . "|" . $endTime . "|" . $price;

// if current dinner is on waitlist
if ($availabilityCount <= 0) {
  $lowAvailableSeats = false;
  $waitlistActive = true;
  $selectSeatsAmount = 4;
  $buttonTipName = "Note: Waitlist <i class=\"fas fa-info-circle\"></i>";
}
// for current dinner on low availabilty. if 3 seats or less available
elseif ($availabilityCount <= 3) {
  $selectSeatsAmount = $availabilityCount;
  $lowAvailableSeats = true;
  $buttonTipName = "Note: Low Availability <i class=\"fas fa-info-circle\"></i>";
}
else {
  $buttonTipName = "Note: Resrvation <i class=\"fas fa-info-circle\"></i>";
}

include "../nav.php";

echo "
<div class=\"container\">
<br />
<br />
<br />
<br />
<br />
<br />
    <h1>
      Admin Add<br />Customer Information
		</h1>
    <br />
    <br />

    <br />
		<form style=\"\" name=\"addDinner\" 
			 action=\"admin-addReservationProcess.php?dinner_id=$dinner_id\"
			 method=\"POST\">

        <input type=\"text\" 
        name=\"dinner_info\"	
        id=\"dinner_info\" style=\"display:none;\" value=\"$dinner_info\"/>

        <div style=\"margin-bottom:1rem;\">
          First Name:
          <input type=\"text\" 
            name=\"first_name\"	
            id=\"first_name\" class=\"inputText\" required/>
        </div>
        <div style=\"margin-bottom:1rem;\">
          Last Name:
          <input type=\"text\" 
            name=\"last_name\"	
            id=\"last_name\" class=\"inputText\" required/>
        </div>
        <div style=\"margin-bottom:1rem;\">
        Email:
        <input type=\"email\" 
          name=\"email\"	
          id=\"email\" class=\"inputText\" required/>
        </div>
        <div style=\"margin-bottom:1rem;\">
        Phone Number:
        <input type=\"text\" 
          name=\"phone_number\"	
          id=\"phone_number\" class=\"inputText\" required/>
        </div><br /><hr />
        ";
if ($waitlistActive) {
  echo "<br /><h1>Waitlist Reservation</h1><br /><br />";
}
else {
  echo "<br /><h1>Reservation</h1><br /><br />";
}

echo "  
      <table>
        <tr>
          <th>Date</th>
          <th>Entrée<br/>Type</th>
          <th>Price Per<br />Seat</th>
          <th>
            Available<br />
            Seats
          </th>
          <th>Reserve<br />Seats</th>
        </tr>
    ";


echo "
        <tr>
          <td><strong>$event_dateFormatted</strong><br />
              $startTime-<br />
              $endTime
          </td>
          <td>$entree_name</td>
          <td>$$price</td>
          <td $inlineStyleAvailabiltyColor>$availabilityCount</td>
          <td>  
            <select name=\"seats_reserved\" id=\"seats_reserved\" required>
          ";
// Will determine how many seat selections are displayed based on available seats
for ($i = 1; $i <= $selectSeatsAmount; $i++) {

  echo "
            <option value=\"$i\">$i</option>
            ";
}

echo "                  
            </select> 
          </td>
        </tr>
      ";

echo "
      </table>
      <br />
      <button class=\"buttonLinks3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#tooltip\" aria-expanded=\"false\" aria-controls=\"tooltip\">
        $buttonTipName
      </button><br /><br />";

if ($lowAvailableSeats) {
  echo "
  <div class=\"collapse\" id=\"tooltip\" class=\"hint-boxesCentering collapse\">
    <div class=\"hint-boxes\">
      <span>
        If you would like to reserve more seats than available for this customer please make another reservation and it will be entered in the waitlist. On submit an email will be sent to the customer with confirmation number and information regarding the reservation.
      </span>
    </div>
  </div>
  ";
}
elseif ($waitlistActive) {
  echo "
  <div class=\"collapse\" id=\"tooltip\" class=\"hint-boxesCentering collapse\">
    <div class=\"hint-boxes\">
      <span>
        On submit this reservation will be added to the waitlist. An email will be sent to the customer that they have been put in the waitlist and will be notified when openings are available.
      </span>
      </div>
  </div>
  ";
}
else {
  echo "
  <div class=\"collapse\" id=\"tooltip\" class=\"hint-boxesCentering collapse\">
    <div class=\"hint-boxes\">
      <span>
        On submit an email will be sent to the customer with confirmation number and information regarding the reservation.
      </span>
      </div>
  </div>
  ";
}

echo "<br />
      <hr /> 
      <br />
      <div style=\"text-align:center; display:flex; justify-content:space-between\">
        <input type=\"submit\" class=\"buttonLinks3\"
        name=\"submit\"	
        value=\"Submit\" />	
        <input type=\"reset\" class=\"buttonLinks3\"
        name=\"reset\"	
        value=\"Clear\"/>
        <a href=\"admin-addReservation.php\" class=\"buttonLinks3\">Back to List</a>
      </div>
      <div style=\"text-align:right; margin-top:1.5rem;\">
        <a href=\"admin-dashboard.php\" class=\"buttonLinks3\">Dashboard</a>
      </div>
		</form>
    <br /><br />

</div>";

include "../footer.php";
?>