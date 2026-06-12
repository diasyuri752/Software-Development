#include <stdio.h>
#include <stdlib.h>
#include <conio.h>

int main(){
int matriz[1][1], il,ic,soma,soma2,soma3,soma4,mult1,mult2;
int matriz2[1][1], il2,ic2,soma5,soma6,soma7,soma8,mult3,mult4,teco;

	printf("Informe valores para os elementos da matriz A:\n\n");

	for(il=0;il<2;il++)
	for(ic=0;ic<2;ic++){
		printf("\nElemento [%d][%d]=",il,ic);
		scanf("%d",&matriz[il][ic]);}
	
	printf("\n\nInforme valores para os elementos da matriz B:\n\n");

	for(il2=0;il2<2;il2++)
	for(ic2=0;ic2<2;ic2++){
		printf("\nElemento [%d][%d]=",il2,ic2);
		scanf("%d",&matriz2[il2][ic2]);}
                        
	soma=matriz[0][0]+matriz2[0][0];
	soma2=matriz[0][1]+matriz2[0][1];
	soma3=matriz[1][0]+matriz2[1][0];
	soma4=matriz[1][1]+matriz2[1][1];
	printf("\n\nA soma das duas matrizes:\n[%d] [%d]\n\n[%d] [%d]",soma,soma2,soma3,soma4);

	mult1=matriz[0][0]*matriz2[0][0]+matriz[0][1]*matriz2[1][0];
	mult2=matriz[0][0]*matriz2[0][1]+matriz[0][1]*matriz2[1][1];
	mult3=matriz[1][0]*matriz2[0][0]+matriz[1][1]*matriz2[1][0];
	mult4=matriz[1][0]*matriz2[0][1]+matriz[1][1]*matriz2[1][1];
	printf("\n\nA multiplcacao das duas matrizes:\n[%d] [%d]\n\n[%d] [%d]",mult1,mult2,mult3,mult4);

	soma5=matriz[0][0]+matriz[1][1];
	printf("\n\nA soma da diagonal primaria da matriz A:\n%d",soma5);
	soma6=matriz[0][1]+matriz[1][0];
	printf("\n\nA soma da diagonal secundaria da matriz A:\n%d",soma6);



	soma7=matriz2[0][0]+matriz2[1][1];
	printf("\n\nA soma da diagonal principal da matriz B:\n%d",soma7);
	soma8=matriz2[0][1]+matriz2[1][0];
	printf("\n\nA soma da diagonal secundaria da matriz B:\n%d",soma8);
	
return(0);
}

