<?php
if (isset($_POST['cta_btn'])) {
  // You can later redirect to products page, community, or subscription
  header("Location: products.php");
  exit();
}
?>
