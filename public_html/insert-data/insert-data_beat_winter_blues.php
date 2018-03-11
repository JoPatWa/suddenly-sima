<?php
header('Location: http://www.suddenlysima.com/how-to-beat-the-winter-blues-post.php');
if(isset($_POST['submitted'])) {
    include('../connect-mysql.php');

    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $sqlinsert ="INSERT INTO beat_winter_blues_comments (name, comment) VALUES('$name', '$comment')";

    if (!mysqli_query($dbcon, $sqlinsert)) {
        die("Error inserting new record");
    }

    echo "1 record added to database";
}

?>