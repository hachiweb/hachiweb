<?php
$link = mysqli_connect("shareddb1e.hosting.stackcp.net","eventmanagement-3233726a","pratik0001","eventmanagement-3233726a");
	if(mysqli_connect_error())
	{
		die("There is some error in connecting to database");
	}
$searchRes = $_POST['search'];
$query = "SELECT `registrar`,`event-name`,`location`,`event-date` FROM `event-reg` WHERE `event-name`='$searchRes'";
$result=mysqli_query($link,$query);
if(!$result)
echo mysqli_connect_errno();

echo "<table border='1'>
<tr>
<th>Registrar</th>
<th>Event-name</th>
<th>Venue</th>
<th>Event-Date</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['registrar'] . "</td>";
echo "<td>" . $row['event-name'] . "</td>";
echo "<td>" . $row['location'] . "</td>";
echo "<td>" . $row['event-date'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($link);
?>