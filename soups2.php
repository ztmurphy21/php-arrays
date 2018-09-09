<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>No Soup for You!</title>
</head>
<body>
    <h1>Mmmm...soups</h1>
<?php

//make soup array
    $soups = ['Monday' => 'Clam Chowder', 'Tuesday' => 'White Chicken Chili', 'Wednesday' => 'Vegetarian'];


//count and print the current number of elements:
$count1 = count($soups);
print "<p>The soups array originally had $count1 elements.</p>";

//add these 3 elements to the array:
$soups['Thursday'] = 'Chicken Noodle';
$soups['Friday'] = 'Tomato';
$soups['Saturday'] = 'Cream of Broccoli';


//count and print the number of elements again:
$count2 = count($soups);
print "<p>After adding 3 more soups, the array now has $count2 elements....</p>";


//print the contents of the array:
print_r($soups);
?>
</body>
</html>
