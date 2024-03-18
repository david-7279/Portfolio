def main():
    name = input("What's is your name? ").strip().title()
    hello(name)
    
def hello(to = "World"):
    print("Hello, "+to)

main()