<?php

$income_data = json_decode($_POST['json'], true);

$name = trim(implode(' ', $income_data));

$result = "Hello";
if(!empty($name)) {
    $result .= ", $name";
}
$result .= "!";

echo htmlspecialchars($result);