<?php

include('connect.inc');

$sql = "INSERT INTO members (id, usename, password)
VALUES ('42', 'nikol', '882')";

if (mysqli_query($conn, $sql)) {
    $last_id = mysqli_insert_id($conn);
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>