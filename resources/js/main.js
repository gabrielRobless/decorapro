

document.addEventListener('DOMContentLoaded', function() {

    const subPapel = document.querySelector(".sub_papel__contenedor");
    const subPersianas = document.querySelector(".sub_papel-persianas__contenedor");
    const menupapel = document.querySelector(".papeltapiz");
    const menupersianas = document.querySelector(".persianas");
    const body = document.querySelector("main");

    // Mantener el submenú visible mientras esté sobre el menú correspondiente
    menupapel.addEventListener("mouseover", () => {
        subPapel.classList.remove("inactivo");
        subPersianas.classList.add("inactivo");  // Ocultar el submenú de persianas si se pasa por el de papel
    });

    menupersianas.addEventListener("mouseover", () => {
        subPersianas.classList.remove("inactivo");
        subPapel.classList.add("inactivo");  // Ocultar el submenú de papel si se pasa por el de persianas
    });

    // Cerrar los submenús si el clic es fuera del menú o submenú
    body.addEventListener("mouseover", (event) => {
        if (!menupapel.contains(event.target) && !subPapel.contains(event.target)) {
            subPapel.classList.add("inactivo");
        }

        if (!menupersianas.contains(event.target) && !subPersianas.contains(event.target)) {
            subPersianas.classList.add("inactivo");
        }
    });

    // Evitar que el clic dentro de los submenús cierre el menú
    subPapel.addEventListener("click", (event) => {
        event.stopPropagation();
    });
    subPersianas.addEventListener("click", (event) => {
        event.stopPropagation();
    });


    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    let currentIndex = 0;
    let autoSlideInterval;
    const totalSlides = slides.length - 1; // Restamos 1 por la imagen duplicada

    function updateSlider() {
        slider.style.transition = "transform .5s ease-in-out";
        slider.style.transform = `translateX(${-currentIndex * 100}%)`;

        // Si es el último slide duplicado, hacer un "reset" rápido al primer slide real
        if (currentIndex === totalSlides) {
            setTimeout(() => {
                slider.style.transition = "none";
                currentIndex = 0;
                slider.style.transform = `translateX(${-currentIndex * 100}%)`;
            }, 500);
        }
    }

    function moveToNextSlide() {
        if (currentIndex < totalSlides) {
            currentIndex++;
        }
        updateSlider();
    }

    function moveToPrevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalSlides - 1; // Va al último slide real
            slider.style.transition = "none"; // Elimina la animación para que no haya salto
            slider.style.transform = `translateX(${-currentIndex * 100}%)`;
            setTimeout(() => {
                slider.style.transition = "transform .5s ease-in-out";
                currentIndex--;
                updateSlider();
            }, 50);
        }
        updateSlider();
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(() => {
            moveToNextSlide();
        }, 8000);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }

    nextButton.addEventListener("click", () => {
        moveToNextSlide();
        stopAutoSlide();
        startAutoSlide();
    });

    prevButton.addEventListener("click", () => {
        moveToPrevSlide();
        stopAutoSlide();
        startAutoSlide();
    });

    updateSlider();
    startAutoSlide();


});


