                <style>
    table {
        border: 2px solid red;
        background-color: #FFC;
    }
    th {
        border-bottom: 5px solid #000;
    }
    td {
        border-bottom: 5px solid #666;
    }
    </style>
<?php
include('connect-mysql.php');

$sqlget = "SELECT * FROM comments";
$sqldata = mysqli_query($dbcon, $sqlget) or die('error');

echo "<table>";
echo "<tr><th>Name</th><th>Comment</th></tr>";

while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {

    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    echo $row['comment'];
    echo "</td></tr>";

}

echo "</table>";


?>











