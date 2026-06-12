Algoritmo "TURMAEDISCIPLINA"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 3/15/2021
Var
// Seção de Declarações das variáveis 
nota : real
mediaICC_112, mediaLP1_112, mediaICC_114, mediaLP1_114 : real
contICC_112, contLP1_112, contICC_114, contLP1_114 : real
continua : caractere
turma : caractere
disciplina : caractere
Inicio
 mediaICC_112<-0 mediaLP1_112<-0 mediaICC_114<-0 mediaLP1_114<-0
 contICC_112<-0 contLP1_112<-0 contICC_114<-0 contLP1_114<-0
 escreva("Digite a turma")
 leia(turma)
 escreva("Digite a disciplina")
 leia(disciplina)
 escreva("Digite a nota")
 leia(nota)
 Se (turma="IN112") e (disciplina="LP1") então
 mediaLP1_112<- mediaLP1_112+nota
 contLP1_112<- contLP1_112+1
 fimse
 Se (turma="IN112") e (disciplina="ICC") então
 mediaICC_112<- mediaICC_112+nota
 contICC_112<- contICC_112+1
 fimse
 Se (turma="IN114") e (disciplina="LP1") então
 mediaLP1_114<- mediaLP1_114+nota
 contLP1_114<- contLP1_114+1
 fimse
 Se (turma="IN114") e (disciplina="ICC") então
 mediaICC_114<- mediaICC_114+nota
 contICC_114<- contICC_114+1
 Fimse
 escreva("Continua S/N")
 leia(continua)
enquanto (continua="S") faca
mediaICC_112<-mediaICC_112/contICC_112
mediaLP1_112<-mediaLP1_112/contLP1_112
mediaICC_114<-mediaICC_114/contICC_114
mediaLP1_114<-mediaLP1_114/contLP1_114
escreva("Média da 112 em LP1 ", mediaLP1_112)
escreva("Média da 112 em ICC ", mediaICC_112)
escreva("Média da 114 em LP1 ", mediaLP1_114)
escreva("Média da 114 em ICC ", mediaICC_114)

Fimalgoritmo