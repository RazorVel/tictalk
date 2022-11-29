const allChatList = document.querySelectorAll('.list');
const chat = document.querySelector('.chat .chat-list');
const emptyChat = document.querySelector('.chat .empty-list');

allChatList.forEach(e => {
    e.addEventListener('click', () => {
        chat.classList.add('active');
        emptyChat.classList.remove('active');
    })
})

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        if (chat.classList.contains('active')) {
            chat.classList.remove('active');
            emptyChat.classList.add('active');
        }
    }
})

const heartIcon = document.querySelectorAll('.wrapper .bx-heart');
heartIcon.forEach(icon => {
    icon.addEventListener('click', () => {
        icon.classList.toggle('bx-heart');
        icon.classList.toggle('bxs-heart');
        const parentDiv = icon.parentNode;
        parentDiv.classList.toggle('favourite');
    })
})

const textMsg = document.querySelector('.chat-box input');
const contentList = document.querySelector('.chat-content-list');
const contentBox = document.querySelector('.chat-content');
textMsg.addEventListener('keydown', (e) => {
    if (e.key === 'Enter') {
        const msg = textMsg.value;
        const newMsg = document.createElement('div');
        newMsg.classList.add('bubble-chat', 'user');
        newMsg.innerHTML = msg;
        contentList.appendChild(newMsg);
        contentBox.scrollTo(0, contentBox.scrollHeight);
        textMsg.value = '';
    }
})