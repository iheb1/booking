<?php require_once("../../../../resources/config.php");

if(isset($_GET['id'])) {


$query = query("DELETE FROM orders WHERE order_id = " . escape_string($_GET['id']) . " ");
confirm($query);


set_message("Order Deleted");
redirect("../../../admin/index.php?orders");


} else {

redirect("../../../admin/index.php?orders");


}






 ?>