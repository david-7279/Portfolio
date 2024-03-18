#include <iostream>
using namespace std;

int main(){

  int time = 21;

  if (time < 10){
    cout << "Good morning!";
  } else if (time < 20){
    cout << "Good day!" << endl;
  } else {
    cout << "Good evening!" << endl;
  }

  string result = (time < 18) ? "Good day" : "Good evening!" ;
  cout << result;

  return 0;
}