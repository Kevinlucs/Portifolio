<?php
/**
 * Script de Envio de E-mail
 * 
 * Responsável por receber os dados do formulário de contato,
 * validar as entradas, verificar CSRF e enviar o e-mail via SMTP.
 */

require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;

// 1. Carregar variáveis de ambiente (.env)
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

session_start();

// 2. Verificar Método da Requisição
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo "Método não permitido.";
    exit;
}

// 3. Verificar Token CSRF (Segurança)
if (empty($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    http_response_code(403);
    echo "Erro de segurança (CSRF). Tente recarregar a página.";
    exit;
}

// 4. Sanitização e Validação dos Dados
$title = "Portfólio | Contato";
$name = trim(htmlspecialchars($_POST['name'] ?? ''));
$email = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL);
$message = trim(htmlspecialchars($_POST['message'] ?? ''));

// Validação do Nome
if (empty($name) || strlen($name) < 2) {
    http_response_code(400);
    echo "Nome inválido (mínimo 2 caracteres).";
    exit;
}

// Validação do Email
if (!$email) {
    http_response_code(400);
    echo "Email inválido.";
    exit;
}

// Validação da Mensagem
if (empty($message) || strlen($message) < 10) {
    http_response_code(400);
    echo "Mensagem muito curta (mínimo 10 caracteres).";
    exit;
}

// 5. Configuração do Corpo do E-mail (HTML)
$subject = "Portfólio | Contato";
$body = "
    <div style=\"font-family: Arial, sans-serif; max-width: 600px; margin: 20px auto; padding: 20px; border: 1px solid #eee; border-radius: 8px; background-color: #fafafa;\">
        <h2 style=\"color: #333; text-align: center;\">📩 Nova mensagem do seu portfólio</h2>
        <hr style=\"border: none; border-top: 1px solid #ddd; margin: 20px 0;\" />
        <p><strong>👤 Nome:</strong> {$name}</p>
        <p><strong>📧 E-mail:</strong> <a href=\"mailto:{$email}\">{$email}</a></p>
        <p><strong>📝 Mensagem:</strong></p>
        <div style=\"padding: 12px; background-color: #fff; border: 1px solid #ddd; border-radius: 6px;\">
            <p>" . nl2br($message) . "</p>
        </div>
        <hr style=\"border: none; border-top: 1px solid #ddd; margin: 20px 0;\" />
        <p style=\"text-align: center; font-size: 12px; color: #999;\">Este e-mail foi enviado via <a href=\"https://kevinlucas.com.br\">kevinlucas.com.br</a></p>
    </div>
";

// 6. Envio via PHPMailer / SMTP
$mail = new PHPMailer(true);

try {
  // Configurações do SMTP
    $mail->isSMTP();
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth = true;
    $mail->Host = $_ENV['MAIL_HOST'];
    $mail->Username = $_ENV['MAIL_USERNAME'];
    $mail->Password = $_ENV['MAIL_PASSWORD'];
    $mail->SMTPSecure = 'ssl';
    $mail->Port = $_ENV['MAIL_PORT'];

  // Destinatários
    // O e-mail DEVE ser enviado pelo seu próprio SMTP autenticado para não cair no spam.
    // Mas podemos mudar o NOME para o nome do cliente.
    $mail->setFrom($_ENV['MAIL_FROM'], $name . " (via Portfolio)");
    
    // Responder para: O e-mail do cliente (para quando você clicar em responder)
    $mail->addReplyTo($email, $name);
    
    // Enviar para: Você mesmo
    $mail->addAddress($_ENV['MAIL_TO']);
    
  // Conteúdo
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $body;

    $mail->send();

  // Retorno de Sucesso
    http_response_code(200);
    echo "Mensagem enviada com sucesso!";
    
} catch (Exception $e) {
    // Retorno de Erro
    http_response_code(500);
    echo "Erro ao enviar: {$mail->ErrorInfo}";
}
