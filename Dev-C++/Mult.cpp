#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

int mult (float a, float b,float c){

  //Mult
  printf ("%f",a*b*c);
}

int main (){

  //Variáveis
  float x,y;

  //Processamento
  printf("\n Informe o valor de x: \t");
  scanf("%f", &x);
  printf("\n Informe o valor de y: \t");
  scanf("%f", &y);

  //Saída
  printf("\n O resultado da multiplicacao desses valores com *3 e: \t");
  mult (x,y,3);

return(0);
}

