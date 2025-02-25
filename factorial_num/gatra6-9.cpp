#include "iostream"
using namespace std;

// Faktorial
int main() {
	int n;
	cout << "Masukkan Bilangan\t: ";
	cin >> n;
	
	int f = 1;
	for (int i = 2; i <= n; i++) {
		f *= i;
	}
	
	cout << "Faktorial dari " << n << " adalah:  " << f << endl;
	
	return 0;
}
