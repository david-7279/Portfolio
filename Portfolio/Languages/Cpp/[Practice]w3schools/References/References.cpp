#include <iostream>
#include <string>
using namespace std;

int main(){

  string food = "Pizza";
  string &meal = food;

  cout << "Value of food: " << food << endl;
  cout << "Value of meal: " << meal << endl;

  cout << endl << "Memory address" << endl;
  cout << "Address of food: " << &food << endl;
  cout << "Address of meal: " << &meal << endl;


  string *ptr = &food;
  cout << endl << "Pointers" << endl;
  cout << "Address of food (Pointer): " << ptr << endl;
  cout << "Value of food (Pointer): " << *ptr << endl;

  cout << endl << "Change the value of food" << endl;
  (*ptr) = "Hamburger";
  cout << "New Value of food is: " << food << endl;
  cout << "New Value of food (Pointer) is: " << *ptr << endl;

  return 0;
}