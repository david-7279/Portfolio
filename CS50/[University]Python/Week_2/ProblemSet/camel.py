def main():
    camelCase = input("cameCase: ")
    print("snake_case:", snake_case(camelCase))

def snake_case(name):
    return ''.join(['_' + i.lower() if i.isupper() else i for i in name])
    # Join - Concatenates all the elements into a single string. 
    # If a character is uppercase, it adds an underscore '_' before the character and converts it to lowercase 'lower()'. 
    # If a character is lowercase, it adds the character as it is.

main()