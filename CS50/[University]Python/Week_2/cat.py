i = 3
# While Loop
while i != 0:
    print("while: meow")
    i = i - 1

# While Loop New Logic
j = 0
while j < 3:
    print("while new logic: meow")
    j += 1

# For Loop
for i in [0, 1, 2]:
    print("for loop: meow")

for i in range(3):
    print("for loop new logic: meow")

print("meow\n" * 3, end="") # end="" removes the new line character

while True:
    n = int(input("What's n? "))
    if n > 0:
        break
    
for _ in range(n):
    print("meow")