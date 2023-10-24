<?php
require_once '../includes/dbh.inc.php'; // Include your database connection code

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Retrieve the classroomId from the POST data
        $classroomId = $_POST['classroomId'];

        // Fetch the current status from the database
        $stmt = $pdo->prepare("SELECT status FROM classroom WHERE c_id = :classroomId");
        $stmt->bindParam(':classroomId', $classroomId, PDO::PARAM_INT);
        $stmt->execute();

        $currentStatus = $stmt->fetchColumn();

        // Toggle the status between "vacant" and "occupied"
        $newStatus = ($currentStatus === 'vacant') ? 'occupied' : 'vacant';

        // Prepare and execute the SQL update query
        $stmt = $pdo->prepare("UPDATE classroom SET status = :newStatus WHERE c_id = :classroomId");
        $stmt->bindParam(':newStatus', $newStatus, PDO::PARAM_STR);
        $stmt->bindParam(':classroomId', $classroomId, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo 'Status updated successfully.';
        } else {
            echo 'Error updating status.';
        }

    } catch (PDOException $e) {
        echo 'Error updating status.';
    }
} else {
    // Handle invalid requests
    echo 'Invalid request.';
}
?>
