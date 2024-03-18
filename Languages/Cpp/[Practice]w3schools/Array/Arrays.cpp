#include <iostream>
using namespace std;

#define N 3
int main(){

  string cars[N] = {"Mazda", "Toyota", "Ford"};
  int myNumbers[N] = {10, 20, 30};

  cout << "Array of Cars: " << endl;
  cout << "First car of the Array is: " << cars[0] << endl;
  cout << "Second car of the Array is: " << cars[1] << endl;
  cout << "Third car of the Array is: " << cars[2] << endl;

  cout << endl << "Change the Third Array of the cars: " << endl;
  cars[2] = "Nissan"; 
  cout << "Third car of the Array is now: " << cars[2] << endl;

  cout << endl << "Loop of Array: " << endl;
  for(int i = 0; i < N; i++){
    cout << "Car " << i << " is: " << cars[i] << endl;
  }
  for (int j : myNumbers) {
    cout << "Number is: " << j << endl;
  }

  cout << endl << "Size of Array: " << endl;
  cout << "Number of elements in the Array of Cars is: " << sizeof(cars) / sizeof(cars[0]) << endl;
  cout << "Number of elements in the Array of Numbers is: " << sizeof(myNumbers) / sizeof(int) << endl;


  string letters[2][4] = {
    {"a", "b", "c", "d"},
    {"e", "f", "g", "h"}
  };
  cout << endl << "Multi-Dimensional Arrays: " << endl;

  for (int row = 0; row < 2; row++){
    for (int column = 0; column < 4; column++){
        cout << "Letter at position (" << row << "," << column << ") is: " << letters[row][column] << endl;
    }
  }  

  return 0;
}