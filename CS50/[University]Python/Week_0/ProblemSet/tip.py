def main():
    dollars = dollars_to_float(input("How much was the meal? "))
    percent = percent_to_float(input("What percentage would you like to tip? "))
    tip = dollars * percent
    print(f"Leave ${tip:.2f}")


def dollars_to_float(d):
    removeDollarSign = d.replace("$", "")
    return float(removeDollarSign)


def percent_to_float(p):
    removePercentSign = p.replace("%","")
    return float(removePercentSign)/100

main()
