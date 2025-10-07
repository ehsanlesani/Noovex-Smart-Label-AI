<?php
// Sample backend index
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $service = $_POST["service"] ?? "unknown";
    echo "Service request received for: " . htmlspecialchars($service);
}
?>

