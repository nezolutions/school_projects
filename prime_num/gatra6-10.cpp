#include "iostream"
using namespace std;

// Bil. Prima
bool isMain(int n) {
	if (n <= 1) {
		return false;
	}

	for (int i = 2; i * i <= n; i++) {
		if (n % i == 0) {
			return false;
		}
	}
	
	return true;
}

int main() {
	int n;
	cout << "Masukkan Bilangan\t: ";
	cin >> n;
	
	for (int i = 2; i <= n; i++) {
		if (isMain(i)) {
			cout << i << ", ";
		}
	}
	
	return 0;
}
