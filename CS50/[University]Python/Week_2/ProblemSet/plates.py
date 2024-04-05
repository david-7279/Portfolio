def main():
    plate = input("Plate: ")
    if is_valid(plate):
        print("Valid")
    else:
        print("Invalid")


def is_valid(s):
  ...
  if len(s) <= 6 and s[0] != 0 and s[1] != 0 and s[2] != 0 and s[3] != 0 and s[4] != 0 and s[5] == s.isnumeric():
    return True
  else:
    return False

main()
# Maximum of 6 characters
# The first number cannot be 0
# Numbers only at the end
# No periods, spaces, or punctuation marks are allowed