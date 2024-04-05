students = {
    "Hermione" : "Gryffindor",
    "Harry" : "Gryffindor", 
    "Ron" : "Gryffindor", 
    "Draco" : "Slytherin",
}
#for student in students:
#    print(student, students[student], sep = ", ")

# Create a dictionary
studentsCollection = [
    {"name": "Hermione", "house": "Gryffindor", "patrouns": "Otter"},
    {"name": "Harry", "house": "Gryffindor", "patrouns": "Stag"},
    {"name": "Ron", "house": "Gryffindor", "patrouns": "Jack Russell Terrier"},
    {"name": "Draco", "house": "Slytherin", "patrouns": None},
]

for student in studentsCollection:
    print(student["name"], student["house"], student["patrouns"], sep=", ")