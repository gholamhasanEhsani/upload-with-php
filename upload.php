<?php
$file_name = basename($_FILES["image"]["name"]);

$file_temp = $_FILES["image"]["tmp_name"];

move_uploaded_file( $file_temp, "files/".$file_name );