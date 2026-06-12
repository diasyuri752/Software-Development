Algoritmo "para-faca"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 3/13/2021
Var
// Seção de Declarações das variáveis 
nome: caractere
idade, i, n: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
n<- 0
para i de 0 ate 10 passo 1 faca
escreva("digite a idade da pessoa ")
leia(idade)
se idade >= 18 entao
n<-n+1
fimse
fimpara
escreva ("a quantidade de pessoas com 18 anos ou mais é:")
escreva (n)

Fimalgoritmo