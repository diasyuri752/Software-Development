Algoritmo "salariovendedor"
// Disciplina   : [Linguagem e Lógica de Programação]
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 3/9/2021
Var
// Seção de Declarações das variáveis 
nomevendedor: caractere
qtdcarrosvend: inteiro
valortotalvenda, salariofinal: real
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
escreva ("qual o nome do vendedor?")
leia (nomevendedor)
escreva("qual a quantidade de carros vendidos?")
leia (qtdcarrosvend)
escreva ("qual o valor total de vendas?")
leia (valortotalvenda)
salariofinal<- 500+(qtdcarrosvend*50)+(valortotalvenda*0.05)
escreva ("salario do vendedor ")
escreva (nomevendedor)
escreva (" foi de")
escreva (salariofinal)
Fimalgoritmo