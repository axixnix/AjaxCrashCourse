<?php
//connect to a database

echo 'processing...';

//check for POST variable
if(isset($_POST['name'])){
    echo 'POST: your name is' . $_POST['name'];
}

//check for get variable
if(isset($_GET['name'])){
    echo 'GET: your name is' . $_GET['name'];
}
