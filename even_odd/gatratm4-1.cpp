#include <stdio.h>

int main() {
   int n;
	
   printf("Masukkan Angka\t: ");
   scanf("%i", &n);
	
   if (n % 2 == 0) {
      printf("GENAP = %i", n);
   } else {
      printf("GANJIL = %i", n);
}
printf("\nPrgram selesai.");
}

