#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main(){
int num[10],ncount;

	for (ncount=0;ncount<10;ncount++){ 
		printf("\nInforme o valor do numero %d:\t",ncount+1);
		scanf("%d",&num[ncount]);}

 	printf("\n\nOs numeros informados com a ordem inversa sao:\n");
	for (ncount=9;ncount>=0;ncount--) 
		printf("\n%d - %d\n",ncount+1,num[ncount]);

return 0;
}

