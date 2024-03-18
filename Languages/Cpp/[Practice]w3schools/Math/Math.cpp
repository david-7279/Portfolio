#include <iostream>
#include <cmath>
using namespace std;

int main(){

  float x, y;

  cout << "Type a value: ";
  cin >> x;

  cout << "Type a value: ";
  cin >> y;

  cout << endl << "Max value between the first and the seconde value is: " << max(x, y) << endl;
  cout << "Min value between the first and the seconde value is: " << min(x, y) << endl;

  cout << endl << "Square root value of the first value is: " << sqrt(x) << endl;
  cout << "Square root value of the second value is: " << sqrt(y) << endl;

  return 0;
}