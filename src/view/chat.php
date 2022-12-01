<?php
require_once('../controller/session_manager.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/chat.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
                <a href="./friend-list.php"><li class="bx bxs-user"></li></a>
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
                        <a href="#">Log out</a>
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
                <div class="wrapper">
                    <img src="../../assets/male.png" alt="">
                    <div class="info">
                        <h3>John Doe</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum rerum fugit natus, voluptatem veniam molestias ipsum consequatur, dignissimos molestiae sint vero eius aperiam illo aliquid quaerat vel! Quibusdam, doloribus quasi.</p>
                    </div>
                    <div class="bx bx-heart"></div>
                </div>
                <div class="wrapper">
                    <img src="../../assets/female.png" alt="">
                    <div class="info">
                        <h3>Testing</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum rerum fugit natus, voluptatem veniam molestias ipsum consequatur, dignissimos molestiae sint vero eius aperiam illo aliquid quaerat vel! Quibusdam, doloribus quasi.</p>
                    </div>
                    <div class="bx bx-heart"></div>
                </div>
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
                        <p>John Doe</p>
                    </div>
                    <div class="chat-icon">
                        <div class="bx bx-search-alt-2"></div>
                        <div class="bx bx-dots-vertical-rounded"></div>
                    </div>
                </div>

                <div class="chat-content">
                    <div class="chat-content-list">
                        <div class="bubble-chat user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum rerum fugit natus, voluptatem veniam molestias ipsum consequatur, dignissimos molestiae sint vero eius aperiam illo aliquid quaerat vel! Quibusdam, doloribus quasi.</div>
                    </div>
                </div>

                <div class="chat-bar">
                    <div class="chat-bar-icon">
                        <div class="bx bx-microphone"></div>
                        <form action="../controller/upload_controller.php" method="POST" enctype="multipart/form-data" id="upload-file">

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
                    <div class="chat-box">
                        <input type="text" placeholder="Type a message">
                    </div>
                    <button type="submit" class="bx bx-send"></button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>