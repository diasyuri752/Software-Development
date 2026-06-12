#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int Leitura(int a[5][3],int b[5][3],int i,int i2){

	printf("Informe valores para os elementos da matriz A:\n\n");
	
	for (i=0;i<6;i++)
	for (i2=0;i2<4;i2++){
		printf("\nElemento [%d][%d]=",i,i2);
		scanf("%d",&a[i][i2]);}
		
	printf("Informe valores para os elementos da matriz B:\n\n");
	
	for (i=0;i<6;i++)
	for (i2=0;i2<4;i2++){
		printf("\nElemento [%d][%d]=",i,i2);
		scanf("%d",&a[i][i2]);}
}

int Soma(int a[5][3],int b[5][3],int i,int i2){
int c[6][4];

	printf("\nA soma das matrizes A e B:\n");
	
	for(i2=0;i2<4;i2++)
		for(i=0;i<6;i++){
			c[i][i2]=a[i][i2]+b[i][i2];
			printf("[%d]", c[i][i2]);}
}

int main (){
int Leitura();
int Soma();
int a[5][3],b[5][3],c[5][3],i,i2;
	
	Leitura();
	Soma();

return(0);
}

