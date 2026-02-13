const form = () => {
    const contactForm = document.querySelector(".contactForm"),
        responseMessage = document.querySelector(".response");

    contactForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        const form = e.target;
        const formData = new FormData(form);

        responseMessage.classList.add("open");
        responseMessage.textContent = "Please wait...";

        // Debug removido para produção

        try {
            const response = await fetch("mail.php", {
                method: "POST",
                body: formData,
            });

            const result = await response.text();

            if (!response.ok) {
                responseMessage.textContent = "Error: " + result;
                return;
            }

            responseMessage.textContent = result;

            // Feedback visual e reset do form
            setTimeout(() => {
                responseMessage.classList.remove("open");
                form.reset();
            }, 3000);
        } catch (error) {
            console.error("Erro no envio do formulário:", error);
            responseMessage.textContent = "Erro ao enviar o formulário.";
        }
    });
};

export default form;
