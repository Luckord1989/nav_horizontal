let servicios = document.getElementById("servicios");
let button__servicios = servicios.children[0];
let submenu__servicios = servicios.children[1];

let contactos = document.getElementById("contacto");
let button__contactos = contactos.children[0];
let submenu__contacto = contactos.children[1];


servicios.addEventListener("mouseover", () => {
    mostrar_submenu_servicios();
    ocultar_submenu_contactos();
});

servicios.addEventListener("mouseout", () => {
    ocultar_submenu_servicios();
});

contactos.addEventListener("mouseover", () => {
    mostrar_submenu_contactos();
    ocultar_submenu_servicios();
});

contactos.addEventListener("mouseout", () => {
    ocultar_submenu_contactos();
});

//Metodos personalizados

function mostrar_submenu_servicios() {
    button__servicios.classList.add("arrow");
    submenu__servicios.classList.add("mostrar__submenu");
}

function ocultar_submenu_servicios() {
    button__servicios.classList.remove("arrow");
    submenu__servicios.classList.remove("mostrar__submenu");
}

function mostrar_submenu_contactos() {
    button__contactos.classList.add("arrow");
    submenu__contacto.classList.add("mostrar__submenu");
}

function ocultar_submenu_contactos() {
    button__contactos.classList.remove("arrow");
    submenu__contacto.classList.remove("mostrar__submenu");
}