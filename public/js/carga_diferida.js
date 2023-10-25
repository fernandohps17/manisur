function cargaImgDefer() {
    let options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.25
    }

    let callback = (entries, observer) => {
        entries.forEach(entry => {

            if (entry.isIntersecting) {

                if (entry.target.classList.contains('source')) {
                    let imageUrl = entry.target.getAttribute('data-img');
                    if (imageUrl) {
                        entry.target.srcset = imageUrl;
                        observer.unobserve(entry.target);
                    }
                }

                if (entry.target.className === 'image') {
                    let imageUrl = entry.target.getAttribute('data-img');
                    if (imageUrl) {
                        entry.target.src = imageUrl;
                        observer.unobserve(entry.target);
                    }
                }
            }
        });
    }

    let observer = new IntersectionObserver(callback, options);
    let images = document.querySelectorAll('.image');

    images.forEach(img => {
        observer.observe(img);
    });
}

(() => {
    cargaImgDefer()
})()