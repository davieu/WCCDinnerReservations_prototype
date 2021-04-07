<?php
include "fileLinks.php";
include "../header.php";
//simulates signed in
$signedin = true;
include "../nav.php";

echo "<div class=\"container\"><br />
<br />
<br />
<br />
<br />
<br />";
$stopMonth = 13;
include "../dateGenerator.php";
echo "
  <br />
  <h1>Admin Edit Dinner</h1>
  <br />
  <br />
  <p><strong>Select a meal to edit</strong></p>
";

include "account.php";
// query for event dates in ordered form (ascending)
$sql = "SELECT * FROM dinners
        ORDER BY event_date";
include "connectToDB.php";

echo "
<table>
  <tr>
    <th>Date</th>
    <th>
      Seats
    </th>
    <th>
      Price
    </th>
    <th>Total <br />Reserved</th>
    <th>Entrée<br/>Type</th>
  </tr>
";

while ($record = mysqli_fetch_array($sql_results)) {
  // formats the SQL data start/end time into hh:mm AM/PM
  include "sqlDataParser.php";
  // creates the table rows with data from the query
  echo "
		<tr href=\"#\">
			<td><strong>$event_dateFormatted</strong><br />
          $startTime-<br />
          $endTime</td>
			<td>$record[5]</td>
      <td>$$record[6]</td>
      <td>$totalReserved</td>
      <td><a href=\"admin-editOneDinner.php?dinner_id=$record[0]\" class=\"buttonLinks3 tableSelect\">$record[1]</a></td>
		</tr>
	";
}

echo "
    </table><br /><br />
    <a href=\"admin-dashboard.php\" class=\"buttonLinks3\" >Dashboard</a>
  ";
echo "</div> <br /><br /><br />";

include "../footer.php";
?>