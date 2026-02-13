<?php
session_start();
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kevin Lucas | Portfólio</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/media.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>
    <header id="header" class="header">
        <div class="container container-lg">
            <div class="header-nav">
                <button id="theme-switch" aria-label="Alternar tema">
                    <img src="assets/img/icons/sol.svg" alt="sol icon" />
                    <img src="assets/img/icons/lua.svg" alt="lua icon" />
                </button>

                <nav id="nav" class="nav">
                    <ul class="nav-list" data-aos="fade-down" data-aos-duration="1000">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a href="#projects" class="nav-link">Projetos</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contato</a>
                        </li>
                    </ul>
                    <button id="nav-btn" class="nav-btn" aria-label="Abrir menu">
                        <img id="nav-btn-img" src="assets/img/icons/open.svg" alt="Navigation button" />
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="container container-lg">
            <div class="hero-row" data-aos="fade-zoom-in" data-aos-easing="ease-in-out" data-aos-delay="500"
                data-aos-duration="1000">
                <div class="hero-img">
                    <img src="assets/img/hero/Foto.png" alt="">
                </div>
                <div class="hero-content">
                    <div class="about-social-list">
                        <div class="social-links-row">
                            <a href="https://github.com/Kevinlucs" target="_blank" aria-label="GitHub">
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                                    aria-hidden="true" viewBox="0 0 24 24" data-testid="GitHubIcon">
                                    <path
                                        d="M12 1.27a11 11 0 00-3.48 21.46c.55.09.73-.28.73-.55v-1.84c-3.03.64-3.67-1.46-3.67-1.46-.55-1.29-1.28-1.65-1.28-1.65-.92-.65.1-.65.1-.65 1.1 0 1.73 1.1 1.73 1.1.92 1.65 2.57 1.2 3.21.92a2 2 0 01.64-1.47c-2.47-.27-5.04-1.19-5.04-5.5 0-1.1.46-2.1 1.2-2.84a3.76 3.76 0 010-2.93s.91-.28 3.11 1.1c1.8-.49 3.7-.49 5.5 0 2.1-1.38 3.02-1.1 3.02-1.1a3.76 3.76 0 010 2.93c.83.74 1.2 1.74 1.2 2.94 0 4.21-2.57 5.13-5.04 5.4.45.37.82.92.82 2.02v3.03c0 .27.1.64.73.55A11 11 0 0012 1.27">
                                    </path>
                                </svg>
                            </a>

                            <a href="https://www.linkedin.com/in/keviinlucs/" target="_blank" aria-label="LinkedIn">
                                <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                                    aria-hidden="true" viewBox="0 0 24 24" data-testid="LinkedInIcon">
                                    <path
                                        d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <span class="hero-greeting"></span>
                    <h1 class="hero-heading">Kevin Lucas</h1>
                    <span class="hero-heading-subtitle">Desenvolvedor FullStack</span>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container">
            <div class="about-title">
                <h2 class="title"> Sobre </h2>
            </div>
            <div class="about-row">
                <div class="about-content" data-aos="fade-up" data-aos-duration="1000">
                    <p class="about-descr">
                        Sou graduado em Análise e Desenvolvimento de Sistemas e tenho pós-graduação em Desenvolvimento
                        Full Stack. Tenho conhecimento em HTML, CSS, JavaScript, PHP, Banco de Dados Oracle e MySQL.
                        Atualmente, estou estudando Laravel. Estou constantemente em busca de aprimorar minhas
                        habilidades e me manter atualizado com as tecnologias mais recentes.
                    </p>
                    <div class="about-download-btn">
                        <a href="assets/pdf/Curriculo Kevin Lucas.pdf" download="" class="btn btn-white">Download CV</a>
                    </div>
                </div>
                <!-- Carrossel de Linguagens -->
                <div class="carrossel-container">
                    <div class="about-content" data-aos="fade-up" data-aos-duration="1000">
                        <div class="carrossel" id="carrossel">
                            <div class="carrossel-item">
                                <img src="assets/img/skills/html.svg" height="100" width="250" alt="HTML5" />
                                <span class="language-name">HTML5</span>
                            </div>
                            <div class="carrossel-item">
                                <img src="assets/img/skills/css.svg" height="100" width="250" alt="CSS" />
                                <span class="language-name">CSS</span>
                            </div>
                            <div class="carrossel-item">
                                <img src="assets/img/skills/javascript.svg" height="100" width="250" alt="JS" />
                                <span class="language-name">JavaScript</span>
                            </div>
                            <div class="carrossel-item">
                                <img src="assets/img/skills/php.svg" height="100" width="250" alt="PHP" />
                                <span class="language-name">PHP</span>
                            </div>
                            <div class="carrossel-item">
                                <img src="assets/img/skills/oracle.svg" height="100" width="250" alt="ORACLE" />
                                <span class="language-name">Oracle</span>
                            </div>
                            <div class="carrossel-item">
                                <img src="assets/img/skills/mysql.svg" height="100" width="250" alt="MYSQL" />
                                <span class="language-name">MySQL</span>
                            </div>
                            <div class="carrossel-item">
                                <img src="assets/img/skills/bootstrap.svg" height="100" width="250" alt="BOOTSTRAP" />
                                <span class="language-name">Bootstrap</span>
                            </div>
                            <div class="carrossel-item">
                                <img src="assets/img/skills/laravel.svg" height="100" width="250" alt="LARAVEL" />
                                <span class="language-name">Laravel</span>
                            </div>
                            <div class="carrossel-item">
                                <img src="assets/img/skills/docker.svg" height="100" width="250" alt="DOCKER" />
                                <span class="language-name">Docker</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="services-row">
                    <div class="service-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="50">
                        <img class="service-card-img" src="assets/img/services/01.svg" alt="" />
                        <h3 class="service-card-title">UI/UX Design</h3>
                        <p>
                            Desenvolvendo interfaces de usuário intuitivas e visualmente atraentes que aprimoram as
                            experiências por meio de designs criativos e cuidadosos.
                        </p>
                    </div>

                    <div class="service-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <img class="service-card-img" src="assets/img/services/02.svg" alt="" />
                        <h3 class="service-card-title">Desenvolvimento FullStack</h3>
                        <p>
                            Construo sites e aplicações dinâmicas, combinando um front-end moderno com um back-end
                            sólido para experiências acessíveis e envolventes.
                        </p>
                    </div>

                    <div class="service-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <img class="service-card-img" src="assets/img/services/03.svg" alt="" />
                        <h3 class="service-card-title">Redação de Conteúdo</h3>
                        <p>
                            Criando conteúdo envolvente e focado no público que comunica ideias de forma eficaz e
                            entrega valor significativo.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section id="projects" class="projects">
        <div class="container container-lg">
            <div class="projects-title">
                <h2 class="title">Projetos</h2>
            </div>

            <div class="carousel-container">
                <button class="carousel-button prev" aria-label="Projeto anterior"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                    </svg>
                </button>

                <div class="carousel-track-container">
                    <ul class="carousel-track">
                        <li class="carousel-slide project-box">
                            <img class="project-img" src="assets/img/works/portfolio1.jpg"
                                alt="Sistema Escala de Serviço" />
                            <div class="project-mask">
                                <a href="https://github.com/keviinlucs/sistema-escala" target="_blank" class="project-link" aria-label="Ver no GitHub">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                                <div class="project-caption">
                                    <h5 class="white">Sistema Escala de Serviço</h5>
                                    <p class="white">PHP | Laravel | Oracle DB</p>
                                </div>
                            </div>
                        </li>
                        <li class="carousel-slide project-box">
                            <img class="project-img" src="assets/img/works/portfolio2.jpg" alt="Portfolio" />
                            <div class="project-mask">
                                <a href="https://github.com/keviinlucs/portfolio" target="_blank" class="project-link" aria-label="Ver no GitHub">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                                <div class="project-caption">
                                    <h5 class="white">Portfolio</h5>
                                    <p class="white">Web Development</p>
                                </div>
                            </div>
                        </li>
                        <li class="carousel-slide project-box">
                            <img class="project-img" src="assets/img/works/portfolio3.jpg" alt="Cosmic Sea" />
                            <div class="project-mask">
                                <a href="https://github.com/keviinlucs/cosmic-sea" target="_blank" class="project-link" aria-label="Ver no GitHub">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                                <div class="project-caption">
                                    <h5 class="white">Cosmic Sea</h5>
                                    <p class="white">UI/UX Design, Web Development</p>
                                </div>
                            </div>
                        </li>
                        <li class="carousel-slide project-box">
                            <img class="project-img" src="assets/img/works/portfolio1.jpg" alt="Projeto Exemplo (Teste)" />
                            <div class="project-mask">
                                <a href="#" target="_blank" class="project-link" aria-label="Ver no GitHub">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                    </svg>
                                </a>
                                <div class="project-caption">
                                    <h5 class="white">Projeto Exemplo (Teste)</h5>
                                    <p class="white">Para testar as setas</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <button class="carousel-button next" aria-label="Próximo projeto">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                    </svg>
                </button>
            </div>
        </div>
    </section>



    <section id="contact" class="contact">
        <div class="container">
            <div class="contact-title">
                <h2 class="title">Contato</h2>
            </div>
            <div class="contact-content">
                <p>
                    Me fale sobre o seu projeto
                    <br />
                    Vamos conversar e trabalhar juntos!
                </p>
            </div>

            <form class="contactForm" action="mail.php" method="POST" data-aos="zoom-in" data-aos-duration="1000">
                <input type="hidden" name="csrf_token" value="<?php echo $_ENV['CSRF_TOKEN'] ?? $_SESSION['csrf_token']; ?>">
                <div class="input-box">
                    <label for="name" class="visually-hidden">Nome</label>
                    <input type="text" id="name" name="name" placeholder="Nome" required />
                    <label for="email" class="visually-hidden">Email</label>
                    <input type="email" id="email" name="email" placeholder="Email" required />
                </div>

                <label for="message" class="visually-hidden">Mensagem</label>
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Sua mensagem" required></textarea>
                <div class="contact-button" data-aos="fade-zoom-in" data-aos-easing="ease-in-out" data-aos-delay="500"
                    data-aos-duration="1000">
                    <button href="#!" class="btn btn-red" name="submit" type="submit">
                        Enviar Mensagem
                    </button>
                </div>
            </form>
            <div class="response"></div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-row">
                <div class="social-links-row footer-social">
                    <a href="https://github.com/Kevinlucs" target="_blank" aria-label="GitHub">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                            aria-hidden="true" viewBox="0 0 24 24" data-testid="GitHubIcon">
                            <path
                                d="M12 1.27a11 11 0 00-3.48 21.46c.55.09.73-.28.73-.55v-1.84c-3.03.64-3.67-1.46-3.67-1.46-.55-1.29-1.28-1.65-1.28-1.65-.92-.65.1-.65.1-.65 1.1 0 1.73 1.1 1.73 1.1.92 1.65 2.57 1.2 3.21.92a2 2 0 01.64-1.47c-2.47-.27-5.04-1.19-5.04-5.5 0-1.1.46-2.1 1.2-2.84a3.76 3.76 0 010-2.93s.91-.28 3.11 1.1c1.8-.49 3.7-.49 5.5 0 2.1-1.38 3.02-1.1 3.02-1.1a3.76 3.76 0 010 2.93c.83.74 1.2 1.74 1.2 2.94 0 4.21-2.57 5.13-5.04 5.4.45.37.82.92.82 2.02v3.03c0 .27.1.64.73.55A11 11 0 0012 1.27">
                            </path>
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/in/keviinlucs/" target="_blank">
                        <svg class="MuiSvgIcon-root MuiSvgIcon-fontSizeMedium css-vubbuv" focusable="false"
                            aria-hidden="true" viewBox="0 0 24 24" data-testid="LinkedInIcon">
                            <path
                                d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-.5 15.5v-5.3a3.26 3.26 0 0 0-3.26-3.26c-.85 0-1.84.52-2.32 1.3v-1.11h-2.79v8.37h2.79v-4.93c0-.77.62-1.4 1.39-1.4a1.4 1.4 0 0 1 1.4 1.4v4.93h2.79M6.88 8.56a1.68 1.68 0 0 0 1.68-1.68c0-.93-.75-1.69-1.68-1.69a1.69 1.69 0 0 0-1.69 1.69c0 .93.76 1.68 1.69 1.68m1.39 9.94v-8.37H5.5v8.37h2.77z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div class="footer-copyright">
                    <p>&copy; Copyright Kevin Lucas 2026</p>
                </div>
            </div>
        </div>
    </footer>

    <div id="goToTop" class="goToTop">
        <a href="#home">
            <img src="assets/img/icons/arrow_up.svg" alt="Back to top" /></a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"
        integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="assets/js/main.js"></script>
    <script src="assets/js/carrossel.js"></script>
    <script type="text/javascript" src="assets/js/whitemode.js"></script>
    <script src="assets/js/carrossel-projects.js"></script>
</body>

</html>