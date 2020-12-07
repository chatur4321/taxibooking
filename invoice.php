<?php
session_start();

include("header.php");

include("mania.php");

$obj = new connection();

$id = $_GET['id'];

// echo $id;

?>

<div class="flex-col center">

<div class="container flex-col">

<div class="inner-container flex-col">
<div class="title flex-row center">
<h1 style="text-align: center; float: left;">CEDCAB</h1>    
<h2 style="text-align: center;">Invoice</h2>
</div>
<table style="width: 100%; text-align: center; background-color: yellow;margin-top: 50px;" cellspacing="50px">
<thead>
<tr class="row-heading">
<th class="item-desc"> Pick </th>
<th> Drop </th>
<th> Luggage </th>
<th> User Name </th>
<th> Total </th>
</tr>
</thead>


<?php


$sql = $obj-> invoice($id);

$result = $sql;

if ($result->num_rows > 0) {

while ($row = $result->fetch_assoc()) {
?>
<tr class="row-data">
<td class="item-desc"> <?php echo $row['pickup_point']; ?> </td>
<td class="item-price"> <?php echo $row['drop_point'];?> </td>
<td class="item-quantity"> <?php echo $row['luggage'];?> </td>
<td class="item-total"> <?php echo $row['customer_user_name'];?> </td>
<td class="item-total"> <?php echo $row['total_cost'];?> </td>
</tr>

<?php
}

}
?>
</table>

<h3 style="width: 15%;padding:20px;text-align: center; margin-top: 5%;margin-left:40%;background-color: red;: white;">Pay By Cash</h3>
<h3 style="width: 15%;padding:20px;text-align: center; margin-top: 5%;margin-left:40%;background-color: red;: white;"></h3>

</div>
</div>
