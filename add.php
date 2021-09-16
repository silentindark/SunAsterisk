<?php
include 'connect.php';

$title = mysqli_real_escape_string ($conn,$_REQUEST['title']);
$content = mysqli_real_escape_string ($conn,$_REQUEST['content']);
$date = mysqli_real_escape_string ($conn,$_REQUEST['date']);

$sql = "INSERT INTO article (article_name,article_content,article_created) VALUES ('$title','$content','$date')";

if (mysqli_query($conn,$sql))
{
    header ("Location: index.php");
} else {
    echo "Error $sql" . mysqli_error($conn);
}
mysqli_close($conn);

?>