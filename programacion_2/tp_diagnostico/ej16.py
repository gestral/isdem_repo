# 16.	Crea una función que reciba una lista y devuelva la cantidad de elementos.

lista = []

a = 0
while a != "x":
    print("\n" * 100)
    print("Ingrese X para salir.")
    a = input("Número: ")
    if(a != "x"):
        lista.append(a)

print("\n" * 100)
print(f"Cantidad de elementos en la lista: {len(lista)}")