#include <stdio.h>
#include <stdlib.h>
#include <conio.h>
#include <string.h>

void Leitura(char a[10][80],char b[8][80],int i){

	printf("Informe 8 nomes para a string A:\n\n");
	for (i=0;i<9;i++)
		gets(a[i]);
	
	printf("\nInforme 8 nomes para a string B:\n\n");
	for (i=0;i<9;i++)
		gets(b[i]);
}

void Juncao(char a[10][80],char b[10][80],char c[160],int i){

	printf("\nA soma das matrizes A e B:\n\n");
	for(i=0;i<180;i++){
		c[i]=a[i]+b[i];
		printf("[%d]",c[i]);}
}

void Ordem(char c[160]){
int x,y,z;	
char aux[160];	
	
	for (x=0;x<9;x++){
		for (y=x+1;y<9;y++){
			z=strcmp(c[x],c[y]);
			if(z>0){
				strcpy(aux,c[x]);
				strcpy(c[x],c[y]);
				strcpy(c[y],aux);
			}
		}
	}	
	
	printf("\nAs matrizes em ordem crescente:\n")
	for(x=0;x<=9;x++)
		printf("%d\n",c[x]);
}

int main (){
void Leitura();
void Juncao();
void Ordem();
char a[90],b[90],c[180];
int i,x,y,z,aux[160];
	
	Leitura();
	Juncao();
	Ordem();

return(0);
}

