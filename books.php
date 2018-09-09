<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Larry Ullmans Books and Chapters<</title>
</head>
<body>
    <h1>Larry Ullmans Books and Chapters</h1>
<?php
//first array
$phpvqs = [1 => 'Getting Started with PHP', 'Variables', 'HTML Forms and PHP', 'Using Numbers'];

//second array
$phpadv = [1 => 'Advanced PHP Techniques', 'Developing Web Apps', 'Advanced Database Concepts', 'Basic Object-Oriented Programming'];

//third array
$phpmysql = [1 => 'Intro to PHP', 'Creating Dynamic Websites', 'Intro to MySQL'];

//multidimensional array
$books = ['PHP VQS' => $phpvqs,
        'PHP Advanced VQP' => $phpadv,
        'PHP and MySQL' => $phpmysql
];

//foreach print out:
foreach ($books as $key => $value){
    print "<p>$key: $value</p<\n";
}



?>
</body>
</html>
