#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

int prod (int x,int y){
 
 //Prod
return (x*y);
}
 
int main (){
 
 //Variáveis
 int saida;
 
 //Processamento
 saida=prod (10,12);

 //Saída
 printf ("\n A saida e: %d \t",saida);

return(0);
}
