#include <stdio.h>

int main() {
	double xc, xf, xr, xk;
	
	// INPUT
	printf("Masukkan jumlah suhu (c)\t: ");
	scanf("%lf", &xc);
	
	// PROCESS
	xf = (xc * 9/5) + 32;
	xr = xc * 4/5;
	xk = xc + 273.15;
	
	// OUTPUT
	printf("\n(f)\t: %.2lf", xf);
	printf("\n(r)\t: %.2lf", xr);
	printf("\n(k)\t: %.2lf", xk);
	
	return 0;
}
