# 3) Un vendedor recibe un sueldo base de $60.000 mensuales. Su esquema de comisiones
# funciona de la siguiente manera:
# • Si realiza hasta 20 ventas en el mes, recibe una comisión de $2.000 por cada venta.
# • Si supera las 20 ventas, las ventas adicionales se consideran "Ventas Premium" y
# se pagan a $3.500 cada una.
# • Si el total de ventas supera las 30, se le otorga un premio por productividad de
# $15.000 adicionales al total.
# Desarrolle un programa que solicite la cantidad de ventas realizadas y calcule el sueldo
# total, detallando el básico, el pago por ventas normales, por ventas premium y el premio
# (si aplica).


sueldo_base = 60000
cant_ventas = int(input("Ingrese la cantidad de ventas realizadas: "))

if cant_ventas <= 20:
    pago_ventas_normales = cant_ventas * 2000
    pago_ventas_premium = 0
    premio = 0
elif cant_ventas > 20 and cant_ventas <= 30:
    pago_ventas_normales = 20 * 2000
    pago_ventas_premium = (cant_ventas-20) * 3500
    premio = 0
elif cant_ventas > 30:
    pago_ventas_normales = 20 * 2000
    pago_ventas_premium = (cant_ventas-20) * 3500
    premio = 15000
    
print(f"Sueldo base: {sueldo_base}")
print(f"Pago por ventas normales: {pago_ventas_normales}")
print(f"Pago por ventas premium: {pago_ventas_premium}")
print(f"Premio: {premio}")
print(f"Sueldo total: {sueldo_base + pago_ventas_normales + pago_ventas_premium + premio}")