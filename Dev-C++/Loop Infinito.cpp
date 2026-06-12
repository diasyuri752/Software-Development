#include <stdio.h>
#include <conio.h>

int main ()
{

 int Count;
 char ch;
 printf(" Digite uma letra - <X para sair> ");
 for (Count=1;;Count++)
 {
 ch=getch();
 if (ch == 'X') break;
 printf("\nLetra: %c \n",ch);
 }
 getch();
 return(0);
}

