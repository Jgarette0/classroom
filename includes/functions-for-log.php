<?php
require_once "../includes/dbh.inc.php";
function getIconHTML($c_id) {
    global $pdo;

    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return '<img src="../images/icons/close.svg" alt="close">';
    } elseif ($status == "vacant") {
        return '<img src="../images/icons/check.svg" alt="check">';
    } else {
        return '<img src="unknown.svg" alt="Unknown Icon">';
    }
}

?>
<?php
require_once "../includes/dbh.inc.php";

function getButton($c_id) {
    global $pdo; 

    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return 'class="button-yes"';
    } elseif ($status == "vacant") {
        return 'class="button-no"';
    } else {
        return '<img src="unknown.svg" alt="Unknown Icon">';
    }
}

?>

<?php
require_once "../includes/dbh.inc.php";

function getMsg($c_id) {
    global $pdo; 

    $query = "SELECT status FROM classroom WHERE c_id = :c_id";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':c_id', $c_id);
    $stmt->execute();

    $status = $stmt->fetchColumn();

    if ($status == "occupied") {
        return 'End Class';
    } elseif ($status == "vacant") {
        return 'Use Classroom';
    } else {
        return '<img src="unknown.svg" alt="Unknown Icon">';
    }
}

?>