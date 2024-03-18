#include <iostream>
using namespace std;

int main(){

  int myAge = 20;
  int ageVoting = 18;

  cout << "Comparison operator:" << endl;
  cout << (myAge > ageVoting) << endl;

  cout << endl << "If Statement: " << endl;
  if (myAge > ageVoting) {
    cout << "You are old enough to vote!" << endl;

  } else {
    cout << "You are not old enough to vote!" << endl;
  }

  return 0;
}