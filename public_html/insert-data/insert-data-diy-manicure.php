<?php
header('Location: http://www.suddenlysima.com/diy-manicure-post.php');
if(isset($_POST['submitted'])) {
    include('../connect-mysql.php');

    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $sqlinsert ="INSERT INTO diy_manicure_comments (name, comment) VALUES('$name', '$comment')"; // Change table name here

    if (!mysqli_query($dbcon, $sqlinsert)) {
        die("Error inserting new record");
    }

    echo "1 record added to database";
}

?>

