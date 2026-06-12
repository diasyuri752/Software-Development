#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

int main (){
  
  //Variáveis
  int   qtdcarrosvend;
  float valortotalvenda, salariofinal;
  
  printf("\n Qual a quantidade de carros vendidos? \t");
  scanf("%d", &qtdcarrosvend);

  printf("\n Qual o valor total de vendas? \t");
  scanf("%f", &valortotalvenda);
  
  
  //Processamento
  salariofinal=500+(qtdcarrosvend*50)+(valortotalvenda*0.05);
 
  
  //Saída 
  printf("\n Salario do vendedor foi de R$%0.2f \n",salariofinal);
	
return(0);
}


