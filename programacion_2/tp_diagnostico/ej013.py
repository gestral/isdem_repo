# 13.	Escriba una función que dado un entero positivo, devuelva una lista de sus divisores.

a:int = int(input("Ingrese un número: "))
b:int = a

while b > 0:
    if(a % b == 0):
        print(b)
    b -= 1
