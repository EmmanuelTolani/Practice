age = 31
name= "Joe"
location = "CT"
age, name , location = 31, "Joe", "CT"
print(age,name,location)

# next section

#ALL CAPS MEANS IT SHOULD GLOBAL
#Use snake case in python 

__user_location__ = "CT"  # Please never change this
user_name = "Joe" 
print(__user_location__)


#none is pythons null

gender = None
#null = Null
print(gender)

#User Input 

user_name = input("What's your name? ")
user_location = input("Where do you live? ")
user_age = input("How old are you? ")
print(f"{user_name} is {user_age} years old and lives in {user_location}.")