<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Little Gradebook</title>
</head>
<body>
    <h1>My Little Gradebook</h1>
<?php
//make array
    $grades = ['Richard' => 95, 'Sherwood' => 82, 'Toni' => 98, 'Franz' => 87, 'Melissa' => 75, 'Roddy' => 85];

//print original array
print '<p>Originally the array looks like: <br>';
    foreach($grades as $student => $grade){
        print "$student : $grade <br>\n";
    }
print '</p>';

//sort reverse order and print
arsort($grades);

//print
print '<p>Sorting Array Reverse Order:<br>';
foreach($grades as $student => $grade){
    print "$student: $grade <br>\n";
}

print '</p>';
//sort alphabetically
ksort($grades);

//print
print '<p>Sorting with Ksort function: <br>';
foreach($grades as $student => $grade){
    print "$student: $grade <br>\n";
}

print '</p>';





?>
</body>
</html>
