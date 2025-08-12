# 11.	Crea una lista con 5 frutas, agrega una nueva y muestra la lista completa.

lista = ["manzana", "pera", "banana", "naranja", "sandia"]

print(lista)
nueva_fruta = str(input("Ingrese una fruta nueva: "))
lista.append(nueva_fruta)

print(lista)