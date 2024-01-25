document.addEventListener('DOMContentLoaded', function() {
    const detailLinks = document.querySelectorAll('.item a');

    detailLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetId = link.getAttribute('href').substr(1); // Получаем id из href, убирая #
            const targetElement = document.getElementById(targetId);

            if (targetElement.style.display === 'block') {
                targetElement.style.display = 'none';
            } else {
                document.querySelectorAll('.details').forEach(detail => {
                    if (detail.id !== targetId) {
                        detail.style.display = 'none';
                    }
                });
                targetElement.style.display = 'block';
            }
        });
    });
});

