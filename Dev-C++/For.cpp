#include <stdio.h>
#include <conio.h>
int main ()
{
int count;
for (count=1;count<=5;count=count+1)
 printf ("%d\n ",count);
getch();
return(0);
}



#include <stdio.h>
#include <conio.h>
int main ()
{
int count;
for (count=0;;count=count+2)
 printf ("%d\n ",count);
getch();
return(0);
}



#include <stdio.h>
#include <conio.h>
int main ()
{
int count;
for(;count<=10;count=count+2)
 printf ("%d\n ",count);
getch();
return(0);
}



#include <stdio.h>
#include <conio.h>
int main ()
{
int count;
for(count=0;count<=10;)
 printf ("%d\n ",count);
getch();
return(0);
}



#include <stdio.h>
#include <conio.h>
int main ()
{
 for(;;)
 {
 // comandos;
 }
 getch();
 return(0);
}



#include <stdio.h>
#include <conio.h>
int main ()
{
int count;
for (count=10;count>=0;count=count-2)
 printf ("%d\n ",count);
getch();
return(0);
}



#include <stdio.h>
#include <conio.h>
int main ()
{
 char string[100]; /* String, até 99 caracteres */
 int i, cont;
 printf("\n\nDigite uma frase: ");
 gets(string); /* Le a string */
 printf("\n\nFrase digitada:\n%s", string);
 cont = 0;
 for (i=0; string[i] != '\0'; i=i+1)
 {
 if ( string[i] == 'c' ) /* Se for a letra 'c' */
 cont = cont +1; /* Incrementa o contador de caracteres*/
 }
 printf("\nNumero de caracteres c = %d", cont);
 getch();
 return(0);
} 




