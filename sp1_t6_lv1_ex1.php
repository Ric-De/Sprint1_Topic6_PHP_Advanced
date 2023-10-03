<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Submission Result</h1>

<?php

//Check if the form is submitted and the name and lastname fields are set in the Post data.
if(isset($_POST['name']) && isset($_POST['lastname'])) {
    //Take the submitted name and lastname from the post data and assign them to the respective variables below.
    $name = $_POST['name'];
    $lastName = $_POST['lastname'];

    //Show the name in the screen.
    echo "<p>Submitted Name: $name</p>";
    echo "<p>Last Name: $lastName</p>";
} else {
    //If name or lastname are not set in the post data display an error message.
    echo "<p>No name or lastname submitted</p>";
}

?>
    
</body>
</html>