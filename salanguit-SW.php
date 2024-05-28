<?php
$person = [
    "name" => "Kurt Salanguit",
    "age" => 30,
    "city" => "Pasig"
];

echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<title>Person Details</title>";
echo "<style>";
echo "body { font-family: Arial, sans-serif; }";
echo "h1 { color: #333; }";
echo "p { margin-bottom: 10px; }";
echo "</style>";
echo "</head>";
echo "<body>";

echo "<h1>Person Details</h1>";
echo "<p><strong>Name:</strong> {$person['name']}</p>";
echo "<p><strong>Age:</strong> {$person['age']}</p>";
echo "<p><strong>City:</strong> {$person['city']}</p>";

$num1 = 10;
$num2 = 5;
$result = $num1 + $num2;
echo "<h2>Arithmetic Operation</h2>";
echo "<p>The sum of $num1 and $num2 is: $result</p>";

echo "<h2>Result</h2>";
echo "<p>";
echo ($result > 15) ? "Greater than 15" : "Less than or equal to 15";
echo "</p>";

function greet($name) {
    return "Hello, $name!";
}

echo "<h2>Greeting</h2>";
echo "<p>" . greet("Bob") . "</p>";

$numbers = [4, 2, 8, 5, 1];
echo "<h2>Maximum Number</h2>";
echo "<p>Max Number: " . max($numbers) . "</p>";

$car = [
    "brand" => "Toyota",
    "model" => "Camry",
    "year" => 2020
];

echo "<h2>Car Details</h2>";
foreach ($car as $key => $value) {
    echo "<p><strong>$key:</strong> $value</p>";
}

echo "</body>";
echo "</html>";
?>
