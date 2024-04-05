def main():
  #printColumn(3)
  #printRow(4)
  printSquare(3)


def printColumn(height):
  print("#\n" * height, end="")


def printRow(width):
  print("?" * width)


def printSquare(size):
  #for i in range(size):
  #  print("#" * size)

  # For each row in square
  for i in range(size):

    # For each brick in row
    for j in range(size):

      # Print brick
      print("#", end="")
    print()

main()