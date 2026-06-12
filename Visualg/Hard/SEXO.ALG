Algoritmo "sexo"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 3/15/2021
Var
// Seção de Declarações das variáveis 
idade: inteiro
sexo: caractere
i, contador: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
contador<-0
para i de 1 ate 10 faca
escreva("Qual a sua idade?")
leia (idade)
escreva ("Qual o sexo?")
leia (sexo)
se(idade>=18) e (sexo="F") entao
contador<-contador+1
fimse
fimpara
escreva ("O total de alunos maiores de idade e do sexo feminino é:")
escreva(contador)

Fimalgoritmo