<!DOCTYPE html>
<html lang="en">
<head>
    <title>RegistroDeConta</title>
    <script src="jQuery.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 600px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;

    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
.h3
{
    font-size: 20px;
    transform: translate(55%, 10%);
}

.t2
{
    transform: translate(0%, -10%);
}
.btback
{
    transform: translate(50%, -60%);
}
input{
    display: block;
    height: 40px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
table
{
    color: white;
}
.dat
{
    color:white;
}

    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form><table>
        <tr><td>Valor</td><td><input type="text" placeholder="Valor" name="valor" id="valor" class="dat"></td></tr>
        <tr><td>Data de Pagamento:</td><td><input type="date" id="data" name="data" class="dat"></td></tr>
        <tr>
            <td>Despesa:</td>
            <td>
                <select id="despesa" name="despesa" onchange="Change()" class="s1">
                    <option value="-">-</option>
                    <?php
                        $hostname="localhost";
                        $bancodedados="trabalho de lp4";
                        $usuario="root";
                        $senha="";
                        $conexao=mysqli_connect($hostname, $usuario, $senha, $bancodedados);
                        if(!$conexao)
                        {
                            echo("Erro de conexão.");
                        }

                        $sql=mysqli_query($conexao,"SELECT descricao FROM tipo_despesas");
                        $class='"s1"';
                        while($row=mysqli_fetch_assoc($sql))
                        {
                            echo"<option>".$row['descricao']."</option>";
                        }
                    ?>
                </select>
            </tr>  
            <tr><td><button type="button" onclick="AdicionarRegistro()" >Adicionar <br>Registro</button></td><td><button type="button" onclick="EmitirRelatorio()" >Emitir<br> Relatório</button></td></tr>
            <tr><td colspan="2">_________________________</td></tr>
            <tr><td><h4 class="h3">Funções de Administrador</h4></td></tr>
            <tr class="t1"><td>Nova Despesa:</td><td><input type="text" name="despesanova" id="despesanova" class="dat"></td></tr>
            <tr><td><button type="button" onclick="AdicionarDespesa()" >Adicionar <br>Despesa</button></td><td><button type="button" onclick="RemoverDespesa()" >Remover<br> Despesa</button></td></tr>
            <tr><td><button type="button" onclick="window.location.href = 'http://localhost/Trabalho%20de%20LP4/Login.html'" class="btback">Voltar</button></td></tr>
    </table>
    </form>
</body>
</html>
<script>
    function AdicionarRegistro()
    {
        valor=document.getElementById("valor").value;
        despesa=document.getElementById("despesa").value;
        data=document.getElementById("data").value;  
        if(document.getElementById("valor").value<1)
        {
            alert("Informe o valor.")
        }
        else if(document.getElementById("data").value<1)
        {
            alert("Informe a data.")
        }
        else if(document.getElementById("despesa").value=="-")
        {
            alert("Selecione o tipo de despesa.")
        }
        else{
        cpf=localStorage.getItem('cpf');
        id=localStorage.getItem('id');
    $.ajax
    ({
        url:'AdicionarRegistroV2.php',
        method:'post',
        data:{'valor':valor, 'despesa':despesa, 'data':data, 'cpf':cpf, 'id':id}
    }).done(function (echo)
    {
        alert(echo);
    })}}

    function EmitirRelatorio()
    {
        cpf=localStorage.getItem('cpf');
        $.ajax
    ({
        url:'EmitirRelatório.php',
        method:'post',
        data:{'cpf':cpf}
    }).done(function (echo)
    {
        alert(echo);
    })
    }

     function AdicionarDespesa()
    {
        cpf=localStorage.getItem('cpf');
        if(cpf!="123")
        {
            alert("Disponível somente para administrador.")
        }
        else{
        despesanova=document.getElementById("despesanova").value;
        if(document.getElementById("despesanova").value<1)
        {
        alert("Preencha o campo de Nova Despesa");
        }
        else
        {
            $('#despesa').append(new Option(despesanova, despesanova));
        $.ajax
    ({
        url:'AdicionarNovaDespesa.php',
        method:'post',
        data:{'despesanova':despesanova}
    }).done(function (echo)
    {
        alert(echo);
    })
    }}}

    function RemoverDespesa()
    { 
        cpf=localStorage.getItem('cpf');
        if(cpf!="123")
        {
            alert("Disponível somente para administrador.")
        }
        else{
        despesas=document.getElementById("despesa").value;
        id=localStorage.getItem('id');
        if(document.getElementById("despesa").value=="-")
        {
            alert("Selecione o tipo de despesa.");
        }
        else
        {      
        $.ajax
    ({
        url:'RemoverDespesa.php',
        method:'post',
        data:{'despesas':despesas, 'id':id}
    }).done(function (echo)
    {
        alert(echo);
        if(echo=="Despesa removida.")
        {
            $("#despesa option:selected").remove();
        }
    })
    }}}

    function Change()
    {
        despesa=document.getElementById("despesa").value;
        $.ajax
    ({
        url:'PegarDespesaID.php',
        method:'post',
        data:{'despesa':despesa}
    }).done(function (echo)
    {
        localStorage.setItem('id', echo);
    })
    }
</script>