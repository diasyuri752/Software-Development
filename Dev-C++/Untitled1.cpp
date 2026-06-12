#include <stdio.h>
main (void)
{
ch exit
FILE *fp;

fp=fopen ("exemplo.bin","wb");
if (!fp)
 {
 printf ("Erro na abertura do arquivo. Fim de programa");
 exit (1);
 }
...
return 0;
}

