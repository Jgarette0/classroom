<?php
require_once "includes/dbh.inc.php";
function getColor($c_id) 
{
    global $pdo; 
    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();
    $status = $stmt->fetchColumn();
    if ($status == "occupied") 
        {
            return 'class="red"';
        } 
    elseif ($status == "vacant") 
        {
        return 'class="green"';
        } 
    else 
        {
            return 'class="gray"';
        }
}
?>
