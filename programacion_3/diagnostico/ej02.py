# 2) Una librería vende cuadernos universitarios a $5.000 la unidad. Para incentivar la
# venta mayorista, ofrece un descuento del 10% si el cliente compra 5 unidades o más.
# Desarrolle un programa que solicite la cantidad de cuadernos a comprar y calcule:
# • El subtotal.
# • El monto del descuento aplicado (si corresponde).
# • El precio final que debe abonar el cliente.

cant_unidades = int(input("Ingrese la cantidad de cuadernos a comprar: "))
precio_unitario = 5000
descuento = 10

subtotal = cant_unidades * precio_unitario
descuento_aplicado = subtotal * descuento / 100

if cant_unidades >= 5:
    print(f"Subtotal: {subtotal - descuento_aplicado}") 
else:
    print(f"Subtotal: {subtotal}")

