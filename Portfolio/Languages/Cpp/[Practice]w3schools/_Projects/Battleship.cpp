/*
In the following project I use a multi-dimensional array to represent a small game of Battleship. 
The game is played on a 4x4 grid, the player is prompted to enter a row and column number to guess the location of the ship. 
The game continues until the player has guessed the location of all four ships. 
The program keeps track of the number of guesses the player makes and displays the number of guesses when the game is over.
*/

#include <iostream>
using namespace std;

int main() {

  int hits = 0;
  int guesses = 0;

  bool shipLocation[4][4] = {
    {0, 1, 0, 0},
    {0, 0, 0, 1},
    {1, 0, 0, 0},
    {0, 0, 1, 0}
  };

  cout << "Welcome to the Battleship Game!" << endl;

  cout << endl << "Board:\n [0, 0] | [0, 1] | [0, 2] | [0, 3]\n [1, 0] | [1, 1] | [1, 2] | [1, 3]\n [2, 0] | [2, 1] | [2, 2] | [2, 3]\n [3, 0] | [3, 1] | [3, 2] | [3, 3]\n" << endl;
  
  while (hits < 4){
    int row, column;

    cout << endl << "Enter a row number between 0 and 3: ";
    cin >> row;

    cout << "Enter a column number between 0 and 3: ";
    cin >> column;

    if (shipLocation[row][column] == 1){
      cout << "You hit a ship!" << endl;
      hits++;
    } else {
      cout << "You missed!" << endl;
    }

    // Count the number of guesses the player played.
    guesses++;
  }

  cout << endl << "Congratulations! You sunk the ship!" << endl;
  cout << "You took " << guesses << " guesses to win the game." << endl;

  return 0;
}