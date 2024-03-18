#include <iostream>
#include <string>
using namespace std;

// Class
class Car {   
  private:
    string plateNumber; 
  public:
    string brand;
    string model;
    int year;
    int speed(int maxSpeed);

    void functionStringMazda(){
      std::cout << "Classes of cars | Mazda" << endl;
    }
  void functionStringToyota();
};

// Function
void Car::functionStringToyota(){
  std::cout << endl << "Classes of cars | Toyota" << endl;
}

int Car::speed(int maxSpeed){
  return maxSpeed;
}
  
int main() {

  Car carObj;

  carObj.functionStringMazda();
  Car carObj1;
  carObj1.brand = "Mazda";
  carObj1.model = "RX-7";
  carObj1.year = 1997;
  // carObj1.plateNumber = "ABC123"; Error because the plateNumber is private
  
  cout << carObj1.brand << " " << carObj1.model << " " << carObj1.year << " " << carObj1.speed(180) << "Km/h" << endl;

  carObj.functionStringToyota();
  Car carObj2;
  carObj2.brand = "Toyota";
  carObj2.model = "Trueno";
  carObj2.year = 1986;

  cout << carObj2.brand << " " << carObj2.model << " " << carObj2.year << " " << carObj2.speed(160) << "Km/h" << endl;
  return 0;
}