#include <stdio.h>

int main() {
    int bilangan;

	// INPUT
    printf("Masukkan bilangan bulat positif: ");
    scanf("%d", &bilangan);

	// PROCESS AND OUTPUT
    if (bilangan > 0) {
        if (bilangan % 2 == 0) {
            printf("Bilangan %d = GENAP\n", bilangan);
        } else {
            printf("Bilangan %d = GANJIL\n", bilangan);
        }
    } else {
        printf("Bilangan harus positif.\n");
    }

    return 0;
}

