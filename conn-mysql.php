<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "learn_php", 3308);

$query =
"UPDATE student
SET major = 'Engineer'
WHERE id = 1;";

mysqli_query($conn, $query);

$result = mysqli_query($conn, "SELECT * FROM student");

if (!$result) {
  echo mysqli_error($conn);
}

var_dump(mysqli_fetch_row($result));
