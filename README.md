Clube POP - Sistema de Cadastro e Ativação de Usuários
Este projeto é uma aplicação web para gerenciamento de cadastros e envio de e-mails de ativação para novos usuários. Ele utiliza PHP para o backend, PHPMailer para envio de e-mails e um banco de dados MySQL para armazenamento das informações.

⚙️ Funcionalidades
Cadastro de Usuários:

Formulário para inserção de dados como CPF, nome completo, telefone, endereço, e-mail, entre outros.
Salvamento das informações no banco de dados.
Envio de E-mail de Ativação:

E-mail com link de ativação enviado automaticamente após o cadastro.
Mensagem personalizada com link gerado dinamicamente.
Confirmação de Cadastro:

Página de confirmação exibida ao acessar o link enviado no e-mail.
Validação do e-mail para ativação.
Ativação de Usuários:

Atualização do status do usuário para "Ativo" após a confirmação do cadastro.
Mensagem de sucesso exibida.


🛠️ Tecnologias Utilizadas
PHP: Linguagem principal do backend.
PHPMailer: Biblioteca para envio de e-mails via SMTP.
MySQL: Banco de dados para armazenamento de usuários.
Composer: Gerenciador de dependências PHP.


📂 Estrutura do Projeto
plaintext
Copiar código
├── config/
│   ├── connection.php      # Arquivo de configuração do banco de dados
├── models/
│   ├── UserModel.php       # Classe para interações com o banco de dados
├── controllers/
│   ├── UserController.php  # Classe de controle do fluxo do sistema
├── views/
│   ├── success.php         # Página de sucesso ao cadastrar
│   ├── confirmation.php    # Página de confirmação de cadastro
│   ├── active.php          # Página de ativação bem-sucedida
├── vendor/                 # Dependências gerenciadas pelo Composer
├── index.php               # Arquivo principal para roteamento
├── README.md               # Documentação do projeto


📋 Pré-requisitos
Antes de executar o projeto, certifique-se de ter:

PHP (versão 7.4 ou superior)
Composer instalado globalmente
Servidor MySQL configurado
Servidor Web (XAMPP, WAMP, ou similar)


🚀 Como Executar o Projeto

1. Clonar o Repositório
bash
Copiar código
git clone https://github.com/seu-usuario/clube-pop.git
cd clube-pop

2. Instalar Dependências
bash
Copiar código
composer install

3. Configurar o Banco de Dados
Crie um banco de dados MySQL chamado clube_pop.
Importe o arquivo schema.sql (se disponível) ou configure a tabela users manualmente:
sql
Copiar código
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cpf VARCHAR(11) NOT NULL,
    nome_completo VARCHAR(255) NOT NULL,
    fone VARCHAR(15),
    email VARCHAR(255) UNIQUE NOT NULL,
    cep VARCHAR(9),
    logradouro VARCHAR(255),
    numero VARCHAR(10),
    bairro VARCHAR(100),
    cidade VARCHAR(100),
    estado VARCHAR(2),
    status ENUM('Pendente', 'Ativo') DEFAULT 'Pendente',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP

);

4. Configurar o Arquivo de Conexão
Edite o arquivo config/connection.php com as credenciais do seu banco de dados:

php
Copiar código
private $host = 'localhost';
private $db_name = 'clube_pop';
private $username = 'seu_usuario';
private $password = 'sua_senha';

5. Configurar SMTP
Abra o arquivo controllers/UserController.php e configure as credenciais SMTP no método sendEmail():
php
Copiar código
$mail->Username = 'seu-email@gmail.com'; 
$mail->Password = 'sua-senha-de-aplicativo';

6. Iniciar o Servidor
Use o servidor embutido do PHP ou um ambiente como XAMPP:

bash
Copiar código
php -S localhost:8000
Acesse no navegador: http://localhost:8000

✉️ Envio de E-mail com PHPMailer
O sistema utiliza o serviço de SMTP do Gmail.
Certifique-se de gerar uma senha de aplicativo no Gmail para garantir a segurança.

📧 Contato
Para dúvidas ou sugestões, entre em contato com matheusl280402@gmail.com.
