<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$student = " 20";

switch ($student) {
  case "90":
    echo "Your grade is A+";
    break;
  case "80":
    echo "Your grade is A";
    break;
  case "70":
    echo "Your grade is B";
    break;
  default:
    echo "Your grade is F";
}
?>
</body>
</html>