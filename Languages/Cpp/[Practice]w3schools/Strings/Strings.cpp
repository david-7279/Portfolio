#include <iostream>
#include <string>
using namespace std;

int main() {

  string word;
  string fullName;

  cout << "Type your full name: ";
  getline(cin, fullName);
  cout << "Your full name is: " << fullName << endl;

  int lengthWithoutSpaces = 0;
  for (char space : fullName) {
    if(space != ' ')
      lengthWithoutSpaces++;
  }
  cout << "Lenght of the name is: " << lengthWithoutSpaces << endl;

  cout << endl << "Type a word: ";
  cin >> word;
  cout << "The first letter of the word is: " << word[0] << endl;
  
  word[0] = 'X';
  cout << "The first letter of the word is now: " << word[0] << endl << "And the word is: " << word << endl;

  return 0;
}