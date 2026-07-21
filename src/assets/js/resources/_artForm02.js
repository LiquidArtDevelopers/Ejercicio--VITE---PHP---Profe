const formulario = document.querySelector("#idForAjax")

// Este recurso tambien se carga en vistas sin formulario, como algunas traducciones.
if (formulario) {
    const esEuskera = formulario.querySelector('[name="lang"]')?.value === "eu"
    const textos = esEuskera
        ? {
            jsonInvalido: "Zerbitzariaren erantzuna ezin izan da prozesatu.",
            envioFallido: "Ezin izan da formularioa bidali.",
            conexionFallida: "Ezin izan da zerbitzariarekin konektatu.",
            tiempoAgotado: "Zerbitzariak denbora gehiegi behar izan du erantzuteko. Saiatu berriro.",
            confirmacion: (nombre) => `Zure kontsulta jaso dugu, ${nombre}. Ahal bezain laster erantzungo dizugu.`,
        }
        : {
            jsonInvalido: "Ha ocurrido un error al procesar la respuesta del servidor.",
            envioFallido: "No se ha podido enviar el formulario.",
            conexionFallida: "No se ha podido conectar con el servidor.",
            tiempoAgotado: "El servidor ha tardado demasiado en responder. Inténtalo de nuevo.",
            confirmacion: (nombre) => `Hemos recibido tu consulta, ${nombre}. Te responderemos lo antes posible.`,
        }
    const botonEnviar = formulario.querySelector("#botonEnviarAjax")
    const controles = formulario.querySelectorAll("input, textarea, button")
    const errorFormulario = document.querySelector("#errorForm02")
    const loader = document.querySelector("#moduloLoader01")
    const modalEnvio = document.querySelector("#modal_envio")
    const tituloModal = document.querySelector("#h3_modal_envio")
    const textoModal = document.querySelector("#p_modal_envio")
    const botonModal = document.querySelector("#boton_modal_envio")

    generarCaptcha()

    botonModal?.addEventListener("click", function () {
        modalEnvio.style.display = "none"
        formulario.style.display = "flex"
        formulario.reset()
        cambiarEstadoFormulario(false)
        generarCaptcha()
    })

    formulario.addEventListener("submit", function (evento) {
        evento.preventDefault()

        const camposFormulario = new FormData(formulario)
        const xmlhttp = new XMLHttpRequest()

        mostrarError("")
        cambiarEstadoFormulario(true)

        xmlhttp.open("POST", formulario.action, true)
        xmlhttp.timeout = 40000

        xmlhttp.onload = function () {
            let respuesta

            try {
                respuesta = JSON.parse(xmlhttp.responseText)
            } catch (error) {
                console.error("El servidor no ha devuelto un JSON valido.", error)
                mostrarError(textos.jsonInvalido)
                cambiarEstadoFormulario(false)
                return
            }

            if (xmlhttp.status < 200 || xmlhttp.status >= 300) {
                mostrarError(respuesta.mensaje || textos.envioFallido)
                cambiarEstadoFormulario(false)
                return
            }

            if (respuesta.fallo === true) {
                mostrarError(respuesta.mensaje)
                cambiarEstadoFormulario(false)
                return
            }

            cambiarEstadoFormulario(false)
            formulario.style.display = "none"
            modalEnvio.style.display = "flex"
            tituloModal.innerText = respuesta.mensaje
            textoModal.innerText = textos.confirmacion(respuesta.param3)
        }

        xmlhttp.onerror = function () {
            mostrarError(textos.conexionFallida)
            cambiarEstadoFormulario(false)
        }

        xmlhttp.ontimeout = function () {
            mostrarError(textos.tiempoAgotado)
            cambiarEstadoFormulario(false)
        }

        xmlhttp.send(camposFormulario)
    })

    function cambiarEstadoFormulario(enviando) {
        loader.style.display = enviando ? "initial" : "none"
        formulario.style.filter = enviando ? "blur(2px)" : "initial"
        botonEnviar.style.pointerEvents = enviando ? "none" : "initial"

        controles.forEach(function (control) {
            control.disabled = enviando
        })
    }

    function mostrarError(mensaje) {
        errorFormulario.innerText = mensaje
    }

    function generarCaptcha() {
        const num1 = formulario.querySelector("#num1ajax")
        const num2 = formulario.querySelector("#num2ajax")
        const operador = formulario.querySelector("#operadorajax")
        const respuestaSistema = formulario.querySelector("#respSystemajax")

        const valor1 = Math.floor(Math.random() * 10)
        const valor2 = Math.floor(Math.random() * 10)
        const operacion = Math.floor(Math.random() * 3)
        let resultado

        if (operacion === 0) {
            resultado = valor1 + valor2
            operador.innerText = "+"
        } else if (operacion === 1) {
            resultado = valor1 - valor2
            operador.innerText = "-"
        } else {
            resultado = valor1 * valor2
            operador.innerText = "x"
        }

        num1.innerText = valor1
        num2.innerText = valor2
        respuestaSistema.value = resultado
    }
}
