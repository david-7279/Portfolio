#include <iostream>
using namespace std;

class Employee {
  // Private attribute
  private:
    int salary;

  // Protetecd attribute
  protected:
    int Salary;

  public:
    // Setter
    void setSalary(int s) {
      salary = s;
    }
    // Getter
    int getSalary() {
      return salary;
    }
};

class Programmer: public Employee{
  public:
    int bonus;
    void seSalary(int s){
      Salary = s;
    }
    int getSalary(){
      return Salary;
    }
};


int main() {
  Employee myObj;
  myObj.setSalary(50000);
  cout << "Employee salary: " << myObj.getSalary() << "€" << endl;

  Programmer myObj1;
  myObj1.seSalary(10000);
  myObj1.bonus = 1500;
  cout << "Programmer salary plus bonus: " << myObj1.getSalary() + myObj1.bonus << "€" << endl;
  return 0;
} 