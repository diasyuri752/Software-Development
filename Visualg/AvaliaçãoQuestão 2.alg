Algoritmo "semnome"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 5/4/2021
Var
// Seção de Declarações das variáveis 

n1, n2, n3, media:real
recuperacao, provafinal: real

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
escreva("Informe a sua primeira nota:")
leia(n1)
escreva("Informe a sua segunda nota:")
leia(n2)
escreva("Informe a sua terceira nota:")
leia(n3)
media<- (n1+n2+n3)/3
escreval ("Média:",media)
recuperacao<- 10-media+2
provafinal<- 10-media
se media>=7 entao
escreva("O aluno está aprovado")
senao
se media<=4.9 entao
escreva("O aluno está em recuperacao e precisa de",recuperacao," pontos para passar")
senao
se media<=6.9 entao
escreva("O aluno está em prova final e precisa de",provafinal," pontos para passar")
fimse
fimse
fimse
Fimalgoritmo