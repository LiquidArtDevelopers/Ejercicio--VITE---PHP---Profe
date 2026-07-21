export function artAcordeon01() {
  const botones = document.querySelectorAll(".mostrar");
  const esEuskera = document.documentElement.lang.toLowerCase().startsWith("eu");
  const etiquetaAbrir = esEuskera ? "Gehiago erakutsi" : "Mostrar más";
  const etiquetaCerrar = esEuskera ? "Gutxiago erakutsi" : "Mostrar menos";

  botones.forEach((item) => {
    item.addEventListener("click", () => {
      const contenedorPadre = item.parentElement;
      const parrafo = contenedorPadre.querySelector(".respuesta");
      parrafo.classList.toggle("open");

      item.textContent = parrafo.classList.contains("open")
        ? etiquetaCerrar
        : etiquetaAbrir;
    });
  });
}
