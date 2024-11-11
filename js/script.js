const carrito = document.getElementById('carrito');
const elementos1 = document.getElementById('lista-1');
const lista = document.querySelector('#lista-carrito tbody');
const vaciarCarritoBtn = document.getElementById('vaciar-carrito');

// Inicializa AutoAnimate en el contenedor del carrito
document.addEventListener('DOMContentLoaded', () => {
    autoAnimate(lista);
});

// Cargar Event Listeners
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
        const elemento = e.target.closest('.product'); // Selecciona el contenedor de producto
        leerDatosElemento(elemento);
    }
}

function leerDatosElemento(elemento) {
    const infoElemento = {
        imagen: elemento.querySelector('img').src,
        titulo: elemento.querySelector('h3').textContent,
        precio: elemento.querySelector('.precio').textContent,
        id: elemento.querySelector('a').getAttribute('data-id')
    };
    insertarCarrito(infoElemento);
}

function insertarCarrito(elemento) {
    // Crea una fila con los datos del producto
    const row = document.createElement('tr');
    row.innerHTML = `
        <td>
            <img src="${elemento.imagen}" width="100" />
        </td>
        <td>
            ${elemento.titulo}
        </td>
        <td>
            ${elemento.precio}
        </td>
        <td>
            <a href="#" class="borrar" data-id="${elemento.id}">X</a>
        </td>
    `;

    // Agrega la fila al carrito y AutoAnimate se encarga de la animación
    lista.appendChild(row);
}

function eliminarElemento(e) {
    e.preventDefault();

    if (e.target.classList.contains('borrar')) {
        // Elimina el elemento del DOM y AutoAnimate manejará la animación
        e.target.parentElement.parentElement.remove();
    }
}

function vaciarCarrito() {
    // Elimina todos los elementos del carrito con animación
    while (lista.firstChild) {
        lista.removeChild(lista.firstChild);
    }
    return false;
}