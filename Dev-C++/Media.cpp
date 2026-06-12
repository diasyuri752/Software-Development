#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

int media (float a,float b){
	
  //Media
  printf("%f",(a+b)/2);
}

int main (){
 
  //Variáveis
  float n1, n2;
  
  printf("\n Qual o primeiro numero? \t");
  scanf("%f", &n1);

  printf("\n Qual o segundo numero? \t");
  scanf("%f", &n2);
  
  //Saida
  printf("\n A media desses numeros e de\t");
  media(n1,n2); 

return(0);
 } 







