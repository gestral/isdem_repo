# 13.	Escriba una función que dado un entero positivo, devuelva una lista de sus divisores.

a:int = int(input("Ingrese un número: "))
b:int = a


def lista_divisores(num1, num2):
    while num2 > 0:
        if(num1 % num2 == 0):
            print(num2)
        num2 -= 1

lista_divisores(a, b)
