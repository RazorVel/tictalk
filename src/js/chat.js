const allChatList = document.querySelectorAll(".list");
const chat = document.querySelector(".chat .chat-list");
const emptyChat = document.querySelector(".chat .empty-list");

allChatList.forEach((e) => {
    e.addEventListener("click", () => {
        chat.classList.add("active");
        emptyChat.classList.remove("active");
    });
});

document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
        if (chat.classList.contains("active")) {
            chat.classList.remove("active");
            emptyChat.classList.add("active");
        }
    }
});

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

const validatePic = () => {
    document.querySelector(".file-upload.active").classList.remove("active");

    const picture = document.querySelector("#pic-input");
    const filename = picture.files[0].name;
    const filesize = picture.files[0].size;
    const path = picture.value;
    const extensionRgx = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    const filenameRgx = /^[A-Za-z0-9_-]+$/i;

    if (!extensionRgx.exec(path)) {
        alert("Uploaded file must be a jpg, jpeg, png, or gif!");
        picture.value = "";
        return false;
    } else if (!filenameRgx.exec(filename.substring(0, filename.length - 4))) {
        alert(
            "Filename may only contain letters, numbers, dashes, and underscores!"
        );
        picture.value = "";
        return false;
    } else if (filesize > 1024 * 1024 * 25) {
        alert("File size must be less than 25 MB!");
        picture.value = "";
        return false;
    } else {
        if (picture.files && picture.files[0]) {
            const readFile = new FileReader();

            readFile.onload = function (e) {
                const preview = document.querySelector(".file-preview");
                preview.classList.add("active");
                const img = document.querySelector(".preview-image img");
                img.setAttribute("src", e.target.result);
            };

            readFile.readAsDataURL(picture.files[0]);
        }
    }
};
