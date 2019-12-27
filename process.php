<?php
//connect to a database
$conn =mysqli_connect();

echo 'processing...';

//check for POST variable
if(isset($_POST['name'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    echo 'POST: your name is' . $_POST['name'];

    $query = "I"

}

//check for get variable
if(isset($_GET['name'])){
    echo 'GET: your name is' . $_GET['name'];
}
