Algoritmo "sexo2"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 3/15/2021
Var
// Seção de Declarações das variáveis 
idade:inteiro
sexo:caractere
i, contF, contM: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
  contF<-0
  contM<-0
  i<-0
  enquanto i<10 faca
  escreva("qual a sua idade?")
  leia (idade)
  escreva ("qual o sexo?")
  leia (sexo)
  se (idade>=18) e (sexo="F") entao
 contF<-contF+1
  senao
  se (sexo="M") entao
  contM<-contM+1
  fimse
  fimse
  i<-i+1
  fimenquanto
  escreva("O total de alunos maiores de idade e do sexo feminino e de:")
  escreval(contF)
  escreva("O total de alunos maiores de idade e do sexo masculino e de:")
  escreva (contM)

Fimalgoritmo