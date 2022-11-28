<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/chat.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="../js/component.js" defer></script>
    <title>TicTALK</title>
</head>

<body>
    <top-content></top-content>

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
                <chat-list avatar="../../assets/male.png">
                    <div slot="name">Yuan</div>
                    <div slot="chat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non necessitatibus quo
                        sapiente laboriosam consequuntur vero eligendi placeat accusamus rerum. Id quo qui voluptate
                        corrupti vitae atque inventore maiores veritatis deleniti.</div>
                </chat-list>
                <chat-list avatar="../../assets/female.png">
                    <div slot="name">Novena</div>
                    <div slot="chat">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt delectus
                        provident et, ea impedit numquam odio accusamus? Modi id doloribus eligendi temporibus quos
                        culpa vitae aut amet ducimus ratione.</div>
                </chat-list>
                <chat-list avatar="../../assets/male.png">
                    <div slot="name">Feliks</div>
                    <div slot="chat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non necessitatibus quo
                        sapiente laboriosam consequuntur vero eligendi placeat accusamus rerum. Id quo qui voluptate
                        corrupti vitae atque inventore maiores veritatis deleniti.</div>
                </chat-list>
                <chat-list avatar="../../assets/female.png">
                    <div slot="name">Aleta</div>
                    <div slot="chat">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt delectus
                        provident et, ea impedit numquam odio accusamus? Modi id doloribus eligendi temporibus quos
                        culpa vitae aut amet ducimus ratione.</div>
                </chat-list>
                <chat-list avatar="../../assets/male.png">
                    <div slot="name">Budiman</div>
                    <div slot="chat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non necessitatibus quo
                        sapiente laboriosam consequuntur vero eligendi placeat accusamus rerum. Id quo qui voluptate
                        corrupti vitae atque inventore maiores veritatis deleniti.</div>
                </chat-list>
                <chat-list avatar="../../assets/female.png">
                    <div slot="name">Karin</div>
                    <div slot="chat">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt delectus
                        provident et, ea impedit numquam odio accusamus? Modi id doloribus eligendi temporibus quos
                        culpa vitae aut amet ducimus ratione.</div>
                </chat-list>
                <chat-list avatar="../../assets/male.png">
                    <div slot="name">Naruto</div>
                    <div slot="chat">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non necessitatibus quo
                        sapiente laboriosam consequuntur vero eligendi placeat accusamus rerum. Id quo qui voluptate
                        corrupti vitae atque inventore maiores veritatis deleniti.</div>
                </chat-list>
                <chat-list avatar="../../assets/female.png">
                    <div slot="name">Hinata</div>
                    <div slot="chat">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem nesciunt delectus
                        provident et, ea impedit numquam odio accusamus? Modi id doloribus eligendi temporibus quos
                        culpa vitae aut amet ducimus ratione.</div>
                </chat-list>
            </div>
        </div>
        <div class="chat">
            <div class="view-chat">
                <div class="bx bx-message-dots"></div>
                <p>Start a new conversation!</p>
            </div>
        </div>
    </div>
</body>

</html>