<?php
if($_POST["Message"]) {
mail("orionstarfallen@gmail.com", "Here is the sample subject line",
$_POST["Insert Your Message"]. "From: admin@transition-ni.com");
}
?>