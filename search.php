<?php
if (isset($_GET['query'])) {
    $query = htmlspecialchars($_GET['query']);
    echo "<h2 style='color:white; background:#121212; padding:20px;'>You searched for: $query</h2>";
    // Here you can add DB connection & search logic later
}
?>
