<?php
$max_file_size = 1024 * 1024 * 25;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $file_name = $_FILES['file']['name'];
    $temp_file_path = $_FILES['file']['tmp_name'];

    $file_size = filesize($temp_file_path);
    if ($file_size === 0) {
        echo "File is empty!";
        die;
    }
    if ($file_size > $max_file_size) {
        echo "File size must be less than 25 MB!";
        die;
    }

    $filename_check;
    if (!preg_match('/(\.jpg|\.jpeg|\.png|\.gif)$/i', substr($file_name, -4))) {
        echo "Uploaded file must be a jpg, jpeg, png, or gif";
        die;
    } else if (preg_match('/(\.jpg|\.jpeg|\.png|\.gif)$/i', substr($file_name, -4))) {
        $filename_check = substr($file_name, 0, -4);
    } else {
        $filename_check = $file_name;
    }

    if (!preg_match('/^[A-Za-z0-9_-]+$/i', $filename_check)) {
        echo "Filename may only contain letters, numbers, dashes, and underscores";
        die;
    }

    // $new_file_path = "./uploads/$file_name";
    // move_uploaded_file($temp_file_path, $new_file_path);

    // header('Location: ./chat.php');
}
?>