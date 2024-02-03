<?php
include("conn.php");
$result = $conn->query("SELECT image FROM item ORDER BY Item_Id DESC");

// Check if there are images in the result set
if ($result->num_rows > 0) {
    echo '<div class="gallery">';
    // Loop through each row in the result set
    while ($row = $result->fetch_assoc()) {
        // Display the image using the stored file path
        echo '<img src="picture/' . $row['image'] . '" />';
    }
    echo '</div>';
} else {
    // Display a message if no images are found
    echo '<p class="status error">Image(s) not found...</p>';
}

// Close the database connection
$conn->close();
?>