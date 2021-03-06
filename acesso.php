<!DOCTYPE html>
<html lang="pt-br">

	<head>
		<title> Bazarro.com </title>
		<meta charset="utf-8"/>
		<meta name="description" content="E-commerce, tudo quanto é produto bizarro que você queira comprar.">
		<meta name="keywords"    content="Vendas, bazarro,bizarro, engraçado, compras, e-commerce">
		<meta name="author"      content="Thomaz Picelli, Gabriel e Rhenan Cocev">
		
		<link rel="stylesheet" type="text/css" href="css/padrao.css"/> <!-- CSS TOPO PADRÃO -->
		<link rel="stylesheet" type="text/css" href="css/acesso.css"/> <!-- CSS ACESSO DE PRODUTOS -->
		<link rel="shortcut icon" type="image/x-icon" href="Img/Sociais/favicon.png"/> <!-- ÍCONE NAVEGADOR -->
		
	</head>

	<body>
		<header>
                    <?php include 'headerOut.php' ?>
                </header>
		
		<section>
			<div class="login">
				<p>Já tenho cadastro</p></br>
                                <form action = "validaLogin.php" method = "post">
					E-mail:<input type="email" placeholder="E-mail" name="campoemail"/></br>
					Senha:<input type="password" placeholder="Senha" name="camposenha"/></br></br>
                                        Deseja salvar os seus dados?<input name="salvar" type="checkbox"/></p>
					<input type="image" src="Img/Sociais/enviar.png" alt="Submit Form"/>
				</form>
			</div>

			<div class="signin">
				<p>Ainda não tenho cadastro</p></br>
                                <form method="POST" action="validaCadastro.php">
				
					<p>Dados de Identificação</p>
                                        <b style="color: red;font-size: 14pt;"> * </b>Nome Completo:<input type="text" placeholder="Nome" name="nome" required></br>
                                        <b style="color: red;font-size: 14pt;"> * </b>Data de Nascimento:<input type="date" placeholder="Data de Nascimento"name="datanasc" required/></br>
					<b style="color: red;font-size: 14pt;"> * </b>Sexo:<input type="radio" name="sexo" value="Masculino"name="sexo" required/>Masculino
                			     <input type="radio" name="sexo" value="Feminino"name="sexo" required/>Feminino</br>
					<b style="color: red;font-size: 14pt;"> * </b>RG:<input type="text" placeholder="RG" name="RG" required /></br>
					<b style="color: red;font-size: 14pt;"> * </b>CPF:<input type="text" placeholder="CPF"name="CPF" required/></br>
					Celular:<input type="text" placeholder="Celular"name="cel"/></br>
					<b style="color: red;font-size: 14pt;"> * </b>Telefone:<input type="text" placeholder="Telefone"name="tel" required/></br>
                                        <b style="color: red;font-size: 14pt;"> * </b>E-mail:<input type="email" placeholder="E-mail"name="email" required/></br>
					<b style="color: red;font-size: 14pt;"> * </b>Senha: <input type="password" placeholder="Senha"name="senha1" required/></br>
					<b style="color: red;font-size: 14pt;"> * </b>Confirma sua Senha:<input type="password" placeholder="Senha"name="senha2" required/></br>
					
					<p> Meu Endereço</p>
					<b style="color: red;font-size: 14pt;"> * </b>Endereço:</br><input type="text" placeholder="Endereço"name="endereco" required />,
                                        <b style="color: red;font-size: 14pt;"> * </b><input type="number" placeholder="Número"name="num" required/></br>
					<input type="text" placeholder="Complemento"name="comp"/></br>
					<b style="color: red;font-size: 14pt;"> * </b>CEP:<input type="address" placeholder="CEP"name="CEP" required/></br>
                                        <b style="color: red;font-size: 14pt;"> * </b>Cidade:<input type="text" placeholder="Cidade"name="cidade" required/></br>
					Estado:<select name="estado" required> 
						<option value="estado">Selecione o Estado</option>
						<option value="ac">Acre</option> 
						<option value="al">Alagoas</option>
						<option value="am">Amazonas</option> 
						<option value="ap">Amapá</option> 
						<option value="ba">Bahia</option> 
						<option value="ce">Ceará</option> 
						<option value="df">Distrito Federal</option> 
						<option value="es">Espírito Santo</option> 
						<option value="go">Goiás</option> 
						<option value="ma">Maranhão</option> 
						<option value="mt">Mato Grosso</option> 
						<option value="ms">Mato Grosso do Sul</option> 
						<option value="mg">Minas Gerais</option> 
						<option value="pa">Pará</option> 
						<option value="pb">Paraíba</option> 
						<option value="pr">Paraná</option> 
						<option value="pe">Pernambuco</option> 
						<option value="pi">Piauí</option> 
						<option value="rj">Rio de Janeiro</option> 
						<option value="rn">Rio Grande do Norte</option> 
						<option value="ro">Rondônia</option> 
						<option value="rs">Rio Grande do Sul</option> 
						<option value="rr">Roraima</option> 
						<option value="sc">Santa Catarina</option> 
						<option value="se">Sergipe</option> 
						<option value="sp">São Paulo</option> 
						<option value="to">Tocantins</option> 
					</select>

                                        </br><input type="image" src="Img/Sociais/enviar.png" alt="Submit Form"value="cadastrar"name="cadastrar"/>
				</form>
			</div>
		</section>
		
		<footer>
                    <?php include 'footer.php' ?>
                </footer>		
	</body>
</html>