function CargarTagManager() {
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js",
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-5MJHGT4");
}

const start_cookie = (name) => {
    if (!getCookie(name)) {
        let popup = document.getElementById("barraaceptacion");
        popup.style.display = "grid";

        let check = document.getElementById("check-cookie");
        let custom = document.getElementById("custom-cookie");

        check.addEventListener("click", () => {
            setCookies(name, "1", 30);
            popup.style.display = "none";
            insert_cookies();
        });

        custom.addEventListener("click", () => {
            popup.style.display = "none";

            let modal = document.getElementById("custom-cookie-modal");
            modal.style.display = "grid";
        });

        custom_cookie();
    } else {
        insert_cookies();
    }
};

const getCookie = (name) => {
    let all_cookies = document.cookie;
    let array_cookies = all_cookies.split(";");
    let validate = false;

    array_cookies.forEach((cookie) => {
        let name_cookie = cookie.split("=");

        if (name_cookie[0].trim() === name) {
            validate = true;
        }

        return validate;
});

    return validate;
};

const setCookies = (name, value, expires) => {
    let date = new Date();
  date.setTime(date.getTime() + expires * 24 * 60 * 60 * 1000);

    let expire = `expires=${date.toUTCString()}`;

    document.cookie = `${name}=${value}; ${expire}; path=/`;
};

const insert_cookies = () => {
    CargarTagManager();
};

// modal de las cookie
const custom_cookie = () => {
    let btn_save = document.getElementById("btn-save");
    let btn_all = document.getElementById("acept-all");
    let modal = document.getElementById("custom-cookie-modal");
    let close_modal = document.getElementById("close-modal-custom-cookie");

    close_modal.addEventListener("click", () => {
        modal.style.display = "none";
      // let popup = document.getElementById("barraaceptacion");
      // popup.style.display = "grid";
});

    btn_save.addEventListener("click", () => {
        modal.style.display = "none";
        save_custom_cookie();
    });

    btn_all.addEventListener("click", () => {
        modal.style.display = "none";
        change_yes_imputs();
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
            let popup = document.getElementById("barraaceptacion");
            popup.style.display = "grid";
        }
    });

    validate_imputs();
};

const save_custom_cookie = () => {
    let form = new FormData(document.getElementById("form-custom-cookie"));
    let smallTime = false;

    if (form.get("analytics") === "si") {
        localStorage.setItem("analytics", "si");
    } else {
        localStorage.setItem("analytics", "no");
        smallTime = true;
    }

    if (form.get("redes") === "si") {
        localStorage.setItem("redes", "si");
    } else {
        localStorage.setItem("redes", "no");
        smallTime = true;
    }

    if (form.get("publicidad") === "si") {
        localStorage.setItem("publicidad", "si");
    } else {
        localStorage.setItem("publicidad", "no");
        smallTime = true;
    }

    if (form.get("valoracion") === "si") {
        localStorage.setItem("valoracion", "si");
    } else {
        localStorage.setItem("valoracion", "no");
        smallTime = true;
    }

    if (smallTime) {
        setCookies("cookieaceptada", "1", 1);
    } else {
        setCookies("cookieaceptada", "1", 30);
    }

    insert_cookies();
};

const change_yes_imputs = () => {
    localStorage.setItem("analytics", "si");
    localStorage.setItem("redes", "si");
    localStorage.setItem("publicidad", "si");
    localStorage.setItem("valoracion", "si");
    setCookies("cookieaceptada", "1", 30);
    insert_cookies();
};

const validate_imputs = () => {
    var formElements = document.getElementById("form-custom-cookie").elements;

    for (let i = 0, element; (element = formElements[i++]);) {
        if (element.value == localStorage.getItem(element.name)) {
            element.checked = true;
        }
    }
};

(() => {
    start_cookie("cookieaceptada");
})();
