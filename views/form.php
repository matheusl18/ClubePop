<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clube POP - Adesão</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
        <div class="form-wrapper">
            <h1>Adesão ao Clube POP</h1>
            <form method="POST" action="index.php?action=store">
                <label for="cpf">CPF</label>
                <input type="text" id="cpf" name="cpf" required>
                
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome_completo" required>
                
                <label for="fone">Telefone</label>
                <input type="tel" id="fone" name="fone" required>
                
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required>
                
                <label for="cep">CEP</label>
                <input type="text" id="cep" name="cep" required>
                
                <label for="logradouro">Logradouro</label>
                <input type="text" id="logradouro" name="logradouro" required>
                
                <label for="numero">Número</label>
                <input type="text" id="numero" name="numero" required>
                
                <label for="bairro">Bairro</label>
                <input type="text" id="bairro" name="bairro" required>
                
                <label for="cidade">Cidade</label>
                <input type="text" id="cidade" name="cidade" required>
                
                <label for="estado">Estado</label>
                <select id="estado" name="estado" required>
                    <option value="" disabled selected>Selecione</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RR">Roraima</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SE">Sergipe</option>
                    <option value="SP">São Paulo</option>
                </select>
                
                <button type="submit">Solicitar Adesão</button>
            </form>
        </div>
    </div>
</body>
</html>
