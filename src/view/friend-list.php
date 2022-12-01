<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/friend-list.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../js/chat.js" defer></script>
    <title>TicTALK</title>
</head>
<body>
    <header>
        <h1>TicTalk</h1>
        <div class="main-nav">
            <ul>
                <a href="./friend-list.html"><li class="bx bxs-user active"></li></a>
                <a href="./chat.html"><li class="bx bxs-message-rounded-dots"></li></a>
                <li class="bx bxs-user-plus"></li>
                <li class="bx bxs-message-rounded-add"></li>
            </ul>
        </div>
        <div class="sec-nav">
            <ul>
                <li class="bx bx-cog"></li>
                <li class="bx bx-dots-horizontal-rounded"></li>
            </ul>
        </div>
    </header>

    <div class="content">
        <div class="contact">
            <div class="profile-panel">
                <h2>Profile</h2>
                <img src="../../assets/male.png" alt="">
                <div class="profile-detail">
                    <div class="detail id">
                        <p class="bold">TicTalk ID</p>
                        <p>john_doe</p>
                    </div>
                    <div class="detail name">
                        <p class="bold">Display Name</p>
                        <p>John Doe</p>
                        <div class="bx bx-edit"></div>
                    </div>
                    <div class="detail status-msg">
                        <p class="bold">Status Message</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est sit enim eveniet ullam. Voluptates obcaecati nobis, eveniet quis, culpa, voluptatum enim aliquam dolorum unde beatae aut nostrum aperiam ullam praesentium.</p>
                        <div class="bx bx-edit"></div>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="list">
                <h3 class="header">Friends</h3>
                <div class="wrapper">
                    <img src="../../assets/male.png" alt="">
                    <div class="info">
                        <h3>John Doe</h3>
                        <p>Work hard, play hard.</p>
                    </div>
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
                        <form action="./UploadController.php" method="POST" enctype="multipart/form-data" id="upload-file">

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