const popupButtons = document.querySelectorAll('.btn-socrat');
const popup = document.querySelector('cup-popup');


popupButtons.forEach((popupButton) => {
    popupButton.addEventListener('click', (evt) => {
        evt.preventDefault()
    })

});