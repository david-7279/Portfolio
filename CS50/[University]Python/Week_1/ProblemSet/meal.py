def main():
  time = input("What time is it? ")
  timeConverted = convert(time)

  if 7 <= timeConverted <= 8:
    print("Breakfast time")
  elif 12 <= timeConverted <= 13:
    print("Lunch time")
  elif 18 <= timeConverted <= 19:
    print("Dinner time")


def convert(time):
  hours, minute = time.split(":")
  return (float(hours) + float(minute)) / 60


if __name__ == "__main__":
  main()
