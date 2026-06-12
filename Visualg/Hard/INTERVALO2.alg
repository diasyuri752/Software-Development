Algoritmo "Intervalo2"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 3/29/2021
Var
// Seção de Declarações das variáveis 
num1, num2, maior, menor, i, diferenca:inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreva ("Digite o primeiro número:")
leia (num1)
escreva ("Digite o segundo número:")
leia (num2)
se num1=num2 entao
 escreva ("os números são iguais, não há intervalo")
fimse
 se num1>num2 entao
 maior <- num1
 menor <- num2
 senao se
 maior <- num2
 menor <- num1
fimse
diferenca <- maior-menor
para i de 1 até diferenca-1 passo 1 faça
 escreva (menor+i)
fimpara

Fimalgoritmo