

document.addEventListener('DOMContentLoaded', function() {

    const subPapel = document.querySelector(".sub_papel__contenedor")
    const subPersianas = document.querySelector(".sub_papel-persianas__contenedor")
    const menupapel = document.querySelector(".papeltapiz");
    const menupersianas = document.querySelector(".persianas");
    const buttons = document.querySelectorAll("button");


    const body =document.querySelector("body");
    menupapel.addEventListener("mouseover",()=>{
        subPapel.classList.remove("inactivo")
    });

    menupersianas.addEventListener("mouseover", ()=>{
        subPersianas.classList.remove("inactivo")
    });

    body.addEventListener("click",()=>{
        subPapel.classList.add("inactivo")
        subPersianas.classList.add("inactivo")
    });

    console.log("hola2")

    const prevButton = document.querySelector(".prev");
    const nextButton = document.querySelector(".next");
    const slider = document.querySelector(".slider");
    const slides = document.querySelectorAll(".slide");
    let currentIndex = 0;
    let autoSlideInterval;

    // Muestra la imagen actual
    function updateSlider() {
      const offset = -currentIndex * 100; // Cada imagen ocupa el 100% del contenedor
      slider.style.transform = `translateX(${offset}%)`;
    }

    // Mueve al siguiente slide
    function moveToNextSlide() {
      if (currentIndex < slides.length - 1) {
        currentIndex++;
      } else {
        currentIndex = 0; // Vuelve al primer slide al llegar al final
      }
      updateSlider();
    }

    // Mueve al slide anterior
    function moveToPrevSlide() {
      if (currentIndex > 0) {
        currentIndex--;
      } else {
        currentIndex = slides.length - 1; // Vuelve al último slide
      }
      updateSlider();
    }

    // Inicia el cambio automático de slides
    function startAutoSlide() {
      autoSlideInterval = setInterval(() => {
        moveToNextSlide();
      }, 2000);
    }

    // Detiene el cambio automático de slides
    function stopAutoSlide() {
      clearInterval(autoSlideInterval);
    }

    // Agrega eventos a los botones
    nextButton.addEventListener("click", () => {
      moveToNextSlide();
      stopAutoSlide();
      startAutoSlide(); // Reinicia el temporizador al interactuar
    });

    prevButton.addEventListener("click", () => {
      moveToPrevSlide();
      stopAutoSlide();
      startAutoSlide(); // Reinicia el temporizador al interactuar
    });

    // Iniciar el slider
    updateSlider();
    startAutoSlide(); // Comienza el cambio automático




});


