<?php
header('Location: http://www.suddenlysima.com/shoes-for-thought-post.php');
if(isset($_POST['submitted'])) {
    include('../connect-mysql.php');

    $name = $_POST['name'];
    $comment = $_POST['comment'];
    $sqlinsert ="INSERT INTO shoes_for_thought_comments (name, comment) VALUES('$name', '$comment')"; // Change table name here

    if (!mysqli_query($dbcon, $sqlinsert)) {
        die("Error inserting new record");
    }

    echo "1 record added to database";
}

?>

