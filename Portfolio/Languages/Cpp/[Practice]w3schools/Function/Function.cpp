#include <iostream>
#include <string> // Add the missing include directive for the <string> library

using namespace std;

void functionString(){
  cout << "Function" << endl;
}

string functionName(string lName){
  lName = lName + "Vieira";
  cout << "My last name is: " << lName << endl;
  return lName;
}

void functionCountry (string country = "Japan"){
  cout << endl << "You visit " << country << " in your vacation" << endl;
}

void functionYear(int year = 2023){
  cout << "in the last summer " << year << endl;
}

int functionAge(int age){
  cout << endl << "What is the year you born: ";
  cin >> age;

  return 2023 - age;
}

int functionMoney(int money){
  cout << endl << "How much money is in your bank account: ";
  cin >> money;

  return money;
}

int functionTripCost(int price){
  cout << "How much the trip cost: ";
  cin >> price;
  
  return price;
}

void functionSwap(string &nome1, string &nome2){
  string temp = nome1;
  nome1 = nome2;
  nome2 = temp;
}


int main(){

  int age, money;
  float price;
  string lName;

  functionString();
  lName = functionName(lName);
  string nome2 = "Soares ";
  functionSwap(lName, nome2);
  cout << "Now your last name is: " << lName << endl;

  functionCountry();
  functionYear();
  age = functionAge(age); // Assign the return value of functionAge to age variable
  cout << "You visit when you were " << age << " years old" << endl; // Use the age variable

  money = functionMoney(money);
  price = functionTripCost(price);
  cout << "You pay for " << price << "€ for the trip, and You have " << money - price << "€, in your bank account" << endl;

  return 0;
}