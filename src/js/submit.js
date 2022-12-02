const textMsg = document.querySelector(".chat-box input");
const contentList = document.querySelector(".chat-content-list");
const contentBox = document.querySelector(".chat-content");
textMsg.addEventListener("keydown", (e) => {
    if (e.key === "Enter") {
        const msg = textMsg.value;
        const newMsg = document.createElement("div");
        newMsg.classList.add("bubble-chat", "user");
        newMsg.innerHTML = msg;
        contentList.appendChild(newMsg);
        contentBox.scrollTo(0, contentBox.scrollHeight);
        textMsg.value = "";

        document.getElementById("submit-msg").submit();
    }
});

const submitFile = document.querySelector('#upload-file');
submitFile.addEventListener('submit', e => {
    e.preventDefault();

    const newImageMsg = document.createElement('div');
    newImageMsg.classList.add('bubble-chat-img', 'user');

    const img = document.querySelector('.preview-image img').src;
    const newImage = document.createElement('img');

    newImage.setAttribute('src', img);
    newImageMsg.appendChild(newImage);

    contentList.appendChild(newImageMsg);
    contentBox.scrollTo(0, contentBox.scrollHeight);

    const preview = document.querySelector('.file-preview');
    preview.classList.remove('active');
})