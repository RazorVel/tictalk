<?php
require_once('../controller/session_manager.php');
require_once('../controller/db_tools.php');
require_once('../controller/features.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/chat.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
        integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/chat.js" defer></script>
    <script src="../js/dropdown.js" defer></script>
    <script src="../js/favourite.js" defer></script>
    <title>TicTALK</title>
</head>

<body>
    <header>
        <h1>TicTalk</h1>

        <div class="main-nav">
            <ul>
                <a href="./friend-list.php">
                    <li class="bx bxs-user"></li>
                </a>
                <li class="bx bxs-message-rounded-dots active"></li>
                <li class="bx bxs-user-plus"></li>
                <li class="bx bxs-message-rounded-add"></li>
            </ul>
        </div>

        <div class="sec-nav">
            <ul>
                <li class="bx bx-cog"></li>
                <div class="dropdown">
                    <button class="link bx bx-dots-horizontal-rounded"></button>
                    <div class="dropdown-menu">
                        <a href="../controller/logout.php">Log out</a>
                    </div>
                </div>
            </ul>
        </div>
    </header>

    <div class="content">
        <div class="contact">
            <div class="search-panel">
                <div class="bx bx-menu"></div>
                <div class="search-bar">
                    <div class="icon bx bx-search-alt-2"></div>
                    <input type="text" placeholder="Search for chats and messages" id="search">
                </div>
            </div>

            <div class="list">
                <?php
                $statement = $connection->prepare("
                        select
                            Name, Email
                        from Users
                        where Email <> ?
                    ");

                $statement->bind_param('s', $_SESSION['name']);

                $statement->execute();

                $result = $statement->get_result();

                $contact_list = array();

                $index = 0;
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <a href=\"./chat.php?contact={$index}\" style=\"text-decoration:none;\">
                            <div class=\"wrapper\"> 
                                <img src=\"../../assets/male.png\" alt=\"\">
                                
                                <div class=\"info\">
                                    <h3>{$row['Name']}</h3>
                                    <p></p>
                                </div>

                                <div class=\"bx bx-heart\"></div>
                            </div>
                        </a>
                    ";

                    array_push($contact_list, $row);
                    $index++;
                }
                ?>
            </div>
        </div>

        <div class="chat">
            <div class="empty-list">
                <div class="bx bx-message-dots"></div>
                <p>Start a new conversation!</p>
            </div>

            <div class="chat-list active">
                <div class="chat-header">
                    <div class="profile">
                        <img src="../../assets/male.png" alt="">
                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                            $name = $contact_list[$_GET['contact']]['Name'];
                            $email = $contact_list[$_GET['contact']]['Email'];

                            echo "
                                <p>{$name}</p>
                            ";
                        }
                        ?>
                    </div>
                    <div class="chat-icon">
                        <div class="bx bx-search-alt-2"></div>
                        <div class="bx bx-dots-vertical-rounded"></div>
                    </div>
                </div>

                <div class="chat-content">
                    <div class="chat-content-list">
                        <!-- <div class="bubble-chat user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                            rerum fugit natus, voluptatem veniam molestias ipsum consequatur, dignissimos molestiae sint
                            vero eius aperiam illo aliquid quaerat vel! Quibusdam, doloribus quasi.</div> -->
                        <?php
                        function printMessage($agent, $type, $description)
                        {
                            if ($type == 'text') {
                                echo "
                                    <div class=\"bubble-chat {$agent}\">
                                        {$description}
                                    </div>
                                ";
                            } elseif ($type == 'image') {
                                //pending
                            }
                        }

                        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                            $user = retrieveMessage($connection, $_SESSION['name'], $email);
                            $friend = retrieveMessage($connection, $email, $_SESSION['name']);

                            while (true) {
                                if (!isset($user_row))
                                    $user_row = $user->fetch_assoc();
                                if (!isset($friend_row))
                                    $friend_row = $friend->fetch_assoc();

                                if (!$user_row && !$friend_row) {
                                    break;
                                } elseif ($user_row && !$friend_row) {
                                    printMessage('user', $user_row['Type'], $user_row['Description']);
                                    unset($user_row);
                                    continue;
                                } elseif (!$user_row && $friend_row) {
                                    printMessage('friend', $friend_row['Type'], $friend_row['Description']);
                                    unset($friend_row);
                                    continue;
                                } else {
                                    $user_time = new DateTime($user_row['Time']);
                                    $friend_time = new DateTime($friend_row['Time']);

                                    if ($user_time <= $friend_time) {
                                        printMessage('user', $user_row['Type'], $user_row['Description']);
                                        unset($user_row);
                                    } else {
                                        printMessage('friend', $friend_row['Type'], $friend_row['Description']);
                                        unset($friend_row);
                                    }
                                }
                            }
                        }
                        ?>
                    </div>

                    <div class="bubble-chat-img user">
                        <img src="./Untitled.jpg" alt="">
                    </div>

                </div>

                <div class="chat-bar">
                    <div class="chat-bar-icon">
                        <div class="bx bx-microphone"></div>
                        <form action="../controller/upload_controller.php" method="POST" enctype="multipart/form-data"
                            id="upload-file">

                            <div class="file-upload">
                                <div class="upload-list bx bx-paperclip"></div>
                                <div class="upload-dropdown-menu">
                                    <div class="upload-doc">
                                        <label for="doc-input">
                                            <div class="bx bx-file"></div>
                                        </label>
                                        <input type="file" id="doc-input" name="document" disabled>
                                    </div>
                                    <div class="upload-pic">
                                        <label for="pic-input">
                                            <div class="bx bx-photo-album"></div>
                                        </label>
                                        <input type="file" id="pic-input" name="file" onchange="return validatePic()">
                                    </div>
                                </div>
                            </div>

                            <div class="file-preview">
                                <div class="bx bx-x"></div>
                                <div class="preview-image">
                                    <img src="" alt="">
                                </div>
                                <div class="submit-file">
                                    <button type="submit" class="bx bx-send" value="submit"></button>
                                </div>
                            </div>

                        </form>
                    </div>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="submit-msg"
                        enctype="multipart/form-data">
                        <div class="chat-box">

                            <?php
                            echo "
                            <input type=\"hidden\" name=\"contact\" value=\"{$_GET['contact']}\">
                            <input type=\"hidden\" name=\"source\" value=\"{$_SESSION['name']}\">
                            <input type=\"hidden\" name=\"destination\" value=\"{$email}\">
                            <input type=\"hidden\" name=\"type\" value=\"text\">
                            <input type=\"text\" name=\"chat-message\" placeholder=\"Type a message\">
                            ";
                            ?>

                        </div>
                        <button type="submit" class="bx bx-send"></button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        sendMessage($connection, $_POST['source'], $_POST['destination'], $_POST['type'], $_POST['chat-message']);

        echo "
            <script>
                window.location.href='{$_SERVER['PHP_SELF']}?contact={$_POST['contact']}'
            </script>
        ";
    }
    ?>
</body>

</html>