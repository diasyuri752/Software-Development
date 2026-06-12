<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Form</title>
    <meta charset="UTF-8">
</head>
<body>
    <form method="POST" action="formaux.php">
        Nome:<input type="text" name="nome"><br><br>
        Idade:<input type="text" name="idade"><br><br>
        Qual carro que você mais gosta?
        <select name="carros">
            <option value="-">-</option>
            <option value="Ferrari">Ferrari</option>
            <option value="Mercedes">Mercedes</option>
            <option value="BMW">BMW</option>
        </select>
        <br><br>
        <button type="submit" onclick="Check(nome.value, idade.value, carros.value);">Enviar</button>
    </form>
    <script>
        function Check(nome, idade, carros)
        {
   
            //Script do nom
            if(nome=="")
            {
                 alert("Por favor, informe seu nome!")
                  document.Form.nome.focus();
            
            }
     
            //Script idade
            if(idade=="")
            {
                alert("Por favor, informe sua idade!")
                document.Form.idade.focus();
            
            }
            
            //Script carros
            if(carros=="-")
            {
                alert("Por favor, selecione uma opção de carro!")
                document.Form.carros.focus();
        
            }
            
        }
    </script>
</body>
</html>