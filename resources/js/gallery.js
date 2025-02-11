window.filterGallery = function (category) {
    const items = document.querySelectorAll('.gallery-item');
    const buttons = document.querySelectorAll('.filter-buttons button');

    // Actualizar el botón activo
    buttons.forEach(button => button.classList.remove('active'));
    document.querySelector(`button[onclick="filterGallery('${category}')"]`).classList.add('active');

    // Mostrar u ocultar elementos con animación
    items.forEach(item => {
        if (category === 'all' || item.classList.contains(category)) {
            item.classList.remove('hidden'); // Mostrar el elemento
            item.classList.add('fade-in'); // Agregar animación
            setTimeout(() => item.classList.remove('fade-in'), 500); // Quitar animación después de que termine
        } else {
            item.classList.add('hidden'); // Ocultar el elemento
        }
    });
};
