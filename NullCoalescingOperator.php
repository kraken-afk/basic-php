<?php

/*============ Null Coalescing Operator ============*/
// checking if the data exist or not:

$data = [];
$action = $data["action"] ?? "nothing";

echo $action;