def main():
    number = get_number()
    meow(number)


def get_number():
    while True:
        number = int(input("What's n? "))
        if number > 0:
            break
    return number
            

def meow(number):
    for _ in range(number):
        print("meow")

main()