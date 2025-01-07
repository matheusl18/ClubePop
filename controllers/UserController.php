<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../models/UserModel.php';
require_once __DIR__ . '/../config/connection.php';

class UserController {
    private $model;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->model = new UserModel($db);
    }

    public function store() {
        $data = $_POST;

        if ($this->model->create($data)) {
            $this->sendEmail($data['email']);
            include __DIR__ . '/../views/success.php';
        }
    }

public function sendEmail($email) {
    $activationLink = "http://localhost/ClubePop/index.php?action=confirm&email=" . urlencode($email);
    $mail = new PHPMailer(true);

    try {
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'clubpop811@gmail.com';
        $mail->Password = 'ltah yskc nzuv imgj'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuração de codificação
        $mail->CharSet = 'UTF-8'; 
        $mail->Encoding = 'base64'; 

        // Configurações do e-mail
        $mail->setFrom('clubpop811@gmail.com', 'Clube POP');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = "Clube POP - Ativação de Cadastro";
        $mail->Body = "Estamos muito felizes pelo seu interesse em usar nosso cartão, agora falta pouco. Basta você clicar no link abaixo e confirmar os seus dados cadastrais.<br><br><a href=\"$activationLink\">Clique aqui para ativar seu cadastro</a>";

        $mail->send();
    } catch (Exception $e) {
        echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
    }
}
    public function confirm() {
        $email = $_GET['email'];
        $user = $this->model->getUserByEmail($email);
        include __DIR__ . '/../views/confirmation.php';
    }

    public function activate() {
        $email = $_POST['email'];
        if ($this->model->activate($email)) {
            include __DIR__ . '/../views/active.php';
            exit;
        }
    }
    
}
?>
