import requests
import json

data = requests.get("https://pokeapi.co/api/v2/pokemon/ditto")
data = json.loads(data.text)  #converts json string to python format
print(data["moves"][0]["move"]["name"])