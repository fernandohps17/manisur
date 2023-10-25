const sliderReviews = () => {
  const prev = document.querySelector(".prev");
  const next = document.querySelector(".next");
  const slider = document.querySelector(".slider");
  const auto = 350;
  const container = (clientWidth = document.getElementById("testimonios_contenedor").clientWidth);

  let total = 0;

  // console.log({ prev, next, slider, container });

  prev.addEventListener("click", () => {
    total -= auto;
    if (total < 0) {
      slider.scrollLeft += container;
      total = container;
    } else {
      slider.scrollLeft -= auto;
    }
  });

  next.addEventListener("click", () => {

    total += auto;
    if (total >= container) {
      slider.scrollLeft -= total;
      total = 0;
    } else {
      slider.scrollLeft += auto;
    }
  });

  setInterval(() => {
    total += auto;
    if (total >= container) {
      slider.scrollLeft -= total;
      total = 0;
    } else {
      slider.scrollLeft += auto;
    }
  }, 5000);
};

(() => {
  setTimeout(sliderReviews, 7000);
})();
