vowels  = ['A', 'E', 'I', 'O', 'U', 'a', 'e', 'i', 'o', 'u']

def main():
    inputText = input("Input: ")
    outputText = ''.join(char for char in inputText if char not in vowels)
    print(f"Output: {outputText}")

main()


#def main():
#  inputText = input("Input: ")
#  for char in vowels: 
#     inputText = inputText.replace(char, '')
#  print("Output: " + inputText)
#main()