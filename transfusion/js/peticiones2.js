document.getElementById("Lugar").addEventListener("keyup", getCodigos)

function getCodigos() {

    let inputCP = document.getElementById("Lugar").value
    let lista = document.getElementById("lista2")

    if (inputCP.length > 0) {

        let url = "inc/getCodigos2.php"
        let formData = new FormData()
        formData.append("Lugar", inputCP)

        fetch(url, {
            method: "POST",
            body: formData,
            mode: "cors" //Default cors, no-cors, same-origin
        }).then(response => response.json())
            .then(data => {
                lista.style.display = 'block'
                lista.innerHTML = data
            })
            .catch(err => console.log(err))
    } else {
        lista.style.display = 'none'
    }
}

function mostrar(cp) {
    document.getElementsByClassName('lista2')[0].style.display = 'none'
    document.getElementById("Lugar").value = cp;
    
    
}