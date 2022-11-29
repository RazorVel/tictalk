<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/chat.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js" integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <!-- <script src="../js/component.js" defer></script> -->
    <script src="../js/chat.js" defer></script>
    <title>TicTALK</title>
</head>

<body>
    <header>
        <h1>TicTalk</h1>
        <div class="main-nav">
            <ul>
                <a href="./friend-list.html"><li class="bx bxs-user"></li></a>
                <li class="bx bxs-message-rounded-dots active"></li>
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
                <!-- <div class="wrapper">
                    <img src="../../assets/female.png" alt="">
                    <div class="info">
                        <h3>Eod Nhoj</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum rerum fugit natus, voluptatem veniam molestias ipsum consequatur, dignissimos molestiae sint vero eius aperiam illo aliquid quaerat vel! Quibusdam, doloribus quasi.</p>
                    </div>
                    <div class="bx bx-heart"></div>
                </div> -->
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
                        <!-- <div class="bubble-chat friend">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, vitae harum! Itaque omnis dignissimos quibusdam expedita voluptates, nulla laborum enim non autem similique saepe! Eius illo perspiciatis natus repellendus ipsa.</div>
                        <div class="bubble-chat friend">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis sit rem quisquam quod, laboriosam voluptas illum quaerat eligendi in numquam quidem. Libero eaque voluptatibus unde doloribus veniam ab minima!</div>
                        <div class="bubble-chat user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt obcaecati aspernatur harum dolorum quia non ab! Reprehenderit sequi amet officiis voluptatibus asperiores quaerat necessitatibus? Eveniet et maiores maxime nemo rerum.</div>
                        <div class="bubble-chat user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nostrum nobis pariatur, sit consequuntur iste aliquam? Maiores, unde laudantium itaque non doloribus error sed cupiditate voluptatibus, odio atque, veniam exercitationem?</div>
                        <div class="bubble-chat friend">testing</div>
                        <div class="bubble-chat friend">testing</div>
                        <div class="bubble-chat friend">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, vitae harum! Itaque omnis dignissimos quibusdam expedita voluptates, nulla laborum enim non autem similique saepe! Eius illo perspiciatis natus repellendus ipsa.</div>
                        <div class="bubble-chat friend">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore facilis sit rem quisquam quod, laboriosam voluptas illum quaerat eligendi in numquam quidem. Libero eaque voluptatibus unde doloribus veniam ab minima!</div>
                        <div class="bubble-chat user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt obcaecati aspernatur harum dolorum quia non ab! Reprehenderit sequi amet officiis voluptatibus asperiores quaerat necessitatibus? Eveniet et maiores maxime nemo rerum.</div>
                        <div class="bubble-chat user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi nostrum nobis pariatur, sit consequuntur iste aliquam? Maiores, unde laudantium itaque non doloribus error sed cupiditate voluptatibus, odio atque, veniam exercitationem?</div>
                        <div class="bubble-chat friend">testing</div>
                        <div class="bubble-chat friend">testing</div> -->
                    </div>
                </div>
                <div class="chat-bar">
                    <div class="chat-bar-icon">
                        <div class="bx bx-microphone"></div>
                        <div class="bx bx-paperclip"></div>
                    </div>
                    <div class="chat-box">
                        <input type="text" placeholder="Type a message">
                    </div>
                    <div class="bx bx-smile"></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>