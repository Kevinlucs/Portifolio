"use strict";

/**
 * Script Principal
 *
 * Gerencia funcionalidades gerais do site:
 * - Inicialização do AOS (Animações)
 * - Navegação Mobile e Sticky Header
 * - Scroll Spy (Link ativo na navegação)
 * - Botão "Voltar ao topo"
 */

import form from "./form.js";

document.addEventListener("DOMContentLoaded", () => {
    // Inicializa animações on-scroll
    AOS.init({ once: true });

    // Inicializa formulário (se existir lógica no form.js)
    form();

    // --- Seleção de Elementos ---
    const nav = document.querySelector("#nav");
    const navBtn = document.querySelector("#nav-btn");
    const navBtnImg = document.querySelector("#nav-btn-img");
    const goToTop = document.getElementById("goToTop");
    const navLinks = document.querySelectorAll("header nav a");
    const sections = document.querySelectorAll("section");

    /**
     * Atualiza o link ativo no menu de navegação baseando-se no scroll atual.
     * Verifica qual seção está visível na tela.
     */
    function updateActiveLink() {
        const scrollPos = window.scrollY;

        // Remove classe ativa de todos
        navLinks.forEach((link) => link.classList.remove("active"));

        for (let i = 0; i < sections.length; i++) {
            const section = sections[i];
            // Ajuste de offset para considerar o header fixo
            const offset = section.offsetTop - 170;
            const height = section.offsetHeight;
            const id = section.getAttribute("id");

            // Verifica se o scroll está dentro dos limites da seção
            if (scrollPos >= offset && scrollPos < offset + height) {
                const activeLink = document.querySelector(
                    `header nav a[href*="${id}"]`,
                );
                if (activeLink) activeLink.classList.add("active");
                break; // Para o loop ao encontrar a seção ativa
            }
        }
    }

    // --- Event Listeners ---

    // 1. Alternar Menu Mobile (Abrir/Fechar)
    navBtn.onclick = () => {
        if (nav.classList.toggle("open")) {
            navBtnImg.src = "assets/img/icons/close.svg";
        } else {
            navBtnImg.src = "assets/img/icons/open.svg";
        }
    };

    // 2. Fechar Menu ao clicar em um link (UX Mobile)
    navLinks.forEach((link) => {
        link.addEventListener("click", () => {
            if (nav.classList.contains("open")) {
                nav.classList.remove("open");
                navBtnImg.src = "assets/img/icons/open.svg";
            }
        });
    });

    // 3. Efeitos de Scroll (Sticky Header e Botão Topo)
    window.addEventListener("scroll", () => {
        const header = document.querySelector("#header");
        const hero = document.querySelector("#home");

        // Define ponto de gatilho baseando-se na altura do Hero
        const triggerHeight = hero.offsetHeight - 170;

        if (window.scrollY > triggerHeight) {
            header.classList.add("header-sticky");
            goToTop.classList.add("reveal");
        } else {
            header.classList.remove("header-sticky");
            goToTop.classList.remove("reveal");
        }

        updateActiveLink();
    });

    // Inicialização
    updateActiveLink();
});
