#def main():
#  x = getInt()
#  print(f"x is {x}")

#def getInt():
#  while True:
#    try:
#      x = int(input("What's x? "))
#    except ValueError:
#      print("x is not an integer")
#    else:
#      return x

#main()



def main():
  x = getInt("What's x? ")
  print(f"x is {x}")


def getInt(prompt):
  while True:
    try:
      return int(input(prompt))
    except ValueError:
      pass # Handling the error without doing anything


main()