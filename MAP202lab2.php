<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>MAP 202</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}

#rcorners1 {
  border-radius: 25px;
  background: #73AD21;
  padding: 20px; 
  width: 200px;
  height: 150px;  
}
</style>
</head>
<body>
<h2 style="background-color:DodgerBlue;">LAB 02</h2>
<p>Emplyee Details </p>

<table border="1">
<tr>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
</tr>

<?php

$employees = array(
    array (
    "Name" => "Dave Punk",
    "Phone" => "5689741523",
    "Email" => "davepunk@gmail.com"),
    array (
    "Name" => "Monty Smith",
    "Phone" => "2584369721",
    "Email" => "montysmith@gmail.com"),
    array (
    "Name" => "John Flinch",
    "Phone" => "9875147536",
    "Email" => "johnflinch@gmail.com")
    );

    foreach ($employees as $employee) {
        echo '<tr>';
        foreach ($employee as $data) {
            echo '<td>' . $data . '</td>' ;
        }
        echo '</tr>';
    }
?>
</table>

<p>Movie Details </p>

<table border="1">
<tr>
    <th>Movie Name</th>
    <th>Genre</th>
</tr>


<?php
$films = array(
    "comedy" => array (
                    0 => "Pink Panther",
                   1 => "johnny English",
                    2 => "Tommy Boy"),
    "action" => array (
                    0 => "Die Hard",
                    1 => "Expendables"),
    "epic" => array (
                    0 => "The Lord of the Rings"),
    "Romance" => array (
                    0 => "Romeo and Juliet")
);

foreach ($films as $genre => $filmArray ) {
    echo '<tr>';
    foreach ($filmArray as $film) {
        echo '<td>' . $film . '</td>' ;
        echo '<td>' . $genre . '</td>' ;
        echo '</tr>' ;
    }

    }
    

?>

</table>

<p id="rcorners1">Submitted By<br>Ranjith Parale</p>
</body>

</html>