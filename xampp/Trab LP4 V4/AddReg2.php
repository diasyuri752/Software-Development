<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/all.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css'>
<script src="jquery-3.6.1.js"></script> 
<style>
	@import url('https://fonts.googleapis.com/css?family=Raleway:400,700');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;	
	font-family: Raleway, sans-serif;
}

body {
	background: linear-gradient(90deg, #C7C5F4, #776BCC);		
}

.container {
	display: flex;
	align-items: center;
	justify-content: center;
	min-height: 100vh;
	color: black;

}

.screen {		
	background: linear-gradient(90deg, #5D54A4, #7C78B8);		
	position: relative;	
	height: 600px;
	width: 750px;	
	box-shadow: 0px 0px 24px #5C5696;
}

.screen__content {
	z-index: 1;
	position: relative;	
	height: 100%;

}

.screen__background {		
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 0;
	-webkit-clip-path: inset(0 0 0 0);
	clip-path: inset(0 0 0 0);	
	background-color: white;
}

.screen__background__shape {
	transform: rotate(45deg);
	position: absolute;
	background-color: #D4D3E8;
}

.screen__background__shape1 {
	height: 520px;
	width: 520px;
	background: #FFF;	
	top: -50px;
	right: 120px;	
	border-radius: 0 72px 0 0;
}

.screen__background__shape2 {
	height: 220px;
	width: 220px;
	background: #6C63AC;	
	top: -172px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape3 {
	height: 540px;
	width: 190px;
	background: linear-gradient(270deg, #5D54A4, #6A679E);
	top: -24px;
	right: 0;	
	border-radius: 32px;
}

.screen__background__shape4 {
	height: 400px;
	width: 200px;
	background: #7E7BB9;	
	top: 420px;
	right: 50px;	
	border-radius: 60px;
}

.login {
	width: 320px;
	padding: 30px;
	padding-top: 156px;
	transform: translate(0%, 0%);
}
.login2 {
	width: 320px;
	padding: 30px;
	padding-top: 156px;
	transform: translate(130%, -87%);
}

.login__field {
	padding: 20px 0px;	
	position: relative;	
}

.login__icon {
	position: absolute;
	top: 30px;
	color: #7875B5;
}

.login__input {
	border: none;
	border-bottom: 2px solid #D1D1D4;
	background: none;
	padding: 10px;
	padding-left: 24px;
	font-weight: 700;
	width: 75%;
	transition: .2s;
}

.login__input:active,
.login__input:focus,
.login__input:hover {
	outline: none;
	border-bottom-color: #6A679E;
}

.login__submit {
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
}

.login__submit:active,
.login__submit:focus,
.login__submit:hover {
	border-color: #6A679E;
	outline: none;
}

.button__icon {
	font-size: 24px;
	margin-left: auto;
	color: #7875B5;
}

.social-login {	
	position: absolute;
	height: 140px;
	width: 160px;
	text-align: center;
	bottom: 0px;
	right: 0px;
	color: #fff;
}

.social-icons {
	display: flex;
	align-items: center;
	justify-content: center;
}

.social-login__icon {
	padding: 20px 10px;
	color: #fff;
	text-decoration: none;	
	text-shadow: 0px 0px 8px #7875B5;
}

.social-login__icon:hover {
	transform: scale(1.5);	
}
.bt
{
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
	transform: translate(0%, -140%); 
}
.bt2
{
	background: #fff;
	font-size: 14px;
	margin-top: 30px;
	padding: 16px 20px;
	border-radius: 26px;
	border: 1px solid #D4D3E8;
	text-transform: uppercase;
	font-weight: 700;
	display: flex;
	align-items: center;
	width: 100%;
	color: #4C489D;
	box-shadow: 0px 2px 2px #5C5696;
	cursor: pointer;
	transition: .2s;
	transform: translate(-80%, -130%); 
}
.h
{
	transform: translate(13%, 120%); 
}
.h2
{
	transform: translate(85%, -600%); 
}
.Valor
{
	transform: translate(0%, -350%);
}
.i
{
	transform: translate(0%, -260%); 
}
.Data
{
	transform: translate(0%, -200%);
}
.TD
{
	transform: translate(0%, -150%);
}
.TD2
{
	transform: translate(0%, -100%);
}
.hzin
{
	transform: translate(0%, -595%);
}
.bts
{
	transform: translate(0%, -8%);
}
</style>
</head>
<body>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<h1 class="h2">Gerenciamento</h1>
				<h2 class="i">Inserção de registro de despesa</h2>
				<div class="Valor">
					Valor:<input type="text" class="login__input" placeholder="Somente números" id="valor">
				</div>
				<div class="Data">
					Data de Pagamento: <input type="date" class="login__input" id="data" >
				</div>
				<div class="TD">
					Tipo de Despesa: <select id="despesa" name="despesa" onchange="mudanca()" class="login__input">
                        <option value="-">-</option>
                        <?php
                            include("Conexao.php");

                            //Comando 
                            $sql=mysqli_query($conexao,"SELECT Descricao FROM tipo_despesas");
                            while($row=mysqli_fetch_assoc($sql))
                            {
                                echo"<option>".$row['Descricao']."</option>";
                            }
							session_start();
							$cpf= $_SESSION['cpf'];
                            $sql=mysqli_query($conexao,"SELECT Descricao FROM despesa_pessoal WHERE CPF_Pessoa='$cpf'");
                            while($row=mysqli_fetch_assoc($sql))
                            {
                                echo"<option>".$row['Descricao']."</option>";
                            }
							
                        ?>
                    </select>
						</div>
				<button type="button" class="bt" onclick="AddRegistro()">
					<span class="button__text">Adicionar Registro de Despesa</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
				<button type="button" class="bt"  onclick="window.location.href = 'Emitir2.php'">
					<span class="button__text">Emitir Relatório de Gastos</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
			</form>
			<!------------------------------------------------------------------------------------>
			<form class="login2">
				<h2 class="hzin">Funções de Despesa</h2>
				<h2 class="i">Adição e Remoção de Tipos de Despesas</h2>
				<div class="TD2">
					Novo Tipo de Despesa: <input type="text" class="login__input" id="nw" placeholder="Nova Despesa" >
					<br>Tipo de Despesa (Remover): <select id="despesa2" name="despesa" onchange="mudanca2()" class="login__input">
                        <option value="-">-</option>
                        <?php
                            //Comando 
							session_start();
							$cpf=$_SESSION['cpf'];
                            $sql=mysqli_query($conexao,"SELECT Descricao FROM despesa_pessoal WHERE CPF_Pessoa='$cpf'");
                            while($row=mysqli_fetch_assoc($sql))
                            {
                                echo"<option>".$row['Descricao']."</option>";
                            }
                        ?>
                    </select>
						</div>
						<div class="bts">
				<button type="button" class="bt" onclick="AddDespesa()">
					<span class="button__text">Adicionar Tipo de Despesa</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
				<button type="button" class="bt" onclick="RemDespesa()">
					<span class="button__text">Remover Tipo de Despesa</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>	
				<button type="button" class="bt2" onclick="window.location.href = 'Index.html'">
					<span class="button__text">Voltar</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>
						</div>		
			</form>
			<!------------------------------------------------------------------------------------>
			<div class="social-login">
			</div>
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</body>
</html>
<script>
num=localStorage.getItem('log');
	if(num!=1)
	{
		window.location.href = 'Index.html'; 
	}
	else
	{
		localStorage.setItem('log',0);
	}
	cpf=localStorage.getItem('cpf');

    function mudanca()
    {
        despesa=document.getElementById("despesa").value;
        $.ajax
    ({
        url:'PegarID.php',
        method:'post',
        data:{'despesa':despesa}
    }).done(function (resposta)
    {
        localStorage.setItem('id', resposta);
    })
    }
	function mudanca2()
    {
        despesa=document.getElementById("despesa2").value;
        $.ajax
    ({
        url:'PegarID2.php',
        method:'post',
        data:{'despesa':despesa}
    }).done(function (resposta)
    {
        localStorage.setItem('id', resposta);
    })
    }

    function AddRegistro()
    {
        valor=document.getElementById("valor").value;  
        despesa=document.getElementById("despesa").value;
        data=document.getElementById("data").value;
        if(valor<1)
        {
            alert("Informe o valor.")
        }
        else if(data<1)
        {
            alert("Informe a data.")
        }
        else if(despesa=="-")
        {
            alert("Selecione o tipo de despesa.")
        }
        else{
        cpf=localStorage.getItem('cpf');
        id=localStorage.getItem('id');
    $.ajax
    ({
        url:'AddRegistro2.php',
        method:'post',
        data:{'valor':valor, 'despesa':despesa, 'data':data, 'cpf':cpf, 'id':id}
    }).done(function (resposta)
    {
        alert(resposta);
    })}}

    function AddDespesa()
    {
	
        novad=document.getElementById("nw").value;
        if(novad=="")
        {
        alert("Preencha o campo de Nova Despesa");
        }
        else
        {
            $('#despesa').append(new Option(novad, novad));
			$('#despesa2').append(new Option(novad, novad));
			localStorage.setItem('tp',novad);
        $.ajax
    ({
        url:'AddDespesa2.php',
        method:'post',
        data:{'novad':novad, 'cpf':cpf}
    }).done(function (resposta)
    {
        alert(resposta);
    })
    }}

    function RemDespesa()
    {
		cpf=localStorage.getItem('cpf');
        despesas=document.getElementById("despesa2").value;
        id=localStorage.getItem('id');
        if(despesas=="-")
        {
            alert("Por favor, informe o tipo de despesa.");
        }
        else
        {      
        $.ajax
    ({
        url:'RemDespesa2.php',
        method:'post',
        data:{'despesas':despesas, 'id':id, 'cpf':cpf}
    }).done(function (resposta)
    {
        alert(resposta);
        if(resposta=="Despesa removida com sucesso!")
        {
            $("#despesa2 option:selected").remove();
			tp=localStorage.getItem('tp');
			$("#despesa").val(tp);
			$("#despesa option:selected").remove();
        }
    })
    }}
</script>