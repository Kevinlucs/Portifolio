# Portfólio - Kevin Lucas

Este repositório contém o código-fonte do meu portfólio pessoal, desenvolvido para apresentar meus projetos, habilidades e experiências como Desenvolvedor Full Stack.

## 🚀 Tecnologias Utilizadas

O projeto foi construído utilizando as seguintes tecnologias:

### Front-end

- **HTML5**: Estruturação semântica do conteúdo.
- **CSS3**: Estilização personalizada, incluindo variáveis CSS e design responsivo.
- **JavaScript (Vanilla)**: Interatividade e lógica do lado do cliente.
- **[AOS (Animate On Scroll)](https://michalsnik.github.io/aos/)**: Biblioteca para animações ao rolar a página.
- **[Swiper.js](https://swiperjs.com/)**: Biblioteca para criação de carrosséis/sliders modernos.

### Back-end

- **PHP**: Linguagem utilizada para o processamento do formulário de contato.
- **[PHPMailer](https://github.com/PHPMailer/PHPMailer)**: Biblioteca para envio de e-mails de forma segura e eficiente.
- **[vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)**: Biblioteca para gerenciamento de variáveis de ambiente.

### Ferramentas

- **Composer**: Gerenciador de dependências para PHP.

---

## 📦 Como Rodar o Projeto Localmente

Siga os passos abaixo para executar o projeto em sua máquina local sem a necessidade de um servidor de hospedagem externo.

### Pré-requisitos

Certifique-se de ter instalado em sua máquina:

- [PHP](https://www.php.net/downloads) (Versão 7.4 ou superior recomendada)
- [Composer](https://getcomposer.org/download/)

### Passo a Passo

1.  **Clone o repositório** (caso ainda não tenha baixado):

    ```bash
    git clone https://github.com/Kevinlucs/Portfolio.git
    cd Portfolio
    ```

2.  **Instale as dependências do PHP**:
    Na raiz do projeto, execute o seguinte comando para instalar as bibliotecas necessárias (PHPMailer, Dotenv, etc.):

    ```bash
    composer install
    ```

3.  **Configuração de Ambiente (.env)**:
    O projeto utiliza um arquivo `.env` para configurações sensíveis, como credenciais de e-mail.
    - Certifique-se de que o arquivo `.env` existe na raiz do projeto.
    - Configure as variáveis de e-mail (`MAIL_HOST`, `MAIL_USERNAME`, `MAIL_PASSWORD`, etc.) com suas credenciais para que o formulário de contato funcione corretamente.

4.  **Inicie o Servidor Local**:
    Você pode utilizar o servidor embutido do PHP para rodar o projeto. Execute o comando abaixo na raiz do projeto:

    ```bash
    php -S localhost:8000
    ```

5.  **Acesse o Projeto**:
    Abra seu navegador e digite o seguinte endereço:
    [http://localhost:8000](http://localhost:8000)

Agora você deve ver o portfólio rodando localmente! 🎉

## 📧 Configuração de E-mail

Para que o formulário de contato funcione, é necessário configurar um servidor SMTP no arquivo `.env`. Exemplo de configuração para Gmail:

```env
MAIL_HOST=smtp.gmail.com
MAIL_USERNAME=seu-email@gmail.com
MAIL_PASSWORD="sua-senha-de-app"
MAIL_PORT=465
MAIL_FROM=seu-email@gmail.com
MAIL_FROM_NAME="Seu Nome"
MAIL_TO=email-que-recebera-contato@gmail.com
```

> **Nota**: Se estiver usando Gmail, você precisará gerar uma "Senha de App" nas configurações de segurança da sua conta Google, pois a senha normal não funcionará diretamente.
