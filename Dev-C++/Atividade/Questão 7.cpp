#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int Leitura(int a[20],int b[30],int i){


	for (i=0;i<20;i++){ 
		printf("\nInforme o valor do numero %d:\t",i+1);
		scanf("%d",&a[i]);}
		
	for (i=0;i<30;i++){ 
		printf("\nInforme o valor do numero %d:\t",i+1);
		scanf("%d",&b[i]);}
}

int Juncao(int a[20],int b[30],int i,int c[50],int k){

	k=0;
	for(int i=0;i<20;i++){
		c[k]=a[i];
		k++;}

	for(int i=0;i<30;i++){
		c[k]=b[i];
		k++;}

	printf("\nA juncao dos dois vetores e: %d[%d]",c[k]);
}

int main (){
int Leitura();
int Juncao();
int a[20],b[30],c[50],i,k;
	
	Leitura();
	Juncao();

return(0);
}



