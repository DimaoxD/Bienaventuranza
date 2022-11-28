document.getElementById("CamaS").addEventListener("keyup", getCodigos)

function getCodigos() {

    let inputCP = document.getElementById("CamaS").value
    let lista = document.getElementById("lista")

    if (inputCP.length > 0) {

        let url = "inc/getCodigos.php"
        let formData = new FormData()
        formData.append("CamaS", inputCP)

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
    document.getElementsByClassName('lista')[0].style.display = 'none'
    document.getElementById("CamaS").value = cp;
    
    
}