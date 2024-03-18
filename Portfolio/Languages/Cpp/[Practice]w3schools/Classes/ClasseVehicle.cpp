#include <iostream>
#include <string>
using namespace std;

class Vehicle{ 
  public:
    string brand = "Mazda";
    
    void honk(){
      cout << "Raaatatata, Raaatatata!" << endl;
    }
};

class Car: public Vehicle{
  public:
    string model = "RX-7";
};

int main() {
  Car myCar;
  myCar.honk();

  cout << myCar.brand + " " + myCar.model << endl;
  
  return 0;
}