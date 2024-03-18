#include <iostream>
#include <string>
using namespace std;

int main() {

  struct {
    string brand;
    string model;
    int year;
  } myCar1, myCar2;
  
  myCar1.brand = "Mazda"; 
  myCar1.model = "RX-7";
  myCar1.year = 1997;

  myCar2.brand = "Toyota";
  myCar2.model = "Trueno";
  myCar2.year = 1986;

  cout << myCar1.brand << " " << myCar1.model << " " << myCar1.year << endl;
  cout << myCar2.brand << " " << myCar2.model << " " << myCar2.year << endl;

  return 0;
}