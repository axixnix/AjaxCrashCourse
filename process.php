<?php
echo 'processing...';

//check for get variable
if(isset($_GET['name'])){
    echo 'GET: your name is' . $_GET['name'];
}
