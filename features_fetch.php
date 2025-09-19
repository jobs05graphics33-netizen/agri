<?php
$features = [
  ["icon" => "🚜", "title" => "Direct from Farmers", "desc" => "We connect you directly with trusted farmers for fresh produce."],
  ["icon" => "🌱", "title" => "Organic & Fresh", "desc" => "Only natural and chemical-free agricultural products."],
  ["icon" => "⚡", "title" => "Fast Delivery", "desc" => "Get your farm-fresh items delivered quickly and safely."],
  ["icon" => "💰", "title" => "Affordable Prices", "desc" => "Fair pricing ensures both farmers and customers benefit."]
];

foreach ($features as $feature) {
  echo "<div class='feature-card'>";
  echo "<div class='feature-icon'>{$feature['icon']}</div>";
  echo "<h3>{$feature['title']}</h3>";
  echo "<p>{$feature['desc']}</p>";
  echo "</div>";
}
?>
