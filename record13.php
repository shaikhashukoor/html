
<html>
<head>
<title>Indian Cricket Players</title>
<style>
table {
width: 40%;
border-collapse: collapse;
margin: 20px auto;
}
th, td {
border: 1px solid;
text-align: center;
}
th {
background-color: yellow;
}</style>
</head>

<body>
<?php
$players = array("Rohit Sharma","Virat Kohli","Jasprit Bumrah","Hardik Pandye");
$position=array("Topp order Batsman","Offspin","Right arm fast baller","All rounder");
?>

<h2 style="text-align:center;color:red;">List of Indian Cricket Players</h2>

<table>
<tr>
<th>SINo</th>
<th>Player Names</th>
<th>Position</th>
</tr>

<?php
for ($i = 0; $i < count($players); $i++) {
    echo "<tr>
            <td>" . ($i+1) . "</td>
            <td>" . $players[$i] . "</td>
            <td>" . $position[$i] . "</td>
          </tr>";
}
?>
</table>

</body>
</html>





