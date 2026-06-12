#include <stdio.h> 
#include <conio.h>
#include <stdlib.h>

int main(){
 
 
  //Variáveis
  int i, j;
  
  
  //Processamento
  printf("informe dois números(cada um sendo 0 ou 1): ");
  scanf("%d%d", &i, &j);
  
  
  //Saída
  printf("%d AND %d é %d\n", i, j, i && j);
  printf("%d OR %d é %d\n", i, j, i || j);
  printf("NOT %d é %d\n", i, !i);

return (0);
}

