#include <iostream>
using namespace std;

int main() {

  int i = 0, j = 0;

  cout << "While Statement: " << endl;

  while (i < 5){
    cout << i << endl;
    i++;
  }

  cout << endl << "Do While Statement: " << endl;

  do {
    cout << j << endl;
    j++;
  } while (j < 5);

  cout << endl << "For Statement: " << endl;

  for (int z = 0; z < 5; z++){
    cout << z << endl;
  }

  cout << endl << "For [Nested] Statement: " << endl;

  for (int inner = 0; inner <= 2; inner ++) {
    cout << "\nOuter" << endl;
      for (int outer = 0; outer <= 2; outer ++) {
        cout << "Inner: " << inner << endl;
      }
  }

  // BREAK and CONTINUE
  cout << endl << "Break and Continue Statements: " << endl;
  for (i = 0; i < 10; i++){
    cout << i << endl;
    if(i == 5){
      break;
    }
  }

  return 0;
}