<?php
// Later, connect to DB to fetch dynamically
$products = [
  ["name" => "Organic Tomatoes", "price" => "₹120 / kg", "image" => "tomatoes.jpg"],
  ["name" => "Fresh Mangoes", "price" => "₹250 / dozen", "image" => "mangoes.jpg"],
  ["name" => "Basmati Rice", "price" => "₹90 / kg", "image" => "rice.jpg"],
  ["name" => "Wheat Flour", "price" => "₹45 / kg", "image" => "flour.jpg"]
];

foreach ($products as $product) {
  echo "<div class='product-card'>";
  echo "<img src='{$product['image']}' alt='{$product['name']}'>";
  echo "<h3>{$product['name']}</h3>";
  echo "<p>{$product['price']}</p>";
  echo "<button onclick=\"addToCart('{$product['name']}')\">Add to Cart</button>";
  echo "</div>";
}
?>
