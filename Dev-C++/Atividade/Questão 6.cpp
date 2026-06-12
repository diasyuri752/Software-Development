#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#include <string.h>

int main(){
int tamanho;
int ns, s;
int eb, s2;
char str[80];

	printf ("Informe uma string: ");
	gets (str);
	
	tamanho=strlen (str);
	printf ("\nA string informada tem:\n");
	printf("\nTamanho: %d\n\n",tamanho);

	ns=0;
	for (s=0;str[s]!='\0';s=s+1)
		if (str[s]=='a') 
			ns=ns+1; 
			printf("Numero de caracteres a: %d\n\n",ns);

	eb=1;
	for (s2=0;str[s2]!='\0';s2=s2+1)
		if (str[s2]==' ') 
			eb=eb+1; 
			printf("Numero de palavras: %d",eb);

return(0);
}

