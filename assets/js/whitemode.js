/**
 * Modo Claro / Escuro (Dark Mode Toggle)
 *
 * Gerencia a alternância de tema e persiste a escolha no localStorage.
 */
document.addEventListener("DOMContentLoaded", () => {
    // Elementos
    const themeSwitch = document.getElementById("theme-switch");

    // Estado Inicial
    let whitemode = localStorage.getItem("whitemode");

    // Habilita Modo Claro
    const enableWhitemode = () => {
        document.body.classList.add("whitemode");
        localStorage.setItem("whitemode", "active");
    };

    // Desabilita Modo Claro
    const disableWhitemode = () => {
        document.body.classList.remove("whitemode");
        localStorage.setItem("whitemode", null);
    };

    // Checagem Inicial
    if (whitemode === "active") enableWhitemode();

    // Event Listener do Botão
    themeSwitch.addEventListener("click", () => {
        whitemode = localStorage.getItem("whitemode");
        whitemode !== "active" ? enableWhitemode() : disableWhitemode();
    });
});
