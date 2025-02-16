<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP App with MySQL</title>
</head>
<body>
    <h1>Welcome to My PHP App</h1>
    <?php
    $query = 'SELECT NOW() as current_time';
    $result = $conn->query($query);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<p>Current Server Time: ' . $row['current_time'] . '</p>';
    }
    ?>
</body>
</html>
