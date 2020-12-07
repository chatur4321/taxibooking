<?php
session_start();
if($_SESSION['username'] != "ADMIN")
   {
include("customer-dashboard.php");

include("mania.php");

$obj = new connection();

$username = $_SESSION['username'];

?>

<div class="customercontainer">

	<h1 style="text-align: center; margin-top:30px; margin-bottom: 30px;">ALL RIDES</h1>


<div>
<input class="w3-input w3-border w3-padding" type="text" placeholder="Filter by Date" id="myInputDate" onkeyup="myFunctionDate()" style="width: 25%; margin-left: 13%">

<input class="w3-input w3-border w3-padding" type="text" placeholder="Filter by Cab" id="myInputCab" onkeyup="myFunctionCab()" style="width: 25%; margin-left: 2%">
</div>

<hr/>

<table id="userridetable" cellspacing="10" class="styled-table">
<thead>
<tr>

<th onclick="sortTable(1) ">
Ride Id &#x21c5;
</th>

<th onclick="sortTable(1)">
Ride Date &#x21c5;
</th>

<th onclick="sortTable(2)">
Pickup Point &#x21c5;
</th>

<th onclick="sortTable(3)" >
Drop Point &#x21c5;
</th>


<th onclick="sortTable(4)">
Cab Type &#x21c5;
</th>


<th onclick="sortTable(5)">
Total Distance &#x21c5;
</th>


<th onclick="sortTable1(6)">
Total Cost &#x21c5;
</th>


<th onclick="sortTable(7)">
Luggage &#x21c5;
</th>

<!--
<th>
Action
</th> -->
</tr>
</thead>

<?php

$sql = $obj->alluserride($username);

$result = $sql;

if ($result->num_rows > 0) {
// output data of each row
while ($row = $result->fetch_assoc()) {
?>
<tbody>
<tr class="active-row">

<td >
<?php echo $row['ride_id']; ?>
</td>

<td >
<?php echo $row['ride_date']; ?>
</td>

<td >
<?php echo $row['pickup_point']; ?>
</td>

<td >
<?php echo $row['drop_point'];?>
</td>

<td >
<?php echo $row['cab_type'];?>
</td>

<td>
<?php echo $row['total_distance'];?>
<?php  print_r("km"); ?>
</td>

<td>
	&#8377;
<?php echo $row['total_cost'];?>
</td>

<td>
<?php echo $row['luggage'];?>
<?php  print_r("kg"); ?>
</td>

<?php
}
}
else
{
?>
<td colspan="8">
<?php echo "No User is available"; ?>
</td>
<?php
}
?>
</tr>
</tbody>

</table>



<script type="text/javascript">

       // Filter By Date
function myFunctionDate() {
var input, filter, table, tr, td, i;
input = document.getElementById("myInputDate");

filter = input.value.toUpperCase();
table = document.getElementById("userridetable");
tr = table.getElementsByTagName("tr");
for (i = 1; i < tr.length; i++) {
td = tr[i].getElementsByTagName("td")[1];
if (td) {
txtValue = td.textContent || td.innerText;
if (txtValue.toUpperCase().indexOf(filter) > -1) {
tr[i].style.display = "";
} else {
tr[i].style.display = "none";
}
}
}
}
    



 
//Filter By Cab
function myFunctionCab() {
var input, filter, table, tr, td, i;
input = document.getElementById("myInputCab");
filter = input.value.toUpperCase();
table = document.getElementById("userridetable");
tr = table.getElementsByTagName("tr");
for (i = 1; i < tr.length; i++) {
td = tr[i].getElementsByTagName("td")[4];
if (td) {
txtValue = td.textContent || td.innerText;
if (txtValue.toUpperCase().indexOf(filter) > -1) {
tr[i].style.display = "";
} else {
tr[i].style.display = "none";
}
}
}
}



function sortTable(n) {
var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
table = document.getElementById("userridetable");
switching = true;

dir = "asc";

while (switching) {

switching = false;
rows = table.rows;

for (i = 1; i < (rows.length - 1); i++) {

shouldSwitch = false;

x = rows[i].getElementsByTagName("TD")[n];
y = rows[i + 1].getElementsByTagName("TD")[n];

if (dir == "asc") {
if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {

shouldSwitch= true;
break;
}
} else if (dir == "desc") {
if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {

shouldSwitch = true;
break;
}
}
}
if (shouldSwitch) {

rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
switching = true;

switchcount ++;
} else {

if (switchcount == 0 && dir == "asc") {
dir = "desc";
switching = true;
}
}
}
}



function sortTable1(n) {
var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
table = document.getElementById("userridetable");
switching = true;

dir = "asc";

while (switching) {

switching = false;
rows = table.rows;

for (i = 1; i < (rows.length - 1); i++) {

shouldSwitch = false;

x = rows[i].getElementsByTagName("TD")[n];
y = rows[i + 1].getElementsByTagName("TD")[n];

if (dir == "asc") {
if (parseFloat(x.innerHTML) > parseFloat(y.innerHTML)) {

shouldSwitch= true;
break;
}
} else if (dir == "desc") {
if (parseFloat(x.innerHTML) < parseFloat(y.innerHTML)) {

shouldSwitch = true;
break;
}
}
}
if (shouldSwitch) {

rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
switching = true;

switchcount ++;
} else {

if (switchcount == 0 && dir == "asc") {
dir = "desc";
switching = true;
}
}
}
}
</script>

<?php 
}
else
    echo "<script>alert('you cannot go to user pannel')
    window.location='logout.php';
</script>";
    // header("Location:logout.php");
?>


