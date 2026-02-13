window.addEventListener("DOMContentLoaded", () => {
    const carrossel = document.getElementById("carrossel");

    // Duplicar os itens do carrossel
    const items = [...carrossel.children];
    items.forEach((item) => {
        const clone = item.cloneNode(true);
        carrossel.appendChild(clone);
    });
});