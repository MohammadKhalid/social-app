<?php
session_start();

$haha = $_POST["id"];
$usersname = $_SESSION["username"];
require 'connection.php';

$ifalreadyinterested = "select * from is_interested where ideaID = '$haha' and username = '$usersname'";
$result_2 = $conn->query($ifalreadyinterested);

$count = mysqli_num_rows($result_2);

if ($count > 0){
        
       header("Location:home.php");
}

else {

$im_interested = "insert into is_interested(ideaID,username,selected) values('$haha','$usersname',0)";
$conn->query($im_interested);

$which_authors_idea = "select idea.user from is_interested,idea where idea.ideaID = is_interested.ideaID and idea.ideaID = '$haha'";
$result = $conn->query($which_authors_idea);
        
$row = $result->fetch_assoc();

$whose_idea = $row['user'];

$notifying_the_author = "insert into notifications values(0,'$whose_idea','$usersname is interested in your idea $haha')";
$conn->query($notifying_the_author);

$updatepeople = "update idea set number_of_people_interested = number_of_people_interested + 1 where ideaID = '$haha'";
$conn->query($updatepeople);

    
$conn->close();

header("Location:home.php");

}

?>