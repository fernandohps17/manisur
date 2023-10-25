function modal() {
    this.modal = document.querySelector(".modal");
    window.addEventListener("click", (e) => {
        e.target == this.modal ? (this.modal.style.display = "none") : "";
    });
}

(() => {
    modal();
})();
