document.addEventListener("DOMContentLoaded",function(){
    navegacionFija();
})
const navegacionFija = () => {
    const header = document.getElementById('main-header');

    // Función que se ejecuta cuando el usuario hace scroll
    window.addEventListener('scroll', function() {
      // Verifica la posición de desplazamiento vertical
    if (window.scrollY > 0) {
        header.classList.add('fixed'); // Añade la clase 'fixed' cuando se hace scroll hacia abajo
    } else {
        header.classList.remove('fixed'); // Remueve la clase 'fixed' cuando se vuelve al tope de la página
    }
    });
}





