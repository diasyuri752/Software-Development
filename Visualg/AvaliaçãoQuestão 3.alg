Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 5/4/2021
Var
// Seção de Declarações das variáveis 
n1,n2, npar:inteiro


Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreval("Aviso: O primeiro número não pode ser maior que o segundo")
escreva("Informe o primeiro número:")
leia(n1)
escreva("Informe o segundo número:")
leia(n2)
se n1=n2 entao
escreva ("Os números são iguais, não há intervalo")
fimse
se n1>n2 entao
escreva("Números informados incorretamente, por favor, reexecute o algoritimo")
fimse
para npar de n1 ate n2 passo 1 faca
escreva(npar-2)
fimpara


Fimalgoritmo