document.addEventListener('click', e => {
    const isDropdownButton = e.target.matches('.dropdown .link');
    if (!isDropdownButton && e.target.closest('.dropdown') != null) {
        return;
    }

    let currentDropdown;
    if (isDropdownButton) {
        currentDropdown = e.target.closest('.dropdown');
        currentDropdown.classList.toggle('active');
    }

    document.querySelectorAll('.dropdown.active').forEach(dropdown => {
        if (dropdown === currentDropdown) {
            return;
        }
        dropdown.classList.remove('active');
    })
})

document.addEventListener('click', e => {
    const isDropdownButton = e.target.matches('.file-upload .upload-list');
    if (!isDropdownButton && e.target.closest('.file-upload') != null) {
        return;
    }

    let currentDropdown;
    if (isDropdownButton) {
        currentDropdown = e.target.closest('.file-upload');
        currentDropdown.classList.toggle('active');
    }

    document.querySelectorAll('.file-upload.active').forEach(dropdown => {
        if (dropdown === currentDropdown) {
            return;
        }
        dropdown.classList.remove('active');
    })
})

document.addEventListener('click', e => {
    if (e.target.matches('.bx-x')) {

        const pic = document.querySelector('#pic-input');
        const preview = document.querySelector('.file-preview');
        preview.classList.remove('active');
        pic.value = '';
        
    }
})