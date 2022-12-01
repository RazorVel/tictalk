const heartIcon = document.querySelectorAll('.wrapper .bx-heart');
heartIcon.forEach(icon => {
    icon.addEventListener('click', () => {
        icon.classList.toggle('bx-heart');
        icon.classList.toggle('bxs-heart');
        const parentDiv = icon.parentNode;
        parentDiv.classList.toggle('favourite');
    })
})

$('.wrapper').click(function(){
    if ($(this).hasClass('favourite')) {
        $(this).prependTo($(this).parent());
    } else {
        $(this).appendTo($(this).parent());
    }
})