const formularioContactos = document.querySelector('#contacto');
eventListeners();
function eventListeners() {
    //Cuando el formulario de crear o editar se ejecuta
    formularioContactos.addEventListener('submit', leerFormulario);
}
function leerFormulario(e) {
    // console.log(e)
    e.preventDefault();

    //leer los datos de los inputs
    const nombre = document.querySelector('#nombre').value;
    const empresa = document.querySelector('#empresa').value;
    const telefono = document.querySelector('#telefono').value;

    if (nombre === "" || empresa === "" || telefono === "") {
        mostrarNotificacion();
    } else {
        console.log('el campo tiene algo')
    }
}

function mostrarNotificacion() {
    const notificacion = document.createElement('div');
    notificacion.textContent = 'Hubo un error';

    formularioContactos.insertBefore(notificacion, document.querySelector('form legend'));
}
