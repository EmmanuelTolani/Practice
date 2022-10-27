# print("user lands on facebook")
# user_logged_in = False
# print("user logs on facebook")
# print("status", user_logged_in)
# user_logged_in = not user_logged_in
# print("user logs off facebook")
# print("status", user_logged_in)
# user_logged_in = not user_logged_in
# print("status", user_logged_in)

## if and else statement conditionals 

age = 21
if age >= 18:
    print("You are able to get into the club")
    if age >= 21:
        print("And you can also drink and pop bottles in the club")
    else: 
        print("Sorry but you cannot drink")
else:
    print("Sorry you are not old enough to get in the club")


# Ternery

sex = "F"
print("Man") if sex == "M" else print("Woman")