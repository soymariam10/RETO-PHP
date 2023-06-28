const enlaces = document.querySelectorAll('.enlace');
const contenedor = document.getElementById('contentphp');
var head = document.head;
// Agrega un controlador de eventos a cada enlace
enlaces.forEach((val, id) => {
    val.removeEventListener('click', cargarPagina);
    val.addEventListener('click', cargarPagina);
});
function cargarPagina(e) {
    contenedor.innerHTML = '';
    var url = e.target.dataset.urldestino; // Obtiene la URL del enlace

    // Realiza la solicitud HTTP a la página PHP utilizando fetch
    fetch(url)
        .then(function (response) {
            if (response.ok) {
                return response.text(); // Convierte la respuesta a texto
            }
            throw new Error('Error en la solicitud HTTP');
        } )
}