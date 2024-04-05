validCoins = [50, 25, 10, 5]
amountDue = 50
print(f"Amount Due: {amountDue}")

while True:
    insertCoin = int(input("Insert coin: "))

    if insertCoin in validCoins:
        amountDue -= insertCoin
        if amountDue > 0:
            print(f"Amount Due: {amountDue}") # This prevents the program from printing a negative "Amount Due".
    else:
        print(f"Invalid coin. Amount Due: {amountDue}")

    if amountDue <= 0:
        print(f"Change Owed: {abs(amountDue)}") # abs(amountDue) will return the value of amountDue if amountDue is positive or zero, and the negation of amountDue if amountDue is negative.
        break