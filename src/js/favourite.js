const heartIcon = document.querySelectorAll('.wrapper .bx-heart');
heartIcon.forEach(icon => {
    icon.addEventListener('click', () => {
        icon.classList.toggle('bx-heart');
        icon.classList.toggle('bxs-heart');
        const parentDiv = icon.parentNode;
        parentDiv.classList.toggle('favourite');
    })
})

$('.wrapper .bx').click(function(){
    const par = $(this).parent();
    if ($(par).hasClass('favourite')) {
        $(par).prependTo($(par).parent());
    } else {
        $(par).appendTo($(par).parent());
    }
})