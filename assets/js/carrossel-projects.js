/**
 * Carrossel de Projetos Responsivo
 *
 * Lógica customizada para um carrossel infinito (looping) com breakpoints
 * responsivos e suporte a diferentes quantidades de slides visíveis.
 */
document.addEventListener("DOMContentLoaded", () => {
    const track = document.querySelector(".carousel-track");
    const slidesOriginal = Array.from(track.children); // Slides originais (<li>)
    const prevButton = document.querySelector(".carousel-button.prev");
    const nextButton = document.querySelector(".carousel-button.next");

    let slides = []; // Array final (originais + clones)
    let slideWidth = 0;
    let currentIndex = 0;
    let slidesToShow = 1;
    let isTransitioning = false;
    let loopingAtivo = false;

    // 1) Define quantos slides são visíveis por breakpoint
    function visibleSlides() {
        const width = window.innerWidth;
        if (width <= 720) return 1;
        if (width <= 977) return 2;
        return 3; // Desktop (> 978px)
    }

    // 2) Configura a estrutura dos slides (Clonagem para Looping)
    function setupSlides() {
        // Limpa o track atual
        while (track.firstChild) {
            track.removeChild(track.firstChild);
        }

        slidesToShow = visibleSlides();
        const totalReal = slidesOriginal.length;

        // Só ativa looping se houver mais slides reais que slots visíveis
        if (totalReal > slidesToShow) {
            loopingAtivo = true;

            // Cria clones para simular infinito
            const clonesBefore = slidesOriginal
                .slice(-slidesToShow)
                .map((s) => s.cloneNode(true));
            const clonesAfter = slidesOriginal
                .slice(0, slidesToShow)
                .map((s) => s.cloneNode(true));

            slides = [...clonesBefore, ...slidesOriginal, ...clonesAfter];
        } else {
            loopingAtivo = false;
            slides = [...slidesOriginal];
        }

        // Adiciona todos ao DOM
        slides.forEach((slide) => track.appendChild(slide));

        // Define índice inicial (pula os clones iniciais se houver loop)
        currentIndex = loopingAtivo ? slidesToShow : 0;

        // Atualiza dimensões
        updateSlideWidth();
    }

    // 3) Calcula larguras e posiciona o carrossel
    function updateSlideWidth() {
        const slidesOriginalCount = slidesOriginal.length;
        slidesToShow = visibleSlides();

        // Detecta caso especial: apenas 2 projetos em tela grande
        const canTwoOnly =
            slidesOriginalCount === 2 &&
            !loopingAtivo &&
            window.innerWidth > 977;

        if (canTwoOnly) {
            track.classList.add("two-only");
        } else {
            track.classList.remove("two-only");
        }

        // Limpa estilos inline de largura anteriores (deixa o CSS controlar)
        slides.forEach((slide) => {
            slide.style.minWidth = "";
            slide.style.height = "auto";
        });

        // Força recálculo do layout para ler o tamanho real do slide definido pelo CSS
        // Pega a largura do primeiro slide visível (que agora obedece ao flex-basis do CSS)
        if (slides.length > 0) {
            const firstSlide = slides[0];
            slideWidth = firstSlide.getBoundingClientRect().width;
        }

        // Reposiciona sem transição
        track.style.transition = "none";

        if (track.classList.contains("two-only")) {
            track.style.transform = "none";
        } else {
            // Gap também é lido do CSS computado ou definido manualmente
            // Desktop: 20px, Tablet: 10px (definido no media.css)
            let gap = 20;
            if (window.innerWidth <= 977) {
                gap = 10;
            }

            // Offset inicial
            const offset = (slideWidth + gap) * currentIndex;
            track.style.transform = `translateX(-${offset}px)`;
        }

        // Reativa transição
        requestAnimationFrame(() => {
            track.style.transition = "";
        });

        toggleArrows();
    }

    // 4) Controle de visibilidade das setas
    function toggleArrows() {
        const totalReal = slidesOriginal.length;
        slidesToShow = visibleSlides();

        // Se houver mais slides reais que o número visível na tela, mostra setas
        if (totalReal > slidesToShow) {
            prevButton.style.display = "flex";
            nextButton.style.display = "flex";
        } else {
            prevButton.style.display = "none";
            nextButton.style.display = "none";
        }
    }

    // 5) Movimenta o carrossel
    function moveToSlide(newIndex) {
        if (isTransitioning || !loopingAtivo) return;

        isTransitioning = true;
        track.style.transition = "transform 0.4s ease-in-out";

        let gap = 20;
        if (window.innerWidth <= 977) {
            gap = 10;
        }

        // Se for mobile (1 slide), o gap visual entre eles não afeta o cálculo do offset
        // Mas como estamos transladando, precisamos considerar o espaço se houver margin/gap no CSS
        // No CSS atual: .carousel-track { gap: 5px } (geral) ou 10px (media query)
        // O slideWidth é calculado subtraindo o gap.
        // O deslocamento deve ser slideWidth + gap.

        const offset = (slideWidth + gap) * newIndex;
        track.style.transform = `translateX(-${offset}px)`;
        currentIndex = newIndex;

        // Verifica fim da transição para ajustar loop infinito (pulo invisível)
        track.addEventListener(
            "transitionend",
            () => {
                isTransitioning = false;
                const totalReal = slidesOriginal.length;

                let gap = 20;
                if (window.innerWidth <= 977) {
                    gap = 10;
                }

                // Se chegou no final (clones), volta para o início real
                if (currentIndex >= totalReal + slidesToShow) {
                    track.style.transition = "none";
                    currentIndex = slidesToShow;
                    const resetOffset = (slideWidth + gap) * currentIndex;
                    track.style.transform = `translateX(-${resetOffset}px)`;
                }
                // Se chegou no início (clones), vai para o final real
                else if (currentIndex < slidesToShow) {
                    track.style.transition = "none";
                    currentIndex = totalReal + slidesToShow - 1;
                    const resetOffset = (slideWidth + gap) * currentIndex;
                    track.style.transform = `translateX(-${resetOffset}px)`;
                }
            },
            { once: true },
        );
    }

    // 6) Event Listeners (Navegação e Resize)
    nextButton.addEventListener("click", () => {
        if (loopingAtivo) moveToSlide(currentIndex + 1);
    });

    prevButton.addEventListener("click", () => {
        if (loopingAtivo) moveToSlide(currentIndex - 1);
    });

    window.addEventListener("resize", () => {
        setupSlides();
    });

    // Início
    setupSlides();
});
