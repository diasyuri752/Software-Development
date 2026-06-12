Algoritmo "Gás"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 3/29/2021
Var
// Seção de Declarações das variáveis 
consumo, total: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreva ("Informe seu consumo mensal de gás em m³:")
leia (consumo)
se consumo <= 7 entao
 total <- consumo*6.1
 senão se consumo <= 23 entao
 total <- (consumo-7)*7.9 + 7*6.1
 fimse
 se consumo <=83 entao
 total <- (consumo-23)*9.5 + 16*7.9 + 7*6.1
 senão se total <- (consumo-83)*10.1 + 60*9.5 + 16*7.9 + 7*6.1
fimse
escreva ("Sua tarifa de gás é de:R$")
escreva (total)



Fimalgoritmo