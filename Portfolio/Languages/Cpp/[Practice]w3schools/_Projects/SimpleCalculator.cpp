#include <iostream>
using namespace std;

int main(){

  int x, y;
  int sum, difference, multiplication, division, modulus, increment, decrement;

  cout << "Type a value: ";
  cin >> x;

  cout << "Type a value: ";
  cin >> y;

  sum = x + y;
  difference = x - y;
  multiplication = x * y;
  division = x / y;
  modulus = x % y;
  increment = ++x;
  decrement = --x;

  cout << "\nThe sum of " << x << " and " << y << " is " << sum << endl;
  cout << "The difference of " << x << " and " << y << " is " << difference << endl;
  cout << "The multiplication of " << x << " and " << y << " is " << multiplication << endl;
  cout << "The division of " << x << " and " << y << " is " << division << endl;
  cout << "The modulus of " << x << " and " << y << " is " << modulus << endl;
  cout << "The increment of " << x << " is " << increment << endl;
  cout << "The decrement of " << x << " is " << decrement << endl;

  return 0;
}