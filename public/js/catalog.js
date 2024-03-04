document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.item button[data-target]');
    const closeButtons = document.querySelectorAll('.details button[data-target]');

    buttons.forEach(function(button) {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            closeAllDetails();
            const targetId = button.getAttribute('data-target');
            const targetDetail = document.querySelector('#' + targetId); // Исправлено здесь
            toggleDetails(targetDetail);
        });
    });

    closeButtons.forEach(function(closeButton) {
        closeButton.addEventListener('click', function(event) {
            event.preventDefault();
            const targetId = closeButton.getAttribute('data-target');
            const targetDetail = document.querySelector('#' + targetId); // Исправлено здесь
            toggleDetails(targetDetail);
        });
    });

    function toggleDetails(detail) {
        if (detail.style.display === 'none') {
            detail.style.display = 'block';
        } else {
            detail.style.display = 'none';
        }
    }

    function closeAllDetails() {
        const allDetails = document.querySelectorAll('.details')
        allDetails.forEach(function (detail){
            detail.style.display = 'none';
        });
    }
});
