#include <stdio.h>
#include <conio.h>
#include <stdlib.h>

int main (){
  
  //Variáveis
  char name[100];
 
  
  //Processamento
  printf ("\n Digite seu nome: \t");
  gets (name);
 
  
  //Saída
  printf ("\n Voce digitou seu nome, %s \t",name);

return(0);
}


/*Outros exemplos, caso bata dúvida em alguma coisa


#include <stdio.h>
#include <conio.h> 
int main ()
{
char Ch;
scanf("%c", &Ch);
printf ("Voce pressionou a tecla %c",Ch);
getch();
return(0);
}


#include <stdio.h>
#include <conio.h>
int main()
{
 char str[10] = "Pedro";
 printf("\n\nString: %s", str);
 printf("\nSegunda letra: %c", str[1]);
 str[1] = 'A';
 printf("\nAgora a segunda letra eh: %c", str[1]);
 printf("\n\nString resultante: %s", str);
 getch(); return(0);
}


#include <stdio.h>
#include <conio.h>
int main ()
{
 char str[100];
 printf ("Digite uma string: ");
 gets (str);
 printf ("\n\nVoce digitou %s",str);
 getch(); return(0);
}


*/

