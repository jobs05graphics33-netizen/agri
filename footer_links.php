<?php
// This can be used to dynamically generate quick links or contact info
$links = [
  "Home" => "index.php",
  "Products" => "products.php",
  "Categories" => "categories.php",
  "Contact" => "contact.php"
];

echo "<ul>";
foreach ($links as $name => $url) {
    echo "<li><a href='{$url}'>{$name}</a></li>";
}
echo "</ul>";
?>
