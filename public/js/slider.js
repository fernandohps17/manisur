(() => {
    const sourceMobile = document.getElementById("sourceMobile");
    const sourceDes = document.getElementById("sourceDes");
    const imageDes = document.getElementById("imageDes");
    const title = document.getElementById("title");
    const subtitle = document.getElementById("subtitle");
    const arrow_right = document.getElementById("arrow_right");
    const arrow_left = document.getElementById("arrow_left");
    const timeInteval = 10000;

    const imagenes = [
        {
            image: "/public/img/banner-inicio-01.jpg",
            webp: "/public/img/banner-inicio-01.webp",
            mobile: "/public/img/banner-inicio-01-mobile.webp",
            title: "MAQUINARIA PARA EL FRIO",
            subtitle: "Uso industrial, naval y doméstico",
        },
        {
            image: "/public/img/banner-inicio-02.jpg",
            webp: "/public/img/banner-inicio-02.webp",
            mobile: "/public/img/banner-inicio-02-mobile.webp",
            title: "FRÍO PARA SECTOR NAVAL",
            subtitle: "Frigoríficos, congeladores, fabricación de hielo, etc",
        },
        {
            image: "/public/img/banner-inicio-03.jpg",
            webp: "/public/img/banner-inicio-03.webp",
            mobile: "/public/img/banner-inicio-03-mobile.webp",
            title: "MAQUINARIA HOSTELERÍA",
            subtitle: "Congeladores, fábricas de hielo y frigoríficos para hostelería",
        },
        {
            image: "/public/img/banner-inicio-04.jpg",
            webp: "/public/img/banner-inicio-04.webp",
            mobile: "/public/img/banner-inicio-04-mobile.webp",
            title: "INSTALACIONES USO DOMÉSTICO",
            subtitle: "Aire acondicionado",
        },
    ];

    let indiceImagenes = 0;

    function cambiarImagenes(action = "next") {
        if (action === "next") {
            if (indiceImagenes < imagenes.length - 1) {
                indiceImagenes++;
            } else {
                indiceImagenes = 0;
            }
        } else {
            if (indiceImagenes === 0) {
                indiceImagenes = imagenes.length - 1
            } else {
                indiceImagenes--;
            }
        }

        imageDes.src = imagenes[indiceImagenes].image;
        sourceDes.srcset = imagenes[indiceImagenes].webp;
        sourceMobile.srcset = imagenes[indiceImagenes].mobile;
        title.innerHTML = imagenes[indiceImagenes].title;
        subtitle.innerHTML = imagenes[indiceImagenes].subtitle;
    }

    arrow_right.addEventListener('click', () => {
        cambiarImagenes()

        clearInterval(myTimer);
        myTimer = window.setInterval(cambiarImagenes, timeInteval);
    });

    arrow_left.addEventListener('click', () => {
        cambiarImagenes("prev")

        clearInterval(myTimer);
        myTimer = window.setInterval(cambiarImagenes, timeInteval);
    });

    let myTimer = window.setInterval(cambiarImagenes, timeInteval);
})();