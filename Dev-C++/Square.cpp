#include <stdio.h>
#include <conio.h>
#include <stdlib.h>
 
int square (int x){
 
 //Square
 printf ("%d",(x*x));
}

int main (){

  //Variáveis
  int num;
  
  //Processamento
  printf ("\n Informe um numero: \t");
  scanf ("%d",&num);

  //Saída 
  printf ("\n O quadrado desse numero e: \t");
  square(num);

return(0);
}

