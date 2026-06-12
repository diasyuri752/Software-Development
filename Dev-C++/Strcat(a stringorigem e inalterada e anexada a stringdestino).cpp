#include <stdio.h>
#include <string.h>
int main ()
{
char str1[100],str2[100];
printf ("Entre com uma string: ");
gets (str1);
strcpy (str2,"texto qualquer");
strcat (str2,str1); //str2 armazenara' texto qualquer + o conteudo de str1
printf ("\n\n%s",str2);

return(0);
}

