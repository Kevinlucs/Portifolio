// SCROLLBAR
// A função que vai gerenciar a rolagem suave
document.addEventListener("wheel", function(event) {
  const sections = document.querySelectorAll("section");
  let scrollDirection = event.deltaY;

  // Verifica se o scroll foi para baixo ou para cima
  if (scrollDirection > 0) {
      // Rolando para baixo: pega a próxima seção
      for (let i = 0; i < sections.length; i++) {
          if (window.scrollY >= sections[i].offsetTop && window.scrollY < sections[i + 1]?.offsetTop) {
              if (sections[i + 1]) {
                  window.scrollTo({
                      top: sections[i + 1].offsetTop,
                      behavior: "smooth"
                  });
              }
              break;
          }
      }
  } else {
      // Rolando para cima: pega a seção anterior
      for (let i = sections.length - 1; i >= 0; i--) {
          if (window.scrollY <= sections[i].offsetTop && window.scrollY > sections[i - 1]?.offsetTop) {
              if (sections[i - 1]) {
                  window.scrollTo({
                      top: sections[i - 1].offsetTop,
                      behavior: "smooth"
                  });
              }
              break;
          }
      }
  }
});

// QUALIFICAÇÃO | WORK
const tabs = document.querySelectorAll("[data-target]"),
  tabContents = document.querySelectorAll("[data-content]");

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    const target = document.querySelector(tab.dataset.target);

    tabContents.forEach((tabContent) => {
      tabContent.classList.remove("qualification-active");
    });
    target.classList.add("qualification-active");

    tabs.forEach((tab) => {
      tab.classList.remove("qualification-active");
    });

    tab.classList.add("qualification-active");
  });
});