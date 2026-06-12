Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 5/4/2021
Var
// Seção de Declarações das variáveis 
n1, n2, n3, maior: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreva("Informe o primeiro número:")
leia(n1)
escreva("Informe o segundo número:")
leia(n2)
escreva("Informe o terceiro número:")
leia (n3)
se (n3>=n2) entao
maior<- n3 senao
maior<-n2
fimse
se (n2>=n1) entao
maior<- n2 senao
maior<-n1
fimse
se (n1>=n3) entao
maior<-n1 senao
maior<-n3
fimse
escreva("O maior número é:",maior)

Fimalgoritmo