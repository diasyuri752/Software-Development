#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main (){
int num;

	printf("Os 100 primeiros numeros pares nao multiplos de 10 sao:\n");
	for(num=2;num<=250;num=num+2)
		if (num%10!=0)
			printf ("%d\n",num);

return(0);
}

