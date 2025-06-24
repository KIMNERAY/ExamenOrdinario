const form = document.getElementById('formulario');
document.addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('nombre').value;
    const email = document.getElementById('email').value;
    const edad = document.getElementById('edad').value;

    if (username && email && edad >= 18 && edad <= 99) {
        alert('Formulario enviado correctamente');
        form.submit();
    } else {
        alert('Por favor, completa todos los campos correctamente.');
    }
});