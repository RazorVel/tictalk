const topNavbar = document.createElement("topNavbar");

topNavbar.innerHTML = `
    <link rel="stylesheet" href="../css/chat.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <header>
        <h1>TicTalk</h1>
        <div class="main-nav">
            <ul>
                <li class="bx bxs-user"></li>
                <li class="bx bxs-message-rounded-dots"></li>
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
`;

class TopNavbar extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: "open" });
        this.shadowRoot.appendChild(topNavbar.cloneNode(true));
    }
}

window.customElements.define("top-content", TopNavbar);

const chatList = document.createElement('chatList');

chatList.innerHTML = `
    <link rel="stylesheet" href="../css/chat.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <div class="wrapper">
        <img />
        <div class="info">
            <h3><slot name="name" /></h3>
            <p><slot name="chat" /></p>
        </div>
        <div class="bx bx-heart"></div>
    </div>
`
class ChatList extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: 'open' });
        this.shadowRoot.appendChild(chatList.cloneNode(true));
    }

    static get observedAttributes() {
        return ['avatar'];
    }
    attributeChangedCallback(name, oldValue, newValue) {
        this.shadowRoot.querySelector('.wrapper img').src = this.getAttribute('avatar');
    }
}

window.customElements.define('chat-list', ChatList);