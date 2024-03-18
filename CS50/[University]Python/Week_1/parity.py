def main():
    x = int(input("What's x? "))
    if isEven(x):
      print("Even")
    else:
       print("Odd")


def isEven(n):
   # return True if n % 2 == 0 else False
   return n % 2 == 0

main()