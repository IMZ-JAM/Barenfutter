document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.navbar a, .user');

    links.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Evitar el comportamiento predeterminado del enlace
            links.forEach(item => item.classList.remove('active'));
            this.classList.add('active');
            window.location.href = this.getAttribute('href'); // Redireccionar al usuario a la página correspondiente
        });
    });
});
