#include <iostream>
using namespace std;

int main() {
	int main[8] = {5,2,1,6,7,4,8,3};
	int i, j;

	for(i=0; i<8; ++i) 
		for(j=0; j<8-1; ++j) {
			if(main[i] < main[j]) {
				int temp;
				temp = main[j];
				main[j] = main[i];
				main[i] = temp;
			}
		}
	for(i=0; i<8; ++i)  {
		cout << main[i] << endl << endl;
	}

	return 0;
}

