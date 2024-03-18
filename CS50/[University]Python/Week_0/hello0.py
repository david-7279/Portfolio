# Ask the user for their name | # Remove whitespaces | # Capatitalize the user's name
name = input("What's is your name? ").strip().title()

# Split user's name into first name and last name
first, last = name.split()

# Say hello to the user
print ("Hello, "+first)
# print ("Hello,",name)
# print (f"Hello, {name}")