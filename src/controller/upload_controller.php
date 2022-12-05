<?php
require_once('../controller/utilities.php');
require_once('../controller/session_manager.php');
require_once('../controller/db_tools.php');
require_once('../controller/features.php');

$max_file_size = 1024 * 1024 * 25;

// setlocale(LC_ALL, 'en_US.UTF-8');

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

    while ($new_file_path = "../../assets/uploads/" . keyGen(200) . "." . pathinfo($file_name, PATHINFO_EXTENSION)) {
        if (!file_exists($new_file_path)) {
            break;
        }
    }

    move_uploaded_file($temp_file_path, $new_file_path);

    sendMessage($connection, $_POST['source'], $_POST['destination'], $_POST['type'], $new_file_path);

    header('Location: ../view/chat.php' . '?contact=' . $_POST['contact']);
}
?>