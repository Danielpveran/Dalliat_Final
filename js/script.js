const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');

const lista = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

// Asegurarse de que la función se declare correctamente
function cargarEventListeners() {
    elementos1.addEventListener('click', comprarElemento);
    carrito.addEventListener('click', eliminarElemento);
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);
}

// Llamar a la función para cargar los event listeners
cargarEventListeners();

function comprarElemento(e) {
    e.preventDefault();
    // Verificar si el clic fue en un botón de "Agregar al carrito"
    if (e.target.classList.contains('agregar-carrito')) {
        const elemento = e.target.closest('.product'); // Cambiado para seleccionar el elemento correcto
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento) {
    const infoElemento = {
        imagen: elemento.querySelector('img').src,
        titulo: elemento.querySelector('h3').textContent, // Corregido a querySelector y texto
        precio: elemento.querySelector('.precio').textContent, // Corregido a querySelector y texto
        id: elemento.querySelector('a').getAttribute('data-id') // Corregido a querySelector
    };
    insertarCarrito(infoElemento);
}

function insertarCarrito(elemento) {
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img src="${elemento.imagen}" width=100 />
        </td>
        <td>
            ${elemento.titulo}
        </td>
        <td>
            ${elemento.precio}
        </td>
        <td>
            <a href="#" class="borrar" data-id="${elemento.id}">X</a> <!-- Corregido href -->
        </td>
    `;

    lista.appendChild(row);
}

function eliminarElemento(e) {
    e.preventDefault();
    let elemento, elementoId;

    if (e.target.classList.contains('borrar')) {
        e.target.parentElement.parentElement.remove();
        elementoId = e.target.getAttribute('data-id'); // Cambiado para obtener el ID correcto
        // Aquí podrías manejar el ID si necesitas hacer algo con él
    }
}

function vaciarCarrito() {
    while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
    }
    return false;
}