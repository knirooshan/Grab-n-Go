<?php

include 'dbConfig.php';

// Define the SQL query
$sql = "SELECT * FROM memberships WHERE status = 'active'";

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {

        $membershipId = $row['membership_id'];
        $planId = $row['plan_id'];
        $userID = $row['user_id'];
        $startDate = $row['start_date'];
        $endDate = $row['end_date'];
        $renew = $row['auto_renew'];

        if($endDate == date("Y-m-d")){
            updateStatus($membershipId);
        }

    }
    
} else {
    echo "No active memberships found.";
}

function updateStatus($id){

    include 'dbConfig.php';

    // Define the SQL query
    $statusSql = "UPDATE memberships SET status = 'inactive' WHERE membership_id = $id";

    // Execute the SQL query
    if ($conn->query($statusSql) === TRUE) {
        return true;
    } else {
        return false;
    }

}