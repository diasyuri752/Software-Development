Algoritmo "Calculadora"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 3/29/2021
Var
// Seção de Declarações das variáveis 
peso, total, fator :real
altura, idade :inteiro
nivel_atividade, sexo :caractere

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreva ("Informe seu peso:")
leia (peso)
escreva ("Informe sua altura em cm:")
leia (altura)
escreva ("Informe seu sexo:")
leia (sexo)
escreva ("Informe seu nível de atividade, sendo, S-Sedentário, B-Baixo, M-Moderado, A-Alto e H-Muito alto:")
leia (nivel_atividade)
escreva ("Informe sua idade:")
leia (idade)
se nivel_atividade="S" entao
 fator<-1.2
 senão se nivel_atividade="B" entao
 fator<-1.375
 fimse
 se nivel_atividade="M" entao
 fator<-1.55
 senão se nivel_atividade="A" entao
 fator<-1.725
 fimse
 se nivel_atividade="H" entao
 fator<-1.9
fimse
se sexo="M" entao
 total<-fator*(66+(13.8*peso)+(5*altura)-(6.8*idade))
 senão se sexo="F" entao
 total<-fator*(655+(9.6*peso)+(1.8*altura)-(4.7*idade))
fimse
escreva ("Sua necessidade energética é de:")
escreva (total)


Fimalgoritmo