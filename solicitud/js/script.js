document.addEventListener("DOMContentLoaded", () => {
    // El elemento que tendrá el autocompletado
    const $inputNombre = document.querySelector("#Diagnosticos");



    let ac = new Awesomplete($inputNombre, {
        list: [], // Por defecto es una lista vacía, hasta que se comienza a escribir
        minChars: 1, // Cuántos caracteres escribir para autocompletar
    });

    // Esta función filtra los datos y refresca el autocompletado
    const refrescarLista = () => {
        let valorDelInput = $inputNombre.value;
        if (!valorDelInput) return; // Detener si no hay valor

        // Buscar nombres de la base de datos con PHP
        fetch("./componentes/data.php?busqueda=" + valorDelInput)
            .then(r => r.json())
            .then(diagnosticos => {
                // Mapeamos, ya que se requiere label y value
                ac.list = diagnosticos.map(diagnosticos => ({
                    label: diagnosticos.Nombre_Diagnosticos, // Lo que aparece al buscar
                    value: diagnosticos.Cod_Diagnosticos, // El valor que se pone en el input
                }));
            });
    };

    // Agregar un listener para cuando se cambie el contenido; en el mismo se refresca la lista
    $inputNombre.addEventListener("input", () => {
        refrescarLista();
    });

});