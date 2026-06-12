#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

int main(){
 

  //Variáveis
  int i, j;



  //Processamento
  printf("\nEntre com dois números inteiros: ");
  scanf("%d%d", &i, &j);



  //Saída
  printf("\n%d == %d -> %d\n", i, j, i==j);
  printf("\n%d != %d -> %d\n", i, j, i!=j);
  printf("\n%d <= %d -> %d\n", i, j, i<=j);
  printf("\n%d >= %d -> %d\n", i, j, i>=j);
  printf("\n%d < %d -> %d\n", i, j, i<j);
  printf("\n%d > %d -> %d\n", i, j, i>j);

return(0);
}


//0 para falso e 1 para verdadeiro
