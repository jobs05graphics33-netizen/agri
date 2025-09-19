<?php
$farmers = [
  ["photo" => "images/farmer1.jpg", "name" => "Ramesh Kumar", "location" => "Punjab, India", "crops" => "Wheat, Rice"],
  ["photo" => "images/farmer2.jpg", "name" => "Asha Devi", "location" => "Tamil Nadu, India", "crops" => "Vegetables, Millets"],
  ["photo" => "images/farmer3.jpg", "name" => "Mohammed Iqbal", "location" => "Uttar Pradesh, India", "crops" => "Sugarcane, Maize"],
  ["photo" => "images/farmer4.jpg", "name" => "Sita Ram", "location" => "Maharashtra, India", "crops" => "Cotton, Soybean"]
];

foreach ($farmers as $farmer) {
  echo "<div class='farmer-card'>";
  echo "<img src='{$farmer['photo']}' alt='{$farmer['name']}' class='farmer-photo'>";
  echo "<h3>{$farmer['name']}</h3>";
  echo "<p><strong>Location:</strong> {$farmer['location']}</p>";
  echo "<p class='crops'><strong>Crops:</strong> {$farmer['crops']}</p>";
  echo "</div>";
}
?>
