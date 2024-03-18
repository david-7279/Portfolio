#include <iostream>
#include <fstream>
#include <string>
using namespace std;

int main(){
  // Create and open the File
  ofstream MyFile("filename.txt");
  // Write to the file
  MyFile << "Files can be tricky, but it is fun enough!";
  // Close the file
  MyFile.close();

  string myText;
  // Read from the text File
  ifstream MyReadFile("filename.txt");
  // Read the file line by line
  while(getline (MyReadFile, myText)){
    cout << myText;
  }
  // Close the file
  MyReadFile.close();

  return 0;
}