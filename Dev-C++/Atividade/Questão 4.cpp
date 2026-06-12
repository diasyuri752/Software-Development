#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main (){
int num,soma;

	printf("A soma dos 50 primeiros numeros impares nao divisiveis por 5 e:\n\n");
	for(num=1;num<=123;num=num+2)
		if (num%5!=0) 
			soma+=num;
			printf ("%d\n",soma);

return(0);
}

