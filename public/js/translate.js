let comboGoogleTradutor = null; //Variable global

// funcion para la configuracion del traslate
function googleTranslateElementInit() {
    new google.translate.TranslateElement(
        {
            pageLanguage: "es",
            includedLanguages: "en,es",
            layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL,
        },
        "google_translate_element"
    );

    comboGoogleTradutor = document
        .getElementById("google_translate_element")
        .querySelector(".goog-te-combo");
}

// funcion para cargar el script del traslate
function cargarTraslate() {
    var scriptTag = document.createElement("script");
    scriptTag.setAttribute(
        "src",
        "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
    );
    document.getElementsByTagName("head")[0].appendChild(scriptTag);
}

// funcion que ejecuta el evento para hacer el traslate
function changeEvent(el) {
    if (el.fireEvent) {
        el.fireEvent("onchange");
    } else {
        let evObj = document.createEvent("HTMLEvents");

        evObj.initEvent("change", false, true);
        el.dispatchEvent(evObj);
    }
}

// funcion para los flag que al dar click llama a la funcion que ejecuta el evento del traslate
function trocarIdioma(sigla) {
    if (comboGoogleTradutor) {
        comboGoogleTradutor.value = sigla;
        changeEvent(comboGoogleTradutor); //Dispara a troca
    }
}

// buscamos los botones para el cambio de idioma
const get_btn = (className) => {
    const btns = document.querySelectorAll(className);
    // recorremos el arreglo para darle el evento a cada bandera
    btns.forEach((flag) => {
        flag.classList.remove("opacity");
        flag.addEventListener("click", () => {
            trocarIdioma(flag.getAttribute("lang"));
        });
    });
};

// esperamos 4 segundos y mandamos a llamar todo
setTimeout(() => {
    cargarTraslate();
}, 1000);
setTimeout(() => {
    get_btn(".change_lenguaje");
}, 2000);


// Funcion para recargar la pagina
const refresh = document.getElementById('refresh');
refresh.addEventListener('click', e => {
    location.reload();
})

const refresh2 = document.getElementById('refresh2');
refresh2.addEventListener('click', e => {
    location.reload();
})